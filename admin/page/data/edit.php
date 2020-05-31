<?php

if(isset($_POST['submit'])){
    $id_form = $_POST['form_id'];
    $jk = $_POST['jk'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];
    $tahun = $_POST['tahun'];
    $sopan_puas = $_POST['sopan_puas'];
    $sopan_ting = $_POST['sopan_ting'];
    $cepat_puas = $_POST['cepat_puas'];
    $cepat_ting = $_POST['cepat_ting'];
    $kemampuan_puas = $_POST['kemampuan_puas'];
    $kemampuan_ting = $_POST['kemampuan_ting'];
    $ketepatan_puas = $_POST['ketepatan_puas'];
    $ketepatan_ting = $_POST['ketepatan_ting'];
    $jaringan_puas = $_POST['jaringan_puas'];
    $jaringan_ting = $_POST['jaringan_ting'];
    $permintaan_puas = $_POST['permintaan_puas'];
    $permintaan_ting = $_POST['permintaan_ting'];
    $pembuatan_puas = $_POST['pembuatan_puas'];
    $pembuatan_ting = $_POST['pembuatan_ting'];
    $ais_puas = $_POST['ais_puas'];
    $ais_ting = $_POST['ais_ting'];
    $penyelesaian_puas = $_POST['penyelesaian_puas'];
    $penyelesaian_ting = $_POST['penyelesaian_ting'];
    $penanganan_puas = $_POST['penanganan_puas'];
    $penanganan_ting = $_POST['penanganan_ting'];
    $pemeliharaan_puas = $_POST['pemeliharaan_puas'];
    $pemeliharaan_ting = $_POST['pemeliharaan_ting'];
    $informasi_puas = $_POST['informasi_puas'];
    $informasi_ting = $_POST['informasi_ting'];
    $account_puas = $_POST['account_puas'];
    $account_ting = $_POST['account_ting'];
    $akun_puas = $_POST['akun_puas'];
    $akun_ting = $_POST['akun_ting'];
    $helpdesk_puas = $_POST['helpdesk_puas'];
    $helpdesk_ting = $_POST['helpdesk_ting'];
    $saran = $_POST['saran'];

    //mysqli_query($con, "INSERT INTO form (jk, status) VALUES('$jk', '$status')");
    mysqli_query($con, "UPDATE form SET jk = '$jk',
                                             status = '$status',
                                             pekerjaan = '$pekerjaan',
                                             tahun = '$tahun',
                                             sopan_puas = '$sopan_puas',
                                             sopan_penting = '$sopan_ting',
                                             kecepatan_puas = '$cepat_puas',
                                             kecepatan_penting = '$cepat_ting',
                                             kemampuan_puas = '$kemampuan_puas',
                                             kemampuan_penting = '$kemampuan_ting',
                                             ketepatan_puas = '$ketepatan_puas',
                                             ketepatan_penting = '$ketepatan_ting',
                                             jaringan_puas = '$jaringan_puas',
                                             jaringan_penting = '$jaringan_ting',
                                             permintaan_puas = '$permintaan_puas',
                                             permintaan_penting = '$permintaan_ting',
                                             pembuatan_puas = '$pembuatan_puas',
                                             pembuatan_penting = '$pembuatan_ting',
                                             AIS_puas = '$ais_puas',
                                             AIS_penting = '$ais_ting',
                                             penyelesaian_puas = '$penyelesaian_puas',
                                             penyelesaian_penting = '$penyelesaian_ting',
                                             penanganan_puas = '$penanganan_puas',
                                             penanganan_penting = '$penanganan_ting',
                                             pemeliharaan_puas = '$pemeliharaan_puas',
                                             pemeliharaan_penting = '$pemeliharaan_ting',
                                             informasi_puas = '$informasi_puas',
                                             informasi_penting = '$informasi_ting',
                                             account_puas = '$account_puas',
                                             account_penting = '$account_ting',
                                             akun_puas = '$akun_puas',
                                             akun_penting = '$akun_ting',
                                             helpdesk_puas = '$helpdesk_puas',
                                             helpdesk_penting = '$helpdesk_ting',
                                             saran = '$saran'
                                             WHERE id = '$id_form'");
    
   
    header("location: admin.php?laporan");

}

$edit = $_GET['lap-update'];
$query = mysqli_query($con, "SELECT * FROM form WHERE id = '$edit'");
$row = mysqli_fetch_assoc($query);

?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Form Data</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Input Data
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="" method="post">
                            <div class="form-check">
                                <label>Jenis Kelamin</label><br/>
                                  <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki-Laki">
                                  <label class="form-check-label" for="exampleRadios1">
                                    Laki - Laki
                                  </label>
                                  <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Perempuan">
                                  <label class="form-check-label" for="exampleRadios1">
                                    Perempuan
                                  </label>
                                </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value=""> - choose - </option>
                                    <option value="Mahasiswa"> Mahasiswa </option>
                                    <option value="Dosen"> Dosen </option>
                                    <option value="Pejabat Struktural">Pejabat Struktural</option>
                                    <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input class="form-control" type="text" name="pekerjaan" value="<?=$row['pekerjaan']?>" />
                            </div>
                            <div class="form-check">
                                <label>Berapa lama Bpk/Ibu/Sdr/i sudah bergabung dengan / mengenal UIN Syarif Hidayatullah Jakarta?</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tahun" value="< 1Thn">
                                <label class="form-check-label" for="exampleCheck1">< 1Thn</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tahun" value="> 1Thn - 5Thn">
                                <label class="form-check-label" for="exampleCheck1">> 1Thn - 5Thn</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tahun" value="> 5Thn - 10Thn">
                                <label class="form-check-label" for="exampleCheck1">> 5Thn - 10Thn</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tahun" value="> 10Thn">
                                <label class="form-check-label" for="exampleCheck1">> 10Thn</label>
                              </div>
                              <div class="row">
                                <div class="col-lg-12"><label>Kesopanan dan keramahan petugas</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sopan_puas" value="Sangat Tidak Puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sopan_puas" value="Tidak Puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sopan_puas" value="Puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sopan_puas" value="Sangat Puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                              
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sopan_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sopan_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sopan_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sopan_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>
                       <div class="row">
                                <div class="col-lg-12"><label>Kecepatan pelayanan petugas</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cepat_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cepat_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cepat_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cepat_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cepat_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cepat_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cepat_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cepat_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>

                             <div class="row">
                                <div class="col-lg-12"><label>Kemampuan petugas dalam memberikan pelayanan</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="kemampuan_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="kemampuan_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="kemampuan_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="kemampuan_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="kemampuan_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="kemampuan_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="kemampuan_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="kemampuan_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>
                       <div class="row">
                                <div class="col-lg-12"><label>Ketepatan pelaksanaan jadwal pelayanan</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ketepatan_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ketepatan_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ketepatan_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ketepatan_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ketepatan_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ketepatan_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ketepatan_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ketepatan_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div> <div class="row">
                                <div class="col-lg-12"><label>Layanan Jaringan Internet dan Intranet</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="jaringan_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="jaringan_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="jaringan_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="jaringan_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="jaringan_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="jaringan_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="jaringan_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="jaringan_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div> 
                      <div class="row">
                                <div class="col-lg-12"><label>Layanan permintaan data</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="permintaan_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="permintaan_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="permintaan_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="permintaan_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="permintaan_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="permintaan_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="permintaan_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="permintaan_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div> <div class="row">
                                <div class="col-lg-12"><label>Layanan pembuatan hosting</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pembuatan_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pembuatan_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pembuatan_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pembuatan_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pembuatan_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pembuatan_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pembuatan_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pembuatan_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div> 
                      <div class="row">
                                <div class="col-lg-12"><label>Layanan AIS</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ais_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ais_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ais_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ais_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ais_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ais_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ais_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ais_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>
                      <div class="row">
                                <div class="col-lg-12"><label>Penyelesaian masalah jaringan</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penyelesaian_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penyelesaian_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penyelesaian_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penyelesaian_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penyelesaian_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penyelesaian_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penyelesaian_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penyelesaian_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>
                      <div class="row">
                                <div class="col-lg-12"><label>Penanganan masalah pada sistem aplikasi</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penanganan_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penanganan_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penanganan_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penanganan_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penanganan_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penanganan_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penanganan_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="penanganan_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>
                      <div class="row">
                                <div class="col-lg-12"><label>Pemeliharaan (maintenance) website</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pemeliharaan_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pemeliharaan_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pemeliharaan_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pemeliharaan_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pemeliharaan_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pemeliharaan_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pemeliharaan_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pemeliharaan_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>
                      <div class="row">
                                <div class="col-lg-12"><label>Informasi pada web puskom</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="informasi_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="informasi_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="informasi_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="informasi_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="informasi_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="informasi_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="informasi_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="informasi_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>
                      <div class="row">
                                <div class="col-lg-12"><label>Pembuatan account e jurnal</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="account_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="account_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="account_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="account_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="account_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="account_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="account_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="account_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>
                      <div class="row">
                                <div class="col-lg-12"><label>Pembuatan akun email uin</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="akun_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="akun_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="akun_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="akun_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="akun_ting" value="sangat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="akun_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="akun_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="akun_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>
                      <div class="row">
                                <div class="col-lg-12"><label>Layanan helpdesk online</label></div>
                              <div class="col-lg-6">  
                                <div class="form-check">
                                <label>Kepuasaan</label><br/>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="helpdesk_puas" value="sangat tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="helpdesk_puas" value="tidak puas">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="helpdesk_puas" value="puas">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="helpdesk_puas" value="sangat puas">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                             </div>
                         </div>
                              <div class="col-lg-6">
                                <label>Kepentingan</label><br/>
                                 <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="helpdesk_ting" value="sanat tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 1 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="helpdesk_ting" value="tidak penting">
                                <label class="form-check-label" for="exampleCheck1"> 2 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="helpdesk_ting" value="penting">
                                <label class="form-check-label" for="exampleCheck1"> 3 </label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="helpdesk_ting" value="sangat penting">
                                <label class="form-check-label" for="exampleCheck1"> 4 </label>
                               </div>
                          </div>
                      </div>


                            <div class="form-group">
                                <label>Saran & Kritik</label>
                                <textarea class="form-control" rows="3" name="saran" value="saran"></textarea>
                            </div>
                        
                            <button type="submit" name="submit" class="btn btn-success">Edit</button>
                            <input type="hidden" name="form_id" value="<?=$row['id'];?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>