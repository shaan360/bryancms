<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */

\frontend\assets\FrontendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Open+Sans+Condensed:300,700|Open+Sans:400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title><?php echo Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php echo Html::csrfMetaTags() ?>

</head>
<body>

<?php $this->beginBody() ?>
    <?php echo $content ?>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
