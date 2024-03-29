
<?php 
  include "config/koneksi.php";
// index.php

session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['staff_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/images/logo.svg">
    <title>Perpustakaan</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="../assets/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="../assets/css/feather.css">
    <link rel="stylesheet" href="../assets/css/select2.css">
    <link rel="stylesheet" href="../assets/css/dropzone.css">
    <link rel="stylesheet" href="../assets/css/uppy.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.steps.css">
    <link rel="stylesheet" href="../assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="../assets/css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="../assets/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="../assets/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="../assets/css/app-dark.css" id="darkTheme" disabled>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar" style="border: none; background: none;" 
          onclick="window.location.href='https://github.com/nicetryandika/perpus.git'">
          <span class="fe fe-github navbar-toggler-icon" style="font-size: 24px;"></span>
          <span class="ml-2" style="font-size: 14px; vertical-align: middle;">Visit my GitHub Repository</span>
        </button>
        <ul class="nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img src="../assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
             <!-- MENAMPILKAN VALIDASI SESSION -->
             <!-- Ganti "Profile" dengan sesuatu yang sesuai dengan session pengguna -->
             <?php
                    if (isset($_SESSION['staff_username'], $_SESSION['auth_level'])) {
                      echo '<a class="dropdown-item" href="">' . $_SESSION['staff_username'] . ' (' . $_SESSION['auth_level'] . ')</a>';
                  }
                    // Memeriksa apakah session waktu login ada dan belum timeout
                    if (isset($_SESSION['login_time']) && (time() - $_SESSION['login_time'] > 900)) { // 900 detik = 15 menit
                        // Session timeout, hapus semua session dan redirect ke halaman login
                        session_unset();
                        session_destroy();
                        header("Location: logout.php");
                        exit();
                    } else {
                        // Update waktu login pada setiap akses halaman
                        $_SESSION['login_time'] = time();
                    }
              ?>
              <a class="dropdown-item" href="logout.php">Sign Out</a>
            </div>
          </li>
        </ul>
      </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100 mb-4 d-flex">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="index.php?module=">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                        </g>
                    </svg>
                </a>
            </div>
            <!-- Dashboard -->
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="index.php?module=">
                        <i class="fe fe-home fe-16"></i>
                        <span class="ml-3 item-text">Dashboard</span>
                    </a>
                </li>
            </ul>
            <!-- Data -->
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="#data" data-toggle="collapse" aria-expanded="false" aria-controls="data" class="dropdown-toggle nav-link">
                        <i class="fe fe-folder fe-16"></i>
                        <span class="ml-3 item-text">Data</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="data">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="?module=buku">
                              <span class="ml-1 item-text">Data Buku</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="collapse list-unstyled pl-4 w-100" id="data">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="?module=staff">
                              <span class="ml-1 item-text">Data Staff</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="collapse list-unstyled pl-4 w-100" id="data">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="?module=anggota">
                              <span class="ml-1 item-text">Data Anggota</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="collapse list-unstyled pl-4 w-100" id="data">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="?module=peminjaman">
                              <span class="ml-1 item-text">Data Peminjaman</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="collapse list-unstyled pl-4 w-100" id="data">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="?module=pengembalian">
                              <span class="ml-1 item-text">Data Pengembalian</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="#laporan" data-toggle="collapse" aria-expanded="false" aria-controls="laporan" class="dropdown-toggle nav-link">
                        <i class="fe fe-archive fe-16"></i>
                        <span class="ml-3 item-text">Laporan</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="laporan">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="?module=laporan_peminjaman">
                              <span class="ml-1 item-text">Laporan Peminjaman</span>
                            </a>
                        </li>
                    </ul>
                    <!-- <ul class="collapse list-unstyled pl-4 w-100" id="laporan">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="?module=laporan_peminjaman_buku">
                              <span class="ml-1 item-text">Laporan Peminjaman Buku</span>
                            </a>
                        </li>
                    </ul> -->
        </nav>
      </aside>
      <main role="main" class="main-content">
        <!-- penting include data php agar terjadi perubahan halaman ada di satu file data php -->
      <?php include "data.php";?> 
      
      <!-- DASHBOARD CONTENT -->
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <!-- SCRIPT -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/simplebar.min.js"></script>
    <script src='../assets/js/daterangepicker.js'></script>
    <script src='../assets/js/jquery.stickOnScroll.js'></script>
    <script src="../assets/js/tinycolor-min.js"></script>
    <script src="../assets/js/config.js"></script>
    <script src="../assets/js/d3.min.js"></script>
    <script src="../assets/js/topojson.min.js"></script>
    <script src="../assets/js/datamaps.all.min.js"></script>
    <script src="../assets/js/datamaps-zoomto.js"></script>
    <script src="../assets/js/datamaps.custom.js"></script>
    <script src="../assets/js/Chart.min.js"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="../assets/js/gauge.min.js"></script>
    <script src="../assets/js/jquery.sparkline.min.js"></script>
    <script src="../assets/js/apexcharts.min.js"></script>
    <script src="../assets/js/apexcharts.custom.js"></script>
    <script src='../assets/js/jquery.mask.min.js'></script>
    <script src='../assets/js/select2.min.js'></script>
    <script src='../assets/js/jquery.steps.min.js'></script>
    <script src='../assets/js/jquery.validate.min.js'></script>
    <script src='../assets/js/jquery.timepicker.js'></script>
    <script src='../assets/js/dropzone.min.js'></script>
    <script src='../assets/js/uppy.min.js'></script>
    <script src='../assets/js/quill.min.js'></script>

    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
<?php ?>