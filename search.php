<?php
// Menghubungkan dengan file functions.php
require 'functions.php';

// Jika tombol cari ditekan
if(isset($_POST["cari"]) ) {
  $negara = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Search | Geografi YF</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<h1>GEOGRAFI</h1>
<a href="home.html"><img src="Gambar/logo.png"></a>
<style>
body {
background-image: url(Gambar/gambar23.jpg);
background-size: cover; 
background-repeat: no-repeat;
font-family: Century Gothic;"
}
.menu i {
position: absolute;
left: 0;
top: 0;
cursor: pointer;
}
.menu i a{
text-decoration: none;
display: inline;
color: white;
transition: 0.5s ease;
}
.menu i a:hover{
background-color: white;
color: black;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  color: white;
  transition: 2s;
  overflow-x: hidden;
  padding-top: 60px;
}

.sidenav a {
  padding: 16px 16px 16px 32px;
  text-decoration: none;
  font-size: 16px;
  color: white;
  display: block;
  transition: 0.1s ease;
}

.sidenav p{
padding-left: 10px;
font-size: 16px;
}

.sidenav p i{
position: absolute;
}
.sidenav i{
  margin-left: 5px;
}

.sidenav a:hover {
  background-color: white;
  color: black;
}

.sidenav .close{
  position: absolute;
  right: 0;
  top: 0;
  cursor: pointer;
  padding: 0;
  color: crimson;
}

h1{
  text-align: center;
  color: white;
  font-size: 80px;
  margin-top: 300px;
  margin-right: 180px;
  letter-spacing: 10px;
}

img {
  float: right;
  height: 130px;
  width: auto;
  margin-top: -170px;
  margin-right: 400px;
}

img:hover {
  opacity: 0.8;
}

.link a {
  border-top: 1px solid white;
}

.home a {
  color: crimson;
}

.info {
  color: white;
  position: absolute;
  display: inline-block;
  bottom: 0;
  right: 1%;
  cursor: default;
  font-size: 12px;
  margin-bottom: 5px;
}

.info .teks-info {
  visibility: hidden;
  width: 150px;
  background-color: black;
  color: white;
  text-align: center;
  border-radius: 8px;
  padding: 8px;
  position: absolute;
  z-index: 1;
  bottom: 110%;
  left: 80%;
  margin-left: -170px;
}

.info .teks-info a{
  text-decoration: none;
  color: white;
}


.info:hover .teks-info {
  visibility: visible;
}

.search {
  float:right;
  color: white;
}
input[type=text]{
  background-color: transparent;
  position: absolute;
  top: 0;
  right: 4%;
  margin-top: 10px;
  color: white;
  width: 150px;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;
  padding: 10px 10px 10px 10px;
  -webkit-transition : width 0.5s ease;
  transition: width 0.5s ease;
}

input[type=text]:focus {
  width : 300px;
}
.search-button {
  background-color: transparent;
  position: absolute;
  top: 0;
  right: 1%;
  margin-top: 18px;
  margin-right: 10px; 
  padding: 0;
  border: none;
  color: white; 
  font-size: 24px;
  cursor: pointer;
}

</style>

<div id="mysidenav" class="sidenav">    
  <a href="javascript:void(0)" class="close" onclick="closeNav()">
  <i class="material-icons" style="font-size:50px color:white">close</i> </a>
  Choose<br>
  Continent<br>
  <br>
  <div class="link">
  <a href="Konten/asia.html">Asia</a>
  <a href="Konten/america.html">America</a>
  <a href="Konten/africa.html">Africa</a>
  <a href="Konten/australia.html">Oceania</a>
  <a href="Konten/eropa.html">Europe</a>
  <div class="home">
  <a href="home.html">Home</a>
  </div>
  </div>
  </div>

<div class="search">
<form action="" method="post">
<input type="text" name="keyword" placeholder="Search.." autocomplete="off" autofocus>
<button type="submit" name="cari" class="search-button" style="color: white font-size:100px"> <i class="material-icons">search </i>
</button>
</form>
</div>

<div class="menu">
<i class="material-icons" style="font-size:40px; "> <a href="#" onclick="openNav()">menu</a> </i>

<script>
function openNav(){
	document.getElementById("mysidenav").style.width = "250px";
}
function closeNav(){
	document.getElementById("mysidenav").style.width = "0";
}
</script>

</div>

<div class="info">
<i class="material-icons" style="font-size:50px color:white">info </i>
 <span class="teks-info"> <a href=https://id.wikipedia.org/wiki/Kualalumpur>Kuala Lumpur|Malaysia </a></span>

</div>
</body>
</html>