<?php header("Content-Type:text/html;charset=gb2312");?>

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>ݼ�ɰ�</title>

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
				<a href="#">ݼ�ɰ�</a>
			</div>

			<div class="side">
				<nav class="dr-menu">
					<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span></div>
					<ul>
						<li><a class="scroll dr-icon dr-icon-user" href="#about">����</a></li>
						<li><a class="scroll dr-icon dr-icon-camera" href="#services">��������</a></li>
						<li><a class="scroll dr-icon dr-icon-bullhorn" href="#pricing">�Ԥ��</a></li>
						<li><a class="scroll dr-icon dr-icon-heart" href="#team">����֮��</a></li>
						<li><a class="scroll dr-icon dr-icon-download" href="#projects">�չʾ</a></li>
						<li><a class="scroll dr-icon dr-icon-settings" href="#testimonial">������</a></li>
						<li><a class="scroll dr-icon dr-icon-switch" href="http://localhost:8080/member_management/Main.jsp">��̨����</a></li>
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

			<h1>����</h1>
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
					<p>	2016��12��28�գ�D503���ᣬ��Ա�������¼������ͬѧ�Լ������ĸɲ���</p>
		
				</div>
		<!--		<div class="clearfix"></div>		-->
			</div>

		<!-- Skills -->
<!--			<div class="col-md-6 col-sm-6 skills">

				<div id="about-us" class="parallax">
					<h2>���ǵĳ�Ա�ֲ����</h2>
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
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">��ϸ˵��<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>

					<div class="tooltip-content">

						<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>   
										<h4 class="modal-title">������ϸ</h4>
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

			<h3>��������</h3>
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
	  	window.alert("����ʧ�ܣ���");
	  	</script>';
	}
	if(!empty($_GET['success'])&&$_GET['success']=="2"){
		?>
	<script type="text/javascript">
	  	window.alert("�����ɹ�����");
	  	</script>
	  	<?php 
	  	}
	  	?>

			<h3>�Ԥ��</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>
			<script type="text/javascript">
		 	    function activityId(b){
		 	    	document.getElementById("applyId").value=b;
		 		} 

		 	   function check(){
					if(Math.round(form1.QQ.value)!=form1.QQ.value){
						window.alert("QQֻ��������");
						return false;
					}
					if(Math.round(form1.phoneNum.value)!=form1.phoneNum.value){
						window.alert("�ֻ���ֻ��������");
						return false;
					}
					if(Math.round(form1.number.value)!=form1.number.value){
						window.alert("ѧ��ֻ��������");
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
				<li>ʱ�䣺
				<?php 
				echo $apply[$i][2];//
				?>
				</li>
				<li>�ص㣺
				<?php 
				echo $apply[$i][3];//
				?>
				</li>
				<li>���ݣ�
				<?php 
				echo $apply[$i][4];//
				?>
				</li>
					</ul>
					<div class="sign text-center">
					<a onclick="return activityId(<?php echo $apply[$i][0]; ?>);" class="popup-with-zoom-anim" href="#small-dialog">����</a>
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
									<h4><span class="shipping"> </span>ѧ����ϸ����</h4>
									<ul>	
										<li><input name="number" class="text-box-dark" type="text" value="ѧ��" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'ѧ��';}"></li>
										<li><input id="applyId" name="id" class="text-box-dark" type="hidden" value="0" ></li>
									</ul>
									<ul>
										<li><input name="name" class="text-box-dark" type="text" value="����" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '����';}"></li>							
									</ul>
									<ul>
										<li><input name="QQ" class="text-box-dark" type="text" value="QQ" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'QQ';}"></li>										
									</ul>	
									<ul>
										<li><input name="phoneNum" class="text-box-dark" type="text" value="�ֻ���" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '�ֻ���';}"></li>
									</ul>
									<ul class="payment-sendbtns">
										<li><input type="reset" value="����"></li>
                                        <li><input type="submit" name="submit" value="�ύ" onclick="return check()"/></li>
									</ul>
									<div class="clear"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<button title="Close (Esc)" type="button" class="mfp-close">��</button>
				<!-- //Popup-Box -->

			</div>
			
		</div>
	</div>
	<!-- //Pricing -->



	<!-- Team -->
	<div class="team" id="team">
		<div class="container">

			<h3>����֮��</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>
			<p class="team-p">����ѧУ�쵼������ѧ���ɲ����ڵĿ��죬����ѧ�������Ź�����ѧϰ�ɼ�����������������죬�ۺ�����ǿ�����ǰ��¸ɴ���ϣ����ڴ��£����ڴ����˼ʹ�ϵ���н�ǿ����֯�������Ž�Э�����������Ա���Ϊ������֮�ǡ������¼�λ��</p>

			<div class="team-grids">			
				<div class="ch-grid">
					<div class="col-md-3 col-sm-3 team-grid team-grid1">
						<div class="ch-item ch-img-1">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
                                    <div class="sign text-center">
						<h4 class="popup-with-zoom-anim" href="#small-dialog1">����</h4>
                        </div>					 
										<!--<h4><a href="#">����</a></h4>-->										<p>�Ź�ѧԺ</p>
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
                                    <h4 class="popup-with-zoom-anim" href="#small-dialog2">��ȸ</h4>
					 </div>
										<!--<h4>RACHEL JONES</h4>-->
										<p>�ķ�ѧԺ</p>
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
                                    <h4 class="popup-with-zoom-anim" href="#small-dialog3">��ٻ</h4>
					 </div>
										<!--<h4>KRISTEN BELL</h4>-->
										<p>����ѧԺ</p>
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
                                    <h4 class="popup-with-zoom-anim" href="#small-dialog4">���ݷ�</h4>
					 </div>
										<!--<h4>WILLIAM HANNAH</h4>-->
										<p>����ѧԺ</p>
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
									<h4><span class="shipping"> </span>���˼��</h4>
									<ul>
										<li>&nbsp;&nbsp;���ڣ��У�1991��2�������ϲ����մ�ѧ08����Ժ��������38����ʰ�����ѧ���Ƶ������ϲ����մ�ѧ��ѧǰУ�ݣ���������Incyte��˾�о���Ա[1]? ��2013��1�£�������ĳ�罻��վ�Ϸ���������һ����Ƭ������������Χ�ۣ�������ǡ���ʵ�潭ֱ������ ���С��ײС������ѵ�٩Ҷ�մﳤ���е������ƵϺ�������Ķ��ӡ����ܶ�Ů�����׷ױ���Լ������İ������� ��</li>
										<li></li>
									</ul>
									<ul>
										
									</ul>
								</form>
                                </div>
                                </div>

				<button title="Close (Esc)" type="button" class="mfp-close">��</button>
				<!-- //Popup-Box -->
	
    		<!-- Popup-Box -->
				<div id="popup">
					<div id="small-dialog2" class="mfp-hide">
						<div class="pop_up">
							<div class="payment-online-form-left">
								<form>
									<h4><span class="shipping"> </span>���˼��</h4>
									<ul>
										<li>&nbsp;&nbsp;��ȸ��Ů��1992��4�³����������ϲ����մ�ѧѧԺ��֧��С���Ա��ѧ�������������£�10���̰�����ίԱһְ����У�������ϸ����ظ�������ƶȣ�����ģ����ͷ���á�ƽʱ�ܹ����ƴ���ð༶������ѧ���Ṥ���͵�С�鹤��֮��Ĺ�ϵ����˼�롢ѧϰ�������ȷ���ȡ���˽ϴ�Ľ�չ�� һ��˼�����Ҫ���Ͻ������������������

