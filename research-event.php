<?php
// Load JSON data
$jsonData = file_get_contents('research-event.json');
$events = json_decode($jsonData, true);
?>

<?php require "common/header.php" ?>

<style>
    .event-container {
        display: flex;
        flex-wrap: wrap;
        row-gap: 30px;
    }

    .event {
        border: 1px solid #ccc;
        border-radius: 10px;
        background: #fff;
        width: 100%;
        height: 100%;
        display: flex;
    }

    .event-news {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
    }

    /* Image fully visible – no zoom */
    .event img {
        width: 100%;
        height: 220px;
        object-fit: contain; /* key change */
        background: #f5f5f5; /* fills empty space nicely */
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .event .content {
        padding: 15px;
        flex-grow: 1;
        text-align: center;
    }

    .event .title {
        font-weight: 600;
        font-size: 16px;
        margin-bottom: 6px;
    }

    .event .subtitle {
        font-size: 14px;
        color: #666;
    }
</style>

<div class="banner-area about" style="background-image: url(assets/images/banner/41.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Research Event</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row event-container">
        <?php foreach ($events as $event) : ?>
            <!-- 3 cards per row -->
            <div class="col-lg-4 col-md-6 col-12 d-flex">
                <div class="event">
                    <div class="event-news">
                        <img src="<?= htmlspecialchars($event['image']) ?>"
                             alt="<?= htmlspecialchars($event['title']) ?>">

                        <div class="content">
                            <div class="title">
                                <?= htmlspecialchars($event['title']) ?>
                            </div>

                            <?php if (!empty($event['subtitle'])) : ?>
                                <div class="subtitle">
                                    <?= htmlspecialchars($event['subtitle']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require "common/footer.php" ?>