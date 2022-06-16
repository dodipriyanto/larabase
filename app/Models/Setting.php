<?php
/**
 * @author Dodi Priyanto<dodi.priyanto76@gmail.com>
 */
namespace App\Models;

use DigitalCloud\Blameable\Traits\Blameable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Setting extends Model
{
    use HasFactory, SoftDeletes, Uuid, Blameable;

    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $table = 'conf_setting';

    protected $fillable = [
        'id',
        'parameter',
        'type',
        'value',
    ];

}
