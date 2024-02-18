<?php
interface Dichuyen
{
    public function diChuyen();
}

class ConNguoi implements Dichuyen
{
    public function diChuyen()
    {
       echo 174258;
       die();
    }
}
$cn = new ConNguoi();
$cn->diChuyen();