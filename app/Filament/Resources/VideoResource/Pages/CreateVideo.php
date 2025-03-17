<?php

namespace App\Filament\Resources\VideoResource\Pages;

use App\Filament\Resources\VideoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVideo extends CreateRecord
{
    protected static string $resource = VideoResource::class;
    protected static bool $canCreateAnother = false;


    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['url'])) {
            $data['url'] = str_replace('https://www.youtube.com/shorts/', 'https://www.youtube.com/embed/', $data['url']) . '?rel=0';
        }
        
        return $data;
    }
}
