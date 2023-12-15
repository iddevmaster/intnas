<?php

use Livewire\Volt\Component;

new class extends Component
{
    public string $prod_id;

    /**
     * Delete the currently authenticated user.
     */
     public function mount($prod_id)
    {
        $this->prod_id = $prod_id;
    }
}; ?>
<section>
    <div class="ex-basic-1 py-12">
        @if ($prod_id == 'T10')
            <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12">
                <div class="flex justify-center">
                    <img class="inline drone-float" src="/img/products/T10.jpg" alt="alternative" />
                </div>
                <div class="flex justify-center">
                    <img class="inline drone-float" src="/img/products/T10_01.jpg" alt="alternative" />
                </div>
                <div class="flex justify-center">
                    <img class="inline drone-float" src="/img/products/T10_02.jpg" alt="alternative" />
                </div>
            </div>
        @elseif ($prod_id == 'T20')
            <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12">
                <div class="flex justify-center">
                    <img class="inline drone-float" src="/img/products/T20.jpg" alt="alternative" />
                </div>
                <div class="flex justify-center">
                    <img class="inline drone-float" src="/img/products/T20_01.jpg" alt="alternative" />
                </div>
                <div class="flex justify-center">
                    <img class="inline drone-float" src="/img/products/T20_02.jpg" alt="alternative" />
                </div>
            </div>
        @elseif ($prod_id == 'T30')
            <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12">
                <div class="flex justify-center">
                    <img class="inline drone-float" src="/img/products/T30.jpg" alt="alternative" />
                </div>
                <div class="flex justify-center">
                    <img class="inline drone-float" src="/img/products/T30_01.jpg" alt="alternative" />
                </div>
                <div class="flex justify-center">
                    <img class="inline drone-float" src="/img/products/T30_02.jpg" alt="alternative" />
                </div>
            </div>
        @endif
    </div>
</section>
