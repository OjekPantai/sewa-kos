<?php

namespace App\Controllers;

use App\Models\KostPelangganModel;
use CodeIgniter\RESTful\ResourceController;

class KostPelangganController extends ResourceController
{
    protected $modelName = 'App\Models\KostPelangganModel';
    protected $format = 'json';

    public function index()
    {
        $model = new KostPelangganModel();
        $data = $model->findAll();
        return $this->respond($data);
    }

    public function show($id = null)
    {
        $model = new KostPelangganModel();
        $data = $model->find($id);

        if ($data) {
            return $this->respond($data);
        } else {  
            return $this->failNotFound('Data not found');
        }
    }

    public function create()
    {
        $model = new KostPelangganModel();
        $data = [
            'KostPelanggan_Nama' => $this->request->getPost('KostPelanggan_Nama'),
            'KostPelanggan_Alamat' => $this->request->getPost('KostPelanggan_Alamat'),
            'KostPelanggan_Tgl' => $this->request->getPost('KostPelanggan_Tgl'),
        ];

        $model->insert($data);
        return $this->respondCreated($data);
    }

    public function update($id = null)
    {
        $model = new KostPelangganModel();
        $input = $this->request->getRawInput();
        $data = [
            'KostPelanggan_Nama' => $input['KostPelanggan_Nama'],
            'KostPelanggan_Alamat' => $input['KostPelanggan_Alamat'],
            'KostPelanggan_Tgl' => $input['KostPelanggan_Tgl'],
        ];

        $model->update($id, $data);
        return $this->respond($data);
    }

    public function delete($id = null)
    {
        $model = new KostPelangganModel();
        $model->delete($id);
        return $this->respondDeleted(['id' => $id]);
    }
}
