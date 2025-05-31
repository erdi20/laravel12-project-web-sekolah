<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkstrakulikulerResource\Pages;
use App\Filament\Resources\EkstrakulikulerResource\RelationManagers;
use App\Models\Ekstrakulikuler;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;  // Import Str facade untuk helper string

class EkstrakulikulerResource extends Resource
{
    protected static ?string $model = Ekstrakulikuler::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';  // Mengganti ikon menjadi lebih relevan

    protected static ?string $navigationGroup = 'Manajemen Sekolah';  // Opsional: kelompokkan navigasi

    protected static ?int $navigationSort = 3;  // Opsional: urutan navigasi

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()  // Menggunakan Card untuk grouping field agar lebih rapi
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Ekstrakurikuler')  // Label yang lebih user-friendly
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)  // Pastikan nama unik saat membuat/mengedit
                            ->columnSpanFull(),  // Mengambil lebar penuh di layout default
                        // Menggunakan RichEditor untuk deskripsi yang lebih kaya
                        Forms\Components\RichEditor::make('description')
                            ->label('Deskripsi')
                            ->required()
                            ->toolbarButtons([  // Atur toolbar sesuai kebutuhan
                                'blockquote',
                                'bold',
                                'bulletList',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->columnSpanFull(),  // Mengambil lebar penuh
                        // FileUpload untuk gambar. Jika menggunakan Spatie Media Library, gunakan SpatieMediaLibraryFileUpload
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar Utama')
                            ->image()  // Hanya menerima file gambar
                            ->directory('ekstrakurikuler')  // Simpan di direktori khusus
                            ->visibility('public')  // Pastikan file bisa diakses publik
                            ->required()
                            ->imageEditor()  // Memungkinkan user mengedit gambar (potong, rotate)
                            ->columnSpanFull(),
                    ])
                    ->columns(1),  // Mengatur layout Card menjadi 1 kolom
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->square(),  // Tampilkan gambar dalam rasio kotak
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Ekstrakurikuler')
                    ->searchable()
                    ->sortable(),
                // Menampilkan deskripsi dengan membatasi panjang dan menghilangkan tag HTML
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->html()  // Render sebagai HTML jika Anda tetap menyimpan HTML di DB
                    ->limit(50)  // Batasi teks untuk tampilan tabel
                    ->wrap()  // Memastikan teks wrap jika terlalu panjang
                    ->tooltip(fn(Ekstrakulikuler $record): string => strip_tags($record->description))  // Tampilkan tooltip teks penuh tanpa HTML
                    ->formatStateUsing(fn(string $state): string => Str::limit(strip_tags($state), 50))  // Hapus HTML dan batasi teks
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan, contoh:
                // Tables\Filters\SelectFilter::make('status')
                //     ->options([
                //         'active' => 'Aktif',
                //         'inactive' => 'Tidak Aktif',
                //     ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),  // Menambahkan Delete Action langsung
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
            'index' => Pages\ListEkstrakulikulers::route('/'),
            'create' => Pages\CreateEkstrakulikuler::route('/create'),
            'edit' => Pages\EditEkstrakulikuler::route('/{record}/edit'),
        ];
    }

    // Opsional: Jika Anda ingin menambahkan kemampuan soft delete
    // public static function getEloquentQuery(): Builder
    // {
    //     return parent::getEloquentQuery()
    //         ->withoutGlobalScopes([
    //             SoftDeletingScope::class,
    //         ]);
    // }
}
