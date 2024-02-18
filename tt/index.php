<?php


abstract class HinhKhoi
{
    abstract public function chuVi();
    abstract public function DienTich();
}

class ChuNhat extends HinhKhoi
{
    protected $chieuDai = 5 ;
    protected $chieuRong = 2;
    public function chuvi()
    {
        echo "Chu vi hình chữ nhật: ". ($this->chieuDai+$this->chieuRong)*2 ;
    }

    public function DienTich()
    {
        echo "Diện tích hình chữ nhật: ". ($this->chieuDai*$this->chieuRong) ;
    }
}

class HinhVuong extends HinhKhoi
{
    protected $canh =5 ;
    public function chuvi()
    {
        echo "Chu vi hình vuông: ". $this->canh*4 ;
    }

    public function DienTich()
    {
        echo "Diện tích hình vuông: ". $this->canh*$this->canh ;
    }
}

class HinhTron extends HinhKhoi
{
    protected $banKinh ;
    const pi = 3.14;
    public function chuvi()
    {
        $this -> banKinh = 5;
        echo "Chu vi hình tròn: ". $this->banKinh*2*self::pi ;
    }

    public function DienTich()
    {
        echo "Diện tích hình tròn: ". $this->banKinh*$this->banKinh*self::pi ;
    }
}
echo '<pre>';
$chuNhat = new ChuNhat();
$chuNhat->chuvi();
$chuNhat->dienTich();
echo '<br>';
$HinhVuong = new HinhVuong();
$HinhVuong->chuvi();
$HinhVuong->dienTich();
echo '<br>';
$HinhTron = new HinhTron();
$HinhTron->chuvi();
$HinhTron->dienTich();
echo '<br>';
