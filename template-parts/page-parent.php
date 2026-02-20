<div class="container mx-auto px-5 md:px-0">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav class="breadcrumbs text-[14px] text-[#A49D9D] mb-[16px] md:mb-0">', '</nav>');
    }
    ?>
    <h1 class="text-[26px] xl:text-[32px] !mb-[24px] md:mb-0"><?= the_title(); ?></h1>

    <div class="w-full">
        <!-- <div class="flex flex-col lg:flex-row md:flex-wrap lg:flex-nowrap gap-[30px] w-full "> -->
        <div class="w-full grid grid-cols-1 gap-y-[32px] md:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[48px] md:mb-[32px]">
            <!-- Tour Card 1 -->
            <div class="w-full flex flex-col justify-start items-center mb-[24px]">
                <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                    class="w-full h-[252px] rounded-t-[8px] object-cover" alt="Free tour por San Blas" />
                <div class="bg-white rounded-b-[8px] px-[12px] py-[20px] md:px-[24px] w-full">
                    <h2 class="text-center text-[22px] md:text-[24px]">Free tour por San Blas Bohemio</h2>
                    <ul class="flex flex-col gap-[12px] my-[1px] md:my-[24px]">
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
                        class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[12px] font-nunito self-start hover:bg-[#FF8110] transition-colors">
                        ¡Reserva ya!
                    </button>
                </div>
            </div>

            <div class="w-full flex flex-col justify-start items-center mb-[24px]">
                <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                    class="w-full h-[252px] rounded-t-[8px] object-cover" alt="Free tour por San Blas" />
                <div class="bg-white rounded-b-[8px] px-[12px] py-[20px] md:px-[24px] w-full">
                    <h2 class="text-center text-[22px] md:text-[24px]">Free tour por San Blas Bohemio</h2>
                    <ul class="flex flex-col gap-[12px] my-[1px] md:my-[24px]">
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
                        class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[12px] font-nunito self-start hover:bg-[#FF8110] transition-colors">
                        ¡Reserva ya!
                    </button>
                </div>
            </div>

            <div class="w-full flex flex-col justify-start items-center mb-[24px]">
                <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                    class="w-full h-[252px] rounded-t-[8px] object-cover" alt="Free tour por San Blas" />
                <div class="bg-white rounded-b-[8px] px-[12px] py-[20px] md:px-[24px] w-full">
                    <h2 class="text-center text-[22px] md:text-[24px]">Free tour por San Blas Bohemio</h2>
                    <ul class="flex flex-col gap-[12px] my-[1px] md:my-[24px]">
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
                        class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[12px] font-nunito self-start hover:bg-[#FF8110] transition-colors">
                        ¡Reserva ya!
                    </button>
                </div>
            </div>

            <div class="w-full flex flex-col justify-start items-center mb-[24px]">
                <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                    class="w-full h-[252px] rounded-t-[8px] object-cover" alt="Free tour por San Blas" />
                <div class="bg-white rounded-b-[8px] px-[12px] py-[20px] md:px-[24px] w-full">
                    <h2 class="text-center text-[22px] md:text-[24px]">Free tour por San Blas Bohemio</h2>
                    <ul class="flex flex-col gap-[12px] my-[1px] md:my-[24px]">
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
                        class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[12px] font-nunito self-start hover:bg-[#FF8110] transition-colors">
                        ¡Reserva ya!
                    </button>
                </div>
            </div>

            <div class="w-full flex flex-col justify-start items-center mb-[24px]">
                <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                    class="w-full h-[252px] rounded-t-[8px] object-cover" alt="Free tour por San Blas" />
                <div class="bg-white rounded-b-[8px] px-[12px] py-[20px] md:px-[24px] w-full">
                    <h2 class="text-center text-[22px] md:text-[24px]">Free tour por San Blas Bohemio</h2>
                    <ul class="flex flex-col gap-[12px] my-[1px] md:my-[24px]">
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
                        class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[12px] font-nunito self-start hover:bg-[#FF8110] transition-colors">
                        ¡Reserva ya!
                    </button>
                </div>
            </div>

            <div class="w-full flex flex-col justify-start items-center mb-[24px]">
                <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg"
                    class="w-full h-[252px] rounded-t-[8px] object-cover" alt="Free tour por San Blas" />
                <div class="bg-white rounded-b-[8px] px-[12px] py-[20px] md:px-[24px] w-full">
                    <h2 class="text-center text-[22px] md:text-[24px]">Free tour por San Blas Bohemio</h2>
                    <ul class="flex flex-col gap-[12px] my-[1px] md:my-[24px]">
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
                        class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[12px] font-nunito self-start hover:bg-[#FF8110] transition-colors">
                        ¡Reserva ya!
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="main-page-child">
        <?php
        while (have_posts()):
        ?>
        <?php
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
    <div class="w-full mb-[88px]">
        <div class="grid grid-cols-1 lg:grid-cols-[max-content_max-content] gap-[16px]">

            <div class="flex bg-white rounded-[8px] overflow-hidden">
                <div class="bg-orange text-[16px] font-bold p-[16px] text-white">1</div>
                <a href="" class="underline p-[16px]">
                    Cusco en temporada baja: ¿una buena idea?
                </a>
            </div>

            <div class="flex bg-white rounded-[8px] overflow-hidden">
                <div class="bg-orange text-[16px] font-bold p-[16px] text-white">2</div>
                <a href="" class="underline p-[16px]">
                    Cusco: descubriendo el Valle Sur
                </a>
            </div>

            <div class="flex bg-white rounded-[8px] overflow-hidden">
                <div class="bg-orange text-[16px] font-bold p-[16px] text-white">3</div>
                <a href="" class="underline p-[16px]">
                    Escapadas inesperadas en el Cusco
                </a>
            </div>

            <div class="flex bg-white rounded-[8px] overflow-hidden">
                <div class="bg-orange text-[16px] font-bold p-[16px] text-white">4</div>
                <a href="" class="underline p-[16px]">
                    Machu Picchu: visita la llaqta inca en tiempo récord
                </a>
            </div>

        </div>
    </div>

</div>

