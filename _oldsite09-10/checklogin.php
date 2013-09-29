<?php
$host="mysql.ocf.berkeley.edu"; // Host name
$username="calsteel"; // Mysql username
$password="Xpwdmpzh"; // Mysql password
$db_name="calsteel"; // Database name
$tbl_name="careerfair"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
session_cache_expire(1440); 
session_start();
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE company='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
session_cache_expire(1440); //removed line if not working
session_start();	// This connects to the existing session
session_register ("myusername");	// Create a session variable called name
session_register ("mypassword");	// Create a session variable called job
$HTTP_SESSION_VARS ["myusername"] = $myusername;	// Set name = form variable $name
$HTTP_SESSION_VARS ["mypassword"] = $mypassword;	// Set job = form variable $job
$result = mysql_query("SELECT * FROM careerfair where company='$myusername'");
//<strong></strong>
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<table width='300' border='0' align='center' cellpadding='0' cellspacing='1' bgcolor='#CCCCCC'>
<tr>
<form name='form0' method='post' action='checkupdate.php'>
<td>
<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
<tr>
<td colspan='5'><div align='center'><strong>Registration Form</strong></div></td>
</tr>
<tr>
<td width='78'>Company:</td>
<td width='6'><strong>" . $row['company'] . "</strong></td>
<td width='294' colspan='3'></td>
</tr>
<tr>
<td>Representative1:</td>
<td><strong>" . $row['rep1'] . "</strong></td>
<td colspan='3'><input name='myrep1' type='text' id='myrep1'></td>
</tr>
<tr>
<td>Representative1 Title:</td>
<td><strong>" . $row['rep1title'] . "</strong></td>
<td colspan='3'><input name='rep1title' type='text' id='rep1title'></td>
</tr>
<tr>
<td>Representative1 Email:</td>
<td><strong>" . $row['rep1email'] . "</strong></td>
<td colspan='3'><input name='rep1email' type='text' id='rep1email'></td>
</tr>
<tr>
<td>Representative1 Phone:</td>
<td><strong> (" . $row['rep1phone1'] . ") </strong><strong>" . $row['rep2phone2'] . "</strong><strong>-" . $row['rep1phone3'] . "</strong></td>
<td colspan='3'>( <input name='rep1phone1' type='text' id='rep1phone1' size='3'> ) <input name='rep2phone2' type='text' id='rep2phone2' size='3'> - <input name='rep1phone3' type='text' id='rep1phone3' size='4'></td>
</tr>
<td>Representative2:</td>
<td><strong>" . $row['rep2'] . "</strong></td>
<td colspan='3'><input name='myreptwo' type='text' id='myreptwo'></td>
</tr>
<tr>
<td>Representative2 Title:</td>
<td><strong>" . $row['rep2title'] . "</strong></td>
<td colspan='3'><input name='rep2title' type='text' id='rep2title'></td>
</tr>
<tr>
<td>Representative3:</td>
<td><strong>" . $row['rep3'] . "</strong></td>
<td colspan='3'><input name='myrepthree' type='text' id='myrepthree'></td>
</tr>
<tr>
<td>Representative3 Title:</td>
<td><strong>" . $row['rep3title'] . "</strong></td>
<td colspan='3'><input name='rep3title' type='text' id='rep3title'></td>
</tr>
<tr>
<td>Contact Name:</td>
<td><strong>" . $row['contactname'] . "</strong></td>
<td colspan='3'><input name='mycontactname' type='text' id='mycontactname'></td>
</tr>
<tr>
<td>Contact Title:</td>
<td><strong>" . $row['contacttitle'] . "</strong></td>
<td colspan='3'><input name='mycontacttitle' type='text' id='mycontacttitle'></td>
</tr>
<tr>
<td>Contact Email:</td>
<td><strong>" . $row['contactemail'] . "</strong></td>
<td colspan='3'><input name='mycontactemail' type='text' id='mycontactemail'></td>
</tr>
<tr>
<td>Contact Phone:</td>
<td><strong> (" . $row['contactphone1'] . ") </strong><strong>" . $row['contactphone2'] . "</strong><strong>-" . $row['contactphone3'] . "</strong></td>
<td colspan='3'>( <input name='contactphone1' type='text' id='contactphone1' size='3'> ) <input name='contactphone2' type='text' id='contactphone2' size='3'> - <input name='contactphone3' type='text' id='contactphone3' size='4'></td>
</tr>
<tr>
<td>Address Line 1:</td>
<td><strong>" . $row['ad1'] . "</strong></td>
<td colspan='3'><input name='myad1' type='text' id='myad1'></td>
</tr>
<tr>
<td>Address Line 2:</td>
<td><strong>" . $row['ad2'] . "</strong></td>
<td colspan='3'><input name='myad2' type='text' id='myad2'></td>
</tr>
<tr>
<td>City:</td>
<td><strong>" . $row['city'] . "</strong></td>
<td colspan='3'><input name='mycity' type='text' id='mycity'></td>
</tr>
<tr>
<td>State:</td>
<td><strong>" . $row['st'] . "</strong></td>
<td colspan='3'><input name='myst' type='text' id='myst' size='2'></td>
</tr>
<tr>
<td>Zip Code:</td>
<td><strong>" . $row['zip'] . "</strong></td>
<td colspan='3'><input name='myzip' type='text' id='myzip' size='5'></td>
</tr>
<tr>
<td>Web-Site:</td>
<td><strong>" . $row['website'] . "</strong></td>
<td colspan='3'><input name='mywebsite' type='text' id='mywebsite'></td>
</tr>
<tr>
<td>Company Description <br>
  (max of 400 characters)</td>
