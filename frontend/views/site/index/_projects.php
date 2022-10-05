<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

// $this->title = 'About Me';
?>
    <section class="text-center download-section content-section" id="projects" style="background-image:url('img/downloads-bg.jpg');">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1>Working hard to get what you want to work across devices</h1>
                <br>
                <br>
                <div class="center_devices">
                  <div class="smartphone">
                    <div class="content_devices_view">
                    <canvas class="matrix">+-x1/\</canvas>
                    </div>
                  </div>

                  <div class="tablet">
                    <div class="content_devices_view">
                    <canvas class="matrix">+-x1/\</canvas>
                    </div>
                  </div>

                  <div class="laptop">
                    <div class="content_devices_view">
                     <canvas class="matrix">+-x1/\</canvas>
                   </div>
                  </div>
                </div>
                <br>
                <button class="btn btn-primary btn-lg btn-default" type="button" id="myBtn">Project Examples</button>
                <div id="myModal" class="browser-modal">
                  <div class="browser-modal-content">
                    <div class="b_row">
                      <div class="b_close" style="float: right;">
                        <span class="dot" style="background:#5AC05A;"></span>
                        <span class="dot" style="background:#FDD800;"></span>
                        <span class="dot m_close" style="background:#ED594A;"></span>
                      </div>
                      <div class="b_tabs">
                        <button class="tablink" onclick="openCity('tab1', this)" id="defaultOpen">Nolte Proj</button>
                        <button class="tablink" onclick="openCity('tab2', this)">RO Proj</button>
                        <button class="tablink" onclick="openCity('tab3', this)">CE Project</button>
                        <!--<button class="tablink" onclick="openCity('tab4', this)">Proj 4</button>-->
                      </div>

                    </div>
                    <div class="b_content">
                      <div id="tab1" class="tabcontent">
                        <div class="fake_http">
                          <a target="_blank_" href="https://nolte-venues-test.netlify.app/example.html">https://nolte-venues-test.netlify.app/example.html</a>
                          </div>
                        <iframe style="width: 100%; height: 400px;" src="https://nolte-venues-test.netlify.app/example.html" title="My nolte project"></iframe>
                      </div>
                      <div id="tab2" class="tabcontent">
                        <div class="fake_http">
                          <a  target="_blank_" href="https://youtu.be/pObIo6tqi-I">https://youtu.be/pObIo6tqi-I</a>
                        </div>
                        <div class="video-wrap">
                          <div class="yt_container"><!-- style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;" -->
                            <iframe class="yt_video" src="https://www.youtube.com/embed/pObIo6tqi-I" title="YouTube video player" allowfullscreen></iframe>
                          </div>
                        </div> 
                      </div>
                      <div id="tab3" class="tabcontent">
                        <div class="fake_http">
                          <a  target="_blank_" href="https://youtu.be/3mFMl6UtBis">https://youtu.be/3mFMl6UtBis</a>
                        </div>
                        <div class="video-wrap">
                          <div class="yt_container"><!-- style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;" -->
                            <iframe class="yt_video" src="https://www.youtube.com/embed/3mFMl6UtBis" title="YouTube video player" allowfullscreen></iframe>
                          </div>
                        </div> 
                      </div>
                      <div id="tab4" class="tabcontent">
                        <div class="fake_http">
                          <a  target="_blank_" href="#">https://someyoutube.bla</a>
                        </div>
                        <h1>Proj 3</h1>
                        <p>Oslo is the capital of Norway.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>