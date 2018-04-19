<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Visión Computacional</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Redes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Visión Computacional</h1>
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>

    <section>
        <div class="container">
            <div class="p-5">
                <h2 class="display-4">Información </h2>
                <p>Datos almacenados en la Base de Datos.</p>
            </div>
            <div class="row align-items-center">

    <?php
        $user="jsrnhxpmwoghlm";
        $password= "4b62812968d58f5876d83ceacb88412c180ed9306027399064d3cbfae0bc02b0";
        $dbname="d596l8fbotv9h";
        $port= "5432";
        $host= 'ec2-54-83-19-244.compute-1.amazonaws.com';


        $strconn= "host=$host port=$port user=$user password=$password dbname=$dbname ";

        $conn = pg_connect($strconn) or die('{"estado":0}');

        $query= "select nombreImagen, figuraImagen, tamannoFigura from datosImagen";
        $results= pg_query( $conn,$query) ;

        echo " <table class='egt' border='1px>' cellpadding='20px' align='center'";
              echo "<td></td><td><strong>Imagen</strong></td><td><strong>Figura</strong></td><td><strong>Tamaño de la figura</strong></td><br>";
              while ($row = pg_fetch_row($results)) {
                  echo "<tr>";
                  echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><br>";
                  echo "</tr>";
              }
              echo "</table>";

        pg_close($conn);

    ?>
            </div>
        </div>x
    </section>

    <style>
    table {
       width: 100%;

    }
    th, td {
       width: 25%;
    }
    </style>

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Proyecto Redes - TEC 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
