<%@ page language="java" import="java.util.*,jingganban.*" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>信息修改</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<script type="text/javascript">
	<!-- 
	//使用js 
		function check(){		
			if(form1.password.value==""){
		    window.alert("请输入密码！");
		    return false;
		 	}
			if(form1.passwordNew.value==""){
			    window.alert("新密码不能为空！");
			    return false;
			 	}
			if(form1.passwordNew.value!=form1.passwordNew1.value){
			    window.alert("两次密码不一样！");
			    return false;
			 	}
		 	return true;
		}
	-->
	</script>
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
								<li><a href="UsersCl?pageNow=1&flag=fenye" name="manage">管理用户</a> </li>
								<li>></li>
								<li><a href="passwdDate.jsp">修改密码</a> </li>
								
						</ul>
			</div>
			<div class="main">
				 <center>  
					<h1>修改密码</h1><h3>
						   <form  name="form1"  action="UsersCl?flag=passwdUpdate"  method="post">
						<label >&nbsp;&nbsp;原密码:</label>
						<input type="password" name="password"  ><br>
						<label >&nbsp;&nbsp;新密码:</label>
						<input type="password" name="passwordNew"  ><br>
						<label >确认密码:</label>
						<input type="password" name="passwordNew1" ><br>
			
						<input type="submit" name="submit"  value="提交" onclick="return check()">
						<input type="reset" name="reset"  value="重置">
						</form>	</h3>
				 </center>
			</div>
		</div>
<jsp:include page="bottom.jsp"></jsp:include>