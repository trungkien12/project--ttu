<div class="form__container">

  <form action="../register/processRegister" method="POST">
    <div class="mb-3">
      <label for="txtFullname" class="form-label">Họ và tên</label>
      <input type="text" class="form-control" id="txtEmail" name="txtFullname" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="txtEmail" class="form-label">Email</label>
      <input type="email" class="form-control" id="txtEmail" name="txtEmail" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="txtUsername" class="form-label">Username</label>
      <input type="text" class="form-control" id="txtEmail" name="txtUsername" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="txtPass" class="form-label">Mật khẩu</label>
      <input type="password" class="form-control" id="txtPass" name="txtPass">
    </div>

    <div class="mb-3">
      <label for="txtLocation" class="form-label">Địa chỉ</label>
      <input type="text" class="form-control" id="txtEmail" name="txtLocation" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary" name="sbmRegister">Register</button>
  </form>

  <?php if(isset($data["result"])) { ?>
      <h3>
        <?php
          if($data["result"] == "true"){
            echo "Đăng ký  thành công";
          }else{
            echo "Đăng ký thất bại";
          }
        ?>
      </h3>
  <?php } ?>
</div>


