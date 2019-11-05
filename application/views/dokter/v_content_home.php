<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Halaman untuk melihat antrian periksa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dokter/home');?>"><i class="fa fa-dashboard"></i> <?php echo $judul;?></a></li>
        <li><a href="<?php echo base_url('dokter/home')?>"><?php echo $sub_judul;?></a></li>
        <li class="active"><?php echo $anak_judul;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- /.box -->

          <div class="row">
      <div class="col-md-12">
        <!-- Box Comment -->
        <div class="box box-solid box-default">
          <div class="box-header with-border">
              <h3 >Antrian Pasien</h3>
            
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
                <th>Status</th>
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
                <td><?php if($hu['status_pasien'] == "0"){
                  echo '<span class="badge bg-yellow">Baru</span>';
                } else {
                  echo '<span class="badge bg-blue">Lama</span>';
                }?></td>
                <td><a class="btn btn-success btn-xs" href="<?php echo base_url('dokter/home/periksa_pasien/'.$hu['id_pasien'].'');?>"><i class="fa fa-edit"></i>NEXT</a></td>
              </tr>
            <?php } ?>
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

    </section>