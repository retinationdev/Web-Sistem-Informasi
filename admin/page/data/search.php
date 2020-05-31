<?php
if(isset($_POST['btn_search'])){
  $_SESSION['session_search'] = $_POST['keyword'];
  $keyword = $_SESSION['session_search'];
}else{
  $keyword = $_SESSION['session_search'];
}
$query = mysqli_query($con, "SELECT * FROM form WHERE status LIKE '%$keyword%'");
?>

<div class="row">
<div class="col-lg-12">
        <form class="navbar-form navbar-left" role="search" method="post" action="admin.php?search_form">
        <div class="form-group">
        <input type="text" name="keyword" class="form-control" placeholder="Search...">
        </div>
        <button type="submit" name="btn_search" class="btn btn-default">Search</button>
      </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h4>Hasil Pencarian</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12"> 
        <div class="panel panel-default">
            <div class="panel-heading">
                List Data
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <p>Jenis kelamin: </p>
                    <p>status: </p>
                    <p>pekerjaan: </p>
                    <p>tahun: </p>
                    <p>Kesopanan dan keramahan petugas (Kepuasaan): </p>
                    <p>Kesopanan dan keramahan petugas (kepentingan): </p>
                    <p>Kecepatan pelayanan petugas (kepuasan): </p>
                    <p>Kecepatan pelayanan petugas (kepentingan): </p>
                    <p>Kemampuan petugas dalam memberikan pelayanan (kepuasan): </p>
                    <p>Kemampuan petugas dalam memberikan pelayanan (kepentingan): </p>
                    <p>Ketepatan pelaksanaan jadwal pelayanan (kepuasan): </p>
                    <p>Ketepatan pelaksanaan jadwal pelayanan (kepentingan): </p>
                    <p>Layanan Jaringan Internet dan Intranet (kepuasan): </p>
                    <p>Layanan Jaringan Internet dan Intranet (kepentingan): </p>
                    <p>Layanan permintaan data (kepuasan): </p>
                    <p>Layanan permintaan data (kepentingn): </p>
                    <p>Layanan pembuatan hosting (kepuasan): </p>
                    <p>Layanan pembuatan hosting (kepentingan): </p>
                    <p>Layanan AIS (kepuasan): </p>
                    <p>Layanan AIS (kepentingan): </p>
                    <p>Penyelesaian masalah jaringan (kepuasan): </p>
                    <p>Penyelesaian masalah jaringan (kepentingan): </p>
                    <p>Penanganan masalah pada sistem aplikasi (kepuasan): </p>
                    <p>Penanganan masalah pada sistem aplikasi (kepentingan): </p>
                    <p>Pemeliharaan (maintenance) website (kepuasan): </p>
                    <p>Pemeliharaan (maintenance) website (kepentingan): </p>
                    <p>Informasi pada web puskom (kepuasan): </p>
                    <p>Informasi pada web puskom (kepentingan): </p>
                    <p>Pembuatan account e jurnal (kepuasan): </p>
                    <p>Pembuatan account e jurnal (kepentingan): </p>
                    <p>Pembuatan akun email uin (kepuasan): </p>
                    <p>Pembuatan akun email uin (kepentingan): </p>
                    <p>Layanan helpdesk online (kepuasan): </p>
                    <p>Layanan helpdesk online (kepentingan): </p>
                    <p>Update</p>
                    <p>Delete</p>


                </div>
                <div class="col-lg-6">
                    <?php
                    if(mysqli_num_rows($query)){
                        while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <p><?=$row['jk'];?></p>
                    <p><?=$row['status'];?></p>
                    <p><?=$row['pekerjaan'];?></p>
                    <p><?=$row['tahun'];?></p>
                    <p><?=$row['sopan_puas'];?></p>
                    <p><?=$row['sopan_penting'];?></p>
                    <p><?=$row['kecepatan_puas'];?></p>
                    <p><?=$row['kecepatan_penting'];?></p>
                    <p><?=$row['kemampuan_puas'];?></p>
                    <p><?=$row['kemampuan_penting'];?></p>
                    <p><?=$row['ketepatan_puas'];?></p>
                    <p><?=$row['ketepatan_penting'];?></p>
                    <p><?=$row['jaringan_puas'];?></p>
                    <p><?=$row['jaringan_penting'];?></p>
                    <p><?=$row['permintaan_puas'];?></p>
                    <p><?=$row['permintaan_penting'];?></p>
                    <p><?=$row['pembuatan_puas'];?></p>
                    <p><?=$row['pembuatan_penting'];?></p>
                    <p><?=$row['AIS_puas'];?></p>
                    <p><?=$row['AIS_penting'];?></p>
                    <p><?=$row['penyelesaian_puas'];?></p>
                    <p><?=$row['penyelesaian_penting'];?></p>
                    <p><?=$row['penanganan_puas'];?></p>
                    <p><?=$row['penanganan_penting'];?></p>
                    <p><?=$row['pemeliharaan_puas'];?></p>
                    <p><?=$row['pemeliharaan_penting'];?></p>
                    <p><?=$row['informasi_puas'];?></p>
                    <p><?=$row['informasi_penting'];?></p>
                    <p><?=$row['account_puas'];?></p>
                    <p><?=$row['account_penting'];?></p>
                    <p><?=$row['akun_puas'];?></p>
                    <p><?=$row['akun_penting'];?></p>
                    <p><?=$row['helpdesk_puas'];?></p>
                    <p><?=$row['helpdesk_penting'];?></p>
                    <p><?=$row['saran'];?></p>
                    <p><a href="admin.php?lap-update=<?=$row['id'];?>" class="btn btn-primary btn-xs" type="button">Update</a> | <a href="admin.php?lap-delete=<?=$row['id'];?>" class="btn btn-primary btn-xs" type="button">Delete</a></p>

                    <?php }?>
                    <?php }?>
                </div>
              <div class="row">
                  <div class="col-lg-12" style="border: 1px solid #333"></div>
              </div>
            </div>