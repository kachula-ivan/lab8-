<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <meta name="keywords" content="����������� ������, MySQL, �'������� � ����� �����">
    <meta name="description" content="����������� ������. �'������� � ����� �����">
    <title>������� Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tabl Account</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'mybd'); // ��������� ���� ���������� � ������ $mysqli �� ��������� ��������� ��'��� ����� mysqli. ��������� ���������� �� �������: ������, ����, ������, ��
    $mysqli->set_charset("utf8"); // ������������ ��������� utf8
    
    if (mysqli_connect_errno()) {
    printf("ϳ��������� �� ������� �� �������. ��� �������: %s\n", mysqli_connect_error());
    exit;
    }

    /* ��������� ����� ������� */
    if($result = $mysqli->query('SELECT * FROM akcia')) {   // $mysqli - ��� ��'���, ����� ���� ��������� ����������, query - �����, ���� �������� �������� �������� �����

        printf("Akcia's: <br><br>");   // <br> � html - ������ �����
        printf("<table><tr><th>id</th><th>zmist</th>"); 
        // <br> � html - ������ �����
        /* ������ ���������� ������  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() ������� ����� �� ������ � ������ ������������� ������, ��������� $row = ['id'=>'1', 'pib'=>'���������', 'grupa'=>'���-31']
            printf("<tr><td>%s</td><td>%s</td>", $row['id'], $row['zmist']); //�������� ��������� �� �������
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
        <li><a href="showTovarnaprodagh.php">exit</a><br></li>
        <li><a href="insertIntoKorzynaForm.php">Vstavyty ryadok</a><br></li>
        <li><a href="deleteFromKorzynaForm.php">Delete ryadok</a><br></li>
    </ul>
    
</body>
</html>
