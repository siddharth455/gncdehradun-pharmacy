<?php
// Assuming you have a JSON file named 'news-data.json' in the same directory as your PHP script.
$jsonData = file_get_contents('research-event.json');
$events = json_decode($jsonData, true);
?>
<?php require "common/header.php" ?>
<style>
    .event {
        width: 400px;
        border: 1px solid black;
        padding: 5PX !important;
        margin:1rem 0 0 1rem;
        /* Add space between the rows */
        border-radius: 10px;
        height: 100%;
    }
    .event-container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
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
                    <h1>Research Event</h1>
                </div>
            </div>
        </div>
    </div>
</div>
 

<div class="container mt-5 mb-5">
    <div class="row event-container">
        <?php $counter = 1;?>
        <?php foreach ($events as $index => $event) :?>
            <div class="col-lg-4 col-12 event">
                <div class="event-news">
                    <a href="research-event-page.php?id=<?= $counter - 1?>" class="news-link">
                        <img src="<?= htmlspecialchars($event['image'])?>" alt="<?= htmlspecialchars($event['title'])?>">
                        <div class="title"><?= htmlspecialchars($event['title'])?></div>
                        <?php if (!empty($event['subtitle'])) :?>
                            <div class="subtitle"><?= htmlspecialchars($event['subtitle'])?></div>
                        <?php endif;?>
                        <div class="date"><?= htmlspecialchars($event['eventdate'])?></div>
                    </a>
                </div>
            </div>
            <?php $counter++;?>
        <?php endforeach;?>
    </div>
</div>


<?php require "common/footer.php" ?>