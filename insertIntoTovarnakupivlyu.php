<?php

$mysqli = new mysqli('localhost', 'root', '', 'mybd'); // ��������� ���� ���������� � ������ $mysqli �� ��������� ��������� ��'��� ����� mysqli. ��������� ���������� �� �������: ������, ����, ������, ��
$mysqli->set_charset("utf8"); // ������������ ��������� utf8

if (mysqli_connect_errno()) {
    printf("ϳ��������� �� ������� �� �������. ��� �������: %s\n", mysqli_connect_error());
    exit;
}

$pib = $_POST['pib']; $gr = $_POST['gr']; $gr1 = $_POST['gr1'];

$sql = "INSERT INTO tovar_na_kupivlyu (id, name, price) VALUES ('$pib', '$gr' , '$gr1')";


if($mysqli->query($sql)){
    echo "Ryadok vstavleno uspishno";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*��������� �'�������*/
$mysqli->close();

include("showTovarnakupivlyu.php")
?>
