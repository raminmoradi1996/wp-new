<?php

use STZCPW\inc\info_stz;



?>


<div class="stz-cpw-body-modal" id="stz-cpw-body-modal-<?php echo $param['id-modal'] ?>">
    <div class="stz-cpw-opt-modal"></div>
    <div class="stz-cpw-modal">
        <div class="stz-cpw-main-modal">
            <div>
                <?php
                info_stz::STZ_VIEW($param['body-modal'])
                ?>
            </div>

        </div>
    </div>
</div>
</div>