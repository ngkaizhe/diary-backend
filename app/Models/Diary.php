<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Diary
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property string $diary_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Diary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Diary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Diary query()
 * @method static \Illuminate\Database\Eloquent\Builder|Diary whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diary whereDiaryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diary whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diary whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diary whereUserId($value)
 * @mixin \Eloquent
 */
class Diary extends Model
{
    use HasFactory;
}
