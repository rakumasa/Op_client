<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'employee_id',
            'email:email',
            //'tenant',
            //'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'group',
            //'state',
            //'use_external_auth',
            //'external_id',
            //'created_at',
            //'updated_at',
            //'last_login',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
