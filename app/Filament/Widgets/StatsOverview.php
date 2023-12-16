<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Categories', Category::count())
                ->description('Total Categories')
                ->chart([7, 2, 10, 3, 15, 4, 27])
                ->color('success'),
            Stat::make('Articles', Post::count())
                ->description('Total articles')
                ->chart([17, 2, 10, 3, 15, 4, 13])
                ->color('info'),
            Stat::make('Tags', Tag::count())
                ->description('Total tags')
                ->chart([7, 2, 4, 3, 15, 4, 15])
                ->color('danger'),

        ];
    }
}
