<?php
if (!isset($_GET['query'])) {
    exit;
}

$query = strtolower(trim($_GET['query']));

$jsonData = file_get_contents('news-data.json');
$events = json_decode($jsonData, true);

foreach ($events as $event) {

    if (strpos(strtolower($event['title']), $query) !== false) {

        echo '
        <div class="col-lg-4 col-md-6 col-12 d-flex">
            <a href="news-page.php?id='.$event['id'].'" class="event">

                <img src="'.htmlspecialchars($event['bannerImage']).'"
                     alt="'.htmlspecialchars($event['title']).'">

                <div class="content">
                    <div class="title">
                        '.htmlspecialchars($event['title']).'
                    </div>
                </div>

            </a>
        </div>
        ';
    }
}
?>
