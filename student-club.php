<?php require "common/header.php" ?>
<style>
    .accordion-header button {
        background-color: #00bcfb;
        font-weight: bolder;
        font-size: 18px;
        color: white;
        border-radius: 10px;
    }

    .accordion-button:not(.collapsed) {
        background-color: #eb7a3d;
        color: white;
        border-radius: 10px;
    }
</style>
<div class="banner-area about" style="background-image: url(assets/images/d-2.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Students Club</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h1>Students Club at GNC</h1>
            <p>At Guru Nanak College of Pharmaceutical Sciences (GNC), we are dedicated to empowering our students to become capable leaders and responsible citizens with high ethical values. To fulfill this mission, GNC has introduced various clubs to promote the overall development of our students.</p>
            <h3>Purpose and Activities</h3>
            <p>The club members come together to identify and develop skills through practical-based learning, activity-based learning, communication skills, competency and confidence building, teamwork, and social awareness initiatives. The purpose of forming these clubs is to enhance students’ awareness of both technical and non-technical education and their applications in daily life. This prepares students to become future-ready citizens, well-equipped to handle current technological trends. Additionally, students have the opportunity to explore new interests, exposing them to a diverse range of activities. The club activities are organized by the students and for the students.</p>
            <h3>Objectives of GNC Students Clubs</h3>
            <p>At Guru Nanak College of Pharmaceutical Sciences, we envision the sustainable growth of our stakeholders through the following objectives:</p>
            <ul class="list-unstyled p-0 list-icon-4 ps-4 mt-3">
                <li><b>Identify and Develop Innate Qualities:</b> Uncover and nurture the inherent talents of students.</li>
                <li><b>Overall Personality Development:</b> Foster the holistic growth of students.</li>
                <li><b>Global Cultural Awareness:</b> Create awareness of diverse global cultures.</li>
                <li><b>Innovative Learning Atmosphere:</b> Provide a healthy, practical, and innovative learning environment.</li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="vertical-slider1">
                <?php for ($i = 1; $i <= 15; $i++) : ?>
                    <div class="hostel-overview">
                        <img src="assets/images/club/cultural-<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.webp" alt="Club Image <?php echo $i; ?>">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<section class="container mt-5 mb-5">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Sports Club
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>At Guru Nanak College of Pharmaceutical Sciences, our Sports Club is dedicated to promoting physical fitness, teamwork, and a healthy lifestyle among students. The club offers a variety of sports activities and facilities, encouraging students to participate in events, tournaments, and regular practice sessions. Whether you're a seasoned athlete or looking to try a new sport, our Sports Club provides the perfect environment to develop your skills, build friendships, and enhance your overall well-being. Join us to stay active, competitive, and engaged in campus life!</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="heading">
                                <th scope="col"><b>S.No.</b></th>
                                <th scope="col"><b>Name</b></th>
                                <th scope="col"><b>Designation</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mr. Jai Nehra</td>
                                <td>Faculty Coordinator</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mr. Aamir Rehman</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mr. Avinash Kumar</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Ms. Shivani</td>
                                <td>Member</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Cultural Club
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>The Cultural Club at Guru Nanak College of Pharmaceutical Sciences celebrates the rich diversity and vibrant traditions of our student community. This club provides a platform for students to express their creativity and talents through various cultural activities such as music, dance, drama, and art. By organizing events, festivals, and workshops, the Cultural Club fosters an inclusive and dynamic environment where students can showcase their artistic abilities and appreciate different cultures. Join us to immerse yourself in the arts, develop new skills, and create unforgettable memories!</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="heading">
                                <th scope="col"><b>S.No.</b></th>
                                <th scope="col"><b>Name</b></th>
                                <th scope="col"><b>Designation</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mrs. Bhawna Bora</td>
                                <td>Faculty Coordinator</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mrs. Sameeksha Chandra</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mr. Sunil Jamita</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Ms. Sweety G Momin</td>
                                <td>Member</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Entrepreneurship Club
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>The Entrepreneurship Club at Guru Nanak College of Pharmaceutical Sciences is committed to fostering innovation and entrepreneurial thinking among students. This club provides a supportive environment where aspiring entrepreneurs can develop their business ideas, gain practical knowledge, and connect with industry leaders. Through a variety of activities such as workshops, seminars, pitch competitions, and networking events, the Entrepreneurship Club helps students build essential skills, find mentorship, and access resources to launch and grow successful ventures. Join us to explore your entrepreneurial potential, collaborate with like-minded peers, and turn your ideas into reality.</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="heading">
                                <th scope="col"><b>S.No.</b></th>
                                <th scope="col"><b>Name</b></th>
                                <th scope="col"><b>Designation</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mr. Vishal Kumar Deshwal</td>
                                <td>Faculty Coordinator</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mr. Aman Singh</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mr. Aman Raj</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Mrs. Kaniska</td>
                                <td>Member</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Research Club
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>The Research Club at Guru Nanak College of Pharmaceutical Sciences is dedicated to promoting research culture and fostering a spirit of inquiry among students. This club provides a platform for students to engage in academic research, collaborate with faculty members, and contribute to the advancement of knowledge in pharmaceutical sciences. Through seminars, journal clubs, and research projects, the Research Club aims to develop students' research skills, critical thinking abilities, and scientific knowledge. Join us to explore new frontiers in research, make meaningful contributions to your field, and prepare for a successful career in academia or industry.</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="heading">
                                <th scope="col"><b>S.No.</b></th>
                                <th scope="col"><b>Name</b></th>
                                <th scope="col"><b>Designation</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Prof. (Dr.) Deepak Sharma</td>
                                <td>Faculty Coordinator</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mr. Amit Thakur</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mrs. Aastha Singh</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Mrs. Hemanti Bist</td>
                                <td>Member</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require "common/footer.php" ?>