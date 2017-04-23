<?php header("Content-Type:text/html;charset=gb2312");?>

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>菁干班</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--//<meta name="keywords" content="Hitech Info a Responsive Web Template, Bootstrap Web Templates, Flat Web //Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, //Sony Ericsson, Motorola Web Design">-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> 		<link rel="stylesheet" href="css/bootstrap.min.css" 	type="text/css" media="all">
<!-- Index-Page-CSS --> 	<link rel="stylesheet" href="css/style.css" 			type="text/css" media="all">
<!-- Gallery-Popup-CSS --> 	<link rel="stylesheet" href="css/chocolat.css" 		type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Web-Fonts -->
<!-- Body-Font --> <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' type='text/css'>
<!-- //Web-Fonts -->

</head>
<!-- //Head -->



<!-- Body -->
<body>
<!-- Header -->
	<div class="header" id="home">

		<div class="slider-info">
			<div class="logo">
				<a href="#">菁干班</a>
			</div>

			<div class="side">
				<nav class="dr-menu">
					<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span></div>
					<ul>
						<li><a class="scroll dr-icon dr-icon-user" href="#about">公告</a></li>
						<li><a class="scroll dr-icon dr-icon-camera" href="#services">关于我们</a></li>
						<li><a class="scroll dr-icon dr-icon-bullhorn" href="#pricing">活动预告</a></li>
						<li><a class="scroll dr-icon dr-icon-heart" href="#team">社团之星</a></li>
						<li><a class="scroll dr-icon dr-icon-download" href="#projects">活动展示</a></li>
						<li><a class="scroll dr-icon dr-icon-settings" href="#testimonial">留言区</a></li>
						<li><a class="scroll dr-icon dr-icon-switch" href="http://localhost:8080/member_management/Main.jsp">后台管理</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="slider">
			<!-- Slider1 -->
			<div class="slider-1">
				<ul class="rslides" id="slider1">
					<li>
						<img src="images/s1.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/s2.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/s3.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/s4.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/s5.jpg" alt="Hitech Info">
					</li>
				</ul>
			</div>
			<!-- //Slider1 -->
		</div>
		<div class="clearfix"></div>

	</div>
	<!-- //Header -->
	<!-- About -->
	<div class="about" id="about">
		<div class="container">

			<h1>公告</h1>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>

		<!--	<div class="col-md-6 col-sm-6 about-details">		-->
			<div>
				<div class="about-image">
					<!--<img src="images/ss.jpg" alt="Hitech Info">-->
					<b><span><pre><?php include 'Notice.php';echo $notice[0][1]; ?></pre></span></b>
					
				</div>
				<div class="about-info">
					<p>	2016年12月28日，D503开会，成员：本次新加入的新同学以及大三的干部。</p>
		
				</div>
		<!--		<div class="clearfix"></div>		-->
			</div>

		<!-- Skills -->
<!--			<div class="col-md-6 col-sm-6 skills">

				<div id="about-us" class="parallax">
					<h2>我们的成员分布情况</h2>
				<div class="heading-underline">
					<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
				</div>
					<div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<p class="lead">LOREM IPSUM</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="90">90%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
							<p class="lead">DOLORES AMET</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="80">80%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
							<p class="lead">CONSECTETUR</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="70">70%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<p class="lead">ADIPISICING</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="75">75%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<p class="lead">EXERCITATION</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="85">85%</div>
							</div>
						</div>
					</div>

					<!-- Tooltip -->
<!--					<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">EXPLORE<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>

					<div class="tooltip-content">

						<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">HITECH INFO</h4>
									</div>
									<div class="modal-body">
										<img src="images/about.jpg" alt="Hitech Info">
										<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
									</div>
								</div>
							</div>
						</div>

						<script>
							$('#myModal').modal('');
						</script>

					</div>
					<!-- //Tooltip -->
<!--
				</div>

			</div>  
		<!-- //Skills -->
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">详细说明<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>

					<div class="tooltip-content">

						<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>   
										<h4 class="modal-title">公告详细</h4>
									</div>
									<div class="modal-body">
										<b><span><pre><?php echo $notice[1][1]; ?></pre></span></b>
									</div>
								</div>
							</div>
						</div>		
					</div>
					
					
					
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //About -->














	<!-- Services -->
	<div class="services" id="services">
		<div class="container">

			<h3>关于我们</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>

