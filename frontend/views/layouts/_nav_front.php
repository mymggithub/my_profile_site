<?php 
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
?>



 <header>
    <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'id' => 'mainNav',
                'class' => 'navbar navbar-dark navbar-expand-md fixed-top',//navbar-dark bg-dark
            ],
        ]);

        $menuItems = [
            ['label' => 'Home', 'url' => (Yii::$app->homeUrl == Yii::$app->request->url)? '#home' : Yii::$app->homeUrl.'#home'],
            ['label' => 'About', 'url' => (Yii::$app->homeUrl == Yii::$app->request->url)? '#about' : Yii::$app->homeUrl.'#about'],
            ['label' => 'Projects', 'id' => 'proj_lnk', 'url' => (Yii::$app->homeUrl == Yii::$app->request->url)? '#projects' : Yii::$app->homeUrl.'#projects'],
            //['label' => 'Contact', 'url' => (Yii::$app->homeUrl == Yii::$app->request->url)? '#contact' : Yii::$app->homeUrl.'#contact'],
        ];

        if (Yii::$app->user->isGuest) {
            // $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        } else {
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>';
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto'],
            'items' => $menuItems,
        ]);
        NavBar::end();
    ?>
</header>