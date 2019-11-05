<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DASHBOARD
        <small>halaman untuk administrasi pasien dan antrian</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('petugas/home');?>"><i class="fa fa-dashboard"></i> <?php echo $judul;?></a></li>
        <li><a href="<?php echo base_url('petugas/home');?>"><?php echo $sub_judul;?></a></li>
        <li class="active"><?php echo $anak_judul;?></li>
      </ol>
    
    <br>
    <div class="row">
      <div class="col-md-4">
        <?php
          $info=$this->session->flashdata('info');
          if(!empty($info))
            {
              echo '<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Info!</h4>
                '.$info.'
              </div>';
            }
        ?>
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <section class="content-header">    
              <h1>Form Antrian Pasien Baru</h1>
            </section>
            <section class="content">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                  <form class="form" id="form_input_antrian" role="form">
                    <div class="form-group">
                      <label for="#id"> Id : </label>
                      <input list="list_pasien" class="form-control reset" name="kode" id="id" placeholder="Ketik id pasien atau nama pasien" autocomplete="off" oninput="showPasien(this.value)" required="">
                      <datalist id="list_pasien">
                      </datalist>
                    </div>
                    <div class="form-group">
                      <label for="#nama"> Nama : </label><input class="form-control reset" type="text" name="nama" id="nama" readonly="readonly" placeholder="isi id pasien di atas" autocomplete="off" required="">
                    </div>
                    <input type="hidden" name="id" id="pktbpasien" autocomplete="off">
                    <div class="form-group">
                      <button type="button" id="submit_antrian" class="btn btn-primary pull-right" onclick="addAntrian()">Simpan</button>
                    </div>
                  </form>
                </div>
                <!-- /.box-body -->
              </div>
            </section>
            <!-- /.row -->
          </div>
          <!-- ./box-body -->
          <a class="btn btn-warning btn-block" href="<?php echo base_url('petugas/home/registrasi_pasien_baru');?>">DAFTAR</a>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->

      </div>
      <!-- /.col -->
    
      <div class="col-md-8">
        <!-- Box Comment -->
        <div class="box box-solid box-default">
          <div class="box-header with-border">
              <h3>Antrian Pasien</h3>
            
            <div class="box-tools">
            <!--  <button type="button" class="btn btn-box-tool"><b><?php// foreach($jumlah->result() as $t){
          //echo 'Jumlah Antrian : '.$t->id;
         // }?></b></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                
            </div>
              <!-- /.box-tools -->
          </div>
            <!-- /.box-header -->
            <div class="box-body">
          <table id="tabel_antrian" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
              $num=1;
              foreach($data_antri as $hu){?>
              <tr>
                <td><?php echo $num++;?></td>
                <td><?php cetak($hu['nama_pasien']);?></td>
                <td><?php cetak($hu['gender_pasien']);?></td>
                <td><button class="btn btn-danger btn-xs btn-batal-antri" onclick="hapusAntrian(<?php cetak($hu['id_rekammedis']); ?>)">Batal</button></td>
              </tr>
              <?php }?>
            </tbody>
          </table>          
        </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <!-- <div class="box-comment">
              <table id="example2" class="table table-bordered table-striped">
              <thead>
  <tr>
    <td>No</td>
    <td>Nama</td>
    <td>#</td>
  </tr> 
  </thead>
  <tbody>
  <?php// if($data_antri->num_rows()>0){
    //$num=1;
    //foreach($data_antri->result() as $hu){?>
  <tr>
    <td><?php// echo $num++;?></td>
    <td><?php //$car=$this->db->query('select * from tb_pasien where id_pasien="'.$hu->id_pasien.'"');
  //foreach($car->result() as $hi){
    
    //echo $hi->nama_pasien;
    //}
  
  ?></td>
    <td><a href="<?php //echo base_url()?>home_petugas/lihat/<?php //echo $hu->id_rkmd?>"><span class="fa fa-money btn btn-primary">  Bayar</span></a></td>
  </tr>
  <?php //} }?>
  </tbody>
</table>

              
              
             -->
            </div> 
        </div>
            <!-- /.box-footer -->
            
            <!-- /.box-footer -->
      </div>
          <!-- /.box -->
    </div>
        <!-- /.col -->
        
         
       
       
       
       
       
       
 <!--       
       
       <div class="row">
        <div class="col-md-12">
          <div class="box"> -->
            
            <!-- /.box-header -->
            <!-- <div class="box-body"> -->
             
             
             <?php //$this->load->view($pasien_hari);?>
             
             
              <!-- /.row -->
            <!-- </div> -->
            <!-- ./box-body -->
            
            <!-- /.box-footer -->
          <!-- </div> -->
          <!-- /.box -->
        <!-- </div> -->
        <!-- /.col -->
      <!-- </div> -->
      </section>
      