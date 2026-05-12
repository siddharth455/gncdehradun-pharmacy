<?php require "common/header.php" ?>

<style>
    .mag-news-section {
        padding: 80px 0;
        background-color: #f9f9f9;
    }

    .section-tittle h2 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-tittle h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background-color: #f59445;
        /* Brand color from about.php */
    }

    .item-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.4s ease;
        margin-bottom: 30px;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #eee;
    }

    .item-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border-color: #f59445;
    }

    .item-img-wrapper {
        position: relative;
        overflow: hidden;
        height: 300px;
        background-color: #f0f0f0;
    }

    .item-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .item-card:hover .item-img-wrapper img {
        transform: scale(1.1);
    }

    .item-content {
        padding: 25px;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .item-title {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
        line-height: 1.4;
    }

    .read-more-btn {
        display: inline-block;
        padding: 10px 25px;
        background-color: #f59445;
        color: #fff;
        border-radius: 30px;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid #f59445;
    }

    .read-more-btn:hover {
        background-color: transparent;
        color: #f59445;
    }

    .banner-area.magazines {
        background-position: center;
        background-size: cover;
    }

    /* Tab styles if needed, but we'll use sections for now as requested */
    .section-divider {
        height: 1px;
        background: #ddd;
        margin: 40px 0 60px;
    }
</style>

<!-- Banner Area -->
<div class="banner-area about magazines" style="background-image: url(assets/images/banner/1.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Magazines & Newsletters</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="mag-news-section">
    <div class="container">

        <!-- Magazines Section -->
        <div class="section-tittle text-center mb-5">
            <h2>Our Magazines</h2>
            <p>Explore our latest pharmaceutical insights and college achievements through our quarterly magazines.</p>
        </div>

        <div class="row">
            <?php
            $magazines = [
                ['title' => 'PHARMA INSIGHT Academic Year 2022–23', 'image' => 'assets/images/new/2.png', 'pdf' => 'assets/images/new/Magazine_1_AY_Academic_Year_2022to23.pdf'],
                ['title' => 'PHARMA INSIGHT Academic Year 2023–24', 'image' => 'assets/images/new/1.png', 'pdf' => 'assets/images/new/Magazine_2_AY_Academic_Year_2023to24.pdf'],
                ['title' => 'PHARMA INSIGHT Academic Year 2024–25', 'image' => 'assets/images/new/3.png', 'pdf' => 'assets/images/new/Magazine_3_AY_Academic_Year_2024to25.pdf'],
                ['title' => 'PHARMA INSIGHT Academic Year 2025–26', 'image' => 'assets/images/new/4.png', 'pdf' => 'assets/images/new/Magazine_4_AY_Academic_Year_2025to26.pdf'],
            ];

            foreach ($magazines as $mag):
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="item-card">
                        <div class="item-img-wrapper">
                            <img src="<?= $mag['image'] ?>" alt="<?= $mag['title'] ?>"
                                onerror="this.src='https://placehold.co/400x600/f59445/ffffff?text=Magazine+Cover'">
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><?= $mag['title'] ?></h3>
                            <a href="<?= $mag['pdf'] ?>" target="_blank" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="section-divider"></div>

        <!-- Newsletters Section -->
        <div class="section-tittle text-center mb-5">
            <h2>Our Newsletters</h2>
            <p>Stay updated with our monthly campus highlights and pharmaceutical updates.</p>
        </div>

        <div class="row">
            <?php
            $newsletters = [
                ['title' => 'Newsletter - August 2022 to January 2023', 'image' => 'assets/images/new/5.png', 'pdf' => 'assets/images/new/Newsletter_1_August_2022_to_January_2023-siddharth.pdf'],
                ['title' => 'Newsletter - February 2023 to July 2023', 'image' => 'assets/images/new/6.png', 'pdf' => 'assets/images/new/Newsletter_2_February_2023_to_July_2023-siddharth.pdf'],
                ['title' => 'Newsletter - August 2023 to January 2024', 'image' => 'assets/images/new/7.png', 'pdf' => 'assets/images/new/Newsletter_3_August_2023_to_January_2024-siddharth.pdf'],
                ['title' => 'Newsletter - February 2024 to July 2024', 'image' => 'assets/images/new/8.png', 'pdf' => 'assets/images/new/Newsletter_4_February_2024_to_July_2024-siddharth.pdf'],
                ['title' => 'Newsletter - August 2024 to January 2025', 'image' => 'assets/images/new/9.png', 'pdf' => 'assets/images/new/Newsletter_5_August_2024_to_January_2025-siddharth.pdf'],
                ['title' => 'Newsletter - February 2025 to July 2025', 'image' => 'assets/images/new/10.png', 'pdf' => 'assets/images/new/Newsletter_6_February_2025_to_July_2025.pdf'],
                ['title' => 'Newsletter - August 2025 to December 2025', 'image' => 'assets/images/new/11.png', 'pdf' => 'assets/images/new/Newsletter_7_August_2025_to_December_2025.pdf'],
            ];

            foreach ($newsletters as $news):
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="item-card">
                        <div class="item-img-wrapper" style="height: 250px;">
                            <img src="<?= $news['image'] ?>" alt="<?= $news['title'] ?>"
                                onerror="this.src='https://placehold.co/600x400/333333/ffffff?text=Newsletter+Cover'">
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><?= $news['title'] ?></h3>
                            <a href="<?= $news['pdf'] ?>" target="_blank" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php require "common/footer.php" ?>