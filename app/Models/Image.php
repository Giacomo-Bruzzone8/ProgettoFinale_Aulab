<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'path'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public static function getUrlByFilePath($filePath, $w = null, $h = null)
    {
        if (!$w && !$h) {
            return Storage::url($filePath);
        }
        $path = dirname($filePath);
        $filename = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}_{$filename}";

        // Se il ritaglio non è stato ancora generato (coda non attiva o job falliti),
        // mostra l'immagine originale invece di un link rotto.
        if (!Storage::disk('public')->exists($file)) {
            return Storage::url($filePath);
        }

        return Storage::url($file);
    }
    public function getUrl($w = null, $h = null)
    {
        return self::getUrlByFilePath($this->path, $w, $h);
    }

    protected function casts(): array
    {
        return [
            'labels' => 'array',
        ];
    }
}
