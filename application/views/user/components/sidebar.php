  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="<?=base_url();?>assets/img/logo_damri.jpg" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">E-DAMRI</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?=base_url();?>assets/img/user.png" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block"><?=$this->session->userdata('username')?></a>
              </div>
          </div>

       
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                  <li class="nav-item">
                      <a href="<?=base_url();?>Dashboard/dashboard_user" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?=base_url();?>Pesanan/riwayat_pesanan" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Tiket Saya
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?=base_url();?>Form_Pesanan/form_pesanan_user" class="nav-link">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Pesan Tiket
                          </p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
  