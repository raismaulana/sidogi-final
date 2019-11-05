 <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
      
        <div class="pull-left image">
     <img src="<?php echo base_url()?>assets/images/<?php cetak($this->session->userdata('foto'));?>" class="img-circle" alt="User Image">
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
        <li class="treeview <?php if($this->uri->segment(2)=="home"){echo ' active';}?>">
          <a href="<?php echo base_url()?>dokter/home">
            <i class="fa fa-dashboard"></i> <span>Home</span> 
          </a>
          <li class="treeview <?php if($this->uri->segment(2)=="pekerja"){echo ' active';}?>">
          <a href="<?php echo base_url()?>dokter/pekerja">
            <i class="fa fa-users"></i> <span>Pekerja</span> 
          </a>
          </li>
        
        <li class="treeview <?php if($this->uri->segment(2)=="user"){echo ' active';}?>">
          <a href="<?php echo base_url()?>dokter/user">
            <i class="glyphicon glyphicon-user"></i> <span>User</span> 
          </a>
        </li>
        <li class="header">LAPORAN</li>
        <li class="treeview <?php if($this->uri->segment(2)=="laporan"){echo ' active';}?>">
          <a href="<?php echo base_url()?>dokter/laporan">
            <i class="fa fa-file-text-o"></i> <span>Laporan</span> 
          </a>
        </li>
        <li class="header">Data Master</li>
        <li class="treeview <?php if($this->uri->segment(2)=="data_master"){echo ' active';}?>">
          <a href="<?php echo base_url()?>dokter/data_master">
            <i class="fa fa-file-text-o"></i> <span>Data Master</span> 
          </a>
        </li>        
      </ul>
    </section>
    <!-- /.sidebar -->