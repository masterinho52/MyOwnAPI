<?php namespace app;


use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {

    protected $table = 'vehicles';

    protected $primaryKey ='serial';

    protected $fillable = ['color','power','capacity','speed','maker_id'];

    protected $hidden = ['serial','created_at','updated_at','maker_id'];

    public  function maker(){
        return $this->belongsTo('App/Maker');
    }

}