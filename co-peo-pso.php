<?php require "common/header.php" ?>
<style>
    .nav-pills {
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 10px;
        margin-top: 20px;
        color: black !important;
    }

    .tab-content {
        width: 100%;
    }

    .pdf-container {
        width: 100%;
        height: 800px;
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 10px;
        margin-top: 20px;
        color: black !important;
    }


    .approvals-link {
        text-align: center;
        display: none;
        background-color: #d7d7d7 !important;
        color: black !important;
    }

    .approvals-link.active {
        display: flex;
        background-color: #00b5fb !important;

    }

    .button-icon {
        margin-right: 8px;
    }

    .approvals-link img {
        height: 100px;
        width: 100px;
    }


    .approvals-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #0056b3;
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        transition: background-color 0.3s ease, transform 0.3s ease;
        text-decoration: none;
        border: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        margin-top: 20px;
    }

    .approvals-link:hover,
    .approvals-link:focus {
        background-color: #004494;
        transform: translateY(-2px);
        color: #e0e0e0;
        text-decoration: none;
    }

    .approvals-link .button-icon {
        width: 100px;
        height: auto;
        border: 2px solid #fff;
        border-radius: 15%;
        padding: 1px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        margin-right: 10px;
    }

    .button-content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    .button-icon {
        max-width: 100px;
    }

    .button-text {
        margin-top: 5px;
    }

    .nav-link.approvals-link {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: auto;
        gap: 10px;
        text-align: left;
    }

    .button-icon {
        width: 40px;
        height: auto;
    }

    #content {
        display: none !important;
    }
