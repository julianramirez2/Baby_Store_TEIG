<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['details','total','date','userID'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getDetails()
    {
        return $this->attributes['name'];
    }

    public function setDetails($details)
    {
        $this->attributes['details'] = $details;
    }

    public function getTotal()
    {
        return $this->attributes['total'];
    }

    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }

    public function getDate()
    {
        return $this->attributes['date'];
    }

    public function setDate($date)
    {
        $this->attributes['date'] = $date;
    }

    public function getUserID()
    {
        return $this->attributes['category'];
    }

    public function setUserID($userID)
    {
        $this->attributes['userID'] = $userID;
    }

    public function user()
    {
        return $this -> belongsTo(User::class);
    }

    public function items()
    {
        return $this -> hasMany(Item::class);
    }
}
