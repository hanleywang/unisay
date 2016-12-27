<!DOCTYPE html>
<html lang="zh-tw">
<head>
	<meta charset="UTF-8">
	<title>UniSay</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/login_main.css" rel="stylesheet" type="text/css">


<!-- Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
 	rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">	


<!-- fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
 	<!-- font-family: 'Cinzel Decorative', cursive; -->

 	<link href="https://fonts.googleapis.com/css?family=Amita" rel="stylesheet">
 	<!-- font-family: 'Amita', cursive; -->

 	<link href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC" rel="stylesheet">
 	<!-- font-family: 'IM Fell English SC', serif; -->

 	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
 	<!-- font-family: 'Fredericka the Great', cursive; -->

 	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
 	<!-- font-family: 'Titillium Web', sans-serif; -->


</head>


<!-- ====================================================================================== -->


<body>
	


<!-- 主頁面內容 -->
<div class="wrap">
	
	<header>

		<!-- 平板手機會fixed的banner -->
		<div class="banner">

			<!-- 三明治選單 -->
			<div class="sandwich"></div>
			

			<!-- fixed的按鈕 -->
			
			<div class="cart_icon"></div>
			<div class="cart_sidebar"></div>

			<div class="member_icon"></div>
			<div class="member_sidebar"></div>

			<div class="totop_icon"></div>
			

			<!-- 中央logo -->
			<div class="logo"><img src="images/header/header_logo.svg" alt=""></div>
			
		


			<!-- 上方選單列 -->
			<nav> 
				<ul>
					<!-- 當前頁面掛上here的class -->
					<li class="icon_aboutus here">
						<a href="aboutus.html"></a>
					</li>
					<li class="icon_product">
						<a href="product.html"></a>
					</li>
					<li class="icon_custom">
						<a href="custom.html"></a>
					</li>
					<li class="icon_inspire">
						<a href="inspire.html"></a>
					</li>
				</ul>
			</nav>


			<!-- 暗幕的背景 -->
			<div class="fixed_shadowbg"></div>

		</div><!-- banner包全部 -->

	</header>


<!-- ====================================================================================== -->


	<content>

	<div class="con">
	<!-- 麵包屑 -->
			<div class="loginnav">
				<p>LOG IN > Forget Password</p>
				<img src="images/member/line.svg">
			</div>
			
			<div class="forgetpassword_content">
				<div class="words1">
					<p>請輸入您當初加入會員使用的〔E-Mail帳號〕，<br>
					   系統會自動將密碼寄到您的信箱中，請執行完密碼查詢後，<br>
					   再到您的信箱中確認。</p>  
				</div>
				<div class="checkpw">
					<div class="words2">
						<label for="emailid">請輸入email帳號：</label>
						<input type="text" name="" >
					</div>
					<div class="btncheck">
						<a href="#">密碼查詢</a>
					</div>
				</div>
			</div>
	</div>
	

	</content>


<!-- ====================================================================================== -->


	<footer>
	


	</footer>


<!-- ====================================================================================== -->


</div><!-- wrap的結尾 -->



<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script src="js/nav_icon.js"></script>



</body>
</html>