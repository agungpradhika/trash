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
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
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
                                <a href="<?php echo base_url('page/dashboard') ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Halaman Utama</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('page/laporan') ?>"><i class="fa fa-table fa-fw"></i> Laporan</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-edit fa-fw"></i> Lokasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">STATUS</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-trash fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-center">
                                            <div class="huge" style="font-size: 20px;">STATUS</div>
                                            <div><b>kapasitas logam</b></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#"> -->
                                    <div class="panel-footer">
                                        <span class="pull-left" style="color: #f0ad4e;">Kapasitas penampung sampah logam</span>
                                        <div class="clearfix"></div>
                                    </div>
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-primary" style="background-color: #428bca">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-fire-extinguisher fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-center">
                                            <div class="huge" style="font-size: 20px;">STATUS</div>
                                            <div><b>kapasitas non logam</b></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#"> -->
                                    <div class="panel-footer">
                                        <span class="pull-left" style="color: #428bca">Kapasitas penampung sampah Non logam</span>
                                        <div class="clearfix"></div>
                                    </div>
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-fire fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-center">
                                            <div class="huge" style="font-size: 20px;">STATUS</div>
                                            <div><b>isi gas logam</b></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#"> -->
                                    <div class="panel-footer">
                                        <span class="pull-left" style="color: #d9534f;">Gas pada penampung sampah logam</span>
                                        <div class="clearfix"></div>
                                    </div>
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-recycle fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-center">
                                            <div class="huge" style="font-size: 20px;">STATUS</div>
                                            <div><b>isi Gas non logam</b></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#"> -->
                                    <div class="panel-footer">
                                        <span class="pull-left" style="color: #5cb85c">Gas pada penampung sampah Non logam</span>
                                        <div class="clearfix"></div>
                                    </div>
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-grey" style="background-color: #808080; border-color: #808080; color: #fff;">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-refresh fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-center">
                                            <div class="huge" style="font-size: 20px;">STATUS</div>
                                            <div><b>ini isi status pH</b></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#"> -->
                                    <div class="panel-footer">
                                        <span class="pull-left" style="color: #808080;">pH pada penampung sampah Non logam</span>
                                        <div class="clearfix"></div>
                                    </div>
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>
                        </div>

                        <div class="col-lg-9 col-md-9">
                            <div class="panel">
                                <div>
                                    tes
                                    dasds
                                    dasda
                                    ddsad
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- /.row -->
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
