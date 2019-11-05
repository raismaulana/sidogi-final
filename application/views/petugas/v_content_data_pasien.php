  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Halaman untuk memenejemen data pasien</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('petugas/home');?>"><i class="fa fa-dashboard"></i> <?php echo $judul;?></a></li>
        <li><a href="<?php echo base_url('petugas/data_pasien');?>"><?php echo $sub_judul;?></a></li>
        <li class="active"><?php echo $anak_judul;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pasien</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              <div class="table-responsive">
              <table id="tabel_data_pasien" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Tanggal Daftar</th>
                    <th>ID Rekam Medis</th>
                    <th>Nama</th>
                    <th>Tempat</th>
                    <th>Tanggal Lahir</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
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
                  <td><a href="javascript:;" data-toggle="modal" data-target="#modal_edit_pasien"
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
                    class="open-edit_modal_pasien fa fa-edit">edit</a></td>
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


      <div id="modal_edit_pasien" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ed_pasien">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-tittle" id="modal_ed_pasien">EDIT</h4>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('petugas/data_pasien/update_pasien'); ?>" method="post">
              <div class="row">
                      <div class="col-md-6">
                       <div class="form-group">
                          <label>ID Rekam Medis*</label>
                          <input readonly class="form-control reset" type="text" name="reg_id_pasien" id="reg_id_pasien"  required>
                        </div><div class="form-group">
                          <label>Nama Pasien*</label>
                          <input class="form-control reset" type="text" name="reg_nama_pasien" id="reg_nama_pasien" required>
                        </div>
                        <div class="form-group">
                          <label>Tempat Lahir*</label>
                          <input list="list_kota" autocomplete="off" type="text" name="reg_tempatlahir_pasien" class="form-control reset" id="reg_tempatlahir_pasien" required>
                          <datalist id="list_kota"><?php foreach ($data_kota as $row): ?>
                          <option value="<?php cetak($row); ?>">
                            <?php cetak($row);?>    
                          </option>
                        <?php endforeach; ?>
                          </datalist>
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir*</label>
                          <input class="form-control reset" type="text" name="reg_tanggallahir_pasien" id="reg_tanggallahir_pasien"  required>
                        </div>
                        <div class="form-group">
                          <label>Alamat Rumah*</label>
                          <input class="form-control reset" type="text" name="reg_alamat_pasien" id="reg_alamat_pasien" placeholder="Alamat Rumah Pasien" required>
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin*</label>
                          <select class="form-control reset" type="text" name="reg_gender_pasien" id="reg_gender_pasien" placeholder="Jenis Kelamin ..." required>
                            <option id value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Nomor NIK</label>
                          <input onkeypress="return hanyaAngka(event)" class="form-control reset" type="text" name="reg_noktp_pasien" id="reg_nik_pasien" placeholder="Nomor NIK ..." >
                        </div>
                        <div class="form-group">
                          <label>Pekerjaan</label>
                          <input class="form-control reset" type="text" name="reg_pekerjaan_pasien" id="reg_pekerjaan_pasien" placeholder="Pekerjaan Pasien" >
                        </div>
                        <div class="form-group">
                          <label>Nomor Telepon</label>
                          <input onkeypress="return hanyaAngka(event)" class="form-control reset" type="text" name="reg_notelp_pasien" id="reg_notelp_pasien" placeholder="Nomor Telepon Pasien" >
                        </div>
                        <p><i><b>*</b>keterangan: tanda (*) harus diisi</i></p>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Golongan Darah</label>
                          <select data-placeholder="Pilih Golongan Darah" class="form-control reset" name="reg_golongandarah_pasien" id="reg_golongandarah_pasien">
                            <option value="-">-</option>
                            <option value="A">A</option>
                            <option value="AB">AB</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Tekanan Darah</label>
                          <select class="form-control reset" name="reg_tekanandarah_pasien" id="reg_tekanandarah_pasien">
                            <option value="Normal">Normal</option>
                            <option value="Hipotensi">Hipotensi</option>
                            <option value="Hipertensi">Hipertensi</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Penyakit Jantung</label>
                          <select class="form-control reset" name="reg_pjantung_pasien" id="reg_pjantung_pasien" >
                            <option value="Tidak Ada">Tidak ada</option>
                            <option value="Ada">Ada</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Diabetes</label>
                          <select class="form-control reset" name="reg_diabetes_pasien" id="reg_diabetes_pasien">
                            <option value="Tidak Ada">Tidak ada</option>
                            <option value="Ada">Ada</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Hemophilia</label>
                          <select class="form-control reset" name="reg_hemophilia_pasien" id="reg_hemophilia_pasien">
                            <option value="Tidak Ada">Tidak ada</option>
                            <option value="Ada">Ada</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Hepatitis</label>
                          <select class="form-control reset" name="reg_hepatitis_pasien" id="reg_hepatitis_pasien" >
                            <option value="Tidak Ada">Tidak ada</option>
                            <option value="Ada">Ada</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Gastritis</label>
                          <select class="form-control reset" name="reg_gastritis_pasien" id="reg_gastritis_pasien" >
                            <option value="Tidak ada">Tidak ada</option>
                            <option value="Ada">Ada</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Penyakit Lainnya</label>
                          <input class="form-control reset" type="text" name="reg_plain_pasien" id="reg_plain_pasien" placeholder="Apa ada penyakit lain?">
                        </div>
                        <div class="form-group">
                          <label>Alergi Obat</label>
                          <input class="form-control reset" type="text" name="reg_alergiobat_pasien" id="reg_alergiobat_pasien" placeholder="Alergi Obat apa?">
                        </div>
                        <div class="form-group">
                          <label>Alergi Makanan</label>
                          <input class="form-control reset" type="text" name="reg_alergimakanan_pasien" id="reg_alergimakanan_pasien" placeholder="Alergi Makanan apa?">
                        </div>
                        <div class="form-group">
                          <label>Tanggal Daftar</label>
                          <input class="form-control reset" type="text" name="reg_tanggaldaftar_pasien" id="reg_tanggaldaftar_pasien" placeholder="Alergi Makanan apa?" readonly>
                        </div>
                        <div class="form-group">
                          <label>Status Pasien</label>
                          <input class="form-control reset" type="text" name="status_pasien" id="status_pasien" readonly>
                        </div>
                    </div>
                    <div class="modal-footer" >
                      <button class="btn btn-success pull-right">Update</button>
                    </div>

                </form>
            </div>
        </div>
      </div>

    </section>