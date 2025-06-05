<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Pages\ListFasilitas;
use App\Models\Fasilitas;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Admin\Resources\FasilitasResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Admin\Resources\FasilitasResource\RelationManagers;

class FasilitasResource extends Resource
{
    protected static ?string $model = Fasilitas::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationGroup = 'Manajemen Sekolah';  // Opsional: kelompokkan navigasi

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Dasar Fasilitas')  // Bagian pertama form
                    ->description('Detail umum tentang fasilitas sekolah.')
                    ->schema([
                        TextInput::make('nama')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Perpustakaan Utama')
                            ->helperText('Masukkan nama lengkap fasilitas.'),
                        // Gunakan Grid untuk menempatkan beberapa field dalam satu baris (opsional)
                        Grid::make(2)->schema([  // Grid 2 kolom
                            Toggle::make('is_aktif')
                                ->label('Fasilitas Aktif?')
                                ->default(true)
                                ->inline(false)  // Membuat toggle tampil di baris baru
                                ->helperText('Atur apakah fasilitas ini akan ditampilkan di website.'),
                        ]),
                        RichEditor::make('deskripsi')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull()  // Membuat editor mengambil seluruh lebar (jika di dalam grid)
                            ->fileAttachmentsDisk('public')  // Opsional: Untuk memungkinkan upload gambar ke RichEditor
                            ->fileAttachmentsDirectory('deskripsi-images')  // Direktori untuk gambar deskripsi
                            ->placeholder('Jelaskan secara detail tentang fasilitas ini...')
                            ->helperText('Berikan deskripsi lengkap tentang fasilitas sekolah.'),
                    ])
                    ->columns(1),  // Pastikan section ini menggunakan 1 kolom (jika tidak dalam grid)
                Section::make('Gambar Fasilitas')  // Bagian kedua khusus untuk gambar
                    ->description('Unggah gambar yang merepresentasikan fasilitas ini. Format: JPG, PNG, GIF.')
                    ->schema([
                        FileUpload::make('gambar')
                            ->label('Pilih Gambar')
                            ->image()  // Hanya menerima file gambar
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])  // Lebih spesifik
                            ->directory('fasilitas')  // Simpan di storage/app/public/fasilitas
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => (string) Str::uuid() . '_' . now()->timestamp . '.' . $file->getClientOriginalExtension()
                            )
                            ->maxSize(2048)  // 2MB
                            ->imageEditor()  // Memungkinkan editor gambar (crop, rotate, dll)
                            ->imageResizeMode('contain')  // Mode resize saat di-upload (contain/cover)
                            ->imageResizeTargetWidth(1024)  // Ukuran target lebar
                            ->imageResizeTargetHeight(768)  // Ukuran target tinggi
                            ->panelAspectRatio('16:9')  // Rasio aspek panel upload (opsional)
                            ->imageCropAspectRatio('16:9')  // Rasio aspek crop (opsional)
                            ->placeholder('Klik atau seret gambar ke sini untuk mengunggah.')
                            ->helperText('Ukuran maksimal 2MB. Resolusi disarankan 1024x768 piksel.')
                            ->deleteUploadedFileUsing(function ($file) {
                                if ($file && Storage::disk('public')->exists($file)) {
                                    Storage::disk('public')->delete($file);
                                }
                            }),
                    ])
                    ->columns(1),  //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('gambar')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_aktif')
                    ->label('Aktif'),
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
                Tables\Actions\DeleteAction::make()
                    ->before(function ($record) {
                        if ($record->gambar) {
                            Storage::disk('public')->delete($record->gambar);
                        }
                    }),
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
            'index' => Pages\ListFasilitas::route('/'),
            'create' => Pages\CreateFasilitas::route('/create'),
            'edit' => Pages\EditFasilitas::route('/{record}/edit'),
        ];
    }
}