<!--			<div class="service-grids">
				<div class="col-md-4 col-sm-4 service-grid service-grid-1">
					<img src="images/service-1.png" alt="Hitech Info">
					<h4>LOREM IPSUM</h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
				<div class="col-md-4 col-sm-4 service-grid service-grid-2">
					<img src="images/service-2.png" alt="Hitech Info">
					<h4>DOLORES AMET</h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
				<div class="col-md-4 col-sm-4 service-grid service-grid-3">
					<img src="images/service-3.png" alt="Hitech Info">
					<h4>CONSECTETURS</h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
				<div class="clearfix"></div>
			</div>
-->
		<div><center>
		  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="550" height="400">
            <param name="movie" value="images/flash4994.swf">
            <param name="quality" value="high">
            <embed src="images/flash4994.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="550" height="400" ></embed>
          </object></center>
		</div>
		
		
<!--		<div class="video_main dw">
            <ul>
                <li class="video_main_video left">
                    <video id="videoPlay1" width="550" height="400" src="images/flash4994.swf" poster="images/about.jpg" loop="loop" x-webkit-airplay="true" webkit-playsinline="true">
                       
                    </video>
                </li>
            </ul>
        </div>  
		<script>
		var video1=document.getElementById("cideoPlay1");

video1.onclick=function(){
    if(video1.paused){
        video1.play();
    }else{
        video1.pause();
    }
}
		</script>
-->		
		
		
		
		
		</div>
	</div>
	<!-- //Services -->



