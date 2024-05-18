<style>

.club-container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.club-container h1 {
    color: #333;
    margin-bottom: 20px;
    background-color: #F8D19E;
    padding: 10px;
    border-radius: 5px;
}

h1 {
    text-align: center;
    color: #d4a45f;
}

h2 {
    color: #d4a45f;
}

p {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
}

.club-container ul {
    list-style-type: none;
    padding: 0;
}

.club-container ul li {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
    padding-left: 1.2em;
    text-indent: -1.2em;
}

.club-container ul li::before {
    content: "•";
    color: #d4a45f;
    display: inline-block;
    width: 1.2em;
}

.clubs {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
}

.club {
    flex: 1 1 calc(33% - 20px);
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.club img {
    max-width: 100%;
    height: auto;
}

.club h3 {
    color: #d32f2f;
}

.club p {
    font-size: 14px;
    color: #333;
}

.club a {
    color: #d32f2f;
    text-decoration: none;
    font-weight: bold;
}

    </style>

<?php require "common/header.php" ?>
<div class="banner-area about" style="background-image: url(assets/images/d-2.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Career Development</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="club-container">
        <h1>GNC Students Club</h1>
        <p>We, at Sandip Institute of Pharmaceutical Sciences, Nashik strive to empower our students to converge into capable leaders & responsible citizens bearing high ethical values. With a view to fulfil this mission, Sandip Institute of Pharmaceutical Sciences, Nashik (SIPS) introduced various CLUBS for the overall development of the students.</p>
        <p>The club members will come together to identify & develop skills through practical based learning, activity based learning, communication skills, competency & confidence building, team work, social awareness camps etc. The purpose of formation of SIPS CLUBS is to increase students’ awareness of technical or non-technical education and their uses in daily life, with a view to prepare citizens of tomorrow who are better suited to deal with current technological trends. In addition to this, students can also benefit themselves to explore interests they have never encountered, thereby exposing to a more diverse range of interests in them. The Clubs activities are <strong>*For the Students & By the Students*</strong>.</p>
        <h2>The main objectives of GNC Students CLUBS are:</h2>
        <p>We, at Sandip Institute of Pharmaceutical Sciences, Nashik envisage the sustainable growth of stake holders:</p>
        <ul>
            <li>To identify & bring out the innate qualities in the students.</li>
            <li>To develop the overall personality of the students.</li>
            <li>To create awareness towards diverse global culture</li>
            <li>To provide a healthy, pragmatic & innovative learning atmosphere</li>
            <li>Under the Student’s Welfare, various Student’s Clubs were inaugurated</li>
        </ul>
    <div class="clubs">
            <div class="club">
            <img src="https://via.placeholder.com/150" class="club-image" alt="Dummy Image 1">
                <h3>RESEARCH CLUB</h3>
                <p>Faculty Advisors<br>Dr. Sarika Kamble<br><a href="#">Read More</a></p>
            </div>
            <div class="club">
            <img src="https://via.placeholder.com/150" class="club-image" alt="Dummy Image 1">
                <h3>MUSIC CLUB</h3>
                <p>Faculty Advisors : Shivani Patil<br><a href="#">Read More</a></p>
            </div>
            <div class="club">
            <img src="https://via.placeholder.com/150" class="club-image" alt="Dummy Image 1">
                <h3>DRAMA CLUB</h3>
                <p>Faculty Advisors : Dr. Rahul Mehta<br><a href="#">Read More</a></p>
            </div>
            <div class="club">
            <img src="https://via.placeholder.com/150" class="club-image" alt="Dummy Image 1">
                <h3>SPORTS CLUB</h3>
                <p>Faculty Advisors : Ms. Anjali Singh<br><a href="#">Read More</a></p>
            </div>
            <div class="club">
            <img src="https://via.placeholder.com/150" class="club-image" alt="Dummy Image 1">
                <h3>LITERATURE CLUB</h3>
                <p>Faculty Advisors : Mr. Ramesh Kulkarni<br><a href="#">Read More</a></p>
            </div>
            <div class="club">
            <img src="https://via.placeholder.com/150" class="club-image" alt="Dummy Image 1">
                <h3>SCIENCE CLUB</h3>
                <p>Faculty Advisors : Dr. Neha Sharma<br><a href="#">Read More</a></p>
            </div>
        </div>
    </div>

<?php require "common/footer.php"?>