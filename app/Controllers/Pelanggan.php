<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Pelanggan_model;
class Pelanggan extends Controller
{
public function index()
{
$model = new Pelanggan_model();
$data['pelanggan'] = $model->getPelanggan();
echo view('pelanggan/index', $data);
}
}
?>