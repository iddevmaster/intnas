<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;
use App\Models\Blog;

new class extends Component
{
    public array $blogs = [];

    /**
     * Delete the currently authenticated user.
     */
     public function mount(): void
    {
        $this->blogs = Blog::where('type', 0)->orderBy('id', 'desc')->get()->toArray();
    }
}; ?>

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
        <div
            data-te-lightbox-init
            class="flex flex-col space-y-5 lg:flex-row lg:space-x-5 lg:space-y-0">
            <div class="flex h-full w-full flex-1 flex-col">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/1.webp"
                    data-te-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
                    alt="Table Full of Spices"
                    class="mb-5 w-full cursor-zoom-in data-[te-lightbox-disabled]:cursor-auto" />
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Square/1.webp"
                    data-te-img="https://mdbcdn.b-cdn.net/img/Photos/Square/1.webp"
                    alt="Coconut with Strawberries"
                    class="w-full cursor-zoom-in data-[te-lightbox-disabled]:cursor-auto" />
            </div>
            <div class="flex h-full w-full flex-1 flex-col">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Vertical/1.webp"
                    data-te-img="https://mdbcdn.b-cdn.net/img/Photos/Vertical/1.webp"
                    alt="Dark Roast Iced Coffee"
                    class="w-full cursor-zoom-in data-[te-lightbox-disabled]:cursor-auto" />
            </div>
        </div>
    </div>
</section>
