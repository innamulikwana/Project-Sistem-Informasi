<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class mahasiswaController extends Controller
{
    public function index()
    {
        
        $data['title']='Dashboard-Mahasiswa';

        echo view('mahasiswa/dashboardmahasiswa',$data);
    } 
    // menampilkan data mahasiswa 
    public function sur()
    {
        $data['title']='Dashboard-Mahasiswa';

        echo view('mahasiswa/surat',$data);
    }
} 