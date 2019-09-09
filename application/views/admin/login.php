<?php
?>
<!doctype html>
<html>
<head>
	<style type="text/css">

		@font-face {
			font-family: "bariolbold";
			src: url("../assets/fonts/Bariol_Bold.otf");	
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
		    background-size: 98% 92%;
		    background-repeat: no-repeat;
		    border-radius: 4px;
		    /*float:left;*/
		    width:100%;
		    position: absolute;
		    top:3.5%;
		    left:1.25%;
		    height: 100%;
		    z-index: -1;
		}

		form input[type='submit']{
			background-color:#9c2163;
			color:#fff;
			text-transform: uppercase;
			width:120px;
		}

		p#notice{
			display: block;
			text-align: center;
			width: 100%;
			padding:1vh;
			color:#9e1f63;
			font-weight: bolder;
			text-transform: uppercase;
			letter-spacing: 1.5px;
			font-family: 'bariolbold';
			font-size:18px;
		}

@media screen and (max-width: 980px) {
		img.hero{
			display: block;
			margin:auto;
			max-height: 500px;
			width: auto;
		}

		form{
			width:90%;
		}

		form input{
			height:5vh;
			font-size: 2.5vh;
		}

		form input[type='submit']{
			width:100%;
		}
}
	</style>
</head>
<body>
	<img src="../assets/imgs/Imfree Logo.jpg" class="hero"/>
	<div class="form">
		<p id="notice">ADMINISTRATOR PORTAL</p>
		<form action="<?=base_url()?>auth/adminlogin" method="post">
			<div class="input">
				<!-- <p class="label">Email:</p> -->
				<input type="text" placeholder="Enter username" name="login"/>
			</div>
			<div class="input">
				<!-- <p class="label">Code:</p> -->
				<input type="password" placeholder="Enter password" name="password"/>
			</div>
			<div>
				<input type="submit" value="Login" name="submitbtn"/>
			</div>
		</form>
	</div>
</body>
</html>