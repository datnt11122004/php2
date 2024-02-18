<?php
require_once "Models/CourseModel.php";
require_once "Models/CourseCatalog.php";
class CourseController
{
    public function listCourse()
    {
        $CourseModel = new CourseModel();
        $data = $CourseModel->getAllCourse();
        $template = "views/Course/table.php";
        include "views/layout.php";
    }
    public function addCourse()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $tenKhoaHoc = $_POST['ten-khoa-hoc'];
            $gia = $_POST['gia'];
            $id_danh_muc = $_POST['id-danh-muc'];

            $hinhAnh = $_FILES['hinh-anh'];
            $targetFile = 'upload/' . $hinhAnh['name'];
            move_uploaded_file($hinhAnh['tmp_name'], $targetFile);

            $CourseModel = new CourseModel();
            $CourseModel->addCourse($tenKhoaHoc,$hinhAnh['name'],$gia,$id_danh_muc);
            header('location:index.php');
        }else{
            $catalogModel = new CourseCatalog();
            $dataCatalog = $catalogModel -> getAllCourseCatalog();
            $template = "views/course/add.php";
            include "views/layout.php";
        }
    }

    public function updateCourseController()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $tenKhoaHoc = $_POST['ten-khoa-hoc'];
            $gia = $_POST['gia'];
            $id_danh_muc = $_POST['id-danh-muc'];

            $hinhAnh = $_FILES['hinh-anh'];
            $targetFile = 'upload/' . $hinhAnh['name'];
            move_uploaded_file($hinhAnh['tmp_name'], $targetFile);

            $CourseModel = new CourseModel();
            $CourseModel->updateCourse($tenKhoaHoc, $hinhAnh['name'], $gia, $id_danh_muc, $id);
            header('location:index.php');
        } else {
            $id = $_GET['id_course'];
            $courseModel = new CourseModel();
            $data = $courseModel->queryCourse($id);
            $catalogModel = new CourseCatalog();
            $dataCatalog = $catalogModel->getAllCourseCatalog();
            $template = "views/course/update.php";
            include "views/layout.php";
        }
    }

    public function deleteCourse()
    {
        $id = $_GET['id_course'];
        $courseModel = new CourseModel();
        $courseModel ->deleteCourse($id);
        header('location:index.php');
    }
}
