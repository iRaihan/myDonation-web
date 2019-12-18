$(document).ready(function(){
    $("#main-header").sticky({topSpacing:0});
  });



$('.services-slider').owlCarousel({
    loop:true,
    autoplay:false,
    margin:8,
    nav:false,
    dots:false,
    autoplayTimeout:5000,
    smartSpeed:1000,
    autoplaySpeed:2000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:1,
            
        }
    }
})

$('.events-slider').owlCarousel({
    loop:true,
    autoplay:false,
    margin:8,
    nav:false,
    dots:false,
    autoplayTimeout:5000,
    smartSpeed:600,
    autoplaySpeed:600,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:1,
            
        }
    }
})

$('.comments-slider').owlCarousel({
    loop:true,
    autoplay:true,
    margin:8,
    nav:false,
    dots:false,
    animateIn:'fadeInUp',
    autoplayTimeout:5000,
    smartSpeed:600,
    autoplaySpeed:600,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:1,
            
        }
    }
})


/*=========== Donate Form ==============*/

    

function myFunction1() {
  document.getElementById("myText").value = "500";
}
function myFunction2() {
  document.getElementById("myText").value = "1000";
}
function myFunction3() {
  document.getElementById("myText").value = "2000";
}

function show2(){
  document.getElementById('div1').style.display = 'block';
}
    
/*=========== End onate Form ==============*/

