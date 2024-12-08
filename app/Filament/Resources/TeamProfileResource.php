<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamProfileResource\Pages;
use App\Filament\Resources\TeamProfileResource\RelationManagers;
use App\Models\TeamProfile;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ImageUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Label;

class TeamProfileResource extends Resource
{
    protected static ?string $model = TeamProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralLabel = 'Team Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make(name: "name")
                ->required()
                ->label("Nama anda"),
                TextInput::make(name: "role")
                ->required()
                ->label("Role anda"),
                ImageUpload::make(name: "image_path")
                ->required()
                ->label("Foto diri")
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make(name: "name"),
                TextColumn::make(name: "role"),
                ImageColumn::make(name: "image_path")
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTeamProfiles::route('/'),
            'create' => Pages\CreateTeamProfile::route('/create'),
            'edit' => Pages\EditTeamProfile::route('/{record}/edit'),
        ];
    }
}
