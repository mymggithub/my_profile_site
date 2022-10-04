<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login Form';
?>

    <div id="videoContainer" class="mobile-background site-login">
        <div class="container-fluid d-flex justify-content-center align-items-center align-content-center video-parallax-container">
            <div class="row">
                <div class="col-12">
                    <section class="login-dark">
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            <h2 class="visually-hidden"><?= Html::encode($this->title) ?></h2>
                            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                            <div class="mb-3"><?= $form->field($model, 'username', ['options' => ['class' => 'random']])->textInput(['autofocus' => true, 'placeholder'=>'Username'])->label(false) ?></div>
                            <div class="mb-3"><?= $form->field($model, 'password', ['options' => ['class' => 'random']])->passwordInput(['placeholder'=>'Password'])->label(false) ?></div>
                            <div class="mb-3"><?= $form->field($model, 'rememberMe')->checkbox() ?></div>
                            <div class="mb-3"><?= Html::submitButton('Login', ['class' => 'btn btn-primary d-block w-100', 'name' => 'login-button']) ?></div><a class="forgot" href="#">Forgot your email or password?</a>
                        <?php ActiveForm::end(); ?>
                    </section>
                </div>
            </div>
                <video id="videoIntro" class="filter" autoplay="" loop="" muted="">
                <source src="https://drive.google.com/u/0/uc?id=12h3tJJNQASXeS-_K-hgRWEknNgrr6Rxa&export=download" type="video/mp4" wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':30}}]" wp-attr="[{'target':'src','replace':'%1'}]">
                <!-- https://drive.google.com/u/0/uc?id=1W2IU5ZGwq5TQqem96vXUqy3T4-F-CWJI&export=download -->
            </video>
        </div>
    </div>