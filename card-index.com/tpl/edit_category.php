		<p class="add"><a href='?option=add_category'> >>> Добавить новую категорию <<<</a></p>
		<?php  	if ($_SESSION["res"]) {
				echo $_SESSION["res"];
				unset($_SESSION["res"]);
			}
			foreach ($content as $value) { ?>
			<p style='font-size: 15px;'>
			<a href="?option=update_category&id=<?=$value['id']?>"><?=$value['name']?></a> | <a href="?option=delete_category&del=<?=$value['id']?>">Удалить пункт</a></p>
			<?php } ?>
	</div>
</div>