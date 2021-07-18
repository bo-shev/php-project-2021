
<?php
switch($_GET['action'])
{
    case "itemPage" :
    require_once("itemPage.php");
    break;
    case "mainPage" :
    require_once("mainPage.php");
    break;
    default :
    require_once("page404.php");
    break;
}