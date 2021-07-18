<?php


class Product
{
    private $id;
    private $name;
    private $srcImg;

    public function __construct($id, $name, $srcImg)
    {
        $this->id = $id;
        $this->name = $name;
        $this->srcImg = $srcImg;
    }

    public function getProductInfoArr()
    {
        $infoArr = array(
            'id' => $this->id,
            'name' => $this->name,
            'srcImg' => $this->srcImg
        );
        return $infoArr;
    }
}

function products()
{
    $arr = array();
    
}



