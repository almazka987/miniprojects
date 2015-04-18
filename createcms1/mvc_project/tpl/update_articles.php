<div id='mainarea'>
	<div id='main'>
		<?php
		if ($_SESSION["res"]) {
		echo $_SESSION["res"];
		unset($_SESSION["res"]);}
		?>
		<form enctype='multipart/form-data' action='' method='POST'>
			<p>Заголовок статьи:<br />
			<input type='text' name='title' style='width:420px;' value="<?=$content['title']?>">
			<input type='hidden' name='id' style='width:420px;' value="<?=$content['id']?>">
			</p>
			<p>Изображение:<br />
			<input type='file' name='img_src'>
			</p>
			<p>Краткое описание:<br />
			<textarea name='description' cols='50' rows='7'><?=$content['description']?>
			</textarea>
			</p>
			<p>Текст:<br />
			<textarea name='text' cols='50' rows='7'><?=$content['text']?>
			</textarea>
			</p>
			<select name='categ'>
			<?php  	foreach ($categ as $value) {
					if ($content['category_id'] == $value['id']) {?>
					<option selected value="<?=$value['id']?>"><?=$value['name']?>
					</option>
					<?php } ?>
					<option value="<?=$value['id']?>"><?=$value['name']?>
					</option>
					<?php } ?>
			</select>
			<p><input type='submit' name='button' value='Сохранить'></p>
		</form>
	</div>
</div>