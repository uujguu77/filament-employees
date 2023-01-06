<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'name',];

    public function country()
    {
        return $this->belongsTo(Country::class);
       
}
    public function employee()
    {
    return $this->hasMany(Employee::class);
}
    public function cities()
    {
        return $this->HasMany(City::class);
    }
}