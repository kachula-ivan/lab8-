<?php

$mysqli = new mysqli('localhost', 'root', '', 'mybd'); // ��������� ���� ���������� � ������ $mysqli �� ��������� ��������� ��'��� ����� mysqli. ��������� ���������� �� �������: ������, ����, ������, ��
$mysqli->set_charset("utf8"); // ������������ ��������� utf8

if (mysqli_connect_errno()) {
    printf("ϳ��������� �� ������� �� �������. ��� �������: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];


$sql = "DELETE FROM user WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Ryadok vstavleno uspishno";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*��������� �'�������*/
$mysqli->close();

include("showUser.php")
?>
