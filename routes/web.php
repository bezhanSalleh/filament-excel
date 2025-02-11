<?php

Route::get('filament-excel/{path}', function (string $path) {
    ob_end_clean();
    return
        response()
            ->download(Storage::disk('filament-excel')->path($path), substr($path, 37))
            ->deleteFileAfterSend();
})
    ->where('path', '.*')
    ->name('filament-excel-download');
