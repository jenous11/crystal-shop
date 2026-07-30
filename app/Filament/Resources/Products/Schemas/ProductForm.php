<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rs. '),
                FileUpload::make('image')
                    ->image(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Toggle::make('is_featured')
                    ->required(),
                Toggle::make('is_stock')
                    ->required(),
            ]);
    }
}
