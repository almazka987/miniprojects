<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
<head>
	<title>Получение данных с сервера</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="ru" />
	<script type="text/javascript" src="xmlhttprequest.js"></script>
	<script type="text/javascript">
		// Показ текста, полученного из файла
		function getText(fileName)
		{
			// Создадим объект
			req = getXmlHttpRequest();
			// Установим обработчик
			req.onreadystatechange = function()
			{
				// только при состоянии "complete"
				if (req.readyState == 4)
				{
					// Если спервер вернул статус, отличный от 200...
					if (req.status != 200)
					{
						// Покажем статус
						alert("Статус: " + req.status + " " + req.statusText);
					}
					else
					{
						// Покажем полученные данные
						alert(req.responseText);
					}
				}
			}
			// Выполним асинхронный запрос
			req.open("GET", fileName, true);
			req.send(null);
		}
		
		// Показ заголовков, полученных от сервера
		function getInfo(fileName)
		{
			// Создадим объект
			req = getXmlHttpRequest();
			// Установим обработчик
			req.onreadystatechange = function()
			{
				// только при состоянии "complete"
				if (req.readyState == 4)
				{
					// Все заголовки
					alert(req.getAllResponseHeaders());
					// Некоторые данные
					alert
					(
						"Размер файла:\t" + req.getResponseHeader("Content-Length") + "\n" +
						"Файл изменен:\t" + req.getResponseHeader("last-Modified")
					);
				}
			}
			// Выполним асинхронный запрос
			req.open("GET", fileName, true);
			req.send(null);
		}		
		
		
	</script>
</head>
<body>
	<h1>Получение данных с сервера</h1>
	<div id="sync">
		<button onclick="getText('sendfile.txt')">Текст из файла</button>
		<button onclick="getText('badFile.txt')">Файла нет</button>
		<button onclick="getInfo('sendfile.txt')">Информация о файле</button>
	</div>
</body>
</html>

