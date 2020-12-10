<?php 
namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{

		$data = [
			'title' => 'Dashboard | ESJA',
            'data_proyek' => $this->ProyekModel->findAll(),
            'data_paket' => $this->PaketModel->findAll()
	];
	
		return view('Admin/admin', $data);
	}

	//--------------------------------------------------------------------
	
	public function proyek()
	{

		$data = [
			'title' => 'Data Proyek | ESJA',
            'data_proyek' => $this->ProyekModel->findAll()
	];
	
		return view('Admin/data_proyek', $data);
	}

	//--------------------------------------------------------------------
	
	public function paket()
	{

		$data = [
			'title' => 'Data Paket | ESJA',
            'data_paket' => $this->PaketModel->findAll()
	];
	
		return view('Admin/data_paket', $data);
	}

	//--------------------------------------------------------------------
	
	public function profile()
	{

		$data = [
			'title' => 'Data Profile | ESJA',
			'pf' => $this->UserModel->find(user_id())
	];
	
		return view('Admin/data_profile', $data);
	}

	public function ubahuser($id)
	{
		
		// $pass = $this->request->getVar('password');
		// if(!empty($pass))
		// {
		// 	$data = [
		// 		'username' => $this->request->getVar('username'),
		// 		'email' => $this->request->getVar('email'),
		// 		'password_hash' => password_hash($pass, PASSWORD_DEFAULT)
		// 	];

		// 	$this->UserModel->update($id, $data);
		// 	session()->setFlashData('pesan', 'Data profil berhasil diubah');
		// 	return redirect()->to('/profile');
		// }else{
		// 	$data = [
		// 		'username' => $this->request->getVar('username'),
		// 		'email' => $this->request->getVar('email')
		// 	];

		// 	$this->UserModel->update($id, $data);
		// 	session()->setFlashData('pesan', 'Data profil berhasil diubah');
		// 	return redirect()->to('/profile');
		// }
	}

	//--------------------------------------------------------------------
	
	public function tentangkami()
	{

		$data = [
			'title' => 'Tentang Kami | ESJA',
			'tk' => $this->TentangModel->find(1)
	];
	
		return view('Admin/tentang_kami', $data);
	}

	public function edittentang($id)
	{
		$data = [
			'data_tentangkami' => $this->request->getVar('tentang')
		];

		$this->TentangModel->update($id, $data);
		session()->setFlashData('pesan', 'Data tentang perusahaan berhasil diubah');
		return redirect()->to('/tentangkami');
	}
	//--------------------------------------------------------------------

	public function kontak()
	{

		$data = [
			'title' => 'Kontak Kami | ESJA',
			'kp' => $this->KontakModel->find(1)
	];
	
		return view('Admin/kontak_kami', $data);
	}

	public function ubahkontak($id)
	{
		$data = [
			'nomor' => $this->request->getVar('nomor'),
			'email' => $this->request->getVar('email')
		];

		$this->KontakModel->update($id, $data);
		session()->setFlashData('pesan', 'Data kontak berhasil diubah');
		return redirect()->to('/datakontak');
	}
	
	//--------------------------------------------------------------------
	
	public function tambahpaket()
	{
		$data = [
			'title' => 'Tambah Data Paket | ESJA'
	];
	
		return view('Admin/tambah_paket', $data);
	}

	public function savepaket()
	{
		//fetch form input
		$data = [
			'nama' => $this->request->getVar('nama'),
			'harga' => $this->request->getVar('harga'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'fitur1' => $this->request->getVar('fitur1'),
			'fitur2' => $this->request->getVar('fitur2'),
			'fitur3' => $this->request->getVar('fitur3'),
			'fitur4' => $this->request->getVar('fitur4'),
			'fitur5' => $this->request->getVar('fitur5'),
			'fitur6' => $this->request->getVar('fitur6'),
			'fitur7' => $this->request->getVar('fitur7'),
			'fitur8' => $this->request->getVar('fitur8'),
			'fitur9' => $this->request->getVar('fitur9'),
			'fitur10' => $this->request->getVar('fitur10')
		];

		$this->PaketModel->insert($data);
		session()->setFlashData('pesan', 'Paket berhasil ditambahkan');
		return redirect()->to('/tambahpaket');
	}

	//edit paket form
	public function ubahpaket($id)
	{
		$data = [
			'title' => 'Edit Paket | ESJA',
			'pk' => $this->PaketModel->find($id)
		];

		return view('Admin/edit_paket', $data);
	}
	//edit paket proses
	public function editpaket($id)
	{
		$data = [
			'nama' => $this->request->getVar('nama'),
			'harga' => $this->request->getVar('harga'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'fitur1' => $this->request->getVar('fitur1'),
			'fitur2' => $this->request->getVar('fitur2'),
			'fitur3' => $this->request->getVar('fitur3'),
			'fitur4' => $this->request->getVar('fitur4'),
			'fitur5' => $this->request->getVar('fitur5'),
			'fitur6' => $this->request->getVar('fitur6'),
			'fitur7' => $this->request->getVar('fitur7'),
			'fitur8' => $this->request->getVar('fitur8'),
			'fitur9' => $this->request->getVar('fitur9'),
			'fitur10' => $this->request->getVar('fitur10')
		];
		$this->PaketModel->update($id, $data);
		session()->setFlashData('pesan', 'Paket berhasil diubah');
		return redirect()->to('./ubahpaket/'.$id);
	}
	//hapus paket
	public function hapuspaket($id)
	{
		$this->PaketModel->delete($id);
		session()->setFlashData('pesan', 'Paket berhasil dihapus');
		return redirect()->to('/datapaket');
	}
	
	//--------------------------------------------------------------------
	//Proyek
	public function tambahproyek()
	{
		$data = [
			'title' => 'Tambah Data Proyek | ESJA',
			'dpaket' => $this->PaketModel->findAll()
	];
	
		return view('Admin/tambah_proyek', $data);
	}

	public function saveproyek()
	{
		//Proses upload gambar
		$gambar = $this->request->getFile('gambar');
		if($gambar->isValid() && ! $gambar->hasMoved())
		{
			$gambar->move(ROOTPATH.'public/images');
		}
		//ambil data form
		$data = [
			'kota' => $this->request->getVar('kota'),
			'alamat' => $this->request->getVar('alamat'),
			'gambar' => $gambar->getName(),
			'paket' => $this->request->getVar('paket')
		];
		//insert data form ke database
		$this->ProyekModel->insert($data);
		session()->setFlashData('pesan', 'Proyek berhasil ditambahkan');
		return redirect()->to('/tambahproyek');
	}
	//edit proyek
	public function ubahproyek($id)
	{
		$data = [
			'title' => 'Edit Proyek | ESJA',
			'epro' => $this->ProyekModel->find($id),
			'dpaket' => $this->PaketModel->findAll()
		];

		return view('Admin/edit_proyek', $data);
	}
	//proses edit proyek
	public function editproyek($id)
	{
		//cek file gambar
		$gambar = $this->request->getFile('gambar');
		if($gambar->isValid() && ! $gambar->hasMoved() && ! empty($gambar))
		{
			$data = [
				'kota' => $this->request->getVar('kota'),
				'alamat' => $this->request->getVar('alamat'),
				'paket' => $this->request->getVar('paket'),
				'gambar' => $gambar->getName()
			];
			//hapus gambar lama
			$mod = $this->ProyekModel->find($id);
			$gam = $mod['gambar'];
			$jalur = './images/'.$gam;
			unlink($jalur);
			//simpan gambar baru
			$gambar->move(ROOTPATH.'public/images');
			//masukkan data ke database
			$this->ProyekModel->update($id, $data);
			session()->setFlashData('pesan', 'Proyek berhasil diubah');
			return redirect()->to('./ubahproyek/'.$id);
		}else{
			$data = [
				'kota' => $this->request->getVar('kota'),
				'alamat' => $this->request->getVar('alamat'),
				'paket' => $this->request->getVar('paket')
			];

			//masukkan data ke database
			$this->ProyekModel->update($id, $data);
			session()->setFlashData('pesan', 'Proyek berhasil diubah');
			return redirect()->to('./ubahproyek/'.$id);
		}
	}
	//hapus proyek
	public function hapusproyek($id)
	{
		$this->ProyekModel->delete($id);
		session()->setFlashData('pesan', 'Proyek berhasil dihapus');
		return redirect()->to('/dataproyek');
	}
    
}