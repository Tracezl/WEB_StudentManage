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
								<li><a href="ClassSeekShow2.jsp">查询结果</a></li>
						</ul>
			</div>
			<div class="main">
				 <center>  
					  <h1>用户信息</h1><hr>
					  <%
					  
					    //调用UserBeanCl中的方法（创建一个UserBeanCl实例，然后调用它的某个方法），进行分页
					    //UserBeanCl ubc=new UserBeanCl();
					    //ArrayList al=ubc.getUsersByPage(pageNow);
					    //要显示的用后信息从request
					    String week=request.getParameter("week");
						String classNumCx=request.getParameter("classNum");	
					    ArrayList al=(ArrayList)request.getAttribute("result");
					   %>
					   <table border="1">
					   <tr id="head"><td>学号</td><td>姓名</td><td>星期</td><td>第几节课</td><td>课程名字</td></tr>   
					   <%
					   int pageNow=Integer.parseInt((String )request.getAttribute("pageNow"));//当前页码
					   System.out.println (al.size());
					     for(int i=0;i<al.size();i++){
					     ClassBean ub=(ClassBean)al.get(i);
					   %>    
					   <tr>
					   <td ><%=ub.getNumber()%></td>
					   <td><%=ub.getName()%></td>
					   <td><%=ub.getWeek()%></td>
					   <td><%= ub.getClassNum()%></td>
					   <td><%= ub.getClassCon()%></td>
					   </tr> 
					   <% }%> 
					  </table><br>
					  <h3>
					  <%
					  if(pageNow!=1){
					     out.println("<a href=UsersCl?flag=seek&pageNow="+(pageNow-1)+"&week="+week+"&classNum="+classNumCx+" >上一页</a>"); 
					  }
					  String s_pageCount=(String)request.getAttribute("pageCount");
					  int pageCount=Integer.parseInt(s_pageCount);
					  
					  for(int i=1;i<=pageCount;i++){
					   out.println("<a href=UsersCl?flag=seek&pageNow="+i+"&week="+week+"&classNum="+classNumCx+" >["+i+"]</a>");
					  }
					  if(pageNow!=pageCount&&pageCount!=0){
					     out.println("<a href=UsersCl?flag=seek&pageNow="+(pageNow+1)+"&week="+week+"&classNum="+classNumCx+" >下一页</a>"); 
					  }
					  %></h3>
					<h1> <a href="ClassSeek.jsp">继续查找</a></h1> 
				 </center>
			</div>
		</div>
<jsp:include page="bottom.jsp"></jsp:include>