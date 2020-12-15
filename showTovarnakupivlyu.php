<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="����������� ������, MySQL, �'������� � ����� �����">
    <meta name="description" content="����������� ������. �'������� � ����� �����">
    <title>������� tovar_na_kupivlyu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tabl tovar_na_kupivlyu</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'mybd'); // ��������� ���� ���������� � ������ $mysqli �� ��������� ��������� ��'��� ����� mysqli. ��������� ���������� �� �������: ������, ����, ������, ��
    $mysqli->set_charset("utf8"); // ������������ ��������� utf8
    
    if (mysqli_connect_errno()) {
    printf("ϳ��������� �� ������� �� �������. ��� �������: %s\n", mysqli_connect_error());
    exit;
    }

    /* ��������� ����� ������� */
    if($result = $mysqli->query('SELECT * FROM tovar_na_kupivlyu')) {   // $mysqli - ��� ��'���, ����� ���� ��������� ����������, query - �����, ���� �������� �������� �������� �����

        printf("Spysok tovaru: <br><br>");   // <br> � html - ������ �����
        printf("<table><tr><th>id</th><th>name</th><th>price</th></tr>");   // <br> � html - ������ �����
        /* ������ ���������� ������  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() ������� ����� �� ������ � ������ ������������� ������, ��������� $row = ['id'=>'1', 'pib'=>'���������', 'grupa'=>'���-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['price']); //�������� ��������� �� �������
        };
        printf("</table>");
        /*��������� ���'���*/
        $result->close();
    }

    /*��������� �'�������*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoTovarnakupivlyuForm.php">Vstavyty ryadok</a><br></li>
        <li><a href="updateTovarnakupivlyuForm.php">Zminyty ryadok</a><br></li>
        <li><a href="deleteFromTovarnakupivlyuForm.php">Delete ryadok</a><br></li>
        <li><a href="showGift.php">Gift</a><br></li>
        <li><a href="index.php">return</a><br></li>
    </ul>
    
</body>
</html>
