<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="����������� ������, MySQL, �'������� � ����� �����">
    <meta name="description" content="����������� ������. �'������� � ����� �����">
    <title>������� �����</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showUser.php")    
    ?>

    <form action="insertIntoUser.php" method="post">
        <label>id</label><input name="idd" type="text"><br>
        <label>name</labelt><input name="nam" type="text"><br>
        <label>place</label><input name="pla" type="text"><br>
        <input type="submit" value="�������� �����">
    </form>

</body>
</html>
