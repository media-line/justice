// custom scripts
jQuery(document).ready(function(){
    //модальное окно с формой Contact us
    jQuery('#menu-item-8, #menu-item-20').click(function(event){
        event.preventDefault();
            jQuery('#modal-form').modal('show');
        return false;
    });
});
