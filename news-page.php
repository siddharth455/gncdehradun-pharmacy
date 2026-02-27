<?php
require "common/header.php";

/* -------------------------
   GET EVENT ID
-------------------------- */
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
    echo "<p class='text-center mt-5'>Invalid request.</p>";
    require "common/footer.php";
    exit;
}

/* -------------------------
   LOAD JSON DATA
-------------------------- */
$dataFile = __DIR__ . '/news-data.json';

if (!file_exists($dataFile)) {
    echo "<p class='text-center mt-5'>Data file not found.</p>";
    require "common/footer.php";
    exit;
}

$newsData = json_decode(file_get_contents($dataFile), true);

/* -------------------------
   FIND EVENT BY ID
-------------------------- */
$event = null;
foreach ($newsData as $item) {
    if ((int)$item['id'] === $id) {
        $event = $item;
        break;
    }
}

if (!$event) {
    echo "<p class='text-center mt-5'>Event not found.</p>";
    require "common/footer.php";
    exit;
}
?>

<style>
/* =========================
   PAGE STYLES
========================= */
.event-banner {
    width: 780px;
    height: 520px;
    margin: 10px auto;
    object-fit: contain;
    border-radius: 16px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.event-banner img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    align-items: center;
    align-self: center;
    align-content: center;
}

.news-content {
    max-width: 1050px;
    margin: auto;
    font-size: 17px;
    line-height: 1.8;
    color: #333;
}

.news-content h1 {
    font-weight: 700;
    margin-bottom: 20px;
}

.gallery-title {
    font-weight: 600;
    margin-bottom: 25px;
}

.gallery-card {
    height: 340px;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.gallery-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.gallery-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 45px rgba(0,0,0,0.18);
}

/* =========================
   ANIMATIONS
========================= */
.fade-up {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
}

.fade-up.show {
    opacity: 1;
    transform: translateY(0);
}
 @media (max-width: 768px) {
           .event-banner {
    width: 100%;
    height: 280px;
    margin: 10px auto;
    object-fit: contain;
    border-radius: 16px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}
        }
</style>

<!-- =======================
     TITLE
======================= -->
<div class="container mt-5 fade-up">
    <div class="news-content text-center">
        <h1><?= htmlspecialchars($event['title']) ?></h1>
    </div>
</div>

<!-- =======================
     BANNER IMAGE
======================= -->
<div class="container mt-4 mb-5 fade-up">
    <div class="event-banner">
        <img src="<?= htmlspecialchars($event['bannerImage']) ?>"
             alt="<?= htmlspecialchars($event['title']) ?>">
    </div>
</div>

<!-- =======================
     CONTENT
======================= -->
<div class="container mb-5 fade-up">
    <div class="news-content">
        <p><?= nl2br(htmlspecialchars($event['content'])) ?></p>
    </div>
</div>

<!-- =======================
     IMAGE GALLERY
======================= -->
<?php if (!empty($event['images']) && count($event['images']) > 1): ?>
<div class="container mb-5 fade-up">
    <h3 class="gallery-title text-center">Event Gallery</h3>
    <div class="row">
        <?php foreach ($event['images'] as $img): ?>
            <?php if ($img === $event['bannerImage']) continue; ?>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="gallery-card">
                    <img src="<?= htmlspecialchars($img) ?>" alt="Event Image">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<!-- =======================
     SCROLL ANIMATION SCRIPT
======================= -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".fade-up");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(el => observer.observe(el));
});
</script>

<?php require "common/footer.php"; ?>
