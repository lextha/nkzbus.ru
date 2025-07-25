<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<? //var_dump($model->citis); die();?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',  
            'name',
            'username',
         //   'auth_key',
         //   'password_hash',
         //   'password_reset_token',
            'email:email',
            'status',
            'created_at',
            'updated_at',
         //   'citis'
        //    'verification_token',
          
        ],
    ]) ?>
    
    <? foreach ($model->citis as $key => $value) {
        echo $value->name."<br>";
 }?>

</div>
