<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="����������� ������, MySQL, �'������� � ����� �����">
    <meta name="description" content="����������� ������. �'������� � ����� �����">
    <title>Vstavka danych</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showAccount.php")    
    ?>

    <form action="InsertIntoAccount.php" method="post">
        <label>tel</label><input name="pib22" type="text"><br>
        <label>password</label><input name="gr22" type="text"><br>
        <input type="submit" value="Vstavyty ryadok">
    </form>

</body>
</html>
