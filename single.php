<?php

get_header();

?>

<main>
    <div class="container mx-auto px-5 md:px-0 content-blogs mb-[88px] mt-[48px]">
        <div class="flex flex-col md:flex-row gap-[81px]">
            <div class="w-full md:w-[640px]">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<nav class="breadcrumbs text-[14px] text-[#A49D9D] mb-[16px]">', '</nav>');
                }
                the_title('<h1 class="!mb-[24px] md:!mb-[32px]">', '</h1>');

                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
                <p class="capitalize text-[14px] text-[#A49D9D] my-[32px]"><?php echo get_the_date('F j, Y'); ?></p>
                
            </div>
            <div>
                <div class="sticky top-0 right-0">
                    <div class="border-l-2 border-[#CFD1D3] pl-[12px] md:pl-[20px] mb-[48px]">
                    <h2 class="!mb-[16px]">Blog Categories</h2>
                    <ul>
                        <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Gastronomía</a></li>
                        <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Historia</a></li>
                        <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">Turismo</a></li>
                    </ul>
                </div>
                <div class="border-l-2 border-[#CFD1D3] pl-[12px] md:pl-[20px] mb-[48px]">
                    <h2 class="!mb-[16px]">Free tour por Cusco</h2>
                    <ul>
                        <li><a href="" class="underline inline-block mb-[8px] text-[#5C5C5C]">¡Reserva aquí!</a></li>
                    </ul>
                </div>
                <div class="border-l-2 border-[#CFD1D3] pl-[12px] md:pl-[20px]">
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
    </div>
</main>

<?php get_footer(); ?>



