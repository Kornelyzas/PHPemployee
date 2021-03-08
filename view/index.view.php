<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT Company</title>
</head>
<body>
<?php
use EmployeersApp\Programmers;
use EmployeersApp\Testers;
use EmployeersApp\Managers;
$programmers = new Programmers('John','John' ,25, 'Junior Developer', '1200 Eur', 'PHP', 'Web Development');
$testers = new Testers('Timmy','Timmy' ,36, 'Senior QA Engineer', '2300 Eur', 'Software Testing');
$managers = new Managers('Mark', 'Mark',36, 'Product Manager', '3000 Eur', 'PHP, JS', 'Web Development, Managment');
?>

<ul>
    <?php echo '<h3>'.$programmers->setTitle().'</h3>' ?>
    <?php foreach ($programmers->getEmployee() as $programmer):?>
        <li><?=$programmer?></li>
    <?php endforeach;?>
</ul>
<ul>
    <?php echo '<h3>'.$testers->setTitle().'</h3>' ?>
    <?php foreach ($testers->getEmployee() as $tester):?>
        <li><?=$tester;?></li>
    <?php endforeach;?>
</ul>
<ul>
    <?php echo '<h3>'.$managers->setTitle().'</h3>' ?>
    <?php foreach ($managers->getEmployee() as $manager):?>
        <li><?=$manager;?></li>
    <?php endforeach;?>
</ul>
</body>
</html>
