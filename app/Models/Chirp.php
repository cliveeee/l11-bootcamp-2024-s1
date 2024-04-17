<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Events\ChirpCreated;
>>>>>>> upstream/main

class Chirp extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable=[
        'message',
    ];

=======
    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    // Declare relationship A CHIRP belongs to a USER
>>>>>>> upstream/main
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD

=======
>>>>>>> upstream/main
}
