<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIDOGI - Aplikasi Dokter Gigi (dokter)</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/select2/dist/css/select2.min.css">


</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini val">
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

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/images/<?php cetak($this->session->userdata('foto'));?>" class="user-image" alt="User Image">
              
              <span class="hidden-xs"><?php cetak($this->session->userdata('user'));?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>assets/images/<?php cetak($this->session->userdata('foto'));?>" class="img-circle" alt="User Image">

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
                
                <div class="pull-right">
                  <a href="<?php echo base_url();?>login/logout" class="btn btn-default btn-flat">Sign out</a>
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
    <p><?php 		if(function_exists ('date_default_timezone_set'))
        date_default_timezone_set('Asia/Jakarta');
$d = date("l");
 
        if ($d=='Monday'){
            echo 'Senin,&nbsp;';
        }elseif($d=='Tuesday'){
            echo 'Selasa,&nbsp;';
        }elseif($d=='Wednesday'){
            echo 'Rabu,&nbsp;';
        }elseif($d=='Thursday'){
            echo 'Kamis,&nbsp;';
        }elseif($d=='Friday'){
            echo 'Jumat,&nbsp;';
        }elseif($d=='Saturday'){
            echo 'Sabtu,&nbsp;';
        }elseif($d=='Sunday'){
            echo 'Minggu,&nbsp;';
        }else{
            echo 'ERROR!';
        }
