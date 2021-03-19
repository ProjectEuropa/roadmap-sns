<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoadmapTutorial extends Model
{
    public function roadmap(): BelongsTo
    {
        return $this->belongsTo('App\Roadmap');
    }
}
