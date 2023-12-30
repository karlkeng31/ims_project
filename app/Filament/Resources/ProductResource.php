<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Relationship;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-swatch';
    protected static ?string $activeNavigationIcon = 'heroicon-s-swatch';
    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ]),
                TextInput::make('name')->placeholder('Product'),
                Select::make('category_id')
                    ->relationship('category', 'name'),
                Select::make('unit_id')
                    ->relationship('unit', 'name'),
                TextInput::make('buying_price')->numeric()->placeholder('0'),
                TextInput::make('selling_price')->numeric()->placeholder('0'),
                TextInput::make('quantity')->numeric()->placeholder('0'),
                TextInput::make('quantity_alert')->numeric()->placeholder('0'),
                /* TextInput::make('tax'),
                Select::make('tax_type')
                    ->options([
                        'draft' => 'Draft',
                        'reviewing' => 'Reviewing',
                        'published' => 'Published',
                    ]), */
                Textarea::make('description')
                    ->rows(5)
                    ->cols(20)
            ]);
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product_name'),
                TextColumn::make('category_id'),
                TextColumn::make('buying_price'),
                TextColumn::make('selling_price'),
                TextColumn::make('stock'),
                TextColumn::make('unit_id'),
                ImageColumn::make('product_image')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
