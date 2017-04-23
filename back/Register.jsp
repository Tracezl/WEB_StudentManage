<%@ page language="java" contentType="text/html; charset=utf-8" import="java.util.*" pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>注册</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<script type="text/javascript">
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
	</script>
</head>
<body>
<center>

<h1>用户注册</h1>
<hr>
<h3>
<form  name="form1" action="UsersCl?flag=addUser"  method="post">
<label >学号:</label>
<input type="text" name="number" value="" ><br>
<label >姓名:</label>
<input type="text" name="name" value=""><br>
<label >密码:</label>
<input type="password" name="password" ><br>
<label >Q&nbsp;Q:</label>
<input type="text" name="QQ" value=""><br>
<label >手机:</label>
<input type="text" name="phone" value="">
<br>
<label>小组:</label>
<select name="group">
<option  value="学习组" >学习组</option>
<option selected="selected" value="硬件组">硬件组</option>
<option value="软件组1组">软件组1组</option>
<option value="软件组2组">软件组2组</option>
<option value="软件组3组">软件组3组</option>
</select><br><br>
<input type="hidden" name="grade" value="5">
<input type="submit" name="submit"  value="提交" onclick="return check()">
<input type="reset" name="reset"  value="重置">
</form>
</h3>
<hr>
 <h2><a href="Login.jsp">返回登陆</a>  <a href="Tool">退出</a></h2>
</center>
</body>
</html>