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
        include("showKorzyna.php")    
    ?>

<form action="deleteFromKorzyna.php" method="post">
        <label>id delete ryadok</label><input name="id" type="text"><br>
        <input type="submit" value="Delete ryadok">
</form>

</body>
</html>