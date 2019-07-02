<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Like
 *
 * @property-read \App\Post $post
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Like newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Like newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Like onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Like query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Like withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Like withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $post_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Like whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Like whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Like whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Like wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Like whereUpdatedAt($value)
 */
class Like extends Model
{
    use SoftDeletes;

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
