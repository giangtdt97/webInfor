<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class FeatureImage extends Model
{
    protected $table = 'feature_images';
    use Resizable;
}
