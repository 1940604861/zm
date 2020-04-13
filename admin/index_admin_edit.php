<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php 
include"../conn/conn.php";
  $sql="select * from admin";
  $result=mysql_query($sql); 
  $rows=mysql_fetch_array($result);
?>
<body><form id="form1" name="form1" method="post" action="index_admin_editok.php">
<table width="400" border="1">
  <tr>
    <td>用户名</td>
    <td> <input type="text" name="name" id="textfield" width="300" value="<?php echo $rows['name'];?>" /></td>
  </tr>
  <tr>
    <td>密码</td>
    <td> <input type="text" name="pwd" id="textfield" width="300" value="<?php echo $rows['pwd'];?>" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="确定" /></td>
    <td><input type="reset" name="reset" id="button2" value="取消" /></td>
  </tr>
</table>
</form>
</body>
</html>