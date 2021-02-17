<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIO DATA MAKER</title>
    <link rel="icon" src="<i class='fas fa-align-left'></i>"> 
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <!-- <center> -->
    <h1 class="mainHead">BIO DATA MAKER</h1>
    <form action="BIODATA MAKER.php" method="POST">
        <table class="table">
            <tr>
                <td class="key">Name</td>
                <td class="value"><input type="text" name="name" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Fathers Name</td>
                <td class="value"><input type="text" name="fname" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Fathers Occupation</td>
                <td class="value"><input type="text" name="foccupation" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Mothers Name</td>
                <td class="value"><input type="text" name="mname" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Mothers Occupation</td>
                <td class="value"><input type="text" name="moccupation" class="data" required></td>
            </tr>

            <tr>
                <td class="key">Date Of Birth</td>
                <td class="value">
                    <select name="day" id="day" class="data-drop" required="">
                        <option value="">DD</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>

                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>

                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>

                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>

                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>

                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>

                        <option value="31">31</option>
                    </select>

                    <select name="month" id="month" class="data-drop" required="">
                        <!-- <option value='' selected>--Select Month--</option> -->
                        <option value=''>Month</option>
                        <option value='Jan'>January</option>
                        <option value='Feb'>February</option>
                        <option value='Mar'>March</option>
                        <option value='Apr'>April</option>
                        <option value='May'>May</option>
                        <option value='Jun'>June</option>
                        <option value='Jul'>July</option>
                        <option value='Aug'>Augest</option>
                        <option value='Sep'>September</option>
                        <option value='Oct'>October</option>
                        <option value='Nov'>November</option>
                        <option value='Dec'>December</option>
                    </select>

                    <select name="year" id="year" class="data-drop" required="">
                        <option value="">YYYY</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="key" require>Place Of Birth</td>
                <td class="value"><input type="text" name="pob" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Mobile Number</td>
                <td class="value"><input type="text" name="mobile_number" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Email</td>
                <td class="value"><input type="text" name="email" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Address</td>
                <td class="value"><textarea name="address" id="" cols="30" rows="6" class="data" required></textarea></td>
            </tr>

            <tr>
                <td class="key" require>Religion</td>
                <td class="value"><input type="text" name="religion" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Caste</td>
                <td class="value"><input type="text" name="caste" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Lanuguages Known</td>
                <td class="value"><input type="text" name="lang" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Height</td>
                <td class="value">
                    <select name="height" required="" class="data-drop">
                        <option value="">Select Height</option>
                        <option value="4 feet"> 4 feet </option>
                        <option value="4 feet 1 inches"> 4 feet 1 inches </option>
                        <option value="4 feet 2 inches"> 4 feet 2 inches </option>
                        <option value="4 feet 3 inches"> 4 feet 3 inches </option>
                        <option value="4 feet 4 inches"> 4 feet 4 inches </option>
                        <option value="4 feet 5 inches"> 4 feet 5 inches </option>
                        <option value="4 feet 6 inches"> 4 feet 6 inches </option>
                        <option value="4 feet 7 inches"> 4 feet 7 inches </option>
                        <option value="4 feet 8 inches"> 4 feet 8 inches </option>
                        <option value="4 feet 9 inches"> 4 feet 9 inches </option>
                        <option value="4 feet 10 inches"> 4 feet 10 inches </option>
                        <option value="4 feet 11 inches"> 4 feet 11 inches </option>
                        <option value="5 feet"> 5 feet </option>
                        <option value="5 feet 1 inches"> 5 feet 1 inches </option>
                        <option value="5 feet 2 inches"> 5 feet 2 inches </option>
                        <option value="5 feet 3 inches"> 5 feet 3 inches </option>
                        <option value="5 feet 4 inches"> 5 feet 4 inches </option>
                        <option value="5 feet 5 inches"> 5 feet 5 inches </option>
                        <option value="5 feet 6 inches"> 5 feet 6 inches </option>
                        <option value="5 feet 7 inches"> 5 feet 7 inches </option>
                        <option value="5 feet 8 inches"> 5 feet 8 inches </option>
                        <option value="5 feet 9 inches"> 5 feet 9 inches </option>
                        <option value="5 feet 10 inches"> 5 feet 10 inches </option>
                        <option value="5 feet 11 inches"> 5 feet 11 inches </option>
                        <option value="6 feet"> 6 feet </option>
                        <option value="6 feet 1 inches"> 6 feet 1 inches </option>
                        <option value="6 feet 2 inches"> 6 feet 2 inches </option>
                        <option value="6 feet 3 inches"> 6 feet 3 inches </option>
                        <option value="6 feet 4 inches"> 6 feet 4 inches </option>
                        <option value="6 feet 5 inches"> 6 feet 5 inches </option>
                        <option value="6 feet 6 inches"> 6 feet 6 inches </option>
                        <option value="6 feet 7 inches"> 6 feet 7 inches </option>
                        <option value="6 feet 8 inches"> 6 feet 8 inches </option>
                        <option value="6 feet 9 inches"> 6 feet 9 inches </option>
                        <option value="6 feet 10 inches"> 6 feet 10 inches </option>
                        <option value="6 feet 11 inches"> 6 feet 11 inches </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="key" require>Weight</td>
                <td class="value">
                    <select name="weight" required="" class="data-drop">
                        <option value="">Select Weight</option>
                        <option value="30 Kg">30 Kg</option>
                        <option value="31 Kg">31 Kg</option>
                        <option value="32 Kg">32 Kg</option>
                        <option value="33 Kg">33 Kg</option>
                        <option value="34 Kg">34 Kg</option>
                        <option value="35 Kg">35 Kg</option>
                        <option value="36 Kg">36 Kg</option>
                        <option value="37 Kg">37 Kg</option>
                        <option value="38 Kg">38 Kg</option>
                        <option value="39 Kg">39 Kg</option>
                        <option value="40 Kg">40 Kg</option>
                        <option value="41 Kg">41 Kg</option>
                        <option value="42 Kg">42 Kg</option>
                        <option value="43 Kg">43 Kg</option>
                        <option value="44 Kg">44 Kg</option>
                        <option value="45 Kg">45 Kg</option>
                        <option value="46 Kg">46 Kg</option>
                        <option value="47 Kg">47 Kg</option>
                        <option value="48 Kg">48 Kg</option>
                        <option value="49 Kg">49 Kg</option>
                        <option value="50 Kg">50 Kg</option>
                        <option value="51 Kg">51 Kg</option>
                        <option value="52 Kg">52 Kg</option>
                        <option value="53 Kg">53 Kg</option>
                        <option value="54 Kg">54 Kg</option>
                        <option value="55 Kg">55 Kg</option>
                        <option value="56 Kg">56 Kg</option>
                        <option value="57 Kg">57 Kg</option>
                        <option value="58 Kg">58 Kg</option>
                        <option value="59 Kg">59 Kg</option>
                        <option value="60 Kg">60 Kg</option>
                        <option value="61 Kg">61 Kg</option>
                        <option value="62 Kg">62 Kg</option>
                        <option value="63 Kg">63 Kg</option>
                        <option value="64 Kg">64 Kg</option>
                        <option value="65 Kg">65 Kg</option>
                        <option value="66 Kg">66 Kg</option>
                        <option value="67 Kg">67 Kg</option>
                        <option value="68 Kg">68 Kg</option>
                        <option value="69 Kg">69 Kg</option>
                        <option value="70 Kg">70 Kg</option>
                        <option value="71 Kg">71 Kg</option>
                        <option value="72 Kg">72 Kg</option>
                        <option value="73 Kg">73 Kg</option>
                        <option value="74 Kg">74 Kg</option>
                        <option value="75 Kg">75 Kg</option>
                        <option value="76 Kg">76 Kg</option>
                        <option value="77 Kg">77 Kg</option>
                        <option value="78 Kg">78 Kg</option>
                        <option value="79 Kg">79 Kg</option>
                        <option value="80 Kg">80 Kg</option>
                        <option value="81 Kg">81 Kg</option>
                        <option value="82 Kg">82 Kg</option>
                        <option value="83 Kg">83 Kg</option>
                        <option value="84 Kg">84 Kg</option>
                        <option value="85 Kg">85 Kg</option>
                        <option value="86 Kg">86 Kg</option>
                        <option value="87 Kg">87 Kg</option>
                        <option value="88 Kg">88 Kg</option>
                        <option value="89 Kg">89 Kg</option>
                        <option value="90 Kg">90 Kg</option>
                        <option value="91 Kg">91 Kg</option>
                        <option value="92 Kg">92 Kg</option>
                        <option value="93 Kg">93 Kg</option>
                        <option value="94 Kg">94 Kg</option>
                        <option value="95 Kg">95 Kg</option>
                        <option value="96 Kg">96 Kg</option>
                        <option value="97 Kg">97 Kg</option>
                        <option value="98 Kg">98 Kg</option>
                        <option value="99 Kg">99 Kg</option>
                        <option value="100 Kg">100 Kg</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="key" require>Blood Group</td>
                <td class="value">
                    <select name="blood" class="data-drop" required="">
                        <option value="">Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="key" require>Qualification</td>
                <td class="value"><input type="text" name="qualification" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Occupation</td>
                <td class="value"><input type="text" name="occupation" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Skills</td>
                <td class="value"><input type="text" name="skills" class="data" required></td>
            </tr>

            <tr>
                <td class="key" require>Hobbies</td>
                <td class="value"><input type="text" name="hobbies" class="data" required></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="GET BIODATA" id="submit" style="padding: 10px; font-size: 25px; border-radius: 10px; background-color: #314e52; color: #f7f6e7;">
    </form>
    <!-- </center> -->
</body>

</html>
