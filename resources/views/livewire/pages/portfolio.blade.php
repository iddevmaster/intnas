<?php

use Livewire\Volt\Component;
use App\Models\Activity;

new class extends Component
{
    public array $activities = [];

    /**
     * Delete the currently authenticated user.
     */
     public function mount()
    {
        $this->activities = Activity::all()->toArray();
    }
}; ?>

<section>
    <div class="ex-basic-1 py-12">
        {{-- <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12 mb-10">
            <h2 class="mb-5">Image</h2>
            <div class="owl-carousel owl1">
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/1.jpg')"></div></div>
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/2.jpg')"></div></div>
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/3.jpg')"></div></div>
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/4.jpg')"></div></div>
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/5.jpg')"></div></div>
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/6.jpg')"></div></div>
                <!-- Add more items as needed -->
            </div>
            <div class="owl-carousel owl2">
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/7.jpg')"></div></div>
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/8.jpg')"></div></div>
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/9.jpg')"></div></div>
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/10.jpg')"></div></div>
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/11.jpg')"></div></div>
                <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/12.jpg')"></div></div>
                <!-- Add more items as needed -->
            </div>
        </div> --}}

        @foreach ($activities as $activity)
            <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12 mb-10">
                <div class="mb-5">
                    <h2>{{ $activity['title'] }}</h2>
                    <p>{{ $activity['desc'] }}</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 ">
                    @foreach ($activity['media'] as $key => $media)
                        @if ($key !== 'by')
                            <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/uploads/activity/{{ $media }}')"></div></div>
                        @endif
                    @endforeach
                    {{-- <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/ac01/ac01.jpg')"></div></div>
                    <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/ac01/ac02.jpg')"></div></div>
                    <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/ac01/ac03.jpg')"></div></div>
                    <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/ac01/ac04.jpg')"></div></div>
                    <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/ac01/ac05.jpg')"></div></div>
                    <div class="overflow-hidden imgnine"><div class="imgcon" style="background-image: url('/img/activity/ac01/ac06.jpg')"></div></div> --}}
                    <!-- Add more items as needed -->
                </div>
            </div>
        @endforeach

        {{-- <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Video</h1>
              <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
            </div>
            <div class="flex flex-wrap -m-4">
              <div class="lg:w-1/3 sm:w-1/2 p-4 mb-10">
                <figure class="relative h-full">
                    <figcaption class="mb-1">Your Video Title</figcaption>
                    <video controls class="inset-0 w-full h-full object-cover object-center">
                        <source src="{{ asset('/video/activity/01.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </figure>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4 mb-10">
                <figure class="relative h-full">
                    <figcaption class="mb-1">Your Video Title</figcaption>
                    <video controls class="inset-0 w-full h-full object-cover object-center">
                        <source src="{{ asset('/video/activity/07.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </figure>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4 mb-10">
                <figure class="relative h-full">
                    <figcaption class="mb-1">Your Video Title</figcaption>
                    <video controls class="inset-0 w-full h-full object-cover object-center">
                        <source src="{{ asset('/video/activity/03.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </figure>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4 mb-10">
                <figure class="relative h-full">
                    <figcaption class="mb-1">Your Video Title</figcaption>
                    <video controls class="inset-0 w-full h-full object-cover object-center">
                        <source src="{{ asset('/video/activity/04.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </figure>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4 mb-10">
                <figure class="relative h-full">
                    <figcaption class="mb-1">Your Video Title</figcaption>
                    <video controls class="inset-0 w-full h-full object-cover object-center">
                        <source src="{{ asset('/video/activity/05.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </figure>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4 mb-10">
                <figure class="relative h-full">
                    <figcaption class="mb-1">Your Video Title</figcaption>
                    <video controls class="inset-0 w-full h-full object-cover object-center">
                        <source src="{{ asset('/video/activity/06.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </figure>
              </div>
            </div>
        </div> --}}
    </div>
    <script>
        // $(document).ready(function(){
        //     $(".owl1").owlCarousel({
        //         loop: true,             // Enable looping
        //         margin: 10,
        //         nav: false,
        //         autoplayHoverPause: true,
        //         autoplay: true,         // Enable autoplay
        //         autoplaySpeed: 2000, // Duration of the transition in milliseconds
        //         autoplayTimeout: 5000, // Time between each auto-slide
        //         responsive: {
        //             0: {
        //                 items: 1
        //             },
        //             600: {
        //                 items: 2
        //             },
        //             1000: {
        //                 items: 3
        //             }
        //         }
        //     });

        //     $(".owl2").owlCarousel({
        //         loop: true,             // Enable looping
        //         margin: 10,
        //         nav: false,
        //         autoplayHoverPause: true,
        //         autoplaySpeed: 2000, // Duration of the transition in milliseconds
        //         autoplayTimeout: 5000, // Time between each auto-slide
        //         autoplay: true,         // Enable autoplay
        //         rtl: true,
        //         responsive: {
        //             0: {
        //                 items: 1
        //             },
        //             600: {
        //                 items: 2
        //             },
        //             1000: {
        //                 items: 3
        //             }
        //         }
        //     });
        // });
    </script>
    <style>
        .imgnine {
            border-radius: 10px;
        }
        .imgcon {
            width: 400px;
            height: 300px;
            background-size: cover; /* You can use contain, 100% 100%, or leave it out */
            background-position: center;
            transition: .5s;
        }
        .imgnine:hover > .imgcon {
            transform: scale(1.2)
        }
    </style>
</section>
