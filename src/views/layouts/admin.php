<h1>"this is admin page"</h1>

<?php if(isset($data["result"])) { ?>
      <h3>
        <?php
          if($data["result"] == "true"){
            echo "Đăng nhap  thành công";
          }else{
            echo "Đăng nhap thất bại";
          }
        ?>
      </h3>
<?php } ?>