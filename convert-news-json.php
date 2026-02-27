<?php

$inputFile  = 'news-data-raw.json';
$outputFile = 'news-data.json';

$data = json_decode(file_get_contents($inputFile), true);

$clean = [];
$usedIds = [];
$autoId = 1000; // start high to avoid clashes

foreach ($data as $item) {

    // Resolve ID
    $id = null;
    if (isset($item['id']) && is_numeric($item['id'])) {
        $id = (int)$item['id'];
    }

    if (!$id || in_array($id, $usedIds)) {
        $id = $autoId++;
    }

    $usedIds[] = $id;

    // Resolve banner image
    $bannerImage =
        $item['bannerImage']
        ?? $item['image']
        ?? 'assets/images/placeholder.jpg';

    // Resolve content
    $content =
        trim($item['content'] ?? '')
        ?: trim($item['subtitle'] ?? '')
        ?: 'Details will be updated soon.';

    $clean[] = [
        "id" => $id,
        "title" => trim($item['title'] ?? 'Untitled Event'),
        "bannerImage" => $bannerImage,
        "content" => $content,
        "images" => [$bannerImage]
    ];
}

file_put_contents(
    $outputFile,
    json_encode($clean, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
);

echo "✅ Conversion complete. Total records: " . count($clean);
