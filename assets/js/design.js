$(document).ready(function() {


this.slided = false;
$('.priceBtn').click(function(){
        var id = $(this).attr("data-id");
        $('.ListsContainer .active').removeClass('active');
        $('.ListsContainer #'+id).addClass('active');
      });

$('.priceBtn').click(function(){
        var id = $(this).attr("data-id");
        $('.ListsContainer .active').removeClass('active');
        $('.ListsContainer #'+id).addClass('active');
      });



    var x = 10;
    var size = $(".gallery_pics").size();
    $(".gallery_pics:lt(" + x + ")").show();
    $(".gallery_pics:lt(" + x + ") a").addClass('galleryImages');
    $(".galleryImages").colorbox({rel:'gallery'});

    
    $(".showMore").click(function() {
        if (x < size) {
            x = x + 5;
        
            $(".gallery_pics:lt(" + x + ")").show();
            $(".gallery_pics:lt(" + x + ") a").addClass('galleryImages');
            $(".galleryImages").colorbox({rel:'gallery'});
        }
    });


     $(".pseudo-border").click(function() {

        if($(this).attr('id') == 'allphotos'){
            var allphotos = $(".gallery_pics").size();
            $(".gallery_pics:lt(" + allphotos + ")").show();
            $(".gallery_pics:lt(" + allphotos + ") a").addClass('galleryImages');
            $(".galleryImages").colorbox({rel:'gallery'});
            x = $(".gallery_pics").size();
        }else{
            var allphotos = $(".gallery_pics").size();
            $(".gallery_pics:lt(" + allphotos + ")").removeAttr("style");
            $(".gallery_pics:lt(" + x + ") a").removeClass('galleryImages');
            $("#"+$(this).attr('id')+".gallery_pics:lt(" + allphotos + ")").show();
            $("#"+$(this).attr('id')+".gallery_pics:lt(" + allphotos + ") a").addClass('galleryImages');
            $(".galleryImages").colorbox({rel:$(this).attr('id')});
            x = $(".gallery_pics").size();
        }
    });

var services = {
    '0':"First",
    '1':"Second",
    '2':"Third",
    '3':"Fourth",
};

var shown = [];

var time = 0;
var price = 0;

$('.check').click(function(e){
    var index = $(this).attr('data-value');
    $(this).toggleClass('show');
    if(shown.indexOf("<li>" + $(this).attr('data-category') + " " + $(this).attr('data-name') + " - " + $(this).attr('data-time') + " мин. " +$(this).attr('data-price') + " лв.</li>") === -1){
        shown.push("<li>" + $(this).attr('data-category') + " " + $(this).attr('data-name') + " - " + $(this).attr('data-time') + " мин. " +$(this).attr('data-price') + " лв.</li>");
        time +=parseInt($(this).attr('data-time'));
        $('#timeTotal').empty().append(time);
        price +=parseFloat($(this).attr('data-price'));
        $('#priceTotal').empty().append(price);
    }else{
        var shownIndex = shown.indexOf("<li>" + $(this).attr('data-category') + " " + $(this).attr('data-name') + " - " + $(this).attr('data-time') + " мин. " +$(this).attr('data-price') + " лв.</li>");
        shown.splice(shownIndex,1);
        time -=parseInt($(this).attr('data-time'));
        $('#timeTotal').empty().append(time);
        price -=parseFloat($(this).attr('data-price'));
        $('#priceTotal').empty().append(price);
    }
    $(".list").html(shown.join(' '));
    
});
$(".hairlenght a").colorbox({rel:'hairlenght'});
});