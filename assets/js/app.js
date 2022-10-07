// Global -- starts here
function initSelect2() {
    $('.select2').each(function(){
        var _placeholder = $(this).data('placeholder');
        $(this).select2({
            minimumResultsForSearch: -1 ,
            placeholder: _placeholder         
        }).data('select2').$dropdown.addClass('search-panel-results');;
    })
}
function removeHash() {
    $('a[href="#"]').each(function(){
        $(this).attr('href','javascript:void(0)')
    });
}
function scrolledNav(pos,sticky) {
    if (pos >= 100) {
        $(sticky).addClass('scrolled'); 
    } else {
        $(sticky).removeClass('scrolled');
    }
}
function footerSlider() {
    $(".customer-slider").owlCarousel({
        margin:10,
        loop:true,        
        items: 6,
        autoplay: true,
        pagination: false,
        dots: false,
        responsive : {            
            0 : {     
                items: 2,          
            },            
            480 : {     
                items: 3,          
            },
            768 : {     
                items: 4,                   
            },
            992 : {     
                items: 5,                   
            },
            1200 : {     
                items: 6,                   
            }
        }
        
    });
}
function productSlider() {   
    $(".product-slider").each(function(){
    $(this).owlCarousel({
        margin: 10,
        loop: true,
        items: 3,
        stagePadding: 200,
        pagination: false,
        dots: false,
        responsive : {            
            0 : {     
                items: 1,    
                stagePadding: 0,      
            },            
            480 : {     
                items: 1,  
                stagePadding: 0,          
            },
            768 : {     
                items: 2,    
                stagePadding: 0,                 
            },
            992 : {     
                items: 2,           
                stagePadding: 0,        
            },
            1200 : {     
                items: 3,    
                stagePadding: 200,               
            }
        }
    });
})
}
function testimonialSlider() {   
    $(".testimonial-slider").each(function(){
    $(this).owlCarousel({
            margin: 50,
            draggable: false,
            loop: true,
            items: 1,
            stagePadding: 300,
            pagination: false,
            dots: false,   responsive : {            
                0 : {     
                    items: 1,    
                    stagePadding: 30,      
                },            
                480 : {     
                    items: 1,  
                    stagePadding: 30,          
                },
                768 : {     
                    items: 1,    
                    stagePadding: 30,                 
                },
                992 : {     
                    items: 1,           
                    stagePadding: 30,    
                },
                1200 : {     
                    items: 1,    
                    stagePadding: 300,               
                }
            }
        });     
        });
}

function nextProductSlider(h) {
    var h = $(h);
    h.trigger('next.owl.carousel');
}
function prevProductSlider(h) {
    var h = $(h);
    h.trigger('prev.owl.carousel');
}
function productTab(t){
    $('.producttab').fadeOut();
    $(t).fadeIn(300);
    $('.products-section ul li a').removeClass('active');
    $('.products-section ul li a[href="'+t+'"]').addClass('active');
    productSlider();
}
function openModal(id) {
    $(id).addClass('on');
    $('html,body').addClass('modal-open')
}
function closeModal() {
    $('.login-modal').removeClass('on');    
    $('html,body').removeClass('modal-open')
}
// Global -- ends here
// Scroll
$(window).scroll(function(){
    var pos = $(window).scrollTop();
    scrolledNav(pos,'.navbar')    
});
// Scroll
// Resize
$(window).resize(function(){
    initSelect2();
    footerSlider();
    productSlider();
    testimonialSlider();
})
// Resize
// DOM ready -- starts here
$(function(){
    console.log('App Started....');
    initSelect2();
    removeHash();
    footerSlider();
    productSlider();      
    $('.products-section ul li a').click(function(e){
        e.preventDefault();
        var t = $(this).attr('href');
        productTab(t);
    });
    testimonialSlider();
    $('[data-modalopen]').click(function(){
        var modal = $(this).data('modalopen');
        closeModal();
        openModal(modal);
        $('#loginBody').removeClass('hidden');
        $('#forgotBody').addClass('hidden')
    })
    
    $('[data-modalclose]').click(function(){    
        closeModal();
    });
    // $(document).on('click','.login-modal', function(){
    //     closeModal();
    // });
    // $('.login-modal-card,.signup-panel').click(function(e){
    //     e.stopPropagation();
    // });
    $('.forgot-link').click(function(){
        $('#loginBody').addClass('hidden');
        $('#forgotBody').removeClass('hidden')
    });
    $('select').each(function(){
        var i = $(this);
        if(i.val()=="") {
            i.addClass('noselect')
        } else {
            i.removeClass('noselect')
        }
        i.change(function(){
            if(i.val()=="") {
                i.addClass('noselect')
            } else {
                i.removeClass('noselect')
            }
        })
    });
    $('.navtosignup').click(function(e){
        e.preventDefault();        
        var num = $(this).data('tabno');        
        $('.signup-steps-content').hide();
        $('#signup'+num).fadeIn();
        $('.signup-steps li').removeClass('active');
        var t = 0;
        for(t;t<=num;t++) {
            $('[data-id="'+t+'"]').addClass('active')
        }
    });
    $('.product-details-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.product-details-thumb-slider',
        cssEase: 'linear',
        fade: true,
        draggable: false
    });
    $('.product-details-thumb-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.product-details-slider',
        focusOnSelect: true,
        centerMode: true,
        centerPadding: 0,
        draggable: false
    });
    $('.product-details-slider img:not(.isVideo)').imagezoomsl({
        magnifiersize: [300,200],
        zoomrange: [3,3]        
    });
    $('.icrest-rating').each(function(){
        $(this).append('<img src="assets/images/icrest-rating.png">');
        var rating = parseFloat($(this).data('rating'));
        var total =  parseFloat($(this).data('total'));
        var width =  parseFloat($(this).data('width'));
        var w = ((rating/total)*100);
        $(this).css({'width':width, 'height': (width/5.62)}).attr('title',rating+'/'+total).append('<i style="width: '+w+'%"></i>');
    });
    setTimeout(function(){
        $('#slider-section').addClass('on')
    },500)
})
// DOM ready -- ends here
/* ------------------------------------------------------ */