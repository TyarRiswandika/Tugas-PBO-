<?php
require 'koneksi.php';
$lagu = query("SELECT * FROM list ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> TYAR RISWANDIKA</h1>
<hr>

<table border ='1'> 
    <tr>
        <th> ID_MUSIK </th>
        <th> ID_GENRE </th>
        <th> MUSIK </th>
        <th> GENRE </th>
        <th> ARTIS </th>
        <th> EKSPRESIF </th>
</tr>
<?php foreach( $lagu as $row) :?>
    <tbody>
        <div>
            <tr>
                <td><?= $row["id_musik"];?></td>
                <td><?= $row["id_genre"];?></td>
                <td><?= $row["musik"];?></td>
                <td><?= $row["genre"];?></td>
                <td><?= $row["artis"];?></td>
                <td><?= $row["ekspresif"];?></td>
</tr>
</div>
<?php endforeach;?>
</table>
</body>
</html>