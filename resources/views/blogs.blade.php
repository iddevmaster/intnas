<x-landing-layout>

    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container px-4 sm:px-8 xl:px-4">
            <h1 class="xl:ml-24">{{ __('messages.news') }}</h1>
            <nav class="bg-grey-light w-full rounded-md xl:ml-24">
                <ol class="list-reset flex">
                    <li>
                        <a
                        href="/home"
                        class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                        >{{ __('messages.home') }}</a
                        >
                    </li>
                    <li>
                        <span class="mx-2 text-neutral-500 dark:text-neutral-400">></span>
                    </li>
                    <li style="color: #eb427e">
                        {{ __('messages.news') }}
                    </li>
                </ol>
            </nav>
        </div> <!-- end of container -->
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
<!--Tabs navigation-->
<div class="container px-4 sm:px-8 xl:px-4">
    <ul
        class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0"
        role="tablist"
        data-te-nav-ref>
        <li role="presentation" class="flex-auto text-center">
            <a
                href="#tabs-home01"
                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                data-te-toggle="pill"
                data-te-target="#tabs-home01"
                data-te-nav-active
                role="tab"
                aria-controls="tabs-home01"
                aria-selected="true"
                >All</a
            >
        </li>
        <li role="presentation" class="flex-auto text-center">
            <a
                href="#tabs-profile01"
                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                data-te-toggle="pill"
                data-te-target="#tabs-profile01"
                role="tab"
                aria-controls="tabs-profile01"
                aria-selected="false"
                >News</a
            >
        </li>
        <li role="presentation" class="flex-auto text-center">
            <a
                href="#tabs-messages01"
                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                data-te-toggle="pill"
                data-te-target="#tabs-messages01"
                role="tab"
                aria-controls="tabs-messages01"
                aria-selected="false"
                >Blogs</a
            >
        </li>
        <li role="presentation" class="flex-auto text-center">
            <a
                href="#tabs-messages01"
                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                data-te-toggle="pill"
                data-te-target="#tabs-contact01"
                role="tab"
                aria-controls="tabs-contact01"
                aria-selected="false"
                >Gallery</a
            >
        </li>
    </ul>

    <!--Tabs content-->
    <div class="mb-6">
        <div
            class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-home01"
            role="tabpanel"
            aria-labelledby="tabs-home-tab01"
            data-te-tab-active>
            <livewire:pages.all />
        </div>
        <div
            class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-profile01"
            role="tabpanel"
            aria-labelledby="tabs-profile-tab01">
            <livewire:pages.news />
        </div>
        <div
            class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-messages01"
            role="tabpanel"
            aria-labelledby="tabs-profile-tab01">
            <livewire:pages.blogs />
        </div>
        <div
            class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-contact01"
            role="tabpanel"
            aria-labelledby="tabs-contact-tab01">
            <livewire:pages.portfolio />
        </div>
    </div>
</div> <!-- end of container -->


    {{-- <livewire:pages.blogs /> --}}

</x-landing-layout>
