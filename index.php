<?php
include 'header.php';
?>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Taha Irmak</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">AnaSayfa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hakkında</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hizmetler</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">İletişim</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php
include 'db.php';
$vericek = $db->query("SELECT * FROM makale order by id desc limit 15", PDO::FETCH_ASSOC);

?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
<?php
foreach($vericek as $row){
?>
       
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="<?php echo $row["resim"]; ?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $row["baslik"]; ?></h2>
            <p class="card-text"><?php echo $row["icerik"]; ?></p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
		
          <div class="card-footer text-muted">
            <?php echo "<b>Tarih :</b> ".$row["tarih"];  echo "<b> Yazar : </b>".$row["yazar"];?> 

          </div>
        </div>
<?php
}
?>
       
       
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Ara</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Aramak İçin Yaz">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Git!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Kategoriler</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Tasarım</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">PHP</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">ASP.NET</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Sitem Hakkında</h5>
          <div class="card-body">
            <b>Sitemize Hoşgeldiniz ,</b><br>
			Aradığınız Tüm Web Dilleri İle İlgili Yazılar Sitemizde Olucak !
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php 
include 'footer.php';
?>
