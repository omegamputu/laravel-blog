$(function () {
   // show the navbar when the page is scrolled up

    var media = 992;

    //primary navigation slide-in effect
    if ($(window).width() > media) {
        var headerHeight = $('#mainNav').height();
        $(window).on('scroll', {
                previousTop: 0
            },
            function() {
                var currentTop = $(window).scrollTop();
                //check if user is scrolling up
                if (currentTop < this.previousTop) {
                    //if scrolling up...
                    if (currentTop > 0 && $('#mainNav').hasClass('is-fixed')) {
                        $('#mainNav').addClass('is-visible');
                    } else {
                        $('#mainNav').removeClass('is-visible is-fixed');
                    }
                } else if (currentTop > this.previousTop) {
                    //if scrolling down...
                    $('#mainNav').removeClass('is-visible');
                    if (currentTop > headerHeight && !$('#mainNav').hasClass('is-fixed')) $('#mainNav').addClass('is-fixed');
                }
                this.previousTop = currentTop;
            });
    }


    $('.reply').click(function(e){
        e.preventDefault();

        var $this = $(this);
        var $form = $('#form-comment');
        var parent_id = $this.data('id');
        var $comment = $('#comment-' + parent_id);

        $form.hide();
        $form.find('h2').text('Répondre à ce commentaire');
        $('#parent_id').val(parent_id);
        $comment.after($form);
        $form.slideDown();
    })


});

$(function () {
    $('#login-modal').click(function (e) {
        e.preventDefault();
        $('#login-modal').modal();
    })
})