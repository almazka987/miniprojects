<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
<head>
	<title>Взаимодействие с XML-RPC сервером</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="ru" />
	<script type="text/javascript" src="xmlhttprequest.js"></script>
	<script type="text/javascript" src="xmlrpc.js"></script>
	<script type="text/javascript" src="xslt.js"></script>
	<script type="text/javascript" src="xmltools.js"></script>
	<script type="text/javascript">
		function sayHello()
		{
			var userName = document.getElementById("txtUserName").value;
		
			// Формируем сообщение
			var msg = new XMLRPCMessage("simpleServer.sayHello", "utf-8"); 
			msg.addParameter(userName); 
			var rawData = msg.xml();
			
			// Запрос сервера
			// Объект запроса
			var req = getXmlHttpRequest();
			req.onreadystatechange = function()
				{
					if (req.readyState != 4) return;
					// Получаем DOM документ
					var dom = req.responseXML;
					var xsl = loadXML("hello-user.xsl");
					//param = dom.getElementsByTagName("string")[0];
					//var result = param.firstChild.nodeValue;
					document.getElementById('result').innerHTML = xsltTransform(dom, xsl);
					//alert(param.firstChild.nodeValue);
				}
			req.open("POST", "hello-user-xml-rpc-server1.php", true);
			req.setRequestHeader("Content-Type", "text/xml");
			req.setRequestHeader("Content-Length", rawData.length);
			req.send(rawData);			
		}
	</script>
</head>
<body>
	<h1>Взаимодействие с XML-RPC сервером</h1>
	<div id="result"></div>
	<form onsubmit="return false">
		<label for="txtUserName">Ваше имя:</label>
		<input id="txtUserName" value="Пользователь" />
		<button onclick="sayHello()">Привет</button>
	</form>
</body>
</html>

