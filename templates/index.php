<b>Template <?= __FILE__ ?></b>
<br>
<b><?= $this->var1 ?></b>

<ul>
    <?php foreach ($this->list as $item): ?>
        <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>
<hr>