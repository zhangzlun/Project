<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>APP操作流程說明</title>
	<script src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script type="text/javascript" src="Simple.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="project.css">
</head>
<script >
	$(document).ready(function(){
		$(".button-collapse").sideNav();
		$('.modal-trigger').leanModal();
		$('.materialboxed').materialbox();
		$('.dropdown-button').dropdown({	
		      inDuration: 300,
		      outDuration: 225,
		      constrain_width: true, // Does not change width of dropdown to that of the activator
		      hover: true, // Activate on hover
		      gutter: 0, // Spacing from edge
		      belowOrigin: false, // Displays dropdown below the button
		      alignment: 'right' // Displays dropdown with edge aligned to the left of button
		    });
		$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 15 // Creates a dropdown of 15 years to control year
		  });
		$('select').material_select();	
	
	});

</script>
<style type="text/css">
	body{
		background-color: rgb(255, 255, 253);
	}
	.ftitle{
		position: relative;
		left: 50%;
		transform: translateX(-50%);
		width: 78%;
	}
	.maincontent{
		position: relative;
		right: 0;
		left:0;
	    margin:auto;
		width: 78%;
	}
	.present .presentin{
		position: relative;
		background-color: rgb(255, 255, 253);
		width: 150px;
		height: 500px;
		border: 2px  solid; 
		margin-right:-2px; 
		margin-bottom:-2px;
		border-color:#d0d0d0;
		overflow: hidden;
	}
	.present .presentinr{
		background-color: #FFF;
		width: 150px;
		height: 500px;
		border-style:solid;
		border-width:1px;
		border-left-width: 0px;
		border-color:#d0d0d0;
	}
	.presentbox{
		position: absolute;
		bottom: 15px;
	}
	.presentbox .presentimg{
		height: 300px;
		overflow: hidden;
	}
	.presentbox .presentimg img{
		background-size: cover;
	}
	.presentbox .presentimg .collection li{
		background-color: rgb(255, 255, 253);
	}

</style>
<body>

	<header>
		<nav class="z-depth-0">
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">APP操作流程</a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down centerin">
		        <li><a class="modal-trigger" href="#modal8">關於我們</a></li>
		        <li><a class="modal-trigger" href="#modal7">活動報名</a></li>
		        <li><a class="" href="activity.php">表單</a></li>
		      </ul>
		    </div>
		  </nav>
		  <div id="fakenav"></div>
		  <!-- 背景圖 -->
			<div class="imves">
				<div class="bigimg">
					<img src="img/">
				</div>
			</div>
	</header>
	<main>
		<div class="row">
			<div class="appability">
				<div class="ftitle ">
					<h2>衛生所APP應用程式介紹</h2>
				</div>
				<div class="maincontent">
					<div class="present">
						<div class="row">
							<!-- 第一排區塊1 -->
							<div class="presentin col s12 m6 l6">
								<div class="ititle center-align">
									<h4>使用流程</h4>
								</div>
								<div class="ititlep">
									<p class="left-align">如果您是第一次使用這格APP或是對次APP不太熟悉的使用者可以參考下面的步驟使用APP</p>
								</div>
								<div class="row">
									<div class="presentbox">
										<div class="presentimg">
											<ul class="collection  col s11 m11">
											     <li class="collection-item">1.可由最新消息及服務項目得知想知道的資訊。 </li>
											     <li class="collection-item">2.進入活動報名登入，開始輸入基本的個人資料。</li>
											     <li class="collection-item">
											     3.進入活動登入畫面後，輸入完個資按下"確定"，即完成報名，如果需要得知方才輸入的資訊則按下"顯示"。</li>
											     <li class="collection-item">4.當使用完登入之後，返回至頁面，按下前往問卷，點選完問題之後方可結束。</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- 第一排區塊2 -->
							<div class="presentin col s12 m6 l6">
								<div class="ititle center-align">
									<h4>最新活動</h4>
								</div>
								<div class="ititlep">
									<p class="left-align">在APP上可以看到衛生所最新的活動，在APP下方活動報名的"登入"按鈕，進入活動報名的畫面輸入完基本資料後按"確定"報名就完成了。</p>
								</div>
								<div class="row">
									<div class="presentbox">
										<div class="presentimg">
											<img class="materialboxed col s6 m6" width="150" src="img/text.png">
											<img class="materialboxed col s6 m6" width="150" src="img/text1.jpg">
										</div>
									</div>
								</div>
							</div>
							<!-- 第一排結束 -->
							<!-- 第2排區塊1 -->
							<div class="presentin col s12 m6 l6">
								<div class="ititle center-align">
									<h4>官方資源</h4>
								</div>
								<div class="ititlep">
									<p class="left-align">APP提供了最新消息,門診資訊,服務項目,資源連接相關了官方連結，方便直接在APP上面直接查看官方資訊隨時掌握最新的消息。</p>
								</div>
								<div class="row">
									<div class="presentbox">
										<div class="presentimg">	
											<img class="materialboxed col s6 m6" width="150" src="img/box201 (1).png">
											<img class="materialboxed col s6 m6" width="150" src="img/box201 (2).png">
										</div>
									</div>
								</div>
							</div>
							<!-- 第2排區塊2 -->
							<div class="presentin col s12 m6 l6">
								<div class="ititle center-align">
									<h4>問卷調查</h4>
								</div>
								<div class="ititlep">
									<p class="left-align">如果您喜歡我們的APP希望您可以幫我們做個問卷調查，有任何問題或BUG也可以在上面回復。<a class="btn z-depth-0 bluebtn" href="http://goo.gl/forms/g97tv5PMmH">前往問卷</a></p>
								</div>
								<div class="row">
									<div class="presentbox">
										<div class="presentimg">
											<a href=""></a>
											<img class="materialboxed col s12 m12" width="150" src="img/qtext.jpg">
										</div>
									</div>
								</div>
							</div>
							<!-- 第2排結束 -->
						</div>
					</div>

					<!-- <div class="present">
						<div class="row">
						 第二排區塊1 
							<div class="presentin col s12 m6 l6">3</div>
						 第二排區塊2
							<div class="presentin col s12 m6 l6">4</div>
						</div>
					</div> -->

				</div>
			</div>
		</div>
		
	</main>
	<footer class="page-footer">
		<div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">衛生所APP應用程式</h5>
                <p class="grey-text text-lighten-4">謝謝您使用我們的APP和網站</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">相關連接</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="http://linkou.health.ntpc.gov.tw/">林口衛生所</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
 <!--                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li> -->
                </ul>
              </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Text
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
            </div>
       </div>
    </footer>
    <?php include 'modals.php';?>
</body>
</html>
