<?php
    $page_title = 'HOD Dashboard';

    $link = "../core/wp_config.php";
    $core_path = str_replace("\\","/", ((substr(realpath($link), (strpos(realpath($link),"workplace")+9)))));

    require("../core/wp_config.php");
    require_once("../nav/hod_nav.php");







?>




<?php
    //footer.php
    require('../includes/footer.php');
 ?>
