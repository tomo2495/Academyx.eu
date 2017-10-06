$(document).ready(function(){
$('.search-wrapper > i').click(function(){
        $('.search-wrapper > .search-input-wrapper').addClass('focus');
        $('.search-wrapper > .search-input-wrapper').show();
        $('.search-wrapper > .search-input-wrapper > .search-input').focus();
        $(this).hide();
    });

    $('.search-wrapper > .search-input-wrapper > .search-input').focusout(function(event){
               
        if($(event.relatedTarget).prop('type') === 'submit'){
            event.preventDefault();
        }

        else{
            $('.search-wrapper > .search-input-wrapper').hide();
            $('.search-wrapper > .search-input-wrapper').removeClass('focus');
            $('.search-wrapper > i').show();
        }
    });
});