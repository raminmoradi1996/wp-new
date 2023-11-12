<?php

use STZCPW\inc\info_stz;

$step = ['dimensions', 'item', 'discription', 'verify'];
?>

<div>
    <!-- // step  -->
    <div class="stz-cpw-modal-header d-flex justify-contnet-center align-items-center p-2">
        <div class="stz-cpw-close-modal" id="stz-cpw-close-modal-info-cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="text-white bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
        </div>
    </div>
    <div class="stz-cpw-hr"></div>

    <div class="stz-cpw-step-all-body">


        <!-- // item  -->
        <div>
            <?php
            info_stz::STZ_VIEW("woocommerce/item-2.php");
            ?>
        </div>

    </div>

</div>