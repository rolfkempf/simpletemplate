<?php

include_once('Simple_Template.php');

$t3 = new Simple_Template();
$t3->list = array('1', '2', '3', '4', '5', '6');
$t3->var1 = 'Wooohoooo';
$t3->render('index3.php');


$t = new Simple_Template();
$t->list = array('1', '2', '3', '4', '5', '6');
$t->var1 = 'Wooohoooo';
$t->render('index.php');

$t2 = new Simple_Template();
$t2->list = array('a', 'b', '3', '4', '5', '6');
$t2->var1 = 'Wooohoooo';
$t2->render('index2.php');
?>