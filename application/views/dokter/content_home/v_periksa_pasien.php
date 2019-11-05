<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Halaman untuk melihat antrian periksa <?php foreach ($data as $key) {
          echo $key['koderekammedis_pasien'];
        } ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dokter/home');?>"><i class="fa fa-dashboard"></i> <?php echo $judul;?></a></li>
        <li><a href="<?php echo base_url('dokter/home')?>"><?php echo $sub_judul;?></a></li>
        <li class="active"><?php echo $anak_judul;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-info">
          <div class="box-header with-border"><h3 class="box-title">Info Pasien</h3></div>
          <div class="box-body">
          <?php foreach ($data as $row) {?>
            <strong><i class="fa fa-user margin-r-5"></i>Nama</strong>
            <p class="text-muted"><?php cetak($row['nama_pasien']);?></p>
            <hr>
            <strong><i class="fa fa-list-alt margin-r-5"></i>No NIK</strong>
            <p class="text-muted"><?php cetak($row['nik_pasien']);?></p>
            <hr>
            <strong><?php if ($row['gender_pasien'] == "Laki-laki") { echo '<i class="fa fa-mars margin-r-5">'; }else{echo '<i class="fa fa-venus margin-r-5">';} ?></i>Jenis Kelamin</strong>
            <p class="text-muted"><?php cetak($row['gender_pasien']);?></p>
            <hr>
            <strong><i class="fa fa-map-marker margin-r-5"></i>Tempat, Tanggal Lahir</strong>
            <p class="text-muted"><?php cetak($row['tempatlahir_pasien'].", ". date("d-m-Y", strtotime($row['tanggallahir_pasien'])));?></p>
          <hr>  
          <?php }; ?>
          </div>
          </div>
        </div>
        <div class="col-md-9">
          <!-- Box Comment -->
        <div class="box box-solid box-warning">
          <div class="box-header with-border">
              <h3 class="box-title">Pemeriksaan Pasien</h3>
            
            <div class="box-tools">
            
            </div>
              <!-- /.box-tools -->
          </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Data Odontogram</a></li>
              <li><a href="#tab_2" data-toggle="tab">Rekam Medis<?php ?>&nbsp<?php if($cek_rekammedis0 > 0){echo '<span class="label label-warning pull-right">new</span>';} ?></a></li>
              <li><a href="#tab_3" data-toggle="tab">Riwayat&nbsp<span class="label label-info pull-right"><?php cetak($cek_jumlahrekammedis); ?></span></a></li>
              <li class="pull-right"><a href="#tab_4" data-toggle="tab"><i class="fa fa-database"></i> Data Medik</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <?php $this->load->view('dokter/content_home/periksa_pasien/tab_1');?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane " id="tab_2">
                  
                <form action="<?php echo base_url('dokter/home/insert_rekam_medis');?>" method="post">
                <input type="hidden" name="id_pasien" value="<?php foreach ($data as $og){cetak($og['id_pasien']);};?>">
                    <input type="hidden" name="rm_id" value="<?php foreach ($rm_sekarang as $og){cetak($og['id_rekammedis']);};?>">
                <div class="row" >
                  <div class="col-md-12">
                    <?php if($cek_rekammedis0 > 0){echo '<h3 style="text-align:center;">Catat Rekam Medis Baru</h3>';}else{echo '<p><i>tidak ada rekam medis baru yang perlu dicatat</i></p>';} ?>
                    <div class="form-group">
                          <label>Gigi</label>
                          <select style="width: 100%;" multiple="multiple" required class="form-control reset multipleSelect" type="text" name="rm_gigi[]" id="rm_gigi" placeholder="Gigi ..." <?php if($cek_rekammedis0 == 0){echo 'disabled';}?>>
                            <?php foreach ($gigi as $value): ?>
                              <option value="<?php cetak($value->id_gigi);?>"><?php cetak($value->nama_gigi);?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                  <!-- <div class="form-group">
                          <label>Diagnosis</label>
                          <select style="width: 100%;" multiple="multiple" required class="form-control reset multipleSelect" type="text" name="rm_diagnosa[]" id="rm_diagnosa" placeholder="diagnosa ..." <?php// if($cek_rekammedis0 == 0){echo 'disabled';} ?>>
                            <?php// foreach ($kodeicd10 as $value): ?>
                              <option value="<?php// cetak($value->diagnosis_kodeicd10);?>"><?php// cetak($value->diagnosis_kodeicd10);?></option>
                            <?php// endforeach ?>
                          </select>
                        </div> -->
                  <div class="form-group">
                          <label>Kode ICD10</label>
                          <select style="width: 100%;" multiple="multiple" required class="form-control reset multipleSelect" type="text" name="rm_kodeicd10[]" id="rm_kodeicd10" placeholder="kodeicd10 ..." <?php if($cek_rekammedis0 == 0){echo 'disabled';} ?>>
                            <?php foreach ($kodeicd10 as $value): ?>
                              <option value="<?php cetak($value->id_kodeicd10);?>"><?php cetak($value->nama_kodeicd10);?></option>
                            <?php endforeach ?>                            
                          </select>
                        </div>
                  <div class="form-group">
                          <label>Perawatan</label>
                          <select style="width: 100%;" multiple required class="form-control reset multipleSelect" type="text" name="rm_perawatan[]" id="rm_perawatan" placeholder="Perawatan ..." <?php if($cek_rekammedis0 == 0){echo 'disabled';} ?>>                            
                            <?php foreach ($perawatan as $value): ?>
                              <option value="<?php cetak($value->id_perawatan);?>"><?php cetak($value->nama_perawatan);?></option>
                            <?php endforeach ?>             
                          </select>
                        </div>
                  <div class="form-group">
                          <label>Obat</label>
                          <select style="width: 100%;" multiple required class="form-control reset multipleSelect" type="text" name="rm_obat[]" id="rm_obat" placeholder="Obat yang diberikan ke pasien ..." <?php if($cek_rekammedis0 == 0){echo 'disabled';} ?>>
                            <?php foreach ($obat as $value): ?>
                              <option value="<?php cetak($value->id_obat);?>"><?php cetak($value->nama_obat);?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                  <div class="form-group">
                          <label>Keterangan</label>
                          <input class="form-control reset" type="text" name="rm_keterangan" id="rm_keterangan" placeholder="Keterangan ..." <?php if($cek_rekammedis0 == 0){echo 'disabled';} ?>>
                        </div>
                  </div>
                  <div class="form-group"><button type="submit" class="btn btn-block btn-success btn-lg" <?php if($cek_rekammedis0 == 0){echo 'disabled';} ?>>SIMPAN</button></div>
                  
                </form>
                </div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                    <div class="table-responsive">
                      <table id="tabel_riwayat" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                          <tr>
                            <td>ID Kunjungan</td>
                            <td>Tanggal</td>
                            <td>Gigi</td>
                            <td>Keluhan/Diagnosa</td>
                            <td>Kode ICD 10</td>
                            <td>Perawatan</td>
                            <td>Obat</td>
                            <td>Keterangan</td>
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
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                <?php $this->load->view('dokter/content_home/periksa_pasien/tab_4');?>
                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->   

        </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">

            </div> 
        </div>
            <!-- /.box-footer -->
            
            <!-- /.box-footer -->
      </div>
        </div>



    </div>
  </section>
