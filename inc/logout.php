<?php

if (isset($_POST['cancel'])) {
    header("Location: ../index.php");
    exit();
}
else {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}