</style>
<div class="banner-area about" style="background-image: url(assets/images/banner/13.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>CO-PO-PSO</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container ">
        <div class="card mt-2 mb-2">

            <div class="row card-body">
                <div class="col-md-4 col-12 ">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link approvals-link active" id="v-pills-UGC-tab" data-bs-toggle="pill" data-bs-target="#v-pills-UGC" type="button" role="tab" aria-controls="v-pills-UGC" aria-selected="false">
                            Syllabus - D.Pharm
                        </button>
                        <button class="nav-link approvals-link" id="v-pills-HNBGMU-tab" data-bs-toggle="pill" data-bs-target="#v-pills-HNBGMU" type="button" role="tab" aria-controls="v-pills-HNBGMU" aria-selected="false">
                            COs
                        </button>
                        <button class="nav-link approvals-link " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"> Syllabus - B.Pharm
                        </button>
                        <button class="nav-link approvals-link" id="v-pills-MSME-tab" data-bs-toggle="pill" data-bs-target="#v-pills-MSME" type="button" role="tab" aria-controls="v-pills-MSME" aria-selected="false">
                           Program Educational Objectives (PEOs)
                        </button>
                         <button class="nav-link approvals-link" id="v-pills-PO-tab" data-bs-toggle="pill" data-bs-target="#v-pills-PO" type="button" role="tab" aria-controls="v-pills-PO" aria-selected="false">
                           PROGRAM OUTCOMES (POs)
                        </button>

                        <!--  <button class="nav-link approvals-link" id="v-pills-PCI-tab" data-bs-toggle="pill" data-bs-target="#v-pills-PCI" type="button" role="tab" aria-controls="v-pills-PCI" aria-selected="false">
                            <img src="images/Pharmacy_Council_of_India Logo.webp" alt="PCI Icon" class="button-icon"> Pharmacy Council of India
                        </button>
                        <button class="nav-link approvals-link" id="v-pills-UBTER-tab" data-bs-toggle="pill" data-bs-target="#v-pills-UBTER" type="button" role="tab" aria-controls="v-pills-UBTER" aria-selected="false">
                            <img src="images/UBTER.webp" alt="UBTER Icon" class="button-icon"> Uttarakhand Board of Technical<br>Education Roorkee
                        </button>
                        <button class="nav-link approvals-link" id="v-pills-UTU-tab" data-bs-toggle="pill" data-bs-target="#v-pills-UTU" type="button" role="tab" aria-controls="v-pills-UTU" aria-selected="false">
                            <img src="images/Uttarakhand_Technical_University_logo.webp" alt="UTU Icon" class="button-icon"> Uttarakhand Technical University
                        </button>  -->
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <h2 style="text-align: center;">Syllabus CO - B.Pharm</h2>
                            <div class="pdf-container">
                                <embed src="assets/images/Syllabus_B_Pharm.pdf" type="application/pdf" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="tab-pane fade " id="v-pills-UGC" role="tabpanel" aria-labelledby="v-pills-UGC-tab" tabindex="0">
                            <h4 style="text-align: center;">Syllabus CO - D.Pharm</h4>
                            <div class="pdf-container">
                                <embed src="assets/images/D-Pharm-Syllabus.pdf" type="application/pdf" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="tab-pane fade " id="v-pills-MSME" role="tabpanel" aria-labelledby="v-pills-MSME-tab" tabindex="0">
                           
                          <div class="container">
                            <div class="iqac-data">
                                <div class="data-block">
                                    <h3>Program Educational Objectives (PEOs) </h3>
                                    <p>PEO 1: Graduates will demonstrate comprehensive knowledge in pharmaceutical sciences, integrating multidisciplinary learning, Indian Knowledge Systems, and ethical practices to address contemporary healthcare challenges.</p>
                                        <p>PEO 2: Graduates will engage in advanced research, innovation, and collaborative projects that contribute to sustainable drug development, regulatory compliance, and translational healthcare solutions.</p>
                                        <p>PEO 3: Graduates will be equipped with 21st-century skills, digital fluency, and entrepreneurial mindset to thrive in diverse pharmaceutical sectors including industry, academia, and public health.</p>
                                        <p>PEO 4: Graduates will uphold values of equity, sustainability, and community engagement, contributing to responsible healthcare practices and environmental stewardship.</p>
                                        <p>PEO 5: Graduates will evolve as ethical leaders and lifelong learners, committed to continuous professional development, policy advocacy, and global best practices in pharmacy.</p>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                         <div class="tab-pane fade " id="v-pills-PO" role="tabpanel" aria-labelledby="v-pills-PO-tab" tabindex="0">
                           
                          <div class="container">
                            <div class="iqac-data">
                                <div class="data-block">
                                    <h3>PROGRAM OUTCOMES (POs):</h3>
                                    <p>Pharmacy Knowledge: Possess knowledge and comprehension of the core and basic knowledge associated with the profession of pharmacy, including biomedical sciences; pharmaceutical sciences; behavioral, social, and administrative pharmacy sciences; and manufacturing practices.<p>
                                        <p>Planning Abilities: Demonstrate effective planning abilities including time management, resource management, delegation skills and organizational skills. Develop and implement plans and organize work to meet deadlines.</p>
                                        <p>Problem analysis: Utilize the principles of scientific enquiry, thinking analytically, clearly and critically, while solving problems and making decisions during daily practice. Find, analyze, evaluate and apply information systematically and shall make defensible decisions.</p>
                                        <p>Modern tool usage: Learn, select, and apply appropriate methods and procedures, resources, and modern pharmacy-related computing tools with an understanding of the limitations.</p>
                                        <p>Leadership skills: Understand and consider the human reaction to change, motivation issues, leadership and team-building when planning changes required for fulfillment of practice, professional and societal responsibilities. Assume participatory roles as responsible citizens or leadership roles when appropriate to facilitate improvement in health and well- being.</p>
                                   <p>Professional Identity: Understand, analyze and communicate the value of their professional roles in society (e.g. health care professionals, promoters of health, educators, managers, employers, employees).</p>
                                   <p>Pharmaceutical Ethics: Honour personal values and apply ethical principles in professional and social contexts. Demonstrate behavior that recognizes cultural and personal variability in values, communication and lifestyles. Use ethical frameworks; apply ethical principles while making decisions and take responsibility for the outcomes associated with the decisions.</p>
                                   <p>Communication: Communicate effectively with the pharmacy community and with society at large, such as, being able to comprehend and write effective reports, make effective presentations and documentation, and give and receive clear instructions.</p>
                                   <p>The Pharmacist and society: Apply reasoning informed by the contextual knowledge to assess societal, health, safety and legal issues and the consequent responsibilities relevant to the professional pharmacy practice.</p>
                                   <p>Environment and sustainability: Understand the impact of the professional pharmacy solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</p>
                                   <p>Life-long learning: Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change. Self- assess and use feedback effectively from others to identify learning needs and to satisfy these needs on an ongoing basis.</p>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade show" id="v-pills-HNBGMU" role="tabpanel" aria-labelledby="v-pills-HNBGMU-tab" tabindex="0">
                            <h4 style="text-align: center;">COs</h4>
                            <div class="pdf-container">
                                <embed src="assets/images/GNC-cos.pdf" type="application/pdf" width="100%" height="100%">
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require "common/footer.php" ?>