<td colspan='4'><strong>" . $row['description'] ." </strong><textarea name='mydescription' cols='70' rows='5' maxlength='400' onkeyup='return ismaxlength(this)'></textarea></td>
</tr>
<tr>
<td>Company Emphasis(es)</td>
<td>              <input name='structural' value='CHECKED' type='checkbox'" . $row['structural'] . ">
              Structural </p><p>
              <input name='environmental' value='CHECKED' type='checkbox'" . $row['environmental'] .">
              Environmental </p>
<td><p>
  <input name='general' value='CHECKED' type='checkbox'" . $row['general'] .">
  General Civil </p>
  <p>
    <input name='construction' value='CHECKED' type='checkbox'" . $row['construction'] .">
  Construction </p>
<td><p>
  <input name='transportation' value='CHECKED' type='checkbox'" . $row['transportation'] .">
  Transportation </p>
  <p>
    <input name='geotechnical' value='CHECKED' type='checkbox'" . $row['geotechnical'] .">
  Geotechnical </p>
<tr>
<td>Position(s) Available</td>
<td><p><input name='fulltime' value='CHECKED' type='checkbox'" . $row['fulltime'] ."> 
  Full Time</p>
</td>
<td><input name='internship' value='CHECKED' type='checkbox'" . $row['internship'] .">
  Internship(s)</td>
<td><input name='coop' value='CHECKED' type='checkbox'" . $row['coop'] .">
  Co-op</td>
</tr>
<tr>
<td>Geographical Locations <br>
  (max of 500 characters)</td>
<td colspan='4'><strong>" . $row['geog'] ." </strong><textarea name='mygeog' cols='70' rows='5' maxlength='400' onkeyup='return ismaxlength(this)'></textarea></td>
</tr>
<tr>
<td>Comments <br>
  (max of 400 characters)</td>
<td colspan='4'><strong>" . $row['comments'] ." </strong><textarea name='mycomments' cols='70' rows='5' maxlength='400' onkeyup='return ismaxlength(this)'></textarea></td>
</tr>
<tr>
<td colspan='6'>Do you need to ship materials to us?  <input name='ship' value='CHECKED' type='checkbox'" . $row['ship'] . ">
Yes</tr>
<tr>
<td colspan='6'>Do you need a power supply?  <input name='power' value='CHECKED' type='checkbox'" . $row['power'] .">
Yes</tr>
<tr>
<td colspan='5'><div align='center'>
  <input type='submit' name='Baba' value='Submit'>
</div></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</td>
</form>
</tr>
</table>";
  }
echo "</table>";

mysql_close($con);
}
else {
echo "Wrong Username or Password";
}