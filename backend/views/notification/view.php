<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Notification */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Notifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notification-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <!--

    <p>
        <?php //echo Html::a('Update', ['update', 'id' => $model->id, 'users_id' => $model->users_id], ['class' => 'btn btn-primary']) ?>
        <?php //echo Html::a('Delete', ['delete', 'id' => $model->id, 'users_id' => $model->users_id], [
            //'class' => 'btn btn-danger',
            //'data' => [
            //    'confirm' => 'Are you sure you want to delete this item?',
            //    'method' => 'post',
            //],
        //]) ?>
    </p>
    -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'users_id',
            'message',
            'sender',
            'date',
        ],
    ]) ?>

</div>
