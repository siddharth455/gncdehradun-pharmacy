<?php
require "common/header.php";

$id = isset($_GET['id']) ? $_GET['id'] : null; // Fetch the ID from the URL
if ($id !== null) {
  $newsData = json_decode(file_get_contents('news-data.json'), true);
  // Check if the ID is valid
  if ($id >= 0 && $id < count($newsData)) {
    $selectedNewsItem = $newsData[$id]; // Get the news item by ID

    // Determine whether to display one image or three images
    $totalItems = count($newsData);
    $displaySingleImage = $id >= $totalItems - 47;

?>
    <div class="banner-area about" style="background-image: url(assets/images/news-update-head.webp);">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="page-title-content">
            <h1><?= htmlspecialchars($selectedNewsItem['name']) ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5 mb-5">
      <div class="news-content">
        <h1><?= htmlspecialchars($selectedNewsItem['title']) ?></h1>
        <h3><?= htmlspecialchars($selectedNewsItem['eventdate']) ?></h3>
        <p><?= htmlspecialchars($selectedNewsItem['about']) ?></p>
        <?php if ($displaySingleImage) { ?>
          <div class="row">
            <div class="col-lg-12 col-12">
              <img src="<?= htmlspecialchars($selectedNewsItem['image']) ?>" alt="Image">
            </div>
          </div>
        <?php } else { ?>
          <div class="row">
            <div class="col-lg-8 col-12">
              <img src="<?= htmlspecialchars($selectedNewsItem['image']) ?>" alt="Image 1">
            </div>
            <div class="col-lg-4 col-12">
              <div class="row">
                <div class="col-lg-12 col-12">
                  <img src="<?= htmlspecialchars($selectedNewsItem['image3']) ?>" alt="Image 3">
                </div>
                <div class="col-lg-12 col-12">
                  <img src="<?= htmlspecialchars($selectedNewsItem['image2']) ?>" alt="Image 2">
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <h2><?= htmlspecialchars($selectedNewsItem['subtitle']) ?></h2>
        <p><?= htmlspecialchars($selectedNewsItem['description']) ?></p>
      </div>
    </div>
<?php
  } else {
    echo "News item not found.";
  }
} else {
  echo "Invalid request.";
}

require "common/footer.php";
?>