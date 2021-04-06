<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png" >
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Gerenciador de Canil</title>
  <!-- imports de estilização -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
  <!-- INICIO SIDEBAR -->
<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Logo do canil -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-paw"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Canil</div>
      </a>
      <hr class="sidebar-divider my-0">
      <!-- Link das abas da página -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php?page=0">
        <i class="fas fa-home"></i>
          <span>Início</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cadastrarAnimal.php">
          <i class="fas fa-medkit"></i>
          <span>Resgate</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="adocao.php?page=0">
          <i class="fas fa-hand-holding-heart"></i>
          <span>Adoção</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="historicoAdocao.php?page=0">
          <i class="fas fa-history"></i>
          <span>Histórico</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="apoios.php">
          <i class="fas fa-hands-helping"></i>
          <span>Apoiar</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="sobre.php">
          <i class="far fa-address-card"></i>
          <span>Sobre</span>
        </a>
      </li>
      <!-- Redes Sociais -->
      <li class="nav-item active">
        <span class="nav-link alinha-sociais">
          <a href='https://github.com/lorran-xo' rel="noreferrer" target="_blank"> <i class="fab fa-github"></i> </a>  
          <a href='https://www.linkedin.com/in/lorran-oliveira-38194b117' rel="noreferrer" target="_blank"> <i class="fab fa-linkedin"></i> </a> 
          <a href='https://www.instagram.com/lorran_xo/' rel="noreferrer" target="_blank"> <i class="fab fa-instagram"></i> </a> 
        </span>
      </li>
      <hr class="sidebar-divider">
    </ul>

    <!-- FIM SIDEBAR -->

    <!--  ---------------------------------------  -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
      <!-- barra de cima -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      </nav>

      <?php 
        $this->carregarViewNoTemplate($nomeDaView); //Chama aqui a view
      ?>
    <!--  ---------------------------------------  -->

    </div>
      <!-- INICIO BOTTOMBAR -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Visite no <i class="fab fa-github"></i> <a href="https://github.com/lorran-xo/php-gerenciador-canil" target="_blank">Github</a></span>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--Botão de voltar pro topo da pag-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JS-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="css/js/sb-admin-2.min.js"></script>
  <script src="css/js/sb-admin-2.css"></script>
  
</body>

</html>
<!-- FIM BOTTOMBAR -->