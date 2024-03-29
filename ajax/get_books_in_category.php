<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
<head>
	<title>Выбор книг из категории</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="ru" />
	<script type="text/javascript" src="xmlhttprequest.js"></script>
	<script type="text/javascript">
		// Очистка списка
		function clearList()
		{
			var ulResult = document.getElementById("ulResult");
			while (ulResult.hasChildNodes())
				ulResult.removeChild(ulResult.lastChild);
		}
		
		// Добавление нового элемента списка
		function addListItem(text)
		{
			if (text.length == 0) return;
			var ulResult = document.getElementById("ulResult");
			var li = document.createElement("li");
			ulResult.appendChild(li);
			var liText = document.createTextNode(text);
			li.appendChild(liText);
		}
		
		// Запрос данных
		function showBooks()
		{
			var req = getXmlHttpRequest();
			req.onreadystatechange = function()
				{
					if (req.readyState != 4) return;
					var responseText = new String(req.responseText);
					var books = responseText.split('\n');
					clearList();
					for (var i = 0; i < books.length; i++)
						addListItem(books[i]);
				}
			var txtCat = document.getElementById("txtCat");
			req.open("GET", "get_books_in_category2.php?cat=" + txtCat.value, true);
			req.send(null);
		}
		
		
	</script>
</head>
<body>
	<h1>Передача данных методом GET</h1>
	<form onsubmit="return false">
		<label for="txtCat">Код категории</label>
		<input id="txtCat" type="text" />
		<button onclick="showBooks()">Показать</button>
	</form>
	<ul id="ulResult"></ul>
</body>
</html>

