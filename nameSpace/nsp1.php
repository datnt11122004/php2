<?php
namespace nsp1;
class SinhVien
{
    public $maSv;
    public $tenSv;

    /**
     * @param $maSv
     * @param $tenSv
     */
    public function __construct($maSv, $tenSv)
    {
        $this->maSv = $maSv;
        $this->tenSv = $tenSv;
    }


    public function hienThi()
    {
        echo $this->tenSv;
        echo $this->maSv;
    }

}