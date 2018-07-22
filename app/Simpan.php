<?php

namespace App;

class Simpan
{
  public $items;

  public function add($item,$id){
    $SavedItem = ['item'=>$item];
    $this->items[$id]= $SavedItem;
  }
}
