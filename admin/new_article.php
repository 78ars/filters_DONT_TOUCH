<? include ("lock.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>�������� ���������� �����</title>
<style type="text/css">
@import url("style.css");
</style>
</head>
<body>	
<table width="690" border="0" align="center" class="main_border">
  <tbody> <? include ("blocks/header.php"); ?>	   
    <tr> <? include ("blocks/lefttd.php");  ?>
	     <td width="505" valign="top"><p>
  <form name="form1" action="add_article.php" method="post">
	<label>������� �������� �����<br>
    <input type="text" name="title" id="title" >
  </label>  <label>  <br>
   ������� ������� �������� �����<br>
   <input type="text" id="meta_d" name="meta_d"><br></label>
	������� �������� �����<br>
	<input type="text" id="meta_k" name="meta_k"><br>
	������� ���� ������ �����<br>
	<input type="date" id="date" name="date"><br>
   ������� �������� �����<br>
    <textarea name="description" cols="40" rows="5" maxlength="80" id="description" title="��������"></textarea><br>
	������� ����� �����<br>
   <textarea name="text" cols="40" rows="10" maxlength="200" id="text" title="text"></textarea><br>
  ������� ������<br>
  <input type="text" id="author" name="author"> <br>
  <input type="submit" name="submit" id="submit"  value="��������� ���� � ����">
			 </form> </p></td>  </tr>
	<tr><? include ("blocks/footer.php"); ?></tr>
  </tbody></table></body></html>