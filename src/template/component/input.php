<div class="mt-3" style="max-width: 300px;">
    <div class="d-flex flex-wrap mb-1 m-1 ">
        <div class='w-100'>
            <label for="<?php echo $param['id-label'] ?>">
                <div class="mb-2 d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-info-square  m-1" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                    <div class="m-1">
                        <sapn class="fw-bold "><?php echo $param['title-label']  ?></sapn>
                    </div>
                </div>
            </label>
            <input <?php echo $param['attr-input'] ?> />
        </div>
    </div>
</div>