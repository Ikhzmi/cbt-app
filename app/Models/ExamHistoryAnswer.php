<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExamHistoryAnswer extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_correct' => 'boolean',
        'is_doubtful' => 'boolean',
        'score_earned' => 'integer',
    ];

    public function examHistory(): BelongsTo
    {
        return $this->belongsTo(ExamHistory::class);
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function selectedAnswer(): BelongsTo
    {
        return $this->belongsTo(Answer::class, 'selected_answer_id');
    }
}
