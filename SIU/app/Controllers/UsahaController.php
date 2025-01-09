<?php
// File: app/Controllers/UsahaController.php

namespace App\Controllers;

use App\Models\UsahaModel;
use CodeIgniter\Controller;

class UsahaController extends Controller
{
    protected $usahaModel;

    public function __construct()
    {
        $this->usahaModel = new UsahaModel();
    }

    public function index()
    {
        $data['usaha'] = $this->usahaModel->findAll();
        return view('usaha/index', $data);
    }

    public function create()
    {
        return view('usaha/create');
    }

    public function store()
    {
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);
            $gambarPath = 'uploads/' . $newName;
        } else {
            $gambarPath = null;
        }

        $this->usahaModel->save([
            'nama_usaha' => $this->request->getPost('nama_usaha'),
            'jenis_usaha' => $this->request->getPost('jenis_usaha'),
            'lokasi' => $this->request->getPost('lokasi'),
            'kontak' => $this->request->getPost('kontak'),
            'gambar' => $gambarPath,
        ]);

        return redirect()->to('/usaha');
    }

    public function edit($id)
    {
        $data['usaha'] = $this->usahaModel->find($id);
        return view('usaha/edit', $data);
    }

    public function update($id)
    {
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);
            $gambarPath = 'uploads/' . $newName;
        } else {
            $gambarPath = $this->request->getPost('existing_gambar');
        }

        $this->usahaModel->update($id, [
            'nama_usaha' => $this->request->getPost('nama_usaha'),
            'jenis_usaha' => $this->request->getPost('jenis_usaha'),
            'lokasi' => $this->request->getPost('lokasi'),
            'kontak' => $this->request->getPost('kontak'),
            'gambar' => $gambarPath,
        ]);

        return redirect()->to('/usaha');
    }

    public function delete($id)
    {
        $usaha = $this->usahaModel->find($id);
        if ($usaha['gambar'] && file_exists($usaha['gambar'])) {
            unlink($usaha['gambar']);
        }
        $this->usahaModel->delete($id);
        return redirect()->to('/usaha');
    }
}
?>