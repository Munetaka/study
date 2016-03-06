<h1><?php echo $header ?>[user_id:<?=$user_id?>]</h1>

<ul>
<?php foreach ($todo_list as $item): ?>
    <li>
        <?=$item?>
    </li>
<?php endforeach; ?>
</ul>
