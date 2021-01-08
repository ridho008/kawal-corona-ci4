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

	//--------------------------------------------------------------------

}
