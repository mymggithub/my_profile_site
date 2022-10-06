<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;

AppAsset::register($this);
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
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
</head>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77" tabindex="0" class="<?php echo isset($this->params['breadcrumbs']) ? 'd-flex flex-column h-100' : ''?>" > <!-- d-flex flex-column h-100 -->

<?php $this->beginBody() ?>

<?php echo $this->render('_nav_front') ?>
<?php if (isset($this->params['breadcrumbs'])) {?>
<main role="main" class="flex-shrink-0">
    <div class="container my-3">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>    

    </div>
</main>
<?php } else {?>
        <?= Alert::widget() ?> 
        <?= $content ?>
<?php } ?>



<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <span class="float-right" style="margin-top: -5px;">
                    <ul class="list-inline">
                        <li class="list-inline-item">&nbsp;<a target="_blank_" href="https://www.instagram.com/markggram/" class="btn btn-primary btn-sm btn-default"><i class="fa fa-instagram fa-fw"></i><span class="network-name"></span></a></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-sm btn-default" type="button"><i class="fa fa-twitter fa-fw"></i><span class="network-name"></span></button></li>
                        <li class="list-inline-item">&nbsp;<a target="_blank_" href="https://github.com/mymggithub/" class="btn btn-primary btn-sm btn-default"><i class="fa fa-github fa-fw"></i><span class="network-name"></span></a></li>
                    </ul>
        </span>
    </div>
</footer>

<?php $this->endBody() ?>
<script>
  AOS.init();
</script>
</body>
</html>
<?php $this->endPage();

