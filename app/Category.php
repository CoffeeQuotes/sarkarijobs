<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Article;

class Category extends \TCG\Voyager\Models\Category {

    public function article()
    {
      return $this->hasMany('Article:class');
    }
}
