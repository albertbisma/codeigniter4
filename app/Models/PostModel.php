<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
  protected $table = 'posts';

  public function getPost($id = false)
  {
    if ($id === false) {
      return $this->table('posts')
        ->get()
        ->getResultArray();
    } else {
      return $this->table('posts')
        ->where('id', $id)
        ->get()
        ->getRowArray();
    }
  }

  public function hapus_post($id)
  {
    return $this->db->table($this->table)->delete(['id' => $id]);
  }

  public function tambah_post($data)
  {
    return $this->db->table($this->table)->insert($data);
  }

  public function ubah_post($data, $id)
  {
    return $this->db->table($this->table)->update($data, ['id' => $id]);
  }

  public function search($keyword)
  {
    return $this->table('posts')->like('title', $keyword);
  }
}
