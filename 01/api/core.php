<?
// ����������� ������ $_POST � json ��������
$json = json_encode($_POST);
//���� � ��� ����
$file = "comments.json";

// ���� ����� ���, �� �������� ���
var_dump(is_file($file));
if(is_file($file)) {
	$fp = fopen($file, "a"); // ("r" - ��������� "w" - ��������� "a" - ��������� � ������), �� ������� ����
	fwrite($fp, $json); // ���������� json � ��� ����
	fclose ($fp); // ��������� ����
}

?>
