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
<div class="banner-area about" style="background-image: url(assets/images/mou.webp);">
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
                        <button class="nav-link approvals-link" id="v-pills-UGC-tab" data-bs-toggle="pill" data-bs-target="#v-pills-UGC" type="button" role="tab" aria-controls="v-pills-UGC" aria-selected="false">
                            Syllabus - D.Pharm
                        </button>
                        <button class="nav-link approvals-link" id="v-pills-HNBGMU-tab" data-bs-toggle="pill" data-bs-target="#v-pills-HNBGMU" type="button" role="tab" aria-controls="v-pills-HNBGMU" aria-selected="false">
                            CO - D.Pharm
                        </button>
                        <button class="nav-link approvals-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"> Syllabus - B.Pharm
                        </button>
                        <button class="nav-link approvals-link" id="v-pills-MSME-tab" data-bs-toggle="pill" data-bs-target="#v-pills-MSME" type="button" role="tab" aria-controls="v-pills-MSME" aria-selected="false">
                            PSO, PO &amp; CO - B.Pharm
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
                        <div class="tab-pane fade show" id="v-pills-UGC" role="tabpanel" aria-labelledby="v-pills-UGC-tab" tabindex="0">
                            <h4 style="text-align: center;">Syllabus CO - D.Pharm</h4>
                            <div class="pdf-container">
                                <embed src="assets/images/D-Pharm-Syllabus.pdf" type="application/pdf" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="v-pills-MSME" role="tabpanel" aria-labelledby="v-pills-MSME-tab" tabindex="0">
                            <h4 style="text-align: center;">PSO, PO &amp; CO - B.Pharm</h4>
                            <div class="pdf-container">
                                <embed src="assets/images/bpo-pso-bphram.pdf" type="application/pdf" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="v-pills-HNBGMU" role="tabpanel" aria-labelledby="v-pills-HNBGMU-tab" tabindex="0">
                            <h4 style="text-align: center;">CO - D.Pharm</h4>
                            <div class="pdf-container">
                                <embed src="assets/images/co-dpharm.pdf" type="application/pdf" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="v-pills-PCI" role="tabpanel" aria-labelledby="v-pills-PCI-tab" tabindex="0">
                            <h4 style="text-align: center;">Gurukul Kangri (Deemed University), Uttarakhand</h4>
                            <div class="pdf-container">
                                <embed src="" type="application/pdf" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="v-pills-UBTER" role="tabpanel" aria-labelledby="v-pills-UBTER-tab" tabindex="0">
                            <h4 style="text-align: center;">Gurukul Kangri (Deemed University), Uttarakhand</h4>
                            <div class="pdf-container">
                                <embed src="" type="application/pdf" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="v-pills-UTU" role="tabpanel" aria-labelledby="v-pills-UTU-tab" tabindex="0">
                            <h4 style="text-align: center;">Gurukul Kangri (Deemed University), Uttarakhand</h4>
                            <div class="pdf-container">
                                <embed src="" type="application/pdf" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require "common/footer.php" ?>