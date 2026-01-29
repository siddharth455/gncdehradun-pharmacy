<?php
$jsonData = file_get_contents('news-data.json');
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
        cursor: pointer;
    }

    .event img {
        width: 100%;
        height: 220px;
        object-fit: contain;
        background: #f5f5f5;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .event .content {
        padding: 15px;
        text-align: center;
    }

    .event .title {
        font-weight: 600;
        margin-bottom: 6px;
    }

    .event .subtitle {
        font-size: 14px;
        color: #666;
    }

    /* Remove banner overlay */
    .banner-area::before {
        display: none !important;
    }

    /* Modal image fits screen */
    .modal-body img {
        max-height: 90vh;
        max-width: 100%;
        object-fit: contain;
    }
</style>

<!-- Banner -->
<div class="banner-area about" style="background-image: url(assets/images/news-update-head.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>News &amp; Updates</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News Cards -->
<div class="container mt-5 mb-5">
    <div class="row event-container">
        <?php foreach ($events as $index => $event) : ?>
            <!-- 3 cards per row -->
            <div class="col-lg-4 col-md-6 col-12 d-flex">
                <div class="event"
                     data-bs-toggle="modal"
                     data-bs-target="#newsModal<?= $index ?>">

                    <img src="<?= htmlspecialchars($event['image']) ?>"
                         alt="<?= htmlspecialchars($event['title']) ?>">

                    <div class="content">
                        <div class="title">
                            <?= htmlspecialchars($event['title']) ?>
                        </div>

                       
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="newsModal<?= $index ?>" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content border-0">
                        <div class="modal-body text-center position-relative">
                            <button type="button"
                                    class="btn-close position-absolute top-0 end-0 m-3"
                                    data-bs-dismiss="modal"></button>

                            <img src="<?= htmlspecialchars($event['image']) ?>"
                                 alt="<?= htmlspecialchars($event['title']) ?>"
                                 class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>

<?php require "common/footer.php" ?>