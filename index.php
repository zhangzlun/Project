<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/materialize.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="../css/animate.css">
</head>
<script >
	$(document).ready(function(){
		$(".button-collapse").sideNav();
		 $('.modal-trigger').leanModal();
	});

</script>
<style type="text/css">
	header .imves{
		position:absolute;
	/* 	top:-20px;*/
	 	width: 100%;
	 	height: 600px;
	 	overflow: hidden;
	} 
	header .imves .bigimg img{
		position: fixed;
	    top: 50%;
	    left: 50%;
	    transform: translateX(-50%) translateY(-50%);
	    min-width: 100%;
	    min-height: 100%;
	    width: auto;
	    height: auto;
	    z-index: -100;
	  	background-size: cover;
	  	}
	header nav a{
		font-size:20px;
		font-weight: 900;
		font-family:Microsoft JhengHei;
	}
	header nav {
		background: rgba(71,163,255,0.7) !important;
	}
	header .iconbtu{
		
	}
	header #Introduction{
		position: absolute;
		width: 160px !important;
		top: 120px;
		left: 215px;
	}
	.imgExpla{
		margin-left: -11px !important;
	}
	
	.NEWS{
		position: absolute;
		/*background-color: red;*/
		width: 101px;
		height: 93px;
		z-index: 99;
		top:123px;
		left: 5px;
	}
	.NEWS a{
		position: absolute;
		width: 101px;
		height: 93px;
		z-index: 99;
		background: rgba(0,0,0,0) !important;
	}
	.Outpatient{
		position: absolute;
		/*background-color: red;*/
		width: 103px;
		height: 93px;
		z-index: 99;
		top:123px;
		left: 118px;
	}
	.Outpatient a{
		position: absolute;
		width: 103px;
		height: 93px;
		z-index: 99;
		background: rgba(0,0,0,0) !important;
	}
	.service{
		position: absolute;
		/*background-color: red;*/
		width: 103px;
		height: 93px;
		z-index: 99;
		top:220px;
		left: 5px;
	}
	.service a{
		position: absolute;
		width: 103px;
		height: 93px;
		z-index: 99;
		background: rgba(0,0,0,0) !important;
	}
	.Resources{
		position: absolute;
		/*background-color: red;*/
		width: 103px;
		height: 93px;
		z-index: 99;
		top:220px;
		left: 118px;
	}
	.Resources a{
		position: absolute;
		width: 103px;
		height: 93px;
		z-index: 99;
		background: rgba(0,0,0,0) !important;
	}
	.activity{
		position: absolute;
		/*background-color: red;*/
		width: 65px;
		height: 50px;
		z-index: 99;
		top:320px;
		left: 142px;
	}
	.activity a{
		position: absolute;
		width: 65px;
		height: 50px;
		z-index: 99;
		background: rgba(0,0,0,0) !important;
	}
	.Signup{
		position: absolute;
		/*background-color: red;*/
		width: 60px;
		height: 45px;
		z-index: 99;
		top:377px;
		left: 86px;
	}
	.Signup a{
		position: absolute;
		width: 60px;
		height: 45px;
		z-index: 99;
		background: rgba(0,0,0,0) !important;
	}
	.Questi{
		position: absolute;
		/*background-color: red;*/
		width: 105px;
		height: 50px;
		z-index: 99;
		top:430px;
		left: 240px;
	}
	.Questi a{
		position: absolute;
		width: 105px;
		height: 50px;
		z-index: 99;
		background: rgba(0,0,0,0) !important;
	}
	.boxin{
		width: 300px !important;
		height: 400px !important;
	}
	.stepall{
		position: relative;
		margin-left: 3%!important;
	}
	.stepall .step1 p{
		font-size:20px;
		font-weight: 900;
		font-family:Microsoft JhengHei;
		color: #FFF;
	}
	.stepall .step1 img{
		position: relative;
		top:-100px;
		left: 400px;
	}
	.step1{
		position: relative;
		display: block;
		/*background-color: red;*/
		width: 400px;
		height: 632px;
		top:0px;
		left: -5px !important;
	}
	.collapsible{
		background: rgba(0,0,0,0) !important;
		border-width:0px;
	}
	#stepimg{
		position: relative;
		top:0px;
		left: 5px;
	}
	@media only screen and (max-width:800px) {
	  nav .brand-logo {
	    left: 50%;
	    -webkit-transform: translateX(-50%);
	            transform: translateX(-50%);
	  }
	  @media only screen and (max-width: 1000px) {
	    .side-nav.fixed {
	      left: -105%;
	    }
	    .side-nav.fixed.right-aligned {
	      right: -105%;
	      left: auto;
	    }
	  }
</style>
<body>
	<header>
	<div class="row">
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">APP操作流程說明</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a class="modal-trigger iconbtu" href="#download"><i class="material-icons">file_download</i></a>
		        </li>
		        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
		        <li><a class="modal-trigger" href="#modal8">關於我們</a></li>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="sass.html">Sass</a></li>
		        <li><a href="badges.html">Components</a></li>
		        <li><a href="collapsible.html">Javascript</a></li>
		        <li><a href="mobile.html">Mobile</a></li>
		      </ul>
		    </div>
		</nav>
		<div class="imves">
			<div class="bigimg">
				<img src="nature_hd_best_of_nature_05_4724_10.jpg">
			</div>
		</div>
		<div class="bottomIntroduction col s12 m6 l4">
			<div id="Introduction" class="col s12 m5 z-depth-0">
			    <div class="card-panel teal">
			         <span class="white-text">
			         	APP功能介紹
			        </span>
			    </div>
			</div>
		</div>
	</div>
	</header>
	<main>
		<div class="row">
			<div class="imgExpla col s12 m6 l3">
				<div class="NEWS box"><a class="modal-trigger z-depth-0 btn" href="#modal1"></a></div>
				<div class="Outpatient box"><a class="modal-trigger z-depth-0 btn" href="#modal2"></a></div>
				<div class="service box"><a class="modal-trigger z-depth-0 btn" href="#modal3"></a></div>
				<div class="Resources box"><a class="modal-trigger z-depth-0 btn" href="#modal4"></a></div>
				<div class="activity box"><a class="modal-trigger z-depth-0 btn" href="#modal5"></a></div>
				<div class="Signup box"><a class="modal-trigger z-depth-0 btn" href="#modal6"></a></div>
				<div class="Questi box"><a class="modal-trigger z-depth-0 btn" href="#modal7"></a></div>
				<img src="未命名-1.png" alt="">
			</div>
			<!-- APP使用流程 -->
			<div class="stepall col s12 m6 l4">
				<div class="step1">
					<ul class="collapsible z-depth-0" data-collapsible="accordion">
						<li>
					      <div class="collapsible-header card-panel teal z-depth-0"><span class="white-text">
					      APP使用流程</span></div>
					    </li>
					    <li>
					      <div class="collapsible-header card-panel teal z-depth-0"><span class="white-text">
					      1.可由最新消息及服務項目得知想知道的資訊。</span></div>
					      <!-- <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div> -->
					    </li>
					    <li>
					      <div class="collapsible-header card-panel teal z-depth-0"><span class="white-text ">
					      2.進入活動報名登入，開始輸入基本的個人資料。</br>(點我開啟圖片)</span></div>
					      <div class="collapsible-body">
					      	<p style="color: black; font-weight: 900;">傳送的資料會用於登入及管理方統計 不會對外公開 APP 操作流程說明 </p>
					      	<img id="stepimg" src="text1.jpg" style="width: 300px" alt="">
					      </div>
					    </li>
					    <li>
					      <div class="collapsible-header card-panel teal z-depth-0"><span class="white-text">
					      3.進入活動登入畫面後，輸入完個資按下"確定"，即完成報名，如果需要得知方才輸入的資訊則按下"顯示"。</span></div>
					      <!-- <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div> -->
					    </li>
					    <li>
					      <div class="collapsible-header card-panel teal z-depth-0"><span class="white-text">
					      4.當使用完登入之後，返回至頁面，按下前往問卷，點選完問題之後方可結束。</span></div>
					      <!-- <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div> -->
					    </li>
					</ul>
				</div>
			</div>
			
		<?php include 'modals.php'; ?>
	</main>
</body>
</html>
