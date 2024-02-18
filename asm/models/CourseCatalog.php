<?php
require_once "db.php";
class CourseCatalog extends db
{
    public function getAllCourseCatalog()
    {
        $sql = "SELECT * FROM danh_muc_khoa_hoc where 1";
        return $this->getData($sql);
    }

    public function  addCatalog($name)
    {
        $sql = "INSERT INTO danh_muc_khoa_hoc (ten_danh_muc) VALUES ('$name')";
        $this->getData($sql,false);
    }

    public function updateCatalog($id,$name)
    {
        $sql = "UPDATE danh_muc_khoa_hoc SET ten_danh_muc = '$name' WHERE id = '$id'";
        $this->getData($sql,false);
    }

    public function deleteCatalog($id){
        $sql = "DELETE FROM danh_muc_khoa_hoc where id = '$id'";
        $this->getData($sql,false);
    }

    public function queryCatalog($id)
    {
        $sql = "SELECT * FROM danh_muc_khoa_hoc where id = '$id'";
        return $this->getData($sql);
    }
}

?>