<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Плейлисты';
?>


      <div class="content" style="max-width: 100%;">
        <div class="container-fluid">
          <!-- your content here -->

          <div class="row" style="max-width: 100%;">

            <div class=" col-md-6 col-12 create-playlist-blck" style="margin: 30px auto;">
                <a href="<?= Url::to(['playlist/create']); ?>" class="btn btn-rose btn-round create-playlist-btn" style="display: flex; border-radius: 6px; width: 100%; height: 260px; justify-content: center; align-items: center; flex-direction: column;">
                    <i class="material-icons" style="font-size: 55pt; margin: 5px; display: flex;">add_circle_outline</i><br>
                    <h3 class="" style=" display: flex;">Создать плейлист</h3>
                </a>
            </div>

              <?php foreach ($playlists as $playlist): ?>
            <div class="col-md-6 col-12 playlist">
              <div class="card card-product" data-count="1">
                <div class="card-header card-header-image" data-header-animation="true">
                  <a href="<?= Url::toRoute(['playlist/view', 'id' => $playlist->id]); ?>">
                    <img class="img" src="<?php
                    if (strpos($playlist->thumb, '://') || strpos($playlist->thumb, './')) {
                        echo $playlist->thumb;
                    } elseif (file_exists(Yii::getAlias('@webroot').$playlist->thumb)) {
                        echo $playlist->thumb;
                    } else {
                        echo 'img/noimage.jpg';
                    }
                    ?>">
                  </a>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                      <i class="material-icons">build</i> Fix Header!
                    </button>
                    <a type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Посмотреть" href="<?= Url::toRoute(['playlist/view', 'id' => $playlist->id]); ?>">
                      <i class="material-icons">art_track</i>
                    </a>
                    <a class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Редактировать" href="<?= Url::toRoute(['playlist/update', 'id' => $playlist->id]); ?>">
                      <i class="material-icons">edit</i>
                    </a>
                    <a class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Удалить" href="<?= Url::toRoute(['playlist/delete', 'id' => $playlist->id]); ?>">
                      <i class="material-icons">close</i>
                    </a>
                  </div>
                  <h4 class="card-title">
                    <a href="<?= Url::toRoute(['playlist/view', 'id' => $playlist->id]); ?>">
                        <?= Html::encode("{$playlist->id}") ?>:
                        <?= Html::encode("{$playlist->name}") ?>
                    </a>
                  </h4>
                  <div class="card-description" style="white-space: nowrap; overflow: hidden; padding: 5px; text-overflow: ellipsis;">
                      <?= Html::encode("{$playlist->description}") ?>
                  </div>
                </div>
                <!--<div class="card-footer">
                  <div class="price">
                    <h4>$899/night</h4>
                  </div>
                  <div class="stats">
                    <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
                  </div>
                </div>-->
              </div>
            </div>
              <?php endforeach; ?>

          </div>

        </div>
      </div>

