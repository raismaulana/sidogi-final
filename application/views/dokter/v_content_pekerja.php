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
              <div class="pull-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_registrasi_petugas"><span class="fa fa-plus"></span>TAMBAH</button></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="tabel_pekerja" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>No. Telepon</th>
                  <th>Jabatan</th>
                  <th>Tanggal Daftar</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $num=1;
                  foreach ($data_pekerja as $row) { ?>
                <tr>
                  <td><?php echo $num++; ?></td>
                  <td><?php cetak($row['nama_petugas']);?></td>
                  <td><?php cetak(date("Y-m-d", strtotime($row['tanggallahir_petugas'])));?></td>
                  <td><?php cetak($row['alamat_petugas']);?></td>
                  <td><?php cetak($row['gender_petugas']);?></td>
                  <td><?php cetak($row['notelp_petugas']);?></td>
                  <td><?php cetak($row['jabatan_petugas']);?></td>
                  <td><?php cetak($row['tanggaldaftar_petugas']);?></td>
                  <td><?php if($row['status_petugas'] == 1){
                    echo '<span class="badge bg-green">Aktif</span>';
                  }else {
                    echo '<span class="badge bg-red">Tidak Aktif</span>';
                  }?></td>
                  <td><a type="button" class="btn btn-success" href="<?php echo base_url("dokter/pekerja/edit_pekerja/".$row['id_petugas']."");?>" ><i class="fa fa-edit"></i> Edit</a>&nbsp<button class="btn btn-danger btn-xs" onclick="hapusPekerja(<?php cetak($row['id_petugas']); ?>)"><i class="fa fa-close"></i></button></td>
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

      <div id="modal_registrasi_petugas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_reg_petugas">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-tittle" id="modal_reg_petugas">Registrasi Petugas Baru</h4>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('dokter/pekerja/insert_petugas_baru');?>" method="post">
                <div class="form-group">
                  <label for="nama_petugas_reg">Nama*</label>
                  <input type="text" class="form-control" name="nama_petugas_reg" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <label for="tanggallahir_petugas_reg">Tanggal Lahir*</label>
                  <input data-inputmask="'alias': 'dd/mm/yyyy'" type="text" class="form-control" name="tanggallahir_petugas_reg" id="tanggallahir_petugas_reg" placeholder="Tanggal Lahir" required>
                </div>
                <div class="form-group">
                  <label for="alamat_petugas_reg">Alamat*</label>
                  <input type="text" class="form-control" name="alamat_petugas_reg" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                  <label for="gender_petugas_reg">Jenis Kelamin*</label>
                  <select type="text" class="form-control" name="gender_petugas_reg" placeholder="Jenis Kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="notelp_petugas_reg">No. Telepon*</label>
                  <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" name="notelp_petugas_reg" id="notelp_petugas_reg" placeholder="No. Telepon" required>
                </div>
                <div class="form-group">
                  <label for="jabatan_petugas_reg">Jabatan*</label>
                  <select type="text" class="form-control" name="jabatan_petugas_reg" placeholder="Jabatan" required>
                    <option value="Dokter">Dokter</option>
                    <option value="Asisten Dokter">Asisten Dokter</option>
                    <option value="Petugas Administrasi">Petugas Administrasi</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="tanggallahir_petugas_reg">Tanggal Daftar</label>
                  <input data-inputmask="'alias': 'dd/mm/yyyy'" type="text" class="form-control" name="tanggaldaftar_petugas_reg" id="tanggaldaftar_petugas_reg" placeholder="Tanggal Lahir" >
                </div>
              <input type="hidden" name="status_petugas_reg" value="1">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary ">Simpan</button>
            </form>
          </div>
        </div>
      </div>




    </section>