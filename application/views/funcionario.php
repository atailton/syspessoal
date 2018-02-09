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
        <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Funcionário">
          <a class="nav-link" href="<?php echo $url; ?>site/funcionario">
            <i class="fa fa-group"></i>
            <span class="nav-link-text">Funcionários</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
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
                  <div class="col-md-4">
                    <label for="exampleInputName">Nome completo</label>
                    <input class="form-control" id="exampleInputName" type="text"  placeholder="Informe nome completo">
                  </div>
                  <div class="col-md-3">
                    <label for="exampleInputLastName">Função</label>
                        <select class="form-control" name="funcao">
                            <option value="0">----</option>
                        </select>
                  </div>
                  <div class="col-md-2">
                    <label for="adminissao">Adimissão</label>
                        <input class="form-control" id="adminissao" type="text" >
                  </div>
                  <div class="col-md-3">
                    <label for="exampleInputLastName">Salário Base</label>
                        <input class="form-control" id="exampleInputName" type="text" >
                  </div>
                </div>

              </div>


              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-3">
                    <label for="exampleInputPassword1">Carga Horária</label>
                    <select class="form-control" name="funcao">
                        <option value="44">44 horas</option>
                        <option value="40">40 horas</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="exampleConfirmPassword">NIS</label>
                    <input class="form-control" id="exampleConfirmPassword" type="text" placeholder="Número de inscrição social">
                  </div>
                  <div class="col-md-2">
                    <label for="exampleConfirmPassword">CPF</label>
                    <input class="form-control" id="exampleConfirmPassword" type="text">
                  </div>
                  <div class="col-md-2">

                    <label for="exampleConfirmPassword">RG</label>
                    <input class="form-control" id="exampleConfirmPassword" type="text">

                  </div>
                  <div class="col-md-2">

                    <label for="exampleConfirmPassword">Nascimento</label>
                    <input class="form-control" id="exampleConfirmPassword" type="text">

                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">

                  <div class="col-md-3">
                    <label for="refeicaoCad">Vale Refeição</label>
                    <input style="margin-right: 10px;" id="refeicaoCad" type="checkbox" name="refeicao" value="1">

                    <label for="transporteCad">Vale Transporte</label>
                    <input style="margin-right: 10px;" id="transporteCad" type="checkbox" name="transporte" value="1">


                  </div>
                  <div class="col-md-3">
                    <label for="insalubridadeCad">Insalubridade</label>
                    <input style="margin-right: 10px;" id="insalubridadeCad" type="checkbox" name="insalubridade" value="1">

                    <label for="periculosidadeCad">Periculosidade</label>
                    <input id="periculosidadeCad" type="checkbox" name="periculosidade" value="1">

                  </div>

                  <div class="col-md-6">
                    <button style="width: 10vw;" class="btn btn-primary float-right">Cadastrar</button>
                    
                  </div>

                </div>
              </div>

            </form>

            <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Lista de funcionários
		  </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Função</th>
                  <th>Adimissão</th>
                  <th>Salário</th>
                  <th>Ficha</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nome</th>
                  <th>Função</th>
                  <th>Adimissão</th>
                  <th>Salário</th>
                  <th>Ficha</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td><center><button class="btn btn-primary btn-lg fa fa-search-plus" type="button" name="button" data-toggle="modal" data-target="#exampleModal"></button></center></td>
                </tr>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td><center><button class="btn btn-primary btn-lg fa fa-search-plus" type="button" name="button"></button></center></td>
                </tr>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td><center><button class="btn btn-primary btn-lg fa fa-search-plus" type="button" name="button"></button></center></td>
                </tr>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td><center><button class="btn btn-primary btn-lg fa fa-search-plus" type="button" name="button"></button></center></td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td><center><button class="btn btn-primary btn-lg fa fa-search-plus" type="button" name="button"></button></center></td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td><center><button class="btn btn-primary btn-lg fa fa-search-plus" type="button" name="button"></button></center></td>
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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">
        ...
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
