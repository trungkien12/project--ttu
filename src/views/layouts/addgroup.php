<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style--header.css">
    <link rel="stylesheet" href="../public/css/style--footer.css">
    <link rel="stylesheet" href="../public/css/slider.css">
    <link rel="stylesheet" href="../public/font/fontawesome-free-5.15.2-web/css/all.min.css">
    <title>Document</title>

    <style>
        .td > a {
            color: #000;
        }

        h1 {
            text-align: center;
            margin: 50px 0;
        }

        .tr {
            border: 2px solid #ccc;
        }

        .tbl {
            align-self: center;
            width: 70%;
            text-align: center;
            margin: 0 15%;
        }

        .td,
        .th {
            text-align: start;
            border: 2px solid #ccc;
        }

        .title2 {
            margin: 40px 0 0 290px;
        }

        h5 {
            color: red;
            text-transform: uppercase;
        }

        form {
            margin: 0 0 40px 285px;
        }
        tr {
            padding: 20px;
            margin: 10px;
        }

        .input {
            border: 1px solid #ccc;
        }

        th {
            min-width: 120px;
        }
    </style>
</head>
<body>

<?php require_once "./src/views/partial/headerAdmin.php" ?>
    
<div class="title" style="background-color: #ccc;">
    <h1>Xử lý dữ liệu nhóm tin</h1>
</div>

<table class='tbl' width='80%' align="center" height='200px' >
    <tr class='tr'>
        <th class='th'>ID nhóm tin</th>
        <th class='th'>Tên nhóm tin</th>
        <th class='th'>Xử lý</th>
    </tr>


<?php
    $i = 0;
    while($r = mysqli_fetch_array($data["gr"]))
    {
        $i++;
        $idnhom = $r["id_groupnews"];
        $tennhom = $r["name_groupnews"];
        echo "<tr>";
            echo "<td class='td'>$idnhom</td>";
            echo "<td class='td'>$tennhom</td>";
            
            echo "<td class='td'>";
                echo "<a href='http://localhost:8080/project--ttu/admin/updategroup/$idnhom'> Sửa </a>";
                echo " | <a href='http://localhost:8080/project--ttu/admin/deletegroup/$idnhom''> Xoá </a>";
            echo "</td>";
        echo "</tr>";
    }


    echo "</table>";
?>
<div class="title2">
<h5>Thêm nhóm tin mới</h5>
</div>

<form  action="../admin/processInsertGroupNews" method="POST">
     <table>
         <tr>
            <th>ID nhóm tin:</th>
            <th class='input'> <input type="text" name="idgr" size="25"> </th>
         </tr>
         <tr>
            <th>Tên nhóm tin:</th>
            <th class='input'> <input type="text" name="namegr" size="25"> </th>
         </tr>
         <tr>
            <th colspan="2" align="right">
                <input type="submit" name="add" value="Chấp nhận">
            </th>
         </tr>
     </table>
</form>


<?php require_once "./src/views/partial/footer.php" ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>