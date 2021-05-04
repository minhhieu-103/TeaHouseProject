var RGBChange = function() {
    $('#RGB').css('background', 'rgb(' + r.getValue() + ',' + g.getValue() + ',' + b.getValue() + ')')
};

/*scroll to top*/

if (typeof jQuery == 'undefined') {
    document.write('<' + 'script');
    document.write(' language="javascript"');
    document.write(' type="text/javascript"');
    document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');
    document.write('</' + 'script' + '>')
}

$(".toggle-support").click(function() {
    $(".support-list").toggle();

});
$(".toggle-service").click(function() {
    $(".service-footer").toggle();

});
$(".toggle-policy").click(function() {
    $(".policy").toggle();
});
$("#okenhe1").click(function() {
    $(".ng-scope").toggle();
});


window.setInterval('flakeFall();', 100);
//]]>`
//scrolling
//Get the button
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



// carousel service 3
$(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: false,

            navRewind: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    })
    // menu moblie
function openNav() {
    document.getElementById("mySidebar").style.width = "350px";
    document.getElementById("menu-mobile-button").style.marginLeft = "300px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("menu-mobile-button").style.marginLeft = "0";
}
//
$(document).ready(function() {



    // Enable Carousel Controls
    $(".carousel-control-prev").click(function() {
        $("#multi-item-example").carousel("prev");
    });
    $(".carousel-control-next").click(function() {
        $("#multi-item-example").carousel("next");
    });
});


function activeTab(obj) {
    // Xóa class active tất cả các tab
    $('.tab-content ul li').removeClass('active');

    // Thêm class active vòa tab đang click
    $(obj).addClass('active');

    // Lấy href của tab để show content tương ứng
    var id = $(obj).find('a').attr('href');

    // Ẩn hết nội dung các tab đang hiển thị
    $('.tab-pane').hide();

    // Hiển thị nội dung của tab hiện tại
    $(id).show();
}