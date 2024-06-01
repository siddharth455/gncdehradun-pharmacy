<?php
// Assuming you have a JSON file named 'news-data.json' in the same directory as your PHP script.
$jsonData = file_get_contents('news-data.json');
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
    @media (max-width: 992px) {
        .event {
            width: 100%; /* Adjust width for tablet view */
        }
        .col-12 label{
            display: inline-block;
            margin: 5px;
        }
    }

    /* Media query for mobile view */
    @media (max-width: 576px) {
        .event {
            width: 80%; /* Full width for mobile view */
        }
        .event-container{
            margin-left:3rem ;
        }
        .col-12 label{
            display: inline-block;
            margin: 5px;
        }
    }
</style>
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
 

<div class="container mt-5 mb-5">
    <div class="row">
        <div class= "col-12">
            <label for="category-filter">Filter by Category:</label>
            <select id="category-filter">
                <option value="all">All</option>
                <option value="Educational">Educational Visit</option>
                <option value="training">Training & Placement</option>
                <option value="Sports">Sports</option>
                <option value="clutural">Cultural</option>
            </select>
            <label for="month-filter">Filter by Month:</label>
            <select id="month-filter">
                <option value="all">All</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <label for="year-filter">Filter by Year:</label>
            <input type="number" id="year-filter" placeholder="YYYY">
        </div>
    </div>
    <div class="row event-container">
        <?php $counter = 1;?>
        <?php foreach ($events as $index => $event) :?>
            <div class="col-lg-4 col-12 event" data-category="<?= $event['category']?>" data-date="<?= date('Y-m-d', strtotime($event['date']))?>">
                <div class="event-news">
                    <a href="news-page.php?id=<?= $counter - 1?>" class="news-link">
                        <img src="<?= htmlspecialchars($event['image'])?>" alt="<?= htmlspecialchars($event['title'])?>">
                        <div class="title"><?= htmlspecialchars($event['title'])?></div>
                        <?php if (!empty($event['subtitle'])) :?>
                            <div class="subtitle"><?= htmlspecialchars($event['subtitle'])?></div>
                        <?php endif;?>
                        <div class="date"><?= htmlspecialchars($event['date'])?></div>
                    </a>
                </div>
            </div>
            <?php $counter++;?>
        <?php endforeach;?>
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

            events.forEach((event, index) => {
                const eventCategory = event.getAttribute('data-category');
                const eventDate = event.getAttribute('data-date');
                const eventYear = eventDate.split('-')[0];

                const matchesCategory = (selectedCategory === 'all' || selectedCategory === eventCategory);
                const matchesMonth = (selectedMonth === 'all' || selectedMonth === eventDate.split('-')[1]);
                const matchesYear = (selectedYear === '' || selectedYear === eventYear);

                if (matchesCategory && matchesMonth && matchesYear) {
                    event.style.display = 'block';
                } else {
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