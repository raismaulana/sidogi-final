    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dokter/home');?>"><i class="fa fa-dashboard"></i> <?php echo $judul;?></a></li>
        <li class="active"><a href="<?php echo base_url('dokter/laporan')?>"><?php echo $sub_judul;?></a></li>
        <li class="active"><?php echo $anak_judul;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php cetak(number_format($jml_user,null,null,".")); ?></h3>

              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="fa fa-at"></i>
            </div>
            <a href="<?php echo base_url('dokter/user'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php cetak(number_format($jml_pekerja,null,null,".")); ?></h3>

              <p>Total Pekerja</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href="<?php echo base_url('dokter/pekerja'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php cetak(number_format($jml_kunjungan,null,null,".")); ?></h3>

              <p>Total Kunjungan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url('dokter/laporan/kunjungan'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php cetak(number_format($jml_rekammedis,null,null,".")); ?></h3>

              <p>Total Rekam Medis</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="<?php echo base_url('dokter/laporan/rekammedis'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="content">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#grafik-kunjungan" data-toggle="tab">Kunjungan</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Grafik Bulanan</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="grafik-kunjungan" style="position: relative; height: 300px;"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="content">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#grafik-rekammedis" data-toggle="tab">Rekam Medis</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Grafik Bulanan</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="grafik-rekammedis" style="position: relative; height: 300px;"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->