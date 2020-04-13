<?php
$host="127.0.0.1";
$userName="root";
$password="root";
$dbname="myby";
$connID=mysql_connect($host,$userName,$password);//mysql_connect是连接数据库  php 连接数据库三要素：数据库服务器ip地址、数据库用户名、数据库密码。 
mysql_query("set character set 'utf8'"); //设置字符集为utf8，解决中文乱码的问题
mysql_query("set names utf8");
if (mysql_select_db($dbname,$connID)){
 //echo"ok";
}else{
 //echo"no";
}
//mysql_query 这个函数一般的解释是查询数据库的连接
?>
