<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrialBalanceEntry extends Model
{
    protected $table = "trialBalanceEntries";
    protected $fillable = [ 'entry_time','account.name', 'category', 'amount'];
    public function account()
    {
        return $this->belongsTo('App\Account');
    }
}
