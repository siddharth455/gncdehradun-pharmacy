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
                    <h2>Books &amp; Book Chapters</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="know-about-section pt-5 pb-3 text-center">
    <div class="container">
        <div class="section-heading">
            <h2 class="mb-3">Faculty Publications</h2>
        </div>
        <p class="" style="text-align: left;">At Guru Nanak College of Pharmaceutical Sciences, our esteemed professors are at the forefront of academic excellence, consistently publishing influential books and chapters. Their contributions span critical areas such as pharmacy, biotechnology, and climate change, aligning with both local and national priorities. Through their scholarly work, our faculty not only address global challenges but also drive pharmaceutical innovation and development, enriching our academic community and beyond.</p>
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
                labels: ['2019', '2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'Book Chapters',
                    data: [30, 41, 42, 47, 45], // Replace these numbers with your actual data
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 23, 1)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
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
<div class="container">
    <div class="tabs">
        <button class="tablink" onclick="openTab(event, 'GirlsHostel')">2023</button>
        <button class="tablink" onclick="openTab(event, 'BoysHostel')">2022</button>
        <button class="tablink" onclick="openTab(event, 'Book2021')">2021</button>
        <button class="tablink" onclick="openTab(event, 'Book2020')">2020</button>
        <button class="tablink" onclick="openTab(event, 'Book2019')">2019</button>
    </div>
    <div id="GirlsHostel" class="tabcontent mt-5">
        <table class="table table-bordered">
            <thead>
                <tr class="heading">
                    <th scope="col"><b>S.No.</b></th>
                    <th scope="col"><b>Chapter Name</b></th>
                    <th scope="col"><b>Author Name</b></th>
                    <th scope="col"><b>Book Name </b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Introduction to Pharmacognosy</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Understanding the Diversity of Medicinal Substances</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Comprehensive Exploration of Drug Classification: A Multifaceted Approach</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Ensuring Quality in Drugs of Natural Origin: Comprehensive Approaches to Adulteration Detection and Evaluation Methods</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Cultivation, Collection, Processing, and Storage of Drugs of Natural Origin</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Plant Hormones and Their Applications</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Unveiling the Nexus of Polyploidy, Mutation, and Hybridization in Medicinal Plants: A Comprehensive Exploration</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Conservation of Medicinal Plants: Preserving Nature's Pharmacy</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Nurturing Growth: A Comprehensive Exploration of Plant Tissue Culture</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Harnessing Nature's Pharmacy: Unveiling the Vast Potential of Plant Tissue Culture in Pharmacognosy</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>Harnessing Nature's Bounty: Exploring the Potential of Edible Vaccines</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>Pharmacognosy Across Diverse Systems of Medicine</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>Exploring Pharmacognosy Across Diverse Systems of Medicine</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>Understanding Flavonoids and Tannins: Definition, Classification, Properties, and Identification Tests</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>Understanding Volatile Oils & Resins: Definition, Classification, Properties, and Identification Tests</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>Exploring Pharmacognosy: Fibers in Various Systems of Medicine</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>Exploring Pharmacognosy Across Medical Systems: Hallucinogens Teratogens & Natural allergens</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>Pharmacognosy in Various Systems of Medicine</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>Exploring Pharmacognosy Across Medical Systems: Proteins and Enzymes</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>Unraveling the Potential of Bromelain & Serratiopeptidase: A Comprehensive Exploration in Pharmaceutical Applications</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">21</th>
                    <td>Introduction to Urokinase Streptokinase & Pepsin : Chemistry, Sources, Preparation, and Applications</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">22</th>
                    <td>Unveiling the World of Castor Oil & Chaulmoogra oil: Chemistry, Preparation, and Therapeutic Marvels</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">23</th>
                    <td>Delving into Wool Fat: Chemistry, Applications, and Pharmaceutical Marvels</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">24</th>
                    <td>Unveiling Nature's Pharmacy: Marine Drugs as Novel Medicinal Agents</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Pharmacognosy
                    </td>
                </tr>
                <tr>
                    <th scope="row">25</th>
                    <td>Metabolic Pathways in Higher Plants and their Determination</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">26</th>
                    <td>Unraveling Nature's Mysteries: Exploring the Role of Radioactive Isotopes in Biogenetic Studies</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">27</th>
                    <td>Industrial Production and Utilization of Phytoconstituents: A Comprehensive Overview</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">28</th>
                    <td>Delving Deeper into Phytochemistry: Unraveling the Intricacies of Extraction and Analysis Techniques</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">29</th>
                    <td>Unveiling Nature's Abundance: Exploring the Depths of Herbs as Essential Raw Materials</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">30</th>
                    <td>Preparation and Standardization of Ayurvedic Formulations</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">31</th>
                    <td>Understanding the Landscape of Markets and Products</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">32</th>
                    <td>Exploring the Health Benefits and Role of Nutraceuticals in Ailments</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">33</th>
                    <td>Cultivation and Management of Medicinal Plants</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">34</th>
                    <td>Navigating the Herbal Maze: Selection, Identification, and Authentication of Herbal Materials</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">35</th>
                    <td>Navigating the Complex Terrain of Herbal-Drug and Herb-Food Interactions: A Comprehensive Exploration</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">36</th>
                    <td>Embracing Nature's Bounty: A Comprehensive Exploration of Herbal Cosmetics and Their Raw Materials</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">37</th>
                    <td>Herbal Excipients: Harnessing Nature's Bounty in Pharmaceutical Formulations</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">38</th>
                    <td>Navigating the Landscape of Herbal Formulations: A Comprehensive Exploration</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">39</th>
                    <td>Evaluation of Herbal Drugs: Compliance with WHO & ICH Guidelines</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">40</th>
                    <td>Navigating the Terrain of Intellectual Property in Agriculture: A Comprehensive Exploration</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">41</th>
                    <td>Patenting Aspects of Traditional Knowledge and Natural Products: A Case Study of Curcuma and Neem</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">42</th>
                    <td> Navigating Regulatory Frameworks for Ayurvedic, Siddha, and Unani Drugs in India</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">43</th>
                    <td>Unveiling the Herbal Renaissance: Exploring the Present Scope and Future Prospects of the Herbal Drugs Industry</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">44</th>
                    <td>The Flourishing Landscape of Medicinal and Aromatic Plants in India</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
                <tr>
                    <th scope="row">45</th>
                    <td>Schedule T - Good Manufacturing Practice of Indian Systems of Medicine</td>
                    <td>Dr. Vishal Kumar Deshwal</td>
                    <td>Text Book of Pharmacognosy</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="container mt-5">
    <div id="BoysHostel" class="tabcontent">
        <table class="table table-bordered">
            <thead>
                <tr class="heading">
                    <th scope="col"><b>S.No.</b></th>
                    <th scope="col"><b>Chapter Name</b></th>
                    <th scope="col"><b>Author Name</b></th>
                    <th scope="col"><b>Book Name </b></th>
                </tr>
            </thead>
            <tr>
                <th scope="row">1</th>
                <td>Exploring the Wonders of the Human Body: An Introduction to Anatomy and Physiology</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Delving Deeper into Cellular Dynamics: A Comprehensive Exploration of Cellular Organization and Communication</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Understanding Tissue Level of Organization and Classification</td>
                <td>Ms. Kriti Dabral </td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>The Architectural Marvels of the Human Body</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Fluids and Circulation: Exploring the Vitality of Body Fluids, Blood, and the Lymphatic System</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Navigating the Intricacies of the Peripheral Nervous System and Special Senses</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Deciphering the Complexity of the Cardiovascular System</td>
                <td>Ms. Kriti Dabral </td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Unraveling the Complexity of the Nervous System</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Deciphering the Intricacies of the Digestive System</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Exploring the Fundamentals of Energetics</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>Navigating the Intricacies of the Respiratory System: A Comprehensive Exploration</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>An In-Depth Exploration of the Urinary System: Unveiling its Complexity and Significance</td>
                <td>Ms. Kriti Dabral </td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">13</th>
                <td>Navigating the Complex Terrain of the Endocrine System: A Comprehensive Guide</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">14</th>
                <td>The Marvels of Human Reproduction: Unveiling the Intricacies of Life</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">15</th>
                <td>Unraveling the Mysteries of Genetics: A Comprehensive Exploration of Chromosomes, Genes, and Inheritance Patterns</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">16</th>
                <td>Basic Principles of Cell Injury and Adaptation</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">17</th>
                <td>Unveiling the Complexity of Inflammation, Repair, and Atherosclerosis</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">18</th>
                <td>Navigating the Complexities of Cardiovascular Disorders</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">19</th>
                <td>Navigating Respiratory Challenges: Understanding Asthma and Chronic Obstructive Airways Diseases</td>
                <td>Ms. Kriti Dabral</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">20</th>
                <td>Navigating the Complexities of Renal Dysfunction: Exploring Acute and Chronic Renal Failure</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">21</th>
                <td>Understanding Haematological Diseases</td>
                <td>Ms. Kriti Dabral </td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">22</th>
                <td>Exploring the Endocrine System</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">23</th>
                <td>Unraveling the Complexities of the Nervous System</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">24</th>
                <td>Deciphering Peptic Ulcers: Unraveling the Mysteries of Gastrointestinal Dysfunction</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">25</th>
                <td>Understanding Gastrointestinal Disorders and Liver Diseases</td>
                <td>Ms. Kriti Dabral </td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">26</th>
                <td>Exploring Bone and Joint Disorders: Rheumatoid Arthritis, Osteoporosis, and Gout</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">27</th>
                <td>Deciphering the Complexity of Cancer: A Comprehensive Exploration of Classification, Etiology, and Pathogenesis</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">28</th>
                <td>The Menace of Infectious Diseases</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">29</th>
                <td>Understanding Sexually Transmitted Diseases</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">30</th>
                <td>Understanding Pharmacology</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">31</th>
                <td>Principles of Pharmacology: Understanding Drug Action and Interaction</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">32</th>
                <td>Understanding the Pharmacology of the Peripheral Nervous System</td>
                <td>Ms. Kriti Dabral</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">33</th>
                <td>Deciphering the Pharmacology of Drugs Acting on the Central Nervous System: A Comprehensive Exploration</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">34</th>
                <td>Exploring the Pharmacology of Drugs Acting on the Central Nervous System and Psychopharmacological Agents</td>
                <td>Ms. Kriti Dabral </td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">35</th>
                <td>Pharmacology of Drugs Acting on the Cardiovascular System</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">36</th>
                <td>Pharmacology of Drugs Acting on the Cardiovascular System</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">37</th>
                <td>Pharmacology of Drugs Acting on the Urinary System</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">38</th>
                <td>Autocoids and Related Drugs</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">39</th>
                <td>Exploring the Pharmacology of Drugs Acting on the Endocrine System</td>
                <td>Ms. Kriti Dabral </td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">40</th>
                <td>Exploring the Depths of Bioassay</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">41</th>
                <td>Pharmacology of Drugs Acting on the Respiratory System</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">42</th>
                <td>Pharmacology of Drugs Acting on Respiratory System and Gastrointestinal Tract</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">43</th>
                <td>Exploring the Pharmacology of Drugs Acting on the Respiratory System and Chemotherapy: An In-Depth Analysis</td>
                <td>Ms. Kriti Dabral </td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">44</th>
                <td>Comprehensive Insights into Chemotherapy: Unveiling the Spectrum of Antimicrobial Agents</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">45</th>
                <td>Chemotherapy: A Comprehensive Guide to Treatment and Management of Urinary Tract Infections and Sexually Transmitted Diseases</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">46</th>
                <td>Immunopharmacology and Protein Drugs</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tr>
                <th scope="row">47</th>
                <td>Principles of Toxicology</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
            </tr>
            <tbody>
        </table>
    </div>
