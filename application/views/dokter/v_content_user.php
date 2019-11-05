<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Halaman untuk manajemen data pengguna aplikasi (<i>users</i>)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dokter/home');?>"><i class="fa fa-dashboard"></i> <?php echo $judul;?></a></li>
        <li><a href="<?php echo base_url('dokter/user')?>"><?php echo $sub_judul;?></a></li>
        <li class="active"><?php echo $anak_judul;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid box-info">
            <div class="box-header with-border">
              <h3 class="box-title" style="color: black;">Data User</h3>
              <div class="pull-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_registrasi_user"><span class="fa fa-plus"></span>TAMBAH</button></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="tabel_pekerja" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Hak Akses</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $num=1;
                  foreach ($data_user as $row) { ?>
                <tr>
                  <td><?php echo $num++; ?></td>
                  <td><?php cetak($row['nama_petugas']);?></td>
                  <td><?php cetak($row['username']);?></td>
                  <td><?php cetak($row['password']);?></td>
                  <td><?php if($row['hakakses'] == 'non-aktif'){echo '<span class="badge bg-red">'.$row['hakakses'].'</span>';}else{cetak($row['hakakses']);} ?></td>
                  <td><a type="button" class="btn btn-success" href="<?php echo base_url("dokter/user/edit_user/".$row['id_user']."");?>" ><i class="fa fa-edit"></i> Edit</a>&nbsp<button class="btn btn-danger btn-xs" onclick="hapusUser(<?php cetak($row['id_user']); ?>)"><i class="fa fa-close"></i></button></td>
                  
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

      <div id="modal_registrasi_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_reg_user">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-tittle" id="modal_reg_user">Registrasi User Baru</h4>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('dokter/user/insert_user_baru');?>" method="post">
                <div class="form-group" id="divusername">
                    <label for="username_user_reg" id="label_username">Username*</label>
                  <input type="text" class="form-control" name="username_user_reg" id="username_user_reg" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <label for="password_user_reg">Password*</label>
                  <input type="text" class="form-control" name="password_user_reg" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <label for="hakakses_user_reg">Hak Akses*</label>
                  <select type="text" class="form-control" name="hakakses_user_reg" placeholder="Hak Akses" required>
                    <option value="dokter">dokter</option>
                    <option value="petugas">petugas</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="id_petugas_reg">Pekerja*</label>
                  <select type="text" class="form-control" name="id_petugas_reg" placeholder="Petugas">
                    <?php foreach($data_pekerja as $row):?>
                      <option value="<?php cetak($row['id_petugas']); ?>"><?php cetak($row['nama_petugas']); ?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary ">Simpan</button>
            </form>
          </div>
        </div>
      </div>

    </section>