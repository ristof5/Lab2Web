<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        *{
            font-family: 'Open Sans MS', 'Roboto Mono';
        }

        body{
            background-color: #006a50;
        }

        .container{
            text-align: center;
            margin-top: 100px;
        }

        h2, a{
            color: black;
        }

        h2{
            font-size: 33px;
        }


    </style>
</head>
<body>
    <div class="container">
        <?php
            $name = $_POST['name'];
            $tanggal = new DateTime($_POST['tanggal']);
            $hari_ini = new DateTime('today');
            $pekerjaan = $_POST['pekerjaan'];
            $gaji = $_POST['gaji'];

            if($tanggal >$hari_ini){
                $thn = 'y';
                $bln = 'm';
                $tgl = 'd';
            }
            $thn =$hari_ini->diff($tanggal)->y;
            $bln =$hari_ini->diff($tanggal)->m;
            $tgl =$hari_ini->diff($tanggal)->d;

            echo "<h2> Hallo $name, Anda Berumur $thn tahun $bln bulan $tgl hari, Anda bekerja sebagai $pekerjaan dengan gaji $gaji</h2>";
            echo '<a href="http://localhost/lab2_php_dasar/biodata.html" target="_blank">back to menu</a>';
        ?>
    </div>
    
</body>
</html>