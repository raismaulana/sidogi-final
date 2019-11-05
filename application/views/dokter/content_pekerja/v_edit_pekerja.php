<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      <small>Halaman untuk manajemen data pekerja</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dokter/home');?>"><i class="fa fa-dashboard"></i> <?php echo $judul;?></a></li>
        <li><a href="<?php echo base_url('dokter/pekerja')?>"><?php echo $sub_judul;?></a></li>
        <li class="active"><?php echo $anak_judul;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid box-info">
            <div class="box-header with-border">
              <h3 class="box-title" style="color: black;">Data Pekerja</h3>
              <div class="pull-right"></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php echo base_url('dokter/pekerja/insert_edit_petugas');?>" method="post">
                <?php foreach ($data_pekerja as $row) { ?>
                <div class="form-group">
                  <label for="id_petugas_reg">ID*</label>
                  <input readonly type="text" class="form-control" name="id_petugas_reg" value="<?php cetak($row['id_petugas']);?>" required>
                </div>
                <div class="form-group">
                  <label for="nama_petugas_reg">Nama*</label>
                  <input type="text" class="form-control" name="nama_petugas_reg" value="<?php cetak($row['nama_petugas']);?>" required>
                </div>
                <div class="form-group">
                  <label for="tanggallahir_petugas_reg">Tanggal Lahir*</label>
                  <input type="text" class="form-control" name="tanggallahir_petugas_reg" id="tanggallahir_petugas_reg" value="<?php cetak($row['tanggallahir_petugas']);?>" required>
                </div>
                <div class="form-group">
                  <label for="alamat_petugas_reg">Alamat*</label>
                  <input type="text" class="form-control" name="alamat_petugas_reg" value="<?php cetak($row['alamat_petugas']);?>" required>
                </div>
                <div class="form-group">
                  <label for="gender_petugas_reg">Jenis Kelamin*</label>
                  <select type="text" class="form-control" name="gender_petugas_reg" placeholder="Jenis Kelamin" required>
                    <option value="Laki-laki" <?php if($row['gender_petugas'] == 'Laki-laki'){echo 'selected';} ?> >Laki-laki</option>
                    <option value="Perempuan" <?php if($row['gender_petugas'] == 'Perempuan'){echo 'selected';} ?>>Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="notelp_petugas_reg">No. Telepon*</label>
                  <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" name="notelp_petugas_reg" id="notelp_petugas_reg" value="<?php cetak($row['notelp_petugas']);?>">
                </div>
                <div class="form-group">
                  <label for="jabatan_petugas_reg">Jabatan*</label>
                  <select type="text" class="form-control" name="jabatan_petugas_reg" placeholder="Jabatan" required>
                    <option value="Dokter" <?php if($row['jabatan_petugas'] == "Dokter"){ echo 'selected';}?>>Dokter</option>
                    <option value="Asisten Dokter" <?php if($row['jabatan_petugas'] == "Asisten Dokter"){ echo 'selected';}?> >Asisten Dokter</option>
                    <option value="Petugas Administrasi" <?php if($row['jabatan_petugas'] == "Petugas Administrasi"){ echo 'selected';}?>>Petugas Administrasi</option>
                  </select>
                </div>
                <label for="jabatan_petugas_reg">Status*</label>
                  <select type="text" class="form-control" name="status_petugas_reg" required>
                    <option value="1" <?php if($row['status_petugas'] == "1"){ echo 'selected';}?>>Aktif</option>
                    <option value="0" <?php if($row['status_petugas'] == "0"){echo 'selected';}?>>Tidak Aktif</option>
                  </select>
                </div>
              
              <?php } ?>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary ">Simpan</button>
            </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>