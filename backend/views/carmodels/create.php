<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Carmodels */

$this->title = 'Create Carmodels';
$this->params['breadcrumbs'][] = ['label' => 'Carmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carmodels-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
