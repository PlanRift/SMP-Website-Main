<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', \Illuminate\Support\Str::slug($state)) : null),
                \Filament\Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                \Filament\Forms\Components\DatePicker::make('date')
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('gallery')
                    ->multiple()
                    ->reorderable()
                    ->image()
                    ->directory('blogs')
                    ->disk('public')
                    ->columnSpanFull(),
                \Filament\Forms\Components\RichEditor::make('content')
                    ->columnSpanFull(),
                Section::make('SEO')
                    ->collapsed()
                    ->schema([
                        \RalphJSmit\Filament\SEO\SEO::make(),
                    ]),
            ]);
    }
}
