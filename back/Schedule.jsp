<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>课表管理</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
<%
      //防止用户非法登陆
      String u=(String)session.getAttribute("grand");
      //如果用户没有登录
      if(u==null){
      response.sendRedirect("Login.jsp?err=1");
      return ;
      }
   %>
 <input style=hidden value="<%=u%>" id=grand>   
   <div class="top"></div>
<div id="header">
	<div class="logo">菁干班后台管理系统</div>
	<div class="navigation">
		<ul>
		 	<li>欢迎您！</li>
			<li><a href=""><%=(String)session.getAttribute("number")%></a></li>
			<li><a href="passwdUpdate.jsp">修改密码</a></li>
			<li><a href="">设置</a></li>
			<li><a href="Tool">退出</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div class="left_menu">
				<ul id="nav_dot">
      <li>
          <h4 class="M1"><span></span>用户管理</h4>
          <div class="list-item none">
            <a href="UsersCl?pageNow=1&flag=fenye" name="manage">管理用户</a>
            <a href="Register.jsp">添加用户</a>
   			<a href="Seek.jsp">查找用户</a>
          </div>
        </li>
        <li>
          <h4 class="M2"><span></span>课表管理</h4>
          <div class="list-item none">
           <a href="ClassAdd.jsp">添加课表</a>
		   <a href="ClassSeek.jsp">查找课表</a>
		   <a href="ClassCl?flag=classUpdate">修改课表</a>         
           </div>
        </li>       							
  </ul>
		</div>
		<div class="m-right">
			<div class="right-nav">
					<ul>
							<li><img src="images/home.png"></li>
								<li style="margin-left:25px;">您当前的位置：</li>
								<li><a href="Main.jsp">主界面</a></li>
								<li>></li>
								<li><a href="ClassCl?flag=classUpdate">修改课表</a> </li>
								
						</ul>
			</div>
			<div class="main">
				 <center>  
					 <h1>修改课表</h1>
						<form  name="form1" action="ClassCl?flag=classUpdateCl"  method="post">
						<table border="1">
						   <tr id="head"><td></td><td>星期一</td><td>星期二</td><td>星期三</td><td>星期四</td><td>星期五</td><td>星期六</td><td>星期天</td>
						   </tr>
						   
						   <%
						      //定义列数组
						   String []q={"第一二节课","第三四节课","第五六节课","第七八节课","第九十节课"}; 
						   String result[][]=new String[5][7];
						   result=(String[][])request.getAttribute("result");
						     for(int i=0;i<5;i++){
						   %>    
						   <tr >
						   <td><%= q[i]%></td>
						   <td><input type="text" name="one<%=i%>" value="<%= result[i][0]%>"></td>
						   <td><input type="text" name="two<%=i%>" value="<%= result[i][1]%>"></td>
						   <td><input type="text" name="three<%=i%>" value="<%= result[i][2]%>"></td>
						   <td><input type="text" name="four<%=i%>" value="<%= result[i][3]%>"></td>
						   <td><input type="text" name="five<%=i%>" value="<%= result[i][4]%>"></td>
						   <td><input type="text" name="six<%=i%>" value="<%= result[i][5]%>"></td>
						   <td><input type="text" name="seven<%=i%>" value="<%= result[i][6]%>"></td>
						   </tr> 
						   <% }%> </table>
						   
						<input type="submit" name="submit"  value="提交" onclick="return check()">
						<input type="reset" name="reset"  value="重置">
						</form>
				 </center>
			</div>
		</div>
</div>
<div class="bottom"></div>
<div id="footer"><p>Copyright©  2016 版权所有  </p></div>
<script>navList(12);</script>

 <hr><center>
   <h1>课表管理</h1><hr>
   <h3>请选择操作<br> <br> </h3>
   <a href="UsersCl?pageNow=1&flag=fenye">管理用户</a> <br>
   <a href="Register.jsp">添加用户</a><br>
   <a href="Seek.jsp">课表查询</a><br>
   <a href="UsersCl?pageNow=1&flag=fenye">课表管理</a>
   <a href="Tool">注销用户</a><br>
  
   <hr>
    </center>
</body>
</html>