<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<link rel="stylesheet" type="text/css" href="css/rencai_li.css">
<script src="JS/jquery-3.4.1.min.js"></script>
<?php
$id=@$_GET['id'];
include("conn/conn.php");
$sql_rc_li="select * from rencai where id='$id' ";
$result_rc_li=mysql_query($sql_rc_li);
$rows_rc_li=mysql_fetch_array($result_rc_li);

?>

<body>
<div class="zong">
  <div class="top_1">
    <p>欢迎访问Dz照明有限公司官方网站！</p>
    <a href="admin/index.php"><u>登入</u></a> </div>
  <div class="top_2"> <img src="img/top_1.png">
    <h2>咨询热线:152-198-xxxxx</h2>
  </div>

  <div class="caidan" >
    <ul>
      <li><a href="index.php">网站首页</a></li>
      <li ><a href="chanpin.php">产品中心</a></li>
      <li><a href="xinwen.php">新闻中心</a></li>
      <li><a href="yingyong.php">应用领域</a></li>
      <li><a href="rencai.php">人才中心</a></li>
      <li><a href="lianxian.php">联系我们</a></li>
    </ul>
  </div>
<div class="zong_top"></div>

<div class="san_zong">
<div class="san_left">
<form id="form1" name="form1" method="post"  action="rencai_appok.php">
<table>
<tr>
  <td colspan="2"><div class="td_p">招贤纳士</div></td>
</tr>
<tr>
  <td class="td_1">姓名：</td>
  <td class="td_2"><input type="text" name="name" size="30" style="height:25px"></td>
</tr>
<tr>
  <td class="td_1">性别：</td>
  <td class="td_2"><select name="xing"><option>男</option><option>女</option></select></td>
</tr>
<tr>
  <td class="td_1">出生日期：</td>
  <td class="td_2"><input type="text" name="chu" size="30" style="height:25px"></td>
</tr>
<tr>
  <td class="td_1">婚姻：</td>
  <td class="td_2"><select name="hun"><option>未婚</option><option>已婚</option></select></td>
</tr>

<tr>
  <td class="td_1">毕业院校：</td>
  <td class="td_2"><input type="text" name="yuanxiao"size="30" style="height:25px"></td>
</tr>
<tr>
  <td class="td_1">最高学历：</td>
  <td class="td_2"><select name="zui"><option>初中</option><option>高中</option><option>大专</option><option>本科</option><option>研究生</option><option>博士</option></select></td>
</tr>
<tr>
  <td class="td_1">毕业专业：</td>
  <td class="td_2"><input type="text" name="zhuanye" size="30" style="height:25px"></td>
</tr>
<tr>
  <td class="td_1">毕业时间：</td>
  <td class="td_2"><input type="text" name="shijian" size="30" style="height:25px"></td>
</tr>
<tr>
  <td class="td_1">联系电话：</td>
  <td class="td_2"><input type="text" name="lian" size="30" style="height:25px"></td>
</tr>
<tr>
  <td class="td_1">通信地址：</td>
  <td class="td_2"><input type="text" name="tong" size="49" style="height:25px" ></td>
</tr>
<tr>
  <td class="td_1">专业特长：</td>
  <td class="td_2"><input type="text" name="zhuan" size="49" style="height:25px"></td>
</tr>
<tr >
  <td class="td_1">工作经历：</td>
  <td ><textarea name="gong" cols="51" rows="5"></textarea></td>
</tr>

<tr>
  <td colspan="2" style="padding-left:180px"><input type="submit"  value="确定" /></td>
</tr>


</table>

</form>

</div>

<div class="san_right">
<div class="img_top"></div>
<p>职位名称：<?php echo $rows_rc_li['name']; ?></p>
<p>职位类型<?php echo $rows_rc_li['zhiwei']; ?></p>
<p>工作经验:<?php echo $rows_rc_li['gongzuojingyan']; ?></p>
<p>学历要求：本科</p>
<p>招聘人数：<?php echo $rows_rc_li['renshu']; ?></p>
<p>发布时间：<?php echo $rows_rc_li['date']; ?></p>

<p style="margin:8px 0;">职位描述：<img src="img/xiabiao_1.jpg" width="12px" height="12px"></p>
<hr style="border:1px #CCCCCC solid">

<p style="margin:12px 0;"><?php echo $rows_rc_li['new1']; ?></p>

<hr style="border:1px #CCCCCC solid">
<p style="margin:8px 0;">招聘要求：<img src="img/xiabiao_1.jpg" width="12px" height="12px"></p>
<hr style="border:1px #CCCCCC solid">

<p style="margin:12px 0;"><?php echo $rows_rc_li['new2']; ?></p>

<hr style="border:1px #CCCCCC solid">


<p>联 系 人：<?php echo $rows_rc_li['lianxiren']; ?></p>
<p>联系电话：<?php echo $rows_rc_li['dianhua']; ?></p>
</div>




</div><!--  san_zong -->
<div class="weibu">
<div class="weibu_h2">
<h2>免费热线电话:152-198-xxxxx</h2>
</div>
<hr style="width:70%; margin:auto; background:#FFF; color:#FFF">

<div class="weibu_3">
<img src="img/weibu_2.jpg" alt="图片" style="padding-left:20%; float:left;">
<p>Copyright © 永久 All Rights Reserved Dz照明有限公司</p>
</div>

</div> 
</div><!--  zong -->
</body>
</html>