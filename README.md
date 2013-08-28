# Simple Template

Simple Template is a minimalistic templating mechanism that allows to pass encapsuled data to a view or template file. 
The template-files are php-files which can access the passed vars. You can use php inside the template-files.

Simple Template can help you write code in environments where you can´t or don´t want to use "big" template engines (like twig, blade or moustache).
Use the sophisticated and tested template-engines if possible. This is a class to ease the pain of writing code if you can´t use one of the big ones.

##Setting up data and calling the template##
```php
//create a new template-object
$t = new Simple_Template(); 

//dynamically add fields to the template-object 
$t->list = array('1', '2', '3', '4', '5', '6'); 
$t->var1 = 'Wooohoooo';

//call the template file "index.php"
$t->render('index.php');
```


Setting fields like this ```$t->var1 = 'Wooohoooo';``` creates the fields via __set() in ```protected $vars = array();```
Calling ```$t->render('my-template.php')``` simply includes the template-file which accesses the fields of ```$t``` via the magic method ```__get``` (calling them from ```protected $vars = array();```).


##Inside the template-file:##
```php
<b>Template <?= __FILE__ ?></b>
<br>
<b><?= $this->var1 ?></b>

<ul>
    <?php foreach ($this->list as $item): ?>
        <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>
```

##Some notes##
1. Check performance: How does it perform when it´s heavily used?
Performs well so far.

2. Can it make life easier for Wordpress-related code?
It can help reduce writing spaghetti-code.

3. Will it bring peace to the world?
Not yet

###To-do###
1. show examples of usage (inside wordpress)
2. convert it to a wordpress-plugin?
