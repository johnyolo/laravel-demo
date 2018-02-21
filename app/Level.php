<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property integer next_level_xp_threshold
 */
class Level extends Model
{
    /**
     * @return Level|null
     */
    public function nextLevel()
    {
        return Level::query()->find($this->id + 1);
    }
}
