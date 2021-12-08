<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/admin.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="/uts/dashboard/admin.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
          </a>
          <a href="/uts/dashboard/wisata.php" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-chart-line fa-fw me-3"></i><span>Wisata</span></a>
          <a href="/uts/dashboard/wisataList.php" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>Wisata List</span>
          </a>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
 
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />
        </a>
        <!-- Search form -->

        <!-- Right links -->

      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
        <section class="mb-4">
           
                <div class="card">
                <div class="card-header py-3">
                    <h5 class="mb-0 text-center"><strong>Wisata Form</strong></h5>
                </div>
                <div class="card-body">
                <form action="insertProsesWisata.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Title" name="title" aria-label="Username"
                            aria-describedby="basic-addon1" />
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Description" name="description" aria-label="Username"
                            aria-describedby="basic-addon1" />
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" placeholder="Image" name="file" aria-label="Username"
                            aria-describedby="basic-addon1" />
                    </div>
                    <button type="submit" class="btn btn-primary" name="kirim" id="submit">Submit</button>
                </form>
                </div>
                </div>
      </section>
    </div>
  </main>

  <!--Main layout-->
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/admin.js"></script>

</body>

</html>