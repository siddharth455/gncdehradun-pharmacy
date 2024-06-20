<?php require "common/header.php" ?>
<style>
    .nav-pills {
        background-color: #cfd3d9;
        border: 1px dotted #58606a;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        padding: 10px;
    }

    .tab-content {
        border: 1px dotted #58606a;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        padding: 10px;
    }

    .nav-link.main {
        background-color: #f8f9fa;
        color: #495057;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        margin-bottom: 10px;
        transition: background-color 0.3s ease;
    }

    .nav-link:focus,
    .nav-link:hover {
        text-decoration: underline;
        color: #0d6efd;
    }

    .nav-link.active {
        text-decoration: underline;
    }

    .nav-link.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .table th {
        vertical-align: middle;
    }

    .accordion-header button {
        background-color: #00bcfb;
        font-weight: bolder;
        font-size: 18px;
        color: white;
        border-radius: 10px;
    }

    .accordion-button:not(.collapsed) {
        background-color: #eb7a3d;
        color: white;
        border-radius: 10px;
    }


    .pdf-container {
        height: 600px;
    }
</style>
<div class="banner-area about" style="background-image: url(assets/images/banner/44.webp); background-size: cover; background-position: center;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Feedback</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pt-4 pb-5">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-5">
            <div class="nav flex-column nav-pills position-sticky" style="top: 150px" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link main active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Feedback Overview</button>
                <button class="nav-link main"><a href="feedback.php">Feedback Form</a></button>
                <!-- <button class="nav-link main" id="v-pills-analysis-tab" data-bs-toggle="pill" data-bs-target="#v-pills-analysis" type="button" role="tab" aria-controls="v-pills-analysis" aria-selected="false">Feedback Analysis &amp; ATR</button> -->

                <!-- <button class="nav-link main" id="v-pills-atr-tab" data-bs-toggle="pill" data-bs-target="#v-pills-atr" type="button" role="tab" aria-controls="v-pills-atr" aria-selected="false">Action Taken Report</button> -->
                <button class="nav-link main"><a href="https://staff.gncdehradun.com/">Feedback Analysis &amp; ATR</a></button>
                <!-- <button class="nav-link main"><a href="https://staff.gncdehradun.com/">Action Taken Report</a></button> -->

            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <div class="data-block">
                                    <h3>Feedback from Stakeholders on Curriculum</h3>
                                    <p>Feedback is essential for evaluating the institute's performance and ensuring the delivery of quality education. Therefore, the institute implements a policy to prepare feedback forms for various stakeholders to assess performance on different aspects. The Internal Quality Assurance Cell (IQAC) at the institute collects feedback from stakeholders students, teachers, employers, and alumni analyzes the feedback, and provides suggestions to appropriate bodies to initiate actions for improvement.</p>
                                </div>
                                <hr>

                                <div class="data-block">
                                    <h3>Objectives:</h3>
                                    <ul class="list-unstyled p-0 list-icon-4 ps-4 mt-3">
                                        <li>Accurately gauge the impact of the institution’s efforts on various stakeholders.</li>
                                        <li>Maintain awareness of the needs and expectations of students and other stakeholders.</li>
                                        <li>Continuously improve all products, services, facilities, and procedures.</li>
                                        <li>Audit and enhance students’ learning experiences through the timely collection, analysis, and reporting of feedback concerning teaching, learning, and assessment.</li>
                                        <li>Provide students and stakeholders with opportunities to actively participate in the continual improvement of study programs through timely feedback collection.</li>
                                </div>
                                <hr>

                                <div class="data-block">
                                    <h3>IQAC will facilitate / contribute:</h3>
                                    <ul class="list-unstyled p-0 list-icon-4 ps-4 mt-3">
                                        <li>Ensuring a heightened level of clarity and focus in institutional functioning towards quality enhancement.</li>
                                        <li>Promoting the internalization of a quality culture within the college.</li>
                                        <li>Enhancing coordination among various activities of the institution and institutionalizing all good practices.</li>
                                        <li>Providing a sound basis for decision-making to improve institutional functioning.</li>
                                        <li>Acting as a dynamic system for initiating and implementing quality changes in the college.</li>
                                        <li>Building an organized methodology for documentation and internal communication, thereby fostering a structured approach to quality improvement.</li>
                                    </ul>
                                </div>

                            </div>
                            

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-analysis" role="tabpanel" aria-labelledby="v-pills-analysis-tab" tabindex="0">
                    <div class="container mt-2 mb-2">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Students
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                        <div class="container mt-3">
                                            <div class="accordion" id="accordionExample1">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-one" aria-expanded="false" aria-controls="collapse-one">
                                                            2018-19
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-one" class="accordion-collapse collapse" aria-labelledby="heading-one" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
                                                            2019-20
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-two" class="accordion-collapse collapse" aria-labelledby="heading-two" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-three" aria-expanded="false" aria-controls="collapse-three">
                                                            2020-21
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-three" class="accordion-collapse collapse" aria-labelledby="heading-three" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-four" aria-expanded="false" aria-controls="collapse-four">
                                                            2021-22
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-four" class="accordion-collapse collapse" aria-labelledby="heading-four" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-five" aria-expanded="false" aria-controls="collapse-five">
                                                            2022-23
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-five" class="accordion-collapse collapse" aria-labelledby="heading-five" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        Employer
                                    </button>
                                </h2>
                                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                        <div class="container mt-3">
                                            <div class="accordion" id="accordionExample1">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-five" aria-expanded="false" aria-controls="collapse-five">
                                                            2022-23
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-five" class="accordion-collapse collapse" aria-labelledby="heading-five" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Alumni
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                        <div class="container mt-3">
                                            <div class="accordion" id="accordionExample1">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-five" aria-expanded="false" aria-controls="collapse-five">
                                                            2022-23
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-five" class="accordion-collapse collapse" aria-labelledby="heading-five" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Faculty Members
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                        <div class="container mt-3">
                                            <div class="accordion" id="accordionExample1">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-one" aria-expanded="false" aria-controls="collapse-one">
                                                            2018-19
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-one" class="accordion-collapse collapse" aria-labelledby="heading-one" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
                                                            2019-20
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-two" class="accordion-collapse collapse" aria-labelledby="heading-two" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-three" aria-expanded="false" aria-controls="collapse-three">
                                                            2020-21
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-three" class="accordion-collapse collapse" aria-labelledby="heading-three" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-four" aria-expanded="false" aria-controls="collapse-four">
                                                            2021-22
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-four" class="accordion-collapse collapse" aria-labelledby="heading-four" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-five" aria-expanded="false" aria-controls="collapse-five">
                                                            2022-23
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-five" class="accordion-collapse collapse" aria-labelledby="heading-five" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body" style="filter: drop-shadow(3px 3px 5px black);">
                                                            <div class="card-body">
                                                                <div class="pdf-container">
                                                                    <embed src="assets/images/grivence.pdf#page=1" type="application/pdf" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-atr" role="tabpanel" aria-labelledby="v-pills-atr-tab" tabindex="0">
                    <!-- Content for Action Taken Report Tab -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "common/footer.php" ?>