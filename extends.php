<?php
//class ConNguoi
//{
//
//    public $tay;
//    public $chan;
//    public $mat;
//    public $mui;
//
//    /**
//     * @param $tay
//     * @param $chan
//     * @param $mat
//     * @param $mui
//     */
//    public function __construct($tay, $chan, $mat, $mui)
//    {
//        $this->tay = $tay;
//        $this->chan = $chan;
//        $this->mat = $mat;
//        $this->mui = $mui;
//    }
//
//
//    public function an()
//    {
//        echo 'An bang mom';
//    }
//
//}
//class NguoiLon extends ConNguoi
//{
//    public $longNach;
//
//    /**
//     * @param $longNach
//     */
//    public function __construct($chan, $tay, $mat, $mui, $longNach)
//    {
//        parent::__construct($tay,$chan,$mat,$mui);
//        $this->longNach = $longNach;
//    }
//
//
//    public function di()
//    {
//        echo $this -> tay;
//        echo 'Di chuyen';
//    }
//
//    public function ngu()
//    {
//        echo 'Khong ngu';
//    }
//
//}
//
//class TreCon extends NguoiLon
//{
//    public function bo()
//    {
//        echo 'Bang tat ca';
//    }
//}
//
//?>

<?php
class ConNguoi {
    private $hoten;
    private $diachi;
    private $namsinh;
    private $email;
    private $sdt;

    public function setHoten($hoten) {
        $this->hoten = $hoten;
    }

    public function setDiachi($diachi) {
        $this->diachi = $diachi;
    }

    public function setNamsinh($namsinh) {
        $this->namsinh = $namsinh;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSdt($sdt) {
        $this->sdt = $sdt;
    }

    public function tinhTuoi() {
        return date('Y') - $this->namsinh;
    }

    public function hienThiThongTin() {
        echo "Ho ten: " . $this->hoten . "<br>";
        echo "Dia chi: " . $this->diachi . "<br>";
        echo "Tuoi: " . $this->tinhTuoi() . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "SDT: " . $this->sdt . "<br>";
    }
}

class HocSinh extends ConNguoi {
    private $diemToan;
    private $diemLy;
    private $diemHoa;

    public function setDiemToan($diemToan) {
        $this->diemToan = $diemToan;
    }

    public function setDiemLy($diemLy) {
        $this->diemLy = $diemLy;
    }

    public function setDiemHoa($diemHoa) {
        $this->diemHoa = $diemHoa;
    }

    public function tinhDiemTB() {
        return ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
    }

    public function hienThiThongTin() {
        parent::hienThiThongTin();
        echo "Diem TB: " . $this->tinhDiemTB() . "<br>";
    }
}

class GiangVien extends ConNguoi {
    private $luongCB;
    private $soGioDay;

    public function setLuongCB($luongCB) {
        $this->luongCB = $luongCB;
    }

    public function setSoGioDay($soGioDay) {
        $this->soGioDay = $soGioDay;
    }

    public function tinhTongLuong() {
        return $this->luongCB * $this->soGioDay;
    }

    public function hienThiThongTin() {
        parent::hienThiThongTin();
        echo "Tong luong: " . $this->tinhTongLuong() . "<br>";
    }
}


$hocSinh = new HocSinh();
$hocSinh->setHoten("Nguyen Van A");
$hocSinh->setDiachi("Ha Noi");
$hocSinh->setNamsinh(2000);
$hocSinh->setEmail("nguyenvana@gmail.com");
$hocSinh->setSdt("123456789");
$hocSinh->setDiemToan(8.5);
$hocSinh->setDiemLy(9.0);
$hocSinh->setDiemHoa(7.5);
$hocSinh->hienThiThongTin();
echo '<br>';
$giangVien = new GiangVien();
$giangVien->setHoten("Tran Thi B");
$giangVien->setDiachi("Ho Chi Minh");
$giangVien->setNamsinh(1980);
$giangVien->setEmail("tranthib@gmail.com");
$giangVien->setSdt("987654321");
$giangVien->setLuongCB(1000000);
$giangVien->setSoGioDay(20);
$giangVien->hienThiThongTin();

