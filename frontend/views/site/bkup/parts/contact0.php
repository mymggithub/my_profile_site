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
    <section class="text-center content-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Contact Me</h2>
                    <p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>

                    <div class="row" style="margin-right: 0;">
                            <?php $model = new ContactForm(); ?>
                            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                            <?= $form->field($model, 'name') //->textInput(['autofocus' => true]) ?>
                            <?= $form->field($model, 'email') ?>
                            <?= $form->field($model, 'subject') ?>
                            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>
                            <div class="form-group">
                                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>