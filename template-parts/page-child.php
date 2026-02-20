<?php get_header(); ?>

<main class="container mx-auto px-4 md:px-0">
    <section class="w-full">
        <div class="flex flex-col lg:flex-row gap-0 md:gap-[40px] items-start">
            <div class="w-full md:w-[783px]">
                <div class="flex flex-col-reverse md:flex-col md:mb-[40px]">
                    <div class="flex flex-col items-start mb-[24px] md:mb-[32px]">
                        <h1
                            class="text-[26px] xl:text-[32px] font-bold leading-[39px] text-[#5c5c5c] font-['Inter'] !mb-[8px]">
                            Free Walking Tour de Cusco
                        </h1>
                        <div class="flex flex-row items-start gap-[40px]">
                            <div class="flex flex-row items-center gap-[6px]">
                                <div class="flex flex-row items-center gap-1">
                                    <img src="http://web.freewalking/wp-content/uploads/2026/01/start.png"
                                        class="size-5 object-contain" alt="5 star rating" id="590:560" />
                                    <img src="http://web.freewalking/wp-content/uploads/2026/01/start.png"
                                        class="size-5 object-contain" alt="5 star rating" id="590:560" />
                                    <img src="http://web.freewalking/wp-content/uploads/2026/01/start.png"
                                        class="size-5 object-contain" alt="5 star rating" id="590:560" />
                                    <img src="http://web.freewalking/wp-content/uploads/2026/01/start.png"
                                        class="size-5 object-contain" alt="5 star rating" id="590:560" />
                                    <img src="http://web.freewalking/wp-content/uploads/2026/01/start.png"
                                        class="size-5 object-contain" alt="5 star rating" id="590:560" />
                                </div>
                                <p class="!mb-0">
                                    5.0 (<span class="underline">70 comentarios</span>)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row gap-[4px] mb-[24px] md:mb-0">
                        <div class="w-full h-[286px] md:h-[520px]">
                            <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                                class="w-full h-full rounded-[8px] object-cover" alt="Qorikancha tour" />
                        </div>
                        <div class="hidden md:flex flex-col gap-[4px] w-[146px]">
                            <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                                class="w-full h-full rounded-[8px] object-cover" alt="Camino Inca" />
                            <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                                class="w-full h-full rounded-[8px] object-cover" alt="Inkayni Peru" />
                            <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                                class="w-full h-full rounded-[8px] object-cover" alt="Caminata de Lar" />
                        </div>
                    </div>
                </div>
                <div class="main-content-tour">
                    <?php
                    while (have_posts()):
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>
            <div class="w-full md:w-[374px] sticky top-0 right-0 self-start">
                <?php get_template_part('aside'); ?>
            </div>
        </div>
    </section>

    <section class="w-full mt-[48px] md:mt-[80px]">
        <div class="text-start mb-[20px] md:mb-[32px]">
            <h2 class="!mb-0 text-[22px] md:text-[24px]">Qué hacer en Cusco</h2>
        </div>
        <div class="w-full mb-[88px]">
            <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]">
                <div class="w-full flex flex-col justify-start items-center mb-[24px]">
                    <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                        class="w-full h-[252px] rounded-t-[8px] object-cover" alt="Free tour por San Blas" />
                    <div class="bg-white rounded-b-[8px] py-0 md:py-[20px] px-[8px] md:px-[24px] w-full">
                        <h2 class="text-center !text-[22px] md:!text-[24px] my-[16px] md:my-0">Free tour por San Blas Bohemio</h2>
                        <ul class="flex flex-col gap-[12px] my-[24px]">
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/1-4.png"
                                    class="w-[20px] h-[20px]" alt="duration" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:846">4h</p>
                            </li>
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/2-4.png"
                                    class="w-[20px] h-[20px]" alt="language" id="590:844" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:847">inglés, español</p>
                            </li>
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/3-4.png"
                                    class="w-[20px] h-[20px]" alt="time" id="590:845" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[6px]"
                                    id="590:848">10:00 a. m.</p>
                            </li>
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/sistema-de-comentarios-FWTC-12.png"
                                    class="w-[20px] h-[20px]" alt="price" id="590:852" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:851">¡gratis!</p>
                            </li>

                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/4-4.png"
                                    class="w-[20px] h-[20px]" alt="rating" id="590:849" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:850">5.0 (3 reseñas)</p>
                            </li>
                        </ul>
                        <button
                            class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[28px] md:mb-[20px] font-nunito self-start hover:bg-[#FF8110] transition-colors">
                            ¡Reserva ya!
                        </button>
                    </div>
                </div>
                <div class="w-full flex flex-col justify-start items-center mb-[24px]">
                    <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                        class="w-full h-[252px] rounded-t-[8px] object-cover" alt="Free tour por San Blas" />
                    <div class="bg-white rounded-b-[8px] py-0 md:py-[20px] px-[8px] md:px-[24px] w-full">
                        <h2 class="text-center !text-[22px] md:!text-[24px] my-[16px] md:my-0">Free tour por San Blas Bohemio</h2>
                        <ul class="flex flex-col gap-[12px] my-[24px]">
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/1-4.png"
                                    class="w-[20px] h-[20px]" alt="duration" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:846">4h</p>
                            </li>
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/2-4.png"
                                    class="w-[20px] h-[20px]" alt="language" id="590:844" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:847">inglés, español</p>
                            </li>
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/3-4.png"
                                    class="w-[20px] h-[20px]" alt="time" id="590:845" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[6px]"
                                    id="590:848">10:00 a. m.</p>
                            </li>
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/sistema-de-comentarios-FWTC-12.png"
                                    class="w-[20px] h-[20px]" alt="price" id="590:852" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:851">¡gratis!</p>
                            </li>

                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/4-4.png"
                                    class="w-[20px] h-[20px]" alt="rating" id="590:849" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:850">5.0 (3 reseñas)</p>
                            </li>
                        </ul>
                        <button
                            class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[28px] md:mb-[20px] font-nunito self-start hover:bg-[#FF8110] transition-colors">
                            ¡Reserva ya!
                        </button>
                    </div>
                </div>
                <div class="w-full flex flex-col justify-start items-center mb-[24px]">
                    <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                        class="w-full h-[252px] rounded-t-[8px] object-cover" alt="Free tour por San Blas" />
                    <div class="bg-white rounded-b-[8px] py-0 md:py-[20px] px-[8px] md:px-[24px] w-full">
                        <h2 class="text-center !text-[22px] md:!text-[24px] my-[16px] md:my-0">Free tour por San Blas Bohemio</h2>
                        <ul class="flex flex-col gap-[12px] my-[24px]">
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/1-4.png"
                                    class="w-[20px] h-[20px]" alt="duration" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:846">4h</p>
                            </li>
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/2-4.png"
                                    class="w-[20px] h-[20px]" alt="language" id="590:844" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:847">inglés, español</p>
                            </li>
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/3-4.png"
                                    class="w-[20px] h-[20px]" alt="time" id="590:845" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[6px]"
                                    id="590:848">10:00 a. m.</p>
                            </li>
                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/sistema-de-comentarios-FWTC-12.png"
                                    class="w-[20px] h-[20px]" alt="price" id="590:852" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:851">¡gratis!</p>
                            </li>

                            <li class="flex">
                                <img src="http://web.freewalking/wp-content/uploads/2026/01/4-4.png"
                                    class="w-[20px] h-[20px]" alt="rating" id="590:849" />
                                <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                    id="590:850">5.0 (3 reseñas)</p>
                            </li>
                        </ul>
                        <button
                            class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[28px] md:mb-[20px] font-nunito self-start hover:bg-[#FF8110] transition-colors">
                            ¡Reserva ya!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

