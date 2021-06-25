<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    public $id;
    public $name;
    public $twitter;
    public $imageUrl;

    public function __construct($id, $name, $twitter, $imageUrl)
    {
        $this->id = $id;
        $this->name = $name;
        $this->twitter = $twitter;
        $this->imageUrl = $imageUrl;
    }
}
