<?php
    $kodeMK = array("11S3109", "11S3101", "10S3109", "11S3116", "11S3112","11S3105");

    $namaMK = array("Pengembangan Aplikasi Berbasis Web", "Analisis dan Perancangan Perangkat Lunak",
        "Kecerdasan Buatan", "Teori Bahasa Formal dan Automata", "Pengujian dan Penjaminan Mutu Perangkat Lunak",
        "Kriptografi dan Keamanan Informasi");

    $sks = array(4, 3, 3, 3, 3, 3);

    $nim= "11S20026";

    $name = "Ivanston Simbolon";
?>



<!DOCTYPE html>
<head>
    <title>KRS_ITDEL</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body>
    <h3>Kartu Rencana Studi (KRS)</h3>
    <hr style="height:5px; background-color:grey">

    <table cellspacing="9">
        <tr>
            <td width="73%"><b>NIM</b></td>
            <td>
                <b>
                    <?php echo $nim; ?>
                </b>
            </td>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td>
                <b>
                    <?php echo $name; ?>
                </b>
            </td>
        </tr>
    </table>
    <br><br>

    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Kode Mata Kuliah </th>
      <th scope="col">Nama Mata Kuliah </th>
      <th scope="col">SKS </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
     
      <?php
            for ($i=0; $i <count($kodeMK); $i++) { 
                echo "$kodeMK[$i]";
                echo "<br>";
            }
        ?>
      </td>
      <td>
      <?php
            for ($i=0; $i <count($namaMK); $i++) { 
                echo "$namaMK[$i]";
                echo "<br>";
            }
        ?>
      </td>
      <td>
      <?php
            for ($i=0; $i <count($sks); $i++) { 
                echo "$sks[$i]" ;
                echo "<br>";
            }
        ?>
      </td>
    </tr>
    <tr>
      <td colspan="2">TOTAL</td>
      <td>
      <?php
            echo array_sum($sks);
        ?>
      </td>
    </tr>
  </tbody>
</table>    
</body>
</html>