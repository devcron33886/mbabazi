<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use FilamentTiptapEditor\TiptapEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\FileUpload::make('featured_image')
                    ->image(),


                TiptapEditor::make('body')
                    ->required()
                    ->columnSpanFull(),
                Select::make('category_id')
                    ->label('Category')
                    ->placeholder('Select Category')
                    ->searchable()
                    ->multiple()
                    ->getSearchResultsUsing(fn (string $search): array => Category::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id')->toArray())
                    ->getOptionLabelsUsing(fn (array $values): array => Category::whereIn('id', $values)->pluck('name', 'id')->toArray())
                    ->relationship('categories', 'name')
                    ->native(false)
                    ->required(),
                Select::make('tag_id')
                    ->label('Tag')
                    ->placeholder('Select Tag')
                    ->searchable()
                    ->multiple()
                    ->getSearchResultsUsing(fn (string $search): array => Tag::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id')->toArray())
                    ->getOptionLabelsUsing(fn (array $values): array => Tag::whereIn('id', $values)->pluck('name', 'id')->toArray())
                    ->relationship('tags', 'name')
                    ->native(false)
                    ->required(),
                Forms\Components\Select::make('status')
                    ->placeholder('Select Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'pending' => 'Pending',
                    ])
                    ->native(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('featured_image'),

                Tables\Columns\TextColumn::make('status')
                    ->badge(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->placeholder('Select Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'pending' => 'Pending',
                    ])
                    ->native(false),
                SelectFilter::make('category_id')
                    ->label('Category')
                    ->placeholder('Select Category')
                    ->searchable()
                    ->multiple()
                    ->getSearchResultsUsing(fn (string $search): array => Category::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id')->toArray())
                    ->getOptionLabelsUsing(fn (array $values): array => Category::whereIn('id', $values)->pluck('name', 'id')->toArray())
                    ->relationship('categories', 'name')
                    ->native(false),
                SelectFilter::make('tag_id')
                    ->label('Tag')
                    ->placeholder('Select Tag')
                    ->searchable()
                    ->multiple()
                    ->getSearchResultsUsing(fn (string $search): array => Tag::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id')->toArray())
                    ->getOptionLabelsUsing(fn (array $values): array => Tag::whereIn('id', $values)->pluck('name', 'id')->toArray())
                    ->relationship('tags', 'name')
                    ->native(false),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
