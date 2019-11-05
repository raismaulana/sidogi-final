<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
        <small>Halaman untuk melihat laporan daftar kunjungan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dokter/home');?>"><i class="fa fa-dashboard"></i> <?php echo $judul;?></a></li>
        <li class="active"><a href="<?php echo base_url('dokter/laporan');?>"><?php echo $sub_judul;?></a></li>
        <li class="active"><?php echo $anak_judul;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Rekam Medis</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <label>Filter Berdasarkan Tanggal</label>
              <input type="text" name="rangetanggal" id="rangetanggallaprm" class="form-control" placeholder="Lihat laporan pada tanggal berapa?">
              <hr>
              <table id="tabel_laporan_rekammedis" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode</th>
                  <th>Tanggal</th>
                  <th>Nama Pasien</th>
                  <th>Gigi</th>
                  <th>Diagnosa</th>
                  <th>Kode ICD 10</th>
                  <th>Perawatan</th>
                  <th>Obat</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_laporan_rekammedis as $row) { ?>
                <tr>
                  <td><?php cetak($row['kodekunjungan_rekammedis']); ?></td>
                  <td><?php cetak($row['tanggal_rekammedis']);?></td>
                  <td><?php cetak($row['nama_pasien']);?></td>
                  <td><?php cetak($row['nama_gigi']);?></td>
                  <td><?php cetak($row['nama_diagnosis']);?></td>
                  <td><?php cetak($row['nama_kodeicd10']);?></td>
                  <td><?php cetak($row['nama_perawatan']);?></td>
                  <td><?php cetak($row['nama_obat']);?></td>
                  <td><?php cetak($row['keterangan_rekammedis']);?></td>
                </tr>
                  <?php } ?>
                </tbody>

              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>