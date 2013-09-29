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
$myrep2=$_POST['myrep2'];
$myrep3=$_POST['myrep3'];
$myrep1 = stripslashes($myrep1);
$myrep1 = mysql_real_escape_string($myrep1);

if(strlen($myrep1)>=1){
$repdate="UPDATE $tbl_name SET rep1='$myrep1' WHERE company='$myusername'";
echo strlen($myrep1)>=1;
mysql_query($repdate);
echo "Rep 1 Update.";
}
else {
echo "Rep 1 not updated";
}

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myrep2 = stripslashes($myrep2);
$myrep3 = stripslashes($myrep3);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$myrep2 = mysql_real_escape_string($myrep2);
$myrep3 = mysql_real_escape_string($myrep3);

$sql="SELECT * FROM $tbl_name WHERE company='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
// rep1='$myrep1',
if($count==1){
$update="UPDATE $tbl_name SET rep2='$myrep2',rep3='$myrep3' WHERE company='$myusername'";
mysql_query($update);
echo "Testing. Testing. 1 2 3.";
}
else {
echo "Wrong Username or Password";
}
?>