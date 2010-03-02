<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Development Team Random Chooser</title>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript"> google.load("jquery", "1.3.2"); </script>
		<script src="jqtouch/jqtouch.min.js" type="application/x-javascript" charset="utf-8"></script>
		<script type="text/javascript">
		var jQT = $.jQTouch({
			icon: 'jqtouch.png',
			statusBar: 'black-translucent',
			preloadImages: [
				'themes/jqt/img/chevron_white.png',
				'themes/jqt/img/bg_row_select.gif',
				'themes/jqt/img/back_button_clicked.png',
				'themes/jqt/img/button_clicked.png'
				]
		});
		$(function(){
			$('#team').submit(function(){
				$('#home img').removeClass('present');
				$('#settings input[type=checkbox]:checked').each(function(){
					$('#' + this.value).addClass('present');
				});
				jQT.goBack();
				return false;
			});

			$('#home .rightButton').click(function() {
				$('#home').append('<div id="mask"><div id="choosing"><img src="images/ajax-loader.gif" alt="Loader" /><br />Choosing...</div></div>');
				$('#mask').css({
					'background-color': '#000000',
					'opacity': 0
				});
				$('#mask').animate({'opacity': 0.8},'fast','swing',function(){
					// Choose someone randomly, fade all the other pictures
					// out.
				});
			});
		});
		</script>

		<style type="text/css" media="screen">@import "jqtouch/jqtouch.min.css";</style>
		<style type="text/css" media="screen">@import "themes/jqt/theme.min.css";</style>
		<link rel="stylesheet" href="css/main.css" type="text/css" />

	</head>

	<body>
		<div id="home">
			<div class="toolbar">
				<h1>Chooser</h1>
				<a href="#settings" class="button leftButton flip">Settings</a>
				<a href="#" class="button rightButton">Pick</a>
			</div>
			<img id="amace" src="images/amace.jpg" alt="Alex Mace"
				 title="Alex Mace" /><img id="jastley" src="images/jastley.jpg"
				 alt="Jon Astley" title="Jon Astley" /><img id="lrowley"
				 src="images/lrowley.jpg" alt="Les Rowley"
				 title="Les Rowley" /><img id="marcusjhdon" 
				 src="images/marcusjhdon.jpg" alt="Marcus Don"
				 title="Marcus Don" /><img id="rdeeson"
				 src="images/rdeeson.jpg" alt="Rich Deeson"
				 title="Rich Deeson" /><img id="rgrundy" src="images/rgrundy.jpg"
				 alt="Rich Grundy" title="Rich Grundy" /><img id="rgoldsmith"
				 src="images/rgoldsmith.jpg" alt="Rob Goldsmith"
				 title="Rob Goldsmith" /><img id="tcurzon" 
				 src="images/tcurzon.jpg" alt="Tim Curzon"
				 title="Tim Curzon" />
		</div>
		<div id="settings">
			<div class="toolbar">
				<h1>Settings</h1>
				<a href="#add" class="cancel">Cancel</a>
			</div>
			<form id="team">
				<ul class="edit rounded">
					<li><input type="checkbox" name="member[]" value="amace" title="Alex Mace" /></li>
					<li><input type="checkbox" name="member[]" value="jastley" title="Jon Astley" /></li>
					<li><input type="checkbox" name="member[]" value="lrowley" title="Les Rowley" /></li>
					<li><input type="checkbox" name="member[]" value="marcusjhdon" title="Marcus Don" /></li>
					<li><input type="checkbox" name="member[]" value="rdeeson" title="Rich Deeson" /></li>
					<li><input type="checkbox" name="member[]" value="rgrundy" title="Rich Grundy" /></li>
					<li><input type="checkbox" name="member[]" value="rgrundy" title="Rob Goldsmith" /></li>
					<li><input type="checkbox" name="member[]" value="tcurzon" title="Tim Curzon" /></li>
				</ul>
				<a href="#" style="margin: 10px;" class="whiteButton submit">Save</a>
			</form>
		</div>
	</body>
</html>
