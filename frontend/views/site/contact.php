<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
use frontend\assets\FrontendAsset;
$bundle = FrontendAsset::register($this);
use demogorgorn\ajax\AjaxSubmitButton;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */


?>



<div class="wrapper">
    <div class="images">
            <!-- <div class="image" style="background-image:url(../assets/uploads/contact/1.jpg)"></div>
            
            <div class="image" style="background-image:url(../assets/uploads/contact/2.jpg)"></div>
            
            <div class="image" style="background-image:url(../assets/uploads/contact/3.jpg)"></div>
            
            <div class="image" style="background-image:url(../assets/uploads/contact/4.jpg)"></div> -->
            
            <div class="image act" style="background-image: url(<?php echo $bundle->baseUrl; ?>/img/5.jpg);" id="iai_no_1"></div>
            
            <!-- <div class="image" style="background-image:url(../assets/uploads/contact/6.jpg)"></div> -->
            
        
            
    </div><!--images-->



<div class="content">

    <div class="text contacto">

 <?php $form = ActiveForm::begin(['id' => 'form-submit']); ?>
               <?php echo $form->field($form_model, 'email',[
           'inputOptions' => ['autofocus' => 'autofocus', 'class' => '']
     ])->textInput()->input('email', ['placeholder' => "Email:"])->label(false)->error(false); ?>
                   <?= $form->field($form_model, 'message')->textarea(['rows' => '6'],['placeholder' => "Message:"])->label(false)->error(false); ?>
              <?php
            AjaxSubmitButton::begin([
    'label' => 'submit',
    'useWithActiveForm' => 'form-submit',

    'ajaxOptions' => [
        'type'=>'POST',
        'url'=>'contact',
           
           
        'success' => new \yii\web\JsExpression('function(html){
            $("#output").html(html);

          

            }'),
    ],
    'options' => ['class' => '', 'type' => 'submit'],
    ]);
    AjaxSubmitButton::end();
         ActiveForm::end(); ?>


       <div id="output"></div>
            </div>
     
    
</div>
</div>
