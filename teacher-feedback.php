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
                    <h1>Faculty Members' feedback</h1>
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
                        <label for="techerName" class="form-label">Enter Full Name</label>
                        <input type="text" class="form-control" id="techerName" placeholder="Enter Your Full Name">
                    </div>
                    <div class="mb-3">
                        <label for="designation" class="form-label">Enter Designation</label>
                        <input type="text" class="form-control" id="designation" placeholder="Enter Your Designation">
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Name of Department</label>
                        <input type="text" class="form-control" id="department" placeholder="Enter Your Department">
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
                <h6>Likert’s Scale: Strongly agree (5); Agree (4); Neutral (3); Disagree (2); Strongly disagree (1)</h6>
                <form id="feedbackForm">
                    <div style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>S.No.</th>
                                <th>Parameter</th>
                                <th><input type="text" class="form-control" placeholder="Course Name 1"></th>
                                <th><input type="text" class="form-control" placeholder="Course Name 2"></th>
                                <th><input type="text" class="form-control" placeholder="Course Name 3"></th>
                                <th><input type="text" class="form-control" placeholder="Course Name 4"></th>
                                <th><input type="text" class="form-control" placeholder="Course Name 5"></th>
                                <th><input type="text" class="form-control" placeholder="Course Name 6"></th>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>The course material strikes a good
                                    balance between theory and/or real-world
                                    application and fieldwork training.
                                </td>
                                <td><input type="number" name="q1_course1" min="1" max="5"></td>
                                <td><input type="number" name="q1_course2" min="1" max="5"></td>
                                <td><input type="number" name="q1_course3" min="1" max="5"></td>
                                <td><input type="number" name="q1_course4" min="1" max="5"></td>
                                <td><input type="number" name="q1_course5" min="1" max="5"></td>
                                <td><input type="number" name="q1_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>There are adequate elective courses
                                    available for students to choose from in
                                    this program.
                                </td>
                                <td><input type="number" name="q2_course1" min="1" max="5"></td>
                                <td><input type="number" name="q2_course2" min="1" max="5"></td>
                                <td><input type="number" name="q2_course3" min="1" max="5"></td>
                                <td><input type="number" name="q2_course4" min="1" max="5"></td>
                                <td><input type="number" name="q2_course5" min="1" max="5"></td>
                                <td><input type="number" name="q2_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>The course's contents align with the
                                    objectives of the course.</td>
                                <td><input type="number" name="q3_course1" min="1" max="5"></td>
                                <td><input type="number" name="q3_course2" min="1" max="5"></td>
                                <td><input type="number" name="q3_course3" min="1" max="5"></td>
                                <td><input type="number" name="q3_course4" min="1" max="5"></td>
                                <td><input type="number" name="q3_course5" min="1" max="5"></td>
                                <td><input type="number" name="q3_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>The course materials have been arranged
                                    from fundamental to advanced.
                                </td>
                                <td><input type="number" name="q4_course1" min="1" max="5"></td>
                                <td><input type="number" name="q4_course2" min="1" max="5"></td>
                                <td><input type="number" name="q4_course3" min="1" max="5"></td>
                                <td><input type="number" name="q4_course4" min="1" max="5"></td>
                                <td><input type="number" name="q4_course5" min="1" max="5"></td>
                                <td><input type="number" name="q4_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>The emphasis of the program is on
                                    entrepreneurship, employability, and skill
                                    development.</td>
                                <td><input type="number" name="q5_course1" min="1" max="5"></td>
                                <td><input type="number" name="q5_course2" min="1" max="5"></td>
                                <td><input type="number" name="q5_course3" min="1" max="5"></td>
                                <td><input type="number" name="q5_course4" min="1" max="5"></td>
                                <td><input type="number" name="q5_course5" min="1" max="5"></td>
                                <td><input type="number" name="q5_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>The course material enhances students'
                                    understanding of the field.</td>
                                <td><input type="number" name="q6_course1" min="1" max="5"></td>
                                <td><input type="number" name="q6_course2" min="1" max="5"></td>
                                <td><input type="number" name="q6_course3" min="1" max="5"></td>
                                <td><input type="number" name="q6_course4" min="1" max="5"></td>
                                <td><input type="number" name="q6_course5" min="1" max="5"></td>
                                <td><input type="number" name="q6_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>The curriculum of the courses needs to be
                                    moderated.</td>
                                <td><input type="number" name="q7_course1" min="1" max="5"></td>
                                <td><input type="number" name="q7_course2" min="1" max="5"></td>
                                <td><input type="number" name="q7_course3" min="1" max="5"></td>
                                <td><input type="number" name="q7_course4" min="1" max="5"></td>
                                <td><input type="number" name="q7_course5" min="1" max="5"></td>
                                <td><input type="number" name="q7_course6" min="1" max="5"></td>
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