<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $age
- Присвойте переменной $age произвольное числовое значение
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Конструкции if-elseif-else</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Конструкции if-elseif-else</h1>
	<form action="getage.php" method="get">
		<p>Введите ваш возраст: <input type="text" name="age" size="50">
		<p><input type="submit" value="Что я тебе скажу?">
	</form>
	<?php

	/*
	ЗАДАНИЕ 2
	- Напишите конструкцию if, которая выводит фразу: "Вам ещё работать и работать" при условии, что значение переменной $age попадает в диапазон чисел от 18 до 59(включительно)
	- Расширьте конструкцию if, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной $age больше 59
	- Расширьте конструкцию if-else, выводя фразу: "Вам ещё рано работать" при условии, что значение переменной $age попадает в диапазон чисел от 1 до 17(включительно)
	- Дополните конструкцию if-elseif, выводя фразу: "Неизвестный возраст" при условии, что значение переменной $age не попадает в вышеописанные диапазоны чисел
	*/
	?>
</body>
</html>