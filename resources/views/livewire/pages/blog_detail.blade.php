<?php

use Livewire\Volt\Component;
use App\Models\Blog;

new class extends Component
{
    public string $blog_id;
    public array $blogs = [];
    public string $shareComponent;

    /**
     * Delete the currently authenticated user.
     */
     public function mount($blog_id)
    {
        $this->blog_id = $blog_id;
        $this->blogs = Blog::find($blog_id)->toArray();

        $this->shareComponent = Share::currentPage()->facebook();
    }
}; ?>
<section>
    <div class="ex-basic-1 py-12">
        <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12">
            {!! $shareComponent !!}
            <div class="flex justify-center ">
                <img class="inline drone-float" src="/uploads/news/{{ $blogs['cover'] }}" alt="alternative" />
            </div>
            <div class="my-10 px-4">
                {!! $blogs['desc'] !!}
            </div>
        </div>
    </div>
</section>
