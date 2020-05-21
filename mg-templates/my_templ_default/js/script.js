function getBrowserInfo() {
    var t,v = undefined;
    if (window.chrome) t = 'Chrome';
    else if (window.opera) t = 'Opera';
    else if (document.all) {
        t = 'IE';
        var nv = navigator.appVersion;
        var s = nv.indexOf('MSIE')+5;
        v = nv.substring(s,s+1);
    }
    else if (navigator.appName) t = 'Netscape';
    return {type:t,version:v};
}

function bookmark(a){
    var url = window.document.location;
    var title = window.document.title;
    var b = getBrowserInfo();
    if (b.type == 'IE' && 8 >= b.version && b.version >= 4) window.external.AddFavorite(url,title);
    else if (b.type == 'Opera') {
        a.href = url;
        a.rel = "sidebar";
        a.title = url+','+title;
        return true;
    }
    else if (b.type == "Netscape") window.sidebar.addPanel(title,url,"");
    else alert("Нажмите CTRL + D, чтобы добавить страницу в закладки.");
    return false;
} 

$(document).ready(function(){

    $("table").wrap("<div class='table-wrapper'/>");

    $(".products-wrapper .product-wrapper").each(function(){

        var variants = $(this).find(".block-variants");
        if(variants.length){
          $(this).find(".product-image").prepend("<span class='variants-text'><i class='fa fa-bookmark-o'></i> Есть варианты</span>");
          $('.variants-text').show();
        }
    });

    $(".enter-on .open-link").on("click", function(e){
        e.preventDefault();
        $(this).parent().toggleClass("open");
    });

    $('html').click(function( event ){

        var target = $( event.target ).parents(".enter-on");

        if( !target.length ){
            $(".enter-on").removeClass("open");
        }
    });

    $(".zoom").on("click", function(){
      $(this).prev().trigger("click");
    });

    function productTabs(){
      var tabContainers = $('.product-tabs-container > div');
      tabContainers.hide().filter(':first').show();

      $('.product-tabs li a').click(function(){
        tabContainers.hide();
        tabContainers.filter(this.hash).fadeIn("fast");
        $('.product-tabs li').removeClass('active');
        $(this).parent().addClass('active');
        return false;
      }).filter(':first').click();
    }

    productTabs();

    function rememberView(){
      var className = localStorage["class"];
      //localStorage.clear();

      if(className === undefined){
        $(".btn-group .view-btn:first-child").addClass("active");
        localStorage.setItem('class', 'grid');
      }

      else{
        $('.btn-group .view-btn[data-type="' + className + '"]').addClass("active");
        $('.products-wrapper.catalog').addClass(className);
      }

      $(".btn-group .view-btn").on("click", function(e){
        e.preventDefault();
        var currentView = $(this).data('type');
        var product = $('.products-wrapper.catalog');
        product.removeClass("list grid");
        product.addClass(currentView);
        $('.btn-group .view-btn').removeClass("active");
        $(this).addClass("active");
        localStorage.setItem('class', $(this).data('type'));
        return false;
      });
    }

    rememberView();

    $(".show-hide-filters").on("click", function(){
      $(this).parent(".filter-block").toggleClass("show");
    });

    $(".close-icon").on("click", function(){
      $("body").removeClass("locked");
      $(this).parents(".menu-block").removeClass("open");
    });

    $(".mobile-toggle").on("click", function(){
      $("body").toggleClass("locked");
      $(this).parent(".menu-block").toggleClass("open");
    });

    $("body").on("click", ".menu-block.open .toggle", function(){
      $(this).parents("li").toggleClass("open");
    });

    var owl = $(".m-p-products-slider-start");

    owl.owlCarousel({
      items: 3, //10 items above 1000px browser width
      itemsDesktop: [1100, 3], //5 items between 1000px and 901px
      itemsDesktopSmall: [900, 2], // betweem 900px and 601px
      itemsTablet: [600, 2], //2 items between 600 and 0
      itemsMobile: [400, 1], // itemsMobile disabled - inherit from itemsTablet option
      pagination: false,
      navigation: true
    });

    var mobileMenuParent = $(".mg-menu > li").has("ul");
    mobileMenuParent.append('<span class="toggle"></span>');
    mobileMenuParent.addClass("has-menu");
    var horizontalMenuParent = $(".mg-main-menu > li").has("ul");
    horizontalMenuParent.append('<span class="toggle"></span>');

    var slider_width = $('.menu-block').width() + 2;
    var deviceWidth = $(window).width();

    /*Mobile menu*/
    $(".top-menu-list li .slider_btn").on("click", function(){
      $(this).parent("li").toggleClass("open");
    });

    $(".menu-toggle").on("click", function(){
      $(this).parent(".top-bar").toggleClass("open");
    });

    $(".mg-main-menu-toggle").on("click", function(){
      $(this).parent(".mg-main-menu-holder").toggleClass("open");
    });

    $(".mg-main-menu .toggle").on("click", function(){
      $(this).parent("li").toggleClass("open");
    });

    /*Fix mobile top menu position if login admin*/
    if($("body").hasClass("admin-on-site")){
      $("body").find(".mobile-top-panel").addClass("position-fix");
    }

    $("ul.top-menu-list>li:last-child>a").attr("onclick", "ga('send', 'event', 'Contacts', 'Click', 'ViewContacts');");

});