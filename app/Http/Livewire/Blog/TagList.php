<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Spatie\TagsField\Tags;

class TagList extends Component
{
    public function render()
    {
        return view('livewire.blog.tag-list');
    }
}
