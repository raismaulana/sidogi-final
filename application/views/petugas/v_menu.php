 <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/images/<?php echo $this->session->userdata('foto');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php cetak($this->session->userdata('nama_petugas'));?></p>
           <span class="description"><?php if(function_exists ('date_default_timezone_set'))
        date_default_timezone_set('Asia/Jakarta');
$d = date("l");
 
        if ($d=='Monday'){
            echo '&nbsp; Senin &nbsp;';
        }elseif($d=='Tuesday'){
            echo 'Selasa  &nbsp;';
        }elseif($d=='Wednesday'){
            echo 'Rabu  &nbsp;';
        }elseif($d=='Thursday'){
            echo 'Kamis  &nbsp;';
        }elseif($d=='Friday'){
            echo 'Jumat &nbsp;';
        }elseif($d=='Saturday'){
            echo 'Sabtu  &nbsp;';
        }elseif($d=='Sunday'){
            echo 'Minggu  &nbsp;';
        }else{
            echo 'ERROR!';
        }
echo  date('d-m-Y');
        ?></span>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU <?php cetak(strtoupper($this->session->userdata('level')));?></li>
        <li class="treeview <?php if($this->uri->segment(2)=="home"){echo ' active';}?>"">
          <a href="<?php echo base_url()?>petugas/home">
            <i class="fa fa-dashboard"></i> <span>Home</span> 
          </a>
        <li class="treeview <?php if($this->uri->segment(2)=="data_pasien"){echo ' active';}?>"">
          <a href="<?php echo base_url()?>petugas/data_pasien">
            <i class="fa fa-wheelchair"></i> <span>Data Pasien</span> 
          </a>
          
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->