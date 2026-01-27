<?php
get_header();


?>
<div class="container mx-auto px-5 md:px-0 content-main-blog mb-[88px]">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav class="breadcrumbs text-[14px] text-[#A49D9D]">', '</nav>');
    }
    ?>
    <h1><?php single_post_title(); ?></h1>

    <div class="flex flex-col md:flex-row gap-[43px]">
        <div class="">
            <div class="w-full  lg:w-[783px] h-auto flex flex-col gap-[32px] mb-[40px]">
                <div class="w-full flex flex-col md:flex-row rounded-[8px] overflow-hidden bg-white">
                    <div>
                        <div class="w-full md:w-[286px] h-[194px] ">
                            <a href="http://web.freewalking/cusco-en-temporada-baja-una-buena-idea/">
                                <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg" class="w-full h-full object-cover object-center" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-[20px]">
                        <h2 class="!mb-0 text-[16px] md:text-[24px]">Cusco en temporada baja: ¿una buena idea?</h2>
                        <p class="!my-[16px]">Viajar en temporada baja: menos gente, mejores precios. Suena tentador, pero, antes de armar la mochila o la maleta es necesario averiguar por qué el número de visitantes...</p>
                        <span class="text-[14px] text-[#A49D9D] font-nunito">November 19, 2025</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row rounded-[8px] overflow-hidden bg-white">
                    <div>
                        <div class="w-full md:w-[286px] h-[194px] ">
                            <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg" class="w-full h-full object-cover object-center" alt="">
                        </div>
                    </div>
                    <div class="p-[20px]">
                        <h2 class="!mb-0">Cusco en temporada baja: ¿una buena idea?</h2>
                        <p class="!my-[16px]">Viajar en temporada baja: menos gente, mejores precios. Suena tentador, pero, antes de armar la mochila o la maleta es necesario averiguar por qué el número de visitantes...</p>
                        <span class="text-[14px] text-[#A49D9D] font-nunito">November 19, 2025</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row rounded-[8px] overflow-hidden bg-white">
                    <div>
                        <div class="w-full md:w-[286px] h-[194px] ">
                            <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg" class="w-full h-full object-cover object-center" alt="">
                        </div>
                    </div>
                    <div class="p-[20px]">
                        <h2 class="!mb-0">Cusco en temporada baja: ¿una buena idea?</h2>
                        <p class="!my-[16px]">Viajar en temporada baja: menos gente, mejores precios. Suena tentador, pero, antes de armar la mochila o la maleta es necesario averiguar por qué el número de visitantes...</p>
                        <span class="text-[14px] text-[#A49D9D] font-nunito">November 19, 2025</span>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="flex justify-center gap-10">
                    <a href="#" class="py-2 px-4 rounded-[8px] !text-white bg-orange hover:bg-orange-500 text-center inline-block">1</a>
                    <a href="#" class="py-2 px-4 rounded-[8px] !text-white bg-orange hover:bg-orange-500 text-center inline-block">2</a>
                    <a href="#" class="py-2 px-4 rounded-[8px] !text-white bg-orange hover:bg-orange-500 text-center inline-block">...</a>
                    <a href="#" class="py-2 px-4 rounded-[8px] !text-white bg-orange hover:bg-orange-500 text-center inline-block">8</a>
                    <a href="#" class="py-2 px-4 rounded-[8px] !text-white bg-orange hover:bg-orange-500 text-center inline-block">>></a>
                </div>
            </div>
        </div>
        <div>
            <div class="border-l-2 border-[#CFD1D3] pl-[20px] mb-[48px]">
                <h2 class="!mb-[16px]">Blog Categories</h2>
                <ul>
                    <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Gastronomía</a></li>
                    <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Historia</a></li>
                    <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Turismo</a></li>
                </ul>
            </div>
            <div class="border-l-2 border-[#CFD1D3] pl-[20px] mb-[48px]">
                <h2 class="!mb-[16px]">Free tour por Cusco</h2>
                <ul>
                    <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">¡Reserva aquí!</a></li>
                </ul>
            </div>
            <div class="border-l-2 border-[#CFD1D3] pl-[20px] mb-[48px]">
                <h2 class="!mb-[16px]">¿Qué hacer en Cusco?</h2>
                <ul>
                    <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">City tour Cusco: Huellas de un Imperio</a></li>
                    <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Caminata a Laguna Humantay</a></li>
                    <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Caminata a Siete Lagunas con guía en español</a></li>
                    <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Free tour por San Blas Bohemio</a></li>
                    <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Catacumas del Cusco Peru con guía profesional</a></li>
                    <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Free tour por San Blas Bohemio</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<?php

get_footer();
