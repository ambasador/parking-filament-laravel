<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpaceResource\Pages;
use App\Filament\Resources\SpaceResource\RelationManagers;
use App\Models\Space;
use App\Models\Parking;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
class SpaceResource extends Resource
{
    protected static ?string $model = Space::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-clip';
    protected static ?string $navigationGroup = 'Parking Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('parking_id')
                ->relationship('parking', 'id')
                ->label('Parking')
                ->options(Parking::all()->pluck('name', 'id'))
                ->searchable()
                ->reactive(),
                TextInput::make('externalid')
                ->required()
                ->minValue(0)
                ->maxValue(100)
                ->maxLength(100),
                TextInput::make('active')
                ->required()
                ->minValue(0)
                ->maxValue(1)
                ->maxLength(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('parking.name')->sortable()->searchable(),
                TextColumn::make('externalid')->sortable()->searchable(),
                TextColumn::make('active')->sortable()->searchable(),
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
            'index' => Pages\ListSpaces::route('/'),
            'create' => Pages\CreateSpace::route('/create'),
            'edit' => Pages\EditSpace::route('/{record}/edit'),
        ];
    }    
}
