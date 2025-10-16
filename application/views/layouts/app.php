<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= isset($title) ? $title : 'CIShop' ?> - Codeigniter E-Commerce</title>
    <!-- Bootstrap core CSS -->
    <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/app.css" />

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css" />
  </head>
  <body>
    
    <!-- Navbar -->
     <?php $this->load->view('layouts/_navbar'); ?>
    <!-- ./ Navbar -->

    <!-- Content -->
     <?php $this->load->view($page)?>
    <!-- ./ Content -->

    <script src="/assets/libs/jquery/jquery-3.7.1.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>
  </body>
</html>