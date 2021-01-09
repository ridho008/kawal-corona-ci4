<?= $this->extend('layout/app'); ?>

<?= $this->section('content'); ?>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="row">
            <div class="col-md-6">
               <h3><?= $title; ?></h3>
            </div>
         </div>
         <div id="mapid" style="height: 500px;"></div>
      </div>
   </div>
</div>
<script>

   var mymap = L.map('mapid').setView([-4.074152603348469, 122.5263228726637], 5);

   L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
         'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1
   }).addTo(mymap);

   <?php foreach($prov['features'] as $p) : ?>
   L.marker([<?= $p['geometry']['y']; ?>, <?= $p['geometry']['x']; ?>]).addTo(mymap)
   .bindPopup("<strong><?= $p['attributes']['Provinsi']; ?></strong><br>" + "Positif <?= $p['attributes']['Kasus_Posi']; ?><br>" + "Sembuh <?= $p['attributes']['Kasus_Semb']; ?><br>" + "Meninggal <?= $p['attributes']['Kasus_Meni']; ?><br>").openPopup();
   <?php endforeach; ?>
</script>
<?= $this->endSection(); ?>