<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
	<title>Объект event</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<style type="text/css">
		body { width: 100%; height: 100%; cursor: crosshair }
		#result { position: absolute; top: 0px; right: 0px; width: 300px; font-size: 80%; background-color:#cfc; padding: 10px }
	</style>
	<script type="text/javascript">
		 function showEventProperties()
		 {
			var result = document.getElementById("result");
			result.innerHTML = 
				"x: " + event.x + "<br>" + 
				"y: " + event.y + "<br>" + 
				"clientX: " + event.clientX + "<br>" + 
				"clientY: " + event.clientY + "<br>" + 
				"offsetX: " + event.offsetX + "<br>" + 
				"offsetY: " + event.offsetY + "<br>" + 
				"screenX: " + event.screenX + "<br>" + 
				"screenY: " + event.screenY + "<br>" + 
				"button: " + event.button + "<br>" +
				"keyCode: " + event.keyCode + "<br>" +
				"altKey: " + event.altKey + "<br>" +
				"ctrlKey: " + event.ctrlKey + "<br>" +
				"shiftKey: " + event.shiftKey + "<br>" +
				"srcElement: " + event.srcElement.tagName;
		 }
	</script>
</head>

<body 
		onmousemove="showEventProperties()"
		onmousedown="showEventProperties()"
		onmouseup="showEventProperties()"
		onkeydown="showEventProperties()"
		onkeyup="showEventProperties()">
	<pre id="result">234</pre>
	<h1>Объект event</h1>
	<div>
		<h2>Заголовок</h2>
		<p>
			Параграф
			<strong>Жирный текст</strong>
		</p>
	</div>
</body>
</html>
