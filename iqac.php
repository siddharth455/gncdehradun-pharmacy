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
                <button class="nav-link main" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Other Links</button>
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
                                    <p>The Internal Quality Assurance Cell (IQAC) is a vital component established in accredited institutions to ensure continuous quality enhancement and sustenance. At Guru Nanak College of Pharmaceutical Sciences, Dehradun, the IQAC aims to develop a system for conscious, consistent, and catalytic improvement in overall institutional performance. It integrates various activities to promote holistic academic excellence and fosters a quality culture. The IQAC also facilitates the adoption of modern teaching methods, ensures the credibility of evaluation procedures, and maintains a learner-centric environment conducive to quality education.</p>
                                </div>
                                <hr>

                                <div class="data-block">
                                    <h3>IQAC Guidelines:</h3>
                                   <p>In line with its Action Plan for performance evaluation, assessment, accreditation, and quality improvement of higher education 
                                    institutions, NAAC recommends that every accredited institution establish an Internal Quality Assurance Cell (IQAC) as a post-accreditation 
                                    quality sustenance measure. Since quality enhancement is a continuous process, the IQAC will become a part of Guru Nanak College of 
                                    Pharmaceutical Sciences, Dehradun’s system and work towards achieving the goals of quality enhancement and sustenance. The main task
                                     of the IQAC is to develop a system for conscious, consistent, and catalytic improvement in the overall performance of institutions. 
                                     During the post-accreditation period, it will channelize all efforts and measures of the institution towards promoting holistic academic 
                                     excellence.</p>
                                </div>
                                <hr>
                                <div class="data-block">
                                    <h3>Some of the functions expected of the IQAC are:</h3>
                                    <ul class="list-unstyled p-0 list-icon-4 ps-4 mt-3">
                                        <li>Developing and applying quality benchmarks/parameters for various academic and administrative activities of the institution.</li>
                                        <li>Creating a learner-centric environment conducive to quality education and helping faculty adopt the required knowledge and technology for participatory teaching and learning processes.</li>
                                        <li>Arranging for feedback from students, parents, and other stakeholders on quality-related institutional processes.</li>
                                        <li>Disseminating information on various quality parameters of higher education.</li>
                                        <li>Organizing inter and intra-institutional workshops and seminars on quality-related themes and promoting quality circles.</li>
                                        <li>Documenting various programs/activities leading to quality improvement.</li>
                                        <li>Acting as a nodal agency for coordinating quality-related activities, including the adoption and dissemination of best practices.</li>
                                        <li>Developing and maintaining an institutional database through MIS to enhance institutional quality.</li>
                                        <li>Cultivating a quality culture within the institution.</li>
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
                                    <img class="card-img-top" src="assets/images/khelo.webp" alt="Card image cap" style="height: 160px;">
                                    <div class="card-body">
                                        <a href="https://kheloindia.gov.in/" class="btn btn-primary col-lg-12">Khelo India</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/ministry.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="https://dbtyas-sports.gov.in/" class="btn btn-primary col-lg-12">Ministry of Youth Affairs and Sports</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/pharmacy-council.webp" alt="Card image cap" style="height: 134px;">
                                    <div class="card-body">
                                        <a href="https://www.pci.nic.in/" class="btn btn-primary col-lg-12">Pharmacy Council of India</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/radhakrishnan (1).webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="http://naac.gov.in/images/docs/DrRadhakrishnanCommittee-FinalReport.pdf" class="btn btn-primary col-lg-12">Dr. Radhakrishnan Committee Report</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/ugc.webp" alt="Card image cap" style="height: 180px;" >
                                    <div class="card-body">
                                        <a href="https://www.ugc.gov.in/" class="btn btn-primary col-lg-12">UGC Notices</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/uttarakhand.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="https://sports.uk.gov.in/" class="btn btn-primary col-lg-12">Uttarakhand Department of Sports</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/youth.webp" alt="Card image cap" style="height: 180px;">
                                    <div class="card-body">
                                        <a href="https://www.india.gov.in/topics/youth-sports" class="btn btn-primary col-lg-12">Youth & Sports</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/sports1.webp" alt="Card image cap" style="height: 150px;">
                                    <div class="card-body">
                                        <a href="https://sportsauthorityofindia.nic.in/sai/" class="btn btn-primary col-lg-12">Sports Authority of India</a>
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