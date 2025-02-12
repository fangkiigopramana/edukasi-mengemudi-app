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
        if (isset($data['uploadfile'])) {
            $filePath = $data['uploadfile']->store('videos', 'public');
            $data['url'] = 'storage/' . $filePath;
        }
        
        return $data;
    }
}