<!-- Pricing -->
	<div class="pricing" id="pricing">
		<div class="container">

	<?php if(!empty($_GET['error'])&&$_GET['error']=="2")
	{
			echo '<script type="text/javascript">
	  	window.alert("报名失败！！");
	  	</script>';
	}
	if(!empty($_GET['success'])&&$_GET['success']=="2"){
		?>
	<script type="text/javascript">
	  	window.alert("报名成功！！");
	  	</script>
	  	<?php 
	  	}
	  	?>

			<h3>活动预告</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>
			<script type="text/javascript">
		 	    function activityId(b){
		 	    	document.getElementById("applyId").value=b;
		 		} 

		 	   function check(){
					if(Math.round(form1.QQ.value)!=form1.QQ.value){
						window.alert("QQ只能是数字");
						return false;
					}
					if(Math.round(form1.phoneNum.value)!=form1.phoneNum.value){
						window.alert("手机号只能是数字");
						return false;
					}
					if(Math.round(form1.number.value)!=form1.number.value){
						window.alert("学号只能是数字");
						return false;
					}		
				 	return true;
				}
		 	</script>
			<div class="pricing-grids">
				
				<?php include_once 'ApplySelect.php';
				for ($i=0;$i<$applyNum;$i++)
				{
					if($i%2==0)
						echo '<div class="grid1">';
					else 
						echo '<div class="grid2">';
					echo "<h4>".$apply[$i][1]."</h4> ";
					
					
				?>
				<ul class="para">
				<li>时间：
				<?php 
				echo $apply[$i][2];//
				?>
				</li>
				<li>地点：
				<?php 
				echo $apply[$i][3];//
				?>
				</li>
				<li>内容：
				<?php 
				echo $apply[$i][4];//
				?>
				</li>
					</ul>
					<div class="sign text-center">
					<a onclick="return activityId(<?php echo $apply[$i][0]; ?>);" class="popup-with-zoom-anim" href="#small-dialog">报名</a>
					</div>
				</div>
				<?php 	
				}?>				
				<div class="clearfix"></div>

				<!-- Popup-Box -->
				<div id="popup" style="width: 45px;">
					<div id="small-dialog" class="mfp-hide" style="width: 300px;">
						<div class="pop_up">
							<div class="payment-online-form-left">
								<form name="form1" action="Apply.php" method="post">
									<h4><span class="shipping"> </span>学生详细资料</h4>
									<ul>	
										<li><input name="number" class="text-box-dark" type="text" value="学号" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '学号';}"></li>
										<li><input id="applyId" name="id" class="text-box-dark" type="hidden" value="0" ></li>
									</ul>
									<ul>
										<li><input name="name" class="text-box-dark" type="text" value="名字" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '名字';}"></li>							
									</ul>
									<ul>
										<li><input name="QQ" class="text-box-dark" type="text" value="QQ" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'QQ';}"></li>										
									</ul>	
									<ul>
										<li><input name="phoneNum" class="text-box-dark" type="text" value="手机号" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '手机号';}"></li>
									</ul>
									<ul class="payment-sendbtns">
										<li><input type="reset" value="重置"></li>
                                        <li><input type="submit" name="submit" value="提交" onclick="return check()"/></li>
									</ul>
									<div class="clear"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
				<!-- //Popup-Box -->

			</div>
			
		</div>
	</div>
	<!-- //Pricing -->



	<!-- Team -->
	<div class="team" id="team">
		<div class="container">

			<h3>社团之星</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>
			<p class="team-p">经过学校领导和社团学生干部长期的考察，以下学生在社团工作、学习成绩、生活作风表现优异，综合能力强，他们办事干脆果断，敢于创新，善于处理人际关系，有较强的组织能力与团结协作能力，所以被评为”社团之星“有如下几位：</p>

			<div class="team-grids">			
				<div class="ch-grid">
					<div class="col-md-3 col-sm-3 team-grid team-grid1">
						<div class="ch-item ch-img-1">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
                                    <div class="sign text-center">
						<h4 class="popup-with-zoom-anim" href="#small-dialog1">赵磊</h4>
                        </div>					 
										<!--<h4><a href="#">赵磊</a></h4>-->										<p>信工学院</p>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 team-grid team-grid2">
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
                                       <div class="sign text-center">
                                    <h4 class="popup-with-zoom-anim" href="#small-dialog2">朱雀</h4>
					 </div>
										<!--<h4>RACHEL JONES</h4>-->
										<p>文法学院</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 team-grid team-grid3">
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
                                     <div class="sign text-center">
                                    <h4 class="popup-with-zoom-anim" href="#small-dialog3">吴倩</h4>
					 </div>
										<!--<h4>KRISTEN BELL</h4>-->
										<p>艺术学院</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 team-grid team-grid4">
						<div class="ch-item ch-img-4">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-4"></div>
									<div class="ch-info-back">
                                     <div class="sign text-center">
                                    <h4 class="popup-with-zoom-anim" href="#small-dialog4">陈逸飞</h4>
					 </div>
										<!--<h4>WILLIAM HANNAH</h4>-->
										<p>土建学院</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- //Team -->
	
    		<!-- Popup-Box -->
				<div id="popup">
					<div id="small-dialog1" class="mfp-hide">
						<!--<div class="pop_up">
							<div class="payment-online-form-left">-->
								<form>
									<h4><span class="shipping"> </span>个人简介</h4>
									<ul>
										<li>&nbsp;&nbsp;赵磊，男，1991年2月生，南昌航空大学08级化院本科生，38届国际奥赛化学金牌得主，南昌航空大学大学前校草，现任美国Incyte公司研究人员[1]? 。2013年1月，网友在某社交网站上发布了他的一张照片，引发了网友围观，大呼这是“现实版江直树”。 更有“凶残”的网友调侃叶钦达长得有点像“李云迪和王力宏的儿子”，很多女生更纷纷表白自己曾经的暗恋心情 。</li>
										<li></li>
									</ul>
									<ul>
										
									</ul>
								</form>
                                </div>
                                </div>

				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
				<!-- //Popup-Box -->
	
    		<!-- Popup-Box -->
				<div id="popup">
					<div id="small-dialog2" class="mfp-hide">
						<div class="pop_up">
							<div class="payment-online-form-left">
								<form>
									<h4><span class="shipping"> </span>个人简介</h4>
									<ul>
										<li>&nbsp;&nbsp;朱雀，女，1992年4月出生，担任南昌航空大学学院党支部小组成员，学生会外联部干事，10电商班宣传委员一职。入校以来，严格遵守各项规章制度，做好模范带头作用。平时能够妥善处理好班级工作、学生会工作和党小组工作之间的关系，在思想、学习、工作等方面取得了较大的进展。 一、思想积极要求上进，不断提高政治素养

