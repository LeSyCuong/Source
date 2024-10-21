$(function() {

    $('#posts__tab li a').click(function(event) {        

        var currentTab = $(this).data('category'); 

        var container = jQuery("#posts__list");

        var shortUrl = $(this).data('shorturl') + '/' + $(this).data('block-name');
        $('#posts__tab li a').removeClass('active');
        $(this).addClass('active');
        shortUrl += currentTab.length > 0 ? '.1.html?cate=' + currentTab : '.1.html';



        var linkHref = $(this).attr('href');  

        $('#posts__view-all').attr('href',linkHref);

        loadBlock(container,shortUrl);
        
        return false;
        
    });

    function loadBlock(container,shortUrl) {

        var $ajax;

        if ($ajax != undefined) {
            $ajax.abort();
        }

        $ajax = jQuery.ajax({
            url: shortUrl,
            dataType: "json",
            success: function(result) {
                if(navigator.appVersion.indexOf("MSIE 8.")!=-1){                   
                    container[0].innerHTML = result;                   
                } else {                
                    container.html(result);
                }    
            }
        });
    }

});