</div>
<div class="container mt-5">
    <div id="Book2021" class="tabcontent">
        <table class="table table-bordered">
            <thead>
                <tr class="heading">
                    <th scope="col"><b>S.No.</b></th>
                    <th scope="col"><b>Chapter Name</b></th>
                    <th scope="col"><b>Author Name</b></th>
                    <th scope="col"><b>Book Name </b></th>
                </tr>
            </thead>
            <tr>
                <th scope="row">1</th>
                <td>Understanding Fluid Dynamics: Exploring Manometers, Reynolds Number, Bernoulli's Theorem, and Flow Measurement Devices</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Navigating Size Reduction: Exploring Mechanisms, Laws, and Milling Machinery</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Exploring Size Separation Techniques: Mechanisms, Equipment, and Applications</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Understanding Heat Transfer</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Evaporation and Evaporators</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Distillation: Unveiling the Fundamental Principles and Methodologies</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Drying: Objectives, Mechanisms, and Diverse Applications</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Mixing Techniques and Equipment in Industrial Processes</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Filtration </td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Centrifugation </td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>Materials and Corrosion Prevention in Pharmaceutical Plant Construction</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>Pilot Plant Scale-Up Techniques: A Comprehensive Guide</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">13</th>
                <td>Technology Development and Transfer: A Comprehensive Overview</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">14</th>
                <td>Regulatory Affairs in Pharmaceuticals: A Comprehensive Exploration</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">15</th>
                <td>Pharmaceutical Product Development: From Non-Clinical Research to FDA Submissions</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">16</th>
                <td>Advancements in Quality Management Systems and Certifications in the Pharmaceutical Industry</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">17</th>
                <td>Comprehensive Insight into Indian Regulatory Requirements: CDSCO and State Licensing Authority</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">18</th>
                <td>Unraveling the Journey of New Drug Discovery and Development</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">19</th>
                <td>Navigating the Regulatory Approval Process: From IND to NDA and ANDA</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">20</th>
                <td>Exploring Global Regulatory Authorities: Structure and Application Processes</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">21</th>
                <td>Navigating International Markets: Registration of Indian Pharmaceutical Products</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">22</th>
                <td>Navigating Clinical Trials: Protocols, Ethics, and Safety Monitoring</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">23</th>
                <td>Demystifying Regulatory Concepts: Terminology, Guidance, and Frameworks</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">24</th>
                <td>Quality Assurance and Total Quality Management: Ensuring Excellence in Every Step</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">25</th>
                <td>Advancing Pharmaceutical Quality: Insights into ICH Guidelines, QbD, and Stability Testing</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">26</th>
                <td>Quality Standards and Accreditation Processes</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">27</th>
                <td>Organization, Personnel, and Premises in Pharmaceutical Manufacturing</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">28</th>
                <td>Fortifying Pharmaceutical Integrity: Quality Control and Good Laboratory Practices</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">29</th>
                <td>Ensuring Quality and Compliance in the Pharmaceutical Industry: From Complaints to Document Maintenance</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">30</th>
                <td>Ensuring Precision and Efficiency: Calibration, Validation, and Warehousing in the Pharmaceutical Industry</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">31</th>
                <td>Navigating Regulatory Terrain: Understanding the Drugs and Cosmetics Act, 1940 and Its Rules</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">32</th>
                <td>Understanding the Regulatory Framework of the Drugs and Cosmetics Act, 1940</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">33</th>
                <td>Navigating the Regulatory Landscape: A Comprehensive Overview of the Pharmacy Act, 1948</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">34</th>
                <td>Understanding the Medicinal and Toilet Preparation Act of 1955: A Comprehensive Guide</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">35</th>
                <td>Understanding the Narcotic Drugs and Psychotropic Substances Act of 1985: A Comprehensive Overview</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">36</th>
                <td>Unveiling the Essentials of the Drugs and Magic Remedies Act</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">37</th>
                <td>National Pharmaceutical Pricing Authority and Drug Price Control Order</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">38</th>
                <td>Upholding Animal Welfare: A Comprehensive Overview of the Prevention of Cruelty to Animals Act, 1960</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">39</th>
                <td>Pharmaceutical Legislations and Ethics: Ensuring Integrity in Healthcare</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">40</th>
                <td>The Medical Termination of Pregnancy Act: A Comprehensive Overview</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">41</th>
                <td>Empowering Democracy: Exploring the Right to Information Act</td>
                <td>Ms. Kriti Dabral</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tr>
                <th scope="row">42</th>
                <td>Introduction to Intellectual Property Rights (IPR)</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Pharmaceutical Product Development With Engineering Techniques</td>
            </tr>
            <tbody>
        </table>
    </div>
