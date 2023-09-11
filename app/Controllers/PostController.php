<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\HTTP\Request;

class PostController extends BaseController
{
  protected $PostModel;
  public function __construct()
  {
    $this->PostModel = new PostModel();
  }
  public function index()
  {
    // Cari
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $this->PostModel->search($keyword);
    } else {
      $this->PostModel->getPost();
    }

    $data = [
      'title' => 'Data Posts',
      'posts' => $this->PostModel->getPost()
    ];
    return view('PostViews/index', $data);
  }

  public function delete($id)
  {
    $hapus = $this->PostModel->hapus_post($id);

    if ($hapus) {
      session()->setFlashdata('warning', 'Hapus Data Post Berhasil');
      return redirect()->to('/PostController/index');
    }
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah data',
    ];
    return view('PostViews/create', $data);
  }

  public function store()
  {
    $title = $this->request->getPost('title');
    $content = $this->request->getPost('content');

    $data = [
      'title' => $title,
      'content' => $content
    ];

    $simpan = $this->PostModel->tambah_post($data);

    if ($simpan) {
      session()->setFlashdata('success', 'Tambah Data Berhasil');

      return redirect()->to('/PostController/index');
    }
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Edit Post',
      'post' => $this->PostModel->getPost($id)
    ];
    return view('PostViews/edit', $data);
  }

  public function update($id)
  {
    $title = $this->request->getPost('title');
    $content = $this->request->getPost('content');

    $data = [
      'title' => $titl,
      'content' => $content
    ];

    $ubah = $this->PostModel->ubah_post($data, $id);

    if ($ubah) {
      session()->setFlashdata('info', 'Ubah Post Berhasil');
      return redirect()->to('/PostController/index');
    }
  }
  //--------------------------------------------------------------------
}
