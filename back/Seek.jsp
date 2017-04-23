<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户查询</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
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
								<li><a href="Seek.jsp">查找用户</a> </li>
								
						</ul>
			</div>
			<div class="main">
				 <center>  
					 <h1>欢迎查询</h1><hr>
						<form  name="form1" action="UsersCl?flag=seek&pageNow=1"  method="post">
						<label>通过</label>
						<select name="flagCx">
						<option value="number"selected="selected"  >学号</option>
						<option value="name">姓名</option>
						<option value="xiaozu">小组</option>
						<option value="grand">权限等级</option>
						</select><br>
						<label> &nbsp; &nbsp;&nbsp; &nbsp;</label>
						<input type="text" name="select" value="" ><br>
						<input type="submit" name="submit"  value="提交" >
						<input type="reset" name="reset"  value="重置">
						</form>
				 </center>
			</div>
		</div>
<jsp:include page="bottom.jsp"></jsp:include>