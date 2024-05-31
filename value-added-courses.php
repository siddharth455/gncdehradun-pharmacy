<style>
        #chart-container {
            width: 50%;
            height: 50%;
            margin: 20px 40% ;
        }
        @media (max-width: 768px) {
            #chart-container {
                max-width: 600px; /* Adjust as needed */
            }
        }

        /* Styles for Mobile */
        @media (max-width: 480px) {
            #chart-container {
                max-width: 350px; /* Add some padding to prevent the chart from touching the edges */
                margin: 0 50px ;
                
            }

            canvas {
                height: 350px !important;
                width: 400px !important;
            }
            .mobile-font-size .datalabels {
            font-size: 10px !important;
        }
        }
    </style>

<?php require "common/header.php" ?>
<div class="banner-area about" style="background-image: url(assets/images/reserch.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Value Added Courses &amp; Syllabus</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="know-about-section pt-5 pb-5 text-center">
    <div class="container">
        <div class="section-heading">
            <h2 class="mb-3">Enhancing Skills with Value Added Courses</h2>
        </div>
        <p class="mb-2" style="text-align: left;">At Guru Nanak College of Pharmaceutical Sciences, we offer a range of value-added courses designed to enhance our students' knowledge and skills beyond the standard curriculum. Our value-added courses aim to equip students with the latest industry knowledge, improve their employability, and prepare them to tackle real-world challenges effectively. Join us to gain a competitive edge and stay ahead in your professional journey.</p>
    </div>
