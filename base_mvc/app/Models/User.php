<?php
namespace App\Models;
class User extends BaseModel {
    protected $table = "user";

//    public function __construct()
//    {
//        echo "Đây là file Product Model";
//
//    }
    public function all(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function create($id, $name, $email, $address){
        $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $email, $address]);
    }
    public function findById($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function update($id, $name, $email, $address){
        $sql = "UPDATE $this->table SET name = ?, email = ?, address = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([ $name, $email, $address, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table where id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
