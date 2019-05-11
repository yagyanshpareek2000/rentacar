<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<meta name="author" content="Ahmet DALDEMİR">
 	<title>SinCms</title>
	<link href="<?=base_url()?>backend/css/app.css" rel="stylesheet">
	<script src="<?=base_url()?>backend/js/settings.js"></script>
</head>
<!-- SET YOUR THEME -->

<body class="theme-blue">
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>
 	<main class="main h-100 w-100" >
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="text-center mt-4">
  						</div>
 						<div class="card" style="    box-shadow: 3px 6px 15px 10px #4f50508c;">
							<div class="card-body">
								<div class="m-sm-4">
 									<form>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Mail Adresiniz" />
										</div>
                    <div class="form-group">
											<label>Şifre</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password">
 										</div>
 										<div>
											<div class="custom-control custom-checkbox align-items-center">
												<input type="checkbox" class="custom-control-input" value="remember-me" name="remember-me" checked>
												<label class="custom-control-label text-small">Beni Hatırla</label>
											</div>
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Giriş Yap</button>
 										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
<style>
  .main{
    display: block;

}
 .main::after {
  content: "";
        background: url(http://rentacarturkey.ml/backend/img/crm-image.jpg);
  opacity: 0.5;
  top: 0;
   background-size:cover;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}
  </style>
	<script src="<?=base_url()?>backend/js/app.js"></script>

</body>
  </html>