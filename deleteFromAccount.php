<?php

$mysqli = new mysqli('localhost', 'root', '', 'mybd'); // ��������� ���� ���������� � ������ $mysqli �� ��������� ��������� ��'��� ����� mysqli. ��������� ���������� �� �������: ������, ����, ������, ��
$mysqli->set_charset("utf8"); // ������������ ��������� utf8

if (mysqli_connect_errno()) {
    printf("ϳ��������� �� ������� �� �������. ��� �������: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['tel'];


$sql = "DELETE FROM account WHERE tel='$id'";


if($mysqli->query($sql)){
    echo "Ryadok vydaleno uspishno";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*��������� �'�������*/
$mysqli->close();

include("showAccount.php")
?>
