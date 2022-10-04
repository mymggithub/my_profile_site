<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\UserAppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;

UserAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top"> 

<?php $this->beginBody() ?>
<div id="wrapper">
	<div class="d-flex flex-column" id="content-wrapper">
		<div id="content">
			<?php echo $this->render('_nav_u_ui') ?>
			<div class="container-fluid">
				<?= Alert::widget() ?> 
				<?= $content ?>
			</div>
		</div>
		<footer class="bg-white sticky-footer">
            <div class="container my-auto">
			<div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
            </div>
        </footer>
	</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
