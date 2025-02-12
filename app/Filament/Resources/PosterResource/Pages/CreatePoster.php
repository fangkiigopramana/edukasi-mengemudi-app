<?php

namespace App\Filament\Resources\PosterResource\Pages;

use App\Filament\Resources\PosterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePoster extends CreateRecord
{
    protected static string $resource = PosterResource::class;
    protected static bool $canCreateAnother = false;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['uploadfile'])) {
            $filePath = $data['uploadfile']->store('posters', 'public'); 
            
            $data['image'] = 'storage/' . $filePath;  
        }
        
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}