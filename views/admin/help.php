<?php

/* @var $this yii\web\View */

$this->title = 'Помощь';
?>


      <div class="content" style="width: 100%;">
        <div class="container-fluid">
          <!-- your content here -->

            <div class="container text-center">

                    <h2 class="card-title">Руководство пользователя</h2>

                <p class="card-description" style="font-size: 1.3rem;">
                    На данной странице вы можете узнать о том, как работать с системой.
                </p>
            </div>

            <!--<div class="card card-background" style="background-image: url('https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D')">
                <div class="card-body">

                    <a href="#pablo">
                        <h3 class="card-title">Руководство пользователя</h3>
                    </a>
                    <p class="card-description">
                        На данной странице вы сможете получить информацию по работе с системой.
                    </p>
                    <a href="#pablo" class="btn btn-white btn-link">
                        <i class="material-icons">subject</i> Read Article
                    </a>
                    <a href="#pablo" class="btn btn-white btn-link">
                        <i class="material-icons">watch_later</i> Watch Later
                    </a>
                </div>
            </div>-->

          <div class="row">
            <div class="col-11 ml-auto mr-auto">
                <div class="card">
                    <div class="card-body">
                        <div id="accordion" role="tablist">
                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-1">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                            Как создать плейлист
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-1" class="collapse " role="tabpanel" aria-labelledby="heading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol>
                                            <li>
                                                Перейдите на страницу "Плейлисты". <br>
                                                <img class="guide" src="./img/guide-0.gif" alt="">
                                            </li>
                                            <li>
                                                Нажмите на "Создать плейлист". <br>
                                                <img class="guide" src="./img/guide-1.gif" alt="">

                                            </li>
                                            <li>
                                                Введите название и описание плейлиста и нажмите "Далее".<br>
                                                <img class="guide" src="./img/guide-2.gif" alt="">

                                            </li>
                                            <li>
                                                Выберите шаблон плеера и нажмите "Далее".<br>
                                                <img class="guide" src="./img/guide-3.gif" alt="">
                                            </li>
                                            <li>
                                                Выберите миниатюру плейлиста.<br>
                                                <img class="guide" src="./img/guide-4.gif" alt="">
                                            </li>
                                            <li>
                                                Если вам нужно загрузить видео с вашего устройства, то нажмите на надпись "Загрузить видео или баннер" и затем выберите нужный файл как это было сделано в примере.<br>
                                                <img class="guide" src="./img/guide-5.gif" alt="">
                                                Если же вам нужно добавить плейлист с YouTube, то нажмите на надпись "Вставить с YouTube" и следуйте инструкции.<br>
                                                <img class="guide" src="./img/guide-6.gif" alt="">
                                            </li>
                                            <li>
                                                В поле "Текст объявления" введите информацию которая будет отображаться в бегущей строке плеера и нажмите "Сохранить".<br>
                                                <img class="guide" src="./img/guide-7.gif" alt="">
                                            </li>
                                        </ol>

                                    </div>
                                </div>
                            </div>

                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-2">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                            Как посмотреть информацию о плейлисте
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-2" class="collapse " role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol>
                                            <li>
                                                Наведите курсор на нужный плейлист и после того, как миниатюра поднимется нажмите на кнопку "Посмотреть".  <br>
                                                <img class="guide" src="./img/guide-8.gif" alt="">
                                            </li>
                                        </ol>
                                        <div class="alert alert-info text-center">Также из страницы просмотра можно редактировать и удалить плейлист. </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-3">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                            Как редактировать плейлист
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-3" class="collapse " role="tabpanel" aria-labelledby="heading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol>
                                            <li>
                                                Наведите курсор на нужный плейлист и после того, как миниатюра поднимется нажмите на кнопку "Редактировать".  <br>
                                                <img class="guide" src="./img/guide-9.gif" alt="">
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-4">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                            Как удалить плейлист
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-4" class="collapse " role="tabpanel" aria-labelledby="heading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol>
                                            <li>
                                                Наведите курсор на нужный плейлист и после того, как миниатюра поднимется нажмите на кнопку "Удалить".
                                                <div class="alert alert-info text-center">
                                                    Предварительно убедившись, что плейлист не прикреплен ни к какому каналу.
                                                </div>
                                                <img class="guide" src="./img/guide-10.gif" alt="">
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-5">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                            Как создать канал
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-5" class="collapse " role="tabpanel" aria-labelledby="heading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol>
                                            <li>
                                                Перейдите на страницу "Каналы".
                                            </li>
                                            <li>
                                                Нажмите на кнопку "Создать новый канал". <br>
                                                <img class="guide" src="./img/guide-11.gif" alt="">

                                            </li>
                                            <li>
                                                Введите название и описание канала.<br>
                                                <img class="guide" src="./img/guide-12.gif" alt="">

                                            </li>
                                            <li>
                                                Нажмите на выпадающее меню, выберите нужный плейлист и нажмите "Сохранить".<br>
                                                <img class="guide" src="./img/guide-13.gif" alt="">
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-6">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                            Как удалить канал
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-6" class="collapse " role="tabpanel" aria-labelledby="heading-6" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol>
                                            <li>
                                                Нажмите на крестик справа от канала.<br>
                                                <img class="guide" src="./img/guide-14.gif" alt="">
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-7">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                            Как изменить плейлист на канале
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-7" class="collapse " role="tabpanel" aria-labelledby="heading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol>
                                            <li>
                                                Нажмите на кнопку "Выбран плейлист:..." и выберите нужный плейлист.<br>
                                                <img class="guide" src="./img/guide-15.gif" alt="">
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-8">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                                            Как открыть канал в плеере
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-8" class="collapse " role="tabpanel" aria-labelledby="heading-8" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol>
                                            <li>
                                                На титульном листе нажмите на кнопку "Далее".<br>
                                                <img class="guide" src="./img/guide-16.gif" alt="">
                                            </li>
                                            <li>
                                                В поле введите номер канала, который указан <strong style="color: red;">в первом столбце</strong> списка каналов в панели администратора и нажмите на кнопку <strong style="color: red;">"ВОЙТИ В ПЛЕЕР"</strong>.<br>
                                                <img class="guide" src="./img/guide-17.png" alt="">
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-9">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                                            Как выйти из плеера
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-9" class="collapse " role="tabpanel" aria-labelledby="heading-9" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol>
                                            <li>
                                                Для выхода из плеера необходимо нажать на крестик <strong style="color: red;">в правом нижнем углу окна</strong>.<br>
                                                <img class="guide" src="./img/guide-18.gif" alt="">
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-10">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                                            Как выйти из панели администратора
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-10" class="collapse " role="tabpanel" aria-labelledby="heading-10" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol>
                                            <li>
                                                Выйти из панели администратора можно нажав на надпись <strong style="color: red;">"ПАНЕЛЬ АДМИНИСТРАТОРА"</strong> или на кнопку <strong style="color: red;">"Выйти"</strong>.<br>
                                                <img class="guide" src="./img/guide-19.gif" alt="">
                                            </li>
                                        </ol>
                                        <div class="alert alert-default text-center">Также можно закрыть вкладку браузера. </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="heading-11">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                                            Работа с вкладкой "Медиафайлы"
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse-11" class="collapse " role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="alert alert-info text-center">С помощью данной вкладки вы можете просмотреть какие медиафайлы вы загрузили и удалить их.
                                            <br> Все медиафайлы разделены на блоки по типам.</div>
                                        <ol>
                                            <li>
                                                Для удаления наведите курсор на блок с нужным медиафайлом и после того, как миниатюра поднимется нажмите на кнопку "Удалить".
                                                <img class="guide" src="./img/guide-20.png" alt="">
                                            </li>
                                            <li>
                                                Чтобы открыть медиафайл в новой вкладке наведите курсор на синюю кнопку блока. Пример указан ниже.
                                                <img class="guide" src="./img/guide-21.png" alt="">
                                            </li>
                                        </ol>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
      </div>
