<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MyFav */

$this->title = 'Create My Fav';
$this->params['breadcrumbs'][] = ['label' => 'My Favs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-fav-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
