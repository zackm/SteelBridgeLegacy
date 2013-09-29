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
$mystate=$_POST['mystate'];
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

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
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
$mystate = stripslashes($mystate);
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
$mystate = mysql_real_escape_string($mystate);
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
//general,construction,transportation,geotechnical,environmental
$sql="SELECT * FROM $tbl_name WHERE company='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
// ad1='$myad1',ad2='$myad2',city='$mycity',zip='$myzip',state='$mystate'

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$update="UPDATE $tbl_name SET rep2title='$rep2title',rep3title='$rep3title',rep1email='$rep1email',rep1phone1='$rep1phone1',rep2phone2='$rep2phone2',rep1phone3='$rep1phone3',rep1title='$rep1title',fulltime='$fulltime',coop='$coop',internship='$internship',construction='$construction',transportation='$transportation',geotechnical='$geotechnical',environmental='$environmental',general='$general',structural='$structural',comments='$mycomments',geog='$mygeog',description='$mydescription',website='$mywebsite',zip='$myzip',st='$mystate',ad1='$myad1',ad2='$myad2',city='$mycity',rep1='$myrep1',rep2='$myreptwo',rep3='$myrepthree',contactname='$mycontactname',contactemail='$mycontactemail',contacttitle='$mycontacttitle',contactphone1='$contactphone1',contactphone2='$contactphone2',contactphone3='$contactphone3' WHERE company='$myusername'";
//rep1email='$rep1email',rep1phone1='$rep1phone1',rep2phone2='$rep2phone2',rep1phone3='$rep1phone3'
mysql_query($update);
echo "Information saved. Thank you!";
}
else {
echo "Wrong Username or Password";
}
?>