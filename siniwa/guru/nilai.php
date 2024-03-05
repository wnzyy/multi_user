<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../login-guru.php');	
} else {
	include "../conn.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Penilaian Siswa">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>SINIWA | Sistem Informasi Nilai Siswa</title>
    <!-- Bootstrap core CSS -->
    <link href="../admin/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../admin/assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../admin/assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="../admin/assets/css/style.css" rel="stylesheet">
    <link href="../admin/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>SINIWA</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../logout.php" onclick="return confirm('Apakah anda akan keluar?');">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="../admin/<?php echo $_SESSION['gambar']; ?>" class="img-circle" width="60" style="border: 3px solid white;"/></a></p>
              	  <h5 class="centered">
              <?php
              echo $_SESSION['nama'];
               ?></h5>
              	  	<?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "../login-guru.php"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
<?php } ?>
              	  	
                  <?php include 'menu.php'; ?>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php
      $dataKelas 		= isset($_POST['cmbKelas']) ? $_POST['cmbKelas'] : '';
      $dataPelajaran 	= isset($_POST['cmbPelajaran']) ? $_POST['cmbPelajaran'] : '';
      $dataSemester	= isset($_POST['cmbSemester']) ? $_POST['cmbSemester'] : '';

# Filter Data Nilai berdasarkan Combo yang dipilih
$filterSQL	= "";
if(isset($_POST['btnPilih1'])) {
	$filterSQL = " WHERE nilai.kode_kelas = '$dataKelas'";
}
elseif(isset($_POST['btnPilih2'])) {
	$filterSQL = " WHERE nilai.kode_kelas = '$dataKelas' AND nilai.kode_pelajaran = '$dataPelajaran'";
}
elseif(isset($_POST['btnPilih3'])) {
	$filterSQL = " WHERE nilai.kode_kelas = '$dataKelas' AND nilai.kode_pelajaran = '$dataPelajaran' AND nilai.semester = '$dataSemester'";
}
else {
	$filterSQL = "";
}
      ?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Nilai &raquo; Data Nilai Siswa</h3><br /><br />
          	<div class="row mt">
              <div class="col-lg-4">
              <form action='<?php $_SERVER['PHP_SELF']; ?>' target="_self" method="POST">
                    <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pilih Kelas</label>
                              <div class="col-sm-10">
                                  <select name="cmbKelas" id="cmbKelas"  class="form-control" required />
                                    <option> ---- Pilih Salah Satu ---- </option>
                                    <?php
		                              $dataQry = mysql_query("SELECT * FROM kelas ORDER BY tahun_ajar");
		                              while ($dataRow = mysql_fetch_array($dataQry)) {
		                            	if ($dataRow['kode_kelas'] == $dataKelas) {
			                         	$cek = " selected";
			                             } else { $cek=""; }
			                             echo "<option value='$dataRow[kode_kelas]' $cek>$dataRow[kelas] | $dataRow[nama_kelas] ( $dataRow[tahun_ajar] )</option>";
	                                  	} 
                                    ?>
                                  </select><br />
                                  <input name="btnPilih1" type="submit" class="btn btn-sm btn-primary" value="Pilih &raquo" />
                                  <a href="nilai.php" class="btn btn-sm btn-warning"> Refresh </a>
                                  </div>
                    </div>      
                </div>
              </div>
              <br />
              <!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Data Siswa </h3> 
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                  
                      <tr>
                        <th>No </th>
                        <th>NIS </th>
                        <th>Nama Siswa </th>
                        <th>Jurusan </th>
                        <th>SMT </th>
                        <th>SK 1 </th>
                        <th>SK 2 </th>
                        <th>ABSEN </th>
                        <th>UTS </th>
                        <th>UAS </th>
                        <th>Tools </th>
                      </tr>
                     <?php
                     $myQry = mysql_query("SELECT nilai.*, pelajaran.nama_pelajaran, siswa.nama_siswa, siswa.nis, kelas_siswa.jurusan FROM nilai
				LEFT JOIN pelajaran ON nilai.kode_pelajaran = pelajaran.kode_pelajaran
				LEFT JOIN siswa ON nilai.kode_siswa = siswa.kode_siswa
                LEFT JOIN kelas_siswa ON nilai.kode_siswa = kelas_siswa.kode_siswa
				$filterSQL ORDER BY semester, kode_pelajaran ASC"); 
	           $nomor  = 0; 
	           while ($myData = mysql_fetch_array($myQry)) {
                $nomor++;
		          $Kode = $myData['id'];
                      
                     ?>
                      <tr>
                  <td> <?php echo $nomor; ?> </td>
		              <td> <?php echo $myData['nis']; ?> </td>
		              <td> <?php echo $myData['nama_siswa']; ?> </td>
                  <td> <?php echo $myData['jurusan']; ?> </td>
		              <td> <?php echo $myData['semester']; ?> </td>
		              <td> <?php echo $myData['nilai_tugas1']; ?> </td>
		              <td> <?php echo $myData['nilai_tugas2']; ?> </td>
                  <td> <?php echo $myData['nilai_tugas3']; ?> </td>
		              <td> <?php echo $myData['nilai_uts']; ?> </td>
		              <td> <?php echo $myData['nilai_uas']; ?> </td>
                      <td><center><a class="btn btn-sm btn-primary tooltips" data-placement="bottom" data-original-title="Edit Nilai" href="edit-nilai.php?hal=edit-admin&kd=<?php echo $Kode;?>"><span class="glyphicon glyphicon-edit"></span></a>
                        <a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Hapus Nilai" href="hapus-nilai.php?hal=hapus&kd=<?php echo $Kode;?>"><span class="glyphicon glyphicon-trash"></a></center></td></tr>
                 <?php   
              } 
              ?>
                   </tbody>
                   </table>
                   </div>
                <div class="text-right">
                  <a href="input-nilai.php" class="btn btn-sm btn-warning">Input Nilai Siswa <i class="fa fa-arrow-circle-right"></i></a>
              
                </div>
              </div> 
              </div>
            </div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 &copy; Sistem Informasi Nilai Siswa (SINIWA)
              <a href="nilai.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../admin/assets/js/jquery.js"></script>
    <script src="../admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../admin/assets/js/jquery.scrollTo.min.js"></script>
    <script src="../admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../admin/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="../admin/assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="../admin/assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="../admin/assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="../admin/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="../admin/assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="../admin/assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="../admin/assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="../admin/assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
