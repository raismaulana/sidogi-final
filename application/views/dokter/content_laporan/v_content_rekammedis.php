<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
        <small>Halaman untuk melihat laporan daftar rekam medis</small>
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
              <h3 class="box-title">Laporan Data Pasien</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="tabel_laporan_pasien" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Tanggal Daftar</th>
                    <th>ID Rekam Medis</th>
                    <th>Nama</th>
                    <th>Tempat</th>
                    <th>Tanggal Lahir</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>DLL</th>
                    <th>Riwayat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $num=1;
                  foreach ($data_laporan_pasien as $row) { ?>
                <tr>
                  <td><?php cetak(date("Y-m-d", strtotime($row['tanggaldaftar_pasien']))); ?></td>
                  <td><?php cetak($row['koderekammedis_pasien']); ?></td>
                  <td><?php cetak($row['nama_pasien']);?></td>
                  <td><?php cetak($row['tempatlahir_pasien']);?></td>
                  <td><?php cetak(date("d-m-Y", strtotime($row['tanggallahir_pasien'])));?></td>
                  <td><?php cetak($row['nik_pasien']);?></td>
                  <td><?php cetak($row['gender_pasien']);?></td>
                  <td><a href="javascript:;" data-toggle="modal" data-target="#modal_detail_pasien"
                    data-id_pasien="<?php cetak($row['koderekammedis_pasien']);?>"
                    data-nama_pasien="<?php cetak($row['nama_pasien']);?>"
                    data-tempatlahir_pasien="<?php cetak($row['tempatlahir_pasien']);?>"
                    data-tanggallahir_pasien="<?php cetak($row['tanggallahir_pasien']);?>"
                    data-nik_pasien="<?php cetak($row['nik_pasien']);?>"
                    data-gender_pasien="<?php cetak($row['gender_pasien']);?>"
                    data-pekerjaan_pasien="<?php cetak($row['pekerjaan_pasien']);?>"
                    data-alamat_pasien="<?php cetak($row['alamat_pasien']);?>"
                    data-notelp_pasien="<?php cetak($row['notelp_pasien']);?>" 
                    data-golongandarah_pasien="<?php cetak($row['golongandarah_pasien']);?>"
                    data-tekanandarah_pasien="<?php cetak($row['tekanandarah_pasien']);?>"
                    data-penyakitjantung_pasien="<?php cetak($row['penyakitjantung_pasien']);?>"
                    data-diabetes_pasien="<?php cetak($row['diabetes_pasien']);?>"
                    data-hemophilia_pasien="<?php cetak($row['hemophilia_pasien']);?>"
                    data-hepatitis_pasien="<?php cetak($row['hepatitis_pasien']);?>"
                    data-gastritis_pasien="<?php cetak($row['gastritis_pasien']);?>"
                    data-penyakitlain_pasien="<?php cetak($row['penyakitlain_pasien']);?>" 
                    data-alergiobat_pasien="<?php cetak($row['alergiobat_pasien']);?>"
                    data-alergimakanan_pasien="<?php cetak($row['alergimakanan_pasien']);?>"
                    data-tanggaldaftar_pasien="<?php cetak($row['tanggaldaftar_pasien']);?>"
                    data-status_pasien="<?php cetak($row['status_pasien']);?>"
                    class="open-detail_modal_pasien fa fa-search-plus">detail</a></td>
                  <td><a class="btn btn-success btn-xs" href="<?php echo base_url('dokter/laporan/riwayat/'.$row['id_pasien'].'');?>"><i class="fa fa-edit"></i>NEXT</a></td>
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


      <div id="modal_detail_pasien" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_det_pasien">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-tittle" id="modal_det_pasien">DETAIL</h4>
            </div>
            <div class="modal-body">
              
              <div class="row">
                      <div class="col-md-6">
                       
                        
                        <div class="form-group">
                          <label>ID Rekam Medis</label>
                          <input type="text" class="form-control" readonly id="id_pasien">
                        </div><div class="form-group">
                          <label>Nama Pasien</label>
                          <input type="text" class="form-control" readonly id="nama_pasien">
                        </div>
                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input type="text" class="form-control" readonly id="tempatlahir_pasien">
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="text" class="form-control" readonly id="tanggallahir_pasien">
                        </div>
                        <div class="form-group">
                          <label>Nomor NIK</label>
                          <input type="text" class="form-control" readonly id="nik_pasien">
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input type="text" class="form-control" readonly id="gender_pasien">
                        </div>
                        <div class="form-group">
                          <label>Pekerjaan</label>
                          <input type="text" class="form-control" readonly id="pekerjaan_pasien">
                        </div>
                        <div class="form-group">
                          <label>Alamat Rumah*</label>
                          <input type="text" class="form-control" readonly id="alamat_pasien">
                        </div>
                        <div class="form-group">
                          <label>Nomor Telepon*</label>
                          <input type="text" class="form-control" readonly id="notelp_pasien">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Golongan Darah</label>
                          <input type="text" class="form-control" readonly id="golongandarah_pasien">
                        </div>
                        <div class="form-group">
                          <label>Tekanan Darah</label>
                          <input type="text" class="form-control" readonly id="tekanandarah_pasien">
                        </div>
                        <div class="form-group">
                          <label>Penyakit Jantung</label>
                          <input type="text" class="form-control" readonly id="penyakitjantung_pasien">
                        </div>
                        <div class="form-group">
                          <label>Diabetes</label>
                          <input type="text" class="form-control" readonly id="diabetes_pasien">
                        </div>
                        <div class="form-group">
                          <label>Haemopilia</label>
                          <input type="text" class="form-control" readonly id="hemophilia_pasien">
                        </div>
                        <div class="form-group">
                          <label>Hepatitis</label>
                          <input type="text" class="form-control" readonly id="hepatitis_pasien">
                        </div>
                        <div class="form-group">
                          <label>Gastring</label>
                          <input type="text" class="form-control" readonly id="gastritis_pasien">
                        </div>
                        <div class="form-group">
                          <label>Penyakit Lainnya</label>
                          <input type="text" class="form-control" readonly id="penyakitlain_pasien">
                        </div>
                        <div class="form-group">
                          <label>Alergi Obat</label>
                          <input type="text" class="form-control" readonly id="alergiobat_pasien">
                        </div>
                        <div class="form-group">
                          <label>Alergi Makanan</label>
                          <input type="text" class="form-control" readonly id="alergimakanan_pasien">
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <input type="text" class="form-control" readonly id="status_pasien">
                        </div>
                      </div>
                    </div>

                
            </div>
        </div>
      </div>

    </section>