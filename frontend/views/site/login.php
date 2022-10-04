<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
?>
<!-- <div class="site-login"></div> -->
    <div id="videoContainer" class="mobile-background site-login">
        <div class="container-fluid align-items-center align-content-center video-parallax-container">
            <div class="row justify-content-center" style="padding-top: 100px;">
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4"><?= Html::encode($this->title) ?></h4>
                                        </div>
                                        <?php $form = ActiveForm::begin(['options' => ['class' => 'user']]); ?>
                                            <div class="mb-3"><?= $form->field($model, 'username')->textInput(['class' => 'form-control form-control-user', 'autofocus' => true, 'placeholder'=>'Username'])->label(false) ?></div>
                                            <div class="mb-3"><?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-user', 'placeholder'=>'Password'])->label(false) ?></div>
                                            <div class="mb-3">
                                                <div class="custom-control custom-checkbox small p-0">
                                                        <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'form-check-input custom-control-input']) ?>
                                                </div>
                                            </div>
                                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary d-block btn-user w-100', 'name' => 'login-button']) ?>
                                            <hr>
                                            <a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button">
                                            <i class="fab fa-google"></i>&nbsp; Login with Google</a>
                                            <a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                                            <hr>
                                        </form>
                                        <?php ActiveForm::end(); ?>
                                        <div class="text-center">
                                            <!-- <a class="small login-lnk" href="forgot-password.html">Forgot Password?</a> -->
                                            <?= Html::a('Forgot Password?.', ['site/request-password-reset'], ['class'=>'small login-lnk']) ?>
                                        </div>
                                        <div class="text-center">
                                            <!-- <a class="small login-lnk" href="register.html">Create an Account!</a> -->
                                            <?= Html::a('Resend email verification', ['site/resend-verification-email'], ['class'=>'small login-lnk']) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <video id="videoIntro" class="filter" autoplay="" loop="" muted="">
                <source src="https://drive.google.com/u/0/uc?id=16528VP0FxVwffov5uxGULKiLxPseltY3&export=download" type="video/mp4" wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':30}}]" wp-attr="[{'target':'src','replace':'%1'}]">
                <!-- https://drive.google.com/u/0/uc?id=1W2IU5ZGwq5TQqem96vXUqy3T4-F-CWJI&export=download -->
            </video>
        </div>
    </div>