<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoadmapTutorialTask extends Model
{
    public function tutorial(): BelongsTo
    {
        return $this->belongsTo('App\RoadmapTutorial');
    }
}
