<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Name'),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->label('Email'),

                Textarea::make('message')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull()
                    ->label('Message'),

                Toggle::make('is_read')
                    ->label('Mark as Read')
                    ->default(false)
                    ->hiddenOn('view'),
            ]);
    }
}
