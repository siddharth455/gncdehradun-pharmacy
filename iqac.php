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
</style>
<div class="banner-area about" style="background-image: url(assets/images/iqac-head.webp); background-size: cover; background-position: center;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>IQAC - Internal<br>Quality Assurance Cell</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pt-4 pb-5">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-5">
            <div class="nav flex-column nav-pills position-sticky" style="top: 150px" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link main active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Overview</button>
                <button class="nav-link main" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Minutes of Meeting</button>
                <button class="nav-link main" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Action Taken Report</button>
                <button class="nav-link main" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                <button class="nav-link main" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">INTERNAL QUALITY ASSURANCE CELL</h4>
                                <div class="data-block">
                                    <h3>About IQAC ( Internal Quality Assurance Cell )</h3>
                                    <p>The Internal Quality Assurance Cell (IQAC) is the cell that is formulated for monitoring the quality parameters in CU. The Composition of IQAC members as per the recommendations given by National Assessment Accreditation Committee.</p>
                                </div>

                                <hr>

                                <div class="data-block">
                                    <h3>IQAC shall evolve mechanisms and procedures for:</h3>
                                    <ul>
                                        <li>Ensuring timely, efficient and progressive performance of academic, administrative and financial tasks</li>
                                        <li>The relevance and quality of academic and research programmes</li>
                                        <li>Equitable access to and affordability of academic programmes for various sections of society</li>
                                        <li>Optimization and integration of modern methods of teaching and learning</li>
                                        <li>The credibility of evaluation procedures</li>
                                        <li>Ensuring the adequacy, maintenance and functioning of the support structure and services</li>
                                        <li>Research sharing and networking with other institutions in India and abroad.</li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="data-block">
                                    <h3>Some of the functions expected of the IQAC are:</h3>
                                    <ul>
                                        <li>Development and application of quality benchmarks/parameters for various academic and administrative activities of the institution</li>
                                        <li>Facilitating the creation of a learner-centric environment conducive to quality education and faculty maturation to adopt the required knowledge and technology for participatory teaching and learning process</li>
                                        <li>Arrangement for feedback response from students, parents and other stakeholders on quality-related institutional processes</li>
                                        <li>Dissemination of information on various quality parameters of higher education</li>
                                        <li>Organization of inter and intra institutional workshops, seminars on quality related themes and promotion of quality circles</li>
                                        <li>Documentation of the various programmes/activities leading to quality improvement.</li>
                                        <li>Acting as a nodal agency of the Institution for coordinating quality-related activities, including adoption and dissemination of best practices.</li>
                                        <li>Development and maintenance of institutional database through MIS for the purpose of maintaining /enhancing the institutional quality.</li>
                                        <li>Development of Quality Culture in the institution.</li>
                                        <li>Preparation of the Annual Quality Assurance Report (AQAR) as per guidelines and parameters of NAAC, to be submitted to NAAC</li>
                                    </ul>
                                </div>

                                <hr>

                                <div class="data-block">
                                    <h3>IQAC will facilitate / contribute:</h3>
                                    <ul>
                                        <li>Ensure heightened level of clarity and focus in institutional functioning towards quality enhancement</li>
                                        <li>Ensure internalization of the quality culture.</li>
                                        <li>Ensure enhancement and coordination among various activities of the institution and institutionalize all good practices.</li>
                                        <li>Provide a sound basis for decision-making to improve institutional functioning.</li>
                                        <li>Act as a dynamic system for quality changes in HEIs.</li>
                                        <li>Build an organised methodology of documentation and internal communication.</li>
                                    </ul>
                                </div>

                                <hr>

                                <div class="data-block">
                                    <h3>Outcomes of Activities of IQAC at CU</h3>
                                    <ul>
                                        <li>NAAC Accreditation</li>
                                        <li>Ranking by NIRF</li>
                                        <li>Annual reports of the University</li>
                                        <li>Ranking by Media House(s) conducted through questionnaire and/or surveys</li>
                                        <li>Continous improvement in academic and non-academic activities of university</li>
                                        <li>Analysis of Student/alumni/faculty/employer/parent feedbacks</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <!-- Content for Minutes of Meeting Tab -->
                </div>
                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                    <!-- Content for Action Taken Report Tab -->
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/khelo.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="https://kheloindia.gov.in/" class="btn btn-primary col-lg-12">KHELO INDIA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/ministry.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="https://dbtyas-sports.gov.in/" class="btn btn-primary col-lg-12">MINISTRY</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/pharmacy council of india (1).webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="https://www.pci.nic.in/" class="btn btn-primary col-lg-12">PHARMACY COUNCIL OF INDIA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/radhakrishnan (1).webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="http://naac.gov.in/images/docs/DrRadhakrishnanCommittee-FinalReport.pdf" class="btn btn-primary col-lg-12">RADHAKRISHNAN</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/ugc.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="https://www.ugc.gov.in/" class="btn btn-primary col-lg-12">UGC</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/uttarakhand.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="https://sports.uk.gov.in/" class="btn btn-primary col-lg-12">UTTARAKHAND</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/youth.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="https://www.india.gov.in/topics/youth-sports" class="btn btn-primary col-lg-12">YOUTH</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/sports1.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="https://sportsauthorityofindia.nic.in/sai/" class="btn btn-primary col-lg-12">SPORTS</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                    <!-- Content for Settings Tab -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "common/footer.php" ?>