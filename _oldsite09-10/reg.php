<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style></head>

<body>
<div id="MainSection">
  <p>*Required Fields</p>
</div>
<div id="Table">
  <form name="form1" method="post" action="registration.php">
    <table align="center" border="1" cellpadding="0" width="870">
      <colgroup width="150">
      </colgroup>
      <colgroup width="150">
      </colgroup>
      <colgroup width="200">
      </colgroup>
      <colgroup width="190">
      </colgroup>
      <colgroup width="80">
      </colgroup>
      <tbody>
        <tr>
          <td colspan="3"><p><b>Basic Company Information</b></p></td>
          <td colspan="2"><p><b>Representatives Attending </b></p></td>
        </tr>
        <tr>
          <td colspan="2"><p>Company Name*: <br>
                  <input size="30" name="company" type="text" id="company">
          </p></td>
          <td><p>Password*: <br>
                  <input name="password" size="16" maxlength="16" type="text" id="password">
          </p></td>
          <td><p>Rep #1 Name*:
                  <input name="rep1" type="text">
          </p></td>
          <td><p>Cal Alum?
                  <input name="cal1" value="yes" type="checkbox">
                  Yes </p></td>
        </tr>
        <tr>
          <td colspan="3"><p>Address Line 1*:
                  <input size="40" name="ad1" type="text">
          </p></td>
          <td><p>Rep #1 Title*:
                  <input name="rep1title" type="text">
          </p></td>
        </tr>
        <tr>
          <td colspan="3"><p>Address Line 2:
                  <input size="40" name="ad2" type="text">
          </p></td>
          <td><p>Rep #1 Phone*: <br>
              (
                  <input name="rep1phone1" size="3" maxlength="3" type="text">
                  )
                  <input name="rep2phone2" size="3" maxlength="3" type="text">
                  -
                  <input name="rep1phone3" size="4" maxlength="4" type="text">
          </p></td>
        </tr>
        <tr>
          <td><p>City*: <br>
                  <input name="city" type="text">
          </p></td>
          <td><p>State*: <br>
                  <input name="st" size="2" maxlength="2" type="text">
          </p></td>
          <td><p>ZIP*: <br>
                  <input name="zip" maxlength="5" size="5" type="text">
          </p></td>
          <td><p>Rep #1 e-mail*:
                  <input name="rep1email" type="text">
          </p></td>
        </tr>
        <tr>
          <td colspan="3"><p>Website: <br>
              http://
                  <input size="60" name="website" type="text">
          </p></td>
          <td><p>Rep #2 Name:
                  <input name="rep2" type="text">
          </p></td>
          <td><p>Cal Alum?
                  <input name="cal2" value="yes" type="checkbox">
                  Yes</p></td>
        </tr>
        <tr>
          <td colspan="3"><p><b>Contact Person </b></p></td>
          <td><p></p>
              <p>Rep #3 Name:
                  <input name="rep3" type="text">
            </p></td>
          <td><p>Cal Alum?
                  <input name="cal3" value="yes" type="checkbox">
                  Yes</p></td>
        </tr>
        <tr>
          <td><p>Name*:
                  <input name="contactname" type="text">
          </p></td>
          <td colspan="2"><p>Title*:
                  <input name="contacttitle" type="text">
          </p></td>
          <td><p>Rep #4 Name:
                  <input name="rep4" type="text">
          </p></td>
          <td><p>Cal Alum?
                  <input name="cal4" value="yes" type="checkbox">
                  Yes</p></td>
        </tr>
        <tr>
          <td colspan="3"><p>Phone*: (
                  <input name="contactphone1" size="3" maxlength="3" type="text">
                  )
                  <input name="contactphone2" size="3" maxlength="3" type="text">
                  -
                  <input name="contactphone3" size="4" maxlength="4" type="text">
          </p></td>
          <td><p>Rep #5 Name:
                  <input name="rep5" type="text">
          </p></td>
          <td><p>Cal Alum?
                  <input name="cal5" value="yes" type="checkbox">
                  Yes</p></td>
        </tr>
        <tr>
          <td colspan="3"><p>E-mail*:
                  <input size="50" name="contactemail" type="text">
          </p></td>
          <td><p>Rep #6 Name:
                  <input name="rep6" type="text">
          </p></td>
          <td><p>Cal Alum?
                  <input name="cal6" value="yes" type="checkbox">
                  Yes</p></td>
        </tr>
        <tr>
          <td colspan="5"><p><b>Company Details </b></p></td>
        </tr>
        <script type="text/javascript">

/***********************************************
* Textarea Maxlength script- &copy; Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

function ismaxlength(obj){
var mlength=obj.getAttribute? parseInt(obj.getAttribute("maxlength")) : ""
if (obj.getAttribute && obj.value.length>mlength)
obj.value=obj.value.substring(0,mlength)
}

</script>
        <tr>
          <td colspan="5"><p>Company Description* (Max Length is 400 characters including spaces): <br>
                  <textarea name="description" cols="100" rows="5" maxlength="400" onkeyup="return ismaxlength(this)"></textarea>
          </p></td>
        </tr>
        <tr>
          <td><p>Company Emphasis(es)*: </p></td>
          <td><p>
              <input name="general" value="yes" type="checkbox">
              General Civil </p></td>
          <td><p>
              <input name="structural" value="yes" type="checkbox">
              Structural</p></td>
          <td><p>
              <input name="environmental" value="yes" type="checkbox">
              Environmental</p></td>
        </tr>
        <tr>
          <td><p></p></td>
          <td><p>
              <input name="construction" value="yes" type="checkbox">
              Construction</p></td>
          <td><p>
              <input name="transportation" value="yes" type="checkbox">
              Transportation</p></td>
          <td><p>
              <input name="geotechnical" value="yes" type="checkbox">
              Geotechnical</p></td>
        </tr>
        <tr>
          <td><p>Position(s) Available*: </p></td>
          <td><p>
              <input name="fulltime" value="yes" type="checkbox">
              Full Time </p></td>
          <td><p>
              <input name="internship" value="yes" type="checkbox">
              Internship(s)</p></td>
          <td><p>
              <input name="coop" value="yes" type="checkbox">
              Co-op</p></td>
        </tr>
        <tr>
          <td colspan="5"><p>Geographical Locations of Available Positions (Max Length is 500 characters including spaces):
                  <textarea name="geog" cols="100" rows="3" maxlength="500" onkeyup="return ismaxlength(this)"></textarea>
          </p></td>
        </tr>
        <tr>
          <td colspan="5"><p>Any comments, special accomodations, or specific requests (Max Length is 400 characters including spaces):
                  <textarea name="comments" cols="100" rows="5" maxlength="400" onkeyup="return ismaxlength(this)"></textarea>
          </p></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
<div align="center">
<td><input type="submit" name="Submit" value="Login"></td>
</div>
</body>
</html>
