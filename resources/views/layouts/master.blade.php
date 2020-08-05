<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Mercearia</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./img/supermarket.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mercearia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/man.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              {{Auth::user()->name}}
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
                <router-link to="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-home blue"></i>
                    <p>
                        Inicio
                    </p>
                </router-link>
                <router-link to="/category" class="nav-link">
                    <i class="nav-icon fas fa-th green"></i>
                    <p>
                        Categorias
                    </p>
                </router-link>
                <router-link to="/product" class="nav-link">
                    <i class="nav-icon fas fa-shopping-cart cyan"></i>
                    <p>
                        Produtos
                    </p>
                </router-link>
                <router-link to="/provider" class="nav-link">
                    <i class="nav-icon fas fa-user-friends purple"></i>
                    <p>
                        Fornecedores
                    </p>
                </router-link>
                <router-link to="/client" class="nav-link">
                    <i class="nav-icon fas fa-users teal"></i>
                    <p>
                        Clientes
                    </p>
                </router-link>
                <router-link to="/stock" class="nav-link">
                    <i class="nav-icon fas fa-shopping-bag orange"></i>
                    <p>
                        Stock
                    </p>
                </router-link>
                <router-link to="/report" class="nav-link">
                    <i class="nav-icon fas fa-archive yellow indigo"></i>
                    <p>
                        Relatorios
                    </p>
                </router-link>
                <router-link to="/sale" class="nav-link">
                    <i class="nav-icon fas fa-money-bill pink"></i>
                    <p>
                        Vendas
                    </p>
                </router-link>
                <router-link to="/employee" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Funcionarios
                    </p>
                </router-link>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                       <i class="nav-icon fas fa-power-off red"></i>
                      {{ __('Logout') }}
                </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
              </form>
            <!-- <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a> -->
              </li>
            </ul>
          
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <router-view></router-view>
        </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 Fire.</strong> Todos direitos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="/js/app.js"></script>

</body>
</html>
