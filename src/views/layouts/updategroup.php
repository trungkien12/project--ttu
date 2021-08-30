
<?php
    $r = $data["namegr"];
    $id = $r["id_groupnews"];
    $name = $r["name_groupnews"];
?>
<h3 style="color: red;">Sửa thông tin nhóm tin: <?php echo $name?> </h3>

<style>
    p {
        margin: 0;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 16px;
    }
</style>
<form action="../processUpdateGroup" method="POST">
    <p>ID Nhóm Tin:</p><input type="text" name="idnhom" value="<?php echo $id?>">
    <br>
    <br>
    <p>Tên Nhóm Tin:</p> <input type="text" name="tennhom" value="<?php echo $name?>">
    <br>
    <br>
    <input type="submit" name="update" value="Chấp nhận">
</form>