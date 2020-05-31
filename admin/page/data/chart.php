<?php

$query_kepuasan = mysqli_query($con, "SELECT SUM(sopan_puas) AS jumlah_a, SUM(kecepatan_puas) AS jumlah_b, SUM(kemampuan_puas) AS jumlah_c, SUM(ketepatan_puas) AS jumlah_d, SUM(jaringan_puas) AS jumlah_e, SUM(permintaan_puas) AS jumlah_f, SUM(pembuatan_puas) AS jumlah_g, SUM(AIS_puas) AS jumlah_h, SUM(penyelesaian_puas) AS jumlah_i, SUM(penanganan_puas) AS jumlah_j, SUM(pemeliharaan_puas) AS jumlah_k, SUM(informasi_puas) AS jumlah_l, SUM(account_puas) AS jumlah_m, SUM(akun_puas) AS jumlah_n, SUM(helpdesk_puas) AS jumlah_o FROM form GROUP BY jk");
$row = mysqli_fetch_assoc($query_kepuasan);

$query_penting = mysqli_query($con, "SELECT SUM(sopan_penting) AS jumlah_a, SUM(kecepatan_penting) AS jumlah_b, SUM(kemampuan_penting) AS jumlah_c, SUM(ketepatan_penting) AS jumlah_d, SUM(jaringan_penting) AS jumlah_e, SUM(permintaan_penting) AS jumlah_f, SUM(pembuatan_penting) AS jumlah_g, SUM(AIS_penting) AS jumlah_h, SUM(penyelesaian_penting) AS jumlah_i, SUM(penanganan_penting) AS jumlah_j, SUM(pemeliharaan_penting) AS jumlah_k, SUM(informasi_penting) AS jumlah_l, SUM(account_penting) AS jumlah_m, SUM(akun_penting) AS jumlah_n, SUM(helpdesk_penting) AS jumlah_o FROM form GROUP BY jk");
$row_pen = mysqli_fetch_assoc($query_penting);

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data Kuisoner', 'Kepuasaan', 'Kepentingan'],
          ['2018', <?=$row['jumlah_a'] + $row['jumlah_b'] + $row['jumlah_c'] + $row['jumlah_d'] + $row['jumlah_e'] + $row['jumlah_f'] + $row['jumlah_g'] + $row['jumlah_h'] + $row['jumlah_i'] + $row['jumlah_j'] + $row['jumlah_k'] + $row['jumlah_l'] + $row['jumlah_m'] + $row['jumlah_n'] + $row['jumlah_o'];?>, <?=$row_pen['jumlah_a'] + $row_pen['jumlah_b'] + $row_pen['jumlah_c'] + $row_pen['jumlah_d'] + $row_pen['jumlah_e'] + $row_pen['jumlah_f'] + $row_pen['jumlah_g'] + $row_pen['jumlah_h'] + $row_pen['jumlah_i'] + $row_pen['jumlah_j'] + $row_pen['jumlah_k'] + $row_pen['jumlah_l'] + $row_pen['jumlah_m'] + $row_pen['jumlah_n'] + $row_pen['jumlah_o'];?>]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>