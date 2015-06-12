<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model {

    public $table = "feedback";
	//

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'message'];

}
