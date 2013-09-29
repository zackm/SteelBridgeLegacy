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
$company=$_POST['company'];
$password=$_POST['password'];
$contactname=$_POST['contactname'];
$contactemail=$_POST['contactemail'];
$contactphone1=$_POST['contactphone1'];
$contactphone2=$_POST['contactphone2'];
$contactphone3=$_POST['contactphone3'];
$ad1=$_POST['ad1'];
$ad2=$_POST['ad2'];
$ad3=$_POST['ad3'];
$city=$_POST['city'];
$st=$_POST['st'];
$zip=$_POST['zip'];
$rep1=$_POST['rep1'];
$rep1title=$_POST['rep1title']; 
$rep1email=$_POST['rep1email'];
$rep1phone1=$_POST['rep1phone1'];
$rep2phone2=$_POST['rep2phone2'];
$rep1phone3=$_POST['rep1phone3'];
$rep2=$_POST['rep2'];
$rep3=$_POST['rep3'];
$rep4=$_POST['rep4'];
$rep5=$_POST['rep5'];
$rep6=$_POST['rep6'];
$cal1=$_POST['cal1'];
$cal2=$_POST['cal2'];
$cal3=$_POST['cal3'];
$cal4=$_POST['cal4'];
$cal5=$_POST['cal5'];
$cal6=$_POST['cal6'];
$website=$_POST['website'];
$geog=$_POST['geog'];
$comments=$_POST['comments'];
$internship=$_POST['internship'];
$fulltime=$_POST['fulltime'];
$coop=$_POST['coop'];
$description=$_POST['description'];
$general=$_POST['general'];
$structural=$_POST['structural'];
$environmental=$_POST['environmental'];
$construction=$_POST['construction'];
$transportation=$_POST['transportation'];
$geotechnical=$_POST['geotechnical'];

// To protect MySQL injection (more detail about MySQL injection)
$company=stripslashes($company);
$password=stripslashes($password);
$contactname=stripslashes($contactname);
$myrep2=stripslashes($myrep2);
$contactemail=stripslashes($contactemail);
$contactphone1=stripslashes($contactphone1);
$contactphone2=stripslashes($contactphone2);
$contactphone3=stripslashes($contactphone3);
$ad1=stripslashes($ad1);
$ad2=stripslashes($ad2);
$ad3=stripslashes($ad3);
$city=stripslashes($city);
$st=stripslashes($st);
$zip=stripslashes($zip);
$rep1=stripslashes($rep1);
$rep1title=stripslashes($rep1title); 
$rep1email=stripslashes($rep1email);
$rep1phone1=stripslashes($rep1phone1);
$rep2phone2=stripslashes($rep2phone2);
$rep1phone3=stripslashes($rep1phone3);
$rep2=stripslashes($rep2);
$rep3=stripslashes($rep3);
$rep4=stripslashes($rep4);
$rep5=stripslashes($rep5);
$rep6=stripslashes($rep6);
$cal1=stripslashes($cal1);
$cal2=stripslashes($cal2);
$cal3=stripslashes($cal3);
$cal4=stripslashes($cal4);
$cal5=stripslashes($cal5);
$cal6=stripslashes($cal6);
$website=stripslashes($website);
$geog=stripslashes($geog);
$comments=stripslashes($comments);
$internship=stripslashes($internship);
$fulltime=stripslashes($fulltime);
$coop=stripslashes($coop);
$description=stripslashes($description);
$general=stripslashes($general);
$structural=stripslashes($structural);
$environmental=stripslashes($environmental);
$construction=stripslashes($construction);
$transportation=stripslashes($transportation);
$geotechnical=stripslashes($geotechnical);
$company=mysql_real_escape_string($company);
$password=mysql_real_escape_string($password);
$contactname=mysql_real_escape_string($contactname);
$myrep2=mysql_real_escape_string($myrep2);
$contactemail=mysql_real_escape_string($contactemail);
$contactphone1=mysql_real_escape_string($contactphone1);
$contactphone2=mysql_real_escape_string($contactphone2);
$contactphone3=mysql_real_escape_string($contactphone3);
$ad1=mysql_real_escape_string($ad1);
$ad2=mysql_real_escape_string($ad2);
$ad3=mysql_real_escape_string($ad3);
$city=mysql_real_escape_string($city);
$st=mysql_real_escape_string($st);
$zip=mysql_real_escape_string($zip);
$rep1=mysql_real_escape_string($rep1);
$rep1title=mysql_real_escape_string($rep1title); 
$rep1email=mysql_real_escape_string($rep1email);
$rep1phone1=mysql_real_escape_string($rep1phone1);
$rep2phone2=mysql_real_escape_string($rep2phone2);
$rep1phone3=mysql_real_escape_string($rep1phone3);
$rep2=mysql_real_escape_string($rep2);
$rep3=mysql_real_escape_string($rep3);
$rep4=mysql_real_escape_string($rep4);
$rep5=mysql_real_escape_string($rep5);
$rep6=mysql_real_escape_string($rep6);
$cal1=mysql_real_escape_string($cal1);
$cal2=mysql_real_escape_string($cal2);
$cal3=mysql_real_escape_string($cal3);
$cal4=mysql_real_escape_string($cal4);
$cal5=mysql_real_escape_string($cal5);
$cal6=mysql_real_escape_string($cal6);
$website=mysql_real_escape_string($website);
$geog=mysql_real_escape_string($geog);
$comments=mysql_real_escape_string($comments);
$internship=mysql_real_escape_string($internship);
$fulltime=mysql_real_escape_string($fulltime);
$coop=mysql_real_escape_string($coop);
$description=mysql_real_escape_string($description);
$general=mysql_real_escape_string($general);
$structural=mysql_real_escape_string($structural);
$environmental=mysql_real_escape_string($environmental);
$construction=mysql_real_escape_string($construction);
$transportation=mysql_real_escape_string($transportation);
$geotechnical=mysql_real_escape_string($geotechnical);
$sql="SELECT * FROM $tbl_name WHERE company='$company' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$update="UPDATE $tbl_name SET rep1='$rep1,rep2='$rep2','rep3=$rep3' WHERE company='$myusername'";
// contactname='$contactname',contacttitle='$contactname',contactemail='$contactemail',contactphone1='$contactphone1',contactphone2='$contactphone2',contactphone3='$contactphone3',ad1='$ad1',ad2='$ad2',ad3='$ad3',city='$city',st='$st',zip='$zip',rep1='$rep1',rep1title='$rep1title',rep1email='$rep1email',rep1phone1='$rep1phone1',rep2phone2='$rep2phone2',rep1phone3='$rep1phone3',rep2='$rep2,rep3='$rep3,rep4='$rep4',rep5='$rep5',rep6='$rep6',cal1='$cal1',cal2='$cal2',cal3='$cal3',cal4='$cal4',cal5='$cal5'$,cal6='$cal6',website='$website' geog='$geog' comments='$comments' internship='$internship',fulltime='$fulltime',coop='$coop',description='$description',general='$general' structural='$structural',environmental='$environmental' construction='$construction',transportation='$transportation',geotechnical='$geotechnical' WHERE company='$myusername'";
  
mysql_query($update);
echo "Registration Saved. Thank You!";
}
else {
echo "Wrong Username or Password";
}
?>