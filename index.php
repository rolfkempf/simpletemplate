<?php

//include class
include_once('Simple_Template.php');

//create a new template, set some vars and render file
$t = new Simple_Template();
$t->list = array('1', '2', '3', '4', '5', '6');
$t->var1 = 'Wooohoooo';
$t->render('index.php');

//as previous, but look for template in directory 'views' (default is 'templates')
$t2 = new Simple_Template('views');
$t2->list = array('a', 'b', '3', '4', '5', '6');
$t2->var1 = 'Wooohoooo';
$t2->render('index2.php');
//well, it fails silently on error


?>