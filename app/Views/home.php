<?= $this->extend('layout/app'); ?>

<?= $this->section('content'); ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="display-4">Pantau Corona</h1>
          <p class="lead">Aplikasi seluruh data corona (Covid19) Di Seluruh Dunia.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Rasa Tidak Nyaman Dan Nyeri</li>
            <li class="list-group-item">nyeri tenggorokan</li>
            <li class="list-group-item">Diare</li>
            <li class="list-group-item">Sakit Kepala</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img src="/image/header.png" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="row mt-4">
            <div class="col-md-3">
               <div class="card mb-3" style="max-width: 540px;">
                 <div class="row no-gutters">
                   <div class="col-md-5 p-2">
                     <img src="/image/dissapointment.svg" class="card-img">
                   </div>
                   <div class="col-md-7">
                     <div class="card-body">
                       <h6 class="card-title font-weight-bold"><?= $positifGlobal['name']; ?></h6>
                       <p class="card-text"><?= str_replace(',', '.', $positifGlobal['value']); ?></p>
                       <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                     </div>
                   </div>
                 </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="card mb-3" style="max-width: 540px;">
                 <div class="row no-gutters">
                   <div class="col-md-5 p-2">
                     <img src="/image/smile.svg" class="card-img" width="100%">
                   </div>
                   <div class="col-md-7">
                     <div class="card-body">
                       <h6 class="card-title font-weight-bold"><?= $sembuhGlobal['name']; ?></h6>
                       <p class="card-text"><?= str_replace(',', '.', $sembuhGlobal['value']); ?></p>
                       <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                     </div>
                   </div>
                 </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="card mb-3" style="max-width: 540px;">
                 <div class="row no-gutters">
                   <div class="col-md-5 p-1">
                     <img src="/image/sad.svg" class="card-img" width="100%">
                   </div>
                   <div class="col-md-7">
                     <div class="card-body">
                       <h6 class="card-title font-weight-bold"><?= $meninggalGlobal['name']; ?></h6>
                       <p class="card-text"><?= str_replace(',', '.', $meninggalGlobal['value']); ?></p>
                       <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                     </div>
                   </div>
                 </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="card mb-3" style="max-width: 540px;">
                 <div class="row no-gutters">
                   <div class="col-md-5 p-2">
                     <img src="/image/indonesia.svg" class="card-img">
                   </div>
                   <div class="col-md-7">
                     <div class="card-body">
                       <h6 class="card-title font-weight-bold">Indonesia</h6>
                       <small class="card-text"><?= $indonesia[0]['positif']; ?> Positif <?= $indonesia[0]['sembuh']; ?> Sembuh <?= $indonesia[0]['meninggal']; ?> Meninggal</small>
                       <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                     </div>
                   </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">Data Indonesia Berdasarkan Provinsi</div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table table-bordered table-striped datatables">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Provinsi</th>
                           <th>Positif</th>
                           <th>Sembuh</th>
                           <th>Meninggal</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $no = 1; foreach($provIndo as $pi) : ?>
                           <tr>
                              <td><?= $no++; ?></td>
                              <td><?= $pi['attributes']['Provinsi']; ?></td>
                              <td><?= number_format($pi['attributes']['Kasus_Posi'],0,',','.'); ?></td>
                              <td><?= number_format($pi['attributes']['Kasus_Semb'],0,',','.'); ?></td>
                              <td><?= number_format($pi['attributes']['Kasus_Meni'],0,',','.'); ?></td>
                           </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-3">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">Kasus Coronavirus Global</div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table table-bordered table-striped datatables">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Negara</th>
                           <th>Positif</th>
                           <th>Sembuh</th>
                           <th>Meninggal</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $no = 1; foreach($global as $g) : ?>
                           <tr>
                              <td><?= $no++; ?></td>
                              <td><?= $g['attributes']['Country_Region']; ?></td>
                              <td><?= number_format($g['attributes']['Active'],0,',','.'); ?></td>
                              <td><?= number_format($g['attributes']['Recovered'],0,',','.'); ?></td>
                              <td><?= number_format($g['attributes']['Deaths'],0,',','.'); ?></td>
                           </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection(); ?>