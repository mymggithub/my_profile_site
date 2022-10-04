<?php 
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
?>
    <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
			'innerContainerOptions' => ['class' => 'container-fluid'],
            'options' => [
                'class' => 'navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top',//navbar-dark bg-dark
            ],
        ]);

        $menuItems = [
            //['label' => 'Contact', 'url' => (Yii::$app->homeUrl == Yii::$app->request->url)? '#contact' : Yii::$app->homeUrl.'#contact'],
        ];


            $menuItems[] = '<div class="d-none d-sm-block topbar-divider"></div>'
                .'<li class="nav-item dropdown no-arrow">'
    				.'<div class="nav-item dropdown no-arrow">'
                        .'<a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">'
                            .'<span class="d-none d-lg-inline me-2 text-gray-600 small">'
                				.Yii::$app->user->identity->username
            				.'</span>'
                            .'<img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg">'
                        .'</a>'


        				.'<div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">'
                            // .'<a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>'
                            // .'<a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>'
                            // .'<a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>'
                            .Html::a(Html::tag('i', '', ['class' => 'fas fa-user fa-sm fa-fw me-2 text-gray-400']).'&nbsp;Profile' , '#', ['class'=>'dropdown-item'])
                            // .Html::a(Html::tag('i', '', ['class' => 'fas fa-cogs fa-sm fa-fw me-2 text-gray-400']).'&nbsp;Settings' , '#', ['class'=>'dropdown-item'])
                            // .Html::a(Html::tag('i', '', ['class' => 'fas fa-list fa-sm fa-fw me-2 text-gray-400']).'&nbsp;Activity log' , '#', ['class'=>'dropdown-item'])
                            .'<div class="dropdown-divider"></div>'
                            .Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                                .Html::submitButton(
                                    Html::tag('i', '', ['class' => 'fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400']).'&nbsp;Logout',
                                    ['class' => 'dropdown-item']
                                )
                            .Html::endForm()
                        .'</div>'
                    .'</div>'
                .'</li>';

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav flex-nowrap ms-auto'],
            'items' => $menuItems,
        ]);
        NavBar::end();
    ?>