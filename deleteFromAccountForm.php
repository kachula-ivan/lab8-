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
        include("showAccount.php")    
    ?>

<form action="deleteFromAccount.php" method="post">
        <label>tel delete</label><input name="tel" type="text"><br>
        <input type="submit" value="Delete ryadok">
</form>

</body>
</html>