<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model {

    protected $fillable = [
        'provider_id',
        'infringing_title',
        'infringing_link',
        'original_link',
        'original_description',
        'template',
        'content_removed',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function recipient()
    {
        return $this->belongsTo('App\Provider','provider_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getRecipientEmail()
    {
        return $this->recipient->copyright_email;
    }

    public function getOwnerEmail()
    {
        return $this->user->email;
    }

}
