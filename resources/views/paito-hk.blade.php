<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Paito Hongkong</title>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

	<style>
		body {
			font-family: 'Roboto', sans-serif;
			background-color: #000000;
			background-image: url(/wp-content/uploads/2022/09/bgpage.png);
			background-repeat: repeat;
			background-position: 50% 50%;
			overflow-x: hidden;
		}

		header {
			z-index: 100000 !important;
		}

		.nav-link,
		.active {
			font-weight: 700;
		}

		.nav-link:hover {
			color: yellow;
			transform: scale(1.2);
		}

		.navbar-brand {
			position: absolute;
			top: 3px;
			left: 50%;
			transform: translateX(-50%);
		}

		a {
			color: #666;
		}

		a:hover {
			color: #eee;
			text-decoration: none;
		}

		body>.container,
		body>.boxcontainer>.container,
		.navbar .container {
			margin-bottom: 5px;
			max-width: 850px;
			color: #333333;
		}

		body>.container a {
			color: #333333;
		}

		body>.boxcontainer {
			width: 850px;
			max-width: 100%;
			margin: 0 auto;
			box-shadow: 0 0 6px #000000;
		}

		.boxcontainer .navbar {
			padding-left: 0 !important;
			padding-right: 0 !important;
		}

		#header,
		#topbar {
			background: #000000;
			background: -webkit-linear-gradient(to top, #790202, #000000);
			background: linear-gradient(to top, #790202, #000000);
		}

		#header a,
		#topbar a,
		.navbar-dark .navbar-nav .dropdown-menu a {
			text-decoration: none;
			color: #ffffff;
		}

		.widgettitle {
			background-color: #021b79;
		}

		.widgettitle h3 {
			color: #ffffff;
		}

		#listpasaran a.btn,
		.post-list a.btn,
		.comment-act .btn {
			background-color: #021b79;
			border-color: #011356;
			color: #ffffff;
		}

		#listpasaran a.btn:hover,
		.post-list a.btn:hover,
		.post-list a.btn:focus,
		.comment-act .btn:hover,
		.comment-act .btn:focus {
			background-color: #025ba7;
			border-color: #011356;
			color: #ffffff;
		}

		#listpasaran a.btn:after,
		.post-list a.btn:after {
			border-left-color: #011356 !important;
		}

		#listpasaran a.btn:hover:after,
		.post-list a.btn:hover:after {
			border-left-color: #ffffff !important;
		}

		#footerwidget {
			background-color: #555555;
		}

		#footer {
			background-color: #333333;
		}

		#footer,
		#footer p,
		#footer a {
			color: #ffffff;
		}

		#contentwrap {
			background-color: #f1f1f1;
		}

		.pageside {
			background-color: #ffffff;
			box-shadow: 0 0 3px #000000;
			border-color: #000000;
		}

		#pagecontent .pagetitle,
		#pagecontent .pagetitle a {
			color: #000000;
		}

		body.post .rescir {
			background: #021b79;
			color: #ffffff;
		}

		#nav-main .nav-main,
		#nav-main .sub-menu,
		#nav-main .children {
			z-index: 999999;
		}

		.noselect {
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		table {
			border-collapse: collapse;
		}

		table {
			margin: 0 !important;
			width: 100% !important;
		}

		table,
		td,
		th {
			border: 1px solid black;
			cursor: default;
		}

		#drawing-table thead td {
			text-transform: uppercase;
			text-align: center;
			border: 1px solid #d9d9d9;
			background: linear-gradient(45deg, purple, rebeccapurple, magenta, fuchsia) !important;
			padding: 5px 0;
			line-height: 1.4;
		}

		#drawing-table thead td:not(.asux) {
			font-size: 12px;
			color: #FFF !important;
		}

		#drawing-table th.asux {
			background: #808080;
			color: #FFF !important;
			border-top: none !important;
		}

		#drawing-table td {
			background: #FFF;
			color: #000;
			font-weight: bold;
		}

		#drawing-table tr:nth-last-child(5n+1) td {
			background: #e8e4e7;
		}

		#drawing-table td.asux {
			color: #d7d1d1;
			width: 20px;
			font-weight: bold;
		}

		.top {
			background: none repeat scroll 0 0 #ffffff !important;
		}

		.asu {
			font-weight: bold;
			width: 20px;
		}

		.menu2 {
			background: #F0F0F0;
			position: relative;
			width: 100%;
			z-index: 99999;
			padding: 5px;
		}

		#clear {
			float: right;
		}

		#color-selector p {
			display: none;
		}

		.color {
			float: left;
			height: 20px;
			position: relative;
			width: 9.7%;
		}

		.color.eraser {
			background: none repeat scroll 0 0 white;
			cursor: pointer;
			border: 1px solid black;
		}

		.color.Red {
			background: none repeat scroll 0 0 #ff5050;
			cursor: pointer;
			border: 1px solid black;
		}

		.color.Pink {
			background: none repeat scroll 0 0 #ff99cc;
			cursor: pointer;
			border: 1px solid black;
		}

		.color.Green {
			background: none repeat scroll 0 0 #a9d08e;
			cursor: pointer;
			border: 1px solid black;
		}

		.color.Violet {
			background: none repeat scroll 0 0 #9966ff;
			cursor: pointer;
			border: 1px solid black;
		}

		.color.Teal {
			background: none repeat scroll 0 0 #66ffcc;
			cursor: pointer;
			border: 1px solid black;
		}

		.color.Blue {
			background: none repeat scroll 0 0 #9bc2e6;
			cursor: pointer;
			border: 1px solid black;
		}

		.color.Grey {
			background: none repeat scroll 0 0 #b2b2b2;
			cursor: pointer;
			border: 1px solid black;
		}

		.color.Orange {
			background: none repeat scroll 0 0 #f4b084;
			cursor: pointer;
			border: 1px solid black;
		}

		.color input {
			background: rgba(0, 0, 0, 0);
			border: 0 none;
			float: right;
			left: 220px;
			position: absolute;
		}

		.colorpicker_submit {
			color: #ffffff;
		}

		.colorpicker {
			z-index: 20;
		}

		.selected {
			border: 1px solid white;
		}

		#btnSubmit {
			float: left;
			margin-top: 0;
			width: 10%;
			cursor: pointer;
			font-size: 12px;
			line-height: 12px;
			height: 20px;
		}

		.asu,
		.asux,
		.asuxx,
		.entry-content td.asu,
		.entry-content td.asux,
		.entry-content td.asuxx {
			padding: 0 !important;
			font-size: 12px !important;
			border-color: #d9d9d9;
		}

		@media (max-width:767px) {

			.asu,
			.asux,
			.asuxx,
			.entry-content td.asu,
			.entry-content td.asux,
			.entry-content td.asuxx {
				font-size: 10px !important;
			}

			#btnSubmit {
				width: auto;
				padding: 0;
			}

			#btnSubmit {
				font-size: 10px !important;
				padding-left: 4px !important;
				padding-right: 4px !important;
			}
		}

		#colormenu.fixed {
			position: fixed;
			top: 0;
			left: 0;
		}

		body.admin-bar #colormenu.fixed {
			top: 32px;
		}

		table,
		td,
		th {
			border-color: #FFF;
		}

		.dayprint th {
			font-size: 11px;
			padding: 3px 0;
			background: #3e3e3e;
			color: #FFF;
			font-weight: bold;
			text-align: center;
		}

		#drawing-table td {
			text-align: center;
		}

		#btnSubmit {
			padding: 0;
		}

		.e1 {
			background-color: red !important;
			color: white !important;
		}

		.k1 {
			background-color: green !important;
			color: white !important;
		}

		.c1 {
			background-color: blue !important;
			color: white !important;
		}

		.a1 {
			background-color: orange !important;
			color: white !important;
		}

		a {
			text-decoration: none;
		}

		.box-ads {
			width: 100%;
			justify-content: space-evenly;
		}

		.box1,
		.box2 {
			width: 100%;
			max-width: 800px;
			margin: 0 auto;
		}

		.box1 img,
		.box2 img {
			width: 100%;
			margin-top: 10px;
		}

		header {
			z-index: 100000;
		}

		.main-logo {
			width: 116px;
			height: 42px;
		}

		header {
			z-index: 100;
		}
	</style>
</head>

<body>
	<header class="sticky-top">
		<nav class="navbar navbar-expand-lg navbar-dark bg-black">
			<div class="container-fluid relative">
				<a class="navbar-brand" href="/">
					<img src={{ asset('/storage/page/Nana4D.png') }} alt="Nana4D" class="main-logo">
				</a>
				<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-collapse collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-lg-0 mb-2">
						<li class="nav-item">
							<a class="nav-link @yield('home')" aria-current="page" href="/">BERANDA</a>
						</li>
						<li class="nav-item dropdown @yield('paito')">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								PAITO WARNA
							</a>
							<ul class="dropdown-menu dropdown-menu-dark">
								<li><a class="dropdown-item" href="/paito-sdy">PAITO SYDNEY</a></li>
								<li><a class="dropdown-item" href="/paito-sgp">PAITO SINGAPORE</a></li>
								<li><a class="dropdown-item" href="/paito-hk">PAITO HONGKONG</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link @yield('dreambook')" href="/dreambook">EREK-EREK</a>
						</li>
						{{-- <li class="nav-item">
							<a class="nav-link disabled">Disabled</a>
						</li> --}}
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
						<button class="btn btn-outline-success" type="submit">
							Search
						</button>
					</form>
				</div>
			</div>
		</nav>
	</header>

	<div class="d-flex w-100 bg-light font-weight-bolder fs-1 justify-content-center">
		<label>PAITO HONGKONG</label>
	</div>

	<form id="selectForm">
		<div class="row no-gutters justify-content-center mt-3 mb-4">
			<div class="col-2 px-1"><input maxlength="1" placeholder="as" class="cari form-control form-control-sm text-center"
					type="text" id="asc" style="background:#FFF;" autocomplete="off"></div>
			<div class="col-2 px-1"><input maxlength="1" placeholder="kop" class="cari form-control form-control-sm text-center"
					type="text" id="kopc" style="background:#FFF;" autocomplete="off"></div>
			<div class="col-2 px-1"><input maxlength="1" placeholder="kepala"
					class="cari form-control form-control-sm text-center" type="text" id="kepalac" style="background:#FFF;"
					autocomplete="off"></div>
			<div class="col-2 px-1"><input maxlength="1" placeholder="ekor"
					class="cari form-control form-control-sm text-center" type="text" id="ekorc" style="background:#FFF;"
					autocomplete="off"></div>
			<div class="col-2 px-1"><button id="rb" type="button" class="btn btn-dark btn-sm"
					onclick="resetSelectForm()">Clear</button></div>
		</div>
	</form>

	<form method="get" action="" class="mb-2 mt-2"></form>
	<div class="menu2" id="colormenu">
		<fieldset id="color-selector">
			<button id="btnSubmit">CLEAR</button>
			<div class="color" style="background:#ff5050;" data-color="#ff5050"></div>
			<div class="color" style="background:#ff99cc;" data-color="#ff99cc"></div>
			<div class="color" style="background:#a9d08e;" data-color="#a9d08e"></div>
			<div class="color" style="background:#9966ff;" data-color="#9966ff"></div>
			<div class="color" style="background:#66ffcc;" data-color="#66ffcc"></div>
			<div class="color" style="background:#9bc2e6;" data-color="#9bc2e6"></div>
			<div class="color" style="background:#b2b2b2;" data-color="#b2b2b2"></div>
			<div class="color" style="background:#f4b084;" data-color="#f4b084"></div>
			<div class="color eraser" data-color="eraser"></div>
		</fieldset>
	</div>
	<table id="drawing-table" class="noselect mt-2 mb-3" border="1" width="100%">

		<div id="data-hk">
			<?php
			$konten = file_get_contents('https://w3.angkanet.tv/paito-warna-hongkong/');
			$pecah1 = explode('Minggu</th>', $konten);
			$pecah2 = explode('</tbody>', $pecah1[1]);
			echo $pecah2[0];
			?>
		</div>

		</tbody>
		<thead>
			<tr>
				<td colspan="4"><b>Senin</b></td>
				<td class="asux">D</td>

				<td colspan="4"><b>Selasa</b></td>
				<td class="asux">D</td>

				<td colspan="4"><b>Rabu</b></td>
				<td class="asux">D</td>

				<td colspan="4"><b>Kamis</b></td>
				<td class="asux">D</td>

				<td colspan="4"><b>Jumat</b></td>
				<td class="asux">D</td>

				<td colspan="4"><b>Sabtu</b></td>
				<td class="asux">D</td>

				<td colspan="4"><b>Minggu</b></td>
				<td class="asux">D</td>
			</tr>
		</thead>
	</table>

	<script>
		var patType = '4d';
	</script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="script-live.js"></script>
	<script type="text/javascript" src="script-lite.js"></script>
	<script type="text/javascript" src="script-site.js"></script>


</body>

</html>
