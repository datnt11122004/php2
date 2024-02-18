<?php
require_once "controllers/CourseController.php";
require_once "controllers/CourseCatalog.php";
$url = $_GET['url'] ?? '/';

switch ($url) {
    case "/":
        $course = new CourseController();
        $course->listCourse();
        break;
    case "add":
        $course = new CourseController();
        $course->addCourse();
        break;
    case 'update_course':
        $course = new CourseController();
        $course -> updateCourseController();
        break;
    case 'delete_course':
        $course = new CourseController();
        $course->deleteCourse();
        break;
    case 'list_catalog':
        $catalog = new CourseCatalogController();
        $catalog -> listCourseCatalog();
        break;
    case 'add_catalog':
        $catalog = new CourseCatalogController();
        $catalog -> addCourseCatalog();
        break;
    case 'update_catalog':
        $catalog = new CourseCatalogController();
        $catalog -> updateCourseCatalogController();
        break;
    case 'delete_catalog':
        $catalog = new CourseCatalogController();
        $catalog -> deleteCatalog();
        break;
    default:
        echo 404;
        break;
}

?>
