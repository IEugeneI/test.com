     $(document).ready(function() {
        jQuery('.bookstwomenu').click(function() {
        $(this).data('clicked', true);
    });

    $('.booksmenu').on("click", function() {
        if ($('.bookstwomenu').css('display') == 'none') {
            $('.bookstwomenu').css('display', 'block');
            $('.bookstwomenu').data('clicked', false);
        } else {
            if (jQuery('.bookstwomenu').data('clicked')) {
                $('.bookstwomenu').css('display', 'block');
                $('.bookstwomenu').data('clicked', false);
            } else {
                $('.bookstwomenu').css('display', 'none');
            }
        }
    });
      
        jQuery('.authortowmenu').click(function() {
        $(this).data('clicked', true);
    });
          $('.authormenu').on("click", function() {
        if ($('.authortowmenu').css('display') == 'none') {
            $('.authortowmenu').css('display', 'block');
            $('.authortowmenu').data('clicked', false);
        } else {
            if (jQuery('.authortowmenu').data('clicked')) {
                $('.authortowmenu').css('display', 'block');
                $('.authortowmenu').data('clicked', false);
            } else {
                $('.authortowmenu').css('display', 'none');
            }
        }
    });
            jQuery('.buttonupdatebooks').click(function() {
        id = $(this).attr('data-id');
        name = $(this).attr('data-name');
        year = $(this).attr('data-publish');
        genre = $(this).attr('data-genre');
        author = $(this).attr('data-auth');
        jQuery('.id').val(id);
        jQuery('.name').val(name);
        jQuery('.year').val(year);
        jQuery('.genre').val(genre);
        jQuery('.author').val(author);
        
    });
});