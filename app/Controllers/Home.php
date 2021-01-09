<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
      $positifGlobal = json_decode(file_get_contents("https://api.kawalcorona.com/positif"), true);
      $sembuhGlobal = json_decode(file_get_contents("https://api.kawalcorona.com/sembuh"), true);
      $meninggalGlobal = json_decode(file_get_contents("https://api.kawalcorona.com/meninggal"), true);
      $provinsiIndonesia = json_decode(file_get_contents("https://api.kawalcorona.com/indonesia/provinsi"), true);
      $global = json_decode(file_get_contents("https://api.kawalcorona.com/"), true);
      $indonesia = json_decode(file_get_contents("https://api.kawalcorona.com/indonesia"), true);
      $data = [
         'title' => 'Pantau Data Corona',
         'positifGlobal' => $positifGlobal,
         'sembuhGlobal' => $sembuhGlobal,
         'meninggalGlobal' => $meninggalGlobal,
         'provIndo' => $provinsiIndonesia,
         'global' => $global,
         'indonesia' => $indonesia
      ];
		return view('home', $data);
	}

   public function pemetaanNasional()
   {
      $prov = json_decode(file_get_contents("https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json"), true);
      $data = [
         'title' => 'Pemetaan Nasional',
         'prov' => $prov
      ];
      return view('pemetaan_nasional', $data);
   }

   public function pemetaanGlobal()
   {
      $global = json_decode(file_get_contents("https://api.kawalcorona.com/"), true);
      $data = [
         'title' => 'Pemetaan Global',
         'global' => $global
      ];
      return view('pemetaan_global', $data);
   }

	//--------------------------------------------------------------------

}
