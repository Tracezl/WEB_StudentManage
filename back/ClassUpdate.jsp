<%@ page language="java" contentType="text/html; charset=utf-8" import="java.util.*" pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>修改课表</title>
	<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<style>
 input{
	width:180px;
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
<jsp:include page="bottom.jsp"></jsp:include>