</div>
<div class="container mt-5">
    <div id="Book2020" class="tabcontent">
        <table class="table table-bordered">
            <thead>
                <tr class="heading">
                    <th scope="col"><b>S.No.</b></th>
                    <th scope="col"><b>Chapter Name</b></th>
                    <th scope="col"><b>Author Name</b></th>
                    <th scope="col"><b>Book Name </b></th>
                </tr>
            </thead>
            <tr>
                <th scope="row">1</th>
                <td>Fundamentals of Biomolecules: Exploring the Building Blocks of Life</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Exploring Free Energy, Redox Potential, and Thermodynamics</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Unveiling the Significance of Energy-Rich Compounds: ATP and cAMP</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Understanding Carbohydrate Metabolism</td>
                <td>Ms. Kriti Dabral </td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Unraveling the Mysteries of Electron Transport Chain and Oxidative Phosphorylation</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Lipid Metabolism and its Implications in Health and Disease</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>A Journey Through Amino Acid Metabolism and Beyond</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Unraveling the Mysteries of Nucleic Acids and Genetic Information Transfer</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Understanding Enzymes: Catalysts of Life</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Introduction to Microbiology</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>Microbial Identification and Sterilization Techniques in Microbiology</td>
                <td>Ms. Kriti Dabral </td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>Understanding Microbial Biology and Disinfection: A Comprehensive Overview</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">13</th>
                <td>Aseptic Area Design and Microbiological Assays</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">14</th>
                <td>Delving Deeper into Microbial Spoilage in Pharmaceutical Products</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">15</th>
                <td>Preservation of Pharmaceutical Products: Harnessing Antimicrobial Agents for Enhanced Stability</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">16</th>
                <td>Unraveling the Dynamic World of Animal Cell Cultures: A Gateway to Pharmaceutical Advancement and Research Exploration</td>
                <td>Ms. Kriti Dabral </td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">17</th>
                <td>Exploring the Intersection of Biotechnology and Pharmaceutical Sciences</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">18</th>
                <td>Enzyme Biotechnology - Methods of Enzyme Immobilization and Applications</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">19</th>
                <td>Biosensors in Pharmaceutical Industries: Revolutionizing Healthcare</td>
                <td>Ms. Kriti Dabral </td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">20</th>
                <td>Unraveling the World of Protein Engineering</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">21</th>
                <td>Harnessing Microbial Power: A Deep Dive into Enzyme Production and Industrial Applications</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">22</th>
                <td>Unraveling the Fundamentals of Genetic Engineering</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">23</th>
                <td>Understanding Cloning Vectors, Restriction Endonucleases, and DNA Ligase in Genetic Engineering</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">24</th>
                <td>Unlocking the Potential: Recombinant DNA Technology and its Impact on Medicine</td>
                <td>Dr. Nidhi Chatterjee</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">25</th>
                <td>Advancements in Biotechnology: Harnessing rDNA Technology and Genetic Engineering for Therapeutic Production</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">26</th>
                <td>Understanding the Dynamic Nature of Immunity</td>
                <td>Ms. Kriti Dabral </td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">27</th>
                <td>The Intricacies of Immunoglobulin Architecture</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">28</th>
                <td>Unveiling the Intricacies of MHC: Structure and Function</td>
                <td>Ms. Kriti Dabral </td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">29</th>
                <td>Immunobiological Preparations: Methods and Production</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">30</th>
                <td>Storage Conditions and Stability of Official Vaccines</td>
                <td>Ms. Kriti Dabral </td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">31</th>
                <td>Hybridoma Technology: Production, Purification, and Applications</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">32</th>
                <td>Blood Products and Plasma Substitutes: Lifesaving Innovations in Medicine</td>
                <td>Ms. Kriti Dabral </td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">33</th>
                <td>Comprehensive Insights into Immunoblotting Techniques: ELISA, Western Blotting, and Southern Blotting</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">34</th>
                <td>Exploring the Genetic Organization of Eukaryotes and Prokaryotes: An In-depth Comparative Analysis</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">35</th>
                <td>Understanding Microbial Genetics</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">36</th>
                <td>Exploring the Depths of Microbial Biotransformation: Principles, Applications, and Future Horizons</td>
                <td>Ms. Kriti Dabral </td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">37</th>
                <td>Unraveling the Mysteries of Mutation: Exploring Types of Mutations and Mutants</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">38</th>
                <td>Fermentation Processes: Techniques and Practices</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">39</th>
                <td>Large Scale Production Fermenter Design and Control: A Comprehensive Exploration</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">40</th>
                <td>Exploring the Bioproduction Landscape: From Microbial Metabolism to Industrial Innovation</td>
                <td>Ms. Kriti Dabral </td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tr>
                <th scope="row">41</th>
                <td>Blood Products: Collection, Processing, and Storage</td>
                <td>Dr. Vishal Kumar Deshwal</td>
                <td>Basic Techniques in Biochemistry, Microbiology and Biotechnology</td>
            </tr>
            <tbody>
        </table>
    </div>
</div>
<div class="container mt-5">
    <div id="Book2019" class="tabcontent">
        <table class="table table-bordered">
            <thead>
                <tr class="heading">
                    <th scope="col"><b>S.No.</b></th>
                    <th scope="col"><b>Chapter Name</b></th>
                    <th scope="col"><b>Author Name</b></th>
                    <th scope="col"><b>Book Name </b></th>
                </tr>
            </thead>
            <tr>
                <th scope="row">1</th>
                <td>Tracing the Threads: The Interconnected Evolution of Pharmacy
                    Education, Industry Dynamics, and Organizational Structures
                    in India
                </td>
                <td>Dr. Jyoti Sinha </td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Navigating Pharmacy as a Dynamic Career Path: An In-depth
                    Exploration of Opportunities and Pharmacopoeial Standards
                </td>
                <td>Ms. Kriti Dabral</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Navigating the Landscape of Dosage Forms: A Comprehensive
                    Exploration of Classification, Definitions, and Practical
                    Considerations
                </td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Comprehensive Insights into Prescriptions: Understanding
                    Definitions, Components, Handling, and Strategies for Error
                    Prevention
                </td>
                <td>Ms. Kanchan Singh</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Insights into Posology and Pediatric Dose Calculations</td>
                <td>Ms. Kriti Dabral</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Navigating Pharmaceutical Calculations</td>
                <td>Ms. Yashika Uniyal :</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Exploring the World of Powders</td>
                <td>Dr. Jyoti Sinha</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>A Comprehensive Exploration of Liquid Dosage Forms</td>
                <td>Ms. Kanchan Singh</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Monophasic Liquid Dosage Forms</td>
                <td>Ms. Kriti Dabral</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Biphasic Liquid Dosage Forms</td>
                <td>Ms. Yashika Uniyal </td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>Understanding Pharmaceutical Incompatibilities</td>
                <td>Dr. Jyoti Sinha</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>Exploring Semisolid Dosage Forms in Pharmaceutical Science</td>
                <td>Dr. Jyoti Sinha</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">13</th>
                <td>Unveiling the Foundations of Preformulation Studies in
                    Pharmaceutical Science</td>
                <td>Ms. Yashika Uniyal </td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">14</th>
                <td>Harnessing Preformulation Considerations for the Development
                    of Solid, Liquid Oral, and Parenteral Dosage Forms:
                    A Comprehensive Analysis
                </td>
                <td>Ms. Kanchan Singh </td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">15</th>
                <td>Mastering the Art of Tablet Formulation: A Comprehensive Guide</td>
                <td>Dr. Jyoti Sinha</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">16</th>
                <td>Mastering Tablet Coating Techniques and Quality Control
                    Measures
                </td>
                <td>Ms. Kanchan Singh</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">17</th>
                <td>Mastering the Art of Liquid Orals: Formulation, Manufacturing,
                    and Quality Assurance
                </td>
                <td>Ms. Kriti Dabral</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">18</th>
                <td>Hard Gelatin Capsules: Production, Formulation, and Quality
                    Assurance
                </td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">19</th>
                <td>Potential of Soft Gelatin Capsules: Production, Quality Control,
                    and Applications
                </td>
                <td>Dr. Jyoti Sinha</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">20</th>
                <td>Embracing the Realm of Pellets: Exploring Formulation, Process,
                    and Equipment
                </td>
                <td>Ms. Kriti Dabral</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">21</th>
                <td>Mastering Parenteral Products: Formulation, Production, and
                    Quality Control
                </td>
                <td>Ms. Yashika Uniyal </td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">22</th>
                <td>Ophthalmic Preparations: Formulation and Evaluation</td>
                <td>Ms. Kanchan Singh</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">23</th>
                <td>Cosmetics Formulation and Preparation</td>
                <td>Dr. Jyoti Sinha</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">24</th>
                <td>Pharmaceutical Aerosols: Formulation, Manufacture, and
                    Evaluation
                </td>
                <td>Ms. Kriti Dabral </td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">25</th>
                <td>Packaging Materials Science: Pharmaceutical Industry</td>
                <td>Ms. Yashika Uniyal</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">26</th>
                <td>Controlled Drug Delivery Systems: Design, Principles, and
                    Applications
                </td>
                <td>Ms. Kanchan Singh</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">27</th>
                <td>Microencapsulation in Drug Delivery Systems</td>
                <td>Dr. Jyoti Sinha</td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">28</th>
                <td>Mucosal Drug Delivery Systems: Enhancing Therapeutic Efficacy
                    through Bioadhesion</td>
                <td>Ms. Kriti Dabral </td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">29</th>
                <td>Implantable Drug Delivery Systems: Pioneering Therapeutic
                    Solutions</td>
                <td>Ms. Yashika Uniyal </td>
                <td>Text Book of Pharmaceutics</td>
            </tr>
            <tr>
                <th scope="row">30</th>
                <td>Informatics and Methods in Drug Design: Harnessing Data
                    for Therapeutic Innovation
                </td>
                <td>Ms. Kanchan Singh </td>
                <td>Text Book of Pharmaceutics</td>
            </tr>

            <tbody>
        </table>
    </div>
</div>
<?php require "common/footer.php" ?>

<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // By default, open the Boys Hostel tab
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".tablink").click();
    });
</script>
<style>
    .tabs {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .tablink {
        background-color: orange;
        border: none;
        outline: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        margin: 0 5px;
    }

    .tablink:hover {
        background-color: #ddd;
    }

    .tablink.active {
        background-color: lightpink;
    }

    .tabcontent {
        display: none;
    }

    .tabcontent table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .tabcontent th,
    .tabcontent td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    .tabcontent th {
        background-color: #f2f2f2;
    }
</style>