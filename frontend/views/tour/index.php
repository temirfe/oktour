<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TourSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tours');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tour'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            //'title_ru',
            //'title_ko',
            //'description:ntext',
            //'description_ru:ntext',
            //'description_ko:ntext',
            'days',
            'category_id',
            'destination_id',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{addPrice} &nbsp;{view}&nbsp; {update}&nbsp; {delete}',
                'buttons' => [
                    'addPrice' => function ($url,$model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-plus-sign"></span>',
                            ['price/create', 'tour_id' => $model->id],
                            [
                                'title' => 'Add price',
                                'data-pjax' => '0',
                            ]
                        );
                    },
                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
