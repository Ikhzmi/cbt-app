<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'threshold' => 'decimal:2',
        'started_at' => 'datetime',
        'expired_at' => 'datetime',
        'exact_time' => 'boolean',
        'is_available' => 'boolean',
    ];

    // Relasi many-to-many dengan model Subject
    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class)
            ->withPivot('qty');
    }

    /**
     * Satu-satunya definisi "ujian boleh dimulai" untuk siswa.
     * - Dimatikan admin (is_available=false) -> tutup.
     * - Belum waktunya (started_at future) -> tutup.
     * - Lewat batas akhir (expired_at past) -> tutup.
     * - Selain itu (termasuk exact_time tanpa expired_at) -> buka.
     * Durasi per sesi tetap ditegakkan oleh timer per riwayat.
     */
    public function isOpenForNewAttempts(?\Carbon\CarbonInterface $now = null): bool
    {
        $now ??= now();

        if (! $this->is_available) {
            return false;
        }

        if ($this->started_at && $now->lt($this->started_at)) {
            return false;
        }

        if ($this->expired_at && $now->gt($this->expired_at)) {
            return false;
        }

        return true;
    }

    /** Daftar ujian yang boleh DIMULAI siswa (dipakai menu Exam + statistik). */
    public function scopeOpenForStudents(\Illuminate\Database\Eloquent\Builder $query, ?\Carbon\CarbonInterface $now = null): void
    {
        $now ??= now();

        $query->where('is_available', true)
            ->where(fn ($q) => $q->whereNull('started_at')->orWhere('started_at', '<=', $now))
            ->where(fn ($q) => $q->whereNull('expired_at')->orWhere('expired_at', '>=', $now));
    }

    public function histories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ExamHistory::class);
    }
}
