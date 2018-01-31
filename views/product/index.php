<?php
$this->title = 'Product index';
// echo $menu;

?>

<h1>Welcome to index (This page is for practice.)</h1>

<!-- You can render view page by following command -->
<?=$this->render('menu',['menu'=>$menu])?>
