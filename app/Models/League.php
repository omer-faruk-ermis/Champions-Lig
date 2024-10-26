<?php

namespace App\Models;

use App\Models\Team\Team;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class League
 *
 * @package App\Models
 *
 * @property int       $id
 * @property string    $name
 * @property int       $total_matches
 *
 * @property-read Team $teams
 */
class League extends AbstractModel
{
    protected $table    = 'champions_league.leagues';
    protected $fillable = [
        'name',
        'total_matches'
    ];

    /**
     * @return BelongsToMany
     */
    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }
}
