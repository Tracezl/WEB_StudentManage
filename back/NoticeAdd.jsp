<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>公告管理</title>

<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<style type="text/css">

body {
	background-color: #D7EDFB;
}

</style>
<%
      //防止用户非法登陆
      String u=(String)session.getAttribute("grand");
      //如果用户没有登录
      if(u==null){
      response.sendRedirect("Login.jsp?err=1");
      return ;
      }
   %>
</head>
<jsp:include page="top.jsp"></jsp:include>
		<div class="m-right">
			<div class="right-nav">
					<ul>
							<li><img src="images/home.png"></li>
								<li style="margin-left:25px;">您当前的位置：</li>
								<li><a href="Main.jsp">主界面</a></li>
								<li>></li>
								<li><a href="NoticeAdd.jsp">发布公告</a></li>
						</ul>
			</div>
			<div class="main" style="background:#D7EDFB" >
				 <table  width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#D7EDFB">
				  <tr>
				    <td bgcolor="#D7EDFB">&nbsp;</td>
				    <td bgcolor="#D7EDFB"><img src="images/t1.jpg" width="470" height="52"></td>
				    <td bgcolor="#D7EDFB">&nbsp;</td>
				  </tr>
				  <tr>
				    <td bgcolor="#D7EDFB"><img src="images/t2.jpg" width="55" height="61"></td>
				    <td background="images/t31.jpg"><div align="center"><img src="images/t3.jpg" width="470" height="61"></div></td>
				    <td bgcolor="#D7EDFB"><img src="images/t4.jpg" width="59" height="61"></td>
				  </tr>
				  <tr>
				    <td background="images/t5.jpg">&nbsp;</td>
				    <td height="400" bgcolor="#D7EDFB">
				    	<form name="form1" action="NoticeCL?flag=add"  id="notice" method="post">
						<textarea style="height:400px;width:480px;background:#D7EDFB;" form="notice" name="content">
						</textarea>
						<center><input type="submit" value="提交"></center>
						</form> 
					</td>
				    <td background="images/t6.jpg">&nbsp;</td>
				  </tr>
				  <tr>
				    <td bgcolor="#D7EDFB"><img src="images/t7.jpg" width="55" height="61"></td>
				    <td background="images/t9.jpg">&nbsp;</td>
				    <td bgcolor="#D7EDFB"><img src="images/t8.jpg" width="59" height="61"></td>
				  </tr>
				</table>
			</div>
		</div>
<jsp:include page="bottom.jsp"></jsp:include>