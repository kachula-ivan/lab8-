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
        include("showTovarnakupivlyu.php")    
    ?>

<form action="updateTovarnakupivlyu.php" method="post">
        <label> id</label><input name="id" type="text"><br>
        <label>new name</label><input name="pib" type="text"><br>
        <label>new price</label><input name="gr" type="text"><br>
        <input type="submit" value="Minyaem ryadok">
</form>

</body>
</html>