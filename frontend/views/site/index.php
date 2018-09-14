<?php
use frontend\assets\FrontendAsset;
$bundle = FrontendAsset::register($this);
/* @var $this yii\web\View */
$this->title = Yii::$app->name;
?>


    <div class="wrapper">

   <div class="images">
    <?php foreach($models as $model) {?>
            <div class="image" style="background-image:url(<?php echo $model->base_url.'/'.$model->path;?>)" id="<?php echo $model->id; ?>"></div>
<div class="clearfix"></div>

            <?php }?>
            
          
    </div>
    
</div>
<div class="content ">
        <div class="parrafo">
            <p>Sydney Ribot is an Argentine-American filmmaker. A graduate of Dartmouth College (B.A.), she has produced and directed in China, the US, and Turkey, screened at international festivals, and published writing in The White Review, Prufrock, and The Rumpus.

</p>
        </div>
    </div>

 <div class="clearfix"></div>
