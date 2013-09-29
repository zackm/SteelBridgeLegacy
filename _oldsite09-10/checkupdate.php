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
session_start();
$myusername=$_SESSION['myusername'];
$mypassword=$_SESSION['mypassword'];
session_destroy();
$myrep1=$_POST['myrep1'];
$myreptwo=$_POST['myreptwo'];
$myrepthree=$_POST['myrepthree'];
$mycontactname=$_POST['mycontactname'];
$mycontacttitle=$_POST['mycontacttitle'];
$mycontactemail=$_POST['mycontactemail'];
$contactphone1=$_POST['contactphone1'];
$contactphone2=$_POST['contactphone2'];
$contactphone3=$_POST['contactphone3'];
$myad1=$_POST['myad1'];
$myad2=$_POST['myad2'];
$mycity=$_POST['mycity'];
$myzip=$_POST['myzip'];
$myst=$_POST['myst'];
$mywebsite=$_POST['mywebsite'];
$mydescription=$_POST['mydescription'];
$mygeog=$_POST['mygeog'];
$mycomments=$_POST['mycomments'];
$structural=$_POST['structural'];
$general=$_POST['general'];
$construction=$_POST['construction'];
$transportation=$_POST['transportation'];
$geotechnical=$_POST['geotechnical'];
$environmental=$_POST['environmental'];
$internship=$_POST['internship'];
$fulltime=$_POST['fulltime'];
$coop=$_POST['coop'];
$rep1email=$_POST['rep1email'];
$rep1title=$_POST['rep1title'];
$rep1phone1=$_POST['rep1phone1'];
$rep2phone2=$_POST['rep2phone2'];
$rep1phone3=$_POST['rep1phone3'];
$rep2title=$_POST['rep2title'];
$rep3title=$_POST['rep3title'];
$ship=$_POST['ship'];
$power=$_POST['power'];

