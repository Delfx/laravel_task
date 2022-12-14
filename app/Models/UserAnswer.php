<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quizForm()
    {
        return $this->belongsTo(QuizForm::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    use HasFactory;
}
