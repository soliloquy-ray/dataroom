<?php

?>
<style type="text/css">
	img#gif-hero{
		width:calc(100vw - 300px);
		max-width: calc(98% - 300px);
		display: block;
		margin:auto;
	}

	blockquote{
		padding:30px 70px;
		color:#fff;
		font-family: 'bariol';
		font-size:15.5px;
		color:#fff;
		/*background-color:#576c7e;*/
		/*background-color:#006098;*/
		background-image:
		      linear-gradient(to right, #43a8c7, #006098);
		margin:0;
		line-height: 28px;
	}

	span.title-subtitle{
		padding:30px 70px;
		font-family: Arial, sans-serif, 'Helvetica';
		font-size:15.5px;
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

@media screen and (max-width: 980px) {

	img#gif-hero{
		max-width: 100%;
		width:85vw;
	}
}

@media screen and (max-width: 420px) {

	div.content, blockquote, span.title-subtitle{
		padding: 30px 15px;
	}
}

</style>
<div id="body">
	<img id="gif-hero" src="./assets/imgs/unnamed.gif"/>

	<blockquote>Welcome to the Imfree Data Room. Here you will find materials, presentations and case studies which will give you a deep introduction into our platform, people and growth plans for the world’s first Personal Value Compass.</blockquote>

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
		<b>Company Profile</b>
		<p>A Brief introduction to Imfree.</p>
	</span>
	<div class="content">
		<p>Imfree Holdings Inc was incorporated in 2012 in Delaware as a software technology company with the explicit goal to shift billions of dollars of inefficient and unaccountable media and marketing spend directly into the hands of the people who value it most.
		</p>
		<p>
		Our goal was to build the world’s first customised, hyper-contextual mobile engagement platform with retargetable unique user permission based data for marketers, accomplishing the holy grail by turning the marketing funnel into a transaction tunnel with infinite retargeting capability.
		</p>
		<p>
		So we moved to Manila to build and test cheaply, quickly and away from the eyes of Silicon Valley. This gave us an unfair cost and talent advantage and a 4 year head start on the inevitable sovereign personal data zeitgeist. It also primed us to launch in Singapore, ‘blitzscale’ across 2.4 billion users in Asia Pacific and race down the long client sponsored corridors to North America, Europe, Latin America and Africa.
		</p>
		<p>
		Built on the universal insight ‘everyone’s valuable to someone’, Imfree created an open and honest value exchange platform between individuals and businesses. A club that rewards members for their data to unlock shared value and knowledge with the brands they love most.
		</p>
		<p>
		The user experience has manifested into the world’s first and only Personal Value Compass that seeks out hyper-contextual value and engagements and navigates the member directly to the point of transaction in real time. 
		</p>
		<p>
		We’ve scientifically mapped the dimensions of value from mobile data and product discounts, to events, subscriptions, entertainment and utilities on partner retail and e-commerce platforms with members retaining complete control of their personal data value and privacy. 
		</p>
		<p>
		In return, marketers get direct access to real-time first person consumer intelligence and ROI data that is measurable, actionable and retargetable in real time to address any consumer need-state and build Lifetime Customer Value.
		</p>
		<p>
		Imfree’s co-founders are Technology and Marketing veterans with over 25 years of industry-leading experience. Supported by a dynamic and data-driven Management, Product and Development team, Imfree has developed and supported digital platforms for Consumer Packaged Goods companies throughout South East Asia.</p>
	</div>

	<span class="title-subtitle">
		<b>Imfree Mantra</b>
		<p>What we believe.</p>
	</span>
	<div class="content">
		<p>
			At Imfree we believe everyone is valuable to someone.
		</p>

		<p>
			That open and mutually shared values are at the heart of the most profound and intimate relationships humans seek.
		</p>

		<p>	
			These values are fragile, innate and highly contextual. They reflect our history. Our experiences. Our deepest dreams and greatest desires.
		</p>

		<p>
			They rest at the intersection of our state of mind and state of motion.
		</p>

		<p>
			Businesses, Brands and Advertisers know this too – but never had the tools to engage deeply, contextually or personally at this profound moment.
		</p>

		<p>
			Relying on the grandfathered technology of cookies as surrogates, screens as loudhailers, and yelling at the masses, it’s been a struggle to get to the most granular needs of the ‘me’.
		</p>

		<p>
			So we built Imfree.
		</p>

		<p>
			The world’s first Personal Value Compass that seeks out all of the value that surrounds people at the right time, in the right place to navigate them to the things they love most.
		</p>

		<p>
			First, we placed the member at the centre of their own universe, and returned control of the value of their data to them.
		</p>

		<p>
			Because this is what friends do.
		</p>

		<p>
			They don’t do something to you, they do something for you.
		</p>

		<p>
			This honest and humble act of commercial selflessness defines our values and how we value our members.
		</p>

		<p>
			We treat every member personally, because we have the only technology in the world that can.
		</p>

		<p>
			We encourage advertisers to be genuine with our members.
		</p>

		<p>
			To provide authentic value which recognises each individuals value throughout each day and over their lifetime, rather than as anonymous numbers on a quarterly balance sheet.
		</p>

		<p>
			We celebrate every engagement as an intimate conversation instead of an indiscriminate broadcast.
		</p>

		<p>
			Then we complete this journey with transactions that transcend dollars, into deep and trusted shared knowledge, in near real time.
		</p>

		<p>
			By building our technology from the member up, we’ve inverted the spam machine of push and liberated the consumer with the ability to pull.
		</p>

		<p>
			Which changes everything.
		</p>

		<p>
			Imfree is an ecosystem that shifts behaviour from screening out to seeking out, reinstating the deep personal connections and trust between brands and people.
		</p>

		<p>
			This ensures whomever you are, wherever you are, you are deeply connected to, and able to find the things you love the most.
		</p>

		<p>
			This is our purpose, the personal zeitgeist that let’s everyone find happiness.
		</p>

		<p>
			At Imfree, this is what we are doing today.
		</p>
	</div> -->

	<span id="footer">
		New York, Hong Kong, Singapore, Manila
	</span>
</div>