ƽʱ������ѧϰ�������塢ë��˼�롢��Сƽ���ۺ͡�����������Ҫ˼�룬����Ŭ�����С��������������������������������˼�뽡������Ծ����Ϊ��֧����Ա��������֯��ÿ�ε�֧����������ܻ���������ҵ�˼�룬��������Ա����������֯��£������������Ա����֯�Ƽ��������ѱ���Ϊ������ѧ���ɲ�������У�������֯�ݽ����뵳�����飬��������֯�㱨˼�룬�����Ե�Ա�ı�׼���ϸ�Ҫ���Լ������ճ�Ϊһ����ʽ��Ա��
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
				<button title="Close (Esc)" type="button" class="mfp-close">��</button>
			<!-- //Popup-Box -->
    		<!-- Popup-Box -->
				<div id="popup">
					<div id="small-dialog3" class="mfp-hide">
						<div class="pop_up">
							<div class="payment-online-form-left">
								<form>
									<h4><span class="shipping"> </span>���˼��</h4>
									<ul>
										<li>&nbsp;&nbsp;��ٻ��1993��2��������ѧ����������һֱ�Ӹ������ϸ�Ҫ���Լ�����������֯��£���ڷ�ѧϰ���̿����У�����ڼ󣬹������棬Ŭ��ʹ�Լ���Ϊһ��������ȫ�淢չ�������ѧ������УԺ�쵼��ʦ�����ڽ���ָ���£�����ȷ���Լ�������չ��Ŀ�꣬�ᶨ���������������Լ�������������˲ſ�£������ֲ�и��Ϊ֮Ŭ���ܶ�������˼���ϵĽ�ȡ���Ծ�Ŭ��ѧϰ�������塢ë��˼�롢��Сƽ���ۺ͡�����������Ҫ˼�룬��ֿ�ѧ��չ�ۣ����ϵ������Լ���˼������֪ʶ����˼���ϡ������ϡ��ж��ϻ�������֯��£�����μ��˵�Уѧϰ��˳����ҵ�����ڳ�Ϊһ��Ԥ����Ա��
