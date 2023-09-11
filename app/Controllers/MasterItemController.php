<?php

namespace App\Controllers;

use App\Models\MasterItemModel;
use CodeIgniter\HTTP\Request;

class MasterItemController extends BaseController
{
  protected $MasterItemModel;
  public function __construct()
  {
    $this->MasterItemModel = new MasterItemModel();
  }
  public function index()
  {
    // Cari
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $this->MasterItemModel->search($keyword);
    } else {
      $this->MasterItemModel->getMasterItem();
    }

    $data = [
      'title' => 'Data Master Item',
      'masterItems' => $this->MasterItemModel->getMasterItem()
    ];
    return view('MasterItemViews/index', $data);
  }

  public function delete($id)
  {
    $hapus = $this->MasterItemModel->deleteMasterItem($id);

    if ($hapus) {
      session()->setFlashdata('warning', 'Hapus Data Master Item Berhasil');
      return redirect()->to('/MasterItemController/index');
    }
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah data',
    ];
    return view('MasterItemViews/create', $data);
  }

  public function store()
  {
    $codeItem = $this->request->getPost('codeItem');
    $nameItem = $this->request->getPost('nameItem');
    $description = $this->request->getPost('description');

    $data = [
      'code_item' => $codeItem,
      'name_item' => $nameItem,
      'description' => $description
    ];

    $simpan = $this->MasterItemModel->addMasterItem($data);

    if ($simpan) {
      session()->setFlashdata('success', 'Tambah Data Berhasil');

      return redirect()->to('/MasterItemController/index');
    }
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Edit Master Item',
      'masterItem' => $this->MasterItemModel->getMasterItem($id)
    ];
    return view('MasterItemViews/edit', $data);
  }

  public function update($id)
  {
    $codeItem = $this->request->getMasterItem('code_item');
    $nameItem = $this->request->getMasterItem('name_item');
    $description = $this->request->getMasterItem('description');

    $data = [
      'codeItem' => $codeItem,
      'nameItem' => $nameItem,
      'description' => $description
    ];

    $ubah = $this->MasterItemModel->updateMasterItem($data, $id);

    if ($ubah) {
      session()->setFlashdata('info', 'Ubah Master Item Berhasil');
      return redirect()->to('/MasterItemController/index');
    }
  }
  //--------------------------------------------------------------------
}
