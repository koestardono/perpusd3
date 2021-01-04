<?php
session_start(); 
if(!isset($_SESSION['nm_anggota'])){?>
<script>
window.location.replace("login.php");
</script>
<?php }else{
include "head2.php";
include "content/search2.php";
include "footer.php";
}
?>