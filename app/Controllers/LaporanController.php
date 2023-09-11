<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\HTTP\Request;

class LaporanController extends BaseController
{
  protected $BukuModel;
  public function __construct()
  {
    $this->BukuModel = new BukuModel();
  }
  public function index()
  {

    $data = [
      'title' => 'Data Buku',
      'buku' => $this->BukuModel->getBuku()
    ];
    return view('LaporanViews/index', $data);
  }

  public function print()
  {
    $data = [
      'buku' => $this->BukuModel->getBuku()
    ];

    return view('LaporanViews/print', $data);
  }


  //--------------------------------------------------------------------
}
