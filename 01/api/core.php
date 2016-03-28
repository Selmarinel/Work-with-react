<?
// преобразуем массив $_POST в json сущности
$json = json_encode($_POST);
//путь и сам файл
$file = "comments.json";

// если файла нет, то создадим его
var_dump(is_file($file));
if(is_file($file)) {
	$fp = fopen($file, "a"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту), мы создаем файл
	fwrite($fp, $json); // записываем json в наш файл
	fclose ($fp); // закрываем файл
}

?>
