<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
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
		<div class="col-lg-10">
			<div class="panel panel-default">
				<div class="panel-heading"></div>
				<div class="panel-body">
				<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Registrasi Reseller</h1>
			</div>
			<?= form_open() ?>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username">
					<p class="help-block">At least 4 characters, letters or numbers only</p>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
					<p class="help-block">A valid email address</p>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
					<p class="help-block">At least 6 characters</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirm password</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
					<p class="help-block">Must match your password</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Buat akun">
				</div>
			</form>
		</div>

				</div>
				<div class="panel-footer"></div>
			</div>
		</div>
	</div><!-- .row -->
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

</div><!-- .container -->
