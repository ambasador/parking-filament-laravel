<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PricetableResource\Pages;
use App\Filament\Resources\PricetableResource\RelationManagers;
use App\Models\Pricetable;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
class PricetableResource extends Resource
{
    protected static ?string $model = Pricetable::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-euro';
    protected static ?string $navigationGroup = 'Parking Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('normalprice')
                ->required()
                ->maxLength(255),
                TextInput::make('overtimeprice')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('normalprice')->sortable()->searchable(),
                TextColumn::make('overtimeprice')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPricetables::route('/'),
            'create' => Pages\CreatePricetable::route('/create'),
            'edit' => Pages\EditPricetable::route('/{record}/edit'),
        ];
    }    
}
