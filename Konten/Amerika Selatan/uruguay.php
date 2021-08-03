<html>
<head>
    <title>Uruguay | Geografi YF</title>
    <meta name="viewport" content="width =device-width, initial-scale =1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#home").click(function(){
            $("body").animate({ scrollLeft: 0},"slow");
        });
        $("#about").click(function(){
            $("body").animate({ scrollLeft: 1500},"slow");
        });
        $("#contact").click(function(){
            $("body").animate({ scrollLeft: 3000},"slow");
        });
    });
    </script>
    <style>
        body{
            overflow-x: hidden;
            overflow-y: hidden;
            font-family: Century Gothic;
            color: white;
        }
        h3 {
            margin-left: 10px;
            color: white;
        }

        p {
            text-align: justify;
            padding: 10px;
        }
        #container{
            position:absolute;
            top:0;
            left:0;
            width:4500;
            height:100%;
        }
        .content{
            width:1500;
            height:100%;
            float:left;
        }
        .home{
            background-image: url(Gambar/2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        header{
          margin: 0;
          padding: 0;
          background: rgba(130, 23, 23, 0.8);
          padding: 10px 20px;
          position: fixed;
          width: 1450;
          height: 15%;
          z-index: 1;
        }
        header img{
          margin-top: 4px;
          float: left;
          width: 125px;
          height: 83.33px;
        }
        header h1{
          margin-top:25px;
          margin-left:175px;
          letter-spacing: 10px;
          color: white;
        }

        .home .box1 {
          position: absolute;
          margin-left:280px;
          margin-top:160px;
          width: 750;
          height: auto;
          background-color: rgba(0, 0, 0, 0.8);
        }
        table, td, th {
          border-bottom: 1px solid #ddd;
          padding: 10px;
        }

        tr:hover {
          background-color: grey;}

        table {
          border-collapse: collapse;
          width: 100%;
        }

        .about{
            background-image: url(Gambar/gambar4.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .about .box1 {
          position: absolute;
          margin-left:20px;
          margin-top:160px;
          padding-right: 75px;
          width: 1000;
          height: auto;
          background-color: rgba(0, 0, 0, 0.8);
          overflow-y: auto;
        }
        .contact{
            background-image: url(Gambar/gambar13.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .contact .box1 {
          position: absolute;
          margin-left:20px;
          margin-top:160px;
          padding: 0px;
          width: 1200;
          height: auto;
          background-color: rgba(0, 0, 0, 0.8);
          overflow-y: auto;
          line-height: 20px;
        }
          #menu{
            position:fixed;
            top:100;
            left:40%;
            background-color:#728280;
            z-index:1000;
            padding:10px;
            cursor:pointer;
            border-radius:3px;
        }

        .link {
            padding: 0 5px;
            color: #ffffff;
        }

        
    </style>
</head>
<body>
    
    <div id="menu">
        <span class="link" id="home">Info</span>
        <span class="link" id="about">Geografi</span>
        <span class="link" id="contact">Politik</span>
    </div> 

    <div id="container">
        <div class="content home" id="home">
        <header>
        <img src="uruguay.png"> 
        <h1> Uruguay </h1>
        </header>

        <div class="box1">
        <table class="info-negara">
            <h3>Info Negara : </h3>
            <tr>
              <td>Negara</td>
              <td> : </td>
              <td>Uruguay</td>
            </tr>
            <tr>
              <td>Ibukota</td>
              <td> : </td>
              <td>Montevideo</td>
            </tr>
             <tr>
              <td>Luas Wilayah</td>
              <td> : </td>
              <td>176.215 km2</td>
            </tr>
            <tr>
              <td>Lagu Kebangsaan </td>
              <td> : </td>
              <td>Himno Nacional de Uruguay</td>
            </tr>
            <tr>
              <td>Bahasa </td>
              <td> : </td>
              <td>Spanyol</td>
            </tr>
            <tr>
              <td>Mata Uang   </td>
              <td> : </td>
              <td>Peso</td>
            </tr>
            <tr>
              <td>Bentuk Negara</td>
              <td> : </td>
              <td>Republik</td>
            <tr>
              <td>Kepala Negara</td>
              <td> : </td>
              <td>Presiden </td>
            </tr>
            <tr>
              <td>Kode Telepon</td>
              <td> : </td>
              <td>598 </td>
            </tr>
            <tr>
              <td>Zona Waktu</td>
              <td> : </td>
              <td>GMT -3 </td>
            </tr>
            </table>
        </div>
    </div>


        <div class="content about" id="about">
            <div class="box1">
            <h3>Geografi</h3>
            <p> Uruguay adalah sebuah negara yang terletak di bagian selatan benua Amerika Selatan. Negara yang secara astronomis berada diantara 50°BT – 60°BT dan 30°LS  – 40°LS ini berbatasan dengan Brasil di sebelah utaranya dan berbatasan dengan Argentina disebelah baratnya. Sedangkan disebelah selatan Uruguay adalah Samudera Atlantik. Ibukota Uruguay adalah kota Montevideo.</p>
            <p> Negara yang bernama lengkap Oriental Republic of Uruguay atau Republik Timur Uruguay ini memiliki luas wilayah sebesar 176.215km2 dengan jumlah penduduk sebanyak 3.360.148 jiwa (estimasi Juli 2017). Mayoritas penduduk Uruguay adalah etnis kulit putih (88%), Mestizo (8%) dan kulit hitam (4%). Sebagian besar penduduknya adalah beragama Katolik Roma (47,1%). Bahasa resmi Uruguay adalah bahasa Spanyol. </p>

            </div>
        </div>
        <div class="content contact" id="contact">
            <div class="box1">
            <h3> Politik</h3> 
            <p> Sistem Pemerintahan yang dianut oleh Uruguay adalah sistem pemerintahan Republik Presidensil yang kepala negara dan kepala pemerintahannya adalah Presiden. Presiden dan Wakil Presiden Uruguay dipilih secara langsung oleh rakyatnya untuk masa jabatan 5 tahun. Uruguay dibagi menjadi 19 departemen yang pemerintahan lokalnya mereplikasi pembagian kekuasaan eksekutif dan legislatif. Setiap departemen memilih otoritasnya sendiri melalui sistem hak pilih universal. Otoritas eksekutif departemen berada di inspektur dan otoritas legislatif di dewan departemen. </p>
            </div>
        </div>
    </div>
   
</body>
</html>