// To protect MySQL injection (more detail about MySQL injection)
$myrep1 = stripslashes($myrep1);
$myreptwo = stripslashes($myreptwo);
$myrepthree = stripslashes($myrepthree);
$mycontactname = stripslashes($mycontactname);
$mycontacttitle = stripslashes($mycontacttitle);
$mycontactemail = stripslashes($mycontactemail);
$contactphone1 = stripslashes($contactphone1);
$contactphone2 = stripslashes($contactphone2);
$contactphone3 = stripslashes($contactphone3);
$myad1 = stripslashes($myad1);
$myad2 = stripslashes($myad2);
$mycity = stripslashes($mycity);
$myzip = stripslashes($myzip);
$myst = stripslashes($myst);
$mywebsite = stripslashes($mywebsite);
$mydescription = stripslashes($mydescription);
$mygeog = stripslashes($mygeog);
$mycomments = stripslashes($mycomments);
$structural = stripslashes($structural);
$general = stripslashes($general);
$construction = stripslashes($construction);
$transportation = stripslashes($transportation);
$geotechnical = stripslashes($geotechnical);
$environmental = stripslashes($environmental);
$internship = stripslashes($internship);
$fulltime = stripslashes($fulltime);
$coop = stripslashes($coop);
$rep1email = stripslashes($rep1email);
$rep1title = stripslashes($rep1title);
$rep1phone1 = stripslashes($rep1phone1);
$rep2phone2 = stripslashes($rep2phone2);
$rep1phone3 = stripslashes($rep1phone3);
$rep2title = stripslashes($rep2title);
$rep3title = stripslashes($rep3title);
$ship = stripslashes($ship);
$power = stripslashes($power);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$myrep1 = mysql_real_escape_string($myrep1);
$myreptwo = mysql_real_escape_string($myreptwo);
$myrepthree = mysql_real_escape_string($myrepthree);
$mycontactname = mysql_real_escape_string($mycontactname);
$mycontacttitle = mysql_real_escape_string($mycontacttitle);
$mycontactemail = mysql_real_escape_string($mycontactemail);
$contactphone1 = mysql_real_escape_string($contactphone1);
$contactphone2 = mysql_real_escape_string($contactphone2);
$contactphone3 = mysql_real_escape_string($contactphone3);
$myad1 = mysql_real_escape_string($myad1);
$myad2 = mysql_real_escape_string($myad2);
$mycity = mysql_real_escape_string($mycity);
$myzip = mysql_real_escape_string($myzip);
$myst = mysql_real_escape_string($myst);
$mywebsite = mysql_real_escape_string($mywebsite);
$mydescription = mysql_real_escape_string($mydescription);
$mygeog = mysql_real_escape_string($mygeog);
$mycomments = mysql_real_escape_string($mycomments);
$structural = mysql_real_escape_string($structural);
$general = mysql_real_escape_string($general);
$construction = mysql_real_escape_string($construction);
$transportation = mysql_real_escape_string($transportation);
$geotechnical = mysql_real_escape_string($geotechnical);
$environmental = mysql_real_escape_string($environmental);
$internship = mysql_real_escape_string($internship);
$fulltime = mysql_real_escape_string($fulltime);
$coop = mysql_real_escape_string($coop);
$rep1email = mysql_real_escape_string($rep1email);
$rep1title = mysql_real_escape_string($rep1title);
$rep1phone1 = mysql_real_escape_string($rep1phone1);
$rep2phone2 = mysql_real_escape_string($rep2phone2);
$rep1phone3 = mysql_real_escape_string($rep1phone3);
$rep2title = mysql_real_escape_string($rep2title);
$rep3title = mysql_real_escape_string($rep3title);
$ship = mysql_real_escape_string($ship);
$power = mysql_real_escape_string($power);
$sql="SELECT * FROM $tbl_name WHERE company='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
// Start Update Code
if($count==1){
//rep1
if(strlen($myrep1)>=1){
$reponeup="UPDATE $tbl_name SET rep1='$myrep1' WHERE company='$myusername'";
mysql_query($reponeup);
}
else {
}
//rep1title
if(strlen($rep1title)>=1){
$reponetitleup="UPDATE $tbl_name SET rep1title='$rep1title' WHERE company='$myusername'";
mysql_query($reponetitleup);
}
else {
}
//rep1email
if(strlen($rep1email)>=1){
$reponeemailup="UPDATE $tbl_name SET rep1email='$rep1email' WHERE company='$myusername'";
mysql_query($reponeemailup);
}
else {
}
//rep1phone1
if(strlen($rep1phone1)>=1){
$rep1phone1up="UPDATE $tbl_name SET rep1phone1='$rep1phone1' WHERE company='$myusername'";
mysql_query($rep1phone1up);
}
else {
}
//rep2phone2
if(strlen($rep2phone2)>=1){
$rep1phone2up="UPDATE $tbl_name SET rep2phone2='$rep2phone2' WHERE company='$myusername'";
mysql_query($rep1phone2up);
}
else {
}
//rep1phone3
if(strlen($rep1phone3)>=1){
$rep1phone3up="UPDATE $tbl_name SET rep1phone3='$rep1phone3' WHERE company='$myusername'";
mysql_query($rep1phone3up);
}
else {
}
//rep2 -myreptwo
if(strlen($myreptwo)>=1){
$rep2up="UPDATE $tbl_name SET rep2='$myreptwo' WHERE company='$myusername'";
mysql_query($rep2up);
}
else {
}
//rep2title
if(strlen($rep2title)>=1){
$rep2titleup="UPDATE $tbl_name SET rep2title='$rep2title' WHERE company='$myusername'";
mysql_query($rep2titleup);
}
else {
}
//rep3 -myrepthree
if(strlen($myrepthree)>=1){
$rep3up="UPDATE $tbl_name SET rep3='$myrepthree' WHERE company='$myusername'";
mysql_query($rep3up);
}
else {
}
//rep3title
if(strlen($rep3title)>=1){
$rep3titleup="UPDATE $tbl_name SET rep3title='$rep3title' WHERE company='$myusername'";
mysql_query($rep3titleup);
}
else {
}
//contactname -my
if(strlen($mycontactname)>=1){
$contactnameup="UPDATE $tbl_name SET contactname='$mycontactname' WHERE company='$myusername'";
mysql_query($contactnameup);
}
else {
}
//contacttitle -my
if(strlen($mycontacttitle)>=1){
$contacttitleup="UPDATE $tbl_name SET contacttitle='$mycontacttitle' WHERE company='$myusername'";
mysql_query($contacttitleup);
}
else {
}
//contactemail -my
if(strlen($mycontactemail)>=1){
$contactemailup="UPDATE $tbl_name SET contactemail='$mycontactemail' WHERE company='$myusername'";
mysql_query($contactemailup);
}
else {
}
//contactphone1
if(strlen($contactphone1)>=1){
$contactphone1up="UPDATE $tbl_name SET contactphone1='$contactphone1' WHERE company='$myusername'";
mysql_query($contactphone1up);
}
else {
}
//contactphone2
if(strlen($contactphone2)>=1){
$contactphone2up="UPDATE $tbl_name SET contactphone2='$contactphone2' WHERE company='$myusername'";
mysql_query($contactphone2up);
}
else {
}
//contactphone3
if(strlen($contactphone3)>=1){
$contactphone3up="UPDATE $tbl_name SET contactphone3='$contactphone3' WHERE company='$myusername'";
mysql_query($contactphone3up);
}
else {
}
//ad1 -my
if(strlen($myad1)>=1){
$ad1up="UPDATE $tbl_name SET ad1='$myad1' WHERE company='$myusername'";
mysql_query($ad1up);
}
else {
}
//ad2 -my
if(strlen($myad2)>=1){
$ad2up="UPDATE $tbl_name SET ad2='$myad2' WHERE company='$myusername'";
mysql_query($ad2up);
}
else {
}
//city  -my
if(strlen($mycity)>=1){
$cityup="UPDATE $tbl_name SET city='$mycity' WHERE company='$myusername'";
mysql_query($cityup);
}
else {
}
//st  -my
if(strlen($myst)>=1){
$stup="UPDATE $tbl_name SET st='$myst' WHERE company='$myusername'";
mysql_query($stup);
}
else {
}
//zip -my
if(strlen($myzip)>=1){
$zipup="UPDATE $tbl_name SET zip='$myzip' WHERE company='$myusername'";
mysql_query($zipup);
}
else {
}
//website -my
if(strlen($mywebsite)>=1){
$websiteup="UPDATE $tbl_name SET website='$mywebsite' WHERE company='$myusername'";
mysql_query($websiteup);
}
else {
}
//description -my
if(strlen($mydescription)>=1){
$descriptionup="UPDATE $tbl_name SET description='$mydescription' WHERE company='$myusername'";
mysql_query($descriptionup);
}
else {
}
//geog -my
if(strlen($mygeog)>=1){
$geogup="UPDATE $tbl_name SET geog='$mygeog' WHERE company='$myusername'";
mysql_query($geogup);
}
else {
}
//comments -my
if(strlen($mycomments)>=1){
$commentsup="UPDATE $tbl_name SET comments='$mycomments' WHERE company='$myusername'";
mysql_query($commentsup);
}
else {
}
//emphasis
$emphasisup="UPDATE $tbl_name SET construction='$construction',transportation='$transportation',geotechnical='$geotechnical',environmental='$environmental',general='$general',structural='$structural' WHERE company='$myusername'";
mysql_query($emphasisup);

//positions
$positionsup="UPDATE $tbl_name SET fulltime='$fulltime',coop='$coop',internship='$internship' WHERE company='$myusername'";
mysql_query($positionsup);

//ship
$shipup="UPDATE $tbl_name SET ship='$ship' WHERE company='$myusername'";
mysql_query($shipup);

//power
$powerup="UPDATE $tbl_name SET power='$power' WHERE company='$myusername'";
mysql_query($powerup);

echo "<p>Information saved. Thank you!</p>";}
else {
echo "Wrong Username or Password";
}
?>