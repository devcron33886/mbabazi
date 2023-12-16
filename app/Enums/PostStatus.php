<?php


namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum PostStatus: string implements HasColor,HasLabel
{
    case PUBLISHED = 'published';
    case DRAFT = 'draft';
    case PENDING = 'pending';


    public function getLabel(): string
    {
        return match ($this) {
            self::PUBLISHED => 'Published',
            self::DRAFT => 'Draft',
            self::PENDING => 'Pending',
        };
        
    }

    public function getColor(): string |array|null
    {
        return match ($this) {
            self::PUBLISHED => 'green',
            self::DRAFT => 'gray',
            self::PENDING => 'warning',
        };
    }
}
