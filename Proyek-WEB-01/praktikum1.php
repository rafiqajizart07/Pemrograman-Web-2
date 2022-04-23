<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum Ke-1</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="variable_user.php">Variable User</a></li>
              <li class="breadcrumb-item"><a href="variable_system.php">Variable System</a></li>
              <li class="breadcrumb-item active"><a href="variable_constan.php">Variable Konstan</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Variable &  Data Type</h3>

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
                <p>Pertanyaan 3.5 ?<p>
              1.	Apa bedanya variabel user dengan variable system ?<br>
              Variabel user = hanya spesifik untuk pengguna yang saat ini masuk.
<br>Variable system = diakses secara global oleh semua pengguna. 
<br>
<p>Pertanyaan 4.2<p>
1.	Jelaskan apa fungsi sort(array), arsort(array) !! <br>
fungsi sort(array) = mengurutkan array yang diindeks dalam urutan menaik.
Fungsi arsort(array) = mengurutkan array terindeks dalam urutan menurun.
<br>
2.	Jelaskan apa fungsi array_pop($array) <br>
fungsi array_pop($array) = digunakan untuk menghapus / remove isi array paling akhir.
<br>
3.	Jelaskan apa fungsi array_push($array)? <br>
merupakan fungsi yang digunakan untuk memasukkan value ke sebuah array dan disimpan di paling akhir / paling kanan.
<br>
4.	Jelaskan apa fungsi array_shift($array)? <br>
digunakan untuk menghapus / remove isi array paling awal.
<br>
5.	Jelaskan apa fungsi array_unshift($array)? <br>
fungsi yang digunakan untuk memasukkan value ke sebuah array tetapi disimpan di paling awal / ujung kiri.

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
    <!-- /.content -->
  </div>

<?php
    include_once "footer.php";
?>