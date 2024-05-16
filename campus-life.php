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
            <h2 class="mb-3">Cultural and Sports Development</h2>
        </div>
        <p class="mb-3">Guru Nanak College of Pharmaceutical Sciences emphasizes career development through its Training and Development Department. Initiatives include soft skills, language and communication skills, life skills (yoga, fitness, health), technology trends awareness, and comprehensive career development programs. These efforts ensure students are well-prepared for their professional journeys.</p>
    </div>
</section>
<section class="container mb-5">
    <table class="table table-bordered">
        <thead>

            <tr class="heading">
                <th><b>S.No.</b></th>
                <th><b>Event Name</b></th>
                <th><b>Category of Event </b></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Rangreza 2023</td>
                <td>Language and communication skills</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Dushreera 2023</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene) </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Poster Presentation</td>
                <td>Soft skills</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Hospital Visit 2023 - CMI</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene) </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Dengue awareness rally</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene) </td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Farewell 2023</td>
                <td>Language and communication skills</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Yoga Day 2023</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene)</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Red Cross Day celebration - rangoli competition</td>
                <td>Soft skills</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Earth Day 2023</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene)</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Hospital Visit - Kailash</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene)</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>Industrial Visit Himalayan drug 2023</td>
                <td>Entrepreneurship</td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>Holi 2022 - Ullash, 2022</td>
                <td>Soft skills</td>
            </tr>
            <tr>
                <th scope="row">13</th>
                <td>Janausadhi 2023</td>
                <td>Entrepreneurship</td>
            </tr>
            <tr>
                <th scope="row">14</th>
                <td>Holi Milan Smaroh, 2023</td>
                <td>Language and communication skills</td>
            </tr>
            <tr>
                <th scope="row">15</th>
                <td>India’s 74th Republic Day celebration</td>
                <td>Language and communication skills</td>
            </tr>
            <tr>
                <th scope="row">16</th>
                <td>Seminar on Research on  Evidence Based Medicine</td>
                <td>Awareness of trends in technology </td>
            </tr>
            <tr>
                <th scope="row">17</th>
                <td>Cricket and Badminton</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene)</td>
            </tr>
            <tr>
                <th scope="row">18</th>
                <td>Chess and carrom competition</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene)</td>
            </tr>
            <tr>
                <th scope="row">19</th>
                <td>Doodle making competition</td>
                <td>Soft skills</td>
            </tr>
            <tr>
                <th scope="row">20</th>
                <td>Volleyball</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene)</td>
            </tr>
            <tr>
                <th scope="row">21</th>
                <td>Facepainting</td>
                <td>Soft skills</td>
            </tr>
            <tr>
                <th scope="row">22</th>
                <td>Cultural Activities - Solo Dance, Group Dance, Solo Singing and Group Singing</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene) </td>
            </tr>
            <tr>
                <th scope="row">23</th>
                <td>Blood Donation Camp/Sports</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene) </td>
            </tr>
            <tr>
                <th scope="row">24</th>
                <td>World pharmacist day</td>
                <td>Language and communication skills</td>
            </tr>
            <tr>
                <th scope="row">25</th>
                <td>Vishwakarma divas</td>
                <td>Entrepreneurship</td>
            </tr>
            <tr>
                <th scope="row">26</th>
                <td>Teachers' day</td>
                <td>Language and communication skills</td>
            </tr>
            <tr>
                <th scope="row">27</th>
                <td>Yoga Day 2022</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene) </td>
            </tr>
            <tr>
                <th scope="row">28</th>
                <td>Republic Day</td>
                <td>Language and communication skills</td>
            </tr>
            <tr>
                <th scope="row">29</th>
                <td>Makar Sankranti</td>
                <td>Language and communication skills</td>
            </tr>
            <tr>
                <th scope="row">30</th>
                <td>Pharmacy Day 2019</td>
                <td>Life skills (Yoga, physical fitness, health and hygiene) </td>
            </tr>
            <tr>
                <th scope="row">31</th>
                <td>Farewell 2022</td>
                <td>Language and communication skills</td>
            </tr>
            <tr>
                <th scope="row">32</th>
                <td>International Conference 2022</td>
                <td>Awareness of trends in technology</td>
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