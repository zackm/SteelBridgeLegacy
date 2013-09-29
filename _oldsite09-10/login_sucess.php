<?
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}

$con = mysql_connect("mysql.ocf.berkeley.edu","calsteel","Xpwdmpzh");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("calsteel", $con);

$result = mysql_query("SELECT * FROM careerfair where company='$myusername'");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['company'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>