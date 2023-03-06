<?php

session_start();
session_destroy();
header("Location: ../View/hospitalLogin.php");
exit();