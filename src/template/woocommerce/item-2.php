<?php

use STZCPW\inc\database;
use STZCPW\inc\template;

$list_gende = database::db_stz_get_key('items_gende');



?>


<div class="m-3">
    <!-- // lable item  -->
    <div class="mt-3 d-flex">
        <div class="m-1 d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center m-1">
                <?php
                template::Label('', 'انتخاب کاغذ', 'text-dark');
                ?>
            </div>
        </div>
    </div>

    <div class="stz-cpw-item-info-cart " id="stz-cpw-item-cart-body-modal">

        <?php
        $counter = 1;
        foreach ($list_gende as $item) {
            $item_id = $item->id;
            $stz_value = unserialize($item->stz_value);

        ?>

            <div class="stz-cpw-item-cart-body-info-cart mt-2 m-2 cursor-pointer" id="stz-cpw-item-cart-body-info-cart-<?php echo $counter ?>">
                <div class="text-center mb-1 mt-1">
                    <span class="fw-bold"><?php echo $stz_value['name'] ?></span>
                </div>
                <div class="d-flex justify-conetnt-center align-items-center" style="position: relative;">
                    <img width="90%" style="height: 210px;"  class="image-flouid mx-auto border-30" src="<?php echo wp_get_attachment_url($stz_value['image']) ?>" />
                </div>
                <div class="text-center mb-1 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star text-scoundray" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                </div>
                <div dir="rtl" class="d-flex flex-row align-items-center justify-content-center mb-3">

                    <del style="font-size: 15px;" class="m-2 fw-bold text-muted  "><?php echo number_format($stz_value['persent']) ?></del>
                    <div class="m-1 fw-bold d-flex flex-row text-success ">
                        <span style="font-size: 14px;" class="m-1 "><?php echo number_format($stz_value['price']) ?></span>
                        <span class="m-1">تومان</span>
                    </div>
                    <span class="m-1 fw-bold text-muted " style="font-size: 13px;"> هر متر مربع</span>
                </div>
                <div class="text-end" style="margin-right: 15px;height: 240px;" dir="ltr">
                    <p style="white-space: pre-line" class="text-muted fw-bold">
                        <?php echo $stz_value['discription'] ?></p>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button id="stz-cpw-btn-step-item-<?php echo $counter ?>" data_name='<?php echo $stz_value['name'] ?>' class="w-75 btn bg-success rounded text-white stz-cpw-btn-step-item" data_price="<? echo $stz_value['price']; ?>" data_next='2'>انتخاب کاغذ</button>
                </div>
            </div>
        <?php

            $counter++;
        }


        ?>
    </div>


    <div class="d-flex " style="position: relative;height: 30px;">


        <!-- // button next -->
        <!-- <button class="btn btn-info stz-cpw-btn-item-next" data_next='2' style="position: absolute;left:0">
            <div class="d-flex justify-content-center align-items-center text-white">
                <div style="font-size:14px">مرحله بعد</div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                </div>
            </div>
        </button> -->


    </div>

</div>