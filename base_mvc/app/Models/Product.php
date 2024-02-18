<?php
namespace App\Models;
class Product extends BaseModel {
    protected $table = "product";
    protected $relation = "category";


//    public function __construct()
//    {
//        echo "Đây là file Product Model";
//
//    }
    public function all(){
        $sql = "SELECT *, $this->table.id as idProduct FROM $this->table join $this->relation on $this->table.category_id = $this->relation.id ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function create($id, $name, $price, $category_id){
        $sql = "INSERT INTO $this->table VALUES (?, ?, ?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $price, $category_id]);
    }
    public function findById($id){
        $sql = "SELECT *, $this->table.id as idProduct FROM $this->table join $this->relation on $this->table.category_id = $this->relation.id  WHERE $this->table.id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function update($id, $name, $price, $category_id){
        $sql = "UPDATE $this->table SET name= ?, price= ?, category_id = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([ $name, $price, $category_id, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table where id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
