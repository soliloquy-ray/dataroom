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

	div.content iframe, div.content video{
		height:calc(calc(70vw - 250px) - 140px);
		width:calc(calc(100vw - 250px) - 140px);
		object-position: center;
	}


@media screen and (max-width: 980px) {
	div.content iframe, div.content video{
		height:calc(70vw - 140px);
		width:calc(100vw  - 140px);
	}
}

@media screen and (max-width: 420px) {
	div.content iframe, div.content video{
		height:80vw;
		width:100%;

	}
	
	div.content{
		padding: 5px 15px;
	}
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
	<!-- span class="title-subtitle">
		<b>Mind and Mood</b>
		<p>Hear directly from our members 2016</p>
	</span>
	<div class="content">
		<video controls controlsList="nodownload">
			<source src="./assets/video/Mind and Mood.mp4" type="video/mp4">
		</video>
	</div>

	<span class="title-subtitle">
		<b>Consumer Video</b>
		<p>Take a look at how Imfree works</p>
	</span>
	<div class="content">
		<video controls controlsList="nodownload">
			<source src="./assets/video/Consumer Video.mp4" type="video/mp4">
		</video>
	</div> -->

	<span id="footer">
		New York, Hong Kong, Singapore, Manila
	</span>
</div>

<script type="text/javascript">
	let vids = document.querySelectorAll('video');
	vids.forEach((v,i)=>{
		v.addEventListener('contextmenu', e => {
		  e.preventDefault();
		});
	})
</script>