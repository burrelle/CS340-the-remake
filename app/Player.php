<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uniformNumber', 'firstName', 'lastName', 'age', 'teamId', 'positionGroupId', 'positionId'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class, 'teamId');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'positionId');
    }

    public function positionGroup()
    {
        return $this->belongsTo(PositionGroup::class, 'positionGroupId');
    }
}
