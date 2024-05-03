<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Library extends Controller{
    public function index()
    {
        return view('pages/index');
    }
}