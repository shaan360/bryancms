<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Settings */

$this->title = 'Site Settings: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="settings-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
