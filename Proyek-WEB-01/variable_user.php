<?php
    include_once "user.php";
?>

<div class="content-wrapper">
 <section class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
         <div class="col-sm-6">
             <h1>Praktikum Ke-1</h1>
         </div>
         </div>
     </div>
<section class="content">
<body class="hold-transition sidebar-mini layout-fixed">
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Variable User</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body"> 
<?php 
// definisikan variables 
    $nama = 'Rafiq Abdul Ajiz'; 
    $umur = 21; 
    $berat = 51.5;
  
    echo 'Nama : ' . $nama; 
    echo '<br/>Umur : ' . $umur.' Tahun'; 
    echo '<br/>Berat : '.$berat.' Kg'; 
    echo "<br/>Hello $nama Apakabar";
?>
             </div>
             <!-- /.card-body -->
             <div class="card-footer">

             </div>
             <!-- /.card-footer-->
             </div>
             <!-- /.card -->
         </div>
         </div>
     </div>
 </section>
</div>