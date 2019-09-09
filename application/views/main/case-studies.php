<?php

?>
<style type="text/css">
	img#gif-hero{
		width:calc(100vw - 300px);
	}

	blockquote{
		padding:30px 70px;
		color:#fff;
		font-family: Arial, sans-serif, 'Helvetica';
		font-size:15.5px;
		color:#fff;
		background-color:#576c7e;
		margin:0;
		line-height: 28px;
	}

	span.title-subtitle{
		padding:35px 70px;
		font-family: Arial, sans-serif, 'Helvetica';
		font-size:15.5px;
		/*background-color:#576c7e;*/
		margin:0;
		line-height: 28px;
		width:auto;
		display: block;
	}

	span.title-subtitle b{
		font-size:23px;
	}

	span.title-subtitle p{
		font-size:18px;
		margin-bottom:0;
	}

	div.content{
		padding:30px 70px;
		font-family: Arial, sans-serif, 'Helvetica';
	}

	div.content p{
		padding:5px 0;
	}



</style>
<div id="body">
<?php foreach($contents as $c): ?>
	<span class="title-subtitle">
		<b><?=$c['title']?></b>
		<p><?=$c['subtitle']?></p>
	</span>

	<div class="content">
	<?php if($c['type'] == "video"): ?>		
		<video controls controlsList="nodownload">
			<source src="./<?=$c['content']?>" type="video/mp4">
		</video>
	<?php elseif($c['type'] == "pdf"): ?>
		<!-- <object type="application/pdf" data="./<?=$c['content']?>?#scrollbar=0&toolbar=0&navpanes=0">
		    <p>The PDF file cannot be displayed.</p>
		</object> -->
		<object data="https://docs.google.com/gview?embedded=true&url=<?=base_url().$c['content']?>"></object>
	<?php elseif($c['type'] == "image"): ?>
		<img src="./<?=$c['content']?>"/>
	<?php else: 
		echo "<pre>".nl2br($c['content'])."</pre>";

		endif;

		?>

	</div>

<?php endforeach; ?>
	<!-- <span class="title-subtitle">
		<b>Huggies x Lazada Case Study</b>
	</span>
	<div class="content">
		<img src="./assets/imgs/huggies.png"/>
	</div>

	<span class="title-subtitle">
		<b>Kleenex Case Study</b>
	</span>
	<div class="content">
		<img src="./assets/imgs/kleenex.png"/>
	</div>

	<span class="title-subtitle">
		<b>EQ Diapers Case Study</b>
	</span>
	<div class="content">
		<img src="./assets/imgs/eqdiapers.png"/>
	</div>

	<span class="title-subtitle">
		<b>Clients</b>
	</span>
	<div class="content">
		<img src="./assets/imgs/partners.jpg"/>
	</div> -->

	<span id="footer">
		New York, Hong Kong, Singapore, Manila
	</span>
</div>