<?php
// console.log
echo "we are here";

?>

<!-- Call the variable from controller in view -->
<h1>Welcome to my first controller</h1>
<h2><?=$name?></h2>
<h2><?=$number?></h2>

<!-- <?php
// check the array with dump
var_dump($array);
?> -->

<?php
// how to use foreach with alias and br
foreach($array as $arr)
{
  echo $arr.'<br>';
}

?>
