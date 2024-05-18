<style>
.code-container {
    width: 80%;
    margin: 0 auto;
}

h1 {
    color: #333;
    margin-bottom: 20px;
    background-color: #F8D19E;
    padding: 10px;
    border-radius: 5px;
}

.tabs {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.tablink {
    background-color: #f2f2f2;
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
    background-color: #ffa;
}

.tabcontent {
    display: none;
}

.tabcontent table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.tabcontent th, .tabcontent td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

.tabcontent th {
    background-color: #f2f2f2;
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

<div class="code-container">
        <h1>Code of Conduct</h1>
        <div class="tabs"> 
            <button class="tablink" onclick="openTab(event, 'GirlsHostel')">CODE OF CONDUCT OF GIRLS HOSTEL</button>
            <button class="tablink" onclick="openTab(event, 'BoysHostel')">CODE OF CONDUCT OF BOYS HOSTEL</button>
        </div>
        <div id="GirlsHostel" class="tabcontent">
            <table>
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Issue</th>
                        <th>Action to be Taken</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Entering Campus Gate/ Hostel Block Gate without ID Card</td>
                        <td>
                            <p>Penalty of Rs.100/-</p>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <p>1st Time: Penalty of Rs.500/-</p>
                            <p>On Repetition: Penalty of Rs.500/- + No priority in Hostel Room Counseling</p>
                            </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Late coming</td>
                        <td>
                        <p>1st Time: Penalty of Rs.100/-</p>
                            <p>2nd Time: Penalty of Rs.200/-</p>
                        <p>1st Time: Penalty of Rs.500/-</p>
                        <p>On Repetition: Expulsion from the hostel</p>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Possession of Electrical appliances inside Hostel room</td>
                        <td>
                            <p>Penalty of Rs.500/- + size of electrical appliances which will be returned to the student after completion of degree and on repetition No priority in Hostel Room Counseling</p>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Smoking</td>
                        <td>
                        <p>1st Time: Penalty of Rs.1000/- + Community Service + (Participate in Anti Smoking Campaign) + Counseling</p>
                        <p>On Repetition: Penalty of Rs.2000/- + No priority in Hostel Room Counseling</p>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Damaging Property</td>
                        <td>
                        <p>Penalty of Rs.5000/- + payment of three times of the cost of damage</p>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ragging / Harassment of fellow students by any manner.</td>
                        <td>
                        <p>Expulsion from the Hostel</p>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Drugs / Substance Abuse</td>
                        <td>
                        <p>Expulsion from the Hostel</p>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Forgery / Multilevel Marketing / Gambling</td>
                        <td>
                        <p> Expulsion from the hostel</p>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Any kind of Cyber Crime / Defaming Foundation’s name in any manner</td>
                        <td>
                        <p>Expulsion from the hostel</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="BoysHostel" class="tabcontent" style="display:none">
            <table>
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Violation</th>
                        <th>Action to be Taken</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Attendance</td>
                        <td>
                            <p>1st Time: Warning</p>
                            <p>2nd Time: Outing Cancellation for 15 days</p>
                            <p>On Repetition: Outing Cancellation for one semester</p>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Entering Campus Gate/ Hostel Block Gate without ID Card</td>
                        <td>Penalty of Rs.100/-</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Giving false Information during Enquiry for misconduct</td>
                        <td>Outing Cancellation for three months</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Late Coming</td>
                        <td>
                            <p>1st Time: Penalty of Rs.100/-</p>
                            <p>2nd Time: Penalty of Rs.200/-</p>
                            <p>On Repetition: Penalty of Rs.500/- + Outing Cancellation for one month</p>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Possession / Using of Electrical appliances inside Hostel room</td>
                        <td>
                            <p>Penalty of Rs.500/- + Confiscation of electrical appliances + No Priority in hostel room Counseling</p>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Smoking</td>
                        <td>
                            <p>1st Time: Penalty of Rs.1000/- + Community Service<br>(Participate in Anti Smoking Campaign) + Counseling</p>
                            <p>On Repetition: + No priority in Hostel Room Counseling</p>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Absent without obtaining leave (AWOL)</td>
                        <td>
                            <p>1st Time: Penalty of Rs.1000/-</p>
                            <p>On Repetition: Penalty of Rs.3000/- + No priority in Hostel Room Counseling</p>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Stealing / Theft</td>
                        <td>
                            <p>Suspension from One Month from the Hostel</p>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Any kind of Cyber Crime / Defaming Foundation’s name in any manner</td>
                        <td>
                            <p>Expulsion from the Hostel</p>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Forgery / Multilevel Marketing / Gambling</td>
                        <td>
                            <p>Expulsion from the Hostel</p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

<?php require "common/footer.php"?>

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