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
<div class="banner-area about" style="background-image: url(assets/images/cbd-head.webp); background-size: cover; background-position: center;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Committee For Prevention Of Caste Based Discrimination</h2>
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
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="list-unstyled p-0 list-icon-4 ps-4">
                                        <li>The University is committed to creating and maintaining a community in which students and employees can work together in an environment free of violence, harassment, exploitation, intimidation and stress. This includes all forms of gender violence, sexual harassment and discrimination on the basis of the sex/gender or amongst the same sex members. To keep a close watch on the issue, an Internal Complaint Committee at Faculty and University level is fully functional to take care of any complaint.</li>
                                        <li>Any student aggrieved of any action of his/her fellow student or any other member may approach the appropriate committee for timely assistance and redressal of the grievance. If a student is not satisfied with the decision of the designated committee, he/she may appeal within a week to the Disciplinary Appellate Board of the University.</li>
                                        <li>A student found guilty of any of the violation of the student's code of conduct is liable to be inflicted with any or more of the following penalties.</li>
                                    </ul>
                                    <div class="alert alert-danger">
                                        <div class="page-sub-heading mb-2">
                                            <h3 class="mb-3">Warning</h3>
                                        </div>
                                        <ul class="list-unstyled p-0 list-icon-3 ps-4">
                                            <li>Asking for written apology
                                            </li>
                                            <li>Bond of good behaviour
                                            </li>
                                            <li>Withholding or cancellation of results
                                            </li>
                                            <li>Suspension from the class/hostel for a specific period
                                            </li>
                                            <li>Debarring entry into a hostel/campus (permanent or specific period)
                                            </li>
                                            <li>Denial of re-admission (permanent or stated period)
                                            </li>
                                            <li>Rustication</li>
                                            <li>Expulsion (permanent or stated period)
                                            </li>
                                            <li>Penalty of a specified amount of money with or without any other disciplinary action
                                            </li>
                                            <li>Any other reformatory action
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="page-sub-heading mb-2">
                                        <h3 class="mb-3">Committee For Prevention Of Caste Based Discrimination</h3>
                                    </div>
                                    <!-- <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><b>Sr. No.</b></th>
                                                    <th><b>Name &amp; Designation</b></th>
                                                    <th><b>Membership</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Prof. (Dr.) Minakshi Memoria, Professor, Uttaranchal Institute of Technology</td>
                                                    <td>Chairperson</td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Dr. Khaleeq Ahmad, Assistant Professor, Law College Dehradun</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Dr. Sandeep Kumar, Assistant Professor, School of Agricultrrre</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td>Mr. Vinod Balmiki, Assistant Professor, Uttaranchal Institute of Technology</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>5.</td>
                                                    <td>Ms. Sakshi Koli, Assistant Professor, Uttaranchal Institute of Techology</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>6.</td>
                                                    <td>Mr. Hitendra Singh Chauhan, Assistant Professor, Uttaranchal School of Hotel &amp; Hospitality Management</td>
                                                    <td>Member</td>
                                                </tr>

                                                <tr>
                                                    <td>7.</td>
                                                    <td>Ms. Member Anbarasi L., Nursing Tutor, Uttaranchal College of Nursing</td>
                                                    <td>Member</td>
                                                </tr>

                                                <tr>
                                                    <td>8.</td>
                                                    <td>Mr. Farman Ali, Assistant Professor, Uttaranchal Institute of Management</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>9.</td>
                                                    <td>Mr. Junaid Aman, Assistant Professor, School of Applied &amp; Life Sciences</td>
                                                    <td>Member</td>
                                                </tr>

                                                <tr>
                                                    <td>10.</td>
                                                    <td>Mr. Jageshwar Ray, Assistant Professor, School of Liberal Arts</td>
                                                    <td>Member</td>
                                                </tr>

                                                <tr>
                                                    <td>11.</td>
                                                    <td>Ms. Pallavi Chand, Assistant Professor, Uttaranchal Institute of Pharmaceutical Sciences</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>12.</td>
                                                    <td>Ms. Babita Rani Radwal, Assistant Professor, Uttaranchal School of Computing Sciences</td>
                                                    <td>Member</td>
                                                </tr>

                                                <tr>
                                                    <td>13.</td>
                                                    <td>Ms. Vibha Singh Kanwar, Student, BA LLB (Hons.)</td>
                                                    <td>Member</td>
                                                </tr>

                                                <tr>
                                                    <td>14.</td>
                                                    <td>Mr. Anil Kumar Saxena, Deputy Registrar (Administrytion)</td>
                                                    <td>Member Secretary</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> -->

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