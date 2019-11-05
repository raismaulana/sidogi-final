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
              <div class="pull-right"></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="<?php echo base_url('dokter/user/edit_data_user');?>" method="post">
                  <?php foreach ($data_user as $row) { ?>
                <div class="form-group">
                  <label for="password_user_reg">ID USER*</label>
                  <input type="text" class="form-control" name="id_user_reg" value="<?php cetak($row['id_user']); ?>" required readonly>
                </div>
                <div class="form-group" id="divusername">
                    <label for="username_user_reg" id="label_username">Username*</label>
                  <input type="text" class="form-control" name="username_user_reg" id="username_user_reg" value="<?php cetak($row['username']); ?>" required>
                </div>
                <div class="form-group">
                  <label for="password_user_reg">Password*</label>
                  <input type="text" class="form-control" name="password_user_reg" value="<?php cetak($row['password']); ?>" required>
                </div>
                <div class="form-group">
                  <label for="hakakses_user_reg">Hak Akses*</label>
                  <select type="text" class="form-control" name="hakakses_user_reg" required>
                    <option value="dokter" <?php if($row['hakakses'] == "dokter"){echo 'selected';} ?>>dokter</option>
                    <option value="petugas" <?php if($row['hakakses'] == "petugas"){echo 'selected';} ?>>petugas</option>
                    <option value="non-aktif" <?php if($row['hakakses'] == "non-aktif"){ echo 'selected';}?>>non-aktif</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="id_petugas_reg">Pekerja*</label>
                  <input readonly type="text" class="form-control" name="id_petugas_reg" value="<?php cetak($row['id_petugas']); ?>" placeholder="Petugas"> <input readonly type="text" class="form-control" name="nama_petugas_reg" value="<?php cetak($row['nama_petugas']); ?>" placeholder="Petugas">
                </div>
                <?php } ?>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary ">Update</button>
            </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>