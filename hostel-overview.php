<?php require "common/header.php" ?>
<div class="banner-area about" style="background-image: url(assets/images/d-2.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Hostel at GNC</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="know-about-section pt-5 pb-3 text-center">
    <div class="container">
        <div class="section-heading">
            <h2 class="mb-3">Hostel Life</h2>
        </div>
        <p style="text-align: left;">Guru Nanak College of Pharmaceutical Sciences has strategically developed its hostel facilities to align with the emerging local and national priorities in student welfare, sustainable living, and community building. This comprehensive approach ensures our hostel life addresses the diverse needs of students while fostering a supportive and innovative living environment.</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h2>Hostel Overview</h2>
            <p>Our hostel facilities are designed to provide a comfortable and secure living environment for students. The hostels are equipped with modern amenities and offer a variety of services to ensure a conducive atmosphere for academic and personal growth. Key features include:</p>
            <ul class="list-unstyled p-0 list-icon-4 ps-4 mt-3">
                <li>Well-Furnished Rooms: Spacious and well-ventilated rooms with necessary furnishings.</li>
                <li>24/7 Security: Comprehensive security measures including CCTV surveillance and security personnel.</li>
                <li>Dining Facilities: Hygienic and nutritious meals served in a well-maintained dining hall.</li>
                <li>Wi-Fi Connectivity: High-speed internet access to support academic and recreational activities.</li>
                <li>Recreational Areas: Common rooms, sports facilities, and entertainment options to promote a balanced lifestyle.</li>
                <li>Health Services: On-campus medical support and regular health check-ups.</li>
            </ul>
            <h2>Hostel Life</h2>
            <p>Our hostel facilities are designed to provide a comfortable and secure living environment for students. The hostels are equipped with modern amenities and offer a variety of services to ensure a conducive atmosphere for academic and personal growth. Key features include:</p>
            <ul class="list-unstyled p-0 list-icon-4 ps-4 mt-3">
                <li>Community Building: Regular events and activities to foster a sense of belonging and camaraderie among students.</li>
                <li>Academic Support: Study groups, tutoring sessions, and quiet study areas to support academic success.</li>
                <li>Sustainable Living: Initiatives promoting eco-friendly practices and sustainability within the hostel community.</li>
                <li>Cultural and Sports Activities: Opportunities to participate in cultural events, sports, and other extracurricular activities.</li>
                <li>Counseling Services: Access to counseling and mental health services to support overall well-being.</li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="vertical-slider">
                <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <div class="hostel-overview">
                        <img src="assets/images/hostel/<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.webp" alt="Exam Image <?php echo $i; ?>">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>


</div>
<?php require "common/footer.php" ?>