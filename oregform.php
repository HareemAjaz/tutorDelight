<html>
<head>
<title>Tutor Delight</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 26pt; font-style: normal; font-weight: bold; color:#2E2E2E;
text-align: center;}
table{font-family: Calibri; color:white; font-size: 15pt; font-style: normal;
text-align:; background-color: #2E2E2E; opacity:0.7;}
table.inner{border: 13px}
body{
	background-image:url(img-large1.jpg);
	background-repeat:no-repea;
	background-size:cover;
	}
</style>
</head>
 
<body>
<h3>SIGN UP</h3>
<form action="form.php" method="POST">
 
<table align="center" cellpadding = "10">
 
 
<!----- First Name ---------------------------------------------------------->

<tr>
<td>First Name</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>Last Name</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!--ID--->
<tr>
<td>ID</td>
<td><input type="text" name="ID" maxlength="30"/>
(max 30 characters)
</td>
</tr>

<!--password--->
<tr>
<td>Password</td>
<td><input type="password" name="pwd" maxlength="30">
(max 30 characters)
</td>
</tr>

<!----- Gender ----------------------------------------------------------->
<tr>
<td>Gender</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>


<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>Date Of Birth</td>
 
<td>
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
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
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
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
</select>
</td>
</tr>
<!----- country ----->

<tr>
<td>Country</td>
 
<td>
<select name="Country" id="Country">
					<option value="0">--- Select ---</option>

<option value="1" >Afghanistan</option><option value="2" >Albania</option><option value="3" >Algeria</option><option value="4" >American Samoa</option><option value="5" >Andorra</option><option value="6" >Angola</option><option value="7" >Anguilla</option><option value="8" >Antarctica</option><option value="9" >Antigua and Barbuda</option><option value="10" >Argentina</option><option value="11" >Armenia</option><option value="12" >Aruba</option><option value="237" >Ashmore and Cartier Islands</option><option value="13" >Australia</option><option value="14" >Austria</option><option value="15" >Azerbaijan</option><option value="16" >Bahamas</option><option value="17" >Bahrain</option><option value="18" >Bangladesh</option><option value="19" >Barbados</option><option value="239" >Bassas da India</option><option value="20" >Belarus</option><option value="21" >Belgium</option><option value="22" >Belize</option><option value="23" >Benin</option><option value="24" >Bermuda</option><option value="25" >Bhutan</option><option value="254" >Bodies of water</option><option value="26" >Bolivia</option><option value="27" >Bosnia and Herzegovina</option><option value="28" >Botswana</option><option value="29" >Bouvet Island</option><option value="30" >Brazil</option><option value="31" >British Indian Ocean Territory</option><option value="32" >British Virgin Islands</option><option value="33" >Brunei</option><option value="34" >Bulgaria</option><option value="35" >Burkina Faso</option><option value="36" >Burundi</option><option value="37" >Cambodia</option><option value="38" >Cameroon</option><option value="39" >Canada</option><option value="40" >Cape Verde</option><option value="41" >Cayman Islands</option><option value="42" >Central African Republic</option><option value="43" >Chad</option><option value="44" >Chile</option><option value="45" >China</option><option value="46" >Christmas Island</option><option value="248" >Clipperton Island</option><option value="47" >Cocos Islands</option><option value="48" >Colombia</option><option value="49" >Comoros</option><option value="50" >Congo</option><option value="240" >Congo (Brazzaville)</option><option value="51" >Cook Islands</option><option value="241" >Coral Sea Islands</option><option value="52" >Costa Rica</option><option value="249" >Cote DIvoire</option><option value="53" >Croatia</option><option value="54" >Cuba</option><option value="55" >Cyprus</option><option value="56" >Czech Republic</option><option value="57" >Denmark</option><option value="58" >Djibouti</option><option value="59" >Dominica</option><option value="60" >Dominican Republic</option><option value="61" >East Timor</option><option value="62" >Ecuador</option><option value="63" >Egypt</option><option value="64" >El Salvador</option><option value="65" >Equatorial Guinea</option><option value="66" >Eritrea</option><option value="67" >Estonia</option><option value="68" >Ethiopia</option><option value="243" >Europa Island</option><option value="69" >Falkland Islands</option><option value="70" >Faroe Islands</option><option value="71" >Fiji</option><option value="72" >Finland</option><option value="73" >France</option><option value="74" >French Guiana</option><option value="75" >French Polynesia</option><option value="76" >French Southern Territories</option><option value="77" >Gabon</option><option value="78" >Gambia</option><option value="246" >Gaza Strip</option><option value="79" >Georgia</option><option value="80" >Germany</option><option value="81" >Ghana</option><option value="82" >Gibraltar</option><option value="245" >Glorioso Islands</option><option value="83" >Greece</option><option value="84" >Greenland</option><option value="85" >Grenada</option><option value="86" >Guadeloupe</option><option value="87" >Guam</option><option value="88" >Guatemala</option><option value="244" >Guernsey</option><option value="89" >Guinea</option><option value="90" >Guinea-Bissau</option><option value="91" >Guyana</option><option value="92" >Haiti</option><option value="93" >Heard and McDonald Islands</option><option value="94" >Honduras</option><option value="95" >Hong Kong</option><option value="96" >Hungary</option><option value="97" >Iceland</option><option value="98" >India</option><option value="99" >Indonesia</option><option value="100" >Iran</option><option value="101" >Iraq</option><option value="102" >Ireland</option><option value="247" >Isle of Man</option><option value="103" >Israel</option><option value="104" >Italy</option><option value="105" >Ivory Coast</option><option value="106" >Jamaica</option><option value="251" >Jan Mayen</option><option value="107" >Japan</option><option value="250" >Jersey</option><option value="108" >Jordan</option><option value="252" >Juan de Nova Island</option><option value="109" >Kazakhstan</option><option value="110" >Kenya</option><option value="111" >Kiribati</option><option value="112" >Korea, North</option><option value="113" >Korea, South</option><option value="114" >Kuwait</option><option value="115" >Kyrgyzstan</option><option value="116" >Laos</option><option value="117" >Latvia</option><option value="118" >Lebanon</option><option value="119" >Lesotho</option><option value="120" >Liberia</option><option value="121" >Libya</option><option value="122" >Liechtenstein</option><option value="123" >Lithuania</option><option value="124" >Luxembourg</option><option value="125" >Macau</option><option value="253" >Macedonia</option><option value="126" >Macedonia, Former Yugoslav Republic of</option><option value="127" >Madagascar</option><option value="128" >Malawi</option><option value="129" >Malaysia</option><option value="130" >Maldives</option><option value="131" >Mali</option><option value="132" >Malta</option><option value="133" >Marshall Islands</option><option value="134" >Martinique</option><option value="135" >Mauritania</option><option value="136" >Mauritius</option><option value="137" >Mayotte</option><option value="138" >Mexico</option><option value="139" >Micronesia, Federated States of</option><option value="140" >Moldova</option><option value="141" >Monaco</option><option value="142" >Mongolia</option><option value="143" >Montserrat</option><option value="144" >Morocco</option><option value="145" >Mozambique</option><option value="146" >Myanmar</option><option value="147" >Namibia</option><option value="148" >Nauru</option><option value="149" >Nepal</option><option value="150" >Netherlands</option><option value="151" >Netherlands Antilles</option><option value="152" >New Caledonia</option><option value="153" >New Zealand</option><option value="154" >Nicaragua</option><option value="155" >Niger</option><option value="156" >Nigeria</option><option value="157" >Niue</option><option value="158" >Norfolk Island</option><option value="159" >Northern Mariana Islands</option><option value="160" >Norway</option><option value="161" >Oman</option><option value="162" >Pakistan</option><option value="163" >Palau</option><option value="164" >Panama</option><option value="165" >Papua New Guinea</option><option value="255" >Paracel Islands</option><option value="166" >Paraguay</option><option value="167" >Peru</option><option value="168" >Philippines</option><option value="169" >Pitcairn Island</option><option value="170" >Poland</option><option value="171" >Portugal</option><option value="172" >Puerto Rico</option><option value="173" >Qatar</option><option value="174" >Reunion</option><option value="175" >Romania</option><option value="176" >Russia</option><option value="177" >Rwanda</option><option value="178" >S. Georgia and S. Sandwich Isls.</option><option value="258" >Saint Helena</option><option value="179" >Saint Kitts & Nevis</option><option value="180" >Saint Lucia</option><option value="257" >Saint Pierre and Miquelon</option><option value="262" >Saint Vincent & the Grenadines</option><option value="181" >Saint Vincent and The Grenadines</option><option value="182" >Samoa</option><option value="183" >San Marino</option><option value="184" >Sao Tome and Principe</option><option value="185" >Saudi Arabia</option><option value="186" >Senegal</option><option value="265" >Serbia and Montenegro</option><option value="187" >Seychelles</option><option value="188" >Sierra Leone</option><option value="189" >Singapore</option><option value="190" >Slovakia</option><option value="191" >Slovenia</option><option value="238" >Solomon Islands</option><option value="192" >Somalia</option><option value="193" >South Africa</option><option value="194" >Spain</option><option value="256" >Spratly Islands</option><option value="195" >Sri Lanka</option><option value="196" >St. Helena</option><option value="197" >St. Pierre and Miquelon</option><option value="198" >Sudan</option><option value="199" >Suriname</option><option value="259" >Svalbard</option><option value="200" >Svalbard and Jan Mayen Islands</option><option value="201" >Swaziland</option><option value="202" >Sweden</option><option value="203" >Switzerland</option><option value="204" >Syria</option><option value="205" >Taiwan</option><option value="206" >Tajikistan</option><option value="207" >Tanzania</option><option value="208" >Thailand</option><option value="209" >Togo</option><option value="210" >Tokelau</option><option value="211" >Tonga</option><option value="212" >Trinidad and Tobago</option><option value="260" >Tromelin Island</option><option value="213" >Tunisia</option><option value="214" >Turkey</option><option value="215" >Turkmenistan</option><option value="216" >Turks and Caicos Islands</option><option value="217" >Tuvalu</option><option value="218" >Uganda</option><option value="219" >Ukraine</option><option value="261" >Undersea features</option><option value="220" >United Arab Emirates</option><option value="221" >United Kingdom</option><option value="222" >United States of America</option><option value="223" >Uruguay</option><option value="224" >Uzbekistan</option><option value="225" >Vanuatu</option><option value="226" >Vatican City</option><option value="227" >Venezuela</option><option value="228" >Vietnam</option><option value="229" >Virgin Islands</option><option value="264" >Wallis and Futuna</option><option value="230" >Wallis and Futuna Islands</option><option value="263" >West Bank</option><option value="231" >Western Sahara</option><option value="232" >Yemen</option><option value="233" >Yugoslavia (Former)</option><option value="234" >Zaire</option><option value="235" >Zambia</option><option value="236" >Zimbabwe</option>
</select>

</td>
</tr>

 
 <!-----------------Profession----------->
 <tr><td>Occupation Level</td>
			
				<td><select name= "Occupation" id="Occupation">
				<option value="0" selected>--- Select ---</option><option value="1" >Accounts/Auditing</option><option value="2" >Administrative/Secretarial</option><option value="3" >Advertising/Media/PR</option><option value="4" >Banking/Finance</option><option value="5" >Customer Service</option><option value="6" >Education/Teaching</option><option value="7" >Engineering/Architecture</option><option value="8" >Food Services</option><option value="9" >Government</option><option value="10" >Healthcare & Medical</option><option value="11" >Hospitality & Tourism</option><option value="12" >I.T/Communications</option><option value="13" >Journalism</option><option value="14" >Legal</option><option value="15" >Law enforcement</option><option value="16" >Military</option><option value="17" >Management/HR</option><option value="18" >Political/Government</option><option value="19" >Researcher</option><option value="20" >Sales & Marketing</option><option value="21" >Teacher/Professor</option><option value="22" >Technical Science</option><option value="23" >Transportation</option><option value="24" >Self-employed / Entrepruneur</option><option value="25" >Student</option><option value="888" >Not Working</option><option value="27" >Doctor</option><option value="28" >Senior Management</option><option value="29" >Consultant</option><option value="9997" >Others</option>				</select></td>
</tr> 

<!---------Degree--------->
<tr>
<td>Degree</td>

<td><input type="text" name="Degree" maxlength="10" /></td>
</tr>

<!----- Email Id ---------------------------------------------------------->
<tr>
<td>Email Id</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>Mobile Number</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(11 digit number)
</td>
</tr>
 

 
<!----- Address ---------------------------------------------------------->
<tr>
<td>Address <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
 
<!-----Qualification---------------------------------------------------------->
<tr>
<td>Qualification <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" name="Graduation_Board" maxlength="30" /></td>
<td><input type="text" name="Graduation_Percentage" maxlength="30" /></td>
<td><input type="text" name="Graduation_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>4</td>
<td>Masters</td>
<td><input type="text" name="Masters_Board" maxlength="30" /></td>
<td><input type="text" name="Masters_Percentage" maxlength="30" /></td>
<td><input type="text" name="Masters_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td></td>
<td></td>
<td align="center">(10 char max)</td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>
 
<!----- Course ---------------------------------------------------------->
<tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
PHYSICS
<input type="radio" name="Course_PHYSICS" value="PHYSICS">
MATH
<input type="radio" name="Course_MATH" value="MATH">
ENGLISH
<input type="radio" name="Course_ENGLISH" value="ENGLISH">
CHEMISTRY
<input type="radio" name="Course_CHEMISTRY" value="CHEMISTRY">
</td>
</tr>

<!--input pic--->
<tr>
<td>Upload Your Pic</td>
<td>
<form action="demo_form.asp">

<input type="file" name="pic" accept="image/*">
</td>
</tr>
	

 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>