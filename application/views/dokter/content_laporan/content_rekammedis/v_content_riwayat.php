    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Riwayat
        <small>melihat riwayat rekam medis <?php foreach ($data_riwayat as $key) {
          echo $key['koderekammedis_pasien'];
        } ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dokter/home');?>"><i class="fa fa-dashboard"></i> <?php echo $judul;?></a></li>
        <li><a href="<?php echo base_url('dokter/laporan')?>"><?php echo $sub_judul;?></a></li>
        <li><a href="<?php echo base_url('dokter/laporan/rekammedis')?>"><?php echo $anak_judul;?></a></li>
        <li class="active"><?php echo $cucu_judul;?></li>
      </ol>
    </section>

    <!-- <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
      </div>
    </div> -->

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-list"></i> Riwayat
            <small class="pull-right">Tanggal: <?php date_default_timezone_set('Asia/Jakarta');echo date('d-m-Y');?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <!-- isi info row -->
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
                      <table id="tabel_riwayat" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                          <tr>
                            <th>ID Kunjungan</th>
                            <th>Tanggal</th>
                            <th>Gigi</th>
                            <th>Keluhan/Diagnosa</th>
                            <th>Kode ICD 10</th>
                            <th>Perawatan</th>
                            <th>Obat</th>
                            <th>Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php
              $num=1;
              foreach($data_riwayat as $hu){?>
              <tr>
                <td><?php cetak($hu['kodekunjungan_rekammedis']);?></td>
                <td><?php cetak(date("Y-m-d", strtotime($hu['tanggal_rekammedis'])));?></td>
                <td><?php cetak($hu['nama_gigi']);?></td>
                <td><?php cetak($hu['nama_diagnosis']);?></td>
                <td><?php cetak($hu['nama_kodeicd10']);?></td>
                <td><?php cetak($hu['nama_perawatan']);?></td>
                <td><?php cetak($hu['nama_obat']);?></td>
                <td><?php cetak($hu['keterangan_rekammedis']);?></td>
              </tr>
            <?php } ?>
                      </tbody>
                        
                      </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <!-- <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div> -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>