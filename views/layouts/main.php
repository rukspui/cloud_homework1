<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,300italic,400italic,700italic|Roboto|Raleway|PT+Sans+Narrow|Cuprum|Titillium+Web|Fjalla+One|Cabin' rel='stylesheet' type='text/css'>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  
  <title><?php echo Html::encode($this->title); ?></title>
  <?php $this->head(); ?>
	
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  
  <!-- CSS  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>
  <link href="assets/4e76f31c/css/bootstrap.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="css/site.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   
   
</head>
<body>
  <?php $this->beginBody() ?>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="index.php?r=site%2Findex" class="brand-logo">Cloud Computing</a>
	  		<?php
                        
                        
				echo Menu::widget([
				'options' => ['id' => "nav-mobile", 'class' => 'right side-nav'],
				'items' => [
       
                                ['label' => 'Homework 1', 'url' => ['site/cloud'], 'visible' ],
				],
				]);
				?>

          
          
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
        
        <div class="search-wrapper" style="display: none;">
          <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-primary" type="button">Go!</button>
          </span>
        </div>
        </div>
    </div>
  </nav>
 

  <?php echo $content; ?>
 

  <div class="container">
    <div class="section">

     
      
    </div>
    <br><br>

    <div class="section">

    </div>
  </div>


        
          

          

          


          
      </div>
    </div>
    


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
   <script src="js/search.js"></script>
  

  
  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage(); ?>