<?php
/**
 *
 * @var $this \yii\web\View
 * @var $content string
 */
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>
<div class="container">
    <?php /*echo Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]); */ ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>
<?php $this->endContent(); ?>
