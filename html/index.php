<br>

<head>
  <title>
    Mi primer título
  </title>

  <style>
    * {
      font: 20px sans-serif;
    }

    body{
      background-color: rgb(50, 138, 148);      
    }

    table  {
      border: 1px solid #000;
      width: 90%;
    }

    td {
      border: 1px solid #000;
      padding: 5px;
      margin: 10px;
    }

    .titulo {
      background-color: rgb(0, 0, 0);
      color: rgb(255, 255, 255);
    }
  </style>
</head>
<body >
  <center>
    <table border="0" width="600px">
      <!-- tr = table row (fila de tabla)-->
      <tr height="150px">
        <td>
          <img src="banner.jpg" />
        </td>
      </tr>

      <tr height="400px">
        <td>

          <table >
            <tr height="200px">
              <td width="200px">
                <img src="steven_tyler.jpeg">
              </td>

              <td>
                <h2 class="titulo">El mejor cantante de rock internacional!</h2>
                <p>
                  <b>Steven Tyler</b> es un cantante, compositor, productor musical, productor de música, y productor de
                  sonido de la banda de rock de Los Lonely
                </p>

                <p>
                  Aerosmith es una banda de rock estadounidense formada en Los Ángeles, California, en 1994. Su primer
                  álbum, Aerosmith, fue lanzado en 1994 como una

                </p>

                <p class="titulo">
                  Si queres más info visita la pagina oficial de <a href="https://www.aerosmith.com/">Aerosmith</a>
                  <!-- anchors -->
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>

    <?php
      for ($i= 0; $i < 10; $i++) { 
        echo "Aguante la renga carajo!!!!<br>";
      }
    ?>
  </center>
</body>

</html>`