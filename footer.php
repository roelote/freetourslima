
<footer class="w-full bg-[#373435] pt-[24px] md:py-[32px]" id="590_548_0_4323_1920_224">
    <div class="container mx-auto flex flex-col gap-[6px] justify-start items-start w-full">
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[24px]">

            <?php
            $group1 = get_field('colum_01', 'option');
            
            if ($group1) :
                $repeater = $group1['list'];
            ?>
            <div class="w-full border-0 md:border-l md:border-[#ff8110] pl-5">
                <div class="flex flex-col justify-center md:justify-start items-start">
                    <h4 class="w-full text-[14px] font-bold leading-[17px] text-[#f5f5f5] font-['Inter'] border-b border-[#ff8110] md:border-0 text-center md:text-start mb-[8px] pb-[8px] md:pb-0 md:mb-[16px]"><?php echo (ICL_LANGUAGE_CODE == 'en') ? 'Company' : 'Compañía'; ?></h4>
                    <ul class="w-full text-center md:text-start">
                        <?php foreach ($repeater as $value) { ?>
                            <li><a href="<?php echo esc_url($value['url']); ?>" class="text-white font-normal text-[14px]"><?php echo esc_html($value['item']); ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>

            <?php
            $group2 = get_field('colum_02', 'option');
            
            if ($group2) :
                $repeater2 = $group2['list'];
            ?>
            <!-- Tours Section -->
            <div class="w-full border-0 md:border-l md:border-[#ff8110] pl-5">
                <div class="flex flex-col justify-start items-start">
                    <h4 class="w-full text-[14px] font-bold leading-[17px] text-[#f5f5f5] font-['Inter'] border-b border-[#ff8110] md:border-0 text-center md:text-start mb-[8px] pb-[8px] md:pb-0 md:mb-[16px]">Tours</h4>
                    <ul class="w-full text-center md:text-start">
                        <?php foreach ($repeater2 as $value) { ?>
                            <li><a href="<?php echo esc_url($value['url']); ?>" class="text-white font-normal text-[14px]"><?php echo esc_html($value['item']); ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>

            <!-- TrustPilot Section -->
            <div class="w-full border-0 md:border-l md:border-[#ff8110] pl-5">
                <h4 class="text-[14px] font-bold leading-[17px] text-[#f5f5f5] font-['Inter'] border-b border-[#ff8110] md:border-0 text-center md:text-start mb-[8px] pb-[8px] md:pb-0 md:mb-[16px] w-full">TrustPilot</h4>
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo-trip.png"
                    class="w-[150px] h-[28px]  mt-[15px] mx-auto md:mr-auto md:ml-0" alt="trustpilot stars" />
                <p class="text-[14px] text-center md:text-start font-normal leading-[20px] text-[#f5f5f5] font-['Nunito_Sans'] mt-[6px]">TrustScore 4.9 <span class="underline">55 reviews</span></p>
            </div>

            <div class="w-full border-0 md:border-l md:border-[#ff8110] pl-5">
                <h4 class="text-[14px] font-bold leading-[17px] text-[#f5f5f5] font-['Inter'] border-b border-[#ff8110] md:border-0 text-center md:text-start mb-[8px] pb-[8px] md:pb-0 md:mb-[16px] w-full"><?php echo (ICL_LANGUAGE_CODE == 'en') ? 'Payment' : 'Pago'; ?></h4>
                <div class="flex flex-row gap-3 justify-center md:justify-start items-center mt-2">
                    <div class="flex flex-col justify-start items-center">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/image-70.png" class="w-[44px] h-[28px]"
                            alt="payment method" id="590:912" />
                    </div>
                    <div class="flex flex-col justify-start items-center">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/image-70.png" class="w-[44px] h-[28px]"
                            alt="payment method" id="590:913" />
                    </div>
                    <div class="flex flex-col justify-start items-center">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/image-70.png" class="w-[44px] h-[28px]"
                            alt="payment method" id="590:914" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full mt-[40px] mb-[32px] md:mb-0 md:mt-[32px]">
        <p class="text-[14px] text-center font-normal md:!m-0 leading-[20px] text-[#f5f5f5] font-['Nunito_Sans']">FreeWalkingTourCusco.Org <span class="block md:inline"><?php echo (ICL_LANGUAGE_CODE == 'en') ? 'Copyright © 2024 - 2026, All Rights Reserved' : 'Copyright © 2024 - 2026, Todos los derechos reservados'; ?></span></p>
    </div>
    <div class="block md:hidden w-full bg-[#FF8110] p-3">
        <div class="bg-[#1AB6B6] p-2 text-center">
            <span class="text-white text-base font-semibold"><?php echo (ICL_LANGUAGE_CODE == 'en') ? 'Check availability' : 'Ver disponibilidad'; ?></span>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>