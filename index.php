<?php

?>
<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<meta charset="utf-8" />
		<link href="css/style.css" rel="stylesheet" />
		<title>ACM NIT Surat Chapter | Home</title>
		<script src="//use.edgefonts.net/ubuntu:n3,i3,n4,i4,n5,i5,n7,i7:all.js"></script>
	</head>
	<body>
		<div id="thecontainer">
			<div id="logohead" class="middle">
				<div id="svnitlogo">
				</div>
				<div id="acmtext">
					NIT Surat ACM Chapter
				</div>
				<div id="acmlogo">
				</div>
				<div class="clear"></div>
			</div>
			<div class="fullhr"></div>
			<div id="headerblock" class="middle">
				<ul id="navigationpanel">
					<li id="0" onclick="populate(this.id)" class="navitems"><a href="#">Home</a></li>
					<li id="1" onclick="populate(this.id)" class="navitems"><a href="#">Events</a></li><!-- place event archives here as well -->
					<li id="2" onclick="populate(this.id)" class="navitems"><a href="#">Team</a></li>
					<li id="3" onclick="populate(this.id)" class="navitems"><a href="#">About</a></li>
					<li id="4" onclick="populate(this.id)" class="navitems"><a href="#">Contact</a></li>
				</div>
			</div>
			<div id="thecontent">
				<!-- Populate this through JavaScript -->
			</div>
			<div id="thefooter">
				<div class="middle" style="width: 800px">
					<span id="copyright"></span>
					<div id="plugins">
						<span><a id="fb" target="_blank" href="https://www.facebook.com/acmnitsurat/" title="ACM SVNIT Facebook Page"></a></span>
						<span><a id="t" target="_blank" href="https://www.twitter.com/acmnitsurat/" title="Follow ACM SVNIT on Twitter"></a></span>
						<span><a id="gp" target="_blank" href="https://plus.google.com/102663242082547358717" title="ACM SVNIT Google+ Profile"></a></span>
					</div>
				</div>
			</div>
		</div>
		<noscript style="position: absolute;top: 0;height: auto; width: 100%;background: #f00;text-align: center;color: #fff">This site uses JavaScript for its normal functioning. You may experience trouble navigating at this page. Open the lite version <a href="http://nitsurat.acm.org/lite/">here</a>.
		</noscript>
		<script src="js/anim.min.js"></script>
		<script type='text/javascript'>
			acmtext.addEventListener('mouseover', function(){
				(new anim(acmtext))
					//duration in secs, parameters
				.numeric(0.5,{'opacity':1, ease: Ease.easeInOutQuad})
				//.numeric(0.5,{'margin-top': -20, ease: Ease.easeInOutQuad})
				.onUpdate(function(el){
					console.log(el.style.opacity);
				})
				.onComplete(function(el){
					console.log('finished onhover');
				});
			});
			acmtext.addEventListener('mouseout', function(){
				(new anim(acmtext))
					//duration in secs, parameters
				.numeric(0.5,{'opacity': 0.5, ease: Ease.easeInOutQuad})
				.onUpdate(function(el){
					console.log(el.style.opacity);
				})
				.onComplete(function(el){
					console.log('finished onblur');
				});
			});
		</script>
		<script src="js/main.js"></script>
		<script src="js/data.js"></script>
	</body>
</html>
