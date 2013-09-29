<?php
$con = mysql_connect("mysql.ocf.berkeley.edu","calsteel","Xpwdmpzh");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("calsteel", $con);
$company=$_POST['company'];
$password=$_POST['password'];
$idnum=$_POST['idnum'];
$company = stripslashes($company);
$password = stripslashes($password);
$idnum = stripslashes($idnum);
$company = mysql_real_escape_string($company);
$password = mysql_real_escape_string($password);
$idnum = mysql_real_escape_string($idnum);
$rcompany=$_POST['rcompany'];
$rpassword=$_POST['rpassword'];
$ridnum=$_POST['ridnum'];
$rcompany = stripslashes($rcompany);
$rpassword = stripslashes($rpassword);
$ridnum = stripslashes($ridnum);
$rcompany = mysql_real_escape_string($rcompany);
$rpassword = mysql_real_escape_string($rpassword);
$ridnum = mysql_real_escape_string($ridnum);
$dataclear=$_POST['dataclear'];
$codereduser=$_POST['codereduser'];
$coderedpassword=$_POST['coderedpassword'];
$dataclear=stripslashes($dataclear);
$codereduser=stripslashes($codereduser);
$coderedpassword=stripslashes($coderedpassword);
$dataclear=mysql_real_escape_string($dataclear);
$codereduser=mysql_real_escape_string($codereduser);
$coderedpassword=mysql_real_escape_string($coderedpassword);

if(strlen($company)>=1){
$insertcomp="INSERT INTO careerfair (id,company, password) VALUES('$idnum','$company','$password')";
mysql_query($insertcomp);
echo "1 record added";
}
else {
}

if(strlen($rcompany)>=1){
$removecomp="DELETE FROM careerfair WHERE company='$rcompany' and id='$ridnum'";
mysql_query($removecomp);
echo "1 record removed";
}
else {
}

if(strlen($dataclear)>=1){
	$sql="SELECT * FROM codered WHERE codereduser='$codereduser' and codredpassword='$coderedpassword'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){
	echo "program works";
	}
	else {
	echo "wrong username or password";
	}
}
else {
}

mysql_close($con)
?>