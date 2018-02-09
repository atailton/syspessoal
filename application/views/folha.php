<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SysPessoal - Funcionário</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo $url; ?>user_guide/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo $url; ?>user_guide/template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo $url; ?>user_guide/template/css/sb-admin.css" rel="stylesheet">
</head>

<body class="sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" id="mainNav">
    <a class="navbar-brand" href="#">SysPessoal</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sistema">
          <a class="nav-link" href="<?php echo $url; ?>site/sistema">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Sistema</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Funcionário">
          <a class="nav-link" href="<?php echo $url; ?>site/funcionario">
            <i class="fa fa-group"></i>
            <span class="nav-link-text">Funcionários</span>
          </a>
        </li>
        <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $url; ?>site/folha">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Folha de pagamento</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $url; ?>site/contracheque">
            <i class="fa fa-money"></i>
            <span class="nav-link-text">Contra-cheque</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $url; ?>site/desconto">
            <i class="fa fa-pencil-square-o"></i>
            <span class="nav-link-text">Lançar Desconto</span>
          </a>
        </li>


      </ul>


      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <div class="row">
        <div class="col-12">

              <form>
              <div class="form-group">

                <div class="form-row">
                  <div class="col-md-3">
                    <label for="exampleInputLastName">Mês</label>
                        <select class="form-control" name="funcao">
                            <option value="01">----</option>
                        </select>
                  </div>
                  <div class="col-md-3">
                    <label for="exampleInputLastName">Ano</label>
                        <select class="form-control" name="funcao">
                            <option value="2017">2018</option>
                        </select>
                  </div>
                  <div class="col-md-3">

                  </div>
                  <div class="col-md-3">

                  </div>
                </div>

              </div>


              <div class="form-group">
                <div class="form-row">

                  <div class="col-md-12">
                    <button style="width: 16vw;" class="btn btn-primary float-left">Aplicar</button>

                  </div>

                </div>
              </div>

            </form>

            <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Folha de pagamento
		  </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Funcionário</th>
                  <th>Função</th>
                  <th>Salário Bruto</th>
                  <th>INSS</th>
                  <th>FGTS</th>
                  <th>IRRF</th>
                  <th>Outros</th>
                  <th>Líquido</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Funcionário</th>
                  <th>Função</th>
                  <th>Salário Bruto</th>
                  <th>INSS</th>
                  <th>FGTS</th>
                  <th>IRRF</th>
                  <th>Outros</th>
                  <th>Líquido</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Atailton Carlos Tavares</td>
                  <td>Programador</td>
                  <td>1800,00</td>
                  <td>178,00</td>
                  <td>165,00</td>
                  <td>0,00</td>
                  <td>0,00</td>
                  <td>1385,00</td>
                </tr>
                <tr>
                  <td>Atailton Carlos Tavares</td>
                  <td>Programador</td>
                  <td>1800,00</td>
                  <td>178,00</td>
                  <td>165,00</td>
                  <td>0,00</td>
                  <td>0,00</td>
                  <td>1385,00</td>
                </tr>
                <tr>
                  <td>Atailton Carlos Tavares</td>
                  <td>Programador</td>
                  <td>1800,00</td>
                  <td>178,00</td>
                  <td>165,00</td>
                  <td>0,00</td>
                  <td>0,00</td>
                  <td>1385,00</td>
                </tr>
                <tr>
                  <td>Atailton Carlos Tavares</td>
                  <td>Programador</td>
                  <td>1800,00</td>
                  <td>178,00</td>
                  <td>165,00</td>
                  <td>0,00</td>
                  <td>0,00</td>
                  <td>1385,00</td>
                </tr>
                <tr>
                  <td>Atailton Carlos Tavares</td>
                  <td>Programador</td>
                  <td>1800,00</td>
                  <td>178,00</td>
                  <td>165,00</td>
                  <td>0,00</td>
                  <td>0,00</td>
                  <td>1385,00</td>
                </tr>
                <tr>
                  <td>Atailton Carlos Tavares</td>
                  <td>Programador</td>
                  <td>1800,00</td>
                  <td>178,00</td>
                  <td>165,00</td>
                  <td>0,00</td>
                  <td>0,00</td>
                  <td>1385,00</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>

        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->


    <!--<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>-->

    <div id="#myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          ...
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo $url; ?>user_guide/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $url; ?>user_guide/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo $url; ?>user_guide/template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo $url; ?>user_guide/template/js/sb-admin.min.js"></script>
  </div>
</body>

</html>
