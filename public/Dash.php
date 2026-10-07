<?php
session_start();
define("BASE_VIEW_DIR",dirname(__DIR__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR);
define("BASE_CONFIG_DIR",dirname(__DIR__).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR);
define("BASE_MODEL_DIR",dirname(__DIR__).DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR);
define("BASE_CONTROLLER_DIR",dirname(__DIR__).DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR);
require BASE_CONFIG_DIR ."database.php";
require BASE_CONFIG_DIR ."router.php";