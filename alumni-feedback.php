<?php require "common/header.php" ?>
<style>
    .hidden {
        display: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 0.5rem;
        text-align: left;
    }

    th {
        background-color: #f4f4f4;
    }

    .card-header h2 {
        margin: 0;
    }
</style>
<div class="banner-area about" style="background-image: url(assets/images/banner/45.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Alumni Feedback</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="student form" style="background-image: url();">
    <div class="form-container align-center" id="loginForm">
        <div class="card text-center">
            <div class="card-header">
                <h2>LOGIN DETAILS</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="alumniName" class="form-label">Enter Full Name</label>
                        <input type="text" class="form-control" id="alumniName" placeholder="Enter Your Full Name">
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Contact No.</label>
                        <input type="text" class="form-control" id="number" placeholder="Enter Your Contact Number">
                    </div>
                    <div class="mb-3">
                        <label for="gmail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="gmail" placeholder="Enter Your Gmail">
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Enter Class / Course</label>
                        <input type="text" class="form-control" id="class" placeholder="Enter Your Class/Course">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Passout Year</label>
                        <input type="text" class="form-control" id="year" placeholder="Enter Your Passot Year">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Enter Date of Birth</label>
                        <input type="date" class="form-control" id="dob" placeholder="Enter Your Date of Birth">
                    </div>
                    <div class="mb-3">
                        <label for="Occupation" class="form-label">Current Occupation / Position Held</label>
                        <input type="text" class="form-control" id="Occupation" placeholder="Enter Your Current Occupation /Position Held">
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company / Business Name</label>
                        <input type="text" class="form-control" id="comapny" placeholder="Enter Your Company / Business Name">
                    </div>
                    <button type="submit" class="btn-submit mb-2" style="background-color: #00bcfb;" id="validateBtn">SUBMIT AND CONTINUE</button>
                    <a href="feedback.php" class="btn-submit" style="background-color: #f08644;">Back To Home</a>
                </form>
            </div>
        </div>
    </div>
    <div class="form-container-feedback align-center container mt-5 mb-5">
        <div class="card text-center hidden" id="secondFormContainer">
            <div class="card-header">
                <h2>FEEDBACK FORM</h2>
            </div>
            <div class="card-body">
                <form id="feedbackForm">
                    <div style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>S.No.</th>
                                <th>Parameter</th>
                                <th>Strongly Agree</th>
                                <th>Agree</th>
                                <th>Neutral</th>
                                <th>Disagree</th>
                                <th>Strongly Disagree</th>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>The overall learning experience at College including ambience</td>
                                <td><input type="radio" name="q1" value="strongly_agree"></td>
                                <td><input type="radio" name="q1" value="agree"></td>
                                <td><input type="radio" name="q1" value="neutral"></td>
                                <td><input type="radio" name="q1" value="disagree"></td>
                                <td><input type="radio" name="q1" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Availability of extracurricular/co-curricular activities in regular mode for holistic growth</td>
                                <td><input type="radio" name="q2" value="strongly_agree"></td>
                                <td><input type="radio" name="q2" value="agree"></td>
                                <td><input type="radio" name="q2" value="neutral"></td>
                                <td><input type="radio" name="q2" value="disagree"></td>
                                <td><input type="radio" name="q2" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Opportunities to express yourself and interact with the outside world</td>
                                <td><input type="radio" name="q3" value="strongly_agree"></td>
                                <td><input type="radio" name="q3" value="agree"></td>
                                <td><input type="radio" name="q3" value="neutral"></td>
                                <td><input type="radio" name="q3" value="disagree"></td>
                                <td><input type="radio" name="q3" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Efforts made by the institute to enhance your overall employability and development</td>
                                <td><input type="radio" name="q4" value="strongly_agree"></td>
                                <td><input type="radio" name="q4" value="agree"></td>
                                <td><input type="radio" name="q4" value="neutral"></td>
                                <td><input type="radio" name="q4" value="disagree"></td>
                                <td><input type="radio" name="q4" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Conduction of professional training like soft skills, interview skills, etc.</td>
                                <td><input type="radio" name="q5" value="strongly_agree"></td>
                                <td><input type="radio" name="q5" value="agree"></td>
                                <td><input type="radio" name="q5" value="neutral"></td>
                                <td><input type="radio" name="q5" value="disagree"></td>
                                <td><input type="radio" name="q5" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Teaching methodologies like ICT enabled tools </td>
                                <td><input type="radio" name="q6" value="strongly_agree"></td>
                                <td><input type="radio" name="q6" value="agree"></td>
                                <td><input type="radio" name="q6" value="neutral"></td>
                                <td><input type="radio" name="q6" value="disagree"></td>
                                <td><input type="radio" name="q6" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>The status of the current syllabus in terms of industry needs</td>
                                <td><input type="radio" name="q7" value="strongly_agree"></td>
                                <td><input type="radio" name="q7" value="agree"></td>
                                <td><input type="radio" name="q7" value="neutral"></td>
                                <td><input type="radio" name="q7" value="disagree"></td>
                                <td><input type="radio" name="q7" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>Was the curriculum enhances the understanding of human values, ethics, and social responsibilities</td>
                                <td><input type="radio" name="q8" value="strongly_agree"></td>
                                <td><input type="radio" name="q8" value="agree"></td>
                                <td><input type="radio" name="q8" value="neutral"></td>
                                <td><input type="radio" name="q8" value="disagree"></td>
                                <td><input type="radio" name="q8" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>Placement opportunities in College</td>
                                <td><input type="radio" name="q9" value="strongly_agree"></td>
                                <td><input type="radio" name="q9" value="agree"></td>
                                <td><input type="radio" name="q9" value="neutral"></td>
                                <td><input type="radio" name="q9" value="disagree"></td>
                                <td><input type="radio" name="q9" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Was the program’s objectives achieved </td>
                                <td><input type="radio" name="q10" value="strongly_agree"></td>
                                <td><input type="radio" name="q10" value="agree"></td>
                                <td><input type="radio" name="q10" value="neutral"></td>
                                <td><input type="radio" name="q10" value="disagree"></td>
                                <td><input type="radio" name="q10" value="strongly_disagree"></td>
                            </tr>

                        </table>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="comments" class="form-label">Additional comments/Suggestions:</label>
                        <textarea class="form-control" id="comments" placeholder="Enter your comments/suggestions"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="signature" class="form-label">Signature:</label>
                        <input type="text" class="form-control" id="signature" placeholder="Enter your Full Name">
                    </div>
                    <button type="submit" class="btn-submit mb-2" style="background-color: #00bcfb;">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Hide the login form and validate button
        document.getElementById('loginForm').style.display = 'none';
        // Show the feedback form
        document.getElementById('secondFormContainer').classList.remove('hidden');
    });
</script>

<?php require "common/footer.php" ?>