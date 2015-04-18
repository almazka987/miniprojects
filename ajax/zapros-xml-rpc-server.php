<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
<head>
	<title>Отправка XML-RPC сообщения на сервер</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="ru" />
	<script type="text/javascript" src="xmlhttprequest.js"></script>
	<script type="text/javascript" src="xmlrpc.js"></script>
	<script type="text/javascript">
		function demoXMLRPC()
		{
			// Формируем сообщение
			var msg = new XMLRPCMessage("simpleServer.sayHello", "utf-8"); 
			msg.addParameter("Вася Пупкин"); 
			//alert(msg.xml());
			var rawData = msg.xml();
			
			// Запрос сервера
			// Объект запроса
			var req = getXmlHttpRequest();
			req.onreadystatechange = function()
				{
					if (req.readyState != 4) return;
					alert(req.responseText);
				}
			req.open("POST", "zapros-xml-rpc-server1.php", true);
			req.setRequestHeader("Content-Type", "text/xml");
			req.setRequestHeader("Content-Length", rawData.length);
			req.send(rawData);			
		}
	</script>
</head>
<body>
	<h1>Отправка XML-RPC сообщения на сервер</h1>
	<div>
		<button onclick="demoXMLRPC()">Проба XML-RPC</button>
	</div>
</body>
</html>

