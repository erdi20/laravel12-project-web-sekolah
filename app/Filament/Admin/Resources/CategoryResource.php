<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Filament\Admin\Resources\CategoryResource\Pages\ManageCategories;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';  // Icon tag untuk kategori

    protected static ?string $activeNavigationIcon = 'heroicon-s-tag';

    protected static ?string $label = 'Kategori';

    protected static ?string $pluralLabel = 'Kategori';

    protected static ?string $pluralModelLabel = 'Kategori';

    protected static ?string $navigationGroup = 'Manajemen Blog';  // Kelompokkan dengan Post

    protected static ?string $navigationLabel = 'Daftar Kategori';

    protected static ?int $navigationSort = 2;  // Setelah Post

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Detail Kategori')
                    ->description('Informasi dasar untuk kategori postingan Anda.')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Kategori')  // Label yang lebih jelas
                            ->placeholder('Contoh: Teknologi, Tutorial, Berita')  // Contoh placeholder
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)  // Update slug secara live saat nama diisi
                            ->afterStateUpdated(fn(string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),  // Generate slug otomatis saat create
                        Forms\Components\TextInput::make('slug')
                            ->label('URL Slug')  // Label yang lebih user-friendly
                            ->placeholder('Contoh: teknologi-terbaru')  // Placeholder
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)  // Pastikan slug unik saat create/edit
                            ->helperText('Slug akan digunakan di URL. Pastikan unik dan mudah dibaca (huruf kecil, dipisahkan tanda hubung).'),  // Helper text yang informatif
                    ])
                    ->columns(1),  // Karena hanya 2 field, tata vertikal lebih baik
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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

    public static function getPages(): array
    {
        return [
            'index' => ManageCategories::route('/'),
        ];
    }
}
