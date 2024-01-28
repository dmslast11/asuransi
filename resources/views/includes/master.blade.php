<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Safe Shield</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/uppy.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/quill.snow.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/daterangepicker.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/app-light.css')}}" id="lightTheme">
    <link rel="stylesheet" href="{{asset('assets/css/app-dark.css')}}" id="darkTheme" disabled>

  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
      @include('includes.navbar')
      @include('includes.sidebar')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              @yield('content')
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="list-group list-group-flush my-n3">
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-box fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Package has uploaded successfull</strong></small>
                        <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-download fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Widgets are updated successfull</strong></small>
                        <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-inbox fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Notifications have been sent</strong></small>
                        <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-link fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Link was attached to menu</strong></small>
                        <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                      </div>
                    </div>
                  </div> <!-- / .row -->
                </div> <!-- / .list-group -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body px-5">
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-success justify-content-center">
                      <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Control area</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Activity</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Droplet</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Upload</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-users fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Users</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Settings</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/simplebar.min.js')}}"></script>
    <script src='{{asset('assets/js/daterangepicker.js')}}'></script>
    <script src='{{asset('assets/js/jquery.stickOnScroll.js')}}'></script>
    <script src="{{asset('assets/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('assets/js/d3.min.js')}}"></script>
    <script src="{{asset('assets/js/topojson.min.js')}}"></script>
    <script src="{{asset('assets/js/datamaps.all.min.js')}}"></script>
    <script src="{{asset('assets/js/datamaps-zoomto.js')}}"></script>
    <script src="{{asset('assets/js/datamaps.custom.js')}}"></script>
    <script src="{{asset('assets/js/Chart.min.js')}}"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{asset('assets/js/gauge.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/apexcharts.custom.js')}}"></script>
    <script src='{{asset('assets/js/jquery.mask.min.js')}}'></script>
    <script src='{{asset('assets/js/select2.min.js')}}'></script>
    <script src='{{asset('assets/js/jquery.steps.min.js')}}'></script>
    <script src='{{asset('assets/js/jquery.validate.min.js')}}'></script>
    <script src='{{asset('assets/js/jquery.timepicker.js')}}'></script>
    <script src='{{asset('assets/js/dropzone.min.js')}}'></script>
    <script src='{{asset('assets/js/uppy.min.js')}}'></script>
    <script src='{{asset('assets/js/quill.min.js')}}'></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      // Notifikasi Tambah Data
      $('.add_data').click(function(event) {
          event.preventDefault();

          var form = $(this).closest("form");
          var dataAddedSuccessfully = true;

          // Close the modal
          $('#addModal').modal('hide');

          if (dataAddedSuccessfully) {
              // Show SweetAlert for success after the modal is hidden
              $(document).on('shown.bs.modal', '#addModal', function () {
                  Swal.fire({
                      icon: "success",
                      title: "Data berhasil ditambahkan",
                      text: "Klik OK untuk melanjutkan",
                      showConfirmButton: true,
                  }).then(() => {
                      form.submit();
                      Swal.close();
                  });
              });
          } else {
              Swal.fire({
                  icon: "error",
                  title: "Gagal menambahkan data",
                  text: "Silakan coba lagi",
                  showConfirmButton: true,
              });
          }
      });
    </script>

<script>
  $(document).ready(function () {
      // Fungsi untuk memberikan format pada input biaya
      $('#jumlah').on('input', function () {
          // Hapus karakter yang bukan digit atau "." dari input
          var inputVal = $(this).val().replace(/[^0-9]/g, '');

          // Format input menjadi mata uang
          var formattedVal = formatCurrency(inputVal);

          // Set nilai input dengan hasil format
          $(this).val(formattedVal);
      });

      // Fungsi untuk memberikan format mata uang
      function formatCurrency(value) {
          if (!value) return '';

          // Tambahkan koma setiap tiga digit dari belakang
          var formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

          // Tambahkan "Rp " di depan
          return 'Rp ' + formattedValue;
      }
  });
</script>
  </body>
</html>