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
	<script type="text/javascript">
		
	    window.mobilecheck = function() {
	      var check = false;
	      (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
	      return check;
	    };

	    window.setMobileClass = function() {
	    	console.log('initializing..');
	    	let node = document.getElementsByTagName('body')[0];
	    	if(mobilecheck()){
			     node.className = node.className.replace(/[\s]mobile-view/g,"");
			     node.className += " mobile-view";
	    	}else{
			     node.className = node.className.replace(/[\s]mobile-view/g,"");
	    	}
	    }

	    window.onresize = function(){
	    	console.log('mob');
	    	setMobileClass();
	    }

	</script>
</head>
<body>
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
		max-height: 50px;
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
		height:3px;		
		background: 
		      linear-gradient(to right, #9c2163, #36a9c4, #f5da09);
		border:none;
	}

	section#nav .l-nav nav ul {
		padding:0;
	}

	section#nav .l-nav nav ul li a{
		color:inherit;
		text-decoration: none;
		letter-spacing: -0.25px;
		text-transform: uppercase;
	}

	section#nav .l-nav nav ul li.bottom{
		text-decoration: none;
		letter-spacing: -0.25px;
		position: absolute;
		bottom:2vh;
		left:0;
		color:#ffdb00;
		text-transform: uppercase;
	}

	section#nav .l-nav nav ul li{
		color:#f8f8f9;
		margin:0;
		padding:15px 35px;
		font-family: 'bariol';
		font-size: 10pt;
	}

	div#body{
		position: relative;
		margin-left:250px;
		top:0;
		width:calc(100% - 250px);
		max-width:calc(100% - 250px);
		height:auto;
		display: inline-block;
		padding-bottom:5vh;
	}

	#body *{
		position: relative;
	}

	#footer{
		padding:10px 70px;
		font-family:'calibri';
		font-size: 8pt;
		line-height: 10pt;
	}

	div#body div.content p, div#body div.content pre{
		font-family:'bariol';
		color:#373836;
		/*font-size: 10pt;*/
		/*line-height: 14pt;*/
	}	

	div#body span.title-subtitle{
		background-color: #e4e5e6;
	}

	div#body span.title-subtitle b{
		font-family: 'bariol';
		/*font-size: 40pt;*/
		color:#9e1f63;
	}

	div#body span.title-subtitle p{
		font-family: 'bariol';
		/*font-size: 24pt;*/
		margin-bottom:0;
		color:#3d7dca;
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

	div#body div.content img{
		height:auto;
		width:calc(calc(100vw - 250px) - 140px);
		display: block;
		margin: auto;
	}

	div#body div.content pre{
		padding:0;
		max-width: 100%;
		white-space: normal;
	}

	div#body div.content object, div#body div.content video, div#body div.content object{
		display: block;
		margin: auto;
	}

	div#body div.content object, div#body div.content video, div#body div.content iframe{
		height:calc(calc(70vw - 250px) - 140px);
		width:calc(calc(100vw - 250px) - 140px);
		object-position: center;
	}


@media screen and (max-width: 980px) {
	section#nav{
		display: none;
	}

	div#body div.content object, div#body div.content video, div#body div.content iframe{
		display: block;
		margin: auto;
		height: calc(70vw - 140px);
		width: calc(100vw  - 140px);
	}

	div#body{
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
	    width: 25px;
	    color: #f8f8f9;
	    display: inline-block;
	    vertical-align: middle;
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
		display: block;
		max-height: 100%;
	}

	body.mobile-view #autohidebar.show{
		overflow-y: scroll;
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

	#autohidebar .l-nav nav, #autohidebar .l-nav nav ul{
		position: relative;
		height: 100%;
	}

	#autohidebar .l-nav{
		display: block;
		min-height: 360px;
	}

	section#autohidebar .l-nav nav ul li{
		margin:0;
		padding:15px 35px;
		font-family: 'bariol';
		font-size: 10pt;
		color:#f8f8f9;
		text-transform: uppercase;
	}

	section#autohidebar .l-nav nav ul li.bottom{
		margin:0;
		padding:10px 35px;
		position: relative;
		color:#ffdb00;
	}

	section#autohidebar .l-nav nav ul {
		padding:0;
	}

	section#autohidebar .l-nav nav ul li a{
		color:inherit;
		text-decoration: none;
		letter-spacing: -0.25px;
	}

	div#body div.content{
		padding: 10px 70px;
	}

	#footer{
		padding:10px 70px;
	}

	div#body div.content img{
		width:calc(100vw  - 140px);

	}
}

@media screen and (max-width: 420px) {

	div#body span.title-subtitle{
		padding:30px 15px;
	}

	div#body div.content img{
		height:auto;
		width:100%;
	}


	div#body div.content{
		padding: 10px 15px;
	}

	#footer{
		padding:10px 15px;
	}

	div#body div.content object, div#body div.content video, div#body div.content iframe{
		height: calc(70vw - 30px);
		width: calc(100vw  - 30px);

	}
}
</style>

<section id="nav">
	<img src="./assets/imgs/unnamed.png" id="logo-sidebar"/>
	<span id="title-sidebar">
		DATA ROOM
	</span>
	<hr>
  <div class="l-nav">
    <nav class="nav">
      <ul>
        <li class="nav-primary"><a href="<?=base_url()?>home">Home</a></li>
        <li class="nav-primary"><a href="<?=base_url()?>what-we-do">What We Do</a></li>
        <li class="nav-primary"><a href="<?=base_url()?>who-we-are">Who We Are</a></li>
        <li class="nav-primary"><a href="<?=base_url()?>for-investors">For Investors</a></li>
        <li class="nav-secondary"><a href="<?=base_url()?>case-studies">Improofment Case Studies</a></li>
        <li class="nav-secondary bottom"><a href="<?=base_url()?>auth/userlogin/1">Logout</a></li>
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
		DATA ROOM
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
        <li class="nav-primary"><a href="<?=base_url()?>home">Home</a></li>
        <li class="nav-primary"><a href="<?=base_url()?>what-we-do">What We Do</a></li>
        <li class="nav-primary"><a href="<?=base_url()?>who-we-are">Who We Are</a></li>
        <li class="nav-primary"><a href="<?=base_url()?>for-investors">For Investors</a></li>
        <li class="nav-secondary"><a href="<?=base_url()?>case-studies">Improofment Case Studies</a></li>
        <li class="nav-secondary bottom"><a href="<?=base_url()?>auth/userlogin/1">Logout</a></li>
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

	window.onload = function(){
	    setMobileClass();
	};
</script>