</section>
<div id="chart-container">
        <canvas id="bookChaptersChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
    <script>
          function adjustFontSize(chart) {
            const mobileFontSize = window.innerWidth <= 480 ? 10 : 24;
            chart.options.plugins.datalabels.font.size = mobileFontSize;
            chart.update();
        }
        const ctx = document.getElementById('bookChaptersChart').getContext('2d');
        const bookChaptersChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['2018-19','2019-20', '2020-21', '2021-22', '2022-23'],
                datasets: [{
                    label: 'Value Added Course',
                    data: [2, 4, 6, 8, 10], // Replace these numbers with your actual data
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 23, 1)',
                    ],
                    borderColor: [
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    datalabels: {
                        color: '#000',
                        anchor: 'end',
                        align: 'start',
                        formatter: (value, context) => value,
                        font: {
                            weight: 'bold',
                            size: 24
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
        adjustFontSize(bookChaptersChart);

window.addEventListener('resize', () => {
    adjustFontSize(bookChaptersChart);
});
    </script>
<section class="container mb-4" style="filter: drop-shadow(3px 3px 5px black);">
    <table class="table table-bordered">
        <thead>
            <tr class="heading">
                <th scope="col"><b>S.No.</b></th>
                <th scope="col"><b>Name of Value Added Course</b></th>
                <th scope="col"><b>Course Code</b></th>
                <th scope="col"><b>Name of faculty coordinator</b></th>
                <th scope="col"><b>Syllabus</b></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Academic Research & Report Writing</td>
                <td>VAC -ARRW1819</b></td>
                <td>Dr. Vishal Deshwal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Academic-Research-&-Report-Writing.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Research Ethics</td>
                <td>VAC -RE2223</td>
                <td>Dr. Nidhi Chatarjee</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Research-Ethics.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Emotional Intelligence</td>
                <td>VAC -EI2223</td>
                <td>Dr. C Subramanian</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Emotional-Intelligence.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Water Resource Management</td>
                <td>VAC -WRM2223</td>
                <td>Mrs. Yashika Uniyal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Water-Resource-Management.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Hill Agriculture</td>
                <td>VAC -HI1819</td>
                <td>Dr. Vishal Deshwal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Hill-Agriculture.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Communication Skills</td>
                <td>VAC -CS2223</td>
                <td>Dr. C Subramanian</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Communication-Skills.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Health Education and First Aid</td>
                <td>VAC -HEFA1920</td>
                <td>Ms. Kriti Dabral</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Health-Education-and-First-Aid.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Marketing Skills</td>
                <td>VAC -MS1920</td>
                <td>Dr. Vishal Deshwal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Marketing-Skills.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Patent/IPR</td>
                <td>VAC -PI2122</td>
                <td>Ms. Kriti Dabral</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Patent-IPR.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Fundamentals of Computing</td>
                <td>VAC -FC2122</td>
                <td>Mrs. Yashika Uniyal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Fundamentals-of-Computing.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>Innovation & Entrepreneurship</td>
                <td>VAC -IE1920</td>
                <td>Dr. Nidhi Chatarjee</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Innovation-&-Entrepreneurship.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>Time Management</td>
                <td>VAC -TM1920</td>
                <td>Ms. Kriti Dabral</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Time-Management.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">13</th>
                <td>Managerial Economics and Financial Management</td>
                <td>VAC -MEFM2021</td>
                <td>Dr. Vishal Deshwal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Managerial-Economics-and-Financial-Management.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">14</th>
                <td>Basics of Sanitation, Safety and Hygiene</td>
                <td>VAC -BSSH2021</td>
                <td>Dr. Nidhi Chatarjee</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Basics-of-Sanitation-Safety-and-Hygiene.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">15</th>
                <td>Creating and Managing New Ventures</td>
                <td>VAC -CMNV2021</td>
                <td>Ms. Kriti Dabral</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Creating-and-Managing-New-Ventures.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">16</th>
                <td>Employability Skills</td>
                <td>VAC -ES2021</td>
                <td>Dr. Nidhi Chatarjee</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Employability-Skills.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">17</th>
                <td>Quantitative Aptitude</td>
                <td>VAC -QA2021</td>
                <td>Ms. Kriti Dabral</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/QUANTITATIVE-APTITUDE.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">18</th>
                <td>Health and Nutrition</td>
                <td>VAC -HN2021</td>
                <td>Dr. Vishal Deshwal</td> 
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/HEALTH-AND-NUTRITION.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">19</th>
                <td>Industry 4.0</td>
                <td>VAC -IND2122</td>
                <td>Dr. Nidhi Chatarjee</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Industry-4.0.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">20</th>
                <td>Ecology and Waste Management</td>
                <td>VAC -EWM2122</td>
                <td>Dr. Vishal Deshwal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/ECOLOGY-AND-MANAGEMENT.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">21</th>
                <td>Script Writing</td>
                <td>VAC -SW2122</td>
                <td>Mrs. Yashika Uniyal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/SCRIPT-WRITING.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">22</th>
                <td>Interpersonal Skills</td>
                <td>VAC -IS2122</td>
                <td>Ms. Kriti Dabral</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Interpersonal-Skills.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">23</th>
                <td>Basics of Laboratory Practice</td>
                <td>VAC -BLP2122</td>
                <td>Dr. Vishal Deshwal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Basics-of-Laboratory-Practice.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">24</th>
                <td>Bio-fertilizer Production Technology</td>
                <td>VAC -BFPT2122</td>
                <td>Dr. Nidhi Chatarjee</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Bio-fertilizer-Production-Technology.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">25</th>
                <td>Economic prospects of Medicinal and Aromatic Plants</td>
                <td>VAC -EPMA2223</td>
                <td>Dr. Vishal Deshwal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Economic-prospects-of-Medicinal-and-Aromatic-Plants.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">26</th>
                <td>Presentation Skill</td>
                <td>VAC -PS2223</td>
                <td>Mrs. Yashika Uniyal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Presentation-Skill.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">27</th>
                <td>Sports for Life</td>
                <td>VAC -SL2223</td>
                <td>Ms. Kriti Dabral</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Sports-for-Life.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">28</th>
                <td>The Art of Being Happy</td>
                <td>VAC -ABH2223</td>
                <td>Dr. Vishal Deshwal</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/The-Art-of-Being-Happy.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">29</th>
                <td>Ethics and Human values </td>
                <td>VAC -EHV2223</td>
                <td>Ms. Kriti Dabral</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Ethics-and-Human-Values.pdf">Syllabus</a></td>
            </tr>
            <tr>
                <th scope="row">30</th>
                <td>Fire Safety & Training</td>
                <td>VAC -FST2223</td>
                <td>Dr. Nidhi Chatarjee</td>
                <td><a class="btn btn-primary" target="_blank" href="assets/syllabusfiles/Fire-Safety-&-Training.pdf">Syllabus</a></td>
            </tr>
        </tbody>
    </table>
</section>
<?php require "common/footer.php" ?>