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

<div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Variable System</h3>

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
// variable system 
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"]; 
  echo '<br/>Nama File '.$_SERVER["PHP_SELF"]; 
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