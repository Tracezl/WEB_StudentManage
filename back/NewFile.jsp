<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理用户</title>
<script type="text/javascript">
 	<!--
 	    function abc(){
 		return window.confirm("你真的要删除吗？");
 		}
 	 -->
 	</script>
 	
 		<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
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
			<div class="main">
				 <center>
				   <h1>请选择操作<br> <br> 
				   <a href="UsersCl?pageNow=1&flag=fenye" name="manage">管理用户</a> <br>
				   <a href="Register.jsp">添加用户</a><br>
				   <a href="Seek.jsp">查找用户</a><br>
				   <a href="ClassAdd.jsp">添加课表</a><br>
				   <a href="ClassSeek.jsp">查找课表</a><br>
				   <a href="ClassCl?flag=classUpdate">修改课表</a><br>
				   <a href="Tool">注销用户</a><br>
				  </h1>
				 </center>
			</div>
		</div>
<jsp:include page="bottom.jsp"></jsp:include>