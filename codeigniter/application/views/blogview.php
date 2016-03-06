<h1><?php echo $header ?></h1>

<ul>
<?php foreach ($todo_list as $item): ?>
    <li>
        <?=$item?>
    </li>
<?php endforeach; ?>
</ul>
