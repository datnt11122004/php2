<?php
namespace App\Models;
class Category extends BaseModel {
    protected $table = "category";

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
    public function create($id, $name){
        $sql = "INSERT INTO $this->table VALUES (?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name]);
    }
    public function findById($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function update($id, $name){
        $sql = "UPDATE $this->table SET category_name= ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([ $name, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table where id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
