<?php

use STZCPW\inc\template;

?>
<div class="m-3">

    <!-- // lable dimesstions  -->
    <div class="mt-3 d-flex">
        <div class="m-1 d-flex justify-content-center align-items-center">
            <div class="num-style me-50">1</div>
            <div class="d-flex justify-content-center align-items-center m-1">
                <?php
                template::Label('', 'ابعاد خود را وارد نمایید', 'text-dark');
                ?>
            </div>
        </div>

        <div class="m-1">
            <?php
            template::Tooltip('عرض و ارتفاع دیوار را وارد نمایید')
            ?>

        </div>


    </div>

    <div class="mt-3">

        <!-- // width  -->
        <div class="cpw-dimensions d-flex justify-content-center align-items-center flex-wrap">

            <!-- // lable width  -->
            <div class="m-3">
                <?php
                template::Label('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="cpw-rotate-widht bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
              </svg>', 'عرض دیوار (5 سانتی متر اضافه بگیرید)');
                ?>
            </div>
            <!-- // input width  -->
            <div class="m-3">
                <span>cm</span>
                <input type="text" dir='ltr' id="stz-cpw-input-dimensions-width" class="btn" />
            </div>

            <div class="m-3">
                <?php
                $le = "5cm";
                template::Tooltip("چپ تا راست دیوار + $le");
                ?>
            </div>

        </div>

        <!-- // length  -->
        <div class="cpw-dimensions d-flex justify-content-center align-items-center flex-wrap">

            <!-- // lable length  -->
            <div class="m-3">
                <?php
                template::Label('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="cpw-rotate-length bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
              </svg>', 'ارتفاع دیوار (5 سانتی متر اضافه بگیرید)');
                ?>
            </div>
            <!-- // input length  -->
            <div class="m-3">
                <span>cm</span>
                <input dir='ltr' type="text" id="stz-cpw-input-dimensions-length" class="btn" />
            </div>
            <div class="m-3">
                <?php
                $le = "5cm";
                template::Tooltip("بالا تا پایین دیوار + $le");
                ?>
            </div>

        </div>


        <!-- // process -->

        <div class="d-flex justify-content-center align-items-center flex-wrap">

            <!-- // text message   -->
            <div class="m-3 text-start stz-cpw-text-message-dimensions">
            </div>
            <!-- // number   -->
            <div class="m-3 stz-cpw-number-dimensions ">
            </div>

        </div>

    </div>




</div>