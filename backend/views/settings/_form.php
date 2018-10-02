<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use trntv\filekit\widget\Upload;
/* @var $this yii\web\View */
/* @var $model common\models\Settings */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="settings-form">

     <?php $form = ActiveForm::begin(['layout' => 'horizontal',
       'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
            'label' => 'col-sm-4',
             'offset' => 'col-sm-offset-4',
            'wrapper' => 'col-sm-8',
            'error' => '',
            'hint' => '',
        ],
    ],
       ]); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'tag_line')->textInput(['maxlength' => true]) ?>

<?php echo $form->field($model, 'short_description')->widget(
    \yii\imperavi\Widget::class,
    [
        'plugins' => ['fullscreen', 'fontcolor', 'video'],
        'options' => [
            'minHeight' => 400,
            'maxHeight' => 400,
            'buttonSource' => true,
            'convertDivs' => false,
            'removeEmptyTags' => true,
            'imageUpload' => Yii::$app->urlManager->createUrl(['/file/storage/upload-imperavi']),
        ],
    ]
) ?>
<?php echo $form->field($model, 'about')->widget(
    \yii\imperavi\Widget::class,
    [
        'plugins' => ['fullscreen', 'fontcolor', 'video'],
        'options' => [
            'minHeight' => 400,
            'maxHeight' => 400,
            'buttonSource' => true,
            'convertDivs' => false,
            'removeEmptyTags' => true,
            'imageUpload' => Yii::$app->urlManager->createUrl(['/file/storage/upload-imperavi']),
        ],
    ]
) ?>
    <?php echo $form->field($model, 'seo_description')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'tags')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'address')->textarea(['rows' => 6]) ?>

<?php echo $form->field($model, 'thumbnail')->widget(
    Upload::class,
    [
        'url' => ['/file/storage/upload'],
        'maxFileSize' => 5000000, // 5 MiB
    ]);
?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
