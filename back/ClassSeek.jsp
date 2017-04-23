<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>课表查询</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

<script type="text/javascript">
	<!-- 
	//使用js 
		function check(){
		if(Math.round(form1.number.value)!=form1.number.value){
			window.alert("请正确输入学号");
			return false;
		}
		if(form1.number.value==""){
			window.alert("学号不能为空！");
			return false;
			}
			
		return true;
	}
-->
</script>
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
								<li><a href="ClassSeek,jsp">课表查询</a></li>
						</ul>
			</div>
			<div class="main">
				 <center>
				   <form  name="form1" action="ClassCl?flag=classSeekByNum"  method="post">
					<h3>通过学号查询</h3>
					<label> 学号：</label>
					<input type="text" name="number" value="" ><br>
					<input type="submit" name="submit"  value="提交" onclick="return check()" >
					<input type="reset" name="reset"  value="重置">
					</form>
					<hr>
					
					<form  name="form1" action="ClassCl?flag=classSeekByTime&pageNow=1"  method="post">
					<h3>通过时间查询</h3>
					<label>星期:</label>
					<select name="week">
					<option  value="星期一" selected="selected">星期一</option>
					<option  value="星期二">星期二</option>
					<option value="星期三">星期三</option>
					<option value="星期四">星期四</option>
					<option value="星期五">星期五</option>
					<option value="星期六">星期六</option>
					<option value="星期日">星期日</option>
					</select><br>
					<label>时间:</label>
					<select name="classNum">
					<option  value="第一二节课" selected="selected">一二节课</option>
					<option  value="第三四节课">三四节课</option>
					<option value="第五六节课">五六节课</option>
					<option value="第七八节课">七八节课</option>
					<option value="第九十节课">九十节课</option>
					
					</select><br>
					<input type="submit" name="submit"  value="提交" >
					<input type="reset" name="reset"  value="重置">
					</form>
				 </center>
			</div>
		</div>
<jsp:include page="bottom.jsp"></jsp:include>