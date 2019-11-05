<div class="row">
  <a id="btn_edit_dmedik" class="btn btn-primary pull-right"><i class="fa fa-edit"></i> Edit</a>
                      <a id="btn_close_dmedik" class="btn btn-danger pull-right" style="display: none;"><i class="fa fa-close"></i> Cancel</a>

</div>
<div class="row">
                      <div class="col-md-6">
                        <form autocomplete="off" method="post" action="<?= base_url('dokter/home/edit_dmedik');?>">
                        <?php foreach ($data as $row) {?>  
                        <div class="form-group">
                          <label>ID Rekam Medis*</label>
                          <input readonly class="form-control reset" type="text" name="reg_kode_pasien" id="reg_kode_pasien" value="<?php cetak($row['koderekammedis_pasien']);?>" required>
                        </div>
                        <div class="form-group">
                          <label>Nama Pasien*</label>
                          <input readonly class="form-control reset dm-inpt dm-inpt" type="text" name="reg_nama_pasien" id="reg_nama_pasien" value="<?php cetak($row['nama_pasien']);?>" required>
                        </div>
                        <div class="form-group">
                          <label>Tempat Lahir*</label>
                          <input readonly list="list_kota" autocomplete="off" type="text" name="reg_tempatlahir_pasien" class="form-control reset dm-inpt dm-inpt" id="reg_tempatlahir_pasien" value="<?php cetak($row['tempatlahir_pasien']);?>" required>
                          <datalist id="list_kota"><?php foreach ($data_kota as $row): ?>
                          <option value="<?php cetak($row); ?>">
                            <?php cetak($row);?>    
                          </option>
                        <?php endforeach; ?>
                          </datalist>
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir*</label>
                          <input readonly class="form-control reset dm-inpt" type="text" name="reg_tanggallahir_pasien" id="reg_tanggallahir_pasien" value="<?php cetak(date("d-m-Y", strtotime($row['tanggallahir_pasien'])));?>" required>
                        </div>
                        <div class="form-group">
                          <label>Alamat Rumah*</label>
                          <input readonly class="form-control reset dm-inpt" type="text" name="reg_alamat_pasien" id="reg_alamat_pasien" placeholder="Alamat Rumah Pasien" value="<?php cetak($row['alamat_pasien']);?>" required>
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin*</label>
                          <select disabled class="form-control reset dm-select" type="text" name="reg_gender_pasien" id="reg_gender_pasien" placeholder="Jenis Kelamin ..." required>
                            <option id value="Laki-laki" <?php if($row['gender_pasien']=='Laki-laki'){echo 'selected';}?>>Laki-laki</option>
                            <option value="Perempuan" <?php if($row['gender_pasien']=='Perempuan'){echo 'selected';}?>>Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Nomor NIK</label>
                          <input readonly onkeypress="return hanyaAngka(event)" class="form-control reset dm-inpt" type="text" name="reg_noktp_pasien" id="reg_nik_pasien" placeholder="Nomor NIK ..." value="<?php cetak($row['nik_pasien']);?>" >
                        </div>
                        <div class="form-group">
                          <label>Pekerjaan</label>
                          <input readonly class="form-control reset dm-inpt" type="text" name="reg_pekerjaan_pasien" id="reg_pekerjaan_pasien" placeholder="Pekerjaan Pasien" value="<?php cetak($row['pekerjaan_pasien']);?>" >
                        </div>
                        <div class="form-group">
                          <label>Nomor Telepon</label>
                          <input readonly onkeypress="return hanyaAngka(event)" class="form-control reset dm-inpt" type="text" name="reg_notelp_pasien" id="reg_notelp_pasien" placeholder="Nomor Telepon Pasien" value="<?php cetak($row['notelp_pasien']);?>" >
                        </div>
                        <p><i><b>*</b>keterangan: tanda (*) harus diisi</i></p>
                        <div class="form-group">
                          <input type="hidden" readonly class="form-control reset" type="text" name="reg_id_pasien" id="reg_id_pasien" value="<?php cetak($row['id_pasien']);?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Golongan Darah</label>
                          <select disabled data-placeholder="Pilih Golongan Darah" class="form-control reset dm-select" name="reg_golongandarah_pasien" id="reg_golongandarah_pasien">
                            <option value="-" <?php if($row['golongandarah_pasien']=='-'){echo 'selected';}?>>-</option>
                            <option value="A" <?php if($row['golongandarah_pasien']=='A'){echo 'selected';}?>>A</option>
                            <option value="AB" <?php if($row['golongandarah_pasien']=='AB'){echo 'selected';}?>>AB</option>
                            <option value="B" <?php if($row['golongandarah_pasien']=='B'){echo 'selected';}?>>B</option>
                            <option value="O" <?php if($row['golongandarah_pasien']=='O'){echo 'selected';}?>>O</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Tekanan Darah</label>
                          <select disabled class="form-control reset dm-select" name="reg_tekanandarah_pasien" id="reg_tekanandarah_pasien">
                            <option value="Normal" <?php if($row['tekanandarah_pasien']=='Normal'){echo 'selected';}?>>Normal</option>
                            <option value="Hipotensi" <?php if($row['tekanandarah_pasien']=='Hipotensi'){echo 'selected';}?>>Hipotensi</option>
                            <option value="Hipertensi" <?php if($row['tekanandarah_pasien']=='Hipertensi'){echo 'selected';}?>>Hipertensi</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Penyakit Jantung</label>
                          <select disabled class="form-control reset dm-select" name="reg_pjantung_pasien" id="reg_pjantung_pasien" >
                            <option value="Tidak Ada" <?php if($row['penyakitjantung_pasien']=='Tidak Ada'){echo 'selected';}?>>Tidak ada</option>
                            <option value="Ada" <?php if($row['penyakitjantung_pasien']=='Ada'){echo 'selected';}?>>Ada</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Diabetes</label>
                          <select disabled class="form-control reset dm-select" name="reg_diabetes_pasien" id="reg_diabetes_pasien">
                            <option value="Tidak Ada" <?php if($row['diabetes_pasien']=='Tidak Ada'){echo 'selected';}?>>Tidak ada</option>
                            <option value="Ada" <?php if($row['diabetes_pasien']=='Ada'){echo 'selected';}?>>Ada</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Hemophilia</label>
                          <select disabled class="form-control reset dm-select" name="reg_hemophilia_pasien" id="reg_hemophilia_pasien">
                            <option value="Tidak Ada" <?php if($row['hemophilia_pasien']=='Tidak Ada'){echo 'selected';}?>>Tidak ada</option>
                            <option value="Ada" <?php if($row['hemophilia_pasien']=='Ada'){echo 'selected';}?>>Ada</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Hepatitis</label>
                          <select disabled class="form-control reset dm-select" name="reg_hepatitis_pasien" id="reg_hepatitis_pasien" >
                            <option value="Tidak Ada" <?php if($row['hepatitis_pasien']=='Tidak Ada'){echo 'selected';}?>>Tidak ada</option>
                            <option value="Ada" <?php if($row['hepatitis_pasien']=='Ada'){echo 'selected';}?>>Ada</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Gastritis</label>
                          <select disabled class="form-control reset dm-select" name="reg_gastritis_pasien" id="reg_gastritis_pasien" >
                            <option value="Tidak ada" <?php if($row['gastritis_pasien']=='Tidak Ada'){echo 'selected';}?>>Tidak ada</option>
                            <option value="Ada" <?php if($row['gastritis_pasien']=='Ada'){echo 'selected';}?>>Ada</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Penyakit Lainnya</label>
                          <input readonly class="form-control reset dm-inpt" type="text" name="reg_plain_pasien" id="reg_plain_pasien" value="<?php cetak($row['penyakitlain_pasien']);?>">
                        </div>
                        <div class="form-group">
                          <label>Alergi Obat</label>
                          <input readonly class="form-control reset dm-inpt" type="text" name="reg_alergiobat_pasien" id="reg_alergiobat_pasien" value="<?php cetak($row['alergiobat_pasien']);?>">
                        </div>
                        <div class="form-group">
                          <label>Alergi Makanan</label>
                          <input readonly class="form-control reset dm-inpt" type="text" name="reg_alergimakanan_pasien" id="reg_alergimakanan_pasien" value="<?php cetak($row['alergimakanan_pasien']);?>" >
                        </div>
                        <div class="form-group">
                          <label>Tanggal Daftar</label>
                          <input readonly class="form-control reset" type="text" name="reg_tanggaldaftar_pasien" id="reg_tanggaldaftar_pasien" value="<?php cetak($row['tanggaldaftar_pasien']);?>" readonly>
                        </div>
                        
                      </div>
                      <?php }; ?>
                    </div>
                    <div class="row">
                      <button type="submit" id="btn_simpan_dmedik" class="btn btn-success pull-right" style="display: none;"><i class="fa fa-save"></i> Simpan</button>
                    </div>
