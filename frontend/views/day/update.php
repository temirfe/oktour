<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Day */

$this->title = Yii::t('app', 'Update Day: ' . $model->title, [
    'nameAttribute' => '' . $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Days'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="day-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
