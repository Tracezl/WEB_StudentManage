<%@ page language="java" import="java.util.*,jingganban.*" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>查询用户</title>
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
								<li><a href="ClassSeek.jsp">课表查询</a></li>
								<li>></li>
								<li><a href="ClassSeekShow1.jsp">查询结果</a></li>
						</ul>
			</div>
			<div class="main">
				 <center>
				   <h1>课表信息</h1><hr>
					  <%
					  String []q={"第一二节课","第三四节课","第五六节课","第七八节课","第九十节课"};
					    //要显示的用户信息从request
					    String result[][]=new String[5][7];
					    result=(String[][])request.getAttribute("result");
					   %>
					   <table border="1">
					   <tr id="head"><td></td><td>星期一</td><td>星期二</td><td>星期三</td><td>星期四</td><td>星期五</td><td>星期六</td><td>星期天</td>
					   </tr>   
					   <%
					     //定义颜色数组
					     String []color={"silver","pink"};
					     for(int i=0;i<5;i++){
					   %>    
					   <tr bgcolor="<%=color[i%2] %>">
					   <td><%= q[i]%></td>
					   <td><%= result[i][0]%></td>
					   <td><%= result[i][1]%></td>
					   <td><%= result[i][2]%></td>
					   <td><%= result[i][3]%></td>
					   <td><%= result[i][4]%></td>
					   <td><%= result[i][5]%></td>
					   <td><%= result[i][6]%></td>
					   </tr> 
					   <% }%> 
					  </table><br>
					<h1> <a href="ClassSeek.jsp">继续查找</a></h1> 
				 </center>
			</div>
		</div>
<jsp:include page="bottom.jsp"></jsp:include>