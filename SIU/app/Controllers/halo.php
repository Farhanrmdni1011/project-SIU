<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class Halo extends Controller
{
	public function index()
	{
        $data['title']  = 'Hallo Dunia !';
        $data['msg']    = 'usaha warga konoha';
		return view('halo_view',$data);
	}

}