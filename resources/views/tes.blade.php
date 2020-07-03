<!DOCTYPE html>
<html>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
	<title>COVID-19</title>
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #fff8f8;">
	<div class="container">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active ml-4">
	        <a class="nav-link" href="#">Overview <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item ml-4">
	        <a class="nav-link" href="#">Contaigen</a>
	      </li>
	      <li class="nav-item ml-4">
	        <a class="nav-link" href="#">Symptoms</a>
	      </li>
	      <li class="nav-item ml-4">
	        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Prevention</a>
	      </li>
	    </ul>
	  </div>
  </div>
</nav> -->
<div class="jumbotron jumbotron-fluid" style="background-image: url(assets/Virus.png);">
  <div class="container">
	  <div class="row">
	  	<div class="col-md-6">
    		<h5>Waspada covid19</h5>
    		<h2>Menginap di Rumah Karantina<br> Untuk menghentikan virus Corona</h2>
    		<p>Tidak ada obat khusus untuk mencegah atau mengobati coronavirus
			<br>penyakit (COVID-19). Orang mungkin perlu perawatan suportif..</p>
			<button type="button" class="btn kotak">Let Us Help</button>
	  	</div>
	  	<div class="col-md-6">
	  		<img src="assets/hero.png" class="img-fluid">
	  	</div>
	  </div>
  </div>
</div>
<section class="about">
	<div class="row">
		<div class="col-md-6">
			<img src="assets/Group 15404.png" class="img-fluid">
		</div>
		<div class="col-md-4 main">
			<h5>What Is Covid-19</h5>
			<h2>Coronavirus</h2>
			<p>Virus corona adalah jenis virus. Ada banyak jenis, dan beberapa penyebab penyakit. Jenis yang baru diidentifikasi telah menyebabkan wabah penyakit pernapasan baru-baru ini yang sekarang disebut COVID-19.Lauren Sauer, M.S., direktur operasi dengan Kantor Johns Hopkins dari Kesiapan Kesiapsiagaan dan Respons Acara Kritis
				</p>
			<button type="button" class="btn kotak">Learn More</button>
		</div>
	</div>
</section>
<section class="Contagion">
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<h4>Covid-19</h4>
				<h1>Penularan</h1>
				<p>Virus corona adalah jenis virus. Ada banyak jenis, dan
					<br> menyebabkan penyakit. Tipe yang baru diidentifikasi</p>
			</div>
		</div>
		<div class="row text-center justify-content-center">
			<div class="col-md">
					<div class="card shadow-lg">
						<img src="assets/Group 18540.png" class="card-img-top mx-auto d-block" alt="...">
						<div class="card-body">
							<h5>Objek yang Terkandung</h5>
						  <p class="card-text">Secara obyektif mengembangkan keahlian taktis sebelum inisiatif yang dapat diperluas. Menyederhanakan secara efisien</p>
						</div>
				</div>
			</div>
			<div class="col-md">
				<div class="card">
					<img src="assets/Group 18544.png" class="card-img-top mx-auto d-block" alt="...">
					<div class="card-body">
						<h5>Transmisi Udara</h5>
						<p class="card-text">Gunakan jaringan saat bersin, Dengan cara ini, Anda
							dapat melindungi tetesan Anda</p>
					</div>
				</div>
			</div>
			<div class="col-md">
				<div class="card">
					<img src="assets/Group 18542.png" class="card-img-top mx-auto d-block" alt="...">
					<div class="card-body">
						<h5>Kontak Manusia</h5>
						<p class="card-text">Mencuci tangan adalah salah satu yang paling sederhana
							cara Anda bisa melindungi</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="Symptomps">
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<h4>Covid-19</h4>
				<h1>Gejala</h1>
				<p>Coronavirus adalah jenis virus. Ada banyak jenis, dan beberapa penyebab penyakit.
					<br>Jenis yang baru diidentifikasi telah menyebabkan wabah pernapasan baru-baru ini </p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img src="assets/Group 15444.png" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<section class="data">
	<div class="row text-center mb-4">
		<div class="col">
			<h1>Tracking Kasus Covid-19</h1>
		</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md">
                {{-- <h6>Positif</h6> --}}
                <div class="img-fluid mt-3">
                    {!! $chart->container() !!}
                </div>
            </div>
            <div class="col-md">
                {{-- <h6>Meninggal</h6> --}}
                <div class="img-fluid mt-3">
                    {!! $chart2->container() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md">
        {{-- <h6>Meninggal</h6> --}}
        <div class="img-fluid mt-3">
            {!! $chart3->container() !!}
        </div>
    </div>
</div>
</div>
{{-- <div class="row">
    <div class="col">
        {!! $chart3->container() !!}
    </div>
</div> --}}
</section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
{!! $chart->script() !!}
{!! $chart2->script() !!}
{!! $chart3->script() !!}

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
