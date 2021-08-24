<?php

// kiem tra neu sesison chua start thif moi start khong nos loi dm.
// ngay truoc dinh loi nafy len van nho
if (session_start() == false) session_start();

require_once "./src/bridge.php";
$myApp = new App();