平时能认真学习马列主义、毛泽东思想、邓小平理论和“三个代表”重要思想，并且努力践行“三个代表“，不断提高自身政治修养。思想健康、活跃，作为党支部成员，认真组织好每次的支部活动，而且能积极调动大家的思想，引导非团员积极向团组织靠拢，做好优秀团员向党组织推荐工作，已被评为“优秀学生干部”。入校后就向党组织递交了入党申请书，定期向党组织汇报思想，处处以党员的标准来严格要求自己。最终成为一名正式党员。
</li>
										<li></li>
									</ul>
									<ul>
										
									</ul>
								</form>
							</div>
						</div>
					</div>
				</div>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			<!-- //Popup-Box -->
    		<!-- Popup-Box -->
				<div id="popup">
					<div id="small-dialog3" class="mfp-hide">
						<div class="pop_up">
							<div class="payment-online-form-left">
								<form>
									<h4><span class="shipping"> </span>个人简介</h4>
									<ul>
										<li>&nbsp;&nbsp;吴倩，1993年2月生从入学以来，该生一直从各方面严格要求自己，积极向党组织靠拢，勤奋学习，刻苦钻研，生活节俭，工作认真，努力使自己成为一名德智体全面发展的优秀大学生。在校院领导老师的辛勤教育指导下，我明确了自己人生发展的目标，坚定了理想和信念，激励自己不断向高素质人才靠拢，并坚持不懈地为之努力奋斗。该生思想上的进取，自觉努力学习马列主义、毛泽东思想、邓小平理论和“三个代表”重要思想，坚持科学发展观，不断地扩充自己的思想政治知识，在思想上、政治上、行动上积极向党组织靠拢。并参加了党校学习，顺利毕业，现在成为一名预备党员。
在工作中，该生努力做好自己的本职工作，并能积极配合其他党员和学生干部，共同搞好班级管理工作。
在学习上，该生能够做到带头勤奋学习，刻苦钻研，努力学习本专业知识与技能，不断提高自身科学文化素养。并多次获得了校三好生及优秀团员。</li>
										
									</ul>
								
								</form>
							</div>
						</div>
					</div>
				</div>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			<!-- //Popup-Box -->>

    		<!-- Popup-Box -->
				<div id="popup">
					<div id="small-dialog4" class="mfp-hide">
						<div class="pop_up">
							<div class="payment-online-form-left">
								<form>
									<h4><span class="shipping"> </span>个人简介</h4>
									<ul>
										<li>&nbsp;&nbsp; 陈逸飞，男，汉族，1994年出生于山东青岛。现就读于土建学院学院社会科学系级土木工程专业。担任12级土木工程1班班长，是文学系学团会成员，同时也是优秀共青团员，并在2013年党员积极分子考核中成功通过。该同学为人谦虚坦诚，性格开朗，学习成绩优良，工作认真务实，能够真正为同学树立模范、起带头作用。进入大学以来，她严格要求自己，先后获得了优秀班干部称号和国家三等奖学金。</li>
										
									</ul>
								
								</form>
							</div>
						</div>
					</div>
				</div>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
	<!-- //Team -->


<!-- Projects -->
<div class="projects" id="projects">

<h3>活动展示</h3>
<div class="heading-underline">
<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
</div>

<div class="gallery-items">
<div class="col-md-2 col-sm-2 gallery-item gallery-item-1">
<a class="example-image-link" href="images/1-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/1.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-2">
<a class="example-image-link" href="images/2-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/2.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-3">
<a class="example-image-link" href="images/3-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/3.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-4">
<a class="example-image-link" href="images/4-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/4.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-5">
<a class="example-image-link" href="images/5-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/5.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-6">
<a class="example-image-link" href="images/6-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/6.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-7">
<a class="example-image-link" href="images/7-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/7.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-8">
<a class="example-image-link" href="images/8-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/8.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-9">
<a class="example-image-link" href="images/9-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/9.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-10">
<a class="example-image-link" href="images/10-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/10.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-11">
<a class="example-image-link" href="images/11-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/11.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="col-md-2 col-sm-2 gallery-item gallery-item-12">
<a class="example-image-link" href="images/ 12-big.jpg" data-lightbox="example-set" data-title="">
<div class="grid">
<figure class="effect-apollo">
<img src="images/12.jpg" alt="Hitech Info">
<figcaption></figcaption>
</figure>
</div>
</a>
</div>
<div class="clearfix"></div>
</div>

</div>
<!-- //Projects -->



<!-- Testimonial -->
<div class="testimonial" id="testimonial">
<div class="container">

<?php if(!empty($_GET['error'])&&$_GET['error']=="1")
{
	
		echo '<script type="text/javascript">
  	window.alert("留言失败！！");
  	</script>';
}
if(!empty($_GET['success'])&&$_GET['success']=="1")
{
	echo '<script type="text/javascript">
  	window.alert("留言成功！！");
  	</script>';
}
?>


<h3>留言区</h3>
<div class="heading-underline">
<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
</div>

<!-- Slider2 -->
<div class="slider2" >
<ul class="rslides" id="slider2" style="height: 200px;">
<?php include_once 'MessageSelect.php';
for ($i=0;$i<$messageNum/3;$i++)
{
?>
<li>
<?php 
for($j=0;$j<3;$j++)
{
	if($i*3+$j>=$messageNum)
		break;
	echo "<p>".$message[$i*3+$j][1]."</P><br><br>";
}
?>
</li>
<?php }?>
</ul>
</div>
<!-- //Slider2 -->
	
</div>
</div>
<!-- //Testimonial -->



<!-- Hitech Infosletter -->
<div class="newsletter" id="newsletter">
<div class="container">
<div class="new-grids">
<!-- <div class="col-md-6 col-sm-6 subscribe">
<p>留言</p>
</div>-->
<div class="col-md-11 col-sm-6 email-form">
<center><form action="MessageAdd.php" method="post">
<input class="email" type="text" name="content" placeholder="说点什么吧···">
<input type="submit" class="submit" value="发表">
</form>
</center>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<!-- //Hitech Infosletter -->
<!-- Social -->
	<div class="copyright">
	<div style="margin:0px auto;padding:20px 0 0 20px;width:980px;text-align:center;font-size:18px;color:white">

			<!--<div class='ll'>-->
				<p><h2>南昌航空大学菁干班</h2></p> 
                <p>地址:江西省南昌市丰和南大道696号</p>
                <p>邮编: 100872</p>
                <p>电话: 123456789</p>
                <p>官方网址:www.nchu.com</p>
	</div>
	<!-- //Social -->

	<!-- Copyright -->
		<p>&copy; 2016 第三小组.</p>
	</div>
	<!-- //Copyright -->




<!-- Custom-JavaScript-File-Links -->

<!-- Supportive-JavaScript --> 			 <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Necessary-JS-File-For-Bootstrap --> <script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Slider-JavaScript -->
<script src="js/responsiveslides.min.js"></script>
<script>
$(function () {
	$("#slider1, #slider2, #slider3").responsiveSlides({
		auto: true,
		nav: true,
		speed: 1500,
		namespace: "callbacks",
		pager: true,
	});
});
	</script>
	<!-- //Slider-JavaScript -->

	<!-- Sliding-Menu-JavaScript -->
	<script src="js/ytmenu.js"></script>
	<!-- //Sliding-Menu-JavaScript -->

	<!-- Skills-Bar-Animation-JavaScript -->
	<script type="text/javascript" src="js/jquery.inview.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/mousescroll.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- //Skills-Animation-JavaScript -->

	<!-- Pricing-Popup-Box-JavaScript -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
	});
		</script>
		<!-- //Pricing-Popup-Box-JavaScript -->

		<!-- Projects-Popup-Box-JavaScript -->
		<script src="js/modernizr.custom.97074.js"></script>
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
		$(function() {
			$('.gallery-item a').Chocolat();
		});
			</script>
			<!-- //Projects-Popup-Box-JavaScript -->

			<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
			<script type="text/javascript">
			$(document).ready(function() {
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 100,
					easingType: 'linear'
				};
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
				<!-- //Slide-To-Top JavaScript -->

				<!-- Smooth-Scrolling-JavaScript -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll, .navbar li a, .footer li a").click(function(event){
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
					</script>
					<!-- //Smooth-Scrolling-JavaScript -->

					<!-- //Custom-JavaScript-File-Links -->

					</body>
					<!-- //Body -->

					</html>
