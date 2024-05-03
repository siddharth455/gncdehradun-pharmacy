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
        background:blue;
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
<section class="academics-banner position-relative pt-5" style="background-image: url('assets/images/academic-overview-1.webp'); background-size: cover;">
    <div class="container position-relative text-black pt-5">
        <div class="row">
            <div class="col-lg-10">
                <div class="main-heading">
                    <h5>‘We ensure our students excel in the field of their choice’</h5>
                    <h2>Unique &amp; Inspiring <br>Academics at Guru Nanak College</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>We have introduced the culture of teaching and learning at Guru Nanak College with the word “ACADEMICS” which involves Academic staff. Our faculties and technical staff, who play a pivotal role in an education system, have the right expertise and motivation to nurture the students and ensure they become role models for them. An educational institution is converted into a “temple of learning” through the continuous efforts of its academic staff, and our college is making all efforts to ensure that we leave no stone unturned to provide the top academic exposure to students. </p>
                        <p>Apart from the world-class teaching and learning environment created by the College, we are continuously involved in curriculum review and development and ensure we meet international standards. </p>
                    </div>
                    <div class="col-md-6">
                        <p>"We offer a unique life; you will have access to comprehensive facilities, cultural activities, wide range of academic programs and industry interface. Guru Nanak College offers multi-disciplinary study programs."</p>
                    </div>
                </div>
            </div>
        </div>
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
                        <p class="text-black">Guru Nanak College integrates new technologies and equipment to provide the best immersive learning experience to its students. Immersive learning is where one uses experiential learning tools to improve a student's learning experiences.</p>
                        <div class="row text-center g-2">
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm">
                                    Focused on <br>Practical Training
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm">
                                    Higher <br>Employability
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm">
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
                        <p>Innovation in education means consciously and deliberately introducing an improvement in the education system. It can be applicable in structure, content, curriculum and teaching pedagogies. College education depicts a wide range of innovative and impactful teaching tools to engage students. Freedom of innovation in education stimulates a more efficient system. Innovation involves pedagogical activities, including new and useful content and technology for learning, teaching, and assessment, all designed for the effectiveness of education.</p>
                        <div class="row text-center g-2">
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm">
                                    Enquiry-based <br>Learning
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm">
                                    Project-based <br>Learning
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm">
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
                        <img src="assets/images/pcm-head.webp" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="academics-sec__content">
                        <div class="page-heading">
                            <h2>Mentoring &amp; Advising</h2>
                        </div>
                        <p>Every class comprises students exhibiting variation in their ability to comprehend academic concepts and exhibit a profound understanding of the applicability and future prospects of distinctive courses. Slow learners and advanced learners are identified generally, based on their qualifying marks and learning speed through the class test, quiz, class participation, and IQ level. The faculty frames and adopts teaching methodology to ensure that slow learners get proper attention and at the same time are not led to a disinclination on the part of advanced learners.</p>
                        <div class="row text-center g-2">
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm">
                                    Attend Workshops <br>Training Programs
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm">
                                    Guidance for Entrance <br>Exam Preparation
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-1 bg-white shadow-sm">
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
<section class="academics-objective pt-5 pb-5 position-relative" style="background-image: url('assets/images/academic-overview-2.webp'); background-size: cover;">
    <div class="container pt-5 position-relative">
        <div class="row">
            <div class="col-lg-6">
                <div class="academics-objective__cotent text-white mb-5">
                    <div class="page-heading">
                        <h3 class="text-white">Our comprehensive system offers all round professional and personality development of the students, based on the following distinctive components:</h3>
                    </div>
                    <p class="text-white">Guru Nanak College conducts regular Personality Development Program, Sports and Cultural Activities, Webinars, Guest Lectures, Career, and Quantitative Skills Development Programs, and Value Added Programs. These activities help students to inculcate professionalism, ethical attitude, strong interpersonal skills, and team spirit and enhance their aptitude for life long learning. </p>

                    <p class="text-white">Our Industrial Collaborations ensure that students are well supported and guided for internships and placements. Our history speaks for itself. Our students are placed at lucrative packages in top-notch industries.</p>

                    <a href="https://www.uudoon.in/admissions/index.php?utm_source=Website&amp;utm_medium=Online&amp;utm_campaign=Website" class="btn btn-lg btn-primary btn-shadow">Apply Now <i class="fa fa-long-arrow-right ms-1" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <p>Seminars/Guest Lectures/Workshops by eminent speakers from industry, academia, and research institutes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <p>Tour/visit to industry, hospital, and research institutes etc</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <p>Placement Cell</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <p>Entrepreneur Development Cell</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <p>Personality Development Cell</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <p>Extra-curricular Activity Clubs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <p>Industry Oriented Curriculum Comparable with World's Top Colleges</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require "common/footer.php" ?>