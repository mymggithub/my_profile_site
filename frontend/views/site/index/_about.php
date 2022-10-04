<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

// $this->title = 'About Me';
?>
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">About</h2>
                    <h3 class="text-muted section-subheading">I have worked as a fullstack developer for about 8 years with some financial industry, ecommerce and data gathering companies. I have experience with different programming languages, web development frameworks and database systems.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/it.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2010</h4>
                                    <h4 class="subheading">Technical Support - ARAGON PROPERTIES</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Setup and managed the company’s physical data network. End user local troubleshooting. VPN (Basic Windows VPN). </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/sf.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>01/2011 - 10/2015</h4>
                                    <h4 class="subheading">Front/Back Developer - GENIESYARDSALES</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Developed an HTML5 & PHP based site for the startup; code and graphic design. Client input validation for site forms with ajax and PHP. Implemented a data surveyor crawler for product comparison.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/pc.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>01/2016 - 12/2016</h4>
                                    <h4 class="subheading">Freelancer</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Developed Web application and crawlers for clients in the US and UK.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/mx.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>02/2017 - 06/2020</h4>
                                    <h4 class="subheading">Programmer - SHAMBALA CONSULTING</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Managed a PHP-coded intranet site, increasing site security. Primarily worked with Angularjs, TCPDF, Telerik, kendo and jQuery & debugging SQL. </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/ca.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>01/2021 - 03/2022</h4>
                                    <h4 class="subheading">Sr Programmer (Remote Consulting) - JVOLOGY</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Build/Finished a system for managing and sorting through data. Primarily worked with Bootstrap 4, Yii2, jQuery & MySql.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image">
                                <a href="<?php echo Yii::$app->homeUrl.'#contact'; ?>">
                                    <h4>Be Part<br>&nbsp;Of The<br>&nbsp;Story!</h4>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
