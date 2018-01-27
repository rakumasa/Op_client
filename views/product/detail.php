<?php

use yii\helpers\Html;
$this->title = 'Product detail';
// echo 'I am detail of Product';

?>

<h1>Welcome to detail</h1>
<h3>Id: <strong><?=$id?></strong></h3>
<h3>Name: <strong><?=$name?></strong></h3>

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <?=Html::beginForm() ?>
        <div class="form-group">
          <label class=''>Name:</label>
          <!-- First type, label, value, class -->
          <?=Html::input('text','name','',['class'=>'form-control']); ?>
        </div>
        <div class="form-group">
          <label class=''>Password:</label>
          <!-- First type, label, value, class -->
          <?=Html::input('password','password','',['class'=>'form-control']); ?>
        </div>
        <div class="form-group">
          <label class=''>Address:</label>
          <!-- First type, label, value, class -->
          <?=Html::textarea('address',null,['class'=>'form-control','rows'=>5]); ?>
        </div>
        <div class="form-group">
          <label class=''>Gender:</label>
          <!-- First label, default selection, radio label -->
          <?=Html::radio('gender',true,['label'=>'Male']); ?>
          <?=Html::radio('gender',null,['label'=>'Female']); ?>
        </div>
        <div class="form-group">
          <!-- First label, default selection, radio label -->
          <?=Html::checkbox('agreement',null,['label'=>'Do you accept the agreement?']); ?>
        </div>
        <div class="form-group">
          <label class=''>Title:</label>
          <?=Html::dropDownlist('title',null,['mr'=>'Mr', 'mrs'=>'Mrs','master'=>'Master'])?>
        </div>
        <div class="form-group">
          <label class="">Gender list:</label>
          <?=Html::radioList('radiolist',null,['male'=>'Male','female'=>'Female']); ?>
        </div>
        <div class="form-group">
          <label class="">Gender list 2:</label>
          <?=Html::checkboxList('radiolist',null,['male'=>'Male','female'=>'Female']); ?>
        </div>

      <?=Html::endForm() ?>

    </div>
  </div>
</div>
