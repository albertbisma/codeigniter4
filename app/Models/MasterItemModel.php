<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterItemModel extends Model
{
  protected $table = 'master_item';

  public function getMasterItem($id = false)
  {
    if ($id === false) {
      return $this->table('master_item')
        ->get()
        ->getResultArray();
    } else {
      return $this->table('master_item')
        ->where('id', $id)
        ->get()
        ->getRowArray();
    }
  }

  public function deleteMasterItem($id)
  {
    return $this->db->table($this->table)->delete(['id' => $id]);
  }

  public function addMasterItem($data)
  {
    return $this->db->table($this->table)->insert($data);
  }

  public function updateMasterItem($data, $id)
  {
    return $this->db->table($this->table)->update($data, ['id' => $id]);
  }

  public function search($codeItem)
  {
    return $this->table('master_item')->like('code_item', $codeItem);
  }
}
