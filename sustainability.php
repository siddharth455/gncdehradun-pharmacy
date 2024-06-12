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
                    <h1>SUSTAINABILITY, INNOVATIONS<br> &amp BEST PRACTICES</h1>
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
                <button class="nav-link main" id="v-pills-team-tab" data-bs-toggle="pill" data-bs-target="#v-pills-team" type="button" role="tab" aria-controls="v-pills-team" aria-selected="false">Gender Equity</button>
                <button class="nav-link main" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Environment & Energy Audit</button>
                <button class="nav-link main" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Water Conservation</button>
                <button class="nav-link main" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Waste management</button>
                <button class="nav-link main" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Energy Conservation & Renewable Energy</button>
                <button class="nav-link main" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Green Campus Inititatives</button>
                <button class="nav-link main" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Disabled Friendly environment</button>
                <button class="nav-link main" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Social Responsibility and Harmoy</button>
                <button class="nav-link main" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Effective Citizenship</button>
                <button class="nav-link main" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Code of conduct</button>
                <button class="nav-link main" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Celebration of commemorative days</button>
                <button class="nav-link main" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Best Practices</button>
                <button class="nav-link main" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Distinctiveness</button>

            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">SUSTAINABILITY, INNOVATIONS &amp BEST PRACTICES</h4>
                                <div class="data-block">
                                    <h3>About</h3>
                                    <strong>Sustainability:</strong>

                                    <p>The Guru Nanak College of Pharmaceutical Sciences recognizes the importance of sustainability in pharmaceutical education and practice. The college aims to reduce its environmental footprint by:</p>
                                    <ul>
                                        <li>1. Implementing energy-efficient lighting and equipment.</li>
                                        <li>2. Promoting recycling and waste reduction programs.</li>
                                        <li>3. Encouraging the use of public transport, carpooling, and cycling.</li>
                                        <li>4. Creating a green campus with lush vegetation and minimal water usage.</li>
                                        <li>5. Incorporating sustainable practices in curriculum and research projects.</li>
                                    </ul>
                                    <strong>Innovations:</strong>

                                    <p>The college stays at the forefront of innovation in pharmaceutical education and research by:</p>
                                    <ul>
                                        <li>1. Establishing a Centre of Excellence for Pharmaceutical Research and Development.</li>
                                        <li>2. Collaborating with industry partners to develop novel drug delivery systems and formulations.</li>
                                        <li>3. Introducing cutting-edge technologies like artificial intelligence, machine learning, and nanotechnology in the curriculum.</li>
                                        <li>4. Encouraging entrepreneurship and start-ups in the pharmaceutical sector.</li>
                                        <li>5. Organizing workshops and conferences on emerging trends and innovations in pharmaceutical sciences.</li>
                                    </ul>
                                    <strong>Best Practices:</strong>

                                    <p>The Guru Nanak College of Pharmaceutical Sciences adheres to best practices in pharmaceutical education and research by:</p>
                                    <ul>
                                        <li>1. Maintaining high standards of academic excellence and quality assurance.</li>
                                        <li>2. Fostering a culture of innovation, creativity, and critical thinking.</li>
                                        <li>3. Encouraging interdisciplinary collaboration and teamwork.</li>
                                        <li>4. Providing opportunities for students to engage in community service and outreach programs.</li>
                                        <li>5. Ensuring compliance with regulatory requirements and industry standards.</li>
                                        <li>6. Continuously assessing and improving curriculum and pedagogy to meet industry needs.</li>
                                    </ul>
                                    <p>By focusing on sustainability, innovations, and best practices, the Guru Nanak College of Pharmaceutical Sciences aims to produce competent, socially responsible, and innovative professionals who can make a positive impact in the pharmaceutical industry and society at large.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "common/footer.php" ?>