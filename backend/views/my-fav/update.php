<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MyFav */

$this->title = 'Update My Fav: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'My Favs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'users_id' => $model->users_id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="my-fav-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
