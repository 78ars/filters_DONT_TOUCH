<? include ("lock.php");
include ("blocks/bd.php");  ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>�������� �������� �����</title>
<style type="text/css">
@import url("style.css");
</style></head><body>	
<table width="690" border="0" align="center" class="main_border">
  <tbody> <? include ("blocks/header.php"); ?>	   
    <tr> <? include ("blocks/lefttd.php");  ?>
	     <td width="505" valign="top">
	 <p><form action="drop_lesson.php" method="post">
<?	 $result= mysql_query("SELECT id, title FROM lessons");
	 $myrow=mysql_fetch_array($result);
do {printf("<p><input type='radio' name='id' value='%s'><label>%s</label></p>", $myrow['id'], $myrow['title']); 
 }  while ($myrow=mysql_fetch_array($result));
	 ?> 	<p><input type="submit" name="submit" value="������� ����"> </p> 
	</p></td></tr><tr>
 	</form>	<? include ("blocks/footer.php"); ?></tr>
  </tbody></table></body></html>