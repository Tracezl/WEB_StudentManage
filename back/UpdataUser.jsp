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
		if(Math.round(form1.number.value)!=form1.number.value){
			window.alert("请正确输入学号");
			return false;
		}
		if(Math.round(form1.QQ.value)!=form1.QQ.value){
			window.alert("QQ只能是数字");
			return false;
		}
		if(Math.round(form1.phone.value)!=form1.phone.value){
			window.alert("手机号码只能是数字");
			return false;
		}
			if(form1.number.value==""){
			window.alert("学号不能为空！");
			return false;
			}
			
			if(form1.name.value==""){
				window.alert("姓名不能为空！");
				return false;
			}
			
			if(form1.password.value==""){
		    window.alert("密码不能为空！");
		    return false;
		 	}
			if(form1.group.value==""){
				window.alert("必须选择小组！");
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
 <%    
      UserBean ub=(UserBean)request.getAttribute("result");
      String pageNow=request.getParameter("pageNow");
   %>
		<div class="m-right">
			<div class="right-nav">
					<ul>
							<li><img src="images/home.png"></li>
								<li style="margin-left:25px;">您当前的位置：</li>
								<li><a href="Main.jsp">主界面</a></li>
								<li>></li>
								<li><a href="UsersCl?pageNow=1&flag=fenye" name="manage">管理用户</a> </li>
								<li>></li>
								<li><a href="UsersCl?flag=updataUser&userId=<%=ub.getUserId()%>&pageNow="+pageNow+"">修改用户1111</a> </li>
								
						</ul>
			</div>
			<div class="main">
				 <center>  
					<h1>修改用户信息</h1><h3>
						   <form  name="form1"  action="UsersCl?flag=updataUserCl"  method="post">
						<label >学号:</label>
						<input type="text" name="number" value="<%=ub.getUserId() %>" ><br>
						<label >姓名:</label>
						<input type="text" name="name" value="<%=ub.getUserName() %>"><br>
						<label >密码:</label>
						<input type="password" name="password" value="<%=ub.getPasswd()%>" ><br>
						<label >Q&nbsp;Q:</label>
						<input type="text" name="QQ" value="<%=ub.getQQ() %>"><br>
						<label >手机:</label>
						<input type="text" name="phone" value="<%=ub.getPhone() %>">
						<br>				 
						<label >小组：</label>
						<select name="group">
						<option selected="selected" value="<%=ub.getGroup() %>"><%=ub.getGroup() %></option>
						<option value="学习组" >学习组</option>
						<option value="硬件组">硬件组</option>
						<option value="软件组1组">软件组1组</option>
						<option value="软件组2组">软件组2组</option>
						<option value="软件组3组">软件组3组</option>
						</select> <br>
						<label >权限：</label>
						<input type="text" name="grade" value="5"><br>
						<input type="submit" name="submit"  value="提交" onclick="return check()">
						<input type="reset" name="reset"  value="重置">
						</form>	</h3>
				 </center>
			</div>
		</div>
 <jsp:include page="bottom.jsp"></jsp:include>