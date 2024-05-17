<?php require "common/header.php" ?>
<style>
    .row {
        --bs-gutter-x: 0rem !important;
    }
</style>
<div class="banner-area1 about1">
    <div class="campus-life">
        <img src="assets/images/cultural/reflaction-of-india.webp" alt="">
    </div>
</div>
<section class="padding-section bg-red">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-auto mx-2 text-center">
                <div class="page-title-content1">
                    <h2>Vibrant Campus Life</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="row">
    <?php
    // Read the JSON file
    $news_data = file_get_contents('campus-data.json');

    // Decode JSON data into a PHP array
    $news_array = json_decode($news_data, true);
    ?>
    <div class="slick-carousel1">
        <?php foreach ($news_array as $index => $news_item) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-home-news1">
                    <img src="<?php echo $news_item['image']; ?>" alt="news" />
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<section class="row">
    <?php
    // Read the JSON file
    $news_data = file_get_contents('campus-data.json');

    // Decode JSON data into a PHP array
    $news_array = json_decode($news_data, true);
    ?>
    <div class="carousel-container111">
        <div class="slick-carousel2">
            <?php foreach ($news_array as $index => $news_item) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-home-news1">
                        <img src="<?php echo $news_item['image']; ?>" alt="news" />
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="know-about-section pt-5 text-center">
    <div class="container">
        <div class="section-heading">
            <h2 class="mb-3">Cultural &amp; Sports</h2>
        </div>
        <p class="mb-3" style="text-align: left;">Guru Nanak College of Pharmaceutical Sciences emphasizes holistic development through its Cultural and Sports Development Department, offering initiatives such as cultural activities (arts, music, dance, drama), diverse sports programs, life skills workshops (yoga, fitness, health), and community engagement opportunities, ensuring students are well-rounded, culturally enriched, and physically fit, preparing them for balanced professional and personal lives.</p>
    </div>
</section>
<section class="container mb-5">
    <table class="table table-bordered">
        <thead>

            <tr class="heading">
                <th><b>S.No.</b></th>
                <th><b>Event Date</b></th>
                <th><b>Event Name</b></th>
                <th><b>Category of Event </b></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row">07-25-2023</th>
                <td>Research workshop on Systematic Approach to Pharmaceutical Care</td>
                <td>Skill Development</td>
            </tr>

        </tbody>
    </table>
</section>
 <section class="row mt-5 mb-5">
<div class="row justify-content-center">
    <div class="col-lg-auto mx-2 text-center">
        <div class="page-title-content1">
            <h2 style="color: black;">Gallery</h2>
        </div>
    </div>
</div>
<?php
// Read the JSON file
$news_data = file_get_contents('campus-data.json');

// Decode JSON data into a PHP array
$news_array = json_decode($news_data, true);
?>
<?php foreach ($news_array as $index => $news_item) { ?>
    <div class="col-lg-2 col-md-3 col-4">
        <div class="single-home-news1">
            <img src="<?php echo $news_item['image']; ?>" alt="news" />
        </div>
    </div>
<?php } ?>
</section>

<?php require "common/footer.php" ?>