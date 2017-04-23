<%@ page language="java" import="java.util.*,jingganban.*" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>公告</title>
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
								<li><a href="ActivityCL?pageNow=1&flag=seek">留言查询</a></li>
						</ul>
			</div>
			<div class="main">
				 <center>  
						 <h1>公告</h1><hr>
							  <%
							    ArrayList al=(ArrayList)request.getAttribute("result");
							  int id=0;
							   %>
							   <table border="1">
							   <tr id="head"><td>ID</td><td>内容</td><td>修改</td><td>删除</td>
							   </tr>   
							   <%
							   int pageNow=Integer.parseInt((String )request.getAttribute("pageNow"));//当前页码
							     for(int i=0;i<al.size();i++){
							     NoticeBean ub=(NoticeBean)al.get(i);
							   %>    
							   <tr >
							   <td ><%=ub.getId()%></td>
							   <td><%=ub.getContent()%></td>
							   <td><a href="NoticeCL?flag=UpdateById&id=<%=ub.getId()%>">修改公告</a></td>
							   <td><a onclick="return abc();" href="NoticeCL?flag=DelbyId&Id=<%=ub.getId()%>">删除公告</a></td>
							   </tr> 
							   <% }%> 
							  </table><br>
							  <h3>
							  <%
							  if(pageNow!=1){
							     out.println("<a href=NoticeCL?flag=seek&pageNow="+(pageNow-1)+" >上一页</a>"); 
							  }
							  String s_pageCount=(String)request.getAttribute("pageCount");
							  int pageCount=Integer.parseInt(s_pageCount);
							  
							  for(int i=1;i<=pageCount;i++){
							   out.println("<a href=NoticeCL?flag=seek&pageNow="+i+" >["+i+"]</a>");
							  }
							  if(pageNow!=pageCount&&pageCount!=0){
							     out.println("<a href=NoticeCL?flag=seek&pageNow="+(pageNow+1)+" >下一页</a>"); 
							  }
							  %><br><br><br><br>
				 </center>
			</div>
		</div>
<jsp:include page="bottom.jsp"></jsp:include>