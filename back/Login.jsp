<%@ page language="java" contentType="text/html; charset=utf-8" import="java.util.*" pageEncoding="utf-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>登录</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<link rel="stylesheet" type="text/css" href="css/style_login.css">
	<script type="text/javascript">
	<!-- 
	//使用js 
		function check(){
			if(form1.number.value==""){
			window.alert("用户名不能为空！");
			return false;
			}
			if(form1.passwd.value==""){
		    window.alert("密码不能为空！");
		    return false;
		 	}
		 	return true;
		}
	-->
	</script>
  </head> 
  <body>
  <%
        String num="用户名";
  		String pw="";
  		//从客户端COOK获取登录名和密码
  		Cookie [] allCookies=request.getCookies();
  		if(allCookies!=null){
			
			//从中取出cookie
			for(int i=0;i<allCookies.length;i++){		
				//依次取出
				Cookie temp=allCookies[i];		
				if(temp.getName().equals("number")){			
					//得到cookie的值
					num=temp.getValue();
				}
				else if(temp.getName().equals("mypasswd")){
					pw=temp.getValue();
				}			
			}
  		}
   %>
  
  <%
  		String err=request.getParameter("err");
  		if(err!=null){
  		
  			if(err.equals("1")){
   %>
   <script type="text/javascript">
  	window.alert("用户没有正常登陆，请登录！！");
  	</script>
   <%
  			}
  		}
  		String err2=request.getParameter("err2");
  		if(err2!=null){
  		
  			if(err2.equals("1")){
  	%>			
  	<script type="text/javascript">
  	window.alert("用户名或密码错误，请重新登录！！");
  	</script>
  	<%		
  		}
  		}
   %>
   <!-- 引入一张图片<img src="4.jpg"> -->	
 <br>
  <h1>用户登录</h1>
   <div class="contact-form">
  <div class="signin">
    <form name="form1" action="LoginCl" method="post">
    <input type="text" class="user" name="number" value="<%=num %>" onblur="if (this.value == '') {this.value = '用户名';}" >
    <input type="password"  class="pass" name="passwd" value="<%=pw %>">  
    <p><a href="Register.jsp">注册</a></p><hr>
    <p class="check"><input type="checkbox"  name=keep value=2>两周内不再重新登录</p>        
     </div>
    <input type="submit" value="登录" onclick="return check()">
    </form> 
     
      </div>
    <!-- 引入一张图片<img src="22.jpg"> -->
	
  </body>
</html>

