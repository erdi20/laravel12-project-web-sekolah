<?php

namespace App\Filament\Pages;

use App\Models\School as SchoolModel;  // Penting: Alias untuk menghindari konflik nama
use Filament\Actions\Action;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;  // Untuk layouting kolom
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class School extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static string $view = 'filament.pages.school';
    protected static ?string $navigationLabel = 'Profil Sekolah';
    protected static ?string $title = 'Profil Sekolah';
    public ?array $data = [];

    public function mount(): void
    {
        // Ambil data dari model School
        $school = SchoolModel::firstOrNew(['id' => 1]);  // Gunakan model Eloquent

        $this->form->fill([
            'name' => $school->name ?? 'Nama Default Sekolah',
            'tagline' => $school->tagline,
            'description' => $school->description,
            'address' => $school->address,
            'email' => $school->email,
            'phone' => $school->phone,
            'whatsapp' => $school->whatsapp,
            'instagram' => $school->instagram,
            'facebook' => $school->facebook,
            'youtube' => $school->youtube,
            'logo' => $school->logo,
            'favicon' => $school->favicon,
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('School Information')
                    ->tabs([
                        Tab::make('Informasi Umum')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nama Sekolah')
                                    ->placeholder('Contoh: SMPN 1 Jakarta')  // Tambahkan placeholder
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(),  // Agar mengambil lebar penuh dalam tab
                                TextInput::make('tagline')
                                    ->label('Tagline')
                                    ->placeholder('Contoh: Unggul dalam Prestasi, Berkarakter!')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                                RichEditor::make('description')
                                    ->label('Deskripsi Sekolah')
                                    ->placeholder('Jelaskan profil singkat sekolah Anda...')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        Tab::make('Detail Kontak & Lokasi')
                            ->icon('heroicon-o-phone')
                            ->schema([
                                Grid::make(2)  // Atur 2 kolom untuk layouting
                                    ->schema([
                                        TextInput::make('address')
                                            ->label('Alamat Lengkap')
                                            ->placeholder('Contoh: Jl. Sudirman No. 123, Jakarta Pusat')
                                            ->maxLength(255)
                                            ->required()
                                            ->columnSpan(2),  // Ambil 2 kolom jika di dalam Grid
                                        TextInput::make('email')
                                            ->label('Email Resmi')
                                            ->placeholder('Contoh: info@sekolah.sch.id')
                                            ->email()  // Validasi email
                                            ->maxLength(255)
                                            ->required(),
                                        TextInput::make('phone')
                                            ->label('No. Telepon Sekolah')
                                            ->placeholder('Contoh: +6221123456')
                                            ->tel()  // Validasi telepon
                                            ->maxLength(255)
                                            ->required(),
                                        TextInput::make('whatsapp')
                                            ->label('Nomor WhatsApp')
                                            ->placeholder('Contoh: +6281234567890')
                                            ->tel()
                                            ->maxLength(255)
                                            ->required(),
                                    ]),
                            ]),
                        Tab::make('Media Sosial')
                            ->icon('heroicon-o-globe-alt')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('instagram')
                                            ->label('Link Instagram')
                                            ->placeholder('Contoh: https://instagram.com/namasekolah')
                                            ->url()  // Validasi URL
                                            ->maxLength(255)
                                            ->required(),
                                        TextInput::make('facebook')
                                            ->label('Link Facebook')
                                            ->placeholder('Contoh: https://facebook.com/namasekolah')
                                            ->url()
                                            ->maxLength(255)
                                            ->required(),
                                        TextInput::make('youtube')
                                            ->label('Link YouTube')
                                            ->placeholder('Contoh: https://youtube.com/namasekolah')
                                            ->url()
                                            ->maxLength(255)
                                            ->required(),
                                    ])
                            ]),
                        Tab::make('Logo & Favicon')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        FileUpload::make('logo')
                                            ->label('Logo Sekolah')
                                            ->directory('school/logos')  // Direktori lebih spesifik
                                            ->image()  // Hanya izinkan gambar
                                            ->imageEditor()  // Tambahkan editor gambar (Filament v3)
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])  // Tipe file yang diizinkan
                                            ->required()
                                            ->helperText('Unggah logo sekolah Anda. Ukuran optimal 200x200 px.'),  // Helper text
                                        FileUpload::make('favicon')
                                            ->label('Favicon Website')
                                            ->directory('school/favicons')
                                            ->image()
                                            ->imageEditor()
                                            ->acceptedFileTypes(['image/x-icon', 'image/png'])  // Favicon biasanya .ico atau .png
                                            ->required()
                                            ->helperText('Unggah favicon untuk browser. Ukuran optimal 32x32 px.'),
                                    ])
                            ]),
                    ]),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan')
                ->submit('save')
                ->icon('heroicon-o-check'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();

            // Simpan data menggunakan model Eloquent
            $school = SchoolModel::firstOrNew(['id' => 1]);  // Gunakan model Eloquent
            $school->name = $data['name'];
            $school->tagline = $data['tagline'];
            $school->description = $data['description'];
            $school->address = $data['address'];
            $school->email = $data['email'];
            $school->phone = $data['phone'];
            $school->whatsapp = $data['whatsapp'];
            $school->instagram = $data['instagram'];
            $school->facebook = $data['facebook'];
            $school->youtube = $data['youtube'];
            $school->logo = $data['logo'];
            $school->favicon = $data['favicon'];
            $school->save();

            Notification::make()
                ->title('Informasi Sekolah berhasil diperbarui!')
                ->success()
                ->send();
        } catch (\Exception $e) {
            Notification::make()
                ->title('Terjadi kesalahan saat menyimpan informasi sekolah.')
                ->danger()
                ->body($e->getMessage())
                ->send();
        }
    }
}
