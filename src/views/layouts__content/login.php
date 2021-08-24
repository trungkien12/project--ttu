<?php
  require_once "./src/core/database-handler.php";
?>

<div class="form__container">

<form method="POST" action="process-login.php">
  <div class="mb-3">
    <label for="txtEmail" class="form-label">Username or Emailaddress</label>
    <input type="email" class="form-control" id="txtEmail" name="txtEmail" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="txtPass" class="form-label">Password</label>
    <input type="password" class="form-control" id="txtPass" name="txtPass">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="checkSave">
    <label class="form-check-label" for="checkSave">Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary" name="sbmLogin">Log in</button>
</form>

</div>

<a href="http://localhost/project--ttu/home/" class="back--homepage"> <i class="fas fa-arrow-left"></i>Back to Đại học Tân Tạo</a>

