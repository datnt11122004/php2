<?php
   require_once "db.php";
    class CourseModel extends db
    {
        public function getAllCourse()
        {
            $sql = "SELECT * FROM khoa_hoc kh join danh_muc_khoa_hoc dm on dm.id = kh.id_danh_muc  where 1";
            return $this->getData($sql);
        }

        public function addCourse($tenKhoaHoc,$hinhAnh,$gia,$id_danh_muc)
        {
            $sql = "INSERT INTO khoa_hoc (ten_khoa_hoc, hinh_anh,gia,id_danh_muc) 
                    VALUES ('$tenKhoaHoc','$hinhAnh','$gia','$id_danh_muc')";
            $this->getData($sql,false);
        }

        public function updateCourse($tenKhoaHoc,$hinhAnh,$gia,$id_danh_muc,$id)
        {
            $sql = "UPDATE khoa_hoc SET ten_khoa_hoc = '$tenKhoaHoc', hinh_anh = '$hinhAnh',gia = '$gia',id_danh_muc = '$id_danh_muc' where id = '$id' " ;
            $this->getData($sql,false);
        }

        public function deleteCourse($id){
            $sql = "DELETE FROM khoa_hoc where id = '$id'";
            $this->getData($sql,false);
        }

        public function queryCourse($id)
        {
            $sql = "SELECT * FROM khoa_hoc where id = '$id'";
            return $this->getData($sql);
        }

    }

?>