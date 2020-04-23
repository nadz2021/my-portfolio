$(document).ready(function() {
    setTimeout(function() {
        $('.wrapper').addClass('loaded');      
    }, 3000);
});

jQuery(function(){
    $(window).load(function(){    
        $('.wrapper').removeClass('preload');    
    });  
});  

//demo 01
$("#about").animatedModal({
    color:'#000'
});
$("#resume").animatedModal({
    color:'#000'
});

$("#news").animatedModal({
    color:'#000'
});

$("#portfolio").animatedModal({
    color:'#000'
});

$("#contact").animatedModal({
    color:'#000'
});