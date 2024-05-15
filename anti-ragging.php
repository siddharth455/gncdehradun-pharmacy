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
        color: #000000;
    }

    .nav-link.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
</style>
<div class="banner-area about" style="background-image: url(assets/images/anti-ragging.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Anti Ragging Committee</h2>
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
                <button class="nav-link main" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Functions</button>
                <button class="nav-link main" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Procedures</button>
                <!-- <button class="nav-link main" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                <button class="nav-link main" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> -->
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="programmeStructure-section ">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-9">
                                    <div class="page-heading mb-4">
                                        <h2 class="mb-3">Prohibition against Ragging</h2>
                                        <p>Any conduct by any student or students, whether by the word spoken or written or by an act, which has the effect of teasing, treating or handling with rudeness a fresher or any other student. Any act of physical abuse including all its variants-sexual abuse, homosexual assaults, and stripping, forcing obscene and lewd acts, gestures, causing bodily harm or any other danger to health of a person.</p>
                                    </div>
                                    <div class="alert alert-danger p-4">
                                        <div class="page-sub-heading mb-2">
                                            <h3 class="mb-3">Statutory Warning as laid down by the Hon'ble Supreme Court</h3>
                                        </div>
                                        <p>Following forms of ragging are strictly prohibited:</p>
                                        <ul class="list-unstyled p-0 list-icon-3 ps-4" style="font-weight: 500">
                                            <li>Dress Code Ragging</li>
                                            <li>Formal Introduction</li>
                                            <li>Verbal Torture &amp; Sexual Abuse</li>
                                            <li>Playing the Fool</li>
                                            <li>Hostel Ragging</li>
                                            <li>Drug Abuse</li>
                                        </ul>
                                        <div class="page-sub-heading mb-2 mt-4">
                                            <h3 class="mb-3">Hon'ble Supreme Court of India</h3>
                                            <ul class="list-unstyled p-0 list-icon-4 ps-4">
                                                <li>Students of the College have to give an undertaking along with their parents/ guardians that they/their wards would not indulge in any form of ragging. The Management, the Dean/Director/Principal and the Teaching Staff interact with the Freshers and teach them about their rights as well as obligations to fight against ragging to which they may be subjected or which comes into their knowledge. The concerned authorities would promptly deal with such a menace. Proctorial Board has been set up in the College to maintain discipline and ensure amicable relations among students. The Management and the Teaching Staff keeps a close watch on vulnerable locations in the College such as the Class Rooms, Canteen, Food Court, Cafeteria, the playground, Hostels etc. and any indulgence in ragging is strictly dealt with.</li>
                                                <li>The Management, Teaching, Non-Teaching Staff and the Hostel Wardens carefully guard against such unlawful activities and prompt action is taken against the culprits, if any.</li>
                                                <li>Any student found indulging in ragging shall be expelled from the College and FIR against such students shall be lodged immediately at the Police Station. Form of the undertaking against ragging, is enclosed with the admission form.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="page-sub-heading mb-4 mt-5">
                                        <h3 class="mb-3">The College has various bodies for the students' support and their grievance redressal.</h3>
                                        <p>Various committees are in operation to guard campus, hostels, bus stops and buses to deter any stray incidents. If someone is found indulged in ragging of any type is liable to be dealt with severely and legal action.</p>
                                    </div>
                                    <div class="accordion mb-4" id="accordionExample">
                                        <div class="accordion-item">
                                            <h3 class="mb-3">Anti-Ragging measures are as under:</h3>
                                            <ul class="list-unstyled p-0 list-icon-3 ps-4">
                                                <li>In adherence to the directives of the Honourable Supreme Court and in accordance with the UGC Regulations, on curbing the Menace of Ragging in Higher Education Institutions, 2009, the College has constituted the Anti Ragging Committee and Anti Ragging Squads for overseeing the strict and meticulous implementations of all the directives. The List of Members of the Anti-Ragging Committee and Anti Ragging Squads along with their Mobile Numbers are displayed at prominent places for the benefit of the students.
                                                </li>
                                                <li>The College educates the students enrolled in various programmes at the beginning of the academic session about the Anti Ragging Policy and zero tolerance for ragging at the College.
                                                </li>
                                                <li>Each student as well as his/her parents/guardians, are mandatorily required to submit separate Undertakings in the form of an Affidavit at the time of admission to the effect that they are aware of the prohibition of ragging and the punishment prescribed both under penal laws as well as under these regulations.
                                                </li>
                                                <li>Anti-ragging hoardings, banners and billboards are displayed at the prominent places in the College campus including hostels, canteens, cafeteria, food court, buses, playgrounds, lawns, laboratories, parking, etc.
                                                </li>
                                                <li>A close and regular liaison is maintained with the local police to guard against the incident of ragging. FIR will be lodged in the police station on all reported ragging cases.
                                                </li>
                                                <li>Surprise checks of hostels, canteen, cafeteria, parking, buses, and food court etc. are carried out regularly by the Management, Teaching Staff and the Hostel Wardens.
                                                </li>
                                                <li>The Management, the Deans and the Teaching Staff interact with the Freshers and teach them about their rights as well as obligations to enlighten them against ragging to which they may be subjected or which comes into their knowledge. The concerned authorities would promptly deal with such a menace.
                                                </li>
                                                <li>In case, any student encounters ragging by any of the senior students, he/she is immediately required to contact the members of the Anti-Ragging Committee or College Officials, who will take an immediate corrective action and necessary proceedings will be initiated against the culprits engaged in ragging activities.
                                                </li>
                                                <li>Proctorial Board has been set up in the College to maintain discipline and ensure amicable relations among students.
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="col-lg-3">
                                    <div class="position-sticky" style="top: 150px">
                                        <img src="assets/images/antiragging.png" alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <div class="pdf-container">
                        <embed src="assets/images/GNC Antiragging Committee 2018-2019.pdf" type="application/pdf" width="100%" height="600px">
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                <div class="pdf-container">
                        <embed src="assets/images/GNC Antiragging Committee Procedures 2018-2019.pdf" type="application/pdf" width="100%" height="600px">
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                    <!-- Content for Messages Tab -->
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                    <!-- Content for Settings Tab -->
                </div>
            </div>
        </div>
    </div>
</div>


<?php require "common/footer.php" ?>