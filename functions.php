<?php
function cari($keyword){
	$query = "SELECT * FROM negara
				WHERE
				nama LIKE '$keyword'";

				if ($keyword == 'indonesia') {
					header("location: Konten/Asia/indonesia.php");
				}
				if ($keyword == 'india') {
					header("location: Konten/Asia/india.php");
				}
				if ($keyword == 'iran') {
					header("location: Konten/Asia/iran.php");
				}
				if ($keyword == 'malaysia') {
					header("location: Konten/Asia/malaysia.php");
				}
				if ($keyword == 'singapura') {
					header("location: Konten/Asia/singapura.php");
				}
				if ($keyword == 'thailand') {
					header("location: Konten/Asia/thailand.php");
				}
				if ($keyword == 'filipina') {
					header("location: Konten/Asia/filipina.php");
				}
				if ($keyword == 'amerika serikat') {
					header("location: Konten/Amerika Utara/amerika_serikat.php");
				}
				if ($keyword == 'kanada') {
					header("location: Konten/Amerika Utara/kanada.php");
				}
				if ($keyword == 'meksiko') {
					header("location: Konten/Amerika Utara/meksiko.php");
				}
				if ($keyword == 'kosta rika') {
					header("location: Konten/Amerika Utara/kostarika.php");
				}
				if ($keyword == 'kuba') {
					header("location: Konten/Amerika Utara/kuba.php");
				}
				if ($keyword == 'panama') {
					header("location: Konten/Amerika Utara/panama.php");
				}
				if ($keyword == 'honduras') {
					header("location: Konten/Amerika Utara/honduras.php");
				}
				if ($keyword == 'elsalvador') {
					header("location: Konten/Amerika Utara/elsalvador.php");
				}
				if ($keyword == 'argentina') {
					header("location: Konten/Amerika Selatan/argentina.php");
				}
				if ($keyword == 'bolivia') {
					header("location: Konten/Amerika Selatan/bolivia.php");
				}
				if ($keyword == 'brazil') {
					header("location: Konten/Amerika Selatan/brazil.php");
				}
				if ($keyword == 'chile') {
					header("location: Konten/Amerika Selatan/chili.php");
				}
				if ($keyword == 'kolombia') {
					header("location: Konten/Amerika Selatan/kolombia.php");
				}
				if ($keyword == 'peru') {
					header("location: Konten/Amerika Selatan/peru.php");
				}
				if ($keyword == 'uruguay') {
					header("location: Konten/Amerika Selatan/uruguay.php");
				}
				if ($keyword == 'venezuela') {
					header("location: Konten/Amerika Selatan/venezuela.php");
				}
				if ($keyword == 'afrika selatan') {
					header("location: Konten/Afrika/afrika_selatan.php");
				}
				if ($keyword == 'aljazair') {
					header("location: Konten/Afrika/aljazair.php");
				}
				if ($keyword == 'ghana') {
					header("location: Konten/Afrika/ghana.php");
				}
				if ($keyword == 'maroko') {
					header("location: Konten/Afrika/moroko.php");
				}
				if ($keyword == 'mesir') {
					header("location: Konten/Afrika/mesir.php");
				}
				if ($keyword == 'nigeria') {
					header("location: Konten/Afrika/nigeria.php");
				}
				if ($keyword == 'pantai gading') {
					header("location: Konten/Afrika/pantai_gading.php");
				}
				if ($keyword == 'senegal') {
					header("location: Konten/Afrika/senegal.php");
				}
				if ($keyword == 'tunisia') {
					header("location: Konten/Afrika/tunisia.php");
				}
				if ($keyword == 'austria') {
					header("location: Konten/Eropa/austria.php");
				}
				if ($keyword == 'belgia') {
					header("location: Konten/Eropa/belgia.php");
				}
				if ($keyword == 'ceko') {
					header("location: Konten/Eropa/ceko.php");
				}
				if ($keyword == 'prancis') {
					header("location: Konten/Eropa/prancis.php");
				}
				if ($keyword == 'italia') {
					header("location: Konten/Eropa/italia.php");
				}
				if ($keyword == 'jerman') {
					header("location: Konten/Eropa/jerman.php");
				}
				if ($keyword == 'portugal') {
					header("location: Konten/Eropa/portugal.php");
				}
				if ($keyword == 'rusia') {
					header("location: Konten/Eropa/rusia.php");
				}
				if ($keyword == 'spanyol') {
					header("location: Konten/Eropa/spanyol.php");
				}
				if ($keyword == 'australia') {
					header("location: Konten/Australia/australia.php");
				}
				if ($keyword == 'fiji') {
					header("location: Konten/Australia/fiji.php");
				}
				if ($keyword == 'selandia baru') {
					header("location: Konten/Australia/selandia_baru.php");
				}
	return query($query);
}