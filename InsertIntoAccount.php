<?php

$mysqli = new mysqli('localhost', 'root', '', 'mybd'); // ��������� ���� ���������� � ������ $mysqli �� ��������� ��������� ��'��� ����� mysqli. ��������� ���������� �� �������: ������, ����, ������, ��
$mysqli->set_charset("utf8"); // ������������ ��������� utf8

if (mysqli_connect_errno()) {
    printf("ϳ��������� �� ������� �� �������. ��� �������: %s\n", mysqli_connect_error());
    exit;
}

$pib22 = $_POST['pib22']; $gr22 = $_POST['gr22'];

$sql = "INSERT INTO account (tel, password) VALUES ('$pib22', '$gr22' )";


if($mysqli->query($sql)){
    echo "Ryadok vstavleno uspishno";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*��������� �'�������*/
$mysqli->close();

include("showAccount.php")
?>