<?php

/* @var $this yii\web\View */
/* @var $model app\models\Settings */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


$this->title = 'Настройки';
?>


      <div class="content" style="width: 100%;">
        <div class="container-fluid">
          <!-- your content here -->

            <!--<div class="card card-background" style="background-image: url('https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D')">
                <div class="card-body">
                    <h6 class="card-category text-info">Настройки</h6>

                        <h3 class="card-title">Данный раздел дорабатывается...</h3>

                    <p class="card-description">
                        На данной странице вы сможете настраивать некоторые части системы.
                    </p>

                    <a href="<?= Url::to(['admin/help']); ?>" class="btn  btn-secondary">
                        Перейти к руководству пользователя
                    </a>
                </div>
            </div>-->

          <div class="row">
              <div class="card">
                  <?php $form = ActiveForm::begin([
                      'options' => [
                          'enctype' => 'multipart/form-data',
                      ]
                  ]); ?>
                  <div class="card-body">

                      <div class="form-group">
                          <h4>Фон в плеере</h4>
                          <?php echo Html::img($settings->fbackground, ['class' => 'img', 'style' => ['max-width' => '100%','border-radius' => '6px',
                              'pointer-events' => 'none', 'box-shadow' => '0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2)']]);
                          ?>
                          <?= $form->field($settings, 'image')->fileInput(); ?>
                      </div>

                      <hr>

                      <?= $form->field($settings,'smini', ['template' => '                              
                              <h4>Минимизированное меню в панели администратора</h4>
                              <div class="togglebutton">
                                  <label>
                                    {input}
                                    Выключено
                                      <span class="toggle"></span>
                                      Включено
                                  </label>
                                </div>
                            '])->checkBox(['class'=>'form-check-input span-1'], false); ?>

                      <hr>

                      <?= $form->field($settings,'ftheme', ['template' => '
                                  <h4>Переключатель темы в плеере</h4>
                                  <div class="togglebutton">
                                      <label>
                                        {input}
                                        Темная тема
                                          <span class="toggle"></span>
                                          Светлая тема
                                      </label>
                                    </div>
                                '])->checkBox(['class'=>'form-check-input span-1'], false); ?>

                  <div class="card-footer">
                      <div class="ml-auto">
                          <?= Html::submitButton('Сохранить', ['class' => 'btn btn-finish btn-fill btn-rose btn-wd', 'name' => 'finish',  ]) ?>
                      </div>
                  </div>
              </div>
              <?php ActiveForm::end(); ?>
              <?php //phpinfo(); ?>
          </div>

        </div>
      </div>
