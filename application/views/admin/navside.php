 <!-- Main Header -->
 <header class="main-header" style="background-color: #696969;">

   <!-- Logo -->
   <a href="<?php echo base_url('home') ?>" class="logo" style="background-color: #696969;">
     <!-- mini logo for sidebar mini 50x50 pixels -->
     <span class="logo-mini"><img src="<?php echo base_url('assets/images/FU.png'); ?>" width="40px" height="40px" alt="Fhizyel University"></span>
     <!-- logo for regular state and mobile devices -->
     <span class="logo-lg"><b><?php echo $site_title; ?></b></span>
   </a>

   <!-- Header Navbar -->
   <nav class="navbar navbar-dark navbar-static-top" style="background-color: #37403a">
     <!-- Sidebar toggle button-->
     <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background-color: #37403a;">
       <span class="sr-only">Toggle navigation</span>
     </a>
     <!-- Navbar Right Menu -->
     <div class="navbar-custom-menu">
       <ul class="nav navbar-nav">
         <!-- Messages: style can be found in dropdown.less-->
         <!-- /.messages-menu -->
         <!-- Tasks Menu -->
         <!-- User Account Menu -->
         <li class="dropdown user user-menu">
           <!-- Menu Toggle Button -->
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <!-- The user image in the navbar-->
             <!--<img src="<?php //echo base_url('assets/images/'.$site_logo);
                            ?>" width="160px" height="160px" class="user-image" alt="User Image">-->
             <!-- hidden-xs hides the username on small devices so only the image appears. -->
             <span class="hidden-xs">Apa kabar <?= $this->session->userdata('logged_in')['fullname'] ?>?</span>
           </a>
           <ul class="dropdown-menu">
             <!-- The user image in the menu -->
             <li class="user-header2 text-center">
               <img src="<?php echo base_url('assets/images/' . $site_logo); ?>" width="160px" height="160px" class="img-circle" alt="User Image">

               <p>
                 <?= $this->session->userdata('logged_in')['fullname'] ?>
               </p>
             </li>
             <!-- Menu Footer-->
             <li class="user-footer">
               <div class="pull-left">
                 <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#modal_password"><i class="fa fa-gear"></i> Atur Ulang Sandi</a>
               </div>
               <div class="pull-right">
                 <a href="<?php echo base_url('administrator/login/logout') ?>" class="btn btn-danger btn-flat"><i class="fa fa-fw fa-sign-out"></i> Keluar</a>
               </div>
             </li>
           </ul>
         </li>
       </ul>
     </div>
   </nav>
 </header>
 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar" style="background-color: #696969;">

   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">

     <!-- Sidebar untuk user panel -->
     <div class="user-panel" style="height:60px">
       <div class="pull-left image">
         <img src="<?php echo base_url('assets/images/' . $site_logo); ?>" width="160px" height="160px" class="img-circle" alt="User Image">
       </div>
       <div class="pull-left info">
         <p><?= $this->session->userdata('logged_in')['fullname'] ?></p>
         <!-- Status -->
         <a><i class="fa fa-circle text-success"></i> Logged In</a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <ul class="sidebar-menu" data-widget="tree">
       <li class="header" style="background-color: #696969; color: white;">Menu Utama</li>
       <!-- Opsional, add icon pada font awesome -->
       <li><a href="<?php echo base_url('administrator/main') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
       <li><a href="<?php echo base_url('administrator/verifikasi') ?>"><i class="fa fa-check"></i> <span>Verifikasi Data</span></a></li>
       <li><a href="<?php echo base_url('administrator/pendaftaran') ?>"><i class="fa fa-user-plus"></i> <span>Nama Pendaftar</span></a></li>
       <li><a href="<?php echo base_url('administrator/thak') ?>"><i class="fa fa-calendar-check-o"></i> <span>Tahun Akademik</span></a></li>
       <li><a href="<?php echo base_url('administrator/tes') ?>"><i class="fa fa-calendar-o"></i> <span>Jadwal Tes</span></a></li>
       <li><a href="<?php echo base_url('administrator/kelulusan') ?>"><i class="fa fa-file-o"></i> <span>Mahasiswa Diterima</span></a></li>
       <li><a href="<?php echo base_url('administrator/pengaturan') ?>"><i class="fa fa-cog" aria-hidden="true"></i> <span>Pengaturan Umum</span></a></li>
       <li><a href="<?php echo base_url('administrator/pengaturan/slideshow') ?>"><i class="fa fa-slideshare" aria-hidden="true"></i> <span>Setting Slideshow</span></a></li>
       <li class="treeview">
         <a href="javascript:void(0)"><i class="fa fa-link"></i> <span>Pengaturan Prodi</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="<?php echo base_url('administrator/jenjang') ?>"><i class="fa fa-graduation-cap"></i> <span>Jenjang</span></a></li>
           <li><a href="<?php echo base_url('administrator/prodi') ?>"><i class="fa fa-flag"></i> <span>Prodi</span></a></li>
         </ul>
       </li>
     </ul>
     <!-- /.sidebar-menu -->
   </section>
   <!-- /.sidebar -->
 </aside>
 <!-- modal untuk ubah password -->
 <div class="modal fade" id="modal_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">Ubah Password</h4>
       </div>
       <div class="modal-body">
         <?= form_open('administrator/login/change_password', array('data-toggle' => 'validator', 'role' => 'form')); ?>
         <!-- <form action="#" method="POST" data-toggle="validator" role="form"> -->
         <div class="form-group">
           <label for="inputName" class="control-label">Username</label>
           <input type="text" class="form-control" data-minlength="5" maxlength="15" name="username" id="inputName" placeholder="Username" required>
           <div class="help-block with-errors"></div>
         </div>
         <div class="form-group">
           <label for="inputPassword" class="control-label">Password</label>
           <input type="password" data-minlength="5" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
           <div class="help-block">Minimum 5 Karakter</div>
         </div>
         <div class="form-group">
           <label for="" class="control-label">Konfirmasi Password</label>
           <input type="password" class="form-control" id="inputPasswordConfirm" name="confirmPassword" data-match="#inputPassword" data-match-error="Upss ,Password Tidak cocok " placeholder="Ulangi Password" required>
           <div class="help-block with-errors"></div>
         </div>
         <div class="form-group">
           <label for="inputFullame" class="control-label">Nama Lengkap</label>
           <input type="text" class="form-control" data-minlength="5" maxlength="20" name="fullname" id="fullname" placeholder="Nama Lengkap" required>
           <div class="help-block with-errors"></div>
         </div>
         <div class="modal-footer">
           <div class="form-group">
             <button type="submit" class="btn btn-primary">Ganti</button>
           </div>
         </div>
         </form>
       </div>
     </div>
   </div>
 </div>