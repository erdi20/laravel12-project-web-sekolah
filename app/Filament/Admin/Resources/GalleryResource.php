<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\GalleryResource\Pages;
use App\Filament\Admin\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;
    protected static ?string $pluralLabel = 'Galeri';
    protected static ?string $label = 'foto';
    protected static ?string $slug = 'Galeri';
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Manajemen Sekolah';  // Opsional: kelompokkan navigasi
    protected static ?int $navigationSort = 2;  // Opsional: urutan navigasi

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Menggunakan Section sebagai wadah utama untuk memberikan judul dan deskripsi umum
                Section::make('Detail Galeri Baru')
                    ->description('Lengkapi informasi untuk item galeri Anda.')
                    ->schema([
                        Grid::make(2)  // Menggunakan Grid untuk menata Group secara horizontal
                            ->schema([
                                // Group 1: Informasi Dasar (Nama & Kategori)
                                Group::make()
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->label('Nama Item Galeri')  // Label yang lebih deskriptif
                                            ->placeholder('Masukkan nama item')  // Placeholder
                                            ->required()
                                            ->maxLength(255)
                                            ->columnSpanFull(),  // Pastikan mengambil lebar penuh di dalam Group-nya
                                        Forms\Components\Select::make('category')
                                            ->label('Kategori')  // Label yang jelas
                                            ->options([
                                                'Akademik' => 'Akademik',
                                                'Ekstrakulikuler' => 'Ekstrakurikuler',  // Perbaiki typo "Ekstrakulikuler"
                                                'Event' => 'Event',
                                                'Lain-lain' => 'Lain-lain',  // Tambahkan opsi jika memungkinkan
                                            ])
                                            ->native(false)  // Membuat select lebih modern (dropdown kustom)
                                            ->required()
                                            ->placeholder('Pilih kategori item galeri')  // Placeholder untuk Select
                                            ->columnSpanFull(),  // Pastikan mengambil lebar penuh
                                    ]),
                                // Group 2: Media & Status
                                Group::make()
                                    ->schema([
                                        Forms\Components\FileUpload::make('image')
                                            ->label('Gambar Utama')  // Label yang jelas
                                            ->image()
                                            ->imageEditor()  // Tambahkan editor gambar (crop, rotate)
                                            ->directory('galeri')  // Pastikan direktori sudah benar
                                            ->visibility('public')  // Pastikan gambar bisa diakses publik
                                            ->disk('public')  // Gunakan disk 'public'
                                            ->required()
                                            ->columnSpanFull()
                                            ->deleteUploadedFileUsing(function ($file) {
                                                if ($file && Storage::disk('public')->exists($file)) {
                                                    Storage::disk('public')->delete($file);
                                                }
                                            })
                                            ->helperText('Unggah gambar untuk item galeri ini. Ukuran maksimal 2MB.'),  // Helper text informatif
                                        Forms\Components\Toggle::make('status')
                                            ->label('Aktifkan Tampilan di Website?')  // Label yang lebih user-friendly
                                            ->inline(false)  // Toggle tidak inline dengan label
                                            ->helperText('Aktifkan agar item galeri ini tampil di halaman publik.')
                                            ->default(true)  // Default aktif, agar user tidak lupa
                                            ->required()
                                            ->columnSpanFull(),  // Mengambil lebar penuh
                                    ]),
                            ]),
                        // Deskripsi (di luar Group agar mengambil lebar penuh di bawah grid)
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi Lengkap')  // Label yang lebih jelas
                            ->placeholder('Tuliskan deskripsi atau detail lengkap tentang item galeri ini.')
                            ->rows(6)  // Memberikan tinggi awal yang lebih nyaman
                            ->required()
                            ->columnSpanFull(),  // Pastikan mengambil lebar penuh dari Card
                    ])
                    ->columns(1),  // Mengatur Section agar field di dalamnya tersusun vertikal (diabaikan jika ada Grid di dalamnya)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ToggleColumn::make('status'),
                Tables\Columns\TextColumn::make('category')
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
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                        ->before(function ($record) {
                            if ($record->image) {
                                Storage::disk('public')->delete($record->image);
                            }
                        }),
                ])
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
