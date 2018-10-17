<?php
session_destroy();
unset ($_SESSION['id_user'], $_SESSION['nome']);
header('Location: login.php');