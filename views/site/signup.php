<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Signup";
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>Please fill out the following fields to signup:</p>

<?
  if(Yii::$app->session->hasFlash('success'))
  {
    echo Yii::$app->session->getFlash('success');
  }
?>

<?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model,'last_name'); ?>

  <?= $form->field($model,'email'); ?>


  <?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>
<?php ActiveForm::end(); ?>
