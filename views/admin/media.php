<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Медиафайлы';
?>

      <div class="content col-12" style="display: flex; flex-flow: row wrap; justify-content: space-evenly;">

          <!-- your content here

            <div class="col-xl-3 col-md-6 col-12 img-block">
                <a href="<?= Url::to(['admin/create-playlist']); ?>" class="btn btn-rose btn-round" style="display: flex; border-radius: 6px; width: 100%; height: 260px; justify-content: center; align-items: center; flex-direction: column;">
                    <i class="material-icons" style="font-size: 55pt; margin: 5px; display: flex;">get_app</i><br>
                    <h3 class="" style=" display: flex;">Загрузить</h3>
                </a>
            </div>-->

          <div class="row">
              <div class="col-12 text-center">
                  <div class="alert alert-default" role="alert" id="thumb">
                      Баннеры
                  </div>
              </div>
              <?php foreach (glob("./media/ban_*") as $Picture): ?>
                  <div class="col-md-6 col-12 playlist">
                      <div class="card card-product" data-count="1">
                          <div class="card-header card-header-image" data-header-animation="true">

                              <?php echo '<img class="img" src="'.$Picture.'" style="object-fit: cover; max-width: 100%; height: auto; border-radius: 6px;">'; ?>

                          </div>
                          <div class="card-body">
                              <div class="card-actions text-center">
                                  <a class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Удалить" href="<?= Url::toRoute(['delimg', 'name' => end(explode('/', $Picture))]); ?>">
                                      <i class="material-icons">close</i>
                                  </a>
                              </div>
                              <h4 class="card-title">
                                  <a class="btn btn-twitter" target="_blank" href="<?php echo $Picture; ?>" style="max-width: 100%; white-space: normal;">
                                      <?php
                                      $file = end(explode('/', $Picture));
                                      echo $file;
                                      ?>
                                  </a>
                              </h4>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>



          <div class="row">
              <div class="col-12 text-center">
                  <div class="alert alert-default" role="alert" id="videos">
                      Видео
                  </div>
              </div>
              <?php foreach (glob("./media/video_*") as $Video): ?>
                  <div class="col-md-6 col-12 playlist">
                      <div class="card card-product" data-count="1">
                          <div class="card-header card-header-image" data-header-animation="true">

                              <?php echo '<video class="img" src="'.$Video.'" style="object-fit: cover; max-width: 100%; height: auto; border-radius: 6px;" controls></video>'; ?>

                          </div>
                          <div class="card-body">
                              <div class="card-actions text-center">
                                  <a class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Удалить" href="<?= Url::toRoute(['delimg', 'name' => end(explode('/', $Video))]); ?>">
                                      <i class="material-icons">close</i>
                                  </a>
                              </div>
                              <h4 class="card-title">
                                  <a class="btn btn-twitter" target="_blank" href="<?php echo $Video; ?>" style="max-width: 100%; white-space: normal;">
                                      <?php
                                      $file = end(explode('/', $Video));
                                      echo $file;
                                      ?>
                                  </a>
                              </h4>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>



          <div class="row">
              <div class="col-12 text-center">
                  <div class="alert alert-default" role="alert" id="thumb">
                      Миниатюры
                  </div>
              </div>
              <?php foreach (glob("./media/thumb_*") as $Picture): ?>
                  <div class="col-md-6 col-12 playlist">
                      <div class="card card-product" data-count="1">
                          <div class="card-header card-header-image" data-header-animation="true">

                              <?php echo '<img class="img" src="'.$Picture.'" style="object-fit: cover; max-width: 100%; height: auto; border-radius: 6px;">'; ?>

                          </div>
                          <div class="card-body">
                              <div class="card-actions text-center">
                                  <a class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Удалить" href="<?= Url::toRoute(['delimg', 'name' => end(explode('/', $Picture))]); ?>">
                                      <i class="material-icons">close</i>
                                  </a>
                              </div>
                              <h4 class="card-title">
                                  <a class="btn btn-twitter" target="_blank" href="<?php echo $Picture; ?>" style="max-width: 100%; white-space: normal;">
                                      <?php
                                      $file = end(explode('/', $Picture));
                                      echo $file;
                                      ?>
                                  </a>
                              </h4>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>

        </div>



