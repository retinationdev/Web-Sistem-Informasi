<?php
$per_page = 25;
$cur_page = 1;

if(isset($_GET['page'])){
    $cur_page = $_GET['page'];
    $cur_page = ($cur_page > 1) ? $cur_page : 1; 
}
$total_data = mysqli_num_rows(mysqli_query($con, "SELECT * FROM form"));
$total_page = ceil($total_data / $per_page);
$offset = ($cur_page - 1) * $per_page;



$query = mysqli_query($con, "SELECT * FROM form ORDER BY id DESC LIMIT $per_page OFFSET $offset");
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Laporan Kuisioner</h1>
    </div>
</div>
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
        <div class="panel panel-default">
            <div class="panel-heading">
                List Data
            </div>
            <div class="panel-body">
               
                <div class="col-lg-12">
                     <?php
                    if(mysqli_num_rows($query)>=1){
                        while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <p>Jenis kelamin: <?=$row['jk'];?></p>
                    <p>status: <?=$row['status'];?><</p>
                    <p>pekerjaan: <?=$row['pekerjaan'];?> </p>
                    <p>tahun: <?=$row['tahun'];?></p>
                    <p>Kesopanan dan keramahan petugas (Kepuasaan): <?=$row['sopan_puas'];?> </p>
                    <p>Kesopanan dan keramahan petugas (kepentingan): <?=$row['sopan_penting'];?> </p>
                    <p>Kecepatan pelayanan petugas (kepuasan): <?=$row['kecepatan_puas'];?> </p>
                    <p>Kecepatan pelayanan petugas (kepentingan): <?=$row['kecepatan_penting'];?> </p>
                    <p>Kemampuan petugas dalam memberikan pelayanan (kepuasan): <?=$row['kemampuan_puas'];?> </p>
                    <p>Kemampuan petugas dalam memberikan pelayanan (kepentingan): <?=$row['kemampuan_penting'];?> </p>
                    <p>Ketepatan pelaksanaan jadwal pelayanan (kepuasan): <?=$row['ketepatan_puas'];?> </p>
                    <p>Ketepatan pelaksanaan jadwal pelayanan (kepentingan): <?=$row['ketepatan_penting'];?> </p>
                    <p>Layanan Jaringan Internet dan Intranet (kepuasan): <?=$row['jaringan_puas'];?> </p>
                    <p>Layanan Jaringan Internet dan Intranet (kepentingan): <?=$row['jaringan_penting'];?> </p>
                    <p>Layanan permintaan data (kepuasan): <?=$row['permintaan_puas'];?> </p>
                    <p>Layanan permintaan data (kepentingn): <?=$row['permintaan_penting'];?> </p>
                    <p>Layanan pembuatan hosting (kepuasan): <?=$row['pembuatan_puas'];?> </p>
                    <p>Layanan pembuatan hosting (kepentingan): <?=$row['pembuatan_penting'];?> </p>
                    <p>Layanan AIS (kepuasan): <?=$row['AIS_puas'];?> </p>
                    <p>Layanan AIS (kepentingan): <?=$row['AIS_penting'];?> </p>
                    <p>Penyelesaian masalah jaringan (kepuasan): <?=$row['penyelesaian_puas'];?> </p>
                    <p>Penyelesaian masalah jaringan (kepentingan): <?=$row['penyelesaian_penting'];?> </p>
                    <p>Penanganan masalah pada sistem aplikasi (kepuasan): <?=$row['penanganan_puas'];?> </p>
                    <p>Penanganan masalah pada sistem aplikasi (kepentingan): <?=$row['penanganan_penting'];?> </p>
                    <p>Pemeliharaan (maintenance) website (kepuasan): <?=$row['pemeliharaan_puas'];?> </p>
                    <p>Pemeliharaan (maintenance) website (kepentingan): <?=$row['pemeliharaan_penting'];?> </p>
                    <p>Informasi pada web puskom (kepuasan): <?=$row['informasi_puas'];?> </p>
                    <p>Informasi pada web puskom (kepentingan): <?=$row['informasi_penting'];?> </p>
                    <p>Pembuatan account e jurnal (kepuasan): <?=$row['account_puas'];?> </p>
                    <p>Pembuatan account e jurnal (kepentingan): <?=$row['account_penting'];?> </p>
                    <p>Pembuatan akun email uin (kepuasan): <?=$row['akun_puas'];?> </p>
                    <p>Pembuatan akun email uin (kepentingan): <?=$row['akun_penting'];?> </p>
                    <p>Layanan helpdesk online (kepuasan): <?=$row['helpdesk_puas'];?> </p>
                    <p>Layanan helpdesk online (kepentingan): <?=$row['helpdesk_penting'];?> </p>
                    <p>Saran : <?=$row['saran'];?></p>
                    <p>Update : <a href="admin.php?lap-update=<?=$row['id'];?>" class="btn btn-primary btn-xs" type="button">Update</a></p>
                    <p>Delete : <a href="admin.php?lap-delete=<?=$row['id'];?>" class="btn btn-primary btn-xs" type="button">Delete</a></p>
  </div>                      
              <div class="row">
                  <div class="col-lg-12" style="border: 1px solid #333"></div>
              </div>
              <?php }?>
                    <?php }?>
            </div>

        </div>
    </div>
</div>

 <?php if(isset($total_page)){ ?>
  <?php if($total_page > 1){?>

<nav class="text-center">
  <ul class="pagination">
  <?php if($cur_page > 1){?>
    <li>
        <a href="index.php?page=<?php echo $cur_page - 1;?>" aria-label="Previous">
            <span aria-hidden="true">Prev</span>
        </a>
    </li>
    <?php }else{ ?>
      <li class = "disabled"><span aria-hidden="true">Prev</span></li>
    <?php } ?>
    <?php if($cur_page < $total_page){?>
    <li>
      <a href="index.php?page=<?php echo $cur_page + 1;?>" aria-label="Next">
        <span aria-hidden="true">Next</span>
      </a>
    </li>
    <?php }else{ ?>
       <li class = "disabled"><span aria-hidden="true">Next</span></li>
       <?php } ?>
  </ul>
</nav>

<?php } ?>
<?php } ?>
    </div>
</div>