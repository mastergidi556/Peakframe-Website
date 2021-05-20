<?php
require_once 'header.php';
session_destroy();
session_unset();

header("location:index.php");
