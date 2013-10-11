<!DOCTYPE HTML>
<html>
	<head>
		<title>iPhone App Development Tutor - Self Evaluation</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700" rel="stylesheet" />
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-ui.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<?php
		$title="iPhone Application Development Quiz";
		$address="selfeval.php";
		$a=array(1=> array(0=>"Which IDE is used to develop iPhone Application ?",1=>"Please Select an Answer",2=>"Eclipse",3=>"Netbeans",4=>"Xcode",5=>"WinDev",6=>4,7=>"Tools/ Resources -> The Official iOS SDK",8=>"tools.html#officialsdk"),2=> array(0=>"Which Operating System is required to develop iPhone applications ?",1=>"Please Select an Answer",2=>"Mac OS X",3=>"Linux",4=>"Windows",5=>"iOS",6=>2,7=>"Tools/ Resources -> A Suitable Mac",8=>"tools.html#suitablemac"),3=> array(0=>"Can we Simulate iOS Applications after development ?",1=>"Please Select an Answer",2=>"Yes",3=>"No",4=>"",5=>"",6=>2,7=>"Lessons -> The iOS Simulator",8=>"lessons.html"),4=> array(0=>"Which Language is used to develop iOS applications ?",1=>"Please Select an Answer",2=>"Java",3=>"C++",4=>"Objective-C",5=>"Visual Basic",6=>4,7=>"Objective-C",8=>"objectiveC.html"),5=> array(0=>"Where to deploy an iOS Application after Development ?",1=>"Please Select an Answer",2=>"Google Play",3=>"Facebook",4=>"Windows Store",5=>"iTunes App Store",6=>5,7=>"Lessons -> Publish In the AppStore",8=>"lessons.html"),6=> array(0=>"Which Account do you require to develop applications for iOS ?",1=>"Please Select an Answer",2=>"Apple Developer Account",3=>"Facebook",4=>"Github",5=>"Twitter",6=>2,7=>"Tools/ Resources -> An iOS Developer Account",8=>"tools.html#iosdevaccount"),7=> array(0=>"What kind of Programming lanfuage is Objective-C ?",1=>"Please Select an Answer",2=>"Structural",3=>"Procedural",4=>"Object Oriented",5=>"Aspect Oriented",6=>4,7=>"Objective-C",8=>"objectiveC.html"),8=> array(0=>"What is the event generated when a user taps on a button ?",1=>"Please Select an Answer",2=>"Click",3=>"Touch",4=>"Tap",5=>"",6=>3,7=>"Lessons -> iOS Application Basics",8=>"lessons.html"),9=> array(0=>"What is a Placeholder ?",1=>"Please Select an Answer",2=>"Container to hold other Controls",3=>"Text that is displayed in the text field when it is empty",4=>"",5=>"",6=>3,7=>"Lessons -> Handling User Input",8=>"lessons.html"),10=> array(0=>"Which control allows a user to select an item from a pre-defined list of items ?",1=>"Please Select an Answer",2=>"Button",3=>"Text View",4=>"Picker",5=>"Image",6=>4,7=>"Lessons -> Pickers",8=>"lessons.html"),11=> array(0=>"Is it possible to change the properties of a UIImage object once created ?",1=>"Please Select an Answer",2=>"Yes",3=>"No",4=>"",5=>"",6=>2,7=>"Lessons -> Adding Images to Your View",8=>"lessons.html"),12=> array(0=>"Is it possible to display a series of animated UIImage images to a UIImageView ?",1=>"Please Select an Answer",2=>"Yes",3=>"No",4=>"",5=>"",6=>2,7=>"Lessons -> Adding Images to Your View",8=>"lessons.html"),13=> array(0=>"Which attribute of Image View is used to display a default Image ?",1=>"Please Select an Answer",2=>"Highlighted",3=>"Image",4=>"Tag",5=>"Interaction",6=>3,7=>"Lessons -> Adding Images to Your View",8=>"lessons.html"),14=> array(0=>"Which datatype in Objective-C is equivalent to int as in C ?",1=>"Please Select an Answer",2=>"NSUInteger",3=>"NSInteger",4=>"id",5=>"NSDecimal",6=>3,7=>"Objective-C -> Variables, Statements, and Expressions",8=>"objectiveC.html"),15=> array(0=>"When the Condition is evaluated in a do...while statement ?",1=>"Please Select an Answer",2=>"After executing the Statements",3=>"Before executing the Statements",4=>"",5=>"",6=>2,7=>"Objective-C -> Making Decisions and Performing Repetitive Tasks",8=>"objectiveC.html"));
		$max=15;
		?>
		<script language="JavaScript">
			$(document).ready(function(e) {
				$('#frmque').submit(function() {
					var data = $('#frmque').serialize();
		
					for (var i=1; i <= <?php print $max; ?>; i++) {
							if ($('#option' + i + " option:selected").text() == "Please Select an Answer") {
								alert("Please select valid answer for all the questions");
								return false;
							}
						}
		
						$.ajax({
							url : $("#frmque").attr('action'),
							type : $("#frmque").attr('method'),
							data : data,
							cache : false,
							success : function(html) {
								document.getElementById('ans').innerHTML = html;
								document.getElementById('ques').innerHTML = " ";
							}
						});
						return false;
					});
				});

				function get_radio_value(ans) {
					var inputs = document.getElementById(ans);
					for (var i = 0; i < inputs.length; i++) {
						if (inputs[i].checked) {
							return inputs[i].value;
						}
					}
				}
		</script>
		<style>
			.styled select {
				background: transparent;
				width: 255px;
				padding: 5px;
				font-size: 16px;
				border: 1px solid #ccc;
				height: 34px;
				-webkit-appearance: none;
			}

			.styled {
				width: 225px;
				height: 34px;
				overflow: hidden;
				/*background: url(http://www.stackoverflow.com/favicon.ico) no-repeat 96% #ddd;*/
				background: url(./images/down.png) no-repeat 96% #ddd;
			}
			.headerLink {
				color: white;
			}
		</style>
	</head>
	<body>

		<!-- Header -->

			<div id="header-wrapper">
				<header class="container" id="site-header">
					<div class="row">
						<div class="12u">
							<div id="logo">
								<h1><a href="index.html" class="headerLink">iPhone App Development Tutor</a></h1>
							</div>
							<nav id="nav">
								<ul>
									<!-- <li><a href="index.html">Home</a></li> -->
									<li><a href="tools.html">Tools/ Resources</a></li>
									<li><a href="lessons.html">Lessons</a></li>
									<li><a href="objectiveC.html">Objective-C</a></li>
									<li class="current_page_item"><a href="selfeval.php">Self-Evaluation</a></li>
									<li><a href="external.html">External Resources</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
			</div>

		<!-- Main -->

			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u  skel-cell-mainContent">

							<h2><?php print "$title"; ?></h2>
							<h4>Following are few self evaluation questions that help to test your knowledge on iOS Application development. User has to select answer for all the questions, press on "Evaluate" button to view the result.</h4>

								<div  class="12u skel-cell-mainContent" id="ques">
									<form id="frmque" method="post" action="result.php">
										<TABLE BORDER=0 CELLSPACING=5 >
											<?php
											shuffle($a);
											for($i=1;$i<=10;$i++) {
											print "<tr><td align=left><p>";
											print "<b>".$a[$i][0]."</b><br />";
											print "<div class='styled'>";
											print "<select id='option$i' name='option$i' onkeypress=\"if(event.keyCode==13) {\$('form#frmque').submit();}\">";
											for($j=1;$j<=5;$j++) {
											if($a[$i][$j]!="") {
											print "<option VALUE=$j>".$a[$i][$j]."</option>";
											}
											}
											print "</select></div><br />";
											print "<INPUT TYPE=hidden NAME='correct$i' VALUE=";
											print $a[$i][6];
											print ">";
											print "<INPUT TYPE=hidden NAME='section$i' VALUE='";
											echo $a[$i][7];
											print "'>";
											print "<INPUT TYPE=hidden NAME='sectionLink$i' VALUE='";
											echo $a[$i][8];
											print "'>";
											print "<INPUT TYPE=hidden NAME='question$i' VALUE='";
											echo $a[$i][0];
											print "'>";
											print "</td></tr>";
											}
											?>
											<tr>
												<td>
													<?php
													print "<INPUT TYPE=hidden NAME='maximum' VALUE='";
													echo 10;
													print "'>";
													print "<INPUT TYPE=hidden NAME='full' VALUE='";
													print base64_encode(serialize($a));
													print "'>";
													?>
													<input type="submit" value="Submit" style="display: none"/><br />
													<a class="button" onclick="$('form#frmque').submit();" style="cursor: default">Evaluate</a>
												</td>
											</tr>
										</Table>
									</form>
								</div>
								<div class="12u skel-cell-mainContent" id="ans">
								</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->

			<div id="footer-wrapper">
			<footer class="container" id="site-footer">
				<div class="row">
					<div class="12u">
						<div id="copyright">
							Developed for St. Mary's University Comprehensive Project by <b><a href="mailto:evergreenbalu@gmail.com">Balakrishna Ganapathi.</a></b>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>