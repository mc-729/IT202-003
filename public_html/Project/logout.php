<?php
session_start();
session_unset();
session_destroy();
require(__DIR__ . "/../../lib/functions.php");
flash("Successfully logged out", "Success!");
header("Location: login.php");