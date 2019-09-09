<?php

?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:type" content="website">
	<meta property="og:title" content="DATA ROOM">
	<!-- <meta itemprop="url" property="og:url" content="https://sites.google.com/imfreemobile.com/dataroom/home"> -->
	<!-- <meta itemprop="thumbnailUrl" content="https://ssl.gstatic.com/atari/images/atari-logo.png"> -->
	<!-- <meta itemprop="image" content="https://ssl.gstatic.com/atari/images/atari-logo.png"> -->
	<title>Dataroom</title>
</head>
<body>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

	<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<style type="text/css">	
	html,body{
		margin:0;
		padding:0;
		overflow-x: hidden;
		/*overflow-y: scroll;*/
		/*text-size-adjust:100%;*/
	}

	@font-face {
		font-family: "bariol";
		src: url("./assets/fonts/Bariol_Regular.otf");	
	}

	@font-face {
		font-family: "bariolbold";
		src: url("./assets/fonts/Bariol_Bold.otf");	
	}

	@font-face {
		font-family: "calibri";
		src: url("./assets/fonts/calibri.ttf");	
	}

	@font-face {
		font-family: "calibrib";
		src: url("./assets/fonts/calibrib.ttf");	
	}

	section#nav{
		position: fixed;
		left:0;
		top:0;
		height:100%;
		width:250px;
		background-color:#373a36;
		color:#f8f8f9;
		display: block;
	}

	section#nav img#logo-sidebar{
		display: block;
		max-height: 90px;
		width:auto;
		padding:20px;
		margin:42px auto 17px;
	}

	section#nav span#title-sidebar{
		text-transform: uppercase;
		font-size:13pt;
		margin:auto;
		display: block;
		text-align: center;
		width: 100%;
		font-family: 'bariolbold';
		margin-bottom:45px;
	}

	section#nav hr{
		position: relative;
		width:80%;
		margin: 26px 10% 30px;
		height:0.5px;		
		background: 
		      linear-gradient(to right, #9c2163, #36a9c4, #f5da09);
		border:none;
	}

	section#nav .l-nav nav ul {
		padding:0;
	}

	section#nav .l-nav nav ul li a{
		color:#f8f8f9;
		text-decoration: none;
		letter-spacing: -0.25px;
		text-transform: uppercase;
	}

	section#nav .l-nav nav ul li{
		margin:0;
		padding:15px 35px;
		font-family: 'bariol';
		font-size: 10pt;
	}

	section#main{
		position: relative;
		margin-left:250px;
		top:0;
		width:calc(100% - 250px);
		max-width:calc(100% - 250px);
		height:auto;
		display: inline-block;
		
		padding:30px 50px;
	}

	#body *{
		position: relative;
	}

	#footer{
		padding:10px 50px;
		font-family:'calibri';
		font-size: 8pt;
		line-height: 10pt;
	}

	section#main div.content p{
		font-family:'bariol';
		color:#373836;
		/*font-size: 10pt;*/
		/*line-height: 14pt;*/
	}	

	section#main span.title-subtitle{
		background-color: #e4e5e6;
	}

	section#main span.title-subtitle b{
		font-family: 'bariol';
		/*font-size: 40pt;*/
	}

	section#main span.title-subtitle p{
		font-family: 'bariol';
		/*font-size: 24pt;*/
		margin-bottom:0;
	}

	section#topnav{
		display: none;
	}

	#autohidebar{
		display: block;
	    position: fixed;
	    height: 100%;
	    z-index: 21;
	    left: -250px;
	    width: 250px;
	    overflow: hidden;
	    top: 0;
	    background-color: #373a36;
	    transition: left .5s cubic-bezier(0.4,0.0,0.2,1);
	    -webkit-transition: left .5s cubic-bezier(0.4,0.0,0.2,1);
	}

	#backdrop{
		display: none;
		height: 100%;
		width: 100%;
		position: fixed;
		top:0;
		left:0;
		background-color:rgba(30,30,30,0.7);
		z-index: 19;
	}

@media screen and (max-width: 980px) {
	section#nav{
		display: none;
	}

	section#main{
		margin:0;
		width:100%;
		max-width: 100%;
		margin-top:55px;
	}

	section#topnav{
		display: block;
		/*position: sticky;*/
		position: fixed;
		top:0;
		width:100%;
		left:0;
	    padding-right: 8px;
	    background-color:#373a36;
	    z-index: 20;
	    height: 55px;
	}

	#topnav a svg,#autohidebar a img{
		z-index: 25;
	    cursor: pointer;
	    height: 25px;
	    outline: none;
	    padding: 0 10.5px;
	    width: auto;
	    color: #f8f8f9;
	    display: inline-block;
	    vertical-align: middle;
	}

	#topnav a svg{
		width:50px;
		height: 50px;
	}


	a{
		position: relative;
		display: inline-block;
		vertical-align: middle;
	}

	a img{
		width: auto;
		filter:invert(1);
	}

	img#logo-topbar{
		position: relative;
		height:40px;
		display: inline-block;
	    vertical-align: middle;
	}

	span#title-topbar{
	    display: inline-block;
	    font-family: 'bariolbold';
	    text-transform: uppercase;
	    vertical-align: middle;
	    color: #fff;
	    font-size: 16pt;
	    margin-left: 10px;
	    line-height: 55px;
	}

	#autohidebar.show{
		left:0;
	}

	#autohidebar .tophead{
		width: 100%;
		height:55px;
		text-align: left;	
	}

	#autohidebar .tophead b{
		color:#fff;
		font-family: 'bariolbold';
		font-size: 14pt;
		display: inline-block;
		vertical-align: middle;
		line-height: 55px;
	}

	#backdrop.show{
		display: block;
	}

	section#autohidebar .l-nav nav ul li{
		margin:0;
		padding:10px 35px;
		font-family: 'bariolbold';
		font-size: 14pt;
	}

	section#autohidebar .l-nav nav ul {
		padding:0;
	}

	section#autohidebar .l-nav nav ul li a{
		color:#f8f8f9;
		text-decoration: none;
		letter-spacing: -0.25px;
	}
}

@media screen and (max-width: 420px) {

	section#main span.title-subtitle{
		padding:30px 25px;
	}
}
</style>

<section id="nav">
	<img src="./assets/imgs/unnamed.png" id="logo-sidebar"/>
	<span id="title-sidebar">
		DATA ROOM ADMIN
	</span>
	<hr>
  <div class="l-nav">
    <nav class="nav">
      <ul>
        <li class="nav-primary"><a href="<?=base_url()?>admin">Home</a></li>
        <li class="nav-primary"><a href="<?=base_url()?>pages">Pages</a></li>
        <li class="nav-primary"><a href="<?=base_url()?>auth/clearsession">Logout</a></li>
      </ul>
    </nav>
  </div>
  
</section>

<section id="topnav">
	<a class="brgr-button">
		<svg class="wFCWne" viewBox="0 0 24 24" stroke="currentColor" jsname="B1n9ub" focusable="false"><g transform="translate(12,12)"><path class="hlJH0" d="M-9 -5 L9 -5" fill="none" stroke-width="2"></path><path class="HBu6N" d="M-9 0 L9 0" fill="none" stroke-width="2"></path><path class="cLAGQe" d="M-9 5 L9 5" fill="none" stroke-width="2"></path></g></svg>
	</a>
	<img src="./assets/imgs/unnamed.png" id="logo-topbar"/>
	<span id="title-topbar">
		DATA ROOM ADMIN
	</span>
</section>

<section id="autohidebar">	
  <div class="l-nav">
  	<span class="tophead">
  		<a class="brgr-button-close">
  			<img src="./assets/imgs/x-button-icon-20.jpg"/>
  		</a>
  		<b>MENU</b>
  	</span>
    <nav class="nav">
      <ul>
        <li class="nav-primary"><a href="<?=base_url()?>admin">Home</a></li>
        <li class="nav-primary"><a href="<?=base_url()?>pages">Pages</a></li>
        <li class="nav-primary"><a href="<?=base_url()?>auth/clearsession">Logout</a></li>
      </ul>
    </nav>
  </div>
</section>

<div id="backdrop">
</div>

<script type="text/javascript">
	
	const btn = document.querySelector('a.brgr-button');
	const btnc = document.querySelector('a.brgr-button-close');
	const aut = document.querySelector('#autohidebar');
	const bd = document.querySelector('#backdrop');
	btn.addEventListener('click', function(callback){
		if(aut.classList.contains('show')){
			aut.classList.remove('show');
			bd.classList.remove('show');
		}else{
			aut.classList.add('show');
			bd.classList.add('show');
		}
	});

	bd.addEventListener('click', function(callback){		
		if(aut.classList.contains('show')){
			aut.classList.remove('show');
		}
		bd.classList.remove('show');
	})

	btnc.addEventListener('click', function(callback){		
		if(bd.classList.contains('show')){
			bd.classList.remove('show');
		}
		aut.classList.remove('show');
	})
</script>
