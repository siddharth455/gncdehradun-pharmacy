<?php require "common/header.php" ?>
<style>
    .academics-banner {
        padding-bottom: 400px;
    }

    .academics-sec__content .card {
        min-height: 100px;
        padding-top: 20px;
    }

    .academics-sec__content .card p {
        margin: 0;
    }

    .academics-objective__cotent {
        padding-right: 150px;
    }

    .academics-objective::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: bule
    }

    .academics-objective .card {
        border-left: 5px solid #f56e10;
    }

    .academics-objective .card p {
        margin: 0;
    }

    .academics-in-banner .col-lg-6:nth-child(1) {
        background: blue
    }

    .academics-in-banner .col-lg-6:nth-child(1):before {
        content: '';
        background: blue;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 100%;
        width: 9999px;
    }

    .academics-in-banner__content {
        max-width: 430px;
    }

    .academics-in-banner__content h1,
    .academics-in-banner__content h2 {
        font-size: 36px;
        line-height: 36px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .academics-in-banner__content p {
        font-size: 18px;
        line-height: 24px;
    }

    .reseacrhStory__slider--item {
        padding: 0 10px
    }

    .reseacrhStory__slider .card {
        overflow: hidden;
    }

    .reseacrhStory__slider .card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgb(0, 0, 0);
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.9556197478991597) 0%, rgba(33, 51, 125, 0) 100%);
    }

    .reseacrhStory__slider .card h4,
    .reseacrhStory__slider .card p,
    .reseacrhStory__slider .card a {
        position: relative
    }

    .reseacrhPublication-section::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: var(--faded-blue)
    }

    .college-logo {
        padding: 20px 0;
    }

    .college-logo h5 {
        font-family: var(--primary-sub-font);
    }

    @media only screen and (min-width: 1600px) and (max-width: 1800px) {}

    @media only screen and (max-width: 1599px) {}

    @media only screen and (max-width: 1399px) {}

    @media only screen and (max-width: 1199px) {
        .academics-sec__in {
            padding: 0 !important
        }
    }

    @media only screen and (max-width: 991px) {
        .academics-sec__content .text-white {
            color: black !important
        }

        .academics-sec__content {
            margin-top: 20px;
        }
    }

    @media only screen and (max-width: 767px) {
        .academics-objective__cotent {
            padding: 0 !important;
        }
    }

    @media only screen and (max-width: 575px) {
        .academics-banner {
            padding-bottom: 60px;
        }

        .academics-sec {
            margin-top: 0 !important;
            padding: 50px 0 !important
        }

        .academics-in-banner {
            text-align: center;
        }

        .academics-in-banner__content h1,
        .academics-in-banner__content h2 {
            font-size: 30px;
            line-height: 31px;
        }
    }

    .academics-sec__img {
        border-radius: 15px;

    }
</style>
<div class="banner-area about" style="background-image:url(assets/images/Academic-overview-head.webp)">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Academics Overview</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="academics-banner position-relative " style="background-image: url('assets/images/academic-overview-1.webp'); background-size: cover;">
    <div class="container position-relative text-black pt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="main-heading">
                    <h2>Unique &amp; Inspiring Academics at Guru Nanak College of Pharmaceutical Sciences</h2>
                </div>
                <p>
                Guru Nanak College of Pharmaceutical Sciences offers comprehensive programs in pharmacy, including a four-year Bachelor of Pharmacy, a three-year Lateral Entry B. Pharma, and a two-year Diploma in Pharmacy. These programs are designed to meet the demands of the modern pharmaceutical industry, providing students with rigorous academic training and practical skills. Our commitment is to ensure that graduates are well-prepared for diverse careers in the pharmaceutical sector, equipped with a strong foundation in theory and practice.
                </p>
            </div>
        </div>
        <!-- <div class="col-md-6 pt-12">
                        <p>"We offer a unique life; you will have access to comprehensive facilities, cultural activities, wide range of academic programs and industry interface. Guru Nanak College of Pharmaceutical Sciences offers multi-disciplinary study programs."</p>
                    </div> -->
    </div>
</section>
<section class="academics-sec " style="position: relative;margin-top:-350px">
    <div class="container">
        <div class="academics-sec__in" style="padding-right: 200px">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="academics-sec__img br-20 overflow-hidden">
                        <img src="assets/images/Diploma in Pharmacy.webp" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="academics-sec__content">
                        <div class="page-heading text-white">
                            <h2 class="text-black">Immersive Learning</h2>
                        </div>
                        <p class="text-black">Guru Nanak College Dehradun leads the way in immersive learning, transforming our students' educational experience. Immersive learning employs cutting-edge technologies and experiential tools to create engaging and enriching environments. Our commitment to this approach is guided by  practical training, where we bridge the gap between theory and practice, ensuring students gain invaluable hands-on experience in their chosen fields thus ensuring higher employability.</p>
                        <div class="row text-center g-2">
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm" style="filter: drop-shadow(5px 6px 5px black);">
                                    Focused on <br>Practical Training
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm" style="filter: drop-shadow(5px 6px 5px black);">
                                    Higher <br>Employability
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm" style="filter: drop-shadow(5px 6px 5px black);">
                                    Higher Engagement <br>and Effectiveness
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="academics-sec pt-8 pb-5" style="background: #f5f5f500; padding-top: 150px; margin-top: -100px">
    <div class="container">
        <div class="academics-sec__in" style="padding-left: 200px">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="academics-sec__img br-20 overflow-hidden">
                        <img src="assets/images/msc-biotech-head.webp" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="academics-sec__content">
                        <div class="page-heading">
                            <h2>Innovative Teaching</h2>
                        </div>
                        <p>
Innovation in college and pharmacy education involves deliberately enhancing the system, be it through structure, content, curriculum, or teaching methods. Guru Nanak College utilize diverse, impactful tools to engage pharmacy students effectively. This innovation includes new and valuable content, technology, and assessment methods, improving learning and teaching while ensuring pharmacy students gain practical, relevant skills for a successful career in the pharmaceutical industry.</p>
                        <div class="row text-center g-2">
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm" style="filter: drop-shadow(5px 6px 5px black);">
                                    Enquiry-based <br>Learning
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm" style="filter: drop-shadow(5px 6px 5px black);">
                                    Project-based <br>Learning
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm" style="filter: drop-shadow(5px 6px 5px black);">
                                    Blended <br>Learning
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="academics-sec pt-5 pb-5" style="background: #f5f5f500">
    <div class="container">
        <div class="academics-sec__in" style="padding-right: 200px">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="academics-sec__img br-20 overflow-hidden">
                        <img src="assets/images/pcm-head.webp" alt="" class="w-100" style="filter: drop-shadow(5px 6px 5px black);">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="academics-sec__content">
                        <div class="page-heading">
                            <h2>Mentoring &amp; Advising</h2>
                        </div>
                        <p>Each class at Guru Nanak College of Pharmaceutical Sciences includes students with varying abilities to grasp pharmacy concepts and understand future career prospects. Faculty identify slow and advanced learners through qualifying marks, quizzes, class tests, participation, and IQ levels. Teaching methods are adapted to provide focused support for slow learners without compromising the engagement of advanced learners, ensuring that both groups receive tailored attention and challenges to excel in their pharmacy studies.</p>
                        <div class="row text-center g-2">
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm" style="filter: drop-shadow(5px 6px 5px black);">
                                    Attend Workshops <br>Training Programs
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm" style="filter: drop-shadow(5px 6px 5px black);">
                                    Guidance for Entrance <br>Exam Preparation
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm" style="filter: drop-shadow(5px 6px 5px black);">
                                    Participation in <br>Conferences and Seminars
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="academics-objective pt-5 pb-5 position-relative" style="background-image: url('assets/images/academic-overview-2.webp'); background-size: cover;">
    <div class="container pt-5 position-relative">
        <div class="row">
            <div class="col-lg-6">
                <div class="academics-objective__cotent text-white mb-5">
                    <div class="page-heading">
                        <h3 class="text-white">Our comprehensive system offers all round professional and personality development of the students, based on the following distinctive components:</h3>
                    </div>
                    <p class="text-white">Guru Nanak College of Pharmaceutical Sciences conducts regular Personality Development Program, Sports and Cultural Activities, Webinars, Guest Lectures, Career, and Quantitative Skills Development Programs, and Value Added Programs. These activities help students to inculcate professionalism, ethical attitude, strong interpersonal skills, and team spirit and enhance their aptitude for life long learning. </p>

                    <p class="text-white">Our Industrial Collaborations ensure that students are well supported and guided for internships and placements. Our history speaks for itself. Our students are placed at lucrative packages in top-notch industries.</p>

                    <a href="https://gnc.edu.in/pharmacy-college?utm_source=Pharmacy-website&utm_medium=Online&utm_campaign=Pharmacy-website" class="btn btn-lg btn-shadow">Apply Now <i class="fa fa-long-arrow-right ms-1" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card h-100" style="filter: drop-shadow(5px 6px 5px black);">
                            <div class="card-body">
                                <p>Seminars/Guest Lectures/Workshops by eminent speakers from industry, academia, and research institutes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100" style="filter: drop-shadow(5px 6px 5px black);">
                            <div class="card-body">
                                <p>Tour/visit to industry, hospital, and research institutes etc</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100" style="filter: drop-shadow(5px 6px 5px black);">
                            <div class="card-body">
                                <p>Placement Cell</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100" style="filter: drop-shadow(5px 6px 5px black);">
                            <div class="card-body">
                                <p>Entrepreneur Development Cell</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100" style="filter: drop-shadow(5px 6px 5px black);">
                            <div class="card-body">
                                <p>Personality Development Cell</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100" style="filter: drop-shadow(5px 6px 5px black);">
                            <div class="card-body">
                                <p>Extra-curricular Activity Clubs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100" style="filter: drop-shadow(5px 6px 5px black);">
                            <div class="card-body">
                                <p>Industry Oriented Curriculum Comparable with World's Top Colleges</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php require "company-logo.php" ?>
<?php require "testimoni.php" ?>
<?php require "common/footer.php" ?>