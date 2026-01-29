<?php
require "common/header.php";
?>

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
        padding: 15px;
        background: #fff;
    }

    .nav-link.main {
        background-color: #f8f9fa;
        color: #495057;
        border-radius: 10px;
        padding: 10px 20px;
        margin-bottom: 10px;
    }

    .nav-link.active {
        text-decoration: underline;
    }

    /* Video playlist style */
    .video-item img {
        width: 300px;
        border-radius: 6px;
    }

    .video-item {
        display: flex;
        gap: 15px;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-decoration: none;
        color: #000;
    }

    .video-item:hover {
        background-color: #f5f5f5;
    }

    #subjectFilter {
        max-height: 45px;
    }

    #subjectFilter option {
        white-space: normal;
    }
</style>

<div class="banner-area about" style="background-image: url(assets/images/banner/43.webp); background-size: cover; background-position: center;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>LMS</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-4 pb-5">
    <div class="row">

        <!-- LEFT TABS -->
        <div class="col-lg-3 col-md-4 col-sm-5">
            <div class="nav flex-column nav-pills position-sticky" style="top: 150px">
                <button class="nav-link main active" data-bs-toggle="pill" data-bs-target="#tab-erp">ERP</button>
                <button class="nav-link main" data-bs-toggle="pill" data-bs-target="#tab-pdf">Study Material</button>
                <button class="nav-link main" data-bs-toggle="pill" data-bs-target="#tab-video">Video Lectures</button>
            </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="tab-content">

                <!-- ================= CYBORG ERP ================= -->
                <div class="tab-pane fade show active" id="tab-erp">
                    <div class="text-center py-5">
                        <a href="https://erp.yourcollege.com" target="_blank" class="btn btn-primary btn-lg">
                            Open ERP
                        </a>
                    </div>
                </div>

                <!-- ================= STUDY MATERIAL ================= -->
                <div class="tab-pane fade" id="tab-pdf">

                    <div class="mb-3">
                        <select class="form-select" id="subjectFilter">
                            <option value="all">All Subjects</option>
                            <option value="pharmaceutical-analysis">Pharmaceutical Analysis</option>
                            <option value="medicinal-chemistry-I">Medicinal Chemistry-I</option>
                            <option value="instrumental">Instrumental methods of Analysis</option>
                            <option value="novel">Novel Drug Delivery System</option>
                            <option value="hap-theory">HAP-(I) Theory</option>
                            <option value="pharmacology-(II)">Pharmacology-(II)</option>
                            <option value="pm">Pharmaceutical Microbiology</option>
                            <option value="pharmaceutics-1">Pharmaceutics(1)</option>
                            <option value="pharmacotherapeutics">Pharmacotherapeutics(1)</option>
                            <option value="rb">Remedial Biology</option>
                            <option value="pp-1">Physical Pharmaceutics-I</option>
                            <option value="pj">Pharmaceutical Jurisprudence</option>
                            <option value="ple-1">Pharmacy Law and Ethics(1)</option>
                            <option value="sp-1">Social Pharmacy (1)</option>
                            <option value="pp-2">Pharmacognosy & Phytochemistry-II</option>
                            <option value="cpm-1">Community Pharmacy and Management(1)</option>
                            <option value="pc-1">Pharmaceutical Chemistry (1)</option>
                            <option value="pic">Pharmaceutical Inorganic Chemistry</option>
                            <option value="bcp">Biochemistry and clinical Pathology(1)</option>
                            <option value="hap-1">HAP-1</option>
                            <option value="pharmacognosy-1">Pharmacognosy-(I)</option>
                            <option value="pharmacology-1">Pharmacology(1)</option>
                        </select>
                    </div>

                    <div class="row" id="pdfContainer">

                        <!-- Pharmaceutical Analysis -->
                        <div class="col-md-4 pdf-item" data-subject="pharmaceutical-analysis">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>PHARMACEUTICAL ANALYSIS : BP102T-SM01</h6>
                                    <a href="prayas/Pharmaceutical-analysis/PHARMACEUTICAL ANALYSIS  _ BP102T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pharmaceutical-analysis">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>ACID BASE TITRATION : BP102T-SM01</h6>
                                    <a href="prayas/Pharmaceutical-analysis/ACID BASE TITRATION _ BP102T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <!-- Medicinal Chemistry -->
                        <div class="col-md-4 pdf-item" data-subject="medicinal-chemistry-I">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>ANTIHISTAMINIC DRUG : BP501T-SM01</h6>
                                    <a href="prayas/medicinal-chemistry-I/ANTIHISTAMINIC DRUG _ BP501T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <!-- Instrumental -->
                        <div class="col-md-4 pdf-item" data-subject="instrumental">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>UNIT 1 : BP701T-SM01</h6>
                                    <a href="prayas/instrumental-methods-of-analysis/UNIT 1 _ BP701T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <!-- Novel Drug Delivery -->
                        <div class="col-md-4 pdf-item" data-subject="novel">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Unit 1 : BP704T-SM01</h6>
                                    <a href="prayas/novel/Unit 1 _ BP704T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="novel">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Unit 2 : BP704T-SM02</h6>
                                    <a href="prayas/novel/Unit 2 _ BP704T-SM02.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="novel">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Unit III : BP704T-SM03</h6>
                                    <a href="prayas/novel/Unit III _ BP704T-SM03.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="novel">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Unit IV : BP704T-SM04</h6>
                                    <a href="prayas/novel/Unit IV _ BP704T-SM04.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="novel">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Unit V : BP704T-SM05</h6>
                                    <a href="prayas/novel/Unit V _ BP704T-SM05.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="hap-theory">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>INTRODUCTION TO HUMAN ANATOMY AND PHYSIOLOGY : BP101T-SM01</h6>
                                    <a href="prayas/hap-theory/INTRODUCTION TO HUMAN ANATOMY AND PHYSIOLOGY _ BP101T-SM01.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="hap-theory">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>PRACTICE QUESTIONS FROM PART-I OF HAP-I : BP101T-SM02</h6>
                                    <a href="prayas/hap-theory/PRACTICE QUESTIONS FROM PART-I OF HAP-I _ BP101T-SM02.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="hap-theory">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>HAP NOTES UNIT 1 : BP101T-SM02</h6>
                                    <a href="prayas/hap-theory/HAP NOTES UNIT 1 _ BP101T-SM02.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="hap-theory">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>HAP-1 ASSIGNMENT-II : BP101T-SM03</h6>
                                    <a href="prayas/hap-theory/HAP-1 ASSIGNMENT-II _ BP101T-SM03.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pharmacology-(II)">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Pharmacology Unit-1 : BP503T-SM01</h6>
                                    <a href="prayas/pharmacology-(II)/Pharmacology Unit-1 _ BP503T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmacology-(II)">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Pharmacology -II Assignment-1 : BP503T-SM02</h6>
                                    <a href="prayas/pharmacology-(II)/Pharmacology -II Assignment-1 _ BP503T-SM02.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pm">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Microbiology-UNIT-1 Part 1 : BP303T-SM01</h6>
                                    <a href="prayas/pm/Microbiology-UNIT-1 Part 1 _ BP303T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pm">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Microbiology Assignment-1 : BP303T-SM02</h6>
                                    <a href="prayas/pm/Microbiology-UNIT-1 Part 1 _ BP303T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pharmaceutics-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>History of pharmacy : ER20-11T-1-SM01</h6>
                                    <a href="prayas/pharmaceutics-1/History of pharmacy  _ ER20-11T-1-SM01.jpg" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmaceutics-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>History of pharmacy : ER20-11T-1-SM02</h6>
                                    <a href="prayas/pharmaceutics-1/History of pharmacy  _ ER20-11T-1-SM02.jpg" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmaceutics-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Hammer mill : ER20-11T-1-SM04</h6>
                                    <a href="prayas/pharmaceutics-1/Hammer mill  _ ER20-11T-1-SM04.jpg" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmaceutics-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Pharmacopoeia : ER20-11T-1-SM05</h6>
                                    <a href="prayas/pharmaceutics-1/Pharmacopoeia  _ ER20-11T-1-SM05.jpg" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmaceutics-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Pharmacopoeia : ER20-11T-1-SM06</h6>
                                    <a href="prayas/pharmaceutics-1/Pharmacopoeia  _ ER20-11T-1-SM06.jpg" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmaceutics-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Packaging material : ER20-11T-1-SM07</h6>
                                    <a href="prayas/pharmaceutics-1/Packaging material  _ ER20-11T-1-SM07.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmaceutics-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Extraction : ER20-11T-1-SM08</h6>
                                    <a href="prayas/pharmaceutics-1/Extraction  _ ER20-11T-1-SM08.jpg" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmaceutics-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Digestion : ER20-11T-1-SM09</h6>
                                    <a href="prayas/pharmaceutics-1/Digestion  _ ER20-11T-1-SM09.jpg" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmaceutics-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Unit operation : ER20-11T-1-SM10</h6>
                                    <a href="prayas/pharmaceutics-1/Unit operation  _ ER20-11T-1-SM10.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pharmacotherapeutics">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Pharmacotherapeutics : ER-20-24T-1-SM01</h6>
                                    <a href="prayas/pharmacotherapeutics/Pharmacotherapeutics  _ ER-20-24T-1-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmacotherapeutics">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Introduction about diseases : ER-20-24T-1-SM02</h6>
                                    <a href="prayas/pharmacotherapeutics/Introduction about diseases  _ ER-20-24T-1-SM02.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="rb">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>UNIT - 1 : 106T-SM01</h6>
                                    <a href="prayas/rb/UNIT - 1 _ 106T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="rb">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>UNIT 2 : 106T-SM02</h6>
                                    <a href="prayas/rb/UNIT 2 _ 106T-SM02.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pp-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>SOLUBILITY : BP302T-SM01</h6>
                                    <a href="prayas/pp-1/SOLUBILITY _ BP302T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pp-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>STATE OF MATTER : BP302T-SM02</h6>
                                    <a href="prayas/pp-1/STATE OF MATTER  _ BP302T-SM02.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pp-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>SURFACE AND INTERFACIAL PHENOMENON : BP302T-SM03</h6>
                                    <a href="prayas/pp-1/SURFACE AND INTERFACIAL PHENOMENON _ BP302T-SM03.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pj">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>DRUGS AND COSMETICS ACT, 1940 AND ITS RULES 1945 : BP505T-SM01</h6>
                                    <a href="prayas/pj/DRUGS AND COSMETICS ACT, 1940 AND ITS RULES 1945 _ BP505T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pj">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>DRUGS AND COSMETICS ACT, 1940 AND ITS RULES 1945 : BP505T-SM02</h6>
                                    <a href="prayas/pj/DRUGS AND COSMETICS ACT, 1940 AND ITS RULES 1945 _ BP505T-SM02.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="ple-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>GENERAL PRINCIPLES OF LAW : ER-20-26T-1-SM01</h6>
                                    <a href="prayas/ple/GENERAL PRINCIPLES OF LAW _ ER-20-26T-1-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="sp-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Chapter 1 : ER20-15T-1-SM01</h6>
                                    <a href="prayas/sp/Chapter 1 _ ER20-15T-1-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pp-2">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Unit 2 : BP504T-SM01</h6>
                                    <a href="prayas/pp-2/Unit 2 _ BP504T-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pp-2">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Unit 2 : BP504T-SM02</h6>
                                    <a href="prayas/pp-2/Unit 2 _ BP504T-SM02.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="cpm-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Chapter 1 : ER-20-22T-1-SM01</h6>
                                    <a href="prayas/cpm-1/Chapter 1 _ ER-20-22T-1-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pc-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Pharmaceutical chemistry : ER20-12T-1-SM01</h6>
                                    <a href="prayas/pc-1/Pharmaceutical chemistry  _ ER20-12T-1-SM01.pptx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pc-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Introduction, scope and objectives : ER20-12T-1-SM02</h6>
                                    <a href="prayas/pc-1/Introduction, scope and objectives  _ ER20-12T-1-SM02.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pc-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Limit test : ER20-12T-1-SM03</h6>
                                    <a href="prayas/pc-1/Limit test  _ ER20-12T-1-SM03.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pc-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Impurities : ER20-12T-1-SM04</h6>
                                    <a href="prayas/pc-1/Impurities  _ ER20-12T-1-SM04.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pc-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Volumetric analysis : ER20-12T-1-SM07</h6>
                                    <a href="prayas/pc-1/Volumetric analysis  _ ER20-12T-1-SM07.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pc-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Haemantinicd : ER20-12T-1-SM08</h6>
                                    <a href="prayas/pc-1/Haemantinicd _ ER20-12T-1-SM08.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pc-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Nomenclature : ER20-12T-1-SM09</h6>
                                    <a href="prayas/pc-1/Nomenclature  _ ER20-12T-1-SM09.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pc-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Drug acting on CNS : ER20-12T-1-SM10</h6>
                                    <a href="prayas/pc-1/Drug acting on CNS _ ER20-12T-1-SM10.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pc-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Drug acting on ANS : ER20-12T-1-SM11</h6>
                                    <a href="prayas/pc-1/Drug acting on ANS  _ ER20-12T-1-SM11.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pc-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Drug acting on CVS : ER20-12T-1-SM12</h6>
                                    <a href="prayas/pc-1/Drug acting on CVS _ ER20-12T-1-SM12.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pic">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Impurities : BP104T-SM01</h6>
                                    <a href="prayas/pic/Impurities  _ BP104T-SM01.pptx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pic">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Impurities : BP104T-SM02</h6>
                                    <a href="prayas/pic/Impurities  _ BP104T-SM02.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pic">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Limit test : BP104T-SM03</h6>
                                    <a href="prayas/pic/Limit test  _ BP104T-SM03.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pic">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Limit test : BP104T-SM04</h6>
                                    <a href="prayas/pic/Limit test  _ BP104T-SM04.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pic">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Acid , base and buffers : BP104T-SM03</h6>
                                    <a href="prayas/pic/Acid , base and buffers _ BP104T-SM03.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="bcp">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>2 Chapter : ER-20-23T-1-SM01</h6>
                                    <a href="prayas/bcp/2 Chapter _ ER-20-23T-1-SM01.png" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="bcp">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>CHAPTER 1 : ER-20-23T-1-SM02</h6>
                                    <a href="prayas/bcp/CHAPTER 1 _ ER-20-23T-1-SM02.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="bcp">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>CHAPTER 2 : ER-20-23T-1-SM03</h6>
                                    <a href="prayas/bcp/CHAPTER 2 _ ER-20-23T-1-SM03.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="bcp">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>CHAPTER 3 : ER-20-23T-1-SM04</h6>
                                    <a href="prayas/bcp/CHAPTER 3 _ ER-20-23T-1-SM04.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="bcp">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>CHAPTER 4 : ER-20-23T-1-SM05</h6>
                                    <a href="prayas/bcp/CHAPTER 4 _ ER-20-23T-1-SM05.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="bcp">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>CHAPTER 5 : ER-20-23T-1-SM06</h6>
                                    <a href="prayas/bcp/CHAPTER 5 _ ER-20-23T-1-SM06.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="hap-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>CHAPTER 1 : ER20-14T-1-SM01</h6>
                                    <a href="prayas/hap-1/CHAPTER 1 _ ER20-14T-1-SM01.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="hap-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>CHAPTER 2 : ER20-14T-1-SM02</h6>
                                    <a href="prayas/hap-1/CHAPTER 2  _ ER20-14T-1-SM02.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="hap-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>CHAPTER 3 HAP : ER20-14T-1-SM03</h6>
                                    <a href="prayas/hap-1/CHAPTER 3 HAP _ ER20-14T-1-SM03.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pharmacognosy-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Chapter 1 : ER20-13T-1-SM03</h6>
                                    <a href="prayas/pharmacogonosy/Chapter 1  _ ER20-13T-1-SM03.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmacognosy-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Chapter 2 : ER20-13T-1-SM04</h6>
                                    <a href="prayas/pharmacogonosy/Chapter 2 _ ER20-13T-1-SM04.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmacognosy-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Adulteration chapter 2 : ER20-13T-1-SM05</h6>
                                    <a href="prayas/pharmacogonosy/Adulteration chapter 2 _ ER20-13T-1-SM05.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmacognosy-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Chapter 3 : ER20-13T-1-SM06</h6>
                                    <a href="prayas/pharmacogonosy/Chapter 3  _ ER20-13T-1-SM06.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmacognosy-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Alkaloids, glucoside, tanins : ER20-13T-1-SM07</h6>
                                    <a href="prayas/pharmacogonosy/Alkaloids, glucoside, tanins _ ER20-13T-1-SM07.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pdf-item" data-subject="pharmacology-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Pharmacology chapter 1 : ER-20-21T-1-SM01</h6>
                                    <a href="prayas/pharmacology-1/Pharmacology chapter 1  _ ER-20-21T-1-SM01.docx" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdf-item" data-subject="pharmacology-1">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6>Chapter 2 pharmacology : ER-20-21T-1-SM02</h6>
                                    <a href="prayas/pharmacology-1/Chapter 2 pharmacology _ ER-20-21T-1-SM02.pdf" target="_blank">View PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ================= VIDEO LECTURES ================= -->
                <div class="tab-pane fade" id="tab-video">

                    <a class="video-item" target="_blank" href="https://www.youtube.com/watch?v=7hk7G0SEhZ0&list=PL6kSKzwBxDk_LtSJwWgUEJS-9pcvfQPz4&index=1">
                        <img src="https://img.youtube.com/vi/7hk7G0SEhZ0/mqdefault.jpg">
                        <div>
                            <h6>Introduction to Pharmaceutics</h6>
                            <small>Guru Nanak College</small>
                        </div>
                    </a>

                    <a class="video-item" target="_blank" href="https://www.youtube.com/watch?v=Panoojnf0Zw&list=PL6kSKzwBxDk_LtSJwWgUEJS-9pcvfQPz4&index=2">
                        <img src="https://img.youtube.com/vi/Panoojnf0Zw/mqdefault.jpg">
                        <div>
                            <h6>Basics of Pharmacology - By Dr. S.Duraivel</h6>
                            <small>Guru Nanak College</small>
                        </div>
                    </a>

                     <a class="video-item" target="_blank" href="https://www.youtube.com/watch?v=f-LGmPLucG0&list=PL6kSKzwBxDk_LtSJwWgUEJS-9pcvfQPz4&index=3">
                        <img src="https://img.youtube.com/vi/f-LGmPLucG0/mqdefault.jpg">
                        <div>
                            <h6>Route of Drug Administration</h6>
                            <small>Guru Nanak College</small>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- FILTER SCRIPT -->
<script>
    document.getElementById('subjectFilter')?.addEventListener('change', function() {
        let value = this.value;
        document.querySelectorAll('.pdf-item').forEach(item => {
            item.style.display = (value === 'all' || item.dataset.subject === value) ? 'block' : 'none';
        });
    });
</script>

<?php
require "common/footer.php";
?>