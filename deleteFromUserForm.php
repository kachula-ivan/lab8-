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

<form action="deleteFromUser.php" method="post">
        <label>Id delete</label><input name="id" type="text"><br>
        <input type="submit" value="Delete ryadok">
</form>

</body>
</html>