<?php

namespace App\Models;

use Carbon\Carbon;
use Database\Factories\ProfileFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Profile
 *
 * @property-read User|null $user
 * @property-read integer $id
 * @property-read integer $user_id
 * @property-read string $address
 * @property-read string $phone
 * @property-read Carbon|null $created_at
 * @property-read Carbon|null $updated_at
 *
 * @method static ProfileFactory factory($count = null, $state = [])
 * @method static Builder|Profile newModelQuery()
 * @method static Builder|Profile newQuery()
 * @method static Builder|Profile query()
 * @method static Builder|Profile whereId($value)
 * @method static Builder|Profile whereUserId($value)
 * @method static Builder|Profile whereAddress($value)
 * @method static Builder|Profile wherePhone($value)
 * @method static Builder|Profile whereCreatedAt($value)
 * @method static Builder|Profile whereUpdatedAt($value)
 *
 * @mixin Eloquent
 */

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'phone',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
