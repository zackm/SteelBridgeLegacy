<?php
$host="mysql.ocf.berkeley.edu"; // Host name
$username="calsteel"; // Mysql username
$password="Xpwdmpzh"; // Mysql password
$db_name="calsteel"; // Database name
$tbl_name="admins"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE admins='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");
$result = mysql_query("SELECT * FROM careerfair");

echo "<table border='1'>
<tr>
<th>id</th>
<th>company</th>
<th>password</th>
<th>contactname</th>
<th>contacttitle</th>
<th>contactemail</th>
<th>contact phone</th>
<th>ad1</th>
<th>ad2</th>
<th>city</th>
<th>st</th>
<th>zip</th>
<th>rep1</th>
<th>rep1title</th>
<th>rep1email</th>
<th>rep1 phone</th>
<th>rep2</th>
<th>rep2title</th>
<th>rep3</th>
<th>rep3title</th>
<th>website</th>
<th>geog</th>
<th width=500>comments</th>
<th>internship</th>
<th>fulltime</th>
<th>coop</th>
<th width=500>description</th>
<th>general</th>
<th>structural</th>
<th>environmental</th>
<th>construction</th>
<th>transportation</th>
<th>geotechnical</th>
<th>ship</th>
<th>power</th>          
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['company'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['contactname'] . "</td>";
  echo "<td>" . $row['contacttitle'] . "</td>";
  echo "<td>" . $row['contactemail'] . "</td>";
  echo "<td>" . $row['contactphone1'] . "";
  echo "" . $row['contactphone2'] . "";
  echo "" . $row['contactphone3'] . "</td>";
  echo "<td>" . $row['ad1'] . "</td>";
  echo "<td>" . $row['ad2'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['st'] . "</td>";
  echo "<td>" . $row['zip'] . "</td>";
  echo "<td>" . $row['rep1'] . "</td>";
  echo "<td>" . $row['rep1title'] . "</td>";
  echo "<td>" . $row['rep1email'] . "</td>";
  echo "<td>" . $row['rep1phone1'] . "";
  echo "" . $row['rep2phone2'] . "";
  echo "" . $row['rep1phone3'] . "</td>";
  echo "<td>" . $row['rep2'] . "</td>";
  echo "<td>" . $row['rep2title'] . "</td>";
  echo "<td>" . $row['rep3'] . "</td>";
  echo "<td>" . $row['rep3title'] . "</td>";
  echo "<td>" . $row['website'] . "</td>";
  echo "<td>" . $row['geog'] . "</td>";
  echo "<td>" . $row['comments'] . "</td>";
  echo "<td>" . $row['internship'] . "</td>";
  echo "<td>" . $row['fulltime'] . "</td>";
  echo "<td>" . $row['coop'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  echo "<td>" . $row['general'] . "</td>";
  echo "<td>" . $row['structural'] . "</td>";
  echo "<td>" . $row['environmental'] . "</td>";
  echo "<td>" . $row['construction'] . "</td>";
  echo "<td>" . $row['transportation'] . "</td>";
  echo "<td>" . $row['geotechnical'] . "</td>";
  echo "<td>" . $row['ship'] . "</td>";
  echo "<td>" . $row['power'] . "</td>";
  //id company password contactname contacttitle contactemail contactphone1 contactphone2 contactphone3 
  //ad1 ad2 ad3 city st zip rep1 rep1title rep1email rep1phone1 rep2phone2 rep1phone3 rep2 rep3 rep4 rep5 rep6 cal1 cal2 cal3 cal4 cal5 cal6 
  //website geog comments internship fulltime coop description general structural environmental construction transportation geotechnical
  echo "</tr>";
  }
echo "</table>";
echo "<p></p><form name='form1' method='post' action='insert.php'><td>ID Number:<input name='idnum' type='text' id='idnum' size='3'></td><td> Company Name:<input name='company' type='text' id='company'></td>
<td>Password:<input name='password' type='text' id='password'></td>
<td><input type='submit' name='Submit' value='Add'></td>";
echo "<p></p><form name='form2' method='post' action='insert.php'><td>ID Number:<input name='ridnum' type='text' id='ridnum' size='3'></td><td> Company Name:<input name='rcompany' type='text' id='rcompany'></td>
<td>Password:<input name='rpassword' type='text' id='rpassword'></td>
<td><input type='submit' name='Submit' value='Remove'></td>";
echo "</p><table width='300' border='0' align='left' cellpadding='0' cellspacing='1' bgcolor='#CCCCCC'>
  <tr>
    <form name='form1' method='post' action='insert.php'>
      <td><table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
          <tr>
            <td width='294' colspan='3' bgcolor='#FEE1E0'><input name='dataclear' value='CHECKED' type='checkbox'>
            I certify that I would like to <strong>permenantly remove all records</strong> from the careerfair database. 
              <p align='center'>Please input <span class='style1'>code red</span> authorization:<br>
                Username :
                  <input name='codereduser' type='text' id='codereduser'>
                <br>
                Password :
                <input name='coderedpassword' type='password' id='coderedpassword'>
              </p>
              <p align='center'>
                <input type='submit' name='Submit' value='Execute'>
                <br>
              </p>
            </td>
          </tr>
      </table></td>
    </form>
  </tr>
</table>";
mysql_close($con);
}
else {
echo "Wrong Username or Password";
}
?>