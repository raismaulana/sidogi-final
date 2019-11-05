<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIDOGI - Aplikasi Dokter Gigi (petugas)</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon.ico" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/all.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIDOGI</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
            </a>
            <ul class="dropdown-menu">
             
            </ul>
          </li> -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/images/<?php echo $this->session->userdata('foto');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php cetak($this->session->userdata('user'));?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>assets/images/<?php echo $this->session->userdata('foto');?>" class="img-circle" alt="User Image">

                <p>
                 <?php cetak($this->session->userdata('user'));?>
                  <small><?php cetak($this->session->userdata('level'));?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                                    <!-- <a href="<?php //echo base_url();?>index.php/home_kasir/rubah" class="btn btn-default btn-flat">Manage</a> -->
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url();?>index.php/login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    
   <?php $this->load->view($menu);?>
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?php $this->load->view($content);?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      &copy; 2018 <strong>SIDOGI 1.0.0</strong> - Aplikasi Dokter Gigi. Desain by <a href="https://www.adminlte.io">adminLTE</a>, Developed by DDR Team.
    </div>
    <p><?php    if(function_exists ('date_default_timezone_set'))
        date_default_timezone_set('Asia/Jakarta');
$d = date("l");
 
        if ($d=='Monday'){
            echo '&nbsp; Senin &nbsp;';
        }elseif($d=='Tuesday'){
            echo 'Selasa  &nbsp;';
        }elseif($d=='Wednesday'){
            echo 'Rabu  &nbsp;';
        }elseif($d=='Thursday'){
            echo 'Kamis  &nbsp;';
        }elseif($d=='Friday'){
            echo 'Jumat &nbsp;';
        }elseif($d=='Saturday'){
            echo 'Sabtu  &nbsp;';
        }elseif($d=='Sunday'){
            echo 'Minggu  &nbsp;';
        }else{
            echo 'ERROR!';
        }
echo  date('Y-m-d H:i');
        ?></p>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
  <!-- Tab panes --></aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!---time-->
<script src="<?php echo base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<script src="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- select2 -->
<script src="<?php echo base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js""></script>
<!-- InputMask -->
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<style>
.datepicker{z-index:9999 !important}
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $("#tabel_antrian").DataTable();
    $("#tabel_data_pasien").DataTable();

    $("#id").on("input", function(){
      var val = $(this).val();
      console.log(val);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('petugas/home/listPasien');?>",
        data: {'val':val},
        dataType: "json",
        success:function(response){
          if (response !== null) {
            $('#list_pasien').empty();
            $.each(response, function(index, element){
              // console.log(index);
              // console.log(element);
              $('#list_pasien').append('<option value="'+element.koderekammedis_pasien+'">('+element.koderekammedis_pasien+') '+element.nama_pasien+'</option>');
            })
          } else{
            $('#list_pasien').empty();
          }
        }
      })
    })

    $('#reg_tanggallahir_pasien').datepicker({
    todayHighlight: true,
    autoclose: true,
    format: "yyyy-mm-dd"
  });
  $("#reg_tanggallahir_pasien").inputmask("yyyy-mm-dd");
  // $("#reg_notelp_pasien").inputmask("9999 9999 9999");
  // $("#reg_nik_pasien").inputmask("99 99 99 999999 9999");
  // $('#reg_tanggallahir_pasien').on('change', function(){
  //   console.log($(this).val());
  // });

  $("#reg_nik_pasien").on("keyup", function(){
    var isi = $(this).val().split(" ").join("");
      if (isi == null || isi == '') {
        $('#btn_submit_reg_pasien').prop('disabled', false);
        $('#divnik-change-success').prop('class','form-group div-change-success');
        $('#labelnik-change-success').replaceWith('<label for="reg_nik_pasien" id="labelnik-change-success">Nomor NIK</label>');
      } else {
        $.ajax({
          type:"POST",
          url:"<?= site_url('petugas/home/cekNik');?>",
          data: {'nik':isi},
          success:function(response){
            if (response>0) {
              $('#btn_submit_reg_pasien').prop('disabled', true);
              $('#divnik-change-success').prop('class','form-group div-change-success has-error');
              $('#labelnik-change-success').replaceWith('<label for="reg_nik_pasien" id="labelnik-change-success">Nomor NIK <small><i class="fa fa-times-circle-o"></i><i>NIK sudah dipakai</i></small></label>');
            } else{
              $('#divnik-change-success').prop('class','form-group div-change-success has-success');
              $('#labelnik-change-success').replaceWith('<label for="reg_nik_pasien" id="labelnik-change-success">Nomor NIK <small><i class="fa fa-check"></i><i>NIK belum dipakai</i></small></label>');
              $('#btn_submit_reg_pasien').prop('disabled', false);
            }         
          },
          error: function(){
            alert("error");
          }
        })
      }
    });

});

  $('.open-edit_modal_pasien').on('click', function(){
      var id_pasien = $(this).data('id_pasien');
      var nama_pasien = $(this).data('nama_pasien');
      var tempatlahir_pasien = $(this).data('tempatlahir_pasien');
      var tanggallahir_pasien = $(this).data('tanggallahir_pasien');
      var nik_pasien = $(this).data('nik_pasien');
      var gender_pasien = $(this).data('gender_pasien');
      var pekerjaan_pasien = $(this).data('pekerjaan_pasien');
      var alamat_pasien = $(this).data('alamat_pasien');
      var notelp_pasien = $(this).data('notelp_pasien');
      var golongandarah_pasien = $(this).data('golongandarah_pasien');
      var tekanandarah_pasien = $(this).data('tekanandarah_pasien');
      var penyakitjantung_pasien = $(this).data('penyakitjantung_pasien');
      var diabetes_pasien = $(this).data('diabetes_pasien');
      var haemopilia_pasien = $(this).data('haemopilia_pasien');
      var hepatitis_pasien = $(this).data('hepatitis_pasien');
      var gastring_pasien = $(this).data('gastring_pasien');
      var penyakitlain_pasien = $(this).data('penyakitlain_pasien');
      var alergiobat_pasien = $(this).data('alergiobat_pasien');
      var alergimakanan_pasien = $(this).data('alergimakanan_pasien');
      var tanggaldaftar_pasien = $(this).data('tanggaldaftar_pasien');
      var status_pasien = $(this).data('status_pasien');

      $('#reg_id_pasien').val(id_pasien);
      $('#reg_nama_pasien').val(nama_pasien);
      $('#reg_tempatlahir_pasien').val(tempatlahir_pasien);
      $('#reg_tanggallahir_pasien').val(tanggallahir_pasien);
      $('#reg_nik_pasien').val(nik_pasien);
      $('#reg_gender_pasien').val(gender_pasien);
      $('#reg_pekerjaan_pasien').val(pekerjaan_pasien);
      $('#reg_alamat_pasien').val(alamat_pasien);
      $('#reg_notelp_pasien').val(notelp_pasien);
      $('#reg_golongandarah_pasien').val(golongandarah_pasien);
      $('#reg_tekanandarah_pasien').val(tekanandarah_pasien);
      $('#reg_pjantung_pasien').val(penyakitjantung_pasien);
      $('#reg_diabetes_pasien').val(diabetes_pasien);
      $('#reg_haemopilia_pasien').val(haemopilia_pasien);
      $('#reg_hepatitis_pasien').val(hepatitis_pasien);
      $('#reg_gastring_pasien').val(gastring_pasien);
      $('#reg_plain_pasien').val(penyakitlain_pasien);
      $('#reg_alergiobat_pasien').val(alergiobat_pasien);
      $('#reg_alergimakanan_pasien').val(alergimakanan_pasien);
      $('#reg_tanggaldaftar_pasien').val(tanggaldaftar_pasien);
      

      if (status_pasien = '0') {
       $('#status_pasien').val('baru'); 
      } else {
        $('#status_pasien').val('lama'); 
      }

    });


  
  
function showPasien(str) {
  if (str == "") {
    $('#nama').val('');
    $('#reset').hide();
    return;
  } else {
    $.ajax({
      type:"POST",
      url: "<?= site_url('petugas/home/getPasienById');?>",
      data: {'id':str},
      // dataType:"json",
      success:function(response){
        if (response !== null) {
          $('#nama').val(response['nama_pasien']);
          $('#pktbpasien').val(response['id_pasien']);
        } else {
          $('#nama').val('');
          $('#reset').hide();
        }
      },
      error: function(){
        alert("error");
      }
    });
  }
}

function addAntrian(){
  var id_pasien = $("#id").val();
  if(id_pasien == ''){
    $('#id').focus();
  } else {
    $.ajax({
      url: "<?= site_url('petugas/home/inputAntriPeriksa')?>",
      type: "POST",
      data: $('#form_input_antrian').serialize(),
      dataType: "JSON",
      success: function(data){
        if (data['response'] == true) {
          location.reload();
        } else {
          alert(data['msg']);
        }
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error adding data');
      }
    });
    // $('.reset').val('');
  }
}

function hapusAntrian(id) {

  var result = confirm("Yakin membatalkan antrian?");
  if (result) {
    $.ajax({
    url: "<?= site_url('petugas/home/hapusAntrian'); ?>",
    type: "POST",
    data: {'id_rekammedis':id},
    dataType: "JSON",
    success: function(response){
      if (response == true) {
        location.reload();
      } else {
        alert("Error\ndata sudah terhapus");
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      alert('Error hapus data');
    }
  })
  }
}

function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });


</script>
      

</body>
</html>
