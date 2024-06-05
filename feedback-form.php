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
</style>
<div class="banner-area about" style="background-image: url(assets/images/iqac-head.webp); background-size: cover; background-position: center;">
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
                <button class="nav-link main" id="v-pills-analysis-tab" data-bs-toggle="pill" data-bs-target="#v-pills-analysis" type="button" role="tab" aria-controls="v-pills-analysis" aria-selected="false">Feedback Analysis</button>
                <button class="nav-link main" id="v-pills-atr-tab" data-bs-toggle="pill" data-bs-target="#v-pills-atr" type="button" role="tab" aria-controls="v-pills-atr" aria-selected="false">Action Taken Report</button>
                <button class="nav-link main"><a href="feedback.php">Feedback Form</a></button>

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
                                    <h3>Methodology:</h3>
                                    <ul class="list-unstyled p-0 list-icon-4 ps-4 mt-3">
                                        <li><b>Student Feedback:</b> Collected online via ERP, analyzed by AMC, and suggestions are incorporated by department heads.</li>
                                        <li><b>Alumni Feedback:</b> Collected during alumni meetings and online, sent to AMC for further action and forwarded to higher authorities.</li>
                                        <li><b>Teacher Feedback:</b> Collected via hard copy forms regarding the curriculum and teaching-learning process, analyzed, and reported to higher authorities.</li>
                                        <li><b>Employer Feedback:</b> Collected in person or online, with actions discussed by the feedback committee and communicated to relevant departments and authorities for implementation.</li>
                                    </ul>
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
                    
                </div>
                <div class="tab-pane fade" id="v-pills-atr" role="tabpanel" aria-labelledby="v-pills-atr-tab" tabindex="0">
                    <!-- Content for Action Taken Report Tab -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "common/footer.php" ?>