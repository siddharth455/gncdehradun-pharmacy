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
<div class="banner-area about" style="background-image: url(assets/images/reserch.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Employer Feedback</h1>
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
                        <label for="employerName" class="form-label">Enter Employer</label>
                        <input type="text" class="form-control" id="employerName" placeholder="Enter Your Full Name">
                    </div>
                    <div class="mb-3">
                        <label for="designation" class="form-label">Enter Designation</label>
                        <input type="text" class="form-control" id="designation" placeholder="Enter Your Designation">
                    </div>
                    <div class="mb-3">
                        <label for="companay" class="form-label">Name of Company / Institute / College</label>
                        <input type="text" class="form-control" id="companay" placeholder="Enter Your Company / Institute / College">
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
                                <td>Attitude </td>
                                <td><input type="radio" name="q1" value="strongly_agree"></td>
                                <td><input type="radio" name="q1" value="agree"></td>
                                <td><input type="radio" name="q1" value="neutral"></td>
                                <td><input type="radio" name="q1" value="disagree"></td>
                                <td><input type="radio" name="q1" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Communication skill</td>
                                <td><input type="radio" name="q2" value="strongly_agree"></td>
                                <td><input type="radio" name="q2" value="agree"></td>
                                <td><input type="radio" name="q2" value="neutral"></td>
                                <td><input type="radio" name="q2" value="disagree"></td>
                                <td><input type="radio" name="q2" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Professional exposure </td>
                                <td><input type="radio" name="q3" value="strongly_agree"></td>
                                <td><input type="radio" name="q3" value="agree"></td>
                                <td><input type="radio" name="q3" value="neutral"></td>
                                <td><input type="radio" name="q3" value="disagree"></td>
                                <td><input type="radio" name="q3" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Ability of understanding</td>
                                <td><input type="radio" name="q4" value="strongly_agree"></td>
                                <td><input type="radio" name="q4" value="agree"></td>
                                <td><input type="radio" name="q4" value="neutral"></td>
                                <td><input type="radio" name="q4" value="disagree"></td>
                                <td><input type="radio" name="q4" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>TAnalytical ability</td>
                                <td><input type="radio" name="q5" value="strongly_agree"></td>
                                <td><input type="radio" name="q5" value="agree"></td>
                                <td><input type="radio" name="q5" value="neutral"></td>
                                <td><input type="radio" name="q5" value="disagree"></td>
                                <td><input type="radio" name="q5" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Problem solving ability</td>
                                <td><input type="radio" name="q6" value="strongly_agree"></td>
                                <td><input type="radio" name="q6" value="agree"></td>
                                <td><input type="radio" name="q6" value="neutral"></td>
                                <td><input type="radio" name="q6" value="disagree"></td>
                                <td><input type="radio" name="q6" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>Decision making</td>
                                <td><input type="radio" name="q7" value="strongly_agree"></td>
                                <td><input type="radio" name="q7" value="agree"></td>
                                <td><input type="radio" name="q7" value="neutral"></td>
                                <td><input type="radio" name="q7" value="disagree"></td>
                                <td><input type="radio" name="q7" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>Initiatives</td>
                                <td><input type="radio" name="q8" value="strongly_agree"></td>
                                <td><input type="radio" name="q8" value="agree"></td>
                                <td><input type="radio" name="q8" value="neutral"></td>
                                <td><input type="radio" name="q8" value="disagree"></td>
                                <td><input type="radio" name="q8" value="strongly_disagree"></td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>Group working and leadership </td>
                                <td><input type="radio" name="q9" value="strongly_agree"></td>
                                <td><input type="radio" name="q9" value="agree"></td>
                                <td><input type="radio" name="q9" value="neutral"></td>
                                <td><input type="radio" name="q9" value="disagree"></td>
                                <td><input type="radio" name="q9" value="strongly_disagree"></td>
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