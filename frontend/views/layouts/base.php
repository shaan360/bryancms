<?php

use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>

   <header>
    <div class="header_int">
        <a href="<?php echo Url::to(['site/index']); ?>"><div class="logo"><h1>Sydney Ribot</h1></div></a>
        <nav>
       <ul  class="menu"><li class="menu-item"><a href="<?php echo Url::to(['article/index']); ?>">Work</a></li>
<li class="menu-item"><a href="<?php echo Url::to(['page/about']); ?>">ABOUT</a></li>
<li class="menu-item"><a href="<?php echo Url::to(['site/contact']); ?>">CONTACT</a></li>




</ul>     
        
        </nav>
</div>  
</header>

    <?php echo $content ?>


<!-- 
<footer>
    <div class="footer_int">
        <a href="http://uexel.com/" target="_blank"><div class="uexel">uExel</div></a>
    </div>
</footer> -->
<?php $this->endContent() ?>