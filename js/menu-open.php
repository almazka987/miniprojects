<!doctype html>

<html>
<head>
	<title>Раскрывающийся список</title>
	<meta charset="utf-8">
	<style type="text/css">
		ul.expandable li { list-style-image: url('img/point.gif') }
		li ul.expandable { display: none }
	</style>
	<script type="text/javascript">
		/*
			Опишите функцию setPlusIcon(), которая 
			- устанавливает для элементов li значок [+], 
				если этот элемент имеет вложенный список
			- регистрирует функцию aClick в качестве обработчика события onclick
				для всех ссылок
		*/
		/*
			Запустите функцию setPlusIcon() при загрузке страницы
		*/
		window.onload = setPlusIcon;
		function setPlusIcon(){
			var allLIs = document.getElementsByTagName('LI');
			for (var i=0; i<allLIs.length; i++) {
				var li = allLIs[i];
				var allULs = li.getElementsByTagName('UL');
				if (allULs.length>0) {
					if (allULs[0].className =='expandable') {
						li.style.listStyleImage = 'url("img/plus.gif")';
					}
				}
			}
			var allA = document.getElementsByTagName('A');
			for (var i = 0; i < allA.length; i++) {
				allA[i].addEventListener('click', aClick);
			}
		}
		
		/*
			Опишите функцию aClick(), которая обрабатывает щелчок по ссылке
			1. Получите объект - ссылку, по которой был сделан щелчок 
			2. Найдите родительский li
			3. Найдите вложенный список
			4. Если вложенных списков нет - разрешите переход по ссылке
			5. Назначьте вложенному списку нужные свойства и поменяйте иконку
			6. Запретите переход по ссылке
		*/
		function aClick(e){
			e = e || event;
			objA = e.target || e.srcElement;
			var li = objA.parentNode;
			var uls = li.getElementsByTagName('UL');
			if (uls.length == 0) {
				return true;
			}
			if (uls[0].style.display == '') {
				uls[0].style.display = 'block';
				li.style.listStyleImage = 'url("img/minus.gif")';
			}else {
				uls[0].style.display = '';
				li.style.listStyleImage = 'url("img/plus.gif")';
			}
			e.preventDefault();
		}	
		
	</script>
</head>

<body>
	<h1>Пример раскрывающегося списка</h1>
	<ul class="expandable">
		<li>
			<a href="#">Книги</a>
			<ul class="expandable">
				<li>
					<a href="#">Отечественные</a>
					<ul class="expandable">
						<li><a href="#">Детективы</a></li>
						<li><a href="#">Научная фантастика</a></li>
						<li><a href="#">Исторические</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Зарубежные</a>
					<ul class="expandable">
						<li><a href="#">Детективы</a></li>
						<li><a href="#">Научная фантастика</a></li>
						<li><a href="#">Исторические</a></li>
					</ul>
				</li>
			</ul>
		</li>
 		<li>
			<a href="#">DVD</a>
			<ul class="expandable">
				<li>
					<a href="#">Отечественные</a>
					<ul class="expandable">
						<li><a href="#">Детективы</a></li>
						<li><a href="#">Научная фантастика</a></li>
						<li><a href="#">Исторические</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Зарубежные</a>
					<ul class="expandable">
						<li><a href="#">Детективы</a></li>
						<li><a href="#">Научная фантастика</a></li>
						<li><a href="#">Исторические</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</body>
</html>
