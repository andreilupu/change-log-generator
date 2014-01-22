(function($){

    $(document).ready(function(){
        $('.file').on('click', '> a', function(e){
            e.preventDefault();
            console.log( $(this).siblings('.chunks'));
            $(this).siblings('.chunks').toggle();

        });
    });
})(jQuery);