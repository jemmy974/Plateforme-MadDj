<?php
if(isset($_SESSION["auth"])){
    session_destroy();
    header("location:/login");
}