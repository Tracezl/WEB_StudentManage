<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
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
			<li><a href="http://localhost/html/index.php">返回前台</a></li>
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
		   <a href="ClassCl?flag=classSeekEveryTime">有课人数</a>          
           </div>
        </li>
        <li>
          <h4 class="M4"><span></span>公告管理</h4>
          <div class="list-item none">
           <a href="NoticeAdd.jsp">发布公告</a>
           <a href="NoticeCL?flag=seek&pageNow=1">公告查询</a>
		   <a href="NoticeCL?flag=Del">删除公告</a>
		   <a href="NoticeCL?flag=Update">修改公告</a>        
           </div>
        </li>
        <li>
          <h4 class="M5"><span></span>活动管理</h4>
          <div class="list-item none">
           <a href="ActivityAdd.jsp">发布活动</a>
		   <a href="ActivityCL?pageNow=1&flag=seek">活动信息</a>        
           </div>
        </li> 
        <li>
          <h4 class="M6"><span></span>留言管理</h4>
          <div class="list-item none">
		   <a href="MessageCL?flag=seek&pageNow=1">留言信息</a>        
           </div>
        </li>        							
  </ul>
</div>
	