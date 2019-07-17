<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Metadata;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <meta name="google-site-verification" content="_LfxXaxrGXxez14d8E2Q8RpIqtoWC7-ZXEW_ylyxsqU" />
	<link rel="icon" type="image/png" href="<?php echo Yii::$app->getUrlManager()->createUrl('images/favicon.png');?>" />
    <?php $this->head() ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo Yii::$app->getUrlManager()->createUrl('css/owl.carousel.min.css');?>" rel="stylesheet">
	<link href="<?php echo Yii::$app->getUrlManager()->createUrl('css/owl.theme.default.min.css');?>" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::$app->getUrlManager()->createUrl('css/fonts.css');?>" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::$app->getUrlManager()->createUrl('css/style.css');?>" rel="stylesheet" type="text/css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB0tU77lobH0Aq7RZXpOM__TvXaTSmqso&libraries=places"></script>

</head>
<body>

<?php $this->beginBody() ?>
<!--START HEADER-->
<?php  include_once('header.php'); ?> 
<!--END HEADER--->

<!--VIEW BODY-->
<?php echo $content; ?>
<!--END BODY-->
<!--START FOOTER-->
<?php include_once('footer.php'); ?> 
<!--END FOOTER-->
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
