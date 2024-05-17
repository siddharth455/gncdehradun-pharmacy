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
                    <h2>Student feedback</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="student form" style="background-image: url();">
    <div class="form-container align-center " id="loginForm">
        <div class="card text-center">
            <div class="card-header">
                <h2>LOGIN DETAILS</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="studentId" class="form-label">Enter Student College ID</label>
                        <input type="text" class="form-control" id="studentId" placeholder="Enter Your College ID">
                    </div>
                    <div class="mb-3">
                        <label for="academicYear" class="form-label">Academic Year</label>
                        <input type="text" class="form-control" id="academicYear" placeholder="Enter Your Academic Year">
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Course/Class</label>
                        <input type="text" class="form-control" id="course" placeholder="Enter Your Course/Class">
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Enter Semester</label>
                        <input type="text" class="form-control" id="semester" placeholder="Enter Your Semester">
                    </div>
                    <button type="submit" class="btn-submit mb-2" style="background-color: #00bcfb;" id="validateBtn">VALIDATE</button>
                    <a href="index.php" class="btn-submit" style="background-color: #f08644;">Back To Home</a>
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
                                <td>The course material is career-focused.</td>
                                <td><input type="number" name="q1_course1" min="1" max="5"></td>
                                <td><input type="number" name="q1_course2" min="1" max="5"></td>
                                <td><input type="number" name="q1_course3" min="1" max="5"></td>
                                <td><input type="number" name="q1_course4" min="1" max="5"></td>
                                <td><input type="number" name="q1_course5" min="1" max="5"></td>
                                <td><input type="number" name="q1_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Course learning is oriented toward the growth of concepts, knowledge, skills, and analytical capacities.</td>
                                <td><input type="number" name="q2_course1" min="1" max="5"></td>
                                <td><input type="number" name="q2_course2" min="1" max="5"></td>
                                <td><input type="number" name="q2_course3" min="1" max="5"></td>
                                <td><input type="number" name="q2_course4" min="1" max="5"></td>
                                <td><input type="number" name="q2_course5" min="1" max="5"></td>
                                <td><input type="number" name="q2_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>The credits allotted are justified by the syllabus.</td>
                                <td><input type="number" name="q3_course1" min="1" max="5"></td>
                                <td><input type="number" name="q3_course2" min="1" max="5"></td>
                                <td><input type="number" name="q3_course3" min="1" max="5"></td>
                                <td><input type="number" name="q3_course4" min="1" max="5"></td>
                                <td><input type="number" name="q3_course5" min="1" max="5"></td>
                                <td><input type="number" name="q3_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>The most recent advances are covered in the course curriculum.</td>
                                <td><input type="number" name="q4_course1" min="1" max="5"></td>
                                <td><input type="number" name="q4_course2" min="1" max="5"></td>
                                <td><input type="number" name="q4_course3" min="1" max="5"></td>
                                <td><input type="number" name="q4_course4" min="1" max="5"></td>
                                <td><input type="number" name="q4_course5" min="1" max="5"></td>
                                <td><input type="number" name="q4_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>The course curriculum includes a comprehensive multitude of activities/exercises.</td>
                                <td><input type="number" name="q5_course1" min="1" max="5"></td>
                                <td><input type="number" name="q5_course2" min="1" max="5"></td>
                                <td><input type="number" name="q5_course3" min="1" max="5"></td>
                                <td><input type="number" name="q5_course4" min="1" max="5"></td>
                                <td><input type="number" name="q5_course5" min="1" max="5"></td>
                                <td><input type="number" name="q5_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Opportunities for field trips and internships align with the curriculum.</td>
                                <td><input type="number" name="q6_course1" min="1" max="5"></td>
                                <td><input type="number" name="q6_course2" min="1" max="5"></td>
                                <td><input type="number" name="q6_course3" min="1" max="5"></td>
                                <td><input type="number" name="q6_course4" min="1" max="5"></td>
                                <td><input type="number" name="q6_course5" min="1" max="5"></td>
                                <td><input type="number" name="q6_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>ICT resources enhance the course offerings.</td>
                                <td><input type="number" name="q7_course1" min="1" max="5"></td>
                                <td><input type="number" name="q7_course2" min="1" max="5"></td>
                                <td><input type="number" name="q7_course3" min="1" max="5"></td>
                                <td><input type="number" name="q7_course4" min="1" max="5"></td>
                                <td><input type="number" name="q7_course5" min="1" max="5"></td>
                                <td><input type="number" name="q7_course6" min="1" max="5"></td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>The program addresses the employability component.</td>
                                <td><input type="number" name="q8_course1" min="1" max="5"></td>
                                <td><input type="number" name="q8_course2" min="1" max="5"></td>
                                <td><input type="number" name="q8_course3" min="1" max="5"></td>
                                <td><input type="number" name="q8_course4" min="1" max="5"></td>
                                <td><input type="number" name="q8_course5" min="1" max="5"></td>
                                <td><input type="number" name="q8_course6" min="1" max="5"></td>
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