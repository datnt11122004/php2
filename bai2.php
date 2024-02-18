<?php
    class HocSinh
    {
        private $hoTen;
        private $diaChi;
        private $namSinh;
        private $email;
        private $sdt;
        private $diemToan;
        private $diemLy;
        private $diemHoa;

    /**
     * @param $hoTen
     * @param $diaChi
     * @param $namSinh
     * @param $email
     * @param $sdt
     * @param $diemToan
     * @param $diemLy
     * @param $diemHoa
     */
//    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt, $diemToan, $diemLy, $diemHoa)
//    {
//        $this->hoTen = $hoTen;
//        $this->diaChi = $diaChi;
//        $this->namSinh = $namSinh;
//        $this->email = $email;
//        $this->sdt = $sdt;
//        $this->diemToan = $diemToan;
//        $this->diemLy = $diemLy;
//        $this->diemHoa = $diemHoa;
//    }

    /**
     * @param mixed $hoTen
     */
    public function setHoTen($hoTen): void
    {
        $this->hoTen = $hoTen;
    }

    /**
     * @param mixed $diaChi
     */
    public function setDiaChi($diaChi): void
    {
        $this->diaChi = $diaChi;
    }

    /**
     * @param mixed $namSinh
     */
    public function setNamSinh($namSinh): void
    {
        $this->namSinh = $namSinh;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $sdt
     */
    public function setSdt($sdt): void
    {
        $this->sdt = $sdt;
    }

    /**
     * @param mixed $diemToan
     */
    public function setDiemToan($diemToan): void
    {
        $this->diemToan = $diemToan;
    }

    /**
     * @param mixed $diemLy
     */
    public function setDiemLy($diemLy): void
    {
        $this->diemLy = $diemLy;
    }

    /**
     * @param mixed $diemHoa
     */
    public function setDiemHoa($diemHoa): void
    {
        $this->diemHoa = $diemHoa;
    }
    public function tinhDiemTB() {
        return ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
    }
    public function hienThiThongTin() {
        echo "Họ tên: " . $this->hoTen . "<br>";
        echo "Địa chỉ: " . $this->diaChi . "<br>";
        echo "Năm sinh: " . $this->namSinh . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Số điện thoại: " . $this->sdt . "<br>";
        echo "Điểm trung bình: " . $this->tinhDiemTB() . "<br>";
    }



    }

$hocSinh = new HocSinh;
$hocSinh->setHoten("Nguyen Van A");
$hocSinh->setDiachi("123 Street, City");
$hocSinh->setNamsinh(2000);
$hocSinh->setEmail("nguyenvana@example.com");
$hocSinh->setSdt("0123456789");
$hocSinh->setDiemToan(8.5);
$hocSinh->setDiemLy(9.0);
$hocSinh->setDiemHoa(7.5);
$hocSinh->hienThiThongTin();


?>

<br>
<br>


<?php
class GiangVien {
    private $hoten;
    private $diachi;
    private $namsinh;
    private $email;
    private $sdt;
    private $luongCB;
    private $soGioDay;

    // Phương thức set cho các thuộc tính
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

    public function setLuongCB($luongCB) {
        $this->luongCB = $luongCB;
    }

    public function setSoGioDay($soGioDay) {
        $this->soGioDay = $soGioDay;
    }

    // Phương thức tính tổng lương
    public function tinhTongLuong() {
        return $this->luongCB * $this->soGioDay;
    }

    // Phương thức hiển thị thông tin giảng viên
    public function hienThiThongTin() {
        echo "Họ tên: " . $this->hoten . "<br>";
        echo "Địa chỉ: " . $this->diachi . "<br>";
        echo "Năm sinh: " . $this->namsinh . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Số điện thoại: " . $this->sdt . "<br>";
        echo "Tổng lương: " . $this->tinhTongLuong() . "<br>";
    }
}

$giangVien = new GiangVien();
$giangVien->setHoten("Tran Thi B");
$giangVien->setDiachi("456 Street, City");
$giangVien->setNamsinh(1980);
$giangVien->setEmail("tranthib@example.com");
$giangVien->setSdt("0987654321");
$giangVien->setLuongCB(2000000);
$giangVien->setSoGioDay(30);
$giangVien->hienThiThongTin();


?>
<br><br>
<?php
function myNamed($a, $b = 2, $c = 4) { echo "$a $b $c"; }
myNamed(1, c: 3);
?>