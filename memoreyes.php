
<?php
$id = $_GET["id"]; //use to retrieve your post in javascript
echo $id;  
?>

<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.4.2.min.js"></script>
	<script src="//www.parsecdn.com/js/parse-1.5.0.min.js"></script>
	<script src="bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-sweetalert/lib/sweet-alert.css">
		<title>Text Module</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<!--<script src="js/pull-module.js"></script>-->
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

		<script>

		var text = " ";
			$(document).ready(function(){

			  Parse.$ = jQuery;
			  Parse.initialize('Qud6XC8J8PtKl4QQZDoi1bg4s5wqzewRlgjdJjwR', 'iBdSj2kUv4I9O6ZrfQydAAb3c0zVldhCB8pxRhwr');

			  var TextModule = Parse.Object.extend("TextModule"); 
			  var query = new Parse.Query(TextModule);

			  query.get(<?php echo '"'.$id.'"'?>, {
			    success: function(textModule) {
			      var title  = textModule.get("title");
			      var details = textModule.get("details");
			      text = textModule.get("text");

			      var paragraph = text,
			      	  sentences = paragraph.split('\n');

			  	  var colorlist = "aqua,aquamarine,black,blue,blueviolet,brown,burlywood,cadetblue,chartreuse,chocolate,coral,cornflowerblue,crimson,cyan,darkblue,darkgray,darkgreen,darkkhaki,darkmagenta,darkolivegreen,darkorange,darkorchid,darkred,darksalmon,darkseagreen,darkslateblue,darkslategray,darkturquoise,deeppink,deepskyblue,dimgray,dodgerblue,firebrick,forestgreen,fuchsia,gold,goldenrod,gray,green,greenyellow,hotpink,indianred,indigo,lawngreeen,lightblue,lightcoral,lime,limegreen,magenta,maroon,navy,olive,orange,orangered,orchid,pink,plum,purple,red,salmon,silver,skyblue,slateblue,slategray,springgreen,steelblue,tan,teal,tomato,turquoise,yellow",
			  	  		colors = colorlist.split(",");

			  	  var commonwordslist = "the,be,to,of,and,a,in,that,have,I,it,for,not,on,with,he,as,you,do,at,this,but,his,by,from,they,we,say,her,she,or,an,will,my,one,all,would,there,their,what,so,up,out,if,about,who,get,which,go,me,when,make,can,like,time,no,just,him,know,take,person,into,year,your,good,some,could,them,see,other,than,then,now,look,only,come,its,over,think,also,back,after,use,two,how,our,work,first,well,way,even,new,want,because,any,these,give,day,most,us,are",
								commonwords = commonwordslist.split(",");

				  var emojis = [];
				  emojis.push({unicode:"1f339", singular:"rose", plural:"roses"});
				  emojis.push({unicode:"1f36a", singular:"cookie", plural:"cookies"});
				  emojis.push({unicode:"1f638", singular:"lion", plural:"lions"});
				  emojis.push({unicode:"1f305", singular:"day", plural:"days"});
				  emojis.push({unicode:"1f307", singular:"tomorrow", plural:"tomorrows"});
				  emojis.push({unicode:"1f464", singular:"shadow", plural:"shadows"});
				  emojis.push({unicode:"1f304", singular:"valley", plural:"valleys"});
				  emojis.push({unicode:"1f4a3", singular:"war", plural:"wars"});
				  emojis.push({unicode:"1f1fa-1f1f8", singular:"nation", plural:"nations"});
				  emojis.push({unicode:"1f551", singular:"time", plural:"times"});
				  emojis.push({unicode:"1f5fd", singular:"liberty", plural:"liberties"});
				  emojis.push({unicode:"1f50a", singular:"sound", plural:"sounds"});
				 
			  	  var output = "";

			  	  for (i = 0; i < sentences.length; i++) 
			  	  { 
   				 		var words = sentences[i].split(" ");
   				 		var fontcolor = colors[Math.floor((Math.random() * colors.length) + 0)];
   				 		var hasEmoji = false;
   				 		var unicode = "";

   				 		for (j = 0; j < words.length; j++)
   				 		{
   				 			var trimmed = words[j].replace(/[.,-\/#!$%\^&\*;:{}=\-_`~()]/g,"");

   				 			for (k = 0; k < colors.length; k++)
   				 			{
   				 				if (trimmed.toLowerCase() === colors[k].toLowerCase())
   				 				{
   				 					fontcolor = colors[k];
   				 				}
   				 			}

   				 			var common = false;
   				 			for (g = 0; g < commonwords.length; g++)
   				 			{
   				 				if (trimmed.toLowerCase() === commonwords[g].toLowerCase())
   				 				{
   				 					common=true;
   				 				}
   				 			}

   				 			if (common)
   				 			{
   				 				output = output + words[j].fontcolor(fontcolor) + " ";
   				 			}
   				 			else
   				 			{
   				 				output = output + "<b>" + words[j].fontcolor(fontcolor) + " " +"</b>";
   				 			}

   				 			for (h = 0; h < emojis.length; h++)
   				 			{
   				 				if (trimmed.toLowerCase() === emojis[h].singular || trimmed.toLowerCase() === emojis[h].plural)
   				 				{
   				 					hasEmoji = true;
   				 					unicode = emojis[h].unicode;
   				 				}
   				 			}
   				 		}

   				 		output = output + " ";
   				 		if (hasEmoji == true)
   				 		{
   				 			output = output +'<img draggable="false" class="emoji" src="http://twemoji.maxcdn.com/72x72/' + unicode + '.png">';
   				 		}
   				 		output = output + "<br>" + "<br>";
				  }

			      $("#title").html(title);
			      $("#details").html(details);
			      $("#text").html(text);
			      $("#output").html(output);
			    }, 
			    error: function(object, error) {
			      console.log("there was an error in retriving in pull-module.js");
			    }



			  });

			});

		</script>
	</head>
	<body>

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.html">Memoreyes</a></h1>
							<!-- <span class="tag">by Lionheart</span> -->
						</div>
						<nav id="nav">
							<ul>
								<li class="active"><a href="index.html">About</a></li>
								<li><a href="index.html#extra">Popular</a></li>
								<li><a href="index.html#footer">Create</a></li>
								<!-- <li><a href="#">Memorize</a></li> -->
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					<div id="page" class="container">
						<section>
							<header class="major">
								<h2 id="title"></h2>
								<span class="byline" id="details"></span>
								<button class = "button" onclick="speakText();">Read Text</button>
									<script>
									function speakText()
							  		{
							  			var msg = new SpeechSynthesisUtterance(text);
							  			var voices = window.speechSynthesis.getVoices();
										msg.voice = voices[10]; // Note: some voices don't support altering params
										msg.voiceURI = 'native';
										msg.volume = 1; // 0 to 1
										msg.rate = .8; // 0.1 to 10
										msg.pitch = 1; //0 to 2
										msg.lang = 'en-US';
										speechSynthesis.speak(msg);
							  		}
								</script>
							</header>
							<font size="6">
							<div id="output">
								<p></p>
							</div>
							</font>
						</section>
						
					</div>
					
				<!-- /Page -->
	<!-- Copyright -->
	<!-- 	<div id="copyright">
			<div class="container">
				<div class="copyright">
					<p>Memoreyes by <div id = 'company_name'>LIONHEART</div> Topping: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p>
					<ul class="icons">
						<li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
					</ul>
				</div>
			</div>
		</div> -->

	</body>
</html>
