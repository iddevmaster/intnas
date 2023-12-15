<?php

use Livewire\Volt\Component;

new class extends Component
{
    public string $blog_id;

    /**
     * Delete the currently authenticated user.
     */
     public function mount($blog_id)
    {
        $this->blog_id = $blog_id;
    }
}; ?>
<section>
    <div class="ex-basic-1 py-12">
        <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12">
            <div class="flex justify-center ">
                <img class="inline drone-float" src="/img/activity/ac02/04.jpg" alt="alternative" />
            </div>
            <div class="indent-10">
                <p class="text-2xl my-10">
                    วันที่ 11-13 ธ.ค 66 งานข้าวหอมมะลิโลก 101 จ.ร้อยเอ็ด บริษัท ID Drives เป็นตัวแทน proviceder ของภาคอีสานนำนวัตกรรม
                    เข้าร่วมออกบูทโครงการโดรนชุมชนและศูนย์ซ่อมโดรนชุมชน
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 my-10">
                <img class="inline drone-float" src="/img/activity/ac02/01.jpg" alt="alternative" />
                <img class="inline drone-float" src="/img/activity/ac02/02.jpg" alt="alternative" />
                <img class="inline drone-float" src="/img/activity/ac02/03.jpg" alt="alternative" />
                <img class="inline drone-float" src="/img/activity/ac02/05.jpg" alt="alternative" />
            </div>
            <div class="indent-10">
                <p class="text-2xl my-10">
                    ในงานครั้งนี้ได้นำนวัตกรรมโดรนเกษตรเจ้าเอี่ยง ขนาด 10 ลิตร เเละ 16 ลิตร ที่เข้าร่วมโครงการโดรนชุมชนที่ได้รับการสนับสนุนจาก DEPA เเละระบบสมาร์ท ฟาร์ม IOT มาจัดเเสดงโชว์ภายในงาน
                    พร้อมนำเสนอหลักสูตรอบรมโดรน 3 หลักสูตร ได้เก่ Basic Drone(โดรนถ่ายภาพ) Propessional Drone (โดรนสำรวจ)
                    Agras Drone(โดรนเกษตร) ให้กับผู้สนใจภายในงาน
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 my-10">
                <img class="inline drone-float" src="/img/activity/ac02/06.jpg" alt="alternative" />
                <img class="inline drone-float" src="/img/activity/ac02/07.jpg" alt="alternative" />
            </div>
            <div class="my-10">
                <img class="inline drone-float" src="/img/activity/ac02/08.jpg" alt="alternative" />
            </div>
        </div>
    </div>
</section>
