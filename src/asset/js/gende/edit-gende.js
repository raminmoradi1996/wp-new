jQuery(document).ready(($) => {

    // edit item     
    $('#stz-cpw-btn-edit-item-gende').on('click', () => {

        const name = $('#stz-cpw-name-item-gende')
        const price = $('#stz-cpw-price-item-gende')
        const persent = $('#stz-cpw-persent-item-gende')
        const discription = $('#stz-cpw-discription-item-gende')
        const image = $('#stz-cpw-image-item-gende')
        const image_attachment_id = $('#stz-cpw-image-item-gende').attr('attachment-id')

        if (name.val() == '') {
            name.focus()
        } else if (price.val() == '') {
            price.focus()
        } else if (persent.val() == '') {
            persent.focus()
        } else if (discription.val() == '') {
            discription.focus()
        } else if (!image_attachment_id) {
            image.focus()
        } else {

            const data = new FormData();
            const item = {
                name: name.val(),
                price: price.val(),
                persent: persent.val(),
                discription: discription.val(),
                image: image_attachment_id
            }
            data.append('type', 'edit')
            data.append('item', JSON.stringify(item))
            $('#stz-cpw-sppinner-btn-edit-item-gende').show()
            $.ajax({
                url: `${window.location.protocol}//${window.location.hostname}/wp-admin/admin-ajax.php?action=stz_cpw_ajax_gende`,
                type: 'POST',
                data: data,
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                success: function (resp) {
                    console.log(resp)
                    $('#stz-cpw-sppinner-btn-edit-item-gende').hide()
                    if (resp.Result == true) {
                        const message = `ایتم ${name.val()} با موفقیت ویرایش شد `
                        $('#stz-cpw-message-gende').html(message)
                        name.val('')
                        price.val('')
                        persent.val('')
                        discription.val('')
                        image.val('')

                        setTimeout(() => {
                            $('#stz-cpw-message-gende').html('')
                        }, 3000);
                    } else {
                        const message = `مشکلی در سرور یافت شد لطفا بررسی نمایید`
                        $('#stz-cpw-error-gende').html(message)
                    }
                }
            });
        }

    })

    // remvoe item 
    $('#stz-cpw-btn-remove-item-gende').on('click', () => {

        const id = $('#stz-cpw-btn-remove-item-gende').attr('item')

        const data = new FormData();
        data.append('type', 'remove')
        data.append('item', id)
        $('#stz-cpw-sppinner-btn-remove-item-gende').show()
        $.ajax({
            url: `${window.location.protocol}//${window.location.hostname}/wp-admin/admin-ajax.php?action=stz_cpw_ajax_gende`,
            type: 'POST',
            data: data,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function (resp) {
                console.log(resp)
                $('#stz-cpw-sppinner-btn-remove-item-gende').hide()
                if (resp.Result == true) {
                    const message = `ایتم با موفقیت حذف شد `
                    $('#stz-cpw-message-gende').html(message)
                    setTimeout(() => {
                        $('#stz-cpw-message-gende').html('')
                        window.location.href = `${window.location.protocol}//${window.location.hostname}/wp-admin/admin.php?page=stz-cpw-list-gende`;

                    }, 3000);
                } else {
                    const message = `مشکلی در سرور یافت شد لطفا بررسی نمایید`
                    $('#stz-cpw-error-gende').html(message)
                }
            }
        });
    })



})