<?php
session_start();;
if(session_destroy()){
}
header("location:../contoh/index.php");
?>