<style>

ul{
	list-style-type: none;
}

.task{
	padding: 7px;
	margin: 5px;
	background: rgba(0,0,200,0.2);
	border: 1px solid #999;
	border-radius: 10px;
}

</style>


<?php

//______ functions

function cutExt($n){
	return str_replace(".json", '', $n);
}

function removePoints($arr){
	unset($arr[0]);
	unset($arr[1]);
	return $arr;
}

//____ 

if(!isset($_GET['test'])){
  echo "Вы не указали номер теста";
  die();
}

$n = $_GET['test'];

$files = scandir("tests");
$files = array_map("cutExt", $files);
$files = removePoints($files);

if(!in_array($n, $files)){
	echo "Такого файла не найдено";
	die();
}

$data = file_get_contents("tests/".$n.".json");

$test = json_decode($data);



if(isset($_POST['results'])){
	$results = $_POST['results'];
	foreach($results as $j => $task){
		if(array_keys($task) == $test[$j]->answers){
			echo "<div style='color: green;' >Задание ".($j+1)." выполнено верно.</div>";
		} else {
			echo "<div style='color: red;' >Задание ".($j+1)." выполнено неверно.</div>";
		}
	}
}

?>

<form method="POST">
	<div class="test">
		<?php
		foreach($test as $s => $item){
			//var_dump($item);

		?>
		<div class="task">
			<div>
				<?= $item->question ?>
			</div>
			<ul>
			<?php
			foreach($item->items as $i => $li):
			?>
				<li>

					<input type="checkbox" name="results[<?= $s ?>][<?= $i ?>]">
					<?=  $li ?>
				</li>
			<?php
			endforeach;
			?>
			</ul>

		</div>

		<?php
		}
		?>
	</div>
	<input type="submit" value="Отправить на проверку">
</form>

   <form action="admin.php" method="GET">
          <input type="submit" value="Загрузить новый тест"><br>
      </form>

