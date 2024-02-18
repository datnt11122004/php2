<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Repositories\BaseRepository;

class  ProductController extends BaseController {
    protected $product;

    protected $category;
    public function __construct()
    {
        $this->category = new Category();
        $this->product = new Product();
    }
    public function index(){
//        echo "123";
//        die();
        $products = $this->product->all();
//        var_dump($products);
//        die();
        return $this->render('product.list', compact('products'));
    }
    public function addProduct(){
        $listCategory = $this->category->all();
        return $this->render('product.add',compact('listCategory'));
    }
    public function postProduct(){
        // validate form
        if(isset($_POST['add'])){
            $error = [];
            // rỗng
            if(empty($_POST['name'])){
                $error[] = "Bạn vui lòng nhập tên";
            }
            if(empty($_POST['price'])){
                $error[] = "Bạn vui lòng nhập gia";
            }
            if($_POST['category_id'] <= 0){
                $error[] = "Bạn vui lòng chọn danh mục sản phẩm";
            }
            if(count($error)>=1){
                flash('errors', $error, 'add-product');
            }else{
                $check = $this->product->create(null, $_POST['name'],$_POST['price'],$_POST["category_id"]);
                if ($check){
                    flash('success', "Thêm thành công", 'add-product');
                }
            }
        }

    }
    public function detail($id){
//        var_dump($id);
//        die();
        $listCategory = $this->category->all();
        $products = $this->product->findById($id);
        return $this->render('product.edit', compact('products','listCategory'));
    }
    public function editProduct($id){
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])){

            $error = [];
            // rỗng
            if(empty($_POST['name'])){
                $error[] = "Bạn vui lòng nhập tên";
            }
            if(empty($_POST['price'])){
                $error[] = "Bạn vui lòng nhập gia";
            }
            if($_POST['category_id'] <= 0){
                $error[] = "Bạn vui lòng chọn danh mục sản phẩm";
            }
            if(count($error)>=1){
                flash('errors', $error, 'detail-product/'.$id);
            }else{
                $check = $this->product->update($id, $_POST['name'],$_POST['price'],$_POST['category_id']);
                if ($check){
                    $editRoute = 'detail-product/'.$id;
                    flash('success', "Sửa thành công", $editRoute);
                }
            }
        }
    }

    public function deleteProduct($id){
        $this->product->delete($id);
        $listProduct = 'list-product';
        flash('success',"",$listProduct);
    }
}
