<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use frontend\models\ContactForm;

// $this->title = 'Contact Me';
?>
    <section id="contact" style="background-image:url('img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact Me</h2>
                    <!-- <h3 class="text-muted section-subheading">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php $model = new ContactForm(); ?>
                    <?php $form = ActiveForm::begin(['id' => 'contactForm', 'options' => ['novalidate'=>'novalidate', 'name'=>'contactForm']]); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <?= $form->field($model, 'name')->label(false)->textInput(['id' => 'name', 'placeholder' => 'Your Name *', 'required' => true]) ?>
                                    <small class="form-text text-danger help-block lead"></small>

                                </div>
                                <div class="form-group mb-3">
                                    <?= $form->field($model, 'email')->label(false)->input('email',['id' => 'email', 'placeholder' => 'Your Email *', 'required' => true]) ?>
                                    <small class="form-text text-danger help-block lead"></small>

                                </div>
                                <div class="form-group mb-3">
                                    <?= $form->field($model, 'tel')->label(false)->input('phone',['id' => 'tel', 'placeholder' => 'Your Phone *', 'required' => true]) ?>
                                    <!--<input class="form-control" type="tel" placeholder="Your Phone *" required="">-->
                                    <small class="form-text text-danger help-block lead"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <?= $form->field($model, 'body')->label(false)->textArea(['id' => 'body', 'placeholder' => "Your Message *", 'required' => true]) ?>
                                    <small class="form-text text-danger help-block lead"></small>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-12 text-center">
                                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                ]) ?>
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section>
