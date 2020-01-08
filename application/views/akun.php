<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/startmin/css/bootstrap.min.css') ?>" rel="stylesheet">
        
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('assets/startmin/css/metisMenu.min.css') ?>" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?php echo base_url('assets/startmin/css/timeline.css') ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/startmin/css/startmin.css') ?>" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo base_url('assets/startmin/css/morris.css') ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('assets/startmin/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Startmin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li> -->
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="<?php echo base_url('page/home') ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Halaman Utama</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('page/laporan') ?>"><i class="fa fa-table fa-fw"></i> Laporan</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo base_url('page/lokasi') ?>"><i class="fa fa-edit fa-fw"></i> Lokasi</a>
                            </li> -->
                            <li>
                                <a href="<?php echo base_url('page/profil') ?>"><i class="fa fa-table fa-fw"></i> Kelola Akun </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <h1 style="margin-top:4%;"> KELOLA AKUN </h1>
                    <hr>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label for=""> Nama Lengkap </label>
                          <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for=""> Alamat </label>
                          <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <label for=""> Jabatan </label>
                          <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for=""> Email </label>
                          <input type="email" name="" id="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for=""> Username </label>
                          <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for=""> Password </label>
                          <input type="password" name="" id="" class="form-control">
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-lg-1 col-md-1 col-sm-12 col-12"></div>
                          <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                            <button class="btn btn-primary"> Simpan </button>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                            <button class="btn btn-info"> Edit </button>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                            <button class="btn btn-warning"> Update </button>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                            <button class="btn btn-danger"> Hapus </button>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                            <button class="btn btn-default"> Batal </button>
                          </div>
                          <div class="col-lg-1 col-md-1 col-sm-12 col-12"></div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <table class="table table-bordered table-striped">
                          <tr>
                              <th> Heading 1 </th>
                              <th> Heading 2 </th>
                              <th> Heading 3 </th>
                              <th> Heading 4 </th>
                              <th> Heading 5 </th>
                          </tr>
                          <tr>
                              <td> Value 1 </td>
                              <td> Value 2 </td>
                              <td> Value 3 </td>
                              <td> Value 4 </td>
                              <td> Value 5 </td>
                          </tr>
                          <tr>
                              <td> Value 1 </td>
                              <td> Value 2 </td>
                              <td> Value 3 </td>
                              <td> Value 4 </td>
                              <td> Value 5 </td>
                          </tr>
                          <tr>
                              <td> Value 1 </td>
                              <td> Value 2 </td>
                              <td> Value 3 </td>
                              <td> Value 4 </td>
                              <td> Value 5 </td>
                          </tr>
                          <tr>
                              <td> Value 1 </td>
                              <td> Value 2 </td>
                              <td> Value 3 </td>
                              <td> Value 4 </td>
                              <td> Value 5 </td>
                          </tr>
                      </table>
                      </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?php echo base_url('assets/startmin/js/jquery.min.js') ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('assets/startmin/js/bootstrap.min.js') ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('assets/startmin/js/metisMenu.min.js') ?>"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?php echo base_url('assets/startmin/js/raphael.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/startmin/js/morris.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/startmin/js/morris-data.js') ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('assets/startmin/js/startmin.js') ?>"></script>

    </body>
</html>
