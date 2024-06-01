<?php require "common/header.php" ?>
<style>
    hr {
        border: none;
        border-top: 1px solid #ccc;
        margin-bottom: 20px;
    }

    .buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .btn {
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin: 5px;
        flex: 1 1 calc(50% - 20px);
        box-sizing: border-box;
        transition: background-color 0.3s;
    }


    .btn {
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .student,
    .alumni,
    .employer,
    .teacher {
        background-color: #d37e3c;
    }

    .student:hover,
    .alumni:hover,
    .employer:hover,
    .teacher:hover {
        background-color: #00b5f0;
    }

    @media (max-width: 600px) {
        .btn {
            flex: 1 1 45%;
            margin: 10px 5px;
        }
    }

    .heading {
        text-align: center;
    }
</style>
<div class="banner-area about" style="background-image: url(assets/images/feedback-head.webp); background-size: cover; background-position: center;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Stakeholder Feedback</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pt-4 pb-5">
    <div class="heading">
        <h1>Feedback For College</h1>
        <p>We value and appreciate your suggestions.</p>
    </div>
    <hr>
    <div class="buttons">
        <a href="student-feedback.php" class="btn student">Student</a>
        <a href="alumni-feedback.php" class="btn alumni">Alumni</a>
        <a href="employer-feedback.php" class="btn employer">Employer</a>
        <a href="teacher-feedback.php" class="btn teacher">Teacher</a>
    </div>
</div>
<?php require "common/footer.php" ?>