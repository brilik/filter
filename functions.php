<?php

use engine\Debug;
use engine\Theme;

define('VIEWS_DIR', dirname(__FILE__) . '/engine/view/');

include_once "engine/classes/Debug.php"; // remove
require_once "engine/classes/Theme.php";

$theme = new Theme(1.0);

require "engine/theme_functions.php";