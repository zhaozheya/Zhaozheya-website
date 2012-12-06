<!doctype html>

<html lang="en" class="en">
	<head>
    <meta name="msvalidate.01" content="F217636AE54624CC527E5C1D2650AAEE" />
		<meta  http-equiv="content-Type" content="text/html; charset=utf-8" />        	
		<meta name="author" content="zhaoyue" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="email" content="zhaozheya@gmail.com" />
		<meta name="description" content="This page is zhaozheya's website, zhaozheya,zhaoyue,bruno zhao, ecole centrale de pekin,individual,web developer,app developer,"/>
		<meta name ="keywords" content="zhaozheya,zhaoyue,bruno zhao, ecole centrale de pekin,individual,web developer,app developer,"/>
		<meta name="robots" contect="all" >

		<link rel="icon" href="images/ico/zy16.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/font.css" >

	  
	  <!-- Styling for your grid blocks -->
	  <link rel="stylesheet" href="css/style.css">
		
		<script src="./js/jquery.js"></script>
		<script src="./js/responsive.js"></script>
		<script src="./js/brunozhaoweb.js"></script>
			  <!-- include jQuery -->
	 <script src="js/jquery-1.7.1.min.js"></script>
  
  <!-- Include the plug-in -->
    <script src="js/jquery.wookmark.js"></script>



<link rel="stylesheet" id="mainstyle" href="css/maker.css" >


	</head>

<body>
<!--Home-->		
	<div class="container" id="home">
		<div class="span-right">
			<div class="span-top"></div>
			<div class="span-middle">
					<div id="navigationbar">
						<ul>
							<li><a  class="slidebutton0 clickanchor" href="#home" ><div>Home</div></a></li>
							<li><a  class="slidebutton0 clickanchor" href="#picturehead"><div>RelatedMe</div></a></li>
							<li><a  class="slidebutton1" href="#moreme" ><div>More Me</div></a></li>
							<li><a  class="slidebutton2" href="#resume" ><div>Resume</div></a></li>
				  			<li><a  class="slidebutton3" href="blog/" target="blank" ><div>Blog</div></a></li>
							<li><a  class="slidebutton0 clickanchor" href="#contacts"><div>Contacts</div></a></li>
		            </ul>						
					</div>
			</div>
		</div>


	  <div class="span-left" >
	  			<div class="content">
				<div id="personInfo" >
							<div class="head" id="personInfohead">
									<img src="images/ico/zhaozheya.png" alt="zhaozheya">
									<h1>$: Who Am I </h1>
									<br><br>
							</div>
							<div class="content" id="personInfocontent">
							<p>Hello, I'm <em>Bruno Zhao</em>,  25-year-old ,lived in Beijing, China.</p>
							<p>I have been graduated from <a href="http://ecpkn.buaa.edu.cn/"> Ecole Centrale de Pekin</a> with General Engineer Diploma,
								 and also Master Degree of Electronic Science and Technology and Bachelor of Mechanic from <a href="http://www.buaa.edu.cn">Beihang University</a>.
							</p>
				      	<p>I'm currently working as a <em>Software Engineer</em> in <a href="http://www.sonymobile.com">Sony Mobile Communications</a>.
								<br>And I am an individual <em>Web developer</em> and <em>App developer</em>. </p>
						   
							</div>
				  </div>
				</div>
				

	  </div>
		<div class="seperateline">
	  <img src="images/background/line.png" alt="zhaozheya">
	  </div>	
</div>

<!--Picture-->	
<div class="head" id="picturehead" style="width:85%;">
									<h1>RelatedMe </h1>
									<h2>Click the filter words related to Me below . the Grid will show the things of me that match at least one filter.</h2>
									<br><br>
</div>

<div class="container1" id="picture">


    <div class="span-left" style="width:85%; overflow:hidden;" id="main">

      <!--
        These are our filter options. The "data-filter" classes are used to identify which
        grid items to show.
        -->
      <ol id="filters">
        <li data-filter="life">Life</li>
        <li data-filter="work">Work</li>
        <li data-filter="sport">Sport</li>
        <li data-filter="tech">Tech</li>
        <li data-filter="hobbies">Hobbies</li>
        <li data-filter="location">Location</li>
        <li data-filter="ecpkn">ECPKn</li>
        <li data-filter="beihang">Beihang</li>
      </ol>

      <ul id="tiles">
        <!--
          These are our grid items. Notice how each one has classes assigned that
          are used for filtering. The classes match the "data-filter" properties above.
          -->
        <li class="location life"><img src="pic/beijingmaps.jpg" height="200" width="200" /><p>Beijing Life Where I lived Now</p></li>
        <li class="hobbies sport ecpkn beihang"><img src="pic/basket.jpg" height="300" width="200" /><p>Sport ECPKn Basketball Team </p></li>
        <li class="location work"><a class="piclink" href="http://www.sonymobile.com" target="blank"><img src="pic/sony.jpg" height="400" width="200"/><p>Beijing Work My job</p><div class="popbox"><img src="pic/cover.png" /></div></a></li>
        <li class="hobbies sport"><img src="pic/running.jpg" height="250" width="200" /><p>Hobbies Running</p></li>
        <li class="work tech hobbies"><a class="piclink" href="http://www.dingfangjie.loveslife.biz" target="blank"><img src="pic/workwebsite.jpg" height="252" width="200" /><p>Work Personal Website-html/css/js</p><div class="popbox"><img src="pic/cover.png" /></div></a></li>
        <li class="location ecpkn beihang"><a class="piclink" href="http://ecpkn.buaa.edu.cn" target="blank"><img src="pic/ecpkn.jpg" height="158" width="200" /><p>Beijing ECPKn Promotion 2005 My college</p><div class="popbox"><img src="pic/cover.png" /></div></a></li>
        <li class="sport"><img src="pic/celtics.jpg" height="200" width="200"/><p>Sport Celtics My favorite Basketball Team</p></li>
        <li class="beihang ecpkn"><img src="pic/ecpkn2.jpg" height="250" width="200"/><p>ECPKn My roomies</p></li>
        <li class="beijing sport work"><img src="pic/beijingolympic.jpg" height="180" width="200" /><p>Beijing Sport Olympic 2008 Volunteer</p></li>   
        <li class="work tech hobbies"><a class="piclink"  href="http://dingfangjie.loveslife.biz/ding's portfilio/main.html" target="blank"><img src="pic/portfiliohtml5.jpg" height="400" width="200"/><p>Work an Portfilo Webpage HTML5/CSS3</p><div class="popbox"><img src="pic/cover.png" /></div></a></li>
				<li class="life"><img src="pic/life2.jpg" height="280" width="200" /><p>Life Travel Wu Zhen</p></li>
				<li class="location"><img src="pic/changling.jpg" height="200" width="200" /><p>Jilin Changling My hometown</p></li>
				<li class="life"><img src="pic/life1.jpg" height="150" width="200" /><p>Life Travel South China</p></li>
        <li class="location life"><img src="pic/beijinglife.jpg" height="300" width="200" /><p>Beijing Life</p></li>
        <li class="location beihang"><a class="piclink"  href="http://www.buaa.edu.cn" target="blank"><img src="pic/beihang2.jpg" height="250" width="200" /><p>Beihang My College</p><div class="popbox"><img src="pic/cover.png" /></div></a></li>
        <li class="hobbies beihang"><img src="pic/dota.jpg" height="130" width="200" /><p>Hobbies Video Games DOTA</p></li>
        <li class="hobbies"><img src="pic/cartoon.jpg" height="300" width="200" /><p>Hobbies Cartoon</p></li>
        <li class="hobbies tech"><img src="pic/equipment.png" height="120" width="200" /><p>Hobbies Tech staff</p></li>
        
		
 
        
        <!-- End of grid blocks -->
      </ul>

    </div>
		<div class="seperateline">
	  <img src="images/background/line.png" alt="zhaozheya">
	  </div>	
</div>
<!--Contacts-->	

<div class="container" id="contacts" >
  		<div class="span-left" >
  			<div class="head" id="contacthead">
  			  		<h1>Contacts</h1>
  			</div>
  				<div class="content">
  								<div id="contactmail">
	            	     <p>You can get in touch with me via my <a href="mailto:zhaozheya@hotmail.com"> Email</a> <br>
	            	     Or chatting with me on SNS sites:</p>
								</div>							  
							  <div class="center">
										<div id="snslink">
											<li><a href="http://weibo.com/zhaozheya" target="blank"><img src="images/ico/weibo.png" alt="" /></a></li>
											<li><a href="http://twitter.com/zhaozheya" target="blank"><img src="images/ico/twitter.png" alt="" /></a></li>
											<li><a href="https://zhaozheya.wordpress.com" target="blank"> <img src="images/ico/wordpress.png" alt="" /> </a></li>
											<li><a href="https://zhaozheya.facebook.com" target="blank"> <img src="images/ico/facebook.png" alt="" /> </a></li>
											<li><a href="http://www.linkedin.com/pub/yue-zhao/37/2a5/9b9" target="blank"> <img src="images/ico/linkedin.png" alt="" /></a></li>
										</div>
							 </div>			
							  	
	
				</div>
  		</div>	  		
</div>





<div class="container1">
     <div class="span-left" id="papershow">
				<div>
					<section class="showSection" id="moreme">

						<div class="slidebutton1"><aside class="closeshowSection" >Back Home</aside></div>
				
						<article id="artilemoreme">
							<header>
								<h1>More Me</h1>
								<h2>185cm,  87kg </h2>
							</header>
							<div class="cols">
								<section class="prose">
									<p>I love Life.</p>
									<p>I love tech,interfaces,mechanic design,internet and their function in my life. my favorite color is blue</p>
									<p>I love websites, app, video games which can surprise me, and the way that make me happy, fear, expectancy even hopeless. It will wanna to try, follow or make it mine.</p>
									<p>I love basketball, running, windows shopping when reason, shopping when crazy.</p>
									<p>Most of all, I love colorful life, tech life, well design view, They make all wonderful. And be one part of this world , I wanna to code and make more happen!</p>
								</section>
								<section class="images">
									<img src="images/profile/zhaozheya/profile.jpg" alt="" />
								</section>
							</div>
						</article>
					</section>
		
					<section class="showSection" id="resume">

						 <div class="slidebutton2"><aside class="closeshowSection" >Back Home</aside></div>
				
						<article id="artileresume">
							<header>
								<h1>Resume</h1>
								<h2>Until Oct 2012---Download The PDF</h2>
								<a href="pdf/CV-ZhaoYue-Bruno-english-version-A4.pdf" target="blank" ><img style="border:none;" src="images/ico/pdf.png" alt="" /></a>
							</header>
							<div class="rows">
									<div class="header" onclick="ContentShow('1')" ><b>Work Exp</b></div>

															<section class="content" id="resumecontent1" style="display:block;">
																	<ul>
																		<li>Now-----------------------<i>Software Engineer in Sony Mobile</i></li>
																		<li>July 2010-Oct 2010-----<i>Domino Software Intern Engineer in Digital China Holdings Limited</i></li>
																		<li>July 2009-Oct 2009-----<i>Intern Technician in SoftStone Information Technology (Group) Co., Ltd</i></li>
																		<li>June 2008-Oct 2008-----<i>Volunteer for Beijing Olympic</i></li>
																	</ul>
															</section>
									<div class="header" onclick="ContentShow('2')" ><b>Education</b></div>
															<section  class="content" id="resumecontent2">
																	<ul>
																			<li><i>Master of Electronic Science and Technology------Beihang University </i></li>
																			<li><i>Engineer Diploma  Informatique Technology-------Ecole Centrale de Pekin</i></li>
																			<li><i>Bachelor's Degree: Mechanical engineering--------Beihang University</i></li>
																	</ul>
															</section>
									<div class="header" onclick="ContentShow('3')" ><b>Skills</b></div>
															<section  class="content" id="resumecontent3">
																	<ul>
																			<li>Skilled:-------<i>Windows/Linux development:Java, C/C++ , CSS/HTML/JS, VB, MS Office(Excel, Word, Powerpoint), Git/DMS, Agile Dev(Scrum)</i></li>
																			<li>Basic:---------<i>SPACECLAIM,Python, Solideworks , Access, FrontPage, Dreamweaver,Illustater, PhotoShop, PCB, MCU,AutoCAD</i></li>
																	</ul>
															</section>
									<div class="header" onclick="ContentShow('4')" ><b>Extras</b></div>
															<section  class="content" id="resumecontent4">
																	<ul>
																			<li>Language:-------<i>Chinese:Native language English: Fluent	French: Fluent</i></li>
																		<li>Hobbies:--------<i>Basketball, Running</i></li>
																	</ul>
															</section>
							</div>
						</article>
					</section>
		
		
				</div>


			</div>

	</div>






<!-- Once the page is loaded, initalize the plug-in. -->
  <script>
 $(document).ready(new function() {
   // This filter is later used as the selector for which grid items to show.
   var filter = '';
   var handler;
   //alert($("#main").width());
   
   // Prepare layout options.
   var options = {
     autoResize: true, // This will auto-update the layout when the browser window is resized.
     container: $('#main'), // Optional, used for some extra CSS styling
     offset: 2, // Optional, the distance between grid items
     itemWidth: 210 // Optional, the width of a grid item
   };
   
   // This function filters the grid when a change is made.
   var refresh = function() {
     // Clear our previous handler.
     if(handler) {
       handler.wookmarkClear();
       handler = null;
     }
     
     // This hides all grid items ("inactive" is a CSS class that sets opacity to 0).
     $('#tiles li').addClass('inactive');
     
     // Create a new layout selector with our filter.
     handler = $(filter);
     
     // This shows the items we want visible.
     handler.removeClass("inactive");
     
     // This updates the layout.
     handler.wookmark(options);
   }
   
   /**
    * This function checks all filter options to see which ones are active.
    * If they have changed, it also calls a refresh (see above).
    */
   var updateFilters = function() {
     var oldFilter = filter;
     filter = '';
     var filters = [];
     
     // Collect filter list.
     var lis = $('#filters li');
     var i=0, length=lis.length, li;
     for(; i<=length-1; i++) {
       li = $(lis[i]);
       if(li.hasClass('active')) {
         filters.push('#tiles li.'+li.attr('data-filter'));
       }
     }
     
     // If no filters active, set default to show all.
     if(filters.length == 0) {
       filters.push('#tiles li');
     }
     
     // Finalize our filter selector for jQuery.
     filter = filters.join(', ');
     
     // If the filter has changed, update the layout.
     if(oldFilter != filter) {
       refresh();
       //alert($("#main").height());
       var heighta=$("#main").height()+75;
       $("#picture").height(heighta);
     }
   };
   
   /**
    * When a filter is clicked, toggle it's active state and refresh.
    */
   var onClickFilter = function(event) {
     var item = $(event.currentTarget);
     item.toggleClass('active');
     updateFilters();
   }
   
   // Capture filter click events.
   $('#filters li').click(onClickFilter);
   
   // Do initial update (shows all items).
   updateFilters();
 });
 </script>

</body>

  
  
</html>
