<?php
//class SinhVien{
//
//    public $maSv;
//
//    public $tenSv;
//
//    public $namSinh;
//
//    public  $maCC;
//
//    public $gioiTinh;
//
//    public $queQuan;
//
//    public $mauToc ;
//
//    public $chieuCao;
//
//    public $canNang ;
//
//    /**
//     * @param $maSv
//     * @param $tenSv
//     * @param $namSinh
//     * @param $maCC
//     * @param $gioiTinh
//     * @param $queQuan
//     * @param $mauToc
//     * @param $chieuCao
//     * @param $canNang
//     */
//    public function __construct($maSv, $tenSv, $namSinh, $maCC, $gioiTinh, $queQuan, $mauToc, $chieuCao, $canNang)
//    {
//        $this->maSv = $maSv;
//        $this->tenSv = $tenSv;
//        $this->namSinh = $namSinh;
//        $this->maCC = $maCC;
//        $this->gioiTinh = $gioiTinh;
//        $this->queQuan = $queQuan;
//        $this->mauToc = $mauToc;
//        $this->chieuCao = $chieuCao;
//        $this->canNang = $canNang;
//    }
//
//    public function setValueSinhVien($tenSv)
//    {
//        $this -> tenSv = $tenSv;
//    }
//
//    public function hienThiThongTin(){
//        echo $this -> tenSv .'<br>';
//        echo $this -> maSv .'<br>';
//        echo $this -> namSinh .'<br>';
//        echo $this -> maCC .'<br>';
//        echo $this -> tinhTuoi();
//    }
//
//    public function tinhTuoi()
//    {
//        return date('Y') - $this -> namSinh;
//    }
//}
//
//$sinhVien = new SinhVien('ph12345', 'Dat',2004,123456789,'Nam','Ha Noi','den','1m80',80);
////$sinhVien ->namSinh = 2001;
////$sinhVien -> maSv = 'PH12345';
////$sinhVien -> tenSv = 'test';
////$sinhVien -> maCC = '123456789';
//$sinhVien -> hienThiThongTin();

// tạo 1 class là Crush có những thuộc tính sau :
//$ten,$namSinh,$moiQuanHe,$diaChi,$email
// yêu cầu
// xây dựng phương thức khởi tạo có tham số truyền vào cho các thuộc tính trên
// xây dựng hàm tính tuổi có trả về = năm hiện tại - năm sinh
//xây dựng hàm kiemTraDoTuoiLayChong như sau
// nếu tuổi của crush >= 18  => đủ tuổi  lấy chồng
//nếu tuổi của crush < 18 Không đủ tuổi lấy chồng
// xây dựng hàm hiển thị thông tin crush  gồm :
//$ten-$namSinh-$moiQuanHe-$diaChi-$email-tuổi- đủ tuổi lấy chồng

class Crush
{
    public $ten;
    public $namSinh;
    public $moiQuanHe;
    public $diaChi;
    public $email;
    public $tuoiLayChong;
    public $tuoi;

    /**
     * @param $ten
     * @param $namSinh
     * @param $moiQuanHe
     * @param $diaChi
     * @param $email
     */
    public function __construct($ten, $namSinh, $moiQuanHe, $diaChi, $email)
    {
        $this->ten = $ten;
        $this->namSinh = $namSinh;
        $this->moiQuanHe = $moiQuanHe;
        $this->diaChi = $diaChi;
        $this->email = $email;
        $this->tuoi = $this->tinhTuoi($namSinh);
    }

    public function tinhTuoi($namSinh)
    {
        Return date('Y') - (int)$namSinh;
    }
    public function kiemTraDoTuoiLayChong($tuoi)
    {
        if($tuoi >= 18){
            Return $this -> tuoiLayChong = 'Du tuoi lay chong';
        }
        Return $this -> tuoiLayChong = 'Chua du tuoi lay chong';
    }

    public function hienThiThongTin()
    {
        echo $this ->ten . '<br>';
        echo $this ->namSinh . '<br>';
        echo $this ->moiQuanHe . '<br>';
        echo $this ->diaChi . '<br>';
        echo $this ->email . '<br>';
        echo $this ->tuoi . '<br>';
        echo $this -> kiemTraDoTuoiLayChong($this->tuoi);

    }


}

$crush = new Crush('Thu',2004,'Ban be','test','example@gmail.com');
$crush -> hienThiThongTin();