�ڹ����У�����Ŭ�������Լ��ı�ְ���������ܻ������������Ա��ѧ���ɲ�����ͬ��ð༶��������
��ѧϰ�ϣ������ܹ�������ͷ�ڷ�ѧϰ���̿����У�Ŭ��ѧϰ��רҵ֪ʶ�뼼�ܣ�������������ѧ�Ļ�����������λ����У��������������Ա��</li>
										
									</ul>
								
								</form>
							</div>
						</div>
					</div>
				</div>
				<button title="Close (Esc)" type="button" class="mfp-close">��</button>
			<!-- //Popup-Box -->>

    		<!-- Popup-Box -->
				<div id="popup">
					<div id="small-dialog4" class="mfp-hide">
						<div class="pop_up">
							<div class="payment-online-form-left">
								<form>
									<h4><span class="shipping"> </span>���˼��</h4>
									<ul>
										<li>&nbsp;&nbsp; ���ݷɣ��У����壬1994�������ɽ���ൺ���־Ͷ�������ѧԺѧԺ����ѧϵ����ľ����רҵ������12����ľ����1��೤������ѧϵѧ�Ż��Ա��ͬʱҲ�����㹲����Ա������2013�굳Ա�������ӿ����гɹ�ͨ������ͬѧΪ��ǫ��̹�ϣ��Ը��ʣ�ѧϰ�ɼ�����������������ʵ���ܹ�����Ϊͬѧ����ģ�������ͷ���á������ѧ���������ϸ�Ҫ���Լ����Ⱥ����������ɲ��ƺź͹������Ƚ�ѧ��</li>
										
									</ul>
								
								</form>
							</div>
						</div>
					</div>
				</div>
				<button title="Close (Esc)" type="button" class="mfp-close">��</button>
	<!-- //Team -->


<!-- Projects -->
<div class="projects" id="projects">

<h3>�չʾ</h3>
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
  	window.alert("����ʧ�ܣ���");
  	</script>';
}
if(!empty($_GET['success'])&&$_GET['success']=="1")
{
	echo '<script type="text/javascript">
  	window.alert("���Գɹ�����");
  	</script>';
}
?>


<h3>������</h3>
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
<p>����</p>
</div>-->
<div class="col-md-11 col-sm-6 email-form">
<center><form action="MessageAdd.php" method="post">
<input class="email" type="text" name="content" placeholder="˵��ʲô�ɡ�����">
<input type="submit" class="submit" value="����">
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
				<p><h2>�ϲ����մ�ѧݼ�ɰ�</h2></p> 
                <p>��ַ:����ʡ�ϲ��з���ϴ��696��</p>
                <p>�ʱ�: 100872</p>
                <p>�绰: 123456789</p>
                <p>�ٷ���ַ:www.nchu.com</p>
	</div>
	<!-- //Social -->

	<!-- Copyright -->
		<p>&copy; 2016 ����С��.</p>
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
