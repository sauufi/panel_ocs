<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
		<meta name="description" content="SSHOcean.com, Panel Reseller SSH SGDO, Free SSH, SSH SDGO"/>
		<meta name="keywords" content="SSHOcean.com, Panel Reseller SSH SGDO, Free SSH, SSH SDGO"/>
		<meta name="author" content="SSHOcean.com team"/>
		<title>SSH Ocean | Reseller SSH SGDO</title>
		<!-- core CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.0.0/metisMenu.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		
		<link href="<?= base_url('asset/css/sb-admin-2.css')?>" rel="stylesheet"/>
		<link href="<?= base_url('asset/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet"/>
		<link href="<?= base_url('asset/css/bootstrap-dialog.min.css')?>" rel="stylesheet"/>
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<!--[if lt IE 9]>
		<script src="<?= base_url('asset/js/html5shiv.js');?>"></script>
		<script src="<?= base_url('asset/js/respond.min.js');?>"></script>
		<![endif]-->
		<link rel="shortcut icon" href="<?= base_url('favicon.ico')?>"/>
	</head>
	<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background: #2d3b55;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/" style="color: #fff;"></i>SSH Ocean</a>
        </div>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="row">
                            <div class="col-xs-5">
                                <span class="fa-stack fa-3x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true): ?>
                            <div class="col-xs-7">
                                <h4><b><?= $_SESSION['username'] ?></b></h4>
                                <h4 class="text-muted"><?php if ($_SESSION['is_admin']) { echo "Administrator"; } else {echo "Seller"; } ?></h4>
                            </div>
                        </div>
                    </li>

						<?php if ($_SESSION['is_admin']): ?>
                  
                            <li>
                                <a href="<?= base_url('panel/administrator/'.$_SESSION['username'].'/server') ?>"><i class="fa fa-th-list fa-fw"></i> Server</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/notify') ?>"><span class="glyphicon glyphicon-envelope"></span> Kotak masuk <?php if (isset($msg)): ?>
									<span class="badge"><?= count($msg) ?></span>
                                
                                <?php endif; ?>
                                </a>
                            </li>
						<li><a href="<?= base_url('panel/'.$_SESSION['username'].'/setting')?>"><i class="fa fa-key"></i> Sandi</a></li>
							<li><a href="<?= base_url('admin/asset')?>"><i class="fa fa-phone"></i> No.Telp</a></li>
							<li><a href="<?= base_url('admin/asset_req')?>"><i class="fa fa-credit-card"></i> No.Req</a></li>
                        <?php else: ?>
                         <li>
                              <a href="<?= base_url('panel/reseller/'.$_SESSION['username'].'/server') ?>"><i class="fa fa-shopping-cart fa-fw"></i> Buy SSH Account</a>
                        </li>
                        <li>
                              <a href="<?= base_url('panel/reseller/cek_account/'.$_SESSION['username']) ?>"><i class="fa fa-users"></i> Cek account</a>
                        </li>
                        <li>
							<a href="<?= base_url('panel/'.$_SESSION['username'].'/setting')?>"><i class="fa fa-gear fa-fw"></i> Setting</a>
                        </li>
                        
                        <?php endif; ?>
					  <li>
                        <a href="<?= base_url('panel/'.$_SESSION['username'].'/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    <?php endif; ?>
                </ul>

                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- on posted -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1349152717282667"
     data-ad-slot="1718263835"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

            </div>
        </div>
    </nav>
</div>
