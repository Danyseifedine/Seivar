<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'link',
                        'bulletList',
                        'orderedList',
                        'blockquote',
                        'codeBlock',
                        'h2',
                        'h3',
                    ]),

                SpatieMediaLibraryFileUpload::make('images')
                    ->label('Project Images')
                    ->collection('images')
                    ->multiple()
                    ->minFiles(1)
                    ->maxFiles(5)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                    ->image()
                    ->imageEditor()
                    ->reorderable()
                    ->appendFiles()
                    ->preserveFilenames()
                    ->columnSpanFull()
                    ->helperText('Upload 1 to 5 images for this project')
            ]);
    }
}
