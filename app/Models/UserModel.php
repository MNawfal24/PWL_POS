<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = 'm_user';
    
    // Mendefinisikan primary key dari tabel tersebut
    protected $primaryKey = 'user_id';


    protected $fillable = ['level_id' , 'username', 'nama'];
    
}