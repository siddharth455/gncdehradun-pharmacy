<?php
$jsonData = file_get_contents('news-data.json');
$events = json_decode($jsonData, true);

$eventsPerPage = 18;
$totalEvents = count($events);
$totalPages = ceil($totalEvents / $eventsPerPage);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max(1, min($page, $totalPages));

$startIndex = ($page - 1) * $eventsPerPage;
$paginatedEvents = array_slice($events, $startIndex, $eventsPerPage, true);
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
    text-decoration: none;
    color: inherit;
    transition: transform 0.2s ease;
}

.event:hover {
    transform: translateY(-4px);
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

.pagination {
    justify-content: center;
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

<!-- 🔎 Search -->
<div class="container mt-4">
    <div class="text-center mb-4">
        <input type="text"
               id="liveSearch"
               placeholder="Search by title..."
               class="form-control w-50 d-inline-block">
    </div>
</div>

<!-- News Cards -->
<div class="container mt-5 mb-5">
    <div class="row event-container" id="eventResults">

        <?php foreach ($paginatedEvents as $event) : ?>
            <div class="col-lg-4 col-md-6 col-12 d-flex">
                <a href="news-page.php?id=<?= $event['id'] ?>" class="event">

                    <img src="<?= htmlspecialchars($event['bannerImage']) ?>"
                         alt="<?= htmlspecialchars($event['title']) ?>">

                    <div class="content">
                        <div class="title">
                            <?= htmlspecialchars($event['title']) ?>
                        </div>
                    </div>

                </a>
            </div>
        <?php endforeach; ?>

    </div>

    <!-- Pagination -->
    <nav class="mt-5" id="paginationNav">
        <ul class="pagination">

            <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
            </li>

            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>">
                        <?= $i ?>
                    </a>
                </li>
            <?php endfor; ?>

            <li class="page-item <?= ($page >= $totalPages) ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
            </li>

        </ul>
    </nav>

</div>

<!-- AJAX Search Script -->
<script>
document.getElementById("liveSearch").addEventListener("input", function() {

    let query = this.value.trim();
    let pagination = document.getElementById("paginationNav");

    if (query.length > 0) {

        fetch("search-news.php?query=" + encodeURIComponent(query))
            .then(response => response.text())
            .then(data => {
                document.getElementById("eventResults").innerHTML = data;
                pagination.style.display = "none";
            });

    } else {
        location.reload(); // restore pagination view
    }

});
</script>

<?php require "common/footer.php" ?>
