<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
<<<<<<< HEAD
=======
use App\Filament\Resources\UserResource\RelationManagers;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
use App\Models\User;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\SoftDeletingScope;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

<<<<<<< HEAD
    protected static ?string $navigationLabel = 'Pengguna';

    protected static ?string $navigationGroup = 'Pengaturan Sistem';
=======
    protected static ?string $navigationLabel = 'Users';

    protected static ?string $navigationGroup = 'User Management';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'nama';
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
<<<<<<< HEAD
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(100)
                    ->label('Nama'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(100)
                    ->unique(static::getModel(), 'email', ignoreRecord: true)
                    ->label('Email'),
                Forms\Components\DateTimePicker::make('email_verified_at')
                    ->label('Email Diverifikasi Pada')
                    ->nullable(),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn(string $state): string => Hash::make($state))
                    ->dehydrated(fn(?string $state): bool => filled($state))
                    ->required(fn(string $operation): bool => $operation === 'create')
                    ->maxLength(255)
                    ->label('Password'),
                Forms\Components\Select::make('role')
                    ->options([
                        'admin' => 'Admin',
                        'owner' => 'Pemilik Usaha',
                        'customer' => 'Pelanggan',
                    ])
                    ->required()
                    ->default('customer')
                    ->label('Peran'),
                Forms\Components\Textarea::make('alamat')
                    ->nullable()
                    ->maxLength(65535)
                    ->label('Alamat'),
                Forms\Components\TextInput::make('telepon')
                    ->tel()
                    ->nullable()
                    ->maxLength(20)
                    ->label('Telepon'),
=======
                Forms\Components\Section::make('User Information')
                    ->description('Basic information about the user')
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Name')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(100),
                        Forms\Components\DateTimePicker::make('email_verified_at')
                            ->label('Email Verified At')
                            ->nullable(),
                        Forms\Components\Select::make('role')
                            ->label('Role')
                            ->options([
                                'admin' => 'Administrator',
                                'user' => 'Regular User',
                                'manager' => 'Manager',
                                'editor' => 'Content Editor',
                            ])
                            ->required()
                            ->searchable(),
                    ])
                    ->columns(2),
                Forms\Components\Section::make('Security')
                    ->schema([
                        Forms\Components\TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->dehydrateStateUsing(fn(string $state): string => Hash::make($state))
                            ->dehydrated(fn($state) => filled($state))
                            ->required(fn(string $operation): bool => $operation === 'create')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('password_confirmation')
                            ->label('Confirm Password')
                            ->password()
                            ->dehydrated(false)
                            ->requiredWith('password')
                            ->same('password'),
                    ])
                    ->columns(2),
                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        Forms\Components\Textarea::make('alamat')
                            ->label('Address')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('telepon')
                            ->label('Phone Number')
                            ->tel()
                            ->maxLength(20),
                    ]),
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
                Tables\Columns\TextColumn::make('id_user')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('ID'),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable()
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->label('Email'),
                Tables\Columns\TextColumn::make('role')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'admin' => 'warning',
                        'owner' => 'success',
                        'customer' => 'primary',
                        default => 'gray',
                    })
                    ->label('Peran'),
                Tables\Columns\TextColumn::make('telepon')
                    ->searchable()
                    ->label('Telepon'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Dibuat Pada'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Diperbarui Pada'),
=======
                Tables\Columns\TextColumn::make('nama')
                    ->label('Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\BadgeColumn::make('role')
                    ->colors([
                        'primary' => 'user',
                        'danger' => 'admin',
                        'success' => 'manager',
                        'warning' => 'editor',
                    ]),
                Tables\Columns\IconColumn::make('email_verified_at')
                    ->label('Verified')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
                Tables\Columns\TextColumn::make('telepon')
                    ->label('Phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('role')
                    ->options([
<<<<<<< HEAD
                        'admin' => 'Admin',
                        'owner' => 'Pemilik Usaha',
                        'customer' => 'Pelanggan',
                    ])
                    ->label('Peran'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
=======
                        'admin' => 'Administrator',
                        'user' => 'Regular User',
                        'manager' => 'Manager',
                        'editor' => 'Content Editor',
                    ]),
                Tables\Filters\Filter::make('verified')
                    ->label('Email Verified')
                    ->query(fn(Builder $query): Builder => $query->whereNotNull('email_verified_at')),
                Tables\Filters\Filter::make('unverified')
                    ->label('Email Unverified')
                    ->query(fn(Builder $query): Builder => $query->whereNull('email_verified_at')),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
