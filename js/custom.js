/* 



1. Add your custom JavaScript code below

2. Place the this code in your template:



  



*/

$(document).ready(function(){
    if($('.grid-container').length) {
        $(".grid-container").imagesLoaded(function () {
            var grid_container =  $(".grid-container").masonry({
                itemSelector: ".grid-item"
            });
        });
    }


    var ppp = 10; // Post per page
    var pageNumber = 1;
    //var cat = 18;
    //var cat = get_field('category_slug_name');
    let category = $("#ajax-posts").data('category');


    function load_posts(){
        pageNumber++;
        var str = '&category=' + category + '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                category,
                pageNumber,
                ppp,
                action: 'more_post_ajax',
        },

            success: function(result){
            // console.log(data);
            let data = JSON.parse(result);
            if(data.html){
                var grid_container =  $(".grid-container");
                //$("#ajax-posts").append(data);
                var $moreBlocks = $( data.html );
                // Append new blocks
                if(data.hasmore) {
                    $("#more_posts").show()
                } else {
                    $("#more_posts").hide()
                }
                grid_container.append( $moreBlocks );
                
                // Have Masonry position new blocks
                grid_container.masonry( 'appended', $moreBlocks );
                $("#more_posts").attr("disabled",false);
            } else{
                $("#more_posts").attr("disabled",true);
            }
        },
         error : function(jqXHR, textStatus, errorThrown) {
                    $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                }

            });
            return false;
        }

        $("#more_posts").on("click",function(){ // When btn is pressed.
            $("#more_posts").attr("disabled",true); // Disable the button, temp.
            load_posts();
        });
    });


/*jQuery(function($) {
    $('.btn-load-more').click(function(e) {
        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore',
                'limit': 3,
                'page': 1,
                'category': 'category_name'
            };

        $.ajax({
            url: loadmore_params.ajaxurl,
            data: data,
            type: 'POST',
            beforeSend: function(xhr) {
                button.text('Loading...'); // change the button text, you can also add a preloader image
            },
            success: function(data) {
                if (data) {
$(".latest_posts_wrapper").append(data);
                    page++;
                    button.text('More Articles');
                    /*if (page == max_pages_latest)
                        button.remove(); // if last page, remove the button*/
/*                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });

});*/
