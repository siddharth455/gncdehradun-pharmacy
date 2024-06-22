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

    .table th {
        vertical-align: middle;
    }
</style>
<div class="banner-area about" style="background-image: url(assets/images/banner/46.webp); background-size: cover; background-position: center;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>SUSTAINABILITY, INNOVATIONS<br> &amp BEST PRACTICES</h1>
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
                <button class="nav-link main" id="v-pills-equity-tab" data-bs-toggle="pill" data-bs-target="#v-pills-equity" type="button" role="tab" aria-controls="v-pills-equity" aria-selected="false">Gender Equality</button>
                <button class="nav-link main" id="v-pills-environment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-environment" type="button" role="tab" aria-controls="v-pills-environment" aria-selected="false">Environment, Energy Conservation & Energy Audit</button>
                <button class="nav-link main" id="v-pills-water-tab" data-bs-toggle="pill" data-bs-target="#v-pills-water" type="button" role="tab" aria-controls="v-pills-water" aria-selected="false">Water Conservation</button>
                <button class="nav-link main" id="v-pills-waste-tab" data-bs-toggle="pill" data-bs-target="#v-pills-waste" type="button" role="tab" aria-controls="v-pills-waste" aria-selected="false">Waste management</button>
                <button class="nav-link main" id="v-pills-green-tab" data-bs-toggle="pill" data-bs-target="#v-pills-green" type="button" role="tab" aria-controls="v-pills-green" aria-selected="false">Green Campus Inititatives</button>
                <button class="nav-link main" id="v-pills-friendly-tab" data-bs-toggle="pill" data-bs-target="#v-pills-friendly" type="button" role="tab" aria-controls="v-pills-friendly" aria-selected="false">Disabled Friendly environment</button>
                <button class="nav-link main" id="v-pills-social-tab" data-bs-toggle="pill" data-bs-target="#v-pills-social" type="button" role="tab" aria-controls="v-pills-social" aria-selected="false">Social Responsibility and Harmony</button>
                <button class="nav-link main" id="v-pills-celebration-tab" data-bs-toggle="pill" data-bs-target="#v-pills-celebration" type="button" role="tab" aria-controls="v-pills-celebration" aria-selected="false">Celebration of commemorative days</button>
                <button class="nav-link main"><a href="industry-collaboration.php">Best Practices</a></button>
                <button class="nav-link main"><a href="#">Code of Conduct</a></button>
                
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">SUSTAINABILITY, INNOVATIONS &amp BEST PRACTICES</h4>
                                <div class="data-block">
                                    <h3>About</h3>
                                    <strong>Sustainability:</strong>

                                    <p>The Guru Nanak College of Pharmaceutical Sciences recognizes the importance of sustainability in pharmaceutical education and practice. The college aims to reduce its environmental footprint by:</p>
                                    <ul>
                                        <li>1. Implementing energy-efficient lighting and equipment.</li>
                                        <li>2. Promoting recycling and waste reduction programs.</li>
                                        <li>3. Encouraging the use of public transport, carpooling, and cycling.</li>
                                        <li>4. Creating a green campus with lush vegetation and minimal water usage.</li>
                                        <li>5. Incorporating sustainable practices in curriculum and research projects.</li>
                                    </ul>
                                    <strong>Innovations:</strong>

                                    <p>The college stays at the forefront of innovation in pharmaceutical education and research by:</p>
                                    <ul>
                                        <li>1. Establishing a Centre of Excellence for Pharmaceutical Research and Development.</li>
                                        <li>2. Collaborating with industry partners to develop novel drug delivery systems and formulations.</li>
                                        <li>3. Encouraging entrepreneurship and start-ups in the pharmaceutical sector.</li>
                                        <li>4. Organizing workshops and conferences on emerging trends and innovations in pharmaceutical sciences.</li>
                                    </ul>
                                    <p>By focusing on sustainability & innovation the Guru Nanak College of Pharmaceutical Sciences aims to produce competent, socially responsible, and innovative professionals who can make a positive impact in the pharmaceutical industry and society at large.</p>
                                </div>
                                <div class="row images-sus">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="assets/images/sustainability/sustainability-8.webp" alt="">
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img src="assets/images/sustainability/sustainability-10.webp" alt="">

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img src="assets/images/sustainability/sustainability-12.webp" alt="">

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img src="assets/images/sustainability/sustainability-15.webp" alt="">

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img src="assets/images/sustainability/sustainability-19.webp" alt="">

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img src="assets/images/sustainability/sustainability-26.webp" alt="">

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img src="assets/images/sustainability/sustainability-27.webp" alt="">

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img src="assets/images/sustainability/sustainability-29.webp" alt="">

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img src="assets/images/sustainability/sustainability-30.webp" alt="">

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img src="assets/images/sustainability/sustainability-31.webp" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show " id="v-pills-equity" role="tabpanel" aria-labelledby="v-pills-equity-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">Gender Equality</h4>
                                <div class="data-block">
                                    <p>At Guru Nanak College of Pharmaceutical Sciences, we recognize the importance of promoting gender equality and creating an inclusive 
                                        environment that fosters equal opportunities for all students, faculty, and staff, regardless of their gender. We believe that gender 
                                        equity is essential for achieving academic excellence, innovation, and social responsibility. To this end, we have implemented various 
                                        initiatives to promote gender balance and address the unique needs of our female students and faculty members.</p>
                                        <strong>Women cell, Anti-ragging committee, Internal complaint committee & Grievance redressal committee:</strong>
                                        <p> Our college has dedicated Anti-ragging committee, Internal complaint committee, Women Cell & Grievance Redressal committee that work towards creating a
                                          gender-sensitive campus, free from discrimination and harassment. We have established a robust grievance redressal mechanism to 
                                          address any complaints or concerns related to gender-based discrimination. Our faculty and staff are trained to be sensitive to
                                           gender issues and to provide support to students who may be facing challenges. We also offer special scholarships and mentorship 
                                           programs to encourage and support female students to pursue higher education and research in pharmaceutical sciences.</p>
                                           <strong>Gender sensitization:</strong>
                                           <p> Furthermore, we celebrate International Women's Day and other gender-related events to raise awareness about gender equity and to promote women's 
                                           empowerment. Our goal is to create a campus culture that values diversity, promotes inclusivity, and provides equal opportunities for
                                            all, thereby enabling our students to become responsible and socially conscious professionals who can make a positive impact in the
                                             world.</p>
                                </div>
                            </div>
                            <div class="row images-sus">
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-13.webp" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-21.webp" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-23.webp" alt="">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="v-pills-environment" role="tabpanel" aria-labelledby="v-pills-environment-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">Environment, Energy Conservation & Energy Audit</h4>
                                <div class="data-block">
                                    <p>At Guru Nanak College of Pharmaceutical Sciences, we are committed to reducing our ecological footprint and promoting sustainable practices 
                                        in all aspects of our operations. As a responsible institution, we recognize the importance of environmental stewardship and energy
                                         conservation in creating a healthy and thriving planet for future generations. We have implemented various initiatives to reduce our
                                           energy consumption, such as installing energy-efficient lighting and HVAC systems, and promoting the use of renewable energy sources.</p>
                                           <strong>Rainwater harvesting systems & Sewage Treatment Plant:</strong>
                                           <p> Our campus is equipped with rainwater harvesting systems, Sewage Treatment Plant and greywater reuse facilities to conserve water. We have also implemented a robust 
                                            waste management system that encourages recycling, composting, and proper disposal of hazardous waste. Furthermore, we have established a
                                             green campus initiative that promotes sustainable transportation, reduces paper usage, and encourages eco-friendly practices among our
                                              students, faculty, and staff. By integrating environmental sustainability into our operations, we aim to create a healthy, safe, and 
                                              environmentally responsible campus that inspires our students to become responsible citizens and stewards of the planet.</p>
                                </div>
                            </div>
                            <div class="row images-sus">
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-20.webp" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-5.webp" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-10.webp" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-4.webp" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-12.webp" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-5.webp" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-25.webp" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-6.webp" alt="">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="v-pills-water" role="tabpanel" aria-labelledby="v-pills-water-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">Water Conservation</h4>
                                <div class="data-block">
                                    <p>At Guru Nanak College of Pharmaceutical Sciences, we recognize the importance of water conservation and its impact on the environment. As
                                         a responsible institution, we are committed to reducing our water footprint and promoting sustainable practices in all aspects of our 
                                         operations. Our campus is equipped with rainwater harvesting systems that collect and store rainwater for non-potable purposes such as
                                          irrigation. We have also implemented a robust water conservation program that encourages students, faculty, and staff to adopt
                                           water-saving habits.</p>
                                           <strong>Sensor based faucets & Greywater reuse:</strong>
                                           <p> Our facilities are equipped with low-flow fixtures and greywater reuse system(Sewage Treatment Plant) to
                                            minimize water waste. Our goal is to reduce our water consumption by 20% annually, and we are working towards achieving this 
                                            target through a combination of education, awareness, and infrastructure upgrades. By promoting water conservation, we aim to reduce
                                             our environmental impact, lower our water bills, and inspire our students to become responsible stewards of the planet's precious 
                                             resources.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="v-pills-waste" role="tabpanel" aria-labelledby="v-pills-waste-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">Waste management</h4>
                                <div class="data-block">
                                    <p>At Guru Nanak College of Pharmaceutical Sciences, we recognize the importance of effective waste management in reducing the adverse effects of waste
                                         on human health, the environment, and planetary resources. Our waste management practices are designed to minimize waste generation, 
                                         maximize recycling and reuse, and ensure safe disposal of hazardous waste. We have implemented a comprehensive waste management system 
                                         that includes segregation, collection, transportation, treatment, and disposal of waste. Our campus is equipped with separate bins for 
                                         biodegradable, non-biodegradable, and hazardous waste, and we encourage students, faculty, and staff to adopt responsible waste disposal
                                          habits. By promoting sustainable waste management practices, we aim to create a healthy, safe,
                                            and environmentally responsible campus that inspires our students to become responsible citizens and stewards of the planet.</p>
                                </div>
                            </div>
                            <div class=" images-sus">

                                <img src="assets/images/sustainability/sustainability-30.webp" alt="">


                            </div>
                        </div>
                    </div>
                </div>
               
                           
                <div class="tab-pane fade show" id="v-pills-green" role="tabpanel" aria-labelledby="v-pills-green-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">Green Campus Inititatives</h4>
                                <div class="data-block">
                                    <p>At Guru Nanak College of Pharmaceutical Sciences, we are committed to creating a sustainable and environmentally responsible 
                                        campus. Our green campus initiatives aim to reduce our ecological footprint, promote energy efficiency, and foster a culture of
                                         sustainability among our students, faculty, and staff. We have implemented various measures to reduce energy consumption, including
                                          the installation of solar panels and wind turbines to generate renewable energy. We have also established a Green Campus Committee that promotes sustainability awareness, organizes eco-friendly events, and encourages 
                                          students to participate in environmental conservation efforts.</p>
                                          <strong>Green & clean campus:</strong>
                                          <p> Furthermore, we have incorporated sustainability into our curriculum, providing our students with the knowledge and skills necessary to develop innovative solutions for a sustainable future. Our goal 
                                           is to create a carbon-neutral campus that inspires our students to become responsible stewards of the planet's resources.
                                            By promoting green campus initiatives, we aim to reduce our environmental impact, improve the health and well-being of our
                                             community, and contribute to a sustainable future for generations to come.</p>
                                </div>
                            </div>
                            <div class="row images-sus">
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-3.webp" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-9.webp" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-12.webp" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-20.webp" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-29.webp" alt="">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="v-pills-friendly" role="tabpanel" aria-labelledby="v-pills-friendly-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">Disabled Friendly environment</h4>
                                <div class="data-block">
                                    <p>At Guru Nanak College of Pharmaceutical Sciences, we are committed to creating an inclusive and accessible environment that enables 
                                        students with disabilities to pursue their academic goals with dignity and independence. We believe that every individual deserves
                                         equal opportunities, and we strive to provide a disabled-friendly campus that caters to the diverse needs of our students.</p>
                                         <strong>Facilities:</strong>
                                         <p> Our campus is designed to be barrier-free, with ramps, elevators, and accessible pathways that facilitate easy movement for students with mobility
                                           impairments. Our goal is to create a welcoming and inclusive environment that values diversity 
                                             and promotes equal opportunities for all students, regardless of their abilities. By providing a disabled-friendly environment, we
                                              aim to empower students with disabilities to reach their full potential and become confident, independent, and successful 
                                              professionals in their chosen fields.</p>
                                </div>
                            </div>
                            <div class="row images-sus">
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-26.webp" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-27.webp" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/sustainability/sustainability-28.webp" alt="">

                                </div>
                               

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">Social Responsibility and Harmony</h4>
                                <div class="data-block">
                                    <p>At Guru Nanak College of Pharmaceutical Sciences, we believe that education should not only equip students with knowledge and skills, but 
                                        also instill in them a sense of social responsibility and harmony. We strive to create a community of empathetic and compassionate
                                         individuals who are committed to making a positive impact on society. Our college has a strong tradition of promoting social 
                                         responsibility and harmony through various initiatives and activities. We organize regular blood donation camps, health awareness
                                          programs, and community outreach initiatives that provide our students with opportunities to engage with the local community and 
                                          make a difference.</p>
                                          <strong>Volunteering & Social welfare:</strong>
                                          <p> Our students are encouraged to participate in volunteer work, internships, and research projects that focus on
                                           addressing social and environmental issues. Furthermore, we celebrate various cultural and religious festivals on campus, promoting diversity, inclusivity, and
                                              interfaith harmony. Our goal is to foster a sense of social responsibility and harmony among our students, faculty, and staff, 
                                              and to inspire them to become active citizens who contribute to the betterment of society.</p>
                                </div>
                            </div>
                            <div class="row images-sus">
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/13.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/15.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/23.png" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/27.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/28.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/35.png" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/36.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/37.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/38.png" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/39.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/40.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/41.png" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/42.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/43.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/44.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/47.png" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/48.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/49.png" alt="">

                                </div>
                               

                            </div>
                        </div>
                    </div>
                </div>
               

                <div class="tab-pane fade show" id="v-pills-celebration" role="tabpanel" aria-labelledby="v-pills-celebration-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="iqac-data">
                                <h4 class="h4-heading">Celebration of commemorative days</h4>
                                <div class="data-block">
                                    <p>At Guru Nanak College of Pharmaceutical Sciences, we believe that celebrating commemorative days is an essential part of fostering a 
                                        sense of community, cultural awareness, and social responsibility among our students, faculty, and staff. Throughout the year, we observe
                                         and celebrate various national and international days that hold significance in the fields of education, healthcare, and social welfare.
                                          These celebrations provide a platform for our students to engage with important issues, develop empathy and understanding, and 
                                          demonstrate their commitment to creating a positive impact on society.</p>
                                          <p> We celebrate days such as World Health Day, World Environment Day, and International Day of Persons with Disabilities, among 
                                            others, through a range of activities including seminars, workshops,
                                            debates, and community outreach programs. Our students are encouraged to participate in essay writing competitions, poster making,
                                             and slogan writing contests that focus on the theme of the commemorative day. We also invite guest speakers from various fields to 
                                             share their experiences and insights with our students, providing them with a unique opportunity to learn from experts and thought
                                              leaders.</p>
                                              <p> Furthermore, we organize cultural events, such as music and dance performances, that showcase the diversity and richness
                                               of our cultural heritage. By celebrating commemorative days, we aim to create a sense of social awareness, responsibility, and
                                                civic engagement among our students, and to inspire them to become active contributors to the betterment of society. These
                                                 celebrations also provide a platform for our students to develop important skills such as teamwork, communication, and 
                                                 leadership, which are essential for their personal and professional growth.</p>
                                </div>
                            </div>
                            <div class="row images-sus">
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/1.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/2.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/6.png" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/12.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/14.png" alt="">

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/22.png" alt="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <img src="assets/images/events/25.png" alt="">

                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
               
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php require "common/footer.php" ?>