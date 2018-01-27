<?php
// check SESSION is working or not using echo
// if(isset($_SESSION['var2'])){
//   echo $_SESSION['var2'];
// }

?>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
