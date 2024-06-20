<style>
    .IQAC-container {
        width: 50%;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .IQAC-container h2 {
        color: #333;
        margin-bottom: 20px;
        background-color: #F8D19E;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }

    .pagination-container {
        margin-top: 20px;
        text-align: center;
    }

    .pagination li {
        display: inline;
        margin: 0 5px;
        cursor: pointer;
    }

    .pagination li.active a {
        background-color: #007bff;
        color: white;
    }

    .pagination li:hover a {
        background-color: #0056b3;
        color: white;
    }

    @media (max-width: 576px) {
        .IQAC-container {
            width: 100%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    }
</style>

<?php require "common/header.php" ?>
<div class="banner-area about" style="background-image: url(assets/images/banner/16.webp);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Library Books</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="IQAC-container">
    <h2 style="background: #3abefe; color: var(--text-white);">Library Books</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Title of the Book</th>
                <th>Author</th>
                <th>Publisher</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>COMPUTER FUNDAMENTAL</td>
                <td>SINHA</td>
                <td>BPB DEHRADUN</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>THE THEORY AND PRACTICE IF INDUSTRIAL PHARMACY</td>
                <td>KHAR</td>
                <td>CBSPD</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>PHARMACUTICAL ANALYSIS</td>
                <td>PARIMOO</td>
                <td>CBSPD</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>AULTON PHARMACEUTICS</td>
                <td>AULTON</td>
                <td>CLL</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>ROSS AND WILSON ANATOMY AND PHYSIOLOGY</td>
                <td>WANGH</td>
                <td>CLL</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>ATLAS OF HUMAN ANATOMY</td>
                <td>NETTER</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>BIOCHEMISTRY</td>
                <td>BERG</td>
                <td>FREEMAN</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>ESSENTIALS OF MEDICAL PHARMACOLOGY</td>
                <td>SIDDHIQUI</td>
                <td>G MEDIK</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>ORGANIC CHEMISTRY OF NATURAL PRODUCTS</td>
                <td>ARORA</td>
                <td>HPH</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>TEXT BOOK OF MEDICINAL CHEMISTRY</td>
                <td>PANDEYA</td>
                <td>K.G</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>FRANK MATHEMATICS FOR B PHARMA</td>
                <td>DHALL</td>
                <td>M M PUB</td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>HEALTH EDUCATION AND COMMUNITY PHARMACY</td>
                <td>BHISE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">13</th>
                <td>HUMAN ANATOMY AND ANATOMY</td>
                <td>BHISE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">14</th>
                <td>PRINICIPLE AND PRACTICE OF DRUG STATE ADMNISTRATION</td>
                <td>BURANDE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">15</th>
                <td>PHARMACUTICAL JURISPRUDENCE</td>
                <td>CHANDAK</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">16</th>
                <td>BIOCHEMISTRY AND CLINICAL PATHOLOGY</td>
                <td>CHAUDHARI</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">17</th>
                <td>A TEXT BOOK OF PHARMACOGNOSY</td>
                <td>GOKHALE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">18</th>
                <td>PRACTICAL PHARMACOGNOSY</td>
                <td>GOKHALE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">19</th>
                <td>PRACTICAL MANUAL OF BIOCHEMISTRY AND CLINICAL PATHOLOGY</td>
                <td>GUPTA</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">20</th>
                <td>PRACTICAL MANUAL OF HOSPITAL AND CLINICAL PHARMACY</td>
                <td>GUPTA</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">21</th>
                <td>PRACTICAL MANUAL OF HUMAN ANATOMY AND PHYSIOLOGY</td>
                <td>GUPTA</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">22</th>
                <td>PRATICAL MANUAL OF PHARMACUTICAL CHEMISTRY</td>
                <td>GUPTA</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">23</th>
                <td>PRACTICAL MANUAL OF PHARMACEUTICS I</td>
                <td>GUPTA</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">24</th>
                <td>PRACTICAL MANUAL OF PHARMACUTICAL II</td>
                <td>GUPTA</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">25</th>
                <td>PRACTICAL MANUAL OF PHARMACOGNOSY</td>
                <td>GUPTA</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">26</th>
                <td>PRACTICAL MANUAL OF PHARMACOGNOSY AND TOXICOLOGY</td>
                <td>GUPTA</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">27</th>
                <td>PHARMACOLOGY AND TOXICOLOGY</td>
                <td>KALE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">28</th>
                <td>PRACTICAL BIOCHEMISTRY & CLINICAL PATHOLOGY</td>
                <td>KALE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">29</th>
                <td>PRACTICAL HUMAN ANATOMY AND PHYSIOLOGY</td>
                <td>KALE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">30</th>
                <td>PRACTICAL PHARMACOLOGY AND TOXICOLOGY</td>
                <td>KALE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">31</th>
                <td>PHARMACUTICAL CHEMISTRY I</td>
                <td>KASTURE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">32</th>
                <td>PHARMACEUTICS I</td>
                <td>KASTURE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">33</th>
                <td>PHARMACEUTICS II</td>
                <td>KASTURE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">34</th>
                <td>PRACTICAL PHARMACEUTICAL CHEMISTRY I</td>
                <td>KASTURE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">35</th>
                <td>PRACTICAL PHARMACEUTICS II</td>
                <td>KASTURE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">36</th>
                <td>PHARMACEUTICAL CHEMISTRY II</td>
                <td>KASTURE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">37</th>
                <td>PRACTICAL PHARMACEUTICS I</td>
                <td>KASTURE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">38</th>
                <td>PRACTICAL PHARMACEUTICAL CHEMISTRY II</td>
                <td>KASTURE</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">39</th>
                <td>PHARMACEUTICAL JURISPRUDENCE</td>
                <td>KUCHEKAR</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">40</th>
                <td>CONCISE INORGANIC PHARMACEUTICAL CHEMISTRY I</td>
                <td>MAHADIK</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">41</th>
                <td>CONCISE INORGANIC PHARMACEUTICAL CHEMISTRY II</td>
                <td>MAHADIK</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">42</th>
                <td>A MANUAL OF MEDICAL LABORATORY TECHNOLOGY</td>
                <td>NAIGAONKAR</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">43</th>
                <td>HOSPITAL AND CLINICAL PHARMACY</td>
                <td>PARADKAR</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">44</th>
                <td>PRACTICAL HOSPITAL AND CLINICAL PHARMACY</td>
                <td>PARADKAR</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">45</th>
                <td>PHARACOLOGY AND TOXICOLOGY</td>
                <td>YADAV</td>
                <td>NIRALAI</td>
            </tr>
            <tr>
                <th scope="row">46</th>
                <td>ORGANIC CHEMISTRY</td>
                <td>MARRISON</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">47</th>
                <td>TEXT BOOK PF PHARMACOGNOSY</td>
                <td>ARUMUGAM</td>
                <td>SATYA</td>
            </tr>
            <tr>
                <th scope="row">48</th>
                <td>ANOTOMY PHYSIOLOGY AND HEALTH EDUCATION</td>
                <td>MURUGESH</td>
                <td>SATYA</td>
            </tr>
            <tr>
                <th scope="row">49</th>
                <td>A CONCISE TEXT BOOK OF PHARMACOLOGY</td>
                <td>MURUGESH</td>
                <td>SATYA</td>
            </tr>
            <tr>
                <th scope="row">50</th>
                <td>TEXT OF MEDICINAL CHEMISTRY OF NATURAL PRODUCTS</td>
                <td>PANDEYA</td>
                <td>S G PUB</td>
            </tr>
            <tr>
                <th scope="row">51</th>
                <td>PHARMACEUTICAL MATHEMATICS</td>
                <td>BALI</td>
                <td>UNIV SC PUB</td>
            </tr>
            <tr>
                <th scope="row">52</th>
                <td>PHARMACEUTICAL ENGINEERING UNIT OPERATION I</td>
                <td>SUBRAMANYAM</td>
                <td>VALLABH PUB</td>
            </tr>
            <tr>
                <th scope="row">53</th>
                <td>PHARMACEUTICAL ENGINEERING UNIT OPERATION II</td>
                <td>SUBRAMANYAM</td>
                <td>VALLABH PUB</td>
            </tr>
            <tr>
                <th scope="row">54</th>
                <td>FDA REGULATORY AFFAIRS</td>
                <td>MANTUS D</td>
                <td>T&F PUB</td>
            </tr>
            <tr>
                <th scope="row">55</th>
                <td>HERBS SPICES AND MEDITIONAL PLANTS</td>
                <td>CRAKER</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">56</th>
                <td>VARLEYS PRACTICAL CLINICAL BIOCHEMISTRY</td>
                <td>GOWENLOCK A H</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">57</th>
                <td>PHARMACY ADMINSTRATION</td>
                <td>ACHARYULU G</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">58</th>
                <td>CHEMISTRY OF NATURAL PRODUCTS</td>
                <td>KAR A</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">59</th>
                <td>PHARMACEUTICAL ANALYSIS</td>
                <td>KAR A</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">60</th>
                <td>INSTRUMENTAL METHODS OF ANALYSIS</td>
                <td>GRAY N</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">61</th>
                <td>PHARMACEUTICAL BIOTECHNOLOGY</td>
                <td>VYAS S.P</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">62</th>
                <td>ORGANIC PHARMACEUTICAL AND MEDICAL CHEMISTRY</td>
                <td>QADRY J.S</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">63</th>
                <td>PHARMACOGNOSY WITH INCOLOUR PHTOGHRPHS</td>
                <td>QADRY J.S</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">64</th>
                <td>TEXT BOOK PF PHARMACOGNOSY AND PHTOCHEMISTRY</td>
                <td>JARALS E.E</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">65</th>
                <td>TEXT BOOK OF PHARMACEUTICAL ORGANIC CHEMISTRY</td>
                <td>BHANDARI AND SINGH</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">66</th>
                <td>EXPERIMENTAL PHARMACOLOGY</td>
                <td>PILLAI K.K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">67</th>
                <td>TEXT BOOK OF PHARMACOGNOSY</td>
                <td>MOHD ALI</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">68</th>
                <td>INTRODUCTION TO PHARMACEUTICS</td>
                <td>GUPTA</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">69</th>
                <td>PHARMACEUTICAL CHEMISTRY I</td>
                <td>RAJASEKARAN</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">70</th>
                <td>BIOPHARMACEUTICS AND PHARMACOKINETICS</td>
                <td>KULKARNI J.S</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">71</th>
                <td>INTRODUCTION TO GENERAL PHARMACY</td>
                <td>AGARWAL G</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">72</th>
                <td>DRUG STORE AND BUSINESS MANAGEMENT</td>
                <td>ALI M</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">73</th>
                <td>QUANTITATIVE ANALYSIS</td>
                <td>ALEXEYEV V M</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">74</th>
                <td>INTRODUCTION TO PHARMACEUTICS II</td>
                <td>GUPTA A K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">75</th>
                <td>TEXT BOOK OF COMPUTER APPLICATION IN PHARMACEUTICAL SCIENCE AND MANAGEMENT</td>
                <td>TANWAR</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">76</th>
                <td>HUMAN ANATOMY AND PHYSIOLOGY</td>
                <td>RAJE V N</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">77</th>
                <td>PHARMACUTICAL ARITHEMATIC</td>
                <td>JAIN N K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">78</th>
                <td>REGULATION OF PHARMACEUTICALS IN DEVELOPING COUNTRIESLEGAL ISSUE AND APPROACHES</td>
                <td>JAYASURIYA D C</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">79</th>
                <td>DRUGS AND COSMETICS FORMULATIONS</td>
                <td>MAGAZINE R</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">80</th>
                <td>DRUGS AND COSMETICS ACT</td>
                <td>MAGAZINE R</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">81</th>
                <td>TEXT BOOK OF HERBAL COSMETICS</td>
                <td>VIMALA DEVI M</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">82</th>
                <td>HAND BOOK OF DRUG STORE AND BUSINESS MANAGEMENT</td>
                <td>GUPTA A K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">83</th>
                <td>ESSENTIALS OF PATHOPHYSIOLOGY FOR PHARMACY</td>
                <td>ZDANOWICZ M M</td>
                <td>T & F</td>
            </tr>
            <tr>
                <th scope="row">84</th>
                <td>THE PHARMACEUTICAL REGULATORY PROCESS</td>
                <td>BERRY I R BORENSTEINS</td>
                <td>T & F</td>
            </tr>
            <tr>
                <th scope="row">85</th>
                <td>MEDICINAL CHEMISTRY OF BIOACTIVE NATURAL PRODUCTS</td>
                <td>LIANG</td>
                <td>WILEY</td>
            </tr>
            <tr>
                <th scope="row">86</th>
                <td>PRACTICAL CLINICAL BIOCHEMISTRY 4ED</td>
                <td>VARLEY</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">87</th>
                <td>HAND BOOK HEALTH EDUCATION AND COMMUNITY PHARMACY</td>
                <td>GUPTA A K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">88</th>
                <td>THE QUANTITATIVE ANALYSIS OF DRUGS</td>
                <td>GARRATT</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">89</th>
                <td>PHARMACEUTICAL COMPUTER SYSTEMS</td>
                <td>WINGATE G</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">90</th>
                <td>MEDICINAL PLANT BIOTECHNOLOGY</td>
                <td>VEERESHAM CIDDI</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">91</th>
                <td>COOPER AND GUNNS DISPENSING FOR PHARMACEUTICAL STUDENTS</td>
                <td>CARTER S J</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">92</th>
                <td>TARGETED AND CONTEOLLED DRUG DELIVERY</td>
                <td>VYAS S P</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">93</th>
                <td>TEXT BOOK OF PHARMACEUTICAL DISPENSING</td>
                <td>GOYAL A K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">94</th>
                <td>DRUG DESIGN</td>
                <td>RAZADAN B</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">95</th>
                <td>TEXT BOOK OF PHARMACOGNOSY AND PHYTOCHEMISTRY</td>
                <td>MALVIYA S</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">96</th>
                <td>PRACTICAL PHYSICAL PHARMACY</td>
                <td>GAUD R S</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">97</th>
                <td>PHARMACEUTICAL CHEMISTRY</td>
                <td>BHANDARI</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">98</th>
                <td>PRACTICAL PHARMACEUTICAL CHEMISTRY</td>
                <td>SIDDIQUI A A</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">99</th>
                <td>MEDICINAL CHEMISTRY</td>
                <td>RAZDAN B</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">100</th>
                <td>ESSENTIALS OF BIOPHARMACEUTICS AND PHARMACOKINETICS</td>
                <td>KAR</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">101</th>
                <td>NATURAL PRODUCTS CHEMISTRY PRACTICAL MANUAL</td>
                <td>SIDDIQUI A A</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">102</th>
                <td>ORGANIC PHARMACEUTICAL AND MEDICINAL CHEMISTRY</td>
                <td>QADARY J S</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">103</th>
                <td>TEXT BOOK OF COSMETICS</td>
                <td>NEMA R K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">104</th>
                <td>COOPER AND GUNNS TUTORIAL PHARMACY</td>
                <td>CARTER S J</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">105</th>
                <td>PHARMACUTICAL CHEMISTRY OF NATURAL PRODUCT</td>
                <td>ALAGARSAMY V L</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">106</th>
                <td>PRACTICE OF HOSPITAL CLINICAL AND COMMUNITY PHARMACY</td>
                <td>AOLL</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">107</th>
                <td>HOSPITAL PHARMACY</td>
                <td>SINGH M</td>
                <td>SHREE</td>
            </tr>
            <tr>
                <th scope="row">108</th>
                <td>TEXT BOOKOF PHARMACEUTICAL BIOTECHNOLOGY</td>
                <td>KOKATE C</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">109</th>
                <td>THE BOOK OF PHARMACEUTICAL INDUSTRIAL MANAGEMENT</td>
                <td>SHAH B N</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">110</th>
                <td>TEXT BOOK HERBAL PLANTS AND THEIR APPLICATIONS IN COSMEUTICALS</td>
                <td>DAS K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">111</th>
                <td>FOYES PRINCIPLES OF MEDICINAL CHEMISTRY</td>
                <td>LEMKE T L</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">112</th>
                <td>PHPHARMACOGNOSY PRACTICAL NOTE BOOK</td>
                <td>SHRMA</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">113</th>
                <td>INDIAN PHARMACOPOEIA</td>
                <td>IPC</td>
                <td>IPC</td>
            </tr>
            <tr>
                <th scope="row">114</th>
                <td>MARTINOUBLE THE COMPLETE DRUG REFERENCE</td>
                <td>BRAYFIELD A</td>
                <td>PHARMA</td>
            </tr>
            <tr>
                <th scope="row">115</th>
                <td>HOSPITAL CLINICAL PHARMACY</td>
                <td>RAJE V N</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">116</th>
                <td>ANATOMY AND PHYSIOLOGY WITH WORKBOOK INDIA EDITION</td>
                <td>TORTORE G J</td>
                <td>WILEY</td>
            </tr>
            <tr>
                <th scope="row">117</th>
                <td>MARTINS PHYSICAL PHARMACY AND PHARMACEUTICAL SCIENCES</td>
                <td>SINKO P J</td>
                <td>LWW RS</td>
            </tr>
            <tr>
                <th scope="row">118</th>
                <td>PRINCIPLES OF PHARMACOLOGY THE PATHO PHYSIOLOGIC BASIC OF DRUG THERAPY</td>
                <td>GOLO D E</td>
                <td>LWW RS</td>
            </tr>
            <tr>
                <th scope="row">119</th>
                <td>HUMAN ANATOMY AND PHYSIOLOGY PRACTICAL</td>
                <td>SHARMA V</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">120</th>
                <td>PHARMACOLOGY</td>
                <td>BOLLINGTON D A</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">121</th>
                <td>A PRACTICAL APPROACH TO PHARMACEUTICAL ANALYSIS INSTRUMENTAL AND MANUAL</td>
                <td>NEMA R K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">122</th>
                <td>MEDICAL BIOCHEMISTRY</td>
                <td>BHAGAVAN N V</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">123</th>
                <td>THE PRACTICE OF MEDICINAL CHEMISTRY</td>
                <td>WERMUTH C G</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">124</th>
                <td>PHARMACY CALCULATIONS</td>
                <td>BALLINGTON D A</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">125</th>
                <td>PHARMACY PRACTICE S/F WITH CD ROM</td>
                <td>BALLINGTON D A</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">126</th>
                <td>DRUG DISCRIMINATION</td>
                <td>GLENNON R A</td>
                <td>JOHN WILLY</td>
            </tr>
            <tr>
                <th scope="row">127</th>
                <td>DICTIONARY OF MEDICINAL PLANTS</td>
                <td>SOMMBAMURTHY AVSS</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">128</th>
                <td>BIONORGANIC MEDICINAL CHEMISTRY</td>
                <td>ALESSIO E</td>
                <td>JOHN WILLY</td>
            </tr>
            <tr>
                <th scope="row">129</th>
                <td>NOVEL DRUG DELIVERY SYSTEM</td>
                <td>CHIEN Y W</td>
                <td>TAYLOR</td>
            </tr>
            <tr>
                <th scope="row">130</th>
                <td>DISPENSING AND COMMUNITY PHARMACCY</td>
                <td>PATIL G V</td>
                <td>SHREE</td>
            </tr>
            <tr>
                <th scope="row">131</th>
                <td>PROTEINS BIOCHEMISTRY AND BIOTECHNOLOGY</td>
                <td>WALSH G</td>
                <td>WILEY</td>
            </tr>
            <tr>
                <th scope="row">132</th>
                <td>HANDBOOK OF ESSENTIAL OILS</td>
                <td>GUNKEL W</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">133</th>
                <td>DEVELOPMENT SOILS ORAL DOSAGE</td>
                <td>QIU Y</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">134</th>
                <td>WILSON AND GISVOLDS TEXT BOOK OF ORGANIC MEDICINAL AND PHARMACETICAL CHEMISTRY</td>
                <td>BEALE J M</td>
                <td>LWW RS</td>
            </tr>
            <tr>
                <th scope="row">135</th>
                <td>ATLAS OF MICROSCOPY OF MEDICINAL PLANTS CULINARY HERBS AND SPICES</td>
                <td>JACKSON B P</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">136</th>
                <td>NANOCOLLOIDAL CARRIERS</td>
                <td>VYES S P</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">137</th>
                <td>ADVANCE IN CONTROLLED AND NOVEL DRUG DELIVERY</td>
                <td>JAIN N.K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">138</th>
                <td>HIGH PERFORMANCE LIQUID CHROMATO GRAPHY</td>
                <td>SETHI P D</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">139</th>
                <td>SPICES AND MEDICINAL PLANTS</td>
                <td>BANSIL P C</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">140</th>
                <td>TREASE AND EVANS PHARMACOGNOSY</td>
                <td>EVANS W C</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">141</th>
                <td>DOSAGE CALCULATIONS</td>
                <td>PICKAR G D</td>
                <td>CENGAGE</td>
            </tr>
            <tr>
                <th scope="row">142</th>
                <td>PRACTICAL PHARMACEUTICS</td>
                <td>GAUD R S</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">143</th>
                <td>TEXT BOOK INORGANIC PHARMACEUTICAL AND MEDICAL CHEMISTRY</td>
                <td>QADRY J S</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">144</th>
                <td>DRUG REGULATORY AFFAIRS</td>
                <td>SINGH G</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">145</th>
                <td>CLINICAL PHAMACOLOGY</td>
                <td>BENNETT P M</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">146</th>
                <td>PHARMACECUTICAL PRACTICE</td>
                <td>REES</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">147</th>
                <td>PHYSICAL PHARMACY</td>
                <td>AGARWAL S P</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">148</th>
                <td>ESSENTIALS OF CLINICAL PSYCHOPHARMACOLOGY</td>
                <td>SCHATZBERG A F</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">149</th>
                <td>NATIONAL AND INTERNATIONAL PHARMACEUTICAL AND COSMETICS MARKETING</td>
                <td>MAGAZINE R</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">150</th>
                <td>UNDERGRADUATE PHARMACOLOGY</td>
                <td>MUKHOPADHYAY K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">151</th>
                <td>MODERN PHARMACEUTICS</td>
                <td>FLORENCE A T</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">152</th>
                <td>PRACTICAL PHARMACEUTICAL ANALYTICAL CHEMISTRY</td>
                <td>ALAM M M</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">153</th>
                <td>PHARMACEUTICAL BIOCHEMISTRY</td>
                <td>VYAS S P</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">154</th>
                <td>TEXT OF HOSPITAL PHARMACY</td>
                <td>ALLWOOD M C</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">155</th>
                <td>TEXT BOOK OF PHARMACEUTICAL DRUG ANALYSIS</td>
                <td>AHMAD M Z</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">156</th>
                <td>VOGEL QUALITATIVE INORGANIC ANALYSIS</td>
                <td>SVEHLA</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">157</th>
                <td>VOGEL QUALITATIVE CHEMICAL ANALYSIS</td>
                <td>MENDHAM</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">158</th>
                <td>VOGEL TEXT BOOK OF PRACTICAL ORGANIC CHEMISTRY</td>
                <td>FURNISS BRIANS</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">159</th>
                <td>PHYSCIAL PHARMACY</td>
                <td>HADKAR U B</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">160</th>
                <td>PHARMACEUTICS</td>
                <td>GQUD R S</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">161</th>
                <td>PHARMACEUTICAL INORGANIC CHEMISTRY</td>
                <td>BOTHARA K G</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">162</th>
                <td>PHARMACEUTICAL ORGANIC CHEMISTRY</td>
                <td>BOTHARA K G</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">163</th>
                <td>PHARMACEUTICAL INORGANIC CHEMISTRY K W</td>
                <td>KASTURE A V</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">164</th>
                <td>BIOCHEMISTRYBASIC AND APPLIED</td>
                <td>FURSULE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">165</th>
                <td>PRINICIPLE OF MEDICINAL CHEMISTRY</td>
                <td>KADAM S</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">166</th>
                <td>INTODUCTION TO PHARMACEUTICAL ENGINEERING</td>
                <td>PARADKAR</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">167</th>
                <td>BIOTECHNOLOGY AND FERMENT PROCESS</td>
                <td>D SOUZA</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">168</th>
                <td>PHARMACEUTICAL ANALYSIS I</td>
                <td>KASTURE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">169</th>
                <td>PHARMACEUTICAL ANALYSIS II</td>
                <td>KASTURE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">170</th>
                <td>PHARMACEUTICAL BIOLOGY</td>
                <td>GOKHALE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">171</th>
                <td>PHARMACOGNOOSY AND PHYTOCHEMISTRY</td>
                <td>SURANAS</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">172</th>
                <td>PHTOPHYSIOLOGY</td>
                <td>VYAWAHARE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">173</th>
                <td>CULTIVATION OF MEDICINAL PLANTS</td>
                <td>KOKATE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">174</th>
                <td>FOUNDATIONS IN MICROBIOLOGY</td>
                <td>PATLULNAS</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">175</th>
                <td>PHARMACEUTICAL MICROBIOLOGY</td>
                <td>KOKATE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">176</th>
                <td>HEND BOOK OF CLINICAL PHARMACY</td>
                <td>YADAV A V</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">177</th>
                <td>FORENSIC PHARMACY</td>
                <td>KUCHEKAR B</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">178</th>
                <td>PHARMACEUTICAL MANAGEMENT</td>
                <td>ITAKR</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">179</th>
                <td>PHARMACEUTICAL QUALITY ASSURANCE</td>
                <td>POTDAR</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">180</th>
                <td>INSTRUMENTAL METHODS IN PHARMACEUTICAL ANALYSIS</td>
                <td>HADKAR U B</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">181</th>
                <td>GENERAL PHARMACOLOGY</td>
                <td>VYAWAHARE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">182</th>
                <td>ESSENTIALS OF CLINICAL RESEARCH</td>
                <td>GHOOI</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">183</th>
                <td>FUNDAMENTALS IN PHARMACOLOGY I</td>
                <td>BOTHARA</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">184</th>
                <td>FUNDAMENTALS IN PHARMACOLOGY II</td>
                <td>BOTHARA</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">185</th>
                <td>PRINCIPLES AND FUNDAMENTAL IN PHARMACOLOGY I</td>
                <td>SAKARKAR</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">186</th>
                <td>CLASS AND QUEST IN PHARMACOLOGY</td>
                <td>SAKARKAR</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">187</th>
                <td>EXPERIMENTAL PHARMACOGNOSY</td>
                <td>GOKHALE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">188</th>
                <td>EXPERIMANTAL BIOPHARMA PHARMACOKINETICS</td>
                <td>YADAV A V</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">189</th>
                <td>PHARMA BIOTECHNOLOGY EXPERIMENT AND TECHNOLOHY</td>
                <td>KOKARE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">190</th>
                <td>NOVAL DRUG DELIVERY SYSTEM</td>
                <td>BAVISKAR</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">191</th>
                <td>PHARMACEUTICAL MARKETING MANAGEMENT</td>
                <td>SHARMA</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">192</th>
                <td>PHARMACOGNOOSY AND ANIMAL DRUG</td>
                <td>GOKHALE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">193</th>
                <td>LABORATORY MANUAL OF PHARMACENTICAL ENGINEERING</td>
                <td>SAKARKAR</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">194</th>
                <td>DRUG DISC AND DEVELOPMENT IN MEDICAL CHEMISTRY</td>
                <td>DAVIEL</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">195</th>
                <td>HERBAL COSMECEUTIAL I</td>
                <td>TATIYA A V</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">196</th>
                <td>PHARMACOGNOSY OF TRADITIONAL DRUG</td>
                <td>GOKHALE G B</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">197</th>
                <td>PHARMACEUTICAL PACKAGE TECHNOLOGY</td>
                <td>RABINDRA</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">198</th>
                <td>PRINCIPLES OF PATHOPHYSIOLOGY</td>
                <td>JANGNE C M</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">199</th>
                <td>GUIDELINE FOR NATURAL DRUG POLICTY</td>
                <td>BHISE S B</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">200</th>
                <td>BIOPHARMACEUTICS</td>
                <td>PRIYA POTEL</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">201</th>
                <td>CALULATION IN PHARMACEUTICAL SCIENCE</td>
                <td>YADAV A V</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">202</th>
                <td>BASIC PHARMACOLOGY AND HARMACOLOGY</td>
                <td>NAIK</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">203</th>
                <td>PHARMACEUTICAL RGANIC CHEMISTRY</td>
                <td>MEENAKSHI</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">204</th>
                <td>PHARMACOGNOSY</td>
                <td>KOKATE</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">205</th>
                <td>PRINCIPLE AND FUNDAMENTALS IN PHARMACOLOGY II</td>
                <td>SAKARKAR D M</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">206</th>
                <td>PHARMACOKINETIC AND BIOPHARMACEUTIC</td>
                <td>HARLE U M</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">207</th>
                <td>THE PHARMA SCIENCE PHARMA PATWAY</td>
                <td>SAVANT</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">208</th>
                <td>HUMAN ANTOMY AND PHYSIOLOGY</td>
                <td>SHARMA KABADE</td>
                <td>S RAM</td>
            </tr>
            <tr>
                <th scope="row">209</th>
                <td>REMEDICAL MATHEMATICS</td>
                <td>SINGH V K</td>
                <td>V S PUB</td>
            </tr>
            <tr>
                <th scope="row">210</th>
                <td>PRACTICAL BIOCHEMISTRY</td>
                <td>GUPTA BHARGAVA</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">211</th>
                <td>PRACTICAL ORGANIC CHEMISTRY</td>
                <td>MANN SAUNDERS</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">212</th>
                <td>ORGANIC CHEMEISTRY</td>
                <td>MORRISION ROBERT</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">213</th>
                <td>COSMEYIC TECHNOLOGY</td>
                <td>NANDA AND NANDA</td>
                <td>BIRLA</td>
            </tr>
            <tr>
                <th scope="row">214</th>
                <td>FRANK MATHEMATICS</td>
                <td>DHALL G D</td>
                <td>FRANK</td>
            </tr>
            <tr>
                <th scope="row">215</th>
                <td>MARTIN PHYSICAL PHARMACY AND PHARMACEUTICAL SCIENCE</td>
                <td>SINKA PATRICK J</td>
                <td>WOLTERS KLUWER</td>
            </tr>
            <tr>
                <th scope="row">216</th>
                <td>TEXT BOOK PF PHARMACOGNOSY AND PHYTOCHEMISTRY</td>
                <td>JARALD EDWIN E</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">217</th>
                <td>TEXTBOOK OF REMEDICAL BIOLOGY</td>
                <td>GUPTA M K</td>
                <td>PRAGATI</td>
            </tr>
            <tr>
                <th scope="row">218</th>
                <td>TEXT BOOK OF PHYSICAL PHARMACEUTICS</td>
                <td>SUBRANMAYAM</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">219</th>
                <td>THE POCKET MEDICAL DICTIONARY</td>
                <td>HARRISON L M</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">220</th>
                <td>COSMETICS PRACTICAL MANUAL</td>
                <td>SARAF SWARNALTHA</td>
                <td>PHARMA MED</td>
            </tr>
            <tr>
                <th scope="row">221</th>
                <td>COSMETICS LEGISLATION</td>
                <td>SARAF SWARNALTHA</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">222</th>
                <td>ANALYTICAL CHEMISTRY</td>
                <td>CHARISTIAN D GARY</td>
                <td>WILEY</td>
            </tr>
            <tr>
                <th scope="row">223</th>
                <td>DICTONARY OF PHARMACY</td>
                <td>JARALD EDWIN E</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">224</th>
                <td>TEXT BOOK OF INDUSTRIAL PHARMACOGNOSY</td>
                <td>KALIA A N</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">225</th>
                <td>MODERN PATIENT</td>
                <td>GAUD R S</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">226</th>
                <td>HAND BOOK OF BIOMEDICAL INSTRUMENTATION</td>
                <td>KHANDPUR R S</td>
                <td>MC GRAW HILL</td>
            </tr>
            <tr>
                <th scope="row">227</th>
                <td>HAND BOOK OF ANALYTICAL INSTRUMENTS</td>
                <td>KHANDPUR R S</td>
                <td>MC GRAW HILL</td>
            </tr>
            <tr>
                <th scope="row">228</th>
                <td>MODERN PATIENT COUNSELLING</td>
                <td>GAUD R S</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">229</th>
                <td>ADVANCE MATHEMATICS</td>
                <td>MITTAL S K</td>
                <td>UNNATI</td>
            </tr>
            <tr>
                <th scope="row">230</th>
                <td>MANUAL ON DRUGS AND COSMETICS</td>
                <td>GARG AVTAR RAM</td>
                <td>COMMERCIAL LAW</td>
            </tr>
            <tr>
                <th scope="row">231</th>
                <td>PHARMACEUTICAL ENGINRRING</td>
                <td>SAMBAMURTHY K</td>
                <td>NEW AGE</td>
            </tr>
            <tr>
                <th scope="row">232</th>
                <td>TEXT BOOK OF CLINICAL PHARMACY PRACTICS</td>
                <td>PARTHASARATHIC G</td>
                <td>UNIVERSITIES</td>
            </tr>
            <tr>
                <th scope="row">233</th>
                <td>CLINICAL PHARMACY AND THERAPEUTICS</td>
                <td>WALKER ROGER</td>
                <td>CHURCHILL</td>
            </tr>
            <tr>
                <th scope="row">234</th>
                <td>DICTONARY OF BIOCHEMISTRY</td>
                <td>JASRA O P</td>
                <td>K S PAPER</td>
            </tr>
            <tr>
                <th scope="row">235</th>
                <td>DISPENSING FOR PHARMACEUTICAL STUDENT</td>
                <td>CARTER S J</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">236</th>
                <td>PRACTICAL MEDICAL BIOCHEMISTRY</td>
                <td>SHARMA D C</td>
                <td>B I PUB</td>
            </tr>
            <tr>
                <th scope="row">237</th>
                <td>MODERN EXPERIMENTAL BIOCHEMISTRY</td>
                <td>BOYER RODNEY</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">238</th>
                <td>COMPANION TO THE TEXT BOOK OF BIOCHEMISTRY</td>
                <td>VASUDEVAN D M</td>
                <td>JAYPEE</td>
            </tr>
            <tr>
                <th scope="row">239</th>
                <td>PRACTICAL MANUAL OF BIOCHEMISTRY</td>
                <td>SINGH S P</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">240</th>
                <td>EXPERIMENTAL BIOCHEMISTRY</td>
                <td>RAO SASHIDNAR BEEDY</td>
                <td>I K INTERNATIONAL</td>
            </tr>
            <tr>
                <th scope="row">241</th>
                <td>QUESTION BANK OF BIOCHEMISTRY</td>
                <td>JOSHI R A</td>
                <td>NEW AGE</td>
            </tr>
            <tr>
                <th scope="row">242</th>
                <td>TEXTBOOK OF BIOCHEMISTRY</td>
                <td>AGARWAL</td>
                <td>GOEL</td>
            </tr>
            <tr>
                <th scope="row">243</th>
                <td>STANDARD METHOD OF BIOCHEMICAL ANALYSIS</td>
                <td>THIMMAIAH S R</td>
                <td>KALYANI</td>
            </tr>
            <tr>
                <th scope="row">244</th>
                <td>BIOINSTRUMENTATION</td>
                <td>WEBER</td>
                <td>WILEY</td>
            </tr>
            <tr>
                <th scope="row">245</th>
                <td>TEXT BOOK FORENCIC PHARMACY</td>
                <td>JAIN N K</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">246</th>
                <td>TEXT BOOK OF PROFESSIONAL PHARMACY</td>
                <td>JAIN N K</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">247</th>
                <td>IPRS AND PHARMACEUTICALS</td>
                <td>AGARWAL ABHINAV</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">248</th>
                <td>DISPENSING PHARMACY</td>
                <td>MEHTA R M</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">249</th>
                <td>HAND BOOK OF BIOCHEMISTRY</td>
                <td>SIDDIQUI M A</td>
                <td>SCIENTIFIC BOOK</td>
            </tr>
            <tr>
                <th scope="row">250</th>
                <td>ESSENTIALS OF BIOCHEMISTRY</td>
                <td>PANT M C</td>
                <td>RAM NATH KEDAR NATH</td>
            </tr>
            <tr>
                <th scope="row">251</th>
                <td>VIVA IN BIOCHEMISTRY</td>
                <td>SINGH S P</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">252</th>
                <td>LABORATORY MANUAL IN BIOCHEMISTRY</td>
                <td>JAYARAMAN J</td>
                <td>NEW AGE</td>
            </tr>
            <tr>
                <th scope="row">253</th>
                <td>CONTROLLED DRUG DELIVERY</td>
                <td>VALLABH PRAKASHAN</td>
                <td>KHAR ROOK K</td>
            </tr>
            <tr>
                <th scope="row">254</th>
                <td>CLINICAL ANATOMY</td>
                <td>ZARGAR AND KUMAR</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">255</th>
                <td>VIVA AND PRACTICAL BIOCHEMISTRY</td>
                <td>DEB A C</td>
                <td>NEW CENTRAL</td>
            </tr>
            <tr>
                <th scope="row">256</th>
                <td>POCKET MEDICAL DICTONARY</td>
                <td>CHURCHILL</td>
                <td>CHURCHILL</td>
            </tr>
            <tr>
                <th scope="row">257</th>
                <td>MEDICAL DICTONARY</td>
                <td>WEBSTER MERRIAM</td>
                <td>MERRIAN</td>
            </tr>
            <tr>
                <th scope="row">258</th>
                <td>ORGANIC CHEMISTRY DRUG DESIGN AND DRUG ACTION</td>
                <td>SILVERMAN RICHARD</td>
                <td>ACADEMIC</td>
            </tr>
            <tr>
                <th scope="row">259</th>
                <td>ESSENTIALS OF PHARMACOTHERAPEUTICS</td>
                <td>BARAR F S K</td>
                <td>S CHAND</td>
            </tr>
            <tr>
                <th scope="row">260</th>
                <td>BIOPROCESS ENGINEERING PRINCIPLES</td>
                <td>DORAN PAULINE M</td>
                <td>ELESEVIER</td>
            </tr>
            <tr>
                <th scope="row">261</th>
                <td>TEXT BOOK OF PHARMACEUTICS</td>
                <td>RAWLINS E A</td>
                <td>ELESEVIER</td>
            </tr>
            <tr>
                <th scope="row">262</th>
                <td>NOVEL DRUG DELIVERY SYSTEM AND REGULATORY AFFAIRS</td>
                <td>RAWLINS E A</td>
                <td>BAILLIERE TINDAL</td>
            </tr>
            <tr>
                <th scope="row">263</th>
                <td>PRINCIPLES OF MEDICINAL CHEMISTRY</td>
                <td>SUDHAKAR JAYAVEERA</td>
                <td>S CHAND</td>
            </tr>
            <tr>
                <th scope="row">264</th>
                <td>PHARMACOGNOSY AND PHARMACOBIOTECHNOLGY</td>
                <td>KADAM S S</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">265</th>
                <td>ESSENTIALS OF PHARMACOGNOSY</td>
                <td>KAR ASHUTOSH</td>
                <td>NEW AGE</td>
            </tr>
            <tr>
                <th scope="row">266</th>
                <td>PRACTICAL MEDICINAL CHEMISTRY</td>
                <td>ANSARI S H</td>
                <td>BIRLA</td>
            </tr>
            <tr>
                <th scope="row">267</th>
                <td>HAND BOOK OF PHARMACEUTICAL DOSAGE</td>
                <td>JAYAVEERA K M</td>
                <td>S CHAND</td>
            </tr>
            <tr>
                <th scope="row">268</th>
                <td>INDUSTRIAL PHARMANCY</td>
                <td>VYAS SURESH D</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">269</th>
                <td>ANATOMY OF CENTRAL NERVOUS SYSTEM</td>
                <td>KHAR ROOK K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">270</th>
                <td>PHARMA COGNOSY</td>
                <td>PODDAR BHAGAT</td>
                <td>SCIENTIFIC BOOK</td>
            </tr>
            <tr>
                <th scope="row">271</th>
                <td>PHARMACEUTICAL MARKETING IN INDIA</td>
                <td>QADARY P S</td>
                <td>B S SHAH</td>
            </tr>
            <tr>
                <th scope="row">272</th>
                <td>EXPERIMENTAL BIOPHARMACEUTICS AND PHARMA COKINETICS</td>
                <td>CHAGANTI SUBBA RAO</td>
                <td>EXCEL BOOK</td>
            </tr>
            <tr>
                <th scope="row">273</th>
                <td>TEXT BOOK OF PHARMACEUTICAL FORMULATION</td>
                <td>YADAV AND YADAV</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">274</th>
                <td>ESSENTIALS OF PHYSICAL PHARMACY</td>
                <td>MITHAL B M</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">275</th>
                <td>REMEDIAL MATHEMATICS</td>
                <td>SUBRANMAYAM</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">276</th>
                <td>TEXT BOOK OF ADVANCE MATHEMATICS</td>
                <td>MITTAL S K</td>
                <td>UNNATI</td>
            </tr>
            <tr>
                <th scope="row">277</th>
                <td>INTRODUCTION TO REMEDIAL MATHEMATICS</td>
                <td>KHAN AHMAD RIYAZ</td>
                <td>S CHAND</td>
            </tr>
            <tr>
                <th scope="row">278</th>
                <td>MANUAL OF PRACTICAL ANATOMY</td>
                <td>KHAN AHMAD RIYAZ</td>
                <td>S CHAND</td>
            </tr>
            <tr>
                <th scope="row">279</th>
                <td>PRINCIPLES OF GENERAL ANATOMY</td>
                <td>KHAN AND FARUGI</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">280</th>
                <td>INDIAN PHARMACOPOEIA 1996</td>
                <td>DATTA A K</td>
                <td>K P BASU</td>
            </tr>
            <tr>
                <th scope="row">281</th>
                <td>INDIAN PHARMACOPOEIA 1997</td>
                <td>GOVERNMENT OF INDIA</td>
                <td>CONTROLLER OF PUB</td>
            </tr>
            <tr>
                <th scope="row">282</th>
                <td>PRACTICAL BIOTECHNOLOGY</td>
                <td>GOVERNMENT OF INDIA</td>
                <td>CONTROLLER OF PUB</td>
            </tr>
            <tr>
                <th scope="row">283</th>
                <td>QUANTITATIVE PHARMACEUTICAL CHEMISTRY</td>
                <td>GAUD AND GUPTA</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">284</th>
                <td>PHARMACEUTICAL INDUSTRIAL MANAGEMENT</td>
                <td>JENKINS GLENN</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">285</th>
                <td>ORGNIC PHARMACEUTICAL AND MEDICINAL CHEMISTRY</td>
                <td>MEHTA R M</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">286</th>
                <td>OUTLINES OF BIOCHEMISTRY</td>
                <td>SINGH RAJENDRA</td>
                <td>B S SHAH</td>
            </tr>
            <tr>
                <th scope="row">287</th>
                <td>PRACTICAL CLINICAL BIOCHEMISTRY</td>
                <td>CONN E ERIC</td>
                <td>WILEY</td>
            </tr>
            <tr>
                <th scope="row">288</th>
                <td>SELECTED QUESTION WITH ANSWER IN BIOCHEMISTRY</td>
                <td>VARLEY HAROLD</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">289</th>
                <td>INTRODUCTION BIOMEDICAL EQUIPMENT TECHNOLOGY</td>
                <td>DE KRISHNA AMIT</td>
                <td>S CHAND</td>
            </tr>
            <tr>
                <th scope="row">290</th>
                <td>BIOMEDICAL INSTRUMENTATION AND MEASUREMENTS</td>
                <td>CARS BROWN</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">291</th>
                <td>BIOMEDICAL SIGNAL PROCESSING</td>
                <td>CROMWELL LESLIE</td>
                <td>PHI</td>
            </tr>
            <tr>
                <th scope="row">292</th>
                <td>TEXT BOOK OF MEDICAL PHYSIOLOGY (GUYTON AND HALL)</td>
                <td>REDDY D C</td>
                <td>TATA MC GRAW</td>
            </tr>
            <tr>
                <th scope="row">293</th>
                <td>TEXT OF MEDICICAL CHEMISTRY</td>
                <td>HALL, JOHN. E</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">294</th>
                <td>PRAACTICAL PHARMACEUTICAL CHEMISTRY</td>
                <td>ALAGARSAMY V</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">295</th>
                <td>ENVIORNMENTAL SCIENCE</td>
                <td>ALI SIDDIQUI</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">296</th>
                <td>PRACTICALS IN MODERN PHARMACEUTICAL INSTRUMENTAL ANALYSIS</td>
                <td>SINHA, JYOTI</td>
                <td>GALGOTIA'S PUBLICATION</td>
            </tr>
            <tr>
                <th scope="row">297</th>
                <td>REMEDIAL BIOLOGY</td>
                <td>JAIN ANUREKHA</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">298</th>
                <td>PHARMACEUTICAL TECHONOLOGY</td>
                <td>SINGH PUNAM K</td>
                <td>S CHAND</td>
            </tr>
            <tr>
                <th scope="row">299</th>
                <td>PHARMACEUTICAL PARCTICE</td>
                <td>MURTHY R S R</td>
                <td>NEW AGE</td>
            </tr>
            <tr>
                <th scope="row">300</th>
                <td>BIOSTATISTICS AND COMPUTER SCIENCE</td>
                <td>WINFIELD A J</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">301</th>
                <td>HAND BOOK OF PHARMACEUTICAL MARKETING IN INDIA</td>
                <td>SHAH Y I</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">302</th>
                <td>BIOMEDICAL DIGITAL SIGNAL PROCESSING</td>
                <td>SUBBA RAO</td>
                <td>PANTHER</td>
            </tr>
            <tr>
                <th scope="row">303</th>
                <td>UNIT OPERATIONS I</td>
                <td>TOMPKINS WILLIS</td>
                <td>PANTHER</td>
            </tr>
            <tr>
                <th scope="row">304</th>
                <td>ORACTICAL MANUAL OF PHARMACOLOGY</td>
                <td>GAVHANE K A</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">305</th>
                <td>TEXT BOOK OF PHARMACEUTICAL MICROBIOLOGY</td>
                <td>BADYAL DINESH</td>
                <td>JAYPEE</td>
            </tr>
            <tr>
                <th scope="row">306</th>
                <td>COMPUTER IN PHARMACY</td>
                <td>KAPOOR KAMAL</td>
                <td>YASH</td>
            </tr>
            <tr>
                <th scope="row">307</th>
                <td>TEXT BOOK OF PHARMACEUTICAL ANALYSIS</td>
                <td>THAKUR S PRAVEEN</td>
                <td>BIRLA</td>
            </tr>
            <tr>
                <th scope="row">308</th>
                <td>PRINCIPLES OF PHARMACEUTICAL MARKETING</td>
                <td>RAO DEVALA G</td>
                <td>BIRLA</td>
            </tr>
            <tr>
                <th scope="row">309</th>
                <td>FUNDAMENTALS OF BIOMEDICAL ENGINEERING</td>
                <td>SMITH MICKEY</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">310</th>
                <td>PROCESS INTRUMENTATION AND CONTROL</td>
                <td>SAWHNEY</td>
                <td>NEW AGE</td>
            </tr>
            <tr>
                <th scope="row">311</th>
                <td>INTRODUCTION BIOMEDICAL ENGINEERING</td>
                <td>KULKARNI A D</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">312</th>
                <td>INTRODUCTION TO BIOMEDICAL EQUIPMENT TECHNOLOGY</td>
                <td>DOMACH MICHAEL M</td>
                <td>PHI</td>
            </tr>
            <tr>
                <th scope="row">313</th>
                <td>PHARMACEUTICAL JURISPRUDENCE AND EITHICS</td>
                <td>CARR BROWN</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">314</th>
                <td>DICTIONARY OF PHARMACY</td>
                <td>KHANNA RAJESH</td>
                <td>BIRLA</td>
            </tr>
            <tr>
                <th scope="row">315</th>
                <td>PHARMACEUTICS AND COSMETICS</td>
                <td>ALI MOHAMMED</td>
                <td>TARA</td>
            </tr>
            <tr>
                <th scope="row">316</th>
                <td>PHARMACOGNOSY AND PHYTOCHEMISTRY</td>
                <td>GUPTA AND GUPTA</td>
                <td>PRAGATI</td>
            </tr>
            <tr>
                <th scope="row">317</th>
                <td>PHARMACEUTICAL DRUG ANALYSIS</td>
                <td>SHIRRKHED KAR ATUL</td>
                <td>PRAGATI</td>
            </tr>
            <tr>
                <th scope="row">318</th>
                <td>PRACTICAL PHARMACEUTICS CHEMISTRY</td>
                <td>KAR ASHUTOSH</td>
                <td>NEW AGE</td>
            </tr>
            <tr>
                <th scope="row">319</th>
                <td>PHARMACEUTICAL BIOSTATISTICS</td>
                <td>BECKETT A H</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">320</th>
                <td>FUNDAMENTAL OF PHARMACEUTICAL ANALYSIS I</td>
                <td>KUMAR ARUN</td>
                <td>KRISHNA</td>
            </tr>
            <tr>
                <th scope="row">321</th>
                <td>PHARMACEUTICAL ANALYSIS III</td>
                <td>SINGHAL NAVEEN</td>
                <td>PRAGATI</td>
            </tr>
            <tr>
                <th scope="row">322</th>
                <td>INTODUCTION DRUG DESIGN</td>
                <td>KAUR H</td>
                <td>PRAGATI</td>
            </tr>
            <tr>
                <th scope="row">323</th>
                <td>PHARMACOKINETICS AND THERAPEUTIS DRUG MONITORING</td>
                <td>PANDEYA S M</td>
                <td>NEW AGE</td>
            </tr>
            <tr>
                <th scope="row">324</th>
                <td>PHARMACEUTICAL AND MEDICINAL INORGANIC CHEMISTRY</td>
                <td>MAHURKAR NITIN</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">325</th>
                <td>PRINCIPLE OF ORGANIC MEDICAL CHEMISTRY</td>
                <td>RAO GUNDU P</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">326</th>
                <td>PRACTICAL TEXT BOOK OF BIOCHEMISTRY</td>
                <td>NADENDLA RAMA RAO</td>
                <td>NEW AGE</td>
            </tr>
            <tr>
                <th scope="row">327</th>
                <td>PHARMACEUTICAL ORGANIC</td>
                <td>VASUDEVAN D M</td>
                <td>JAYPEE</td>
            </tr>
            <tr>
                <th scope="row">328</th>
                <td>PHARMACY PATHFINDER FOR GATE AND OTHER RECRUITMENT</td>
                <td>SING JAGDAMBA</td>
                <td>PRAGATI</td>
            </tr>
            <tr>
                <th scope="row">329</th>
                <td>PROFESSIONAL COMMUNICATION</td>
                <td>RAM KISHAN A</td>
                <td>B S SHAH</td>
            </tr>
            <tr>
                <th scope="row">330</th>
                <td>TEXT BOOK OF ORGANIC CHEMISTRY</td>
                <td>AGARWAL MALTI</td>
                <td>KRISHNA</td>
            </tr>
            <tr>
                <th scope="row">331</th>
                <td>PHARMACEUTICAL MATHEMATICS AND BIOSTATISTICS</td>
                <td>PANDEYA SURENDRAN</td>
                <td>S G PUB</td>
            </tr>
            <tr>
                <th scope="row">332</th>
                <td>INTRODUCTION PHARMACEUTICS I</td>
                <td>VASISHTHA A R</td>
                <td>KRISHNA</td>
            </tr>
            <tr>
                <th scope="row">333</th>
                <td>TEXT BOOK OF BIOPHARMACEUTICS AND PHARMACOKINETICS</td>
                <td>GUPTA ASHOK K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">334</th>
                <td>BIOTECHNOLOGY AND FERMENTATION PROCESS</td>
                <td>ALI JAVED</td>
                <td>BIRLA</td>
            </tr>
            <tr>
                <th scope="row">335</th>
                <td>TEXT BOOK PHARMACEUTICAL MICROBIOLOGY</td>
                <td>DSOUZA JOHN I</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">336</th>
                <td>PROCESS BIOTECHNOLOGY FUNDAMENTALS</td>
                <td>KAPOOR KAMAL</td>
                <td>YASH</td>
            </tr>
            <tr>
                <th scope="row">337</th>
                <td>THEORY AND PRACTICE PHARMACEUTICAL BIOCHEMISTRY</td>
                <td>MUKHO PADHYAY</td>
                <td>VIVA</td>
            </tr>
            <tr>
                <th scope="row">338</th>
                <td>PRACTICAL MANUAL OF QUALITATIVE ORGANIC ANALYSIS</td>
                <td>SHARMA V K</td>
                <td>YASH</td>
            </tr>
            <tr>
                <th scope="row">339</th>
                <td>PHARMACEUTICAL ENGINEERING</td>
                <td>PRAJAPATI HETAL R</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">340</th>
                <td>TEXT BBOOK PHARMACEUTICAL MICROBIOLOGY</td>
                <td>JYOTI JEEVANA</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">341</th>
                <td>BIOSTATISTICS</td>
                <td>MEHRA SINGH PRAHLAD</td>
                <td>P IK INTERNATIONAL</td>
            </tr>
            <tr>
                <th scope="row">342</th>
                <td>TEXT BOOK OF PHARMACEUTICAL MATHEMATICAL</td>
                <td>MITTAL KUMAR SUNIL</td>
                <td>UNNATI</td>
            </tr>
            <tr>
                <th scope="row">343</th>
                <td>TEXT BOOK BIOPHARMACEUTICS AND PHARMACOKINETICS</td>
                <td>GUPTA AND BALI</td>
                <td>LAXMI</td>
            </tr>
            <tr>
                <th scope="row">344</th>
                <td>FOYE PRINCIPLES OF MEDICINAL CHEMISTRY</td>
                <td>SUBRAHMANIAM C V S</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">345</th>
                <td>PHARMACEUTICAL TECHNOLOGY</td>
                <td>WILLIAME DAVID A</td>
                <td>LIPPINCOTT</td>
            </tr>
            <tr>
                <th scope="row">346</th>
                <td>PHARMACEUTICAL TECHNOLOGY II</td>
                <td>AGARWAL G</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">347</th>
                <td>TEXTBOOK OF FORENSIC PHARMACY PHARMACEUTICAL JURISPRUDENCE</td>
                <td>AGARWAL G</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">348</th>
                <td>PHARMACEUTICAL CHEMISTRY</td>
                <td>CHAURASIA B</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">349</th>
                <td>LABORATORY MANUAL IN PHYSICAL PHARMACY</td>
                <td>CHATWAL</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">350</th>
                <td>PHARMACEUTICAL TECHNOLOGY I</td>
                <td>SUBRAHMANYAM</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">351</th>
                <td>PHARMACEUTICAL PRODUCTION AND MANAGEMENT</td>
                <td>AGARWAL G</td>
                <td>NIRALI</td>
            </tr>
            <tr>
                <th scope="row">352</th>
                <td>ADVANCE MATHEMATICS TO PHARMACISTS</td>
                <td>SUBRAHMANIAM C V S</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">353</th>
                <td>TEXT BOOK OF ORGANIC MEDICINAL AND PHARMACEUTICAL</td>
                <td>VASISHTHA AND AGARWAL</td>
                <td>KRISHNA</td>
            </tr>
            <tr>
                <th scope="row">354</th>
                <td>MEDICINAL BIOCHEMISTRY</td>
                <td>GELGADO JAIME N</td>
                <td>LIPPINCOTT</td>
            </tr>
            <tr>
                <th scope="row">355</th>
                <td>DICTIONARY OF PHARACY</td>
                <td>DANDEKAR SUCHETA</td>
                <td>ELSEVIER</td>
            </tr>
            <tr>
                <th scope="row">356</th>
                <td>PRINCIPLES OF MEDICAL CHEMISTRY</td>
                <td>GUPTA AND GUPTA</td>
                <td>A I T</td>
            </tr>
            <tr>
                <th scope="row">357</th>
                <td>HAND BOOK OF PHARMACEUTICAL TECHNOLOGY</td>
                <td>SURESH RANGANATHAN</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">358</th>
                <td>VOGEL'S QUANTITIVE INORGANIC ANALYSIS</td>
                <td>GHOSH L K</td>
                <td>CBS</td>
            </tr>
            <tr>
                <th scope="row">359</th>
                <td>PHARMACEUTICAL CHEMISTRY- INORGANIC</td>
                <td>SVEHLA, G</td>
                <td>PEARSON PUB</td>
            </tr>
            <tr>
                <th scope="row">360</th>
                <td>TEXT BOOK OF ENVIORNMENTAL STUDIES FOR UNDERGRADUATE COURSE</td>
                <td>CHATWAL, G.R</td>
                <td>HIMALAYA PUB HOUSE</td>
            </tr>
            <tr>
                <th scope="row">361</th>
                <td>A TEXT BOOK OF ORGANIC CHEMISTRY</td>
                <td>BHARUCHA, ERACH</td>
                <td>U.G.C.</td>
            </tr>
            <tr>
                <th scope="row">362</th>
                <td>TEXT BOOK OF PATHOLOGY</td>
                <td>BHAL, ARUN/BAHL B.S.</td>
                <td>S. CHAND</td>
            </tr>
            <tr>
                <th scope="row">363</th>
                <td>PHARMACEUTICAL CHEMISTRY- ORGANIC</td>
                <td>HARSH, MOHAN</td>
                <td>JAYPEE BROTHER MEDICAL PUB</td>
            </tr>
            <tr>
                <th scope="row">364</th>
                <td>BIOINFORMATICS METHOD AND APPLICATION (GENOMICS PROTEOMICS & DRUG DIS)</td>
                <td>CHATWAL G.R</td>
                <td>HIMALAYA PUB HOUSE</td>
            </tr>
            <tr>
                <th scope="row">365</th>
                <td>PHARMACEUTICAL BIOLOGY (REMEDIAL BIOLOGY)</td>
                <td>RASTOGI, S.C..</td>
                <td>PHI LEARNING PRIVATE LTD</td>
            </tr>
            <tr>
                <th scope="row">366</th>
                <td>LABORATORY MANNUAL OF PHARMACEUTICAL ENGINEERING</td>
                <td>GOKHALE, S.B</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">367</th>
                <td>PHYTOPHARMACEUTICALS</td>
                <td>SAKARKAR, DINESH.M</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">368</th>
                <td>ACCREDITATION OF PHARMACY INSTITUTIONS</td>
                <td>YADAV, ADHIKRAO.V</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">369</th>
                <td>PRECLINICAL SCREENING OF DRUGS</td>
                <td>BHISE, S.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">370</th>
                <td>DRUG INSPECTOR (MCQ)</td>
                <td>VYAWAHARE, N.S</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">371</th>
                <td>COMPLIATION OF SELECTED HERBAL DRUGS</td>
                <td>RAJASEKARAN, A.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">372</th>
                <td>A GLIMPSE OF NOVEL VESICULAR DRUG DELIVERY SYSTEM</td>
                <td>GOKHALE, S.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">373</th>
                <td>DOSAGE FROM DESIGEN</td>
                <td>BAKLIWAL, SUNIL.R.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">374</th>
                <td>DRUG STORE & BUSINESS MANAGEMENT</td>
                <td>ALI, JAVED</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">375</th>
                <td>(RNPD PHARMACY SERIES) DRUG STORE & BUSINSS MANAGEMENT</td>
                <td>MAHAJAN, NEELAM</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">376</th>
                <td>GUIDELINES FOR NATIONAL DRUG POLICY</td>
                <td>KUMAR, PAWAN</td>
                <td>R. NARRAIN PUBLISHER & DISTRI</td>
            </tr>
            <tr>
                <th scope="row">377</th>
                <td>NATURAL DRUG TECHNOLOGY</td>
                <td>BHISE, S.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">378</th>
                <td>NOMENCULTURE OF ORGANIC AND MEDICINAL COMPOUNDS</td>
                <td>GOKHALE, S.B</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">379</th>
                <td>PHARMACOLOGY AND TOXIOLOGY</td>
                <td>BARI, SANJAY. B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">380</th>
                <td>(RNPD PHARMACY SERIES) PHARMACOLOGY AND TOXIOCOLOGY</td>
                <td>SIDDIQUI , ANEES AHMAD</td>
                <td>TARA PUBLISHERS</td>
            </tr>
            <tr>
                <th scope="row">382</th>
                <td>COCISE INORGANIC PHARMACEUITCAL CHEMISTRY</td>
                <td>DAS, SAUMYA</td>
                <td>R. NARRAIN PUBLISHER & DISTRI</td>
            </tr>
            <tr>
                <th scope="row">383</th>
                <td>PHARMACEUTICL INORGANIC CHEMISTRY</td>
                <td>MAHADIK, K.R.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">384</th>
                <td>PHARMACEUTICAL CHEMISTRY - I</td>
                <td>JAIN, UDIT</td>
                <td>R. NARRAIN PUBLISHER & DISTRI</td>
            </tr>
            <tr>
                <th scope="row">385</th>
                <td>COMMUNITY PHARMACY</td>
                <td>KASTURE, A.V</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">386</th>
                <td>HOSPITAL & CLINICAL PHARMACY</td>
                <td>MOHAN, ARTI</td>
                <td>BIRLA PUBLICATION . PVT. LTD.</td>
            </tr>
            <tr>
                <th scope="row">387</th>
                <td>PHARMACY SERIES HOSPITAL & CLINICAL PHARMACY</td>
                <td>SIDDIQUI, RAFAT</td>
                <td>TARA PUBLISHERS</td>
            </tr>
            <tr>
                <th scope="row">388</th>
                <td>HAND BOOK OF CLINICAL PHARMACY ( FOR B. PH.)</td>
                <td>MISHRA, ASHISH</td>
                <td>R. NARRAIN PUBLISHER & DISTRI</td>
            </tr>
            <tr>
                <th scope="row">389</th>
                <td>A. T,B, OF FORENSIC PHARMACY (PHARMACEUTICAL JURISPRUDENCE)</td>
                <td>YADAV, A.V.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">390</th>
                <td>INDUTRIAL PHARMACY - II</td>
                <td>SURESH, B.</td>
                <td>BIRLA PUBLICATION . PVT. LTD.</td>
            </tr>
            <tr>
                <th scope="row">391</th>
                <td>HEALTH EDUCATION & COMMUNITY PHARMACY</td>
                <td>SHANGRAPANWAR, TRUSHA.P</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">392</th>
                <td>COMMUNICATION SKILLS</td>
                <td>CHAUTERVEDI, SUSHMA</td>
                <td>TARA PUBLISHERS</td>
            </tr>
            <tr>
                <th scope="row">393</th>
                <td>COMMUNICATION AND SOFT SKILL DEVELOPMENT</td>
                <td>AGARWAL, ASHOK</td>
                <td>R. NARRAIN PUBLISHER & DISTRI</td>
            </tr>
            <tr>
                <th scope="row">394</th>
                <td>A CONCISE BOOK OF COSMETIC SCIENCE</td>
                <td>OSWAL, RAJESH. J.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">395</th>
                <td>HERBAL COSMECEUTICALS - I</td>
                <td>KUMAR, J. DILIP</td>
                <td>BIRLA PUBLICATION . PVT. LTD.</td>
            </tr>
            <tr>
                <th scope="row">396</th>
                <td>COSMETIC LEGISLATION</td>
                <td>TATIYA, A.V.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">397</th>
                <td>COSMETIC SCIENCE</td>
                <td>SARAF, SWARNLATA</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">398</th>
                <td>HUMAN ANATOMY AND PHYSIOLOGY - I</td>
                <td>SINGH, SUDARSHAN</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">399</th>
                <td>HUMAN ANATOMY & PHYSIOLOGY</td>
                <td>PRASAD, MAHESH</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">400</th>
                <td>ANATOMY PHYSIOLOGY AND HEALTH EDUCATION</td>
                <td>SIDDIQUI, ANEES. AHMAD</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">401</th>
                <td>ADVANCE IN FORMULATION AND TECHNOLOGY OF STERILE PRODUCTS</td>
                <td>BHISE, S.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">402</th>
                <td>STERILE PRODUCTS</td>
                <td>NAIK, SURESH RAMNATH</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">403</th>
                <td>A TEXT BOOK OF PHARMACEUTICAL JURISPRUDENCE</td>
                <td>KOKARE CHANDRAKANT</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">404</th>
                <td>(TARA GUIDELINES SERIES) PHARMACEUTICAL JURISPRUDENCE</td>
                <td>AGARWAL, S.P.</td>
                <td>BIRLA PUBLICATION . PVT. LTD.</td>
            </tr>
            <tr>
                <th scope="row">405</th>
                <td>PHARMACEUTICAL JURISPRUDENCE (RNPD)</td>
                <td>RASTOGI, SAMEER</td>
                <td>R. NARRAIN PUBLISHER & DISTRI</td>
            </tr>
            <tr>
                <th scope="row">406</th>
                <td>PHARMACEUTICAL JURISPRUDENCE AND INTELLECTUAL PROPERTY RIGHT</td>
                <td>RASTOGI, SAMEER</td>
                <td>MACKHINGEE PUBLISHERS</td>
            </tr>
            <tr>
                <th scope="row">407</th>
                <td>BIOCHEMISTRY FOR PHARMACISTS</td>
                <td>BHISE, S.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">408</th>
                <td>MEDICINAL CHEMISTRY - III</td>
                <td>CHAUHAN, B.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">409</th>
                <td>MEDICINE PEARLS</td>
                <td>PANDA, U.N.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">410</th>
                <td>PHARMACEUTICAL PACKAGING TECHNOLOGY</td>
                <td>PAL, NATH RABINDRA</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">411</th>
                <td>ANALYTICAL PHARMACOGNOSY AND EXTRACTION TECHNOLOGY</td>
                <td>GOKHALE,S.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">412</th>
                <td>PHARMACOLOGY - III</td>
                <td>THMBURNE, SACHIN</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">413</th>
                <td>PHARMACOGNOSY - II</td>
                <td>GOKHALE, S.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">414</th>
                <td>PHARMACOGNOSY OF ANIMAL DRUG</td>
                <td>GOKHALE, S.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">415</th>
                <td>PHARMACOGNOSY (FOR FIRST YEAR DIP IN PHARMACY)</td>
                <td>BHARDWAJ, LOKESH</td>
                <td>R. NARRAIN PUBLISHER & DISTRI</td>
            </tr>
            <tr>
                <th scope="row">416</th>
                <td>PHARMACOGNOSY AND PHYTOCHEMISTRY - I</td>
                <td>SHUKLA, PADMINI</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">417</th>
                <td>REMEDIAL BIOLOGY ( NATURAL SCIENCE)</td>
                <td>DAS, KUNTAL</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">418</th>
                <td>ENVIORNMENTAL EDUCATION & DISASTER MANAGEMENT</td>
                <td>RASTOGI, SAMEER</td>
                <td>R. NARRAIN PUBLISHER & DISTRI</td>
            </tr>
            <tr>
                <th scope="row">419</th>
                <td>PHARMACEUTICAL BIOTECHNOLOGY EXPERIMENT AND TECHNIQUES</td>
                <td>KOKARE CHANDRAKANT</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">420</th>
                <td>PHARMACEUTICAL ANALYSIS - IV</td>
                <td>SAYARE, A.S.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">421</th>
                <td>PHARMACEUTICAL MICROBIOLOGY AND IMMUNOLOGY</td>
                <td>KOKARE CHANDRAKANT</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">422</th>
                <td>PHARMACEUTICAL CHEMISTRY - II</td>
                <td>SIDDIQUI, ANEES. AHMAD</td>
                <td>TARA PUBLISHERS</td>
            </tr>
            <tr>
                <th scope="row">423</th>
                <td>T. B. OF PHARMACEUTICAL CHEMISTRY</td>
                <td>RASTOGI, SAMEER</td>
                <td>MACKHINGEE PUBLISHERS</td>
            </tr>
            <tr>
                <th scope="row">424</th>
                <td>PHARMACEUTICS - I</td>
                <td>SINGH, RAVINDRA</td>
                <td>MACKHINGEE PUBLISHERS</td>
            </tr>
            <tr>
                <th scope="row">425</th>
                <td>PHARMACEUTICS - II</td>
                <td>BHALLA, VIJAY</td>
                <td>MACKHINGEE PUBLISHERS</td>
            </tr>
            <tr>
                <th scope="row">426</th>
                <td>PHARMACEUTICS (FIRST YEAR DIPLOMA IN PHARMACY)</td>
                <td>KASTURE, P.V.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">427</th>
                <td>EXPERIMENTAL PHARMACEUTICS - I</td>
                <td>SUDKE, SURESH. G.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">428</th>
                <td>T. B. OF PHARMACEUTICS</td>
                <td>GAUD, R.S.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">429</th>
                <td>PHARAMACEUTICS - II</td>
                <td>KASTURE, P.V.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">430</th>
                <td>PHYSICAL PHARMACEUTICS - II</td>
                <td>HAJARE, ASHOK.A.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">431</th>
                <td>PHYSICAL PHARMACEUTICS - I</td>
                <td>KHADE, PRASHANT H.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">432</th>
                <td>GENERAL STUDIES (GENERAL KNOWLEDGE AND CURRENT AFFAIRS) VOL - I</td>
                <td>THORPE, EDGAR</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">433</th>
                <td>GENERAL STUDIES (INDIAN POLITY AND GOVERNANCCE) VOL - II</td>
                <td>THORPE, EDGAR</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">434</th>
                <td>GENERAL STUDIES ( INDIAN ECONOMY) VOL - III</td>
                <td>THORPE, EDGAR</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">435</th>
                <td>GENERAL STUDIES (GEOGRAPHY AND ENVIORNMENTAL ECOLOGY) VOL - IV</td>
                <td>THORPE, EDGAR</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">436</th>
                <td>GENERAL STUDIES (GENERAL SCIENCE) VOL - V</td>
                <td>THORPE, EDGAR</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">437</th>
                <td>GENERAL STUDIES (HISTORY AND CULTURE) VOL -VI</td>
                <td>THORPE, EDGAR</td>
                <td>PEARSON</td>
            </tr>
            <tr>
                <th scope="row">438</th>
                <td>A MANNUAL OF PRACTICAL PHARMACEUTICS</td>
                <td>MAHAJAN, NEELAM</td>
                <td>BIRLA PUBLICATION . PVT. LTD.</td>
            </tr>
            <tr>
                <th scope="row">439</th>
                <td>PRACTICAL MANNUAL OF PHARMACEUTICS - II</td>
                 <td>GUPTA, G.D.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">440</th>
                <td>PRACTICAL PHARMACEUTICS - I</td>
                <td>KASTURE, P.V.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">441</th>
                <td>PRACTICAL PHARMACEUTICS - II</td>
                <td>KASTURE, P.V.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">442</th>
                <td>PRACTICAL PHARMACEUTICAL CHEMISTRY - II</td>
                <td>KASTURE, P.V.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">443</th>
                <td>PRACTICAL PHARMACEUTICAL CHEMISTRY - I</td>
                <td>KASTURE, P.V.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">444</th>
                <td>PRACTICAL MANNUAL OF PHARMACEUTICAL CHEMISTRY - II</td>
                <td>GUPTA, G.D.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">445</th>
                <td>PRACTICAL MANNUAL OF PHARMACEUTICAL CHEMISTRY - I</td>
                <td>GUPTA, G.D.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">446</th>
                <td>A LABORATRY MANNUAL OF PHARMACEUTICAL ORGANIC CHEMISTRY</td>
                <td>TIWARI, ABHISHEK</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">447</th>
                <td>A PRACTICAL BOOK OF PHARMACEUTICAL ORGANIC CHEMISTRY</td>
                <td>JAIN, K.S.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">448</th>
                <td>PRACTICAL MANNUAL OF PHARMACEUTICAL ENGINEERING</td>
                <td>JYOTI, B. JEEVANA</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">449</th>
                <td>PRACTICAL MANNUAL OF PHARMACOGNOSY</td>
                <td>GUPTA, G.D.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">450</th>
                <td>A PRACTICAL MANNUAL OF COMMUNICATION</td>
                <td>PANDEY, L.U.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">451</th>
                <td>PRACTICAL MANNUAL OF M. PHARMA STUDENTS</td>
                <td>YADAV, AWESH KUMAR</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">452</th>
                <td>PRACTICAL HAND BOOK ON PHARMACEUTICAL DSAGE FORMSS - I</td>
                <td>JAIN, D.K.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">453</th>
                <td>A. H. B. OF PRACTICAL PHYSICAL PHARMACY AND PRA PHYSICAL PHARMACEUTICS</td>
                <td>HADKAR, U.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">454</th>
                <td>A HAND BOOK OF PRACTICAL CHEMISTRY ( INORGANIC AND ORGANIC CHEMISTRY)</td>
                <td>MAHADIK, K.R.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">455</th>
                <td>PRACTICAL MICROBIOLOGY</td>
                <td>GAUD, R.S.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">456</th>
                <td>A MANNUAL OF MEDICAL LABORATORY TECHNOLOGY</td>
                <td>NAIGAONKAR, A.V.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">457</th>
                <td>PRACTICAL MANNUAL OF PHARMACOGNOSY AND PHYTOPHARMACEUTICALS</td>
                <td>GOKHALE, S.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">458</th>
                <td>A PRACTICAL BOOK OF REMEDIAL BIOLOGY</td>
                <td>GOKHALE, S.B.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">459</th>
                <td>PRACTICAL HOSPTAL AND CLINICAL PHARMACY</td>
                <td>PARADKAR, A.R.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">460</th>
                <td>PRACTICAL MANNUAL OF HOSPITAL & CLINICAL PHARMACY</td>
                <td>GUPTA, G.D.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">461</th>
                <td>PRACTICAL PHARMACOLOGY AND TOXIOCOLOGY</td>
                <td>KALE, S.R.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">462</th>
                <td>PRACTICAL MANNUAL OF PHARMACOLOGY AND TOXIOCOLOGY</td>
                <td>GUPTA, G.D.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">463</th>
                <td>PRACTICAL MANNUAL OF BIOCHEMISTRY & CLINICAL PATHOLOGY</td>
                <td>GUPTA, G.D.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">464</th>
                <td>PRACTICAL MANNUAL OF HUMAN ANATOMY AND PHYSIOLOGY</td>
                <td>GUPTA, G.D.</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">465</th>
                <td>A PRACTICAL BOOK OF HUMAN ANATOMY AND PHYSIOLOGY - II</td>
                <td>USMAAN, RAGEEB. MD,</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">466</th>
                <td>ENVIORNMENTAL APPRAISAL VOL - I</td>
                <td>MARKANDEY & MARKANDEY</td>
                <td>APH PUBLISHING HOUSE</td>
            </tr>
            <tr>
                <th scope="row">467</th>
                <td>ENVIORNMENTAL APPRAISAL VOL - II</td>
                <td>MARKANDEY & MARKANDEY</td>
                <td>APH PUBLISHING HOUSE</td>
            </tr>
            <tr>
                <th scope="row">468</th>
                <td>ENVIORNMENTAL APPRAISAL VOL - III</td>
                <td>MARKANDEY & MARKANDEY</td>
                <td>APH PUBLISHING HOUSE</td>
            </tr>
            <tr>
                <th scope="row">469</th>
                <td>ENVIORNMENTAL APPRAISAL VOL - IV</td>
                <td>MARKANDEY & MARKANDEY</td>
                <td>APH PUBLISHING HOUSE</td>
            </tr>
            <tr>
                <th scope="row">470</th>
                <td>ENVIORNMENTAL APPRAISAL VOL - V</td>
                <td>MARKANDEY & MARKANDEY</td>
                <td>APH PUBLISHING HOUSE</td>
            </tr>
            <tr>
                <th scope="row">471</th>
                <td>PHARMACEUTICAL ENGINEERING UNIT OPREATION PRINCIPLES & PRACTICE</td>
                <td>SUBRAHMANYAM CVS</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">472</th>
                <td>LACHMAN/LIEBERMAN THE THEORY AND PRACTICE OF INDUSTRIAL PHARMACY</td>
                <td>KHAR VYAS AHMAD JAIN EDITOR</td>
                <td>CBS PUBLISHERS & DISTRIBUTORS</td>
            </tr>
            <tr>
                <th scope="row">473</th>
                <td>TARA GUIDELINE SERIES PHARMACEUTUCAL JURISPRUDENCE</td>
                <td>AGARWAL S P</td>
                <td>TARA PUBLISHERS</td>
            </tr>
            <tr>
                <th scope="row">474</th>
                <td>PHARMACOLOGY- II</td>
                <td>OTARI K V</td>
                <td>THAKUR PUB PVT LTD</td>
            </tr>
            <tr>
                <th scope="row">475</th>
                <td>PRACTICAL INORGANIC PHARMACEUTICAL CHEMISTRY & VIVA VOCE</td>
                <td>SHARMA NIRMAL</td>
                <td>BIRLA PUBLICATION . PVT. LTD.</td>
            </tr>
            <tr>
                <th scope="row">476</th>
                <td>A LABORATORY MANUAL ON PHARMACEUTICAL ORGANIC CHEMISTRY</td>
                <td>TIWARI & SINGH</td>
                <td>NIRALI PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">477</th>
                <td>T B OF PHARMACEUTICAL ANALYSIS</td>
                <td>GANGULI SUBARNA</td>
                <td>AITBS PUBLISHERS ( INDIA )</td>
            </tr>
            <tr>
                <th scope="row">478</th>
                <td>A T B OF INORGANIC PHARMACEUTICAL CEMISTRY</td>
                <td>PANDEYA & PANDEYA</td>
                <td>KG PUBLISHERS (VARANSI)</td>
            </tr>
            <tr>
                <th scope="row">479</th>
                <td>PHARMACEUTICAL ENGINEERING ( FOR 3rd SEM B.PHARMA DEGREE)</td>
                <td>KAR & SAMBHAMURTHY</td>
                <td>NEW AGE INTERNATONAL PUBLISHERS</td>
            </tr>
            <tr>
                <th scope="row">480</th>
                <td>MEDICINAL AND PHARMACEUTICAL CHEMISTRY</td>
                <td>SINGH HARIKISHAN</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">481</th>
                <td>CONCISE MEDICAL PHYSIOLOGY</td>
                <td>CHAUDHARI SUJIT K</td>
                <td>NEW CENTRAL BOOK AGENCY CAULCUTTA</td>
            </tr>
            <tr>
                <th scope="row">482</th>
                <td>REVIEW OF MEDICAL PHYSIOLOGY</td>
                <td>GANONG WILLIAM F</td>
                <td>MG GRAW HILL COMPANIES</td>
            </tr>
            <tr>
                <th scope="row">483</th>
                <td>ESSENTIAL OF MEDICAL PHYSIOLOGY</td>
                <td>SEMBULINGUM K</td>
                <td>JAYPEE BROTHER MEDICAL PUBLISHERS DELHI</td>
            </tr>
            <tr>
                <th scope="row">484</th>
                <td>ESSENTIAL OF MEDICAL PHARMACOLOGY</td>
                <td>TRIPATHI K D</td>
                <td>JAYPEE BROTHER MEDICAL PUBLISHERS DELHI</td>
            </tr>
            <tr>
                <th scope="row">485</th>
                <td>T B OF PHARMACOGNOSY</td>
                <td>ALI MOHAMMED</td>
                <td>CBS PUBLICATION NEW DELHI</td>
            </tr>
            <tr>
                <th scope="row">486</th>
                <td>PARASIOLOGY</td>
                <td>CHATTERJEE K D</td>
                <td>CHATERJEE MEDICAL PUBLISHER , CAULCUTTA</td>
            </tr>
            <tr>
                <th scope="row">487</th>
                <td>ROBIN AND COTRAN PATHOLOGIC BASIC OF DISEASE</td>
                <td>KUMAR VINAY</td>
                <td>SAUNDERS AN IMPRINT OF ELSVIER</td>
            </tr>
            <tr>
                <th scope="row">488</th>
                <td>H B OF PSYHOLOGY OF DEVELOPMENT AND LEARNING</td>
                <td>AGGARWAL J C</td>
                <td>DOAPA BOOK HOUSE DELHI</td>
            </tr>
            <tr>
                <th scope="row">489</th>
                <td>DEVELOPMENTAL PSYCHOLOGY A LIFE SPAN APPORACH</td>
                <td>HURIOCK ELIZABETH B</td>
                <td>TATA MC GRAW HILL NEW DELHI</td>
            </tr>
            <tr>
                <th scope="row">490</th>
                <td>THE SCIENCE AND PRACTICE OF PHARMACY VOL I</td>
                <td>REMINGTON</td>
                <td>PHILADELPHIA COLLEGE OF PHARMACY AND SCIENCE</td>
            </tr>
            <tr>
                <th scope="row">491</th>
                <td>BIOPHARMACEUTICS AND CLINICAL PHARMACOKINETICS AN INTRODUCTION</td>
                <td>NOTARI ROBERT E</td>
                <td>MARCEL DEKKER INC NEW YORK</td>
            </tr>
            <tr>
                <th scope="row">492</th>
                <td>BIOPHARMACEUTICS AND PHARMACOKINETICS A TREATISE</td>
                <td>BRAHMANKAR B M</td>
                <td>VALLABH PRAKASHAN</td>
            </tr>
            <tr>
                <th scope="row">493</th>
                <td>ATLAS OF INTERNAL MEDICINE</td>
                <td>BRAUNWALD EUGENCE</td>
                <td>TATA MC GRAW HILL NEW DELHI</td>
            </tr>
            <tr>
                <th scope="row">494</th>
                <td>THE CEVELAND CLINIC INTENSIVE REVIEW OF INTERNAL MEDICINE</td>
                <td>STOLLER JAMES K</td>
                <td>LIPPINCOTT WILLIAMS AND WILLINGS</td>
            </tr>
            <tr>
                <th scope="row">495</th>
                <td>A SHORT T B OF MEDICAL STATISTICS</td>
                <td>HILL AUSTIN BRADFORD</td>
                <td>THE ENGLISH LANGUAGE BOOK SOCIETY</td>
            </tr>
            <tr>
                <th scope="row">496</th>
                <td>PRINCIPLES OF MEDICAL ELECTRONICS AND BIOMEDICAL INSTRUMENTION</td>
                <td>RAO C RAJA</td>
                <td>UNIVERSITIES PRESS INDIA</td>
            </tr>
            <tr>
                <th scope="row">497</th>
                <td>A H B OF MEDICAL LABORATORY TECHNOLOGY</td>
                <td>KHURANA S R</td>
                <td>CBS PUBLISHERS AND DISTRIBUTORS NEW DELHI</td>
            </tr>
            <tr>
                <th scope="row">498</th>
                <td>T B OF MEDICAL LABORATORY TECHNOLOGY</td>
                <td>GODKAR PRAFUL B</td>
                <td>BHALANI PUBLISHING HOUSE NEW DELHI</td>
            </tr>
            <tr>
                <th scope="row">499</th>
                <td>A PRACTICAL GUIDE TO CLINICAL VIROLOGY</td>
                <td>HAAHEIM L R</td>
                <td>JOHN WILY AND SONS</td>
            </tr>
            <tr>
            <tr>
                <th scope="row">500</th>
                <td>BRUNNSTROM CLINICAL KINESIOLOGY</td>
                <td>SMITH LAURA K</td>
                <td>JAYPEE BROTHERS NEW DELHI</td>
            </tr>
            <tr>
                <th scope="row">501</th>
                <td>AIDS, PATHOLOGY, DIAGNOSIS, TREATMENT AND PREVENTION</td>
                <td>SRIVASTAVA GOVIND</td>
                <td>CBS PUBLISHERS AND DISTRIBUTORS NEW DELHI</td>
            </tr>
            <tr>
                <th scope="row">502</th>
                <td>PROBABILITY MODELS AND CANCER</td>
                <td>LECAM, LUCIEN</td>
                <td>NORTH HOLLAND PUBLISHING AND COMPANY NEW YORK</td>
            </tr>
            <tr>
                <th scope="row">503</th>
                <td>RECOMBIANT DNA</td>
                <td>WATSON JAMES S</td>
                <td>W H FREE AND COMPANY NEW YORK</td>
            </tr>
            <th scope="row">504</th>
            <td>HEALTH EDUCATION & COMMUNITY PHARMACY ( IN HINDI)</td>
            <td>KUMAR VAIBHAV / KUMAR VIRENDRA</td>
                <td>THAKUR PUBLICAION PVT LTD LUCKNOW</td>
            </tr>
            <tr>
                <th scope="row">505</th>
                <td>HUMAN ANATOMY AND PHYSIOLOGY (IN HINDI)</td>
                <td>GUPTA, ANSARI</td>
                <td>THAKUR PUBLICAION PVT LTD LUCKNOW</td>
            </tr>
            <tr>
                <th scope="row">506</th>
                <td>PHARMACEUTICAL CHEMISTRY - I (IN HINDI)</td>
                <td>BRAHMIA KUMAR, PANKAJ</td>
                <td>THAKUR PUBLICAION PVT LTD LUCKNOW</td>
            </tr>
            <tr>
                <th scope="row">507</th>
                <td>PHARMACEUTICS - I (IN HINDI)</td>
                <td>ALI , CHANDINI</td>
                <td>THAKUR PUBLICAION PVT LTD LUCKNOW</td>
            </tr>
            <tr>
                <th scope="row">508</th>
                <td>BIO CHEMISTRY AND CLINICAL PATHOLOGY (IN HINDI)</td>
                <td>GUPTA,NEERAJ</td>
                <td>THAKUR PUBLICAION PVT LTD LUCKNOW</td>
            </tr>
            <tr>
                <th scope="row">509</th>
                <td>PHARMACOGNOSY ( IN HINDI)</td>
                <td>KANTH SHIVA</td>
                <td>THAKUR PUBLICAION PVT LTD LUCKNOW</td>
            </tr>
        </tbody>
    </table>
    <div class="pagination-container">
        <ul class="pagination"></ul>
    </div>

</div>


<?php require "common/footer.php" ?>

<script>
    $(document).ready(function() {
        var itemsPerPage = 100;
        var $tableRows = $('table tbody tr');
        var totalItems = $tableRows.length;
        var totalPages = Math.ceil(totalItems / itemsPerPage);
        var currentPage = 1;

        function showPage(page) {
            currentPage = page;
            var start = (page - 1) * itemsPerPage;
            var end = start + itemsPerPage;
            $tableRows.hide().slice(start, end).show();
            $('.pagination li').removeClass('active');
            $('.pagination li[data-page="' + page + '"]').addClass('active');
            updateButtons();
        }

        function createPagination(totalPages) {
            $('.pagination').empty();
            if (totalPages > 1) {
                if (currentPage > 1) {
                    $('.pagination').append('<li class="page-item" data-page="prev"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>');
                }
                for (var i = 1; i <= totalPages; i++) {
                    $('.pagination').append('<li class="page-item" data-page="' + i + '"><a class="page-link" href="#">' + i + '</a></li>');
                }
                if (currentPage < totalPages) {
                    $('.pagination').append('<li class="page-item" data-page="next"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>');
                }
                $('.pagination li[data-page="' + currentPage + '"]').addClass('active');
                $('.pagination li').click(function() {
                    var page = $(this).data('page');
                    if (page === "prev" && currentPage > 1) {
                        showPage(currentPage - 1);
                    } else if (page === "next" && currentPage < totalPages) {
                        showPage(currentPage + 1);
                    } else if (typeof page === "number") {
                        showPage(page);
                    }
                });
                $('.pagination .page-link').click(function(event) {
                    event.preventDefault();
                });
            }
        }

        function updateButtons() {
            createPagination(totalPages);
        }

        createPagination(totalPages);
        showPage(1);
    });
</script>