<?php
use frontend\assets\FrontendAsset;
use common\models\Settings;
$bundle = FrontendAsset::register($this);
/* @var $this yii\web\View */
$this->title = Yii::$app->name;
$site_setting=Settings::findOne(1);
?>
<script type="text/javascript">
(function (g) {
var s = document.createElement('script'),
t = document.getElementsByTagName('script')[0];
s.async = true;
s.src = g + '?v=' + (new Date()).getTime();
s.charset = 'UTF-8';
s.setAttribute('crossorigin', '*');
t.parentNode.insertBefore(s, t);
})('https://www.canvasflip.com/plugins/vi/vi.min.js');
</script>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10">
        <div class="isth">
  <b><?php echo $site_setting->title; ?></b><br>
 <?php echo $site_setting->tag_line; ?><br>
 <b><!-- <div class="barh1"> -->LANDON SINGAPORE<!-- </div> --></b><br>
  <b><!-- <div  class="barh1"> -->STOCKHOLM<!-- </div> --></b></div>

 <?php echo $site_setting->short_description; ?>

    <div class="cc3"><b><hr></b>
   <b><?php echo $site_setting->email; ?> <br><?php echo $site_setting->phone; ?></b>
     <b><hr></b>
   <div> <?php echo $site_setting->address; ?></div>
   <b><hr></b></div>
  </div></div>
<br>
<?php echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
            'hideOnSinglePage' => true,
        ],
        'summary'=>'',
        'itemView' => '_item'
    ])?>

