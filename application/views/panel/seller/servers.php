<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
    <div class="row">
    <br>
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

        <div class="col-lg-12">
            <h1 class="page-header">Server List</h1>
            
            <div class="dropdown pull-right">
				<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="fa fa-plus fa-fw"></span> Tambah saldo</button>
				<ul class="dropdown-menu">
					<li class="active"><a href="<?= base_url('panel/reseller/'.str_replace(' ','-',$_SESSION['username']).'/addsaldo-via-req') ?>">Via Rekening</a></li>
					<li><a href="<?= base_url('panel/reseller/'.str_replace(' ','-',$_SESSION['username']).'/addsaldo-via-hp') ?>">Via Pulsa/Mkios</a></li>
				</ul>
            </div>
            
        </div>
    </div>
    <span>Jangan Lupa Klik Iklan Cukup 1 kali ya gan</span>
    <div class="row">
       <div class="col-xs-6 col-md-5 col-md-4 col-lg-3">
            <div class="well">Credit : <B>Rp.<?= number_format($user -> saldo) ?></B></div>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12">
                <?php if (isset($message)) {echo $message; }?>
            </div>
              <div class="col-sm-6 col-md-4 col-lg">
                <div class="panel panel-default">
                 <div class="panel-heading" style="background: #2d3b55; color: #fff">
                        <b>Advertise</b>
                    </div>
                <center>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 300x250 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-1349152717282667"
     data-ad-slot="6107083638"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                </center>
                </div>
                </div>

        <?php foreach($server as $row): ?>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #2d3b55; color: #fff">
                        <b><?= $row['ServerName']?></b> <?php if ($row['Status']) { echo '';} else {echo "(Locked)";}?>
                    </div>
                    <table class="table">
                        <tr>
                            <td>Lokasi</td><td><?= $row['Location']?></b></td>
                        </tr>
                        <tr>
                            <td>Host</td><td><?= $row['HostName']?></b></td>
                        </tr>
                        <tr>
                            <td>OpenSSH</td><td><?= $row['OpenSSH']?></b></td>
                        </tr>
                        <tr>
                            <td>Dropbear</td><td><?= $row['Dropbear']?></b></td>
                        </tr>
                        <tr>
                            <td>Credit</td><td>Rp. <?= number_format($row['Price']) ?></b></td>
                        </tr>
                        <tr>
                            <td>Expired</td><td><?= $row['Expired']?> days</b></td>
                        </tr>
                    </table>
                    <div class="panel-footer text-center">
                        <a href="<?= base_url('panel/seller/'.$_SESSION['username'].'/buy/'.str_replace(' ','-',$row['ServerName']).'/'.$row['Id']) ?>" class="btn btn-success"><i class="fa fa-pencil fa-fw"></i> Create</a>
                        <!-- <a href="http://{{ @server->host }}:81/vpn-config.rar" class="btn btn-default"><i class="fa fa-download fa-fw"></i> VPN Config</a> -->
                    </div>
                </div>
            </div>

        <?php endforeach; ?>


            




    </div>
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
<br>
</div>
