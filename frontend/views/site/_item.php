<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Article
 */
use yii\helpers\Html;

?>
  <div class="row">
      <div class="col-md-2">
      
    <?php echo Html::a($model->title, ['/article/view', 'slug'=>$model->slug]) ?>
   
      </div>
      <div class="col-md-10" style="margin-left: -20px;">
        <div class="grid-container">
    
      <?php if (!empty($model->articleAttachments)): ?>
           
                <?php foreach ($model->articleAttachments as $attachment): ?>
                    <div class="grid-item" style="margin-right: 0px;">
                        
                <?php echo Html::img($attachment->base_url.'/'.$attachment->path,
                    ['class' => 'img_project']
                ) ?>
            
                    </div>
                <?php endforeach; ?>
            
        <?php endif; ?>
      </div>
    </div>
   
  </div>
