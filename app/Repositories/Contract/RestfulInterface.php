<?php
namespace App\Repositories\Contract;

interface RestfulInterface{
  public function list();

  public function findID($id);

  public function findWhere($col, $ArrWhere)  ;

  public function create($data);

  public function update($id, $data);

  public function delete($id);

  public function deleteAll($data);

}
