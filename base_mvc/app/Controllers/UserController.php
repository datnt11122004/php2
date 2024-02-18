<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Repositories\BaseRepository;

class  UserController extends BaseController {

    protected $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function index(){
//        echo "123";
//        die();
        $user = $this->user->all();
//        var_dump($category);
//        die();
        return $this->render('user.list', compact('user'));
    }
    public function addUser(){
        return $this->render('user.add');
    }
    public function postUser(){
        // validate form
        if(isset($_POST['add'])){
            $error = [];
            // rỗng
            if(empty($_POST['name'])){
                $error[] = "Bạn vui lòng nhập tên người dùng";
            }
            if(empty($_POST['email'])){
                $error[] = "Bạn vui lòng nhập email";
            }
            if(empty($_POST['address'])){
                $error[] = "Bạn vui lòng nhập địa chỉ";
            }
            if(count($error)>=1){
                flash('errors', $error, 'add-user');
            }else{
                $check = $this->user->create(null, $_POST['name'],$_POST["email"],$_POST["address"]);
                if ($check){
                    flash('success', "Thêm thành công", 'add-user');
                }
            }
        }

    }
    public function detail($id){
//        var_dump($id);
//        die();
        $user = $this->user->findById($id);
        return $this->render('user.edit', compact('user'));
    }
    public function editUser($id){
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])){

            $error = [];
            // rỗng
            if(empty($_POST['name'])){
                $error[] = "Bạn vui lòng nhập tên người dùng";
            }
            if(empty($_POST['email'])){
                $error[] = "Bạn vui lòng nhập email";
            }
            if(empty($_POST['address'])){
                $error[] = "Bạn vui lòng nhập địa chỉ";
            }
            if(count($error)>=1){
                flash('errors', $error, 'detail-product/'.$id);
            }else{
                $check = $this->user->update($id, $_POST['name'], $_POST["email"], $_POST['address']);
                if ($check){
                    $editRoute = 'detail-user/'.$id;
                    flash('success', "Sửa thành công", $editRoute);
                }
            }
        }
    }

    public function delete($id){
        $this->user->delete($id);
        $listUser = 'list-user';
        flash('success',"",$listUser);
    }
}
