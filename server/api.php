<?php
switch ($_GET["act"]) {
    case "editarticle": require("api/editarticle.php");break;
    case "getarticledesc": require("api/getarticledesc.php");break;
    case "getarticlelist": require("api/getarticlelist.php");break;
    case "getbasedata": require("api/getbasedata.php");break;
    case "getspiderlist": require("api/getspiderlist.php");break;
    case "getuserinfo": require("api/getuserinfo.php");break;
    case "login": require("api/login.php");break;
    case "pushbaidu": require("api/pushbaidu.php");break;
    default:
        echo "This is a 404 page.";
        break;
}