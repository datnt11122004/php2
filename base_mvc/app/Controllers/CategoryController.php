<?php
namespace App\Controllers;
use App\Models\Category;
use App\Repositories\BaseRepository;

class  CategoryController extends BaseController {

    protected $category;
    public function __construct()
    {
        $this->category = new Category();
    }
    public function index(){
//        echo "123";
//        die();
        $category = $this->category->all();
//        var_dump($category);
//        die();
        return $this->render('category.list', compact('category'));
    }
    public function addCategory(){
        return $this->render('category.add');
    }
    public function postCategory(){
        // validate form
        if(isset($_POST['add'])){
            $error = [];
            // rỗng
            if(empty($_POST['name'])){
                $error[] = "Bạn vui lòng nhập tên danh mục";
            }
            if(count($error)>=1){
                flash('errors', $error, 'add-category');
            }else{
                $check = $this->category->create(null, $_POST['name']);
                if ($check){
                    flash('success', "Thêm thành công", 'add-category');
                }
            }
        }

    }
    public function detail($id){
//        var_dump($id);
//        die();
        $category = $this->category->findById($id);
        return $this->render('category.edit', compact('category'));
    }
    public function editCategory($id){
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])){

            $error = [];
            // rỗng
            if(empty($_POST['name'])){
                $error[] = "Bạn vui lòng nhập tên";
            }
            if(count($error)>=1){
                flash('errors', $error, 'detail-product/'.$id);
            }else{
                $check = $this->category->update($id, $_POST['name']);
                if ($check){
                    $editRoute = 'detail-category/'.$id;
                    flash('success', "Sửa thành công", $editRoute);
                }
            }
        }
    }

    public function delete($id){
        $this->category->delete($id);
        $listCategory = 'list-category';
        flash('success',"",$listCategory);
    }
}
