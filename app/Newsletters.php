<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Newsletters
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletters newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletters newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletters query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletters whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletters whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletters whereUpdatedAt($value)
 * @property string $name
 * @property string $email
 * @property string $phone
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletters whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletters whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletters wherePhone($value)
 */
class Newsletters extends Model
{
    protected $table = "newsletters";
    protected $fillable = ['name','phone','email'];
}
