<?php

$mysqli = new mysqli('localhost', 'root', '', 'mybd'); // ��������� ���� ���������� � ������ $mysqli �� ��������� ��������� ��'��� ����� mysqli. ��������� ���������� �� �������: ������, ����, ������, ��
$mysqli->set_charset("utf8"); // ������������ ��������� utf8

if (mysqli_connect_errno()) {
    printf("ϳ��������� �� ������� �� �������. ��� �������: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];
$pib = $_POST['pib'];
$gr = $_POST['gr'];

$sql = "UPDATE tovar_na_kupivlyu SET name='$pib', price='$gr' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Ryadok zmineno uspishno";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*��������� �'�������*/
$mysqli->close();

include("showTovarnakupivlyu.php")
?>
