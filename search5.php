<?php
session_start(); 
 $level = $_SESSION['level'];
if(!isset($_SESSION['username'])){?>
<script>
window.location.replace("login.php");
</script>
<?php }else{
	if ($level == 'admin') {

		include "head.php";
		include "content/search5.php";
		include "footer.php";
		
	}else{
		include "head2.php";
		include "content/search5.php";
		include "footer.php";
	}
}
?>