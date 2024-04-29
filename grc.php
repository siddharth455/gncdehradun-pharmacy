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
<div class="banner-area about" style="background-image: url(assets/images/grievance-redressal-head.webp); background-size: cover; background-position: center;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Grievance Redressal</h2>
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
                    <section class="programmeStructure-section pt-2 pb-2">
                        <div class="container">


                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="page-heading mb-4">
                                        <h2 class="mb-3">The College has various bodies for the students' support and their grievance redressal.</h2>
                                        <p>The objective of the various committees is to ensure that the students' welfare and interests are safeguarded, and their grievances are resolved in a timely and satisfactory manner.</p>
                                    </div>

                                    <div class="page-sub-heading mb-2">
                                        <h3 class="mb-3">Composition of College Student Grievance Redressal Cell (USGRC):</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <!-- <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><span style="font-weight: 400;">S.No.</span></th>
                                                    <th><span style="font-weight: 400;">Name of the Member</span></th>
                                                    <th><span style="font-weight: 400;">Designation</span></th>
                                                    <th><span style="font-weight: 400;">Position</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td><span style="font-weight: 400;">1.</span></td>
                                                    <td><span style="font-weight: 400;">Dr. Amit Bhatt</span></td>
                                                    <td><span style="font-weight: 400;">Campus Director-Guru Nanak College</span></td>
                                                    <td><span style="font-weight: 400;">Chairperson</span></td>
                                                </tr>

                                                <tr>
                                                    <td><span style="font-weight: 400;">2.</span></td>
                                                    <td><span style="font-weight: 400;">Prof. (Dr.) Poonam Rawat</span></td>
                                                    <td><span style="font-weight: 400;">Professor &amp; HOD-Law, LCD</span></td>
                                                    <td><span style="font-weight: 400;">Member</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span style="font-weight: 400;">3.</span></td>
                                                    <td><span style="font-weight: 400;">Prof. (Dr.) Vineet Kishore Srivastava</span></td>
                                                    <td><span style="font-weight: 400;">Professor-Mathematics, School of Applied &amp; Life Sciences</span></td>
                                                    <td><span style="font-weight: 400;">Member</span></td>
                                                </tr>

                                                <tr>
                                                    <td><span style="font-weight: 400;">4.</span></td>
                                                    <td><span style="font-weight: 400;">Dr. Nidhi Nainwal</span></td>
                                                    <td><span style="font-weight: 400;">Associate Professor, Guru Nanak Institute of Pharmaceutical Sciences</span></td>
                                                    <td><span style="font-weight: 400;">Member</span></td>
                                                </tr>



                                                <tr>
                                                    <td><span style="font-weight: 400;">5.</span></td>
                                                    <td><span style="font-weight: 400;">Dr. Rajendra Prasad</span></td>
                                                    <td><span style="font-weight: 400;">Associate Professor, School of Agricuture</span></td>
                                                    <td><span style="font-weight: 400;">Member Secretary</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span style="font-weight: 400;">6.</span></td>
                                                    <td><span style="font-weight: 400;">Ms. Sakshi Koli</span></td>
                                                    <td><span style="font-weight: 400;">Assistant Professor, CSE, Guru Nanak Institute of Technology</span></td>
                                                    <td><span style="font-weight: 400;">Member</span></td>
                                                </tr>

                                                <tr>
                                                    <td><span style="font-weight: 400;">7.</span></td>
                                                    <td><span style="font-weight: 400;">Ms. Aashi Garg</span></td>
                                                    <td><span style="font-weight: 400;">MBA, Guru Nanak Institute of Management</span></td>
                                                    <td><span style="font-weight: 400;">Special Invitee</span></td>
                                                </tr>


                                                <tr>
                                                    <td><span style="font-weight: 400;">8.</span></td>
                                                    <td><span style="font-weight: 400;">Mr. Aagman Kaparwan</span></td>
                                                    <td><span style="font-weight: 400;">MCA, Guru Nanak School of Computing Sciences</span></td>
                                                    <td><span style="font-weight: 400;">Special Invitee</span></td>
                                                </tr>

                                                <tr>
                                                    <td><span style="font-weight: 400;">9.</span></td>
                                                    <td><span style="font-weight: 400;">Ms. Ishu Bhardwaj</span></td>
                                                    <td><span style="font-weight: 400;">B.A.LL.B. (Hons.), Law College Dehradun</span></td>
                                                    <td><span style="font-weight: 400;">Special Invitee</span></td>
                                                </tr>

                                                <tr>
                                                    <td><span style="font-weight: 400;">10.</span></td>
                                                    <td><span style="font-weight: 400;">Mr. Ashish Chauhan</span></td>
                                                    <td><span style="font-weight: 400;">B.Tech. CSE, Guru Nanak Institute of Technology</span></td>
                                                    <td><span style="font-weight: 400;">Special Invitee</span></td>
                                                </tr>

                                                <tr>
                                                    <td><span style="font-weight: 400;">11.</span></td>
                                                    <td><span style="font-weight: 400;">Ms. Laxmi Kumari</span></td>
                                                    <td><span style="font-weight: 400;">B. Pharm., Guru Nanak Institute of Pharmaceutical Sciences</span></td>
                                                    <td><span style="font-weight: 400;">Special Invitee</span></td>
                                                </tr>


                                                <tr>
                                                    <td><span style="font-weight: 400;">12.</span></td>
                                                    <td><span style="font-weight: 400;">Mr. Mohit Devrani</span></td>
                                                    <td><span style="font-weight: 400;">BHM, Guru Nanak School of Hotel &amp; Hospitality Management</span></td>
                                                    <td><span style="font-weight: 400;">Special Invitee</span></td>
                                                </tr>


                                                <tr>
                                                    <td><span style="font-weight: 400;">13.</span></td>
                                                    <td><span style="font-weight: 400;">Ms. Raksha Chaudhary</span></td>
                                                    <td><span style="font-weight: 400;">B.Sc. (Hons.), Biotech., School of Applied &amp; Life Sciences</span></td>
                                                    <td><span style="font-weight: 400;">Special Invitee</span></td>
                                                </tr>


                                                <tr>
                                                    <td><span style="font-weight: 400;">14.</span></td>
                                                    <td><span style="font-weight: 400;">Ms. Riya Yadav</span></td>
                                                    <td><span style="font-weight: 400;">B.Sc. (Hons.), Agriculture, School of Agriculture</span></td>
                                                    <td><span style="font-weight: 400;">Special Invitee</span></td>
                                                </tr>

                                                <tr>
                                                    <td><span style="font-weight: 400;">15.</span></td>
                                                    <td><span style="font-weight: 400;">Ms. Ritika Rani Rajan</span></td>
                                                    <td><span style="font-weight: 400;">B.A (Hons.), Psychology, School of Liberal Arts</span></td>
                                                    <td><span style="font-weight: 400;">Special Invitee</span></td>
                                                </tr>

                                                <tr>
                                                    <td><span style="font-weight: 400;">16.</span></td>
                                                    <td><span style="font-weight: 400;">Ms. Gurpreet Kaur</span></td>
                                                    <td><span style="font-weight: 400;">B.Sc. Nursing, Guru Nanak College of Nursing</span></td>
                                                    <td><span style="font-weight: 400;">Special Invitee</span></td>
                                                </tr>

                                            </tbody>
                                        </table> -->
                                    </div>

                                    <div class="page-sub-heading mb-2">
                                        <h3 class="mb-3">Scope of College Student Grievance Redressal Cell (SGRC):</h3>
                                        <p>Any discontent or dissatisfaction that a student faces or even imagines, when not addressed properly is treated as grievance. Grievance is an upward communication.</p>
                                    </div>

                                    <div class="alert alert-primary">
                                        The SGRC will address the complaint(s) made by an aggrieved student(s) which were not resolved at Department/College level.


                                    </div>

                                    <div class="page-sub-heading mb-2">
                                        <h3 class="mb-3">Standard Operating Procedure for Handling Grievance by SGRC:</h3>
                                    </div>

                                    <ul class="list-unstyled p-0 list-icon-3 ps-4">
                                        <li>Guru Nanak College took advantage of ICT enhancements and came up with the "Online Grievance Registering and Monitoring System". It is a digital platform for Students to identify and apply for grievances/queries. This platform ensures a time-bound mechanism for redressal of the grievance(s).</li>
                                        <li>The complainant needs to register the grievance on the “STUDENT GRIEVANCE REDRESSAL CELL” on the College web site ‘uudoon.in’.
                                        </li>
                                        <li>On receipt of complaint, the committee shall investigate the case.
                                        </li>
                                        <li>If required, a hearing with the complainant or clarification from the concerned may be taken.
                                        </li>
                                        <li>An aggrieved student may appear either in person or authorize a representative to present the case.
                                        </li>
                                        <li>The USGRC shall submit its report and recommendations to the Registrar of the College.
                                        </li>
                                        <li>The Registrar would take the decision on the basis of the SGRC recommendations.
                                        </li>
                                        <li>The decision would be conveyed to the complainant and the respective Dean/Director/Principal relating to the grievance by the Registrar with a copy to SGRC.
                                        </li>
                                        <li>If the complaint/grievance is found invalid, the complainant and the person against whom the complaint is made, will be informed accordingly and penal action may be taken.
                                        </li>
                                        <li>The complaint in any case shall be resolved within 15 working days of its receipt.
                                        </li>
                                        <li>Any student aggrieved by the decision of the SGRC may prefer an appeal (within 15 days from the date of decision) to the Ombudsperson (Email:- ombudsperson@uumail.in) who would precede the case as per UGC regulations.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div class="position-sticky border" style="top: 150px">
                                        <img src="assets/images/grievance-redressal.webp" alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <!-- Content for Minutes of Meeting Tab -->
                </div>
                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                    <!-- Content for Action Taken Report Tab -->
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