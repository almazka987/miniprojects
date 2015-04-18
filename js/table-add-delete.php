﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Генерация таблицы</title>
<style type="text/css">
html{font:18px calibri, sans-serif;}
table{cursor:default;}
td{padding:10px;border:1px solid #369;}
sup{padding-left:4px;font-size:14px;color:#678;}
thead td{background:#ccf;}
tfoot td{background:#cfc;}
caption{padding:5px;white-space:nowrap;border:1px solid #d30;background:#ffc;}
</style>
<script type="text/javascript">
/*Количество ячеек*/
var td_count = 10;

/*Таблица*/
var t;

function createContent() {
	t = window.tbl;
	/*Вызываем функцию генерации строк для разных секций*/
	if (!t.rows.length) {
		create(t.tBodies[0] || t, 4);
		create(t.createTHead(), 2);
		create(t.createTFoot(), 3);
	}
	
	/*Функция заполняет переданную секцию нужным количеством строк*/
	function create(section, tr_count) {
		for (var i = 0, tr; i < tr_count; i++) {
			/*Добавляем строку в секцию*/
			/*Длина коллекции меняется динамически*/
			tr = section.insertRow(section.rows.length);
			
			/*А вот тут и надо ставить обработчик клика на строке*/
			//tr.onclick = deleteRow;
			for (var j = 0, td; j < td_count; j++) {
				/*Добавляем ячейку в строку*/
				td = tr.insertCell(tr.cells.length);
				/*В ячейке пишем номер ячейки*/
				td.innerHTML = tr.cells.length;
				
				/*В элементе <sup> ставим номер строки*/
				td.innerHTML += '<sup>' + section.rows.length + '</sup>';
				//td.textContent += '<sup>' + section.rows.length + '</sup>';
			}
		}
	}
}
	/*Функция удаляет таблицу*/
	function deleteContent() {
		if(t.tHead)
			t.deleteTHead();
		if(t.tFoot)
			t.deleteTFoot();
		if(t.tBodies){
			if (t.tBodies[0].rows.length){
				for (var i = t.tBodies[0].rows.length; i > 0; i--){
					t.tBodies[0].deleteRow(t.tBodies[0].rows[i]);
				}
			}
		}
	}
</script>
</head>
<body>
<a href="javascript:createContent();">Создать таблицу</a>
&nbsp;|&nbsp;
<a href="javascript:deleteContent();">Удалить таблицу</a>
<table id="tbl">
	<caption>Таблица</caption>
</table>
</body>
</html>