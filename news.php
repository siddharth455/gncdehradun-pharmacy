<?php
// Assuming you have a JSON file named 'news-data.json' in the same directory as your PHP script.
$jsonData = file_get_contents('news-data.json');
$events = json_decode($jsonData, true);
?>
<?php require "common/header.php" ?>
<style>
    .event {
        border: 1px solid #000;
        padding: 5PX;
        margin-bottom: 1rem;
        /* Add space between the rows */
        border-radius: 10px;
    }

    .event img {
        width: 100%;
        height: auto;
        border-top-left-radius: 10PX;
        border-top-right-radius: 10px;
    }

    .event .title {
        font-weight: bold;
    }

    .event .date {
        color: grey;
    }
</style>
<div class="banner-area about" style="background-image: url(assets/images/news-update-head.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>News &amp; Updates</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="imageboxe" style="border-style: solid; padding: 5px;">
                    <img src="assets/images/gnc-news-update-image.webp" alt="">


                </div>
            </div>
            <div class="col-lg-6">
                <div class="imageboxe" style="border-style: solid; padding: 5px;">
                    <img src="assets/images/gnc-news-update-image-awards.webp" alt="" style="height: 78vh;">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
<div class="row">
    <?php foreach ($events as $index => $event) : ?>
        <?php if ($index < 2) : ?>
            <div class="col-lg-6 col-12">
        <?php else : ?>
            <div class="col-lg-4 col-12">
        <?php endif; ?>
        <div class="event">
            <a href="news-page.php?id=<?= $index ?>" class="news-link">
                <img src="<?= htmlspecialchars($event['image']) ?>" alt="<?= htmlspecialchars($event['title']) ?>">
                <div class="title"><?= htmlspecialchars($event['title']) ?></div>
                <?php if (!empty($event['subtitle'])) : ?>
                    <div class="subtitle"><?= htmlspecialchars($event['subtitle']) ?></div>
                <?php endif; ?>
                <div class="date"><?= htmlspecialchars($event['date']) ?></div>
            </a>
        </div>
    </div>
    <?php if ($index === 1) : ?>
        </div>
        <div class="row">
    <?php endif; ?>
<?php endforeach; ?>
</div>

</div>
<?php require "common/footer.php" ?>