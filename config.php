<?php
define('APPNAME','The Sorter');
define('APPVERSION','1.3.2');
//we get the current page value or set it to home if not set
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
//we get user input if any is submit or null if not
$userInput = isset($_POST['submit']) ? $_POST['data'] : null;
//if there's user input and a POST request is made, we get the algorithm type selected
$algorithm = isset($_GET['algorithm']) ? $_GET['algorithm'] : '';