<?php
// Assuming you have a JSON file named 'news-data.json' in the same directory as your PHP script.
$jsonData = file_get_contents('news-data.json');
$events = json_decode($jsonData, true);
?>
<?php require "common/header.php" ?>
<style>
    .event {
        border: 1px solid #000;
        padding: 5PX !important;
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
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <label for="category-filter">Filter by Category:</label>
            <select id="category-filter">
                <option value="all">All</option>
                <option value="Educational Visit">Educational Visit</option>
                <option value="Music">Music</option>
                <option value="Sports">Sports</option>
                <option value="Art">Art</option>
            </select>
            <label for="month-filter">Filter by Month:</label>
            <select id="month-filter">
                <option value="all">All</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <!-- Add more options for other months -->
            </select>
            <label for="year-filter">Filter by Year:</label>
            <input type="number" id="year-filter" placeholder="YYYY">
        </div>
    </div>
    <div class="row">
        <?php $counter = 1; ?>
        <?php foreach ($events as $index => $event) : ?>
            <?php if ($index < 2) : ?>
                <div class="col-lg-6 col-12" data-category="<?= $event['category'] ?>" data-month="<?= date('m', strtotime($event['date'])) ?>" data-year="<?= date('Y', strtotime($event['date'])) ?>">
                <?php else : ?>
                    <div class="col-lg-4 col-12" data-category="<?= $event['category'] ?>" data-month="<?= date('m', strtotime($event['date'])) ?>" data-year="<?= date('Y', strtotime($event['date'])) ?>">
                    <?php endif; ?>
                    <div class="event" data-category="<?= $event['category'] ?>" data-month="<?= date('m', strtotime($event['date'])) ?>" data-year="<?= date('Y', strtotime($event['date'])) ?>">
                        <a href="news-page.php?id=<?= $counter ?>" class="news-link">
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
                <?php $counter++; ?>
            <?php endforeach; ?>
                </div>

    </div>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function() {
    const categoryFilter = document.getElementById('category-filter');
    const monthFilter = document.getElementById('month-filter');
    const yearFilter = document.getElementById('year-filter');
    const events = document.querySelectorAll('.event');

    const filterEvents = function() {
        const selectedCategory = categoryFilter.value;
        const selectedMonth = monthFilter.value;
        const selectedYear = yearFilter.value;

        let visibleEvents = Array.from(events).filter(event => {
            const eventCategory = event.getAttribute('data-category');
            const eventMonth = event.getAttribute('data-month');
            const eventYear = event.getAttribute('data-year');
            return (selectedCategory === 'all' || selectedCategory === eventCategory) &&
                   (selectedMonth === 'all' || selectedMonth === eventMonth) &&
                   (selectedYear === '' || selectedYear === eventYear);
        });

        visibleEvents.forEach((event, index) => {
            event.style.display = 'block';
            event.querySelector('.news-link').setAttribute('href', 'news-page.php?id=' + index);
        });

        Array.from(events).forEach(event => {
            if (!visibleEvents.includes(event)) {
                event.style.display = 'none';
            }
        });
    };

    categoryFilter.addEventListener('change', filterEvents);
    monthFilter.addEventListener('change', filterEvents);
    yearFilter.addEventListener('input', filterEvents);
});

</script>


<?php require "common/footer.php" ?>