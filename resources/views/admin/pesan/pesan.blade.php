<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Asta98 Restaurant - Pesan Menu</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/Magnific-Popup/magnific-popup.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/asta.png" alt="" style="width:150px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Pesan Menu</a> 
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Hero Banner Section start =================-->

@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-info" role="alert">{{ Session ('success') }}</div>
@endif
<div class="container">
  <form action="{{ route ('pesan.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <section class="section-margin">
          <div class="container">
            <br></br>
            <br></br>
            <div class="form-group">
              <label for="exampleFormControlSelect1">KODE MEJA ANDA</label>
                <select name="Kode" class="form-control" id="exampleFormControlSelect1">
                  <option value="" holder>-</option>
                  <option>KODE A</option>
                  <option>KODE B</option>
                  <option>KODE C</option>
                  <option>KODE D</option>
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Pelanggan</label>
                <input name="Nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Pelanggan">
            </div>
            <br></br>
            <button type="submit" class="btn btn-primary btn-block" onclick="return confirm('Apakah SUdah Benar Yang Anda Pesan?')">Pesan</button>
          </div>
        </section>
      </div>

      <div class="col-12 col-md-6 col-lg-6">
        <section class="section-margin">
          <div class="container">
              <h4 class="text">Menu-Pesanan</h4>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Pilih Pesanan</label>
                <select name="Bebek1" class="form-control" id="exampleFormControlSelect1">
                  <option >-</option>
                  <option>BEBEK LOMBOK IJO </option>
                  <option>BEBEK PRESTO </option>
                  <option>BEBEK BETUTU </option>
                  <option>BEBEK KREMES </option>
                </select>
            </div>
            
            <div class="form-group">
              <label for="exampleFormControlSelect1">Pilih Minuman</label>
              <select name="Minum1" class="form-control" id="exampleFormControlSelect1">
                <option >-</option>
                <option>TEH ANGET </option>
                <option>JERUK ANGET </option>
                <option>ES TEH </option>
                <option>ES JERUK </option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Pesan Lagi / Abaikan('Jika Tak Ingin Menambah Pesanan')</label>
                <select name="Bebek2" class="form-control" id="exampleFormControlSelect1">
                  <option value="No">-</option>
                  <option>BEBEK LOMBOK IJO </option>
                  <option>BEBEK PRESTO </option>
                  <option>BEBEK BETUTU </option>
                  <option>BEBEK KREMES </option>
                </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Pesan Lagi / Abaikan('Jika Tak Ingin Menambah Pesanan')</label>
              <select name="Minum2" class="form-control" id="exampleFormControlSelect1">
                <option value="No">-</option>
                <option>TEH ANGET </option>
                <option>JERUK ANGET </option>
                <option>ES TEH </option>
                <option>ES JERUK </option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Pesan Lagi / Abaikan('Jika Tak Ingin Menambah Pesanan')</label>
                <select name="Bebek3" class="form-control" id="exampleFormControlSelect1">
                  <option value="No">-</option>
                  <option>BEBEK LOMBOK IJO </option>
                  <option>BEBEK PRESTO </option>
                  <option>BEBEK BETUTU </option>
                  <option>BEBEK KREMES </option>
                </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Pesan Lagi / Abaikan('Jika Tak Ingin Menambah Pesanan')</label>
              <select name="Minum3" class="form-control" id="exampleFormControlSelect1">
                <option value="No">-</option>
                <option>TEH ANGET </option>
                <option>JERUK ANGET </option>
                <option>ES TEH </option>
                <option>ES JERUK </option>
              </select>
            </div>

          </div>
        </section>
      </div>

      <div class="col-12 col-md-6 col-lg-2">
        <section class="section-margin">
          <div class="container">
            <h4 class="text">Jumlah</h4>
            <div class="form-group">
              <label for="exampleInputEmail1">.</label>
              <input name="Jumlah1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Jumlah" Value="0">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">.</label>
              <input name="Banyak1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Jumlah" Value="0">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">.</label>
              <input name="Jumlah2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Jumlah" Value="0">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">.</label>
              <input name="Banyak2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Jumlah" Value="0">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">.</label>
              <input name="Jumlah3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Jumlah" Value="0">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">.</label>
              <input name="Banyak3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Jumlah" Value="0">
            </div>

          </div>
        </section>
      </div>
    </div>
</form>
</div>

  
  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
          <a href="#"><i class="ti-facebook"></i></a>
					<a href="#"><i class="ti-twitter-alt"></i></a>
					<a href="#"><i class="ti-dribbble"></i></a>
					<a href="#"><i class="ti-linkedin"></i></a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->




  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>