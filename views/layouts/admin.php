<?php

/* @var $this \yii\web\View */
/* @var $model app\models\Settings */
/* @var $content string */

use yii\helpers\Url;
use yii\widgets\Pjax;

?>
<?php $this->beginPage(); ?>
<!doctype html>
<html lang="ru">

<head>
<base href="/web/"/>
  <title><?= $this->title ?> | Панель администратора</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="../assets/css/style-pro.min.css?v=2.0.3" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<!--class="sidebar-mini"-->
<body <?php switch (\app\models\Settings::findOne(1)->smini){
    case 0:
        echo '';
        break;

    case 1:
        echo 'class="sidebar-mini"';
        break;
}?>>
<?php $this->beginBody(); ?>
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
          <a href="/" class="simple-text logo-mini">ПА</a>
        <a href="/" class="simple-text logo-normal">
          Панель<br>администратора
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item   ">
            <a class="nav-link" href="<?= Url::to(['admin/channels']); ?>" tabindex="0">
              <i class="material-icons">add_to_queue</i>
              <p>Каналы</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="<?= Url::to(['admin/playlists']); ?>" tabindex="0">
              <i class="material-icons">queue</i>
              <p>Плейлисты</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="<?= Url::to(['admin/media']); ?>" tabindex="0">
              <i class="material-icons">perm_media</i>
              <p>Медиафайлы</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="<?= Url::to(['admin/settings']); ?>" tabindex="0">
              <i class="material-icons">settings</i>
              <p>Настройки</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="<?= Url::to(['admin/help']); ?>" tabindex="0">
              <i class="material-icons">help</i>
              <p>Помощь</p>
            </a>
          </li>
          
          <li class="nav-item   ">
            <a class="nav-link" href="<?= Url::to(['admin/logout']); ?>" tabindex="0">
              <i class="material-icons">exit_to_app</i>
              <p>Выйти</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>

      <div class="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
              <div class="container-fluid">
                  <div class="navbar-wrapper">
                      <a class="navbar-brand" href="javascript:;" style="font-size: 1.5rem;"><?php echo $this->title; ?></a>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="navbar-toggler-icon icon-bar"></span>
                      <span class="navbar-toggler-icon icon-bar"></span>
                      <span class="navbar-toggler-icon icon-bar"></span>
                  </button>
                  <!--<div class="collapse navbar-collapse justify-content-end">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link" href="javascript:;">
                                  <i class="material-icons">notifications</i> Уведомления
                              </a>
                          </li>
                           your navbar here
                      </ul>
                  </div>-->
              </div>
          </nav>
          <!-- End Navbar -->



          <div class="content">
              <div class="container-fluid">
                  <div class="row">

                            <?= $content ?>

                  </div>
                  <!-- end row -->
              </div>
          </div>





          <footer class="footer">
              <div class="container-fluid">

                  <div class="copyright float-right">
                      &copy;
                      <script>
                          document.write(new Date().getFullYear())
                      </script>, Copyright
                  </div>
                  <!-- your footer here -->
              </div>
          </footer>
      </div>

</div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

  <!-- Plugin for the Perfect Scrollbar -->
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>

  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>

  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>

  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>

  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js" ></script>

  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>

  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>

  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>

  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>

  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>

  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" ></script>

  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>

  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>

  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.2" type="text/javascript"></script>

  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
      $(document).ready(function() {
          $().ready(function() {
              $sidebar = $('.sidebar');

              $sidebar_img_container = $sidebar.find('.sidebar-background');

              $full_page = $('.full-page');

              $sidebar_responsive = $('body > .navbar-collapse');

              window_width = $(window).width();

              fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

              if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                  if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                      $('.fixed-plugin .dropdown').addClass('open');
                  }

              }

              $('.fixed-plugin a').click(function(event) {
                  // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                  if ($(this).hasClass('switch-trigger')) {
                      if (event.stopPropagation) {
                          event.stopPropagation();
                      } else if (window.event) {
                          window.event.cancelBubble = true;
                      }
                  }
              });

              $('.fixed-plugin .active-color span').click(function() {
                  $full_page_background = $('.full-page-background');

                  $(this).siblings().removeClass('active');
                  $(this).addClass('active');

                  var new_color = $(this).data('color');

                  if ($sidebar.length != 0) {
                      $sidebar.attr('data-color', new_color);
                  }

                  if ($full_page.length != 0) {
                      $full_page.attr('filter-color', new_color);
                  }

                  if ($sidebar_responsive.length != 0) {
                      $sidebar_responsive.attr('data-color', new_color);
                  }
              });

              $('.fixed-plugin .background-color .badge').click(function() {
                  $(this).siblings().removeClass('active');
                  $(this).addClass('active');

                  var new_color = $(this).data('background-color');

                  if ($sidebar.length != 0) {
                      $sidebar.attr('data-background-color', new_color);
                  }
              });

              $('.fixed-plugin .img-holder').click(function() {
                  $full_page_background = $('.full-page-background');

                  $(this).parent('li').siblings().removeClass('active');
                  $(this).parent('li').addClass('active');


                  var new_image = $(this).find("img").attr('src');

                  if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                      $sidebar_img_container.fadeOut('fast', function() {
                          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                          $sidebar_img_container.fadeIn('fast');
                      });
                  }

                  if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                      var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                      $full_page_background.fadeOut('fast', function() {
                          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                          $full_page_background.fadeIn('fast');
                      });
                  }

                  if ($('.switch-sidebar-image input:checked').length == 0) {
                      var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                      var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                      $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                      $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                  }

                  if ($sidebar_responsive.length != 0) {
                      $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                  }
              });

              $('.switch-sidebar-image input').change(function() {
                  $full_page_background = $('.full-page-background');

                  $input = $(this);

                  if ($input.is(':checked')) {
                      if ($sidebar_img_container.length != 0) {
                          $sidebar_img_container.fadeIn('fast');
                          $sidebar.attr('data-image', '#');
                      }

                      if ($full_page_background.length != 0) {
                          $full_page_background.fadeIn('fast');
                          $full_page.attr('data-image', '#');
                      }

                      background_image = true;
                  } else {
                      if ($sidebar_img_container.length != 0) {
                          $sidebar.removeAttr('data-image');
                          $sidebar_img_container.fadeOut('fast');
                      }

                      if ($full_page_background.length != 0) {
                          $full_page.removeAttr('data-image', '#');
                          $full_page_background.fadeOut('fast');
                      }

                      background_image = false;
                  }
              });

              $('.switch-sidebar-mini input').change(function() {
                  $body = $('body');

                  $input = $(this);

                  if (md.misc.sidebar_mini_active == true) {
                      $('body').removeClass('sidebar-mini');
                      md.misc.sidebar_mini_active = false;

                      $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                  } else {

                      $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                      setTimeout(function() {
                          $('body').addClass('sidebar-mini');

                          md.misc.sidebar_mini_active = true;
                      }, 300);
                  }

                  // we simulate the window Resize so the charts will get updated in realtime.
                  var simulateWindowResize = setInterval(function() {
                      window.dispatchEvent(new Event('resize'));
                  }, 180);

                  // we stop the simulation of Window Resize after the animations are completed
                  setTimeout(function() {
                      clearInterval(simulateWindowResize);
                  }, 1000);

              });
          });
      });
  </script>
<script>
    $(function () { 
        $('.nav a').each(function () {
            var location = window.location.href;
            var link = this.href; 
            if(location == link) {
                $(this).parent().addClass('active');
            }
        });





    });
</script>

  <script>
      $(document).ready(function() {
          // Initialise the wizard
          demo.initMaterialWizard();
          setTimeout(function() {
              $('.card.card-wizard').addClass('active');
          }, 600);
      });
  </script>

<script>
    <!-- javascript for activating the Perfect Scrollbar -->
    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

    <!-- javascript for detroying the Perfect Scrollbar -->
    $('.main-panel').perfectScrollbar('destroy');

    <!-- javascript for updating the Perfect Scrollbar when the content of the page is changing -->
    $('.main-panel').perfectScrollbar('update');
</script>

</body>

</html>
<?php $this->endPage(); ?>