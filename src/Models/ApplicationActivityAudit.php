<?php

namespace ColoredCow\LaravelAudit\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationActivityAudit extends Model
{
    protected $fillable = [ 'ip', 'action', 'referer'];
}