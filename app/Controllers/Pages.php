<?php 
namespace App\Controllers;
use CodeIgniter\I18n\Time;
class Pages extends BaseController
{
	public function index()
	{

		$ip = $this->request->getIPAddress();
		$date = Time::today('Asia/Jakarta');
		
		$cek = $this->VisitorModel->where('ip', $ip)->where('date', $date)->findAll();
		

		if($cek == 0){
			$data = [
				'ip' => $ip,
				'date' => $date,
				'hits' => 1
			];

			$this->VisitorModel->insert($data);
		}else{
			$data = [
				'ip' => $ip,
				'date' => $date,
				'hits' => 'hits' + 1
			];

			$this->VisitorModel->update($ip, $data);
		}

		$data = [
			'title' => 'Beranda | ESJA',
			'data_proyek' => $this->ProyekModel->findAll(4),
			'data_paket' => $this->PaketModel->findAll(3),
			'kontak' => $this->KontakModel->find(1),
			'v_today' => $this->VisitorModel->where('date', $date)->findAll()
	];
	
		return view('/Pages/home', $data);
	}

	//--------------------------------------------------------------------

	public function proyek()
	{
		$data = [
			'title' => 'Proyek | ESJA',
			'proyek_all' => $this->ProyekModel->findAll(),
			'kontak' => $this->KontakModel->find(1)
		];
		
		return view('/Pages/proyek', $data);
	}

	//--------------------------------------------------------------------

	public function paket()
	{
		$data = [
			'title' => 'Paket | ESJA',
			'paket_all' => $this->PaketModel->findAll(),
			'kontak' => $this->KontakModel->find(1)
		];
		
		return view('/Pages/paket', $data);
	}

	//--------------------------------------------------------------------

	public function kontak()
	{
		$data = [
			'title' => 'Kontak | ESJA',
			'kontak' => $this->KontakModel->find(1)
		];
		
		return view('/Pages/kontak', $data);
	}

	//--------------------------------------------------------------------

	public function tentang()
	{
		$data = [
			'title' => 'Tentang Kami | ESJA',
			'data_tentang' => $this->TentangModel->find(1),
			'kontak' => $this->KontakModel->find(1)
		];
		
		return view('/Pages/tentang', $data);
	}

	//--------------------------------------------------------------------

	// public function login()
	// {
	// 	$data = [
	// 		'title' => 'Login | ESJA'
	// 	];
		
	// 	return view('/Pages/login', $data);
	// }

	//--------------------------------------------------------------------

	public function admin()
	{
		$data = [
			'title' => 'Admin | ESJA'
		];
		
		return view('/Admin/admin', $data);
	}
}
