<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleResource\Pages;
use App\Filament\Resources\VehicleResource\RelationManagers;
use App\Models\Vehicle;
use App\Models\Client;
use App\Models\Brand;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\TextInput;
class VehicleResource extends Resource
{
    protected static ?string $model = Vehicle::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationGroup = 'Parking Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('client_id')
                ->relationship('client', 'id')
                ->label('Client')
                ->options(Client::all()->pluck('name', 'id'))
                ->searchable()
                ->reactive(),
                Select::make('brand_id')
                ->relationship('brand', 'id')
                ->label('Brand')
                ->options(Brand::all()->pluck('name', 'id'))
                ->searchable() 
                ->reactive(),
                TextInput::make('color')
                ->required()
                ->maxLength(255),
                TextInput::make('plate')
                ->required()
                ->maxLength(255),
                TextInput::make('model')
                ->required()
                ->maxLength(255),
                Select::make('year')
                ->options([
                    '2018' => '2018',
                    '2019' => '2019',
                    '2020' => '2020',
                    '2021' => '2021',
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('client.name')->sortable()->searchable(),
                TextColumn::make('brand.name')->sortable()->searchable(),
                TextColumn::make('color')->sortable()->searchable(),
                TextColumn::make('plate')->sortable()->searchable(),
                TextColumn::make('model')->sortable()->searchable(),
                TextColumn::make('year')->sortable()->searchable(),
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
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicle::route('/create'),
            'edit' => Pages\EditVehicle::route('/{record}/edit'),
        ];
    }    
}
