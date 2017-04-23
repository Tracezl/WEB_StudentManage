<%@ page language="java" import="java.util.*,jingganban.*" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>查询活动</title>
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
								<li><a href="ActivityCL?pageNow=1&flag=seek">活动查询</a></li>
						</ul>
			</div>
			<div class="main">
				 <center>  
						 <h1>活动信息</h1><hr>
							  <%
							    ArrayList al=(ArrayList)request.getAttribute("result");
							  int id=0;
							   %>
							   <table border="1">
							   <tr id="head"><td>学号</td><td>姓名</td><td>手机号</td><td>QQ</td>
							   </tr>   
							   <%
							   int pageNow=Integer.parseInt((String )request.getAttribute("pageNow"));//当前页码
							     for(int i=0;i<al.size();i++){
							     Apply ub=(Apply)al.get(i);
							     id=ub.getId();
							   %>    
							   <tr >
							   <td ><%=ub.getNumber()%></td>
							   <td><%=ub.getName()%></td>
							   <td><%=ub.getPhoneNUm()%></td>
							   <td><%=ub.getQQ()%></td>
							   </tr> 
							   <% }%> 
							  </table><br>
							  <h3>
							  <%
							  if(pageNow!=1){
							     out.println("<a href=ActivityCL?flag=apply&id="+id+"&pageNow="+(pageNow-1)+" >上一页</a>"); 
							  }
							  String s_pageCount=(String)request.getAttribute("pageCount");
							  int pageCount=Integer.parseInt(s_pageCount);
							  
							  for(int i=1;i<=pageCount;i++){
							   out.println("<a href=ActivityCL?flag=apply&id="+id+"&pageNow="+i+" >["+i+"]</a>");
							  }
							  if(pageNow!=pageCount&&pageCount!=0){
							     out.println("<a href=ActivityCL?flag=apply&id="+id+"&pageNow="+(pageNow+1)+" >下一页</a>"); 
							  }
							  %><br>
				 </center>
			</div>
		</div>
<jsp:include page="bottom.jsp"></jsp:include>