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
						</ul>
			</div>
			<div class="main"  >
				<form name="form1" action="ActivityCL?flag=add"  id="notice" method="post"><br>
				<center><input style="height:80px;width:480px;font-size:40px" type="text" value="活动名字" name="name"><br>
				<input style="height:50px;width:480px;font-size:40px" type="text" value="活动时间" name="time"><br>
				<input style="height:50px;width:480px;font-size:40px" type="text" value="活动地点" name="position"><br><br>
						<textarea style="height:350px;width:480px;font-size:40px" form="notice" name="content" >
						活动介绍
						</textarea><br>
						<input type="submit" value="提交"></center>
						</form> 
			</div>
		</div>
<jsp:include page="bottom.jsp"></jsp:include>