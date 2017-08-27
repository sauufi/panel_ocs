<div id="page-wrapper">
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
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Setting</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
			<?php if (isset($message)) {echo $message; }?>
			<?php if (isset($success)) {echo $success; }?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-gear fa-fw"></i> Ganti Password
                </div>
                <div class="panel-body">
                    <form role="form" action="<?= base_url('panel/'.$_SESSION['username'].'/setting')?>" method="POST">
						<input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                        <div class="form-group">
                            <label>Password Lama</label>
                            <input class="form-control" placeholder="Old Password" name="oldpass" type="password" required>
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input class="form-control" placeholder="New Password" name="password" type="password" required>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Ulang Password Baru</label>
                            <input class="form-control" placeholder="Re-enter New Password" name="passconf" type="password" required>
                        </div>
                        <button class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