echo  date('d-m-Y H:i');
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
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
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
<script src="<?php echo base_url()?>assets/bower_components/select2/dist/js/select2.min.js""></script>
<!-- InputMask -->
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<style>
.datepicker{z-index:9999 !important}
</style>
<script type="text/javascript">
  $(document).ready(function(){
    
    $('#tabel_antrian').DataTable();
    $('#tabel_riwayat').DataTable({
      order:[]
    });
    $('#tabel_pekerja').DataTable();
    $('#tabel_user').DataTable();
    $('#tabel_laporan_pasien').DataTable({
      order:[]
    });
    $('#tabel_laporan_rekammedis').DataTable({
      order:[]
    });
    $('#tabel-obat').DataTable({
      order:[]
    });
    $('#tabel-perawatan').DataTable({
      order:[]
    });
    $('#tabel-kodeicd10').DataTable({
      order:[]
    });

    $('.multipleSelect').select2({
      theme: "classic"
    });

    $('.og-inpt1').select2();

    $('#btn_edit_odontogram').on('click', function(){
      $('.og-inpt').prop('readonly', false);
      $('.og-inpt1').removeAttr('disabled');
      $('#btn_close_odontogram').removeAttr('style');
      $('#btn_simpan_odontogram').removeAttr('style');
      $('#btn_edit_odontogram').attr('style', 'display:none;');
    });

    $('#btn_close_odontogram').on('click', function(){
      $('#btn_close_odontogram').attr('style', 'display:none;');
      $('#btn_simpan_odontogram').attr('style', 'display:none;');
      $('.og-inpt').prop('readonly', true);
      $('.og-inpt1').attr('disabled');
      $('#btn_edit_odontogram').removeAttr('style');
      location.reload();
    });

    $('#btn_edit_dmedik').on('click', function(){
      $('.dm-inpt').prop('readonly', false);
      $('.dm-select').removeAttr('disabled');
      $('#btn_close_dmedik').removeAttr('style');
      $('#btn_simpan_dmedik').removeAttr('style');
      $('#btn_edit_dmedik').attr('style', 'display:none;');
    });

    $('#btn_close_dmedik').on('click', function(){
      $('#btn_close_dmedik').attr('style', 'display:none;');
      $('#btn_simpan_dmedik').attr('style', 'display:none;');
      $('.og-inpt').prop('readonly', true);
      $('.og-select').attr('disabled');
      $('#btn_edit_dmedik').removeAttr('style');
      location.reload();
    });

    $('#reg_tanggallahir_pasien').datepicker({
    todayHighlight: true,
    autoclose: true,
    format: "yyyy-mm-dd"
  });
  $("#reg_tanggallahir_pasien").inputmask("yyyy-mm-dd");

    $('#tanggallahir_petugas_reg').datepicker({
    todayHighlight: true,
    autoclose: true,
    format: "yyyy-mm-dd"
    });
    $("#tanggallahir_petugas_reg").inputmask("yyyy-mm-dd");
    // $("#notelp_petugas_reg").inputmask("9999 9999 9999");

     $('#tanggaldaftar_petugas_reg').datepicker({
    todayHighlight: true,
    autoclose: true,
    format: "yyyy-mm-dd"
    });
    $("#tanggaldaftar_petugas_reg").inputmask("yyyy-mm-dd");


    $('#rangetanggallaprm').daterangepicker({
      autoUpdateInput: false,
      locale: {
        cancelLabel: 'Clear'
      }
    });
    $('#rangetanggallaprm').on('apply.daterangepicker', function(ev, picker){
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));

      $('#tabel_laporan_rekammedis').DataTable().destroy();
      $('#tabel_laporan_rekammedis').DataTable({
        "processing" : true,
        "order" : [],
        "ajax" : {
          url:"<?=site_url("dokter/laporan/filterByDate")?>",
          type:"POST",
          data:{
            start_date: picker.startDate.format('YYYY-MM-DD'), end_date: picker.endDate.format('YYYY-MM-DD')
          }
        },
        "columns": [
        { "data": "kodekunjungan_rekammedis",render: $.fn.dataTable.render.text() },
        { "data": "tanggal_rekammedis",render: $.fn.dataTable.render.text() },
        { "data": "nama_pasien",render: $.fn.dataTable.render.text() },
        { "data": "nama_gigi",render: $.fn.dataTable.render.text() },
        { "data": "nama_diagnosis",render: $.fn.dataTable.render.text() },
        { "data": "nama_kodeicd10",render: $.fn.dataTable.render.text() },
        { "data": "nama_perawatan",render: $.fn.dataTable.render.text() },
        { "data": "nama_obat",render: $.fn.dataTable.render.text() },
        { "data": "keterangan_rekammedis", render: $.fn.dataTable.render.text() }
        ]
      });
    });
    $('#rangetanggallaprm').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
      $('#tabel_laporan_rekammedis').DataTable().destroy();
      $('#tabel_laporan_rekammedis').DataTable({
        "processing" : true,
        "order" : [],
        "ajax" : {
          url:"<?=site_url("dokter/laporan/clearFilterByDate")?>",
          type:"POST",
          data:{
            start_date: picker.startDate.format('YYYY-MM-DD'), end_date: picker.endDate.format('YYYY-MM-DD')
          }
        },
        "columns": [
        { "data": "kodekunjungan_rekammedis", render: $.fn.dataTable.render.text() },
        { "data": "tanggal_rekammedis", render: $.fn.dataTable.render.text() },
        { "data": "nama_pasien", render: $.fn.dataTable.render.text() },
        { "data": "gigi_rekammedis", render: $.fn.dataTable.render.text() },
        { "data": "diagnosa_rekammedis", render: $.fn.dataTable.render.text() },
        { "data": "kodeicd10_rekammedis", render: $.fn.dataTable.render.text() },
        { "data": "perawatan_rekammedis", render: $.fn.dataTable.render.text() },
        { "data": "obat_rekammedis", render: $.fn.dataTable.render.text() },
        { "data": "keterangan_rekammedis", render: $.fn.dataTable.render.text() }
        ]
      });
    });

    $('#username_user_reg').on('keyup', function(){
      var uname =$(this).val();
      console.log(uname);
      if (uname == null || uname == '') {
        $('#divusername').prop('class','form-group');
        $('#label_username').replaceWith('<label for="username_user_reg" id="label_username">Username*</label>');
      } else {
        $.ajax({
          type:"POST",
          url:"<?= site_url('dokter/user/cekUsername');?>",
          data: {username: uname},
          success:function(response){
            var status = response['status'];
            console.log(status);
            if (status == 1) {
              $('#divusername').prop('class','form-group has-success');
              $('#label_username').replaceWith('<label for="username_user_reg" id="label_username">Username* <small><i class="fa fa-check"></i><i>username valid</i></small></label>');
            } else{
              $('#divusername').prop('class','form-group has-error');
              $('#label_username').replaceWith('<label for="username_user_reg" id="label_username">Username* <small><i class="fa fa-times-circle-o"></i><i>username sudah dipakai</i></small></label>');
            }         
          },
          error: function(){
            alert("error");
          }
        });
      }
    });

  var  rekamMedisChart = new Morris.Line({
  element: 'grafik-rekammedis',
  resize: true,
  data: <?php if(isset($grafik_rekammedis)) { echo $grafik_rekammedis;} else { echo '[{tahun_bulan:0,jumlah_bulanan:0}]';}?>,
  xkey: 'tahun_bulan',
  ykeys: ['jumlah_bulanan'],
  labels: ['Total Rekam Medis'],
  fillOpacity: 0.6,
  hideHover: 'auto',
  behaveLikeLine: true,
  resize: true,
  pointFillColors:['#ffffff'],
  pointStrokeColors: ['black'],
  lineColors:['black']
  });
   
var kunjunganChart = new Morris.Line({
  element: 'grafik-kunjungan',
  resize: true,
  data: <?php if(isset($grafik_kunjungan)) { echo $grafik_kunjungan;} else { echo '[{tahun_bulan:0,jumlah_bulanan:0}]';}?>,
  xkey: 'tahun_bulan',
  ykeys: ['jumlah_bulanan'],
  labels: ['Total Kunjungan'],
  fillOpacity: 0.6,
  hideHover: 'auto',
  behaveLikeLine: true,
  resize: true,
  pointFillColors:['#ffffff'],
  pointStrokeColors: ['black'],
  lineColors:['blue']
  });
//Fix for charts under tabs
  $('.box ul.nav a').on('shown.bs.tab', function () {
    rekamMedisChart.redraw();
    kunjunganChart.redraw();
  });

  });




    $('.open-detail_modal_pasien').on('click', function(){
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

      $('#id_pasien').val(id_pasien);
      $('#nama_pasien').val(nama_pasien);
      $('#tempatlahir_pasien').val(tempatlahir_pasien);
      $('#tanggallahir_pasien').val(tanggallahir_pasien);
      $('#nik_pasien').val(nik_pasien);
      $('#gender_pasien').val(gender_pasien);
      $('#pekerjaan_pasien').val(pekerjaan_pasien);
      $('#alamat_pasien').val(alamat_pasien);
      $('#notelp_pasien').val(notelp_pasien);
      $('#golongandarah_pasien').val(golongandarah_pasien);
      $('#tekanandarah_pasien').val(tekanandarah_pasien);
      $('#penyakitjantung_pasien').val(penyakitjantung_pasien);
      $('#diabetes_pasien').val(diabetes_pasien);
      $('#haemopilia_pasien').val(haemopilia_pasien);
      $('#hepatitis_pasien').val(hepatitis_pasien);
      $('#gastring_pasien').val(gastring_pasien);
      $('#penyakitlain_pasien').val(penyakitlain_pasien);
      $('#alergiobat_pasien').val(alergiobat_pasien);
      $('#alergimakanan_pasien').val(alergimakanan_pasien);
      $('#tanggaldaftar_pasien').val(tanggaldaftar_pasien);
      

      if (status_pasien == '0') {
        $('#status_pasien').val('baru');
      } else {
        $('#status_pasien').val('lama');
      }

    });

function hapusPekerja(id) {
  var result = confirm("Want to delete?");
  if (result) {
    $.ajax({
      url: "<?= site_url('dokter/pekerja/hapusPekerja'); ?>",
      type: "POST",
      data: {id_petugas:id},
      dataType: "JSON",
      success: function(response){
        if (response == true) {
          location.reload();
        } else {
          alert("Error\ndata sudah terhapus");
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
       alert('Tidak bisa dihapus karena memiliki akun user');
      }
    })
  }
  
};

function hapusUser(id) {
  var result = confirm("Want to delete?");
  if (result) {
    $.ajax({
    url: "<?= site_url('dokter/user/hapusUser'); ?>",
    type: "POST",
    data: {id_user:id},
    dataType: "JSON",
    success: function(response){
      if (response == true) {
        location.reload();
      } else {
        alert("Error\ndata sudah terhapus");
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      alert('Tidak bisa dihapus karena pernah berkontribusi pada aplikasi\njika ingin memblokir akun, edit HAK AKSES ke "non-aktif".');
    }
  })
  }
  
};

function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }

</script>


</body>
</html>
