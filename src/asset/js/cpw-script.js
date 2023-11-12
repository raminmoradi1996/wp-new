jQuery(document).ready(($) => {

    // close modal 
    $('#stz-cpw-close-modal-main,.stz-cpw-opt-modal').on('click', () => {
        $('#stz-cpw-body-modal-main').hide()
        $('#stz-cpw-body-modal-info-cart').hide()
    })

    $('#stz-cpw-close-modal-info-cart').on('click', () => {
        $('#stz-cpw-body-modal-info-cart').hide()
        $('#stz-cpw-body-modal-main').show()
    })

    // open modal 
    $('#stz-cpw-btn-modal').on('click', () => {
        $('#stz-cpw-body-modal-main').show()
    })


})