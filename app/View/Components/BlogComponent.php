<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogComponent extends Component
{

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $articles = Post::with(['author'])->latest()->paginate(12);
        return view('components.blog-component', ['articles' => $articles]);
    }
}
