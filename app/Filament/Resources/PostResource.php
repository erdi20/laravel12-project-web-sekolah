<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    // Icon yang akan muncul saat resource ini aktif di navigasi
    protected static ?string $activeNavigationIcon = 'heroicon-s-document-text';

    // Label tunggal untuk resource ini (misal: "Post")
    protected static ?string $label = 'Postingan';

    // Label jamak untuk resource ini (misal: "Posts")
    protected static ?string $pluralLabel = 'Postingan';

    protected static ?string $pluralModelLabel = 'Postingan';  // Disarankan menggunakan ini

    // Nama grup navigasi (misal: "Konten Blog")
    protected static ?string $navigationGroup = 'Manajemen Blog';

    // Item navigasi induk jika resource ini adalah sub-item (misal: "Pengaturan Blog")
    // protected static ?string $navigationParentItem = 'Pengaturan Blog';

    // Label yang muncul di navigasi samping (jika berbeda dari $pluralLabel)
    protected static ?string $navigationLabel = 'Daftar Post';

    // Urutan resource di navigasi samping (angka lebih kecil muncul lebih atas)
    protected static ?int $navigationSort = 1;

    // Menentukan apakah resource ini harus terdaftar di navigasi Filament
    protected static bool $shouldRegisterNavigation = true;

    // Kolom yang akan digunakan sebagai judul record di beberapa tampilan (misal: di breadcrumbs)
    protected static ?string $recordTitleAttribute = 'title';  // Misal, kolom 'title' dari model Post

    // Slug untuk URL resource ini (defaultnya diambil dari nama resource)
    // protected static ?string $slug = 'blog-posts';

    // Tooltip untuk badge di navigasi (misal: menampilkan jumlah post)
    protected static ?string $navigationBadgeTooltip = 'Jumlah Postingan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Post Details')
                    ->tabs([
                        Tabs\Tab::make('Basic Info')
                            ->icon('heroicon-o-document-text')  // Tambahkan icon untuk visual
                            ->schema([
                                Section::make('Judul & URL')
                                    ->description('Informasi dasar postingan Anda.')  // Tambahkan deskripsi
                                    ->schema([
                                        Grid::make(2)  // Menggunakan Grid untuk menata title dan slug
                                            ->schema([
                                                Forms\Components\TextInput::make('title')
                                                    ->label('Judul Postingan')  // Label yang lebih user-friendly
                                                    ->placeholder('Masukkan judul artikel Anda di sini')  // Placeholder
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->live(onBlur: true)  // Update slug secara live saat title diisi
                                                    ->afterStateUpdated(fn(string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),  // Generate slug otomatis
                                                Forms\Components\TextInput::make('slug')
                                                    ->label('URL Slug')
                                                    ->placeholder('Contoh: judul-artikel-anda')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->unique(ignoreRecord: true)  // Pastikan slug unik
                                                    ->helperText('Slug akan digunakan sebagai bagian dari URL. Pastikan unik dan mudah dibaca.'),  // Helper text
                                            ]),
                                    ]),
                                Section::make('Konten Postingan')
                                    ->description('Isi utama dan ringkasan postingan.')
                                    ->schema([
                                        Forms\Components\RichEditor::make('content')
                                            ->label('Isi Konten')
                                            ->placeholder('Tuliskan konten postingan Anda secara lengkap di sini...')
                                            ->required()
                                            ->columnSpanFull(),
                                        Forms\Components\RichEditor::make('summary')
                                            ->label('Ringkasan Singkat')
                                            ->placeholder('Buat ringkasan singkat yang menarik untuk postingan Anda. Ini akan muncul di halaman daftar.')
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                        Tabs\Tab::make('Media & Pengaturan')
                            ->icon('heroicon-o-cog-6-tooth')  // Icon untuk visual
                            ->schema([
                                Section::make('Gambar Utama')
                                    ->description('Pilih gambar yang akan menjadi cover postingan.')
                                    ->schema([
                                        Forms\Components\FileUpload::make('image')
                                            ->label('Gambar Utama')
                                            ->image()
                                            ->imageEditor()  // Izinkan user untuk edit gambar (crop, rotate)
                                            ->directory('post-images')  // Simpan di folder khusus
                                            ->visibility('public')  // Pastikan gambar bisa diakses publik
                                            ->required()
                                            ->deleteUploadedFileUsing(function ($file) {
                                                if ($file && Storage::disk('public')->exists($file)) {
                                                    Storage::disk('public')->delete($file);
                                                }
                                            })
                                            ->disk('public'),  // Menggunakan disk 'public' yang telah dikonfigurasi
                                        // ->hint('Ukuran gambar disarankan: 1200x600 piksel'), // Hint untuk ukuran gambar
                                    ]),
                                Section::make('Klasifikasi & Status')
                                    ->description('Atur kategori dan status publikasi postingan.')
                                    ->schema([
                                        Forms\Components\Select::make('category_id')  // Gunakan Select untuk category_id
                                            ->label('Kategori')
                                            ->required()
                                            ->relationship('category', 'name')  // Asumsi ada relasi 'category' dengan field 'name'
                                            ->searchable()  // Memudahkan pencarian jika kategori banyak
                                            ->preload(),  // Load semua opsi di awal
                                        Forms\Components\Toggle::make('status')
                                            ->label('Publikasikan Postingan?')
                                            ->inline(false)  // Mengatur toggle agar tidak inline dengan label
                                            ->helperText('Aktifkan untuk langsung mempublikasikan postingan ini.')
                                            ->required()
                                            ->default(true),  // Defaultnya sudah aktif agar user tidak lupa
                                        Forms\Components\Hidden::make('user_id')  // Gunakan Select untuk user_id
                                            ->label('Penulis')
                                            ->required()
                                            ->default(auth()->id())  // Default ke user yang sedang login
                                    ]),
                            ]),
                    ])
                    ->columnSpanFull(),  // Pastikan tabs mengambil seluruh lebar kolom
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ToggleColumn::make('status'),
                Tables\Columns\TextColumn::make('user.name')
                    ->sortable(),
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
                        if ($record->image) {
                            Storage::disk('public')->delete($record->image);
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
