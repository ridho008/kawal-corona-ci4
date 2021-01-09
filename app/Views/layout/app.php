<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $title; ?></title>
   <link rel="stylesheet" href="/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css"/>
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>
<body>
   <!-- Navbar -->
   <?= $this->include('layout/nav'); ?>

   <!-- Content -->
   <?= $this->renderSection('content'); ?>

<footer class="footer mt-auto py-3">
  <div class="container text-center">
    <span class="text-muted">Copyright Pantau Corona <?= date('Y'); ?></span>
  </div>
</footer>

<script src="/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="/DataTables/datatables.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
   $(document).ready( function () {
       $('.datatables').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'print',
            'pdf'
        ]
       });
   } );
</script>
</body>
</html>