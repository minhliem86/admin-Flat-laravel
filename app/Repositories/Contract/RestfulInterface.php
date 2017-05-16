<?php
namespace App\Repositories\Contract;

interface RestfulInterface{
  public function list();

  public function create($data);

  public function show($id);

  public function update($id, $data);

  public function delete($id);

}
