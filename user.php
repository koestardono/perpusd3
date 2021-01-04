<?php
session_start(); 
if(!isset($_SESSION['username'])){?>
<script>
window.location.replace("login.php");
</script>
<?php }else{
include "config/tgl_indonesia.php";
include "head2.php";

$pages_dir = 'content';
        if(!empty($_GET['page'])){
            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);
 
            $p = $_GET['page'];
            if(in_array($p.'.php', $pages)){
                include($pages_dir.'/'.$p.'.php');
            } else {
                echo '<center><h1>404 Page Not Found</h1><hr></center>';
            }
        } else {
            include($pages_dir.'/home2.php');
        }
include "footer.php";
}
?>