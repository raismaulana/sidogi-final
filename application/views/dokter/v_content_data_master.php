<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Master
        <small>Halaman untuk manajemen data master(obat, perawatan, kodeicd10)</small>
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
        <!-- Box Comment -->
        <div class="box box-pallete-box box-info">
          <div class="box-header with-border">
              <h3 class="box-title" style="color: black;">Form Obat</h3>
            
            <div class="box-tools">
                
            </div>
              <!-- /.box-tools -->
          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="<?php echo base_url('dokter/data_master/insert_obat');?>">
                <label>Nama Obat</label>
                <input type="text" name="nama_obat" class="form-control" placeholder="Nama obat ..." required>
                
              
             
        </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <!-- <div class="box-comment">-->
                <button type="submit" class="form-control btn btn-success pull-right">Tambah</button>
            </form>
            </div> 
        </div>
            <!-- /.box-footer -->
            <!-- /.box-footer -->
      </div>
          <!-- /.box -->
      <div class="col-md-9">
        <!-- Box Comment -->
        <div class="box box-pallete-box box-info">
          <div class="box-header with-border">
              <h3 class="box-title" style="color: black;">Tabel Obat</h3>
            
            <div class="box-tools">
                
            </div>
              <!-- /.box-tools -->
          </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table table-bordered table-stripped" id="tabel-obat">
              <thead>
               <tr>
                 <th>No</th>
                 <th>Nama</th>
               </tr>
              </thead>
              <tbody>
                <?php $no=1;foreach ($data_obat as $key => $value): ?> 
               <tr>
                 <td><?php echo $no++;?></td>
                 <td><?php cetak($value->nama_obat);?></td>
               </tr>
               <?php endforeach ?>
              </tbody>
             </table>
        </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <!-- <div class="box-comment">-->
            </div> 
        </div>
            <!-- /.box-footer -->
            
            <!-- /.box-footer -->
      </div>
          <!-- /.box -->
    </div>
        <!-- /.col -->

    <div class="row">
        <div class="col-md-3">
        <!-- Box Comment -->
        <div class="box box-pallete-box box-info">
          <div class="box-header with-border">
              <h3 class="box-title" style="color: black;">Form Perawatan</h3>
            
            <div class="box-tools">
                
            </div>
              <!-- /.box-tools -->
          </div>
            <!-- /.box-header -->
            <div class="box-body">
             <form method="post" action="<?php echo base_url('dokter/data_master/insert_perawatan');?>">
                <label>Nama Perawatan</label>
                <input type="text" name="nama_perawatan" class="form-control" placeholder="Nama Perawatan ..." required>   
        </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <!-- <div class="box-comment">-->
                <button type="submit" class="form-control btn btn-success pull-right">Tambah</button>
            </form>
            </div> 
        </div>
            <!-- /.box-footer -->
            
            <!-- /.box-footer -->
      </div>
          <!-- /.box -->
      <div class="col-md-9">
        <!-- Box Comment -->
        <div class="box box-pallete-box box-info">
          <div class="box-header with-border">
              <h3 class="box-title" style="color: black;">Tabel Perawatan</h3>
            
            <div class="box-tools">
                
            </div>
              <!-- /.box-tools -->
          </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table table-bordered table-stripped" id="tabel-perawatan">
              <thead>
                <tr>
                 <th>No</th>
                 <th>Nama</th>
               </tr>
              </thead>
               <tbody>
               <?php $i=1;foreach ($data_perawatan as $key => $value): ?>
               <tr>
                 <td><?php echo $i++;?></td>
                 <td><?php cetak($value->nama_perawatan);?></td>
               </tr>
               <?php endforeach ?>
               </tbody>
             </table>
        </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <!-- <div class="box-comment">-->
            </div> 
        </div>
            <!-- /.box-footer -->
            
            <!-- /.box-footer -->
      </div>
          <!-- /.box -->
    </div>
        <!-- /.col -->

        <div class="row">
        <div class="col-md-3">
        <!-- Box Comment -->
        <div class="box box-pallete-box box-info">
          <div class="box-header with-border">
              <h3 class="box-title" style="color: black;">Form Kode.ICD.10</h3>
            
            <div class="box-tools">
                
            </div>
              <!-- /.box-tools -->
          </div>
            <!-- /.box-header -->
            <div class="box-body">
             <form method="post" action="<?php echo base_url('dokter/data_master/insert_kodeicd10');?>">
                <label>Kode.ICD.10</label>
                <input type="text" name="nama_kodeicd10" class="form-control" placeholder="Kode.ICD.10 ..." required> 
                <label>Diagnosis</label> 
                <input type="text" name="diagnosis_kodeicd10" class="form-control" placeholder="Diagnosis ..." required>  
        </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <!-- <div class="box-comment">-->
                <button type="submit" class="form-control btn btn-success pull-right">Tambah</button>
            </form>
            </div> 
        </div>
            <!-- /.box-footer -->
            
            <!-- /.box-footer -->
      </div>
          <!-- /.box -->
      <div class="col-md-9">
        <!-- Box Comment -->
        <div class="box box-pallete-box box-info">
          <div class="box-header with-border">
              <h3 class="box-title" style="color: black;">Tabel Kode.ICD.10</h3>
            
            <div class="box-tools">
                
            </div>
              <!-- /.box-tools -->
          </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table table-bordered table-stripped" id="tabel-kodeicd10">
              <thead>
               <tr>
                 <th>No</th>
                 <th>Kode</th>
                 <th>Diagnosis</th>
               </tr>
              </thead>
              <tbody>
               <?php $num=1;foreach ($data_kodeicd10 as $key => $value): ?>
               <tr>
                 <td><?php echo $num++;?></td>
                 <td><?php cetak($value->nama_kodeicd10);?></td>
                 <td><?php cetak($value->diagnosis_kodeicd10);?></td>
               </tr>
               <?php endforeach ?>
              </tbody>
             </table>
        </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <!-- <div class="box-comment">-->
            </div> 
        </div>
            <!-- /.box-footer -->
            
            <!-- /.box-footer -->
      </div>
          <!-- /.box -->
    </div>
        <!-- /.col -->

    </section>

