<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['quantity','subTotal','productID','orderID'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function getSubtotal()
    {
        return $this->attributes['subTotal'];
    }

    public function setSubtotal($subTotal)
    {
        $this->attributes['subTotal'] = $subTotal;
    }

    public function getProductId()
    {
        $this->attributes['productID'];
    }

    public function setProductID($productID)
    {
        $this->attributes['productID'] = $productID;
    }

    public function getOrderId()
    {
        $this->attributes['orderID'];
    }

    public function setOrderID($productID)
    {
        $this->attributes['orderID'] = $productID;
    }

    public function order()
    {
        return $this -> belongsTo(Order::class);
    }

    public function product()
    {
        return $this -> belongsTo(Product::class);
    }
}
