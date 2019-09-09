<?php

?>
<style type="text/css">
	img#gif-hero{
		width:calc(100vw - 300px);
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

	div.profile-block{
		display: block;
		margin:auto;
		padding:25px 48px;
		position: relative;		
	}

	div.profile-block.mobileonly{
		display: none;
	}

	/*div.profile-block:not(:first-of-type)::before{
		content: "";
		position: absolute;
		width: calc(100% - 96px);
		left:48px;
		top:0;
		height: 1px;
		background-color:#e4e5e6;
	}*/

	div.profile-block span.pic img{
		width: calc(100%);
		height: auto;
		object-fit: cover;
		object-position: center;
		display: block;
	}

	div.profile-block span.pic{
	    display: inline-block;
	    height: auto;
	    max-width: 40%;
	    vertical-align: middle;
	}

	div.profile-block span.desc h3, div.profile-block span.desc h2{
		font-family: 'bariol';
		color:#3d7dca;
	}

	div.profile-block span.desc h2{
		color:#9e1f63;
	}

	div.profile-block span.desc p{
		font-family: 'bariol';
		font-size: 11pt;
		line-height: 16pt;
		padding:1vh 0;
	}

	div.profile-block span.desc{
	    vertical-align: middle;
		position: relative;
		display: inline-block;
		height: 100%;
		width:53.333333%;
		padding:0 1vh 0 4vh;
	}

	div.profile-block.desktoponly span.desc{
		padding:0 4vh 0 1vh;
		margin-left: -1vh;
	}

	div.topblock span::after{
		content:"";
		position: absolute;
		bottom:-30px;
		width:130px;
		height:10px;
		background: 
		      linear-gradient(to right, #9c2163, #36a9c4, #f5da09);
		left:calc(calc(100% - 130px) / 2);
	}

	div.topblock span{
		line-height: 310px;
		font-size: 42pt;
		font-family: 'calibri';
		color:inherit;
		position: relative;
	}

	div.topblock{
		display: block;
		height: 310px;
		text-align: center;
		/*background-image:url('./assets/imgs/aristotle-header-dark.jpg');
		background-size:cover;
		background-repeat: no-repeat;*/
		background-color:#e4e5e6;
		color:#373a36;
	}


@media screen and (max-width: 980px) {
	#footer{
		padding: 10px 48px;
	}
}

@media screen and (max-width: 760px) {

	div.profile-block span.desc{
		width:100%;
		padding:0;
	}

	div.profile-block span.pic{
		max-width: 75%;	
		margin: auto;
		display: block;
	}

	div.profile-block span.desc p,
	div.profile-block span.desc h2,
	div.profile-block span.desc h3{
		padding:1vh 0;
	}

	#footer{
		padding:10px 48px;
	}

	div.topblock span{
		line-height: 260px;
	}

	div.topblock{
		height: 260px;
	}

	div.profile-block.mobileonly{
		display: block;
	}

	div.profile-block.desktoponly{
		display: none;
	}
}

@media screen and (max-width: 420px) {

	div.profile-block{
		padding: 30px 15px;
	}

	div.profile-block span.desc{
		padding: 0;
		width:100%;
	}

	div.profile-block span.pic{
		max-width: 100%;	
	}

	#footer{
		padding:10px 15px;
	}
}

</style>
<div id="body">
	<div class="topblock">
		<span>
			Who we are
		</span>
	</div>

	<div class="profile-block">
		<span class="pic">
			<img src="./assets/imgs/Cris.jpg"/>
		</span>
		<span class="desc">
			<h2>Crispian Dawes</h2>
			<h3>Chief Executive Officer</h3>
			<p>
				Crispian is the founder and CEO of Imfree the world’s first Personal Value Compass and engagement platform born out of New York and built and operating across Asia. He specializes in unlocking strategic and creative insights and activating the value shared between people and the brands they love.
			</p>
			<p>
				A 25 year veteran of the Advertising industry, Crispian was the global new business development lead for the Interpublic Group for Asia Pacific.  As Executive Vice President, he was instrumental in winning regional and global accounts and in bringing out some of the world-famous work of HSBC, Thai Airways, Heineken, Haier, AIG, JPMorgan, to name a few. Previous to this, Crispian held regional strategic and management positions at Lowe and Bates in Hong Kong, where he developed strategic insights and global communication plans which recognized the importance of local knowledge.
			</p>
			<p>
				This experience and wisdom crystalized his desire to invert the grandfathered advertising model from being invasive and likely to be screened out, to use technology to deeply personalise and contextualise engagements that consumers will seek out to find more of the things they want and need, freely. By founding Imfree, Crispian has created a next generation engagement platform that values every human being, everywhere with control of the value of their personal data and real time access to the things they love most.
			</p>
		</span>
	</div>


	<div class="profile-block desktoponly">
		<span class="desc">
			<h2>Nicole Hizon</h2>
			<h3>Chief Operating Officer</h3>
			<p>
				Since its inception in 2014, Nikki has been instrumental in building Imfree from the ground up – from its humble beginnings to the rapid growth it is seeing today. As Chief Operating Officer wearing multiple hats, she is the driving force behind Imfree’s people and components working properly and cohesively.
			</p>
			<p>
				With 13+ years of grit and grind in both public and private sectors, Nikki was introduced to leadership roles at an early age. As a public servant, she worked at the Department of Finance under the World Bank Desk of the Multilateral Division of the International Finance Group where she was honed in hands-on and oversight governance  with multiple local and foreign stakeholders of highly matrixed organisations. Prior to Imfree, she quickly climbed the ranks to becoming the Doubleclick Rich Media Campaign Manager Lead for North America of the only accredited Google vendor in the Philippines. Under her wing, the business achieved corporate growth and capacity building for human capital. 
			</p>
			<p>
				Demonstrating both entrepreneurial and intrapreneurial spirit, Nikki has an innate ability to quickly identify and actualise valuable ideas, turning them into concrete action. She truly embodies what Imfree is about – bringing passion, purpose, and that extra push – in everything she does.
			</p>
		</span>
		<span class="pic">
			<img src="./assets/imgs/Nikki.jpg"/>
		</span>
	</div>

	<div class="profile-block mobileonly">
		<span class="pic">
			<img src="./assets/imgs/Nikki.jpg"/>
		</span>
		<span class="desc">
			<h2>Nicole Hizon</h2>
			<h3>Chief Operating Officer</h3>
			<p>
				Since its inception in 2014, Nikki has been instrumental in building Imfree from the ground up – from its humble beginnings to the rapid growth it is seeing today. As Chief Operating Officer wearing multiple hats, she is the driving force behind Imfree’s people and components working properly and cohesively.
			</p>
			<p>
				With 13+ years of grit and grind in both public and private sectors, Nikki was introduced to leadership roles at an early age. As a public servant, she worked at the Department of Finance under the World Bank Desk of the Multilateral Division of the International Finance Group where she was honed in hands-on and oversight governance  with multiple local and foreign stakeholders of highly matrixed organisations. Prior to Imfree, she quickly climbed the ranks to becoming the Doubleclick Rich Media Campaign Manager Lead for North America of the only accredited Google vendor in the Philippines. Under her wing, the business achieved corporate growth and capacity building for human capital. 
			</p>
			<p>
				Demonstrating both entrepreneurial and intrapreneurial spirit, Nikki has an innate ability to quickly identify and actualise valuable ideas, turning them into concrete action. She truly embodies what Imfree is about – bringing passion, purpose, and that extra push – in everything she does.
			</p>
		</span>
	</div>

	<div class="profile-block">
		<span class="pic">
			<img src="./assets/imgs/Drew.jpg"/>
		</span>
		<span class="desc">
			<h2>Drew Deeb</h2>
			<h3>Chief Financial Officer</h3>
			<p>
				As an accomplished executive, Drew has worked closely with numerous CEOs and MDs as their fiduciary lead, providing the right level of visibility to drive business performance. Drew has over 20 years of finance experience, focusing on Asia-Pacific markets, working as a strategic partner to executive management to support and achieve corporate objectives in a hands-on manner, improving efficiency and overall performance in entrepreneurial environments during aggressive growth phases. Prior to his role at Imfree, he held senior positions in the Software, Engineering and Commercial Property sectors.
			</p>
			<p>
				He notes that this is the time to be at the forefront of the world’s rapid transition from analog to digital; and Imfree plays an important role in that assimilation. 
			</p>
		</span>
	</div>


	<div class="profile-block desktoponly">
		<span class="desc">
			<h2>Jen Bungay</h2>
			<h3>Chief Product and Innovation Officer</h3>
			<p>
				Jen is Imfree’s Chief Product and Innovation Officer. In addition to technology strategy, Jen drives and directs innovation through R&D and platform development. She leads a group of highly skilled and dedicated engineers, data scientists, product owners, and designers who can productize and bring valuable digital products to the hands of consumers and business clients.
			</p>
			<p>
				An Innovation Champion, Jen has spent 20 years in the Information Technology Sector developing, designing and creating IT business solutions for local and global companies she has worked with. During her stint as Solutions Architect at Lemcon Networks’ Singapore office, she spearheaded the development and implementation of the company’s ERP (Enterprise Resource Planning) systems, used in every Lemcon location worldwide.  
			</p>
			<p>
				She is a firm believer that learning is a never-ending process; in her spare time, she works on developing a search engine with an ecosystem that can harvest real time data from sites and social media platforms. Drawing on her technical expertise and creative confidence, Jen has helped transform Imfree’s digital products into an engagement platform that will have valuable and tangible impact for its members and clients alike.
			</p>
		</span>
		<span class="pic">
			<img src="./assets/imgs/Jen.jpg"/>
		</span>
	</div>
	<div class="profile-block mobileonly">
		<span class="pic">
			<img src="./assets/imgs/Jen.jpg"/>
		</span>
		<span class="desc">
			<h2>Jen Bungay</h2>
			<h3>Chief Product and Innovation Officer</h3>
			<p>
				Jen is Imfree’s Chief Product and Innovation Officer. In addition to technology strategy, Jen drives and directs innovation through R&D and platform development. She leads a group of highly skilled and dedicated engineers, data scientists, product owners, and designers who can productize and bring valuable digital products to the hands of consumers and business clients.
			</p>
			<p>
				An Innovation Champion, Jen has spent 20 years in the Information Technology Sector developing, designing and creating IT business solutions for local and global companies she has worked with. During her stint as Solutions Architect at Lemcon Networks’ Singapore office, she spearheaded the development and implementation of the company’s ERP (Enterprise Resource Planning) systems, used in every Lemcon location worldwide.  
			</p>
			<p>
				She is a firm believer that learning is a never-ending process; in her spare time, she works on developing a search engine with an ecosystem that can harvest real time data from sites and social media platforms. Drawing on her technical expertise and creative confidence, Jen has helped transform Imfree’s digital products into an engagement platform that will have valuable and tangible impact for its members and clients alike.
			</p>
		</span>
	</div>


	<span id="footer">
		New York, Hong Kong, Singapore, Manila
	</span>
</div>