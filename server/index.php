<?php
if (isset($_GET["do"])) {
    $do=$_GET["do"];
} else {
    $do="index";
}
switch ($do) {
    // 页面展示部分的路由
    case "index":require("view/pc/index.php");break;
}