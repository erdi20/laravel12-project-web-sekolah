<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ContactMessage;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactMessageResource\Pages;
use App\Filament\Resources\ContactMessageResource\RelationManagers;
use App\Filament\Admin\Resources\ContactMessageResource\Pages\ManageContactMessages;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';  // Icon pesan

    protected static ?string $activeNavigationIcon = 'heroicon-s-chat-bubble-left-right';

    protected static ?string $label = 'Pesan Kontak';

    protected static ?string $pluralLabel = 'Pesan Kontak';

    protected static ?string $pluralModelLabel = 'Pesan Kontak';

    protected static ?string $navigationGroup = 'Komunikasi';  // Grup baru untuk komunikasi

    protected static ?string $navigationLabel = 'Pesan dari Pengunjung';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'subject';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Detail Pesan')
                    ->description('Informasi lengkap dari pesan kontak.')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Pengirim')
                            ->disabled(),  // Admin tidak bisa mengubah nama
                        Forms\Components\TextInput::make('email')
                            ->label('Email Pengirim')
                            ->email()
                            ->disabled()
                            ->suffixIcon('heroicon-m-envelope')  // Tambahkan icon email
                            ->extraAttributes([
                                'onclick' => "window.location.href = 'mailto:' + this.value;",
                                'style' => 'cursor: pointer;',
                                'title' => 'Klik untuk membalas via email'
                            ]),  // Memudahkan admin untuk klik dan membalas email
                        Forms\Components\TextInput::make('subject')
                            ->label('Subjek Pesan')
                            ->disabled(),
                        Forms\Components\Textarea::make('message')
                            ->label('Isi Pesan')
                            ->rows(8)
                            ->disabled()
                            ->columnSpanFull(),
                        Forms\Components\Toggle::make('replied')
                            ->label('Sudah Dibalas?')
                            ->inline(false)
                            ->helperText('Centang jika pesan ini sudah Anda balas.')
                            ->default(false),  // Defaultnya belum dibalas
                    ])
                    ->columns(2),  // Tata layout menjadi 2 kolom untuk field di atas
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Pengirim')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->copyable() // Memudahkan admin untuk menyalin email
                    ->copyMessage('Email disalin!')
                    ->copyMessageDuration(1500)
                    ->searchable(),
                Tables\Columns\TextColumn::make('subject')
                    ->label('Subjek')
                    ->limit(50) // Batasi panjang subjek di tabel
                    ->tooltip(fn (string $state): string => $state) // Tampilkan tooltip untuk subjek panjang
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('replied')
                    ->label('Status Balasan')
                    // ->boolean() // Menampilkan ikon centang/silang
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Diterima Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false), // Penting untuk melihat kapan pesan masuk
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => ManageContactMessages::route('/'),
        ];
    }
}
