$('#cart-dropdown').on('click', function(){
  $(this).toggleClass('open');
})

$('#togleuser').bind('click',function(){
  $('.overlay-user').toggle();
})

$(document).click(function(e){
  if (e.target.matches('.header-cart')) {
    if (!e.target.matches('.user-profile')) {
       $('.overlay-user').hide();
    }
  }
})






// $('.t-cart').hover(function(){
//   $('.t-cart-add').show();
//   // alert('lol')
// })

// $('.t-cart').on('mouseout', function(){
//   $('.t-cart-add').css("display","none");
// })

// function open_cart(){
//   if (!$('.cart').hasClass('open')) {
//     $('.card').addClass('open')
//   }
//   else{
//     $('.card').removeClass('open')
//   }
// }


//
// function close_cart(){
//   $('#mycart').css("height","0");
//   $('#mycart').css("width","0");
//   $('#mycart').css("display","none");
// }
//
// $('body').on('click', function(){
//   close_cart()
// })
