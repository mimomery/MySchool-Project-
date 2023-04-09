<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MySchool | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminpanel/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="adminpanel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="adminpanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="adminpanel/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminpanel/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="adminpanel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="adminpanel/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="adminpanel/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            
          </form>
          
        </div>
        
      </li>


      <!-- Profile -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="adminpanel/dist/img/user1-128x128.jpg" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">Administrateur</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="adminpanel/dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">

            <p>
              Administrateur - Web Developer
              <small>MYSCHOOL 2022</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="{{url('index')}}" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>


      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">My School</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminpanel/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrateur</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item  ">
            <a href="{{url('dashboard')}}" class="nav-link  ">
              <i class="nav-icon fas fa-school"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('notes')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Notes
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Utilisateurs
                <i class="fas fa-angle-left right"></i>
                <!--<span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview  ">
              <li class="nav-item">
                <a href="{{url('etudiant')}}" class="nav-link active">
                  <i class="far fa-user nav-icon"></i>
                  <p>Etudiants</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('professeur')}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Professeurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('parent')}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Parents</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Administrateurs</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Absences
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Absence</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Verifier Absence</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Autres
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sessions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cours</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Matieres</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Groupes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Emploi du temps 
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-award"></i>
              <p>
              Notes 
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Etudiants</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Utilisateurs</a></li>
              <li class="breadcrumb-item active">Etudiants</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="card">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Etudiant</h3>

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
               <div class="card-body">
                  
<div>
    <div class="container mt-5">
       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>ALL Etudiants</strong></h5>
                        <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#addStudentModal">Add New Etudiant</button>
                    </div>
                    <div class="card-body">
                      
                            
                      
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>level</th>
          <th>nom d'éleve</th>
          <th>prenom d'éleve</th>
          <th>sexe</th>
          <th> Établissement de provenance</th>
          <th>date de naissance</th>
          <th>Nom Tuteur</th>
          <th>Prénom Tuteur</th>
          <th>Téléphone Tuteur</th>
          <th>Adresse Tuteur</th>
          <th>Profession Tuteur</th>
          <th>Email Tuteur</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td style="text-align: center;">
                                                <button class="btn btn-sm btn-secondary" wire:click="viewStudentDetails ">View</button>
</br>
                                                <button class="btn btn-sm btn-primary" wire:click="editStudents ">Edit</button>
</br>
                                                <button class="btn btn-sm btn-danger" wire:click="deleteConfirmation ">Delete</button>
</br>
                                            </td>
                                        </tr>
                                 
                                    <tr>
                                         
                                    </tr>
                                 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form wire:submit.prevent="storeStudentData">
                        <div class="form-group row">
                            <label for="student_id" class="col-3">level</label>
                            <div class="col-9">
                                <input type="number" id="student_id" class="form-control" wire:model="student_id">
                                
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-3">nom d'éleve</label>
                            <div class="col-9">
                                <input type="text" id="name" class="form-control" wire:model="name">
                              
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-3">prenom d'éleve</label>
                            <div class="col-9">
                                <input type="email" id="email" class="form-control" wire:model="email">
                              
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                            
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-3">sexe</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Établissement de provenance</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">date de naissance</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Nom Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Prénom Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Téléphone Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Adresse Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Profession Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Email Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-primary">Add Student</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="editStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form wire:submit.prevent="editStudentData">
                    <div class="form-group row">
                            <label for="student_id" class="col-3">level</label>
                            <div class="col-9">
                                <input type="number" id="student_id" class="form-control" wire:model="student_id">
                                
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-3">nom d'éleve</label>
                            <div class="col-9">
                                <input type="text" id="name" class="form-control" wire:model="name">
                              
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-3">prenom d'éleve</label>
                            <div class="col-9">
                                <input type="email" id="email" class="form-control" wire:model="email">
                              
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                            
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-3">sexe</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Établissement de provenance</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">date de naissance</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Nom Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Prénom Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Téléphone Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Adresse Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Profession Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">Email Tuteur</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="phone">
                                 
                                    <span class="text-danger" style="font-size: 11.5px;"> </span>
                                
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-primary">Edit Student</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-4">
                    <h6>Are you sure? You want to delete this student data!</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary" wire:click="cancel()" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-sm btn-danger" wire:click="deleteStudentData()">Yes! Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="viewStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Student Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeViewStudentModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>ID: </th>
                                 
                            </tr>

                            <tr>
                                <th>Name: </th>
                              
                            </tr>

                            <tr>
                                <th>Email: </th>
                                 
                            </tr>

                            <tr>
                                <th>Phone: </th>
                                 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.card -->

    
  </div>
  
  <!-- /.content-wrapper -->
  


{{-- Bootstrap Scripts --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

@stack('scripts')
@livewireScripts
  <!--footer-->
  @extends('adminpanel/layouts/footer')
  <!--end-footer-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="adminpanel/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="adminpanel/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="adminpanel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="adminpanel/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="adminpanel/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="adminpanel/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="adminpanel/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="adminpanel/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="adminpanel/plugins/moment/moment.min.js"></script>
<script src="adminpanel/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="adminpanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="adminpanel/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="adminpanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="adminpanel/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminpanel/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="adminpanel/dist/js/pages/dashboard.js"></script>

</body>
</html>
