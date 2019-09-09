<?php
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:type" content="website">
	<meta property="og:title" content="DATA ROOM">
	<title>Dataroom</title>
	<style type="text/css">

		@font-face {
			font-family: "bariolbold";
			src: url("../assets/fonts/Bariol_Bold.otf");	
		}

		html,body{
			position: relative;
			margin:0;
			padding:0;
			height: 100%;
		}
		span{

		}

		div p{
			display:inline;
			width:auto;
		}		

		img.hero{
			display: block;
			margin:auto;
			max-height: 350px;
			width: auto;
			max-width: 100%;
		}

		form{
			display: block;
			margin:20px auto;
			width:250px;
			text-align: center;
		}

		form input{
			padding:4px;
			border-radius: 4px;
			border:0;
			/*box-shadow: 1px 1px 5px 2px #36a9c4;*/
			margin:5px;
			width: calc(100% - 16px);
			height:25px;
			font-size: 14px;
		    text-align: center;
		}

		form>div.input{
			position: relative;
		    margin:5px;
		}

		form>div.input::after{
		    content: '\00a0';
		    background-image:
		      radial-gradient(at 50% 0, #9c2163 0%, #36a9c4 50%, #f5da09 75%);
		    background-size: calc(100% - 3px) calc(100% - 3px);
		    background-repeat: no-repeat;
		    border-radius: 4px;
		    /*float:left;*/
		    width:100%;
		    position: absolute;
		    top:1.5px;
		    left:1.5px;
		    height: 100%;
		    z-index: -1;
		}

		form input[type='submit']{
			background-color:#9c2163;
			color:#fff;
			text-transform: uppercase;
			width:120px;
		}

		p.error{
			display: block;
			text-align: center;
			width: 100%;
			padding:1vh;
			color:#9e1f63;
			font-weight: bolder;
			text-transform: uppercase;
			letter-spacing: 1.5px;
			font-family: 'bariolbold';
		}


@media screen and (max-width: 980px) {
		div.container{
			padding-top:10vh;
			/*position: absolute;*/
			/*top:50%;*/
			/*left:50%;*/
			/*transform:translate(-50%, -50%);*/
		}

		img.hero{
			display: block;
			margin:auto;
			max-height: 400px;
			width: auto;
		}

		form{
			max-width:90%;
			width: 80vh;
		}

		form input{
			height:5vw;
			font-size: 2.5vh;
		}

		form input[type='submit']{
			width:calc(100% - 16px);
		}
}


@media screen and (max-width: 420px) {

	form input{
		height:30px;
		font-size: 14pt;
	}

		div.container{
			padding-top:10vh;
		}

}
	</style>
</head>
<body>
	<div class="container">
		<img src="../assets/imgs/Imfree Logo.jpg" class="hero"/>
	<?php if(isset($_GET['error']) && $_GET['error']): ?>
		<p class="error">Invalid Credentials</p>
	<?php endif;?>
		<div class="form">
			<form action="<?=base_url()?>auth/userlogin#" method="post">
				<div class="input">
					<!-- <p class="label">Email:</p> -->
					<input type="text" placeholder="Enter your email" name="login"/>
				</div>
				<div class="input">
					<!-- <p class="label">Code:</p> -->
					<input type="password" placeholder="Enter your password" name="password"/>
				</div>
				<div>
					<input type="submit" value="Enter Site" name="submitbtn"/>
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>