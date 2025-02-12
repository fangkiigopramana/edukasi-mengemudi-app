<?php

namespace App\Filament\Resources\PosterResource\Pages;

use App\Filament\Resources\PosterResource;
use App\Models\Poster;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditPoster extends EditRecord
{
    protected static string $resource = PosterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(function (Poster $record) {
                    if ($record->image) {
                        Storage::disk('public')->delete($record->image);
                    }
                })
        ];
    }
}
