<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrasi Pasien Baru
        <small>Halaman untuk mendaftarkan pasien baru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('petugas/home');?>"><i class="fa fa-dashboard"></i> <?php echo $judul;?></a></li>
        <li><a href="<?php echo base_url('petugas/home');?>"><?php echo $sub_judul;?></a></li>
        <li class="active"><?php echo $anak_judul;?></li>
      </ol>
    
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <section class="content-header">
              <h1>
                <center> Form Registrasi Pasien Baru </center>
            </section>
            <section class="content">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                  <form autocomplete="off" action="<?php echo base_url('petugas/home/insert_pasien_baru');?>" method="post">
                  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Nama Pasien*</label>
                          <input maxlength="50" class="form-control reset" type="text" name="reg_nama_pasien" id="reg_nama_pasien" placeholder="Nama Pasien ..." required>
                        </div>
                        <div class="form-group">
                          <label>Tempat Lahir*</label>
                          <input maxlength="45" list="list_kota" autocomplete="off" type="text" name="reg_tempatlahir_pasien" class="form-control reset" id="reg_tempatlahir_pasien" placeholder="Tempat Lahir ..." required>
                          <datalist id="list_kota"><?php foreach ($data_kota as $row): ?>
                          <option value="<?php echo $row; ?>">
                            <?php echo $row;?>    
                          </option>
                        <?php endforeach; ?>
                          </datalist>
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir*</label>
                          <input class="form-control reset" type="text" name="reg_tanggallahir_pasien" id="reg_tanggallahir_pasien" placeholder="Tanggal Lahir" required>
                        </div>
                        <div class="form-group">
                          <label>Alamat Rumah*</label>
                          <input maxlength="100" class="form-control reset" type="text" name="reg_alamat_pasien" id="reg_alamat_pasien" placeholder="Alamat Rumah Pasien" required>
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin*</label>
                          <div>
                              <input type="radio" name="reg_gender_pasien"  value="Laki-laki" class="flat-red" checked="">Laki-laki
                          </div>
                          <div>
                              <input type="radio" name="reg_gender_pasien"  value="Perempuan" class="flat-red" >Perempuan
                          </div>
                          
                        </div>
                        <div class="form-group" id="divnik-change-success" >
                          <label for="reg_nik_pasien" id="labelnik-change-success">Nomor NIK</label>
                          <input maxlength="20" onkeypress="return hanyaAngka(event)" class="form-control reset" type="text" name="reg_noktp_pasien" id="reg_nik_pasien" placeholder="Nomor NIK ..." >
                        </div>
                        <div class="form-group">
                          <label>Pekerjaan</label>
                          <input maxlength="50" class="form-control reset" type="text" name="reg_pekerjaan_pasien" id="reg_pekerjaan_pasien" placeholder="Pekerjaan Pasien">
                        </div>
                        <div class="form-group">
                          <label>Nomor Telepon</label>
                          <input maxlength="20" onkeypress="return hanyaAngka(event)" class="form-control reset" type="text" name="reg_notelp_pasien" id="reg_notelp_pasien" placeholder="Nomor Telepon Pasien">
                        </div>
                        <p><i><b>*</b>keterangan: tanda (*) harus diisi</i></p>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Golongan Darah</label>
                          <div>
                              <input type="radio" name="reg_golongandarah_pasien"  value="-" class="flat-red" checked="">- &nbsp

                              <input type="radio" name="reg_golongandarah_pasien"  value="A" class="flat-red">A &nbsp

                              <input type="radio" name="reg_golongandarah_pasien"  value="AB" class="flat-red">AB &nbsp

                              <input type="radio" name="reg_golongandarah_pasien"  value="B" class="flat-red">B &nbsp

                              <input type="radio" name="reg_golongandarah_pasien"  value="O" class="flat-red">O &nbsp
                          </div>
                          </div>
                        <div class="form-group">
                           <label>Tekanan Darah</label>
                          <div>
                              <input type="radio" name="reg_tekanandarah_pasien"  value="Normal" class="flat-red" checked="">Normal &nbsp

                              <input type="radio" name="reg_tekanandarah_pasien"  value="Hipotensi" class="flat-red" >Hipotensi &nbsp

                              <input type="radio" name="reg_tekanandarah_pasien"  value="Hipertensi" class="flat-red" >Hipertensi &nbsp
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Penyakit Jantung</label>
                          <div>
                              <input type="radio" name="reg_pjantung_pasien"  value="Tidak ada" class="flat-red" checked="">Tidak ada &nbsp

                              <input type="radio" name="reg_pjantung_pasien"  value="Ada" class="flat-red" >Ada &nbsp
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Diabetes</label>
                          <div>
                              <input type="radio" name="reg_diabetes_pasien"  value="Tidak ada" class="flat-red" checked="">Tidak ada &nbsp

                              <input type="radio" name="reg_diabetes_pasien"  value="Ada" class="flat-red" >Ada &nbsp
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Hemophilia</label>
                          <div>
                              <input type="radio" name="reg_hemophilia_pasien"  value="Tidak ada" class="flat-red" checked="">Tidak ada &nbsp

                              <input type="radio" name="reg_hemophilia_pasien"  value="Ada" class="flat-red" >Ada &nbsp
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Hepatitis</label>
                          <div>
                              <input type="radio" name="reg_hepatitis_pasien"  value="Tidak ada" class="flat-red" checked="">Tidak ada &nbsp

                              <input type="radio" name="reg_hepatitis_pasien"  value="Ada" class="flat-red" >Ada &nbsp
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Gastritis</label>
                          <div>
                              <input type="radio" name="reg_gastritis_pasien"  value="Tidak ada" class="flat-red" checked="">Tidak ada &nbsp

                              <input type="radio" name="reg_gastritis_pasien"  value="Ada" class="flat-red" >Ada &nbsp
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Penyakit Lainnya</label>
                          <input maxlength="45" class="form-control reset" type="text" name="reg_plain_pasien" id="reg_plain_pasien" placeholder="Apa ada penyakit lain?">
                        </div>
                        <div class="form-group">
                          <label>Alergi Obat</label>
                          <input maxlength="45" class="form-control reset" type="text" name="reg_alergiobat_pasien" id="reg_alergiobat_pasien" placeholder="Alergi Obat apa?">
                        </div>
                        <div class="form-group">
                          <label>Alergi Makanan</label>
                          <input maxlength="45" class="form-control reset" type="text" name="reg_alergimakanan_pasien" id="reg_alergimakanan_pasien" placeholder="Alergi Makanan apa?">
                        </div>
                      </div>
                    
                    <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-4">
                        
                      </div>
                      <div class="col-md-2">
                        
                      </div>
                      
                      <div class="col-md-4"><button id="btn_submit_reg_pasien" type="submit" class="btn btn-block btn-success btn-lg">SIMPAN</button>
                        <!-- <button class="btn btn-danger btn-sm">CLEAR</button> -->
                      </div>
                    </div>
                  </div>
                </form>
                </div>
                <!-- /.box-body -->
              </div>
            </section>
            <!-- /.row -->
          </div>
          <!-- ./box-body -->
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    
      </section>
      