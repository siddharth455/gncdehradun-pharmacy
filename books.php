<style>
    #chart-container {
        width: 50%;
        height: 50%;
        margin: 20px 40%;
    }

    @media (max-width: 768px) {
        #chart-container {
            max-width: 600px;
            /* Adjust as needed */
        }
    }

    /* Styles for Mobile */
    @media (max-width: 480px) {
        #chart-container {
            max-width: 350px;
            /* Add some padding to prevent the chart from touching the edges */
            margin: 0 20px;

        }

        canvas {
            height: 350px !important;
            width: 350px !important;
        }

        .mobile-font-size .datalabels {
            font-size: 10px !important;
        }
    }
</style>

<?php require "common/header.php" ?>
<div class="banner-area about" style="background-image: url(assets/images/banner/38.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Books &amp; Book Chapters</h1>
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

<div class="container">
  
        <div style="overflow-x:auto;">
            <table class="table table-bordered" style="filter: drop-shadow(3px 3px 4px black);">
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
                        <td>Dr. Nidhi Chatterjee</td>
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
                        <td>Ms. Kriti Dabral</td>
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
                        <td>Ms. Kriti Dabral</td>
                        <td>Text Book of Pharmacognosy
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Harnessing Nature's Pharmacy: Unveiling the Vast Potential of Plant Tissue Culture in Pharmacognosy</td>
                        <td>Ms. Yashika Uniyal</td>
                        <td>Text Book of Pharmacognosy
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Harnessing Nature's Bounty: Exploring the Potential of Edible Vaccines</td>
                        <td>Ms. Yashika Uniyal</td>
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
                        <td>Ms. Yashika Uniyal</td>
                        <td>Text Book of Pharmacognosy
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>Understanding Volatile Oils & Resins: Definition, Classification, Properties, and Identification Tests</td>
                        <td>Dr. Nidhi Chatterjee</td>
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
                        <td>Ms. Kriti Dabral</td>
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
                        <td>Ms. Kriti Dabral</td>
                        <td>Text Book of Pharmacognosy
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">21</th>
                        <td>Introduction to Urokinase Streptokinase & Pepsin : Chemistry, Sources, Preparation, and Applications</td>
                        <td>Ms. Kriti Dabral</td>
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
                        <td>Ms. Kriti Dabral</td>
                        <td>Text Book of Pharmacognosy</td>
                    </tr>
                    <tr>
                        <th scope="row">26</th>
                        <td>Unraveling Nature's Mysteries: Exploring the Role of Radioactive Isotopes in Biogenetic Studies</td>
                        <td>Ms. Kriti Dabral</td>
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
                        <td>Dr. Nidhi Chatterjee</td>
                        <td>Text Book of Pharmacognosy</td>
                    </tr>
                    <tr>
                        <th scope="row">34</th>
                        <td>Navigating the Herbal Maze: Selection, Identification, and Authentication of Herbal Materials</td>
                        <td>Ms. Kriti Dabral</td>
                        <td>Text Book of Pharmacognosy</td>
                    </tr>
                    <tr>
                        <th scope="row">35</th>
                        <td>Navigating the Complex Terrain of Herbal-Drug and Herb-Food Interactions: A Comprehensive Exploration</td>
                        <td>Ms. Yashika Uniyal</td>
                        <td>Text Book of Pharmacognosy</td>
                    </tr>
                    <tr>
                        <th scope="row">36</th>
                        <td>Embracing Nature's Bounty: A Comprehensive Exploration of Herbal Cosmetics and Their Raw Materials</td>
                        <td>Ms. Kriti Dabral</td>
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
                        <td>Ms. Kriti Dabral</td>
                        <td>Text Book of Pharmacognosy</td>
                    </tr>
                    <tr>
                        <th scope="row">40</th>
                        <td>Navigating the Terrain of Intellectual Property in Agriculture: A Comprehensive Exploration</td>
                        <td>Ms. Kriti Dabral</td>
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
                        <td>Ms. Yashika Uniyal</td>
                        <td>Text Book of Pharmacognosy</td>
                    </tr>
                     <tr>
                    <th scope="row">46</th>
                    <td>Exploring the Wonders of the Human Body: An Introduction to Anatomy and Physiology</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">47</th>
                    <td>Delving Deeper into Cellular Dynamics: A Comprehensive Exploration of Cellular Organization and Communication</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">48</th>
                    <td>Understanding Tissue Level of Organization and Classification</td>
                    <td>Ms. Kriti Dabral </td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">49</th>
                    <td>The Architectural Marvels of the Human Body</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">50</th>
                    <td>Fluids and Circulation: Exploring the Vitality of Body Fluids, Blood, and the Lymphatic System</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">51</th>
                    <td>Navigating the Intricacies of the Peripheral Nervous System and Special Senses</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">52</th>
                    <td>Deciphering the Complexity of the Cardiovascular System</td>
                    <td>Ms. Kriti Dabral </td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">53</th>
                    <td>Unraveling the Complexity of the Nervous System</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">54</th>
                    <td>Deciphering the Intricacies of the Digestive System</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">55</th>
                    <td>Exploring the Fundamentals of Energetics</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">56</th>
                    <td>Navigating the Intricacies of the Respiratory System: A Comprehensive Exploration</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">57</th>
                    <td>An In-Depth Exploration of the Urinary System: Unveiling its Complexity and Significance</td>
                    <td>Ms. Kriti Dabral </td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">58</th>
                    <td>Navigating the Complex Terrain of the Endocrine System: A Comprehensive Guide</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">59</th>
                    <td>The Marvels of Human Reproduction: Unveiling the Intricacies of Life</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">60</th>
                    <td>Unraveling the Mysteries of Genetics: A Comprehensive Exploration of Chromosomes, Genes, and Inheritance Patterns</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">61</th>
                    <td>Basic Principles of Cell Injury and Adaptation</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">62</th>
                    <td>Unveiling the Complexity of Inflammation, Repair, and Atherosclerosis</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">63</th>
                    <td>Navigating the Complexities of Cardiovascular Disorders</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">64</th>
                    <td>Navigating Respiratory Challenges: Understanding Asthma and Chronic Obstructive Airways Diseases</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">65</th>
                    <td>Navigating the Complexities of Renal Dysfunction: Exploring Acute and Chronic Renal Failure</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">66</th>
                    <td>Understanding Haematological Diseases</td>
                    <td>Ms. Kriti Dabral </td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">67</th>
                    <td>Exploring the Endocrine System</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">68</th>
                    <td>Unraveling the Complexities of the Nervous System</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">69</th>
                    <td>Deciphering Peptic Ulcers: Unraveling the Mysteries of Gastrointestinal Dysfunction</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">70</th>
                    <td>Understanding Gastrointestinal Disorders and Liver Diseases</td>
                    <td>Ms. Kriti Dabral </td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">71</th>
                    <td>Exploring Bone and Joint Disorders: Rheumatoid Arthritis, Osteoporosis, and Gout</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">72</th>
                    <td>Deciphering the Complexity of Cancer: A Comprehensive Exploration of Classification, Etiology, and Pathogenesis</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">73</th>
                    <td>The Menace of Infectious Diseases</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">74</th>
                    <td>Understanding Sexually Transmitted Diseases</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">75</th>
                    <td>Understanding Pharmacology</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">76</th>
                    <td>Principles of Pharmacology: Understanding Drug Action and Interaction</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">77</th>
                    <td>Understanding the Pharmacology of the Peripheral Nervous System</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">78</th>
                    <td>Deciphering the Pharmacology of Drugs Acting on the Central Nervous System: A Comprehensive Exploration</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">79</th>
                    <td>Exploring the Pharmacology of Drugs Acting on the Central Nervous System and Psychopharmacological Agents</td>
                    <td>Ms. Kriti Dabral </td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">80</th>
                    <td>Pharmacology of Drugs Acting on the Cardiovascular System</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">81</th>
                    <td>Pharmacology of Drugs Acting on the Cardiovascular System</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">82</th>
                    <td>Pharmacology of Drugs Acting on the Urinary System</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">83</th>
                    <td>Autocoids and Related Drugs</td>
                    <td>Dr. Nidhi Chatterjee</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">84</th>
                    <td>Exploring the Pharmacology of Drugs Acting on the Endocrine System</td>
                    <td>Ms. Kriti Dabral </td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">85</th>
                    <td>Exploring the Depths of Bioassay</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">86</th>
                    <td>Pharmacology of Drugs Acting on the Respiratory System</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">87</th>
                    <td>Pharmacology of Drugs Acting on Respiratory System and Gastrointestinal Tract</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">88</th>
                    <td>Exploring the Pharmacology of Drugs Acting on the Respiratory System and Chemotherapy: An In-Depth Analysis</td>
                    <td>Ms. Kriti Dabral </td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">89</th>
                    <td>Comprehensive Insights into Chemotherapy: Unveiling the Spectrum of Antimicrobial Agents</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">90</th>
                    <td>Chemotherapy: A Comprehensive Guide to Treatment and Management of Urinary Tract Infections and Sexually Transmitted Diseases</td>
                    <td>Ms. Yashika Uniyal</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">91</th>
                    <td>Immunopharmacology and Protein Drugs</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                <tr>
                    <th scope="row">98</th>
                    <td>Principles of Toxicology</td>
                    <td>Ms. Kriti Dabral</td>
                    <td>Text Book of Human Anatomy Physiology and Pharmacology</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require "common/footer.php" ?>
