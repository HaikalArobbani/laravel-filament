<?php 

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static string $title = 'My Custom Dashboard'; // Ganti 'My Custom Dashboard' dengan judul yang Anda inginkan

    protected function getHeaderWidgets(): array
    {
        // Konfigurasi widget atau tambahan lainnya
    }
}