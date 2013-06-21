# Simple Template

Simple Template is a minimalistic templating mechanism that allows to pass encapsuled data to a view or template file. 
The template-files are php-files which can access the passed vars. You can use php inside the template-files.

```php
$t = new Simple_Template(); //create a new template-object

$t->list = array('1', '2', '3', '4', '5', '6'); //dynamically add fields to the template-object
$t->var1 = 'Wooohoooo';

$t->render('index.php');//call the template file "index.php"
```

Calling ```$t->render('my-template.php')``` simply includes the template-file which accesses the fields of $t via the magic method ```__get```.
