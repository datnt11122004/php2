<?php
require_once "Models/CourseCatalog.php";
class CourseCatalogController
{
    public function listCourseCatalog()
    {
        $CourseModel = new CourseCatalog();
        $data = $CourseModel->getAllCourseCatalog();
        $template = "views/Catalog/table.php";
        include "views/layout.php";
    }
    public function addCourseCatalog()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $tenDanhMuc = $_POST['ten-danh-muc'];
            $catalog = new CourseCatalog();
            $catalog->addCatalog($tenDanhMuc);
            header('location:index.php?url=list_catalog');
        }else{
            $template = "views/course/add.php";
            include "views/layout.php";
        }
    }

    public function updateCourseCatalogController()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $tenDanhMuc = $_POST['ten-danh-muc'];
            $id = $_POST['id'];
            $catalog = new CourseCatalog();
            $catalog->updateCatalog($id,$tenDanhMuc);
            header('location:index.php?url=list_catalog');
        }else{
            $id = $_GET['id_catalog'];
            $courseCatalogModel = new CourseCatalog();
            $data = $courseCatalogModel->queryCatalog($id);
            $template = "views/catalog/update.php";
            include "views/layout.php";
        }
    }

    public function deleteCatalog()
    {
        $id = $_GET['id_catalog'];
        $catalog = new CourseCatalog();
        $catalog ->deleteCatalog($id);
        header('location:index.php?url=list_catalog');
    }
}
