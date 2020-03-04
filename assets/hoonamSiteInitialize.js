$(function() {
    $("#hoonamSlide").hide();
    $("#hoonamSubjectOfProducts").hide();
    $("#sadCoPic").hide();
    $("#hoonamCirclePart").hide();
    $("#hoonamEndPic").hide();
    $("#searchBox").hide().one();
    $("#searchBtn").hide().one();
    $("#topSidebar-sticky").hide().one();
    $(".sidebar-sticky").hide().one();
    $("#hoonamBackMenu").hide().one();

});
$(document).keyup(function(e) {
    if (e.keyCode === 27) $('#collapseClose').click();   // esc
});
$(document).ready(function() {
    //$("#hoonamCarousel").hide("fast",function()
    //{
    $("#searchIcon").mouseenter(function() {
        $("#searchBox").show(500).one();
        $("#searchBtn").show("slow").one();
    });
    $("#hoonamMenuBtn").click(function() {
        $("#hoonamBackMenu").slideDown();
        //$("#hoonamBackMenu").animate({ fontSize: '26px', height: '40rem', backgroundColor: 'black' }, "slow").addClass("menuBtnSetBackground");
    });
    $("#closeBtn").click(function() {
        $("#hoonamBackMenu").slideUp();
    });
    $("#searchBtn").mouseout(function() {
        $("#searchBox").hide(500);
        $("#searchBtn").hide("slow");
    });
    $("#hoonamSlide").slideDown(1400, function() {
        $("#hoonamSubjectOfProducts").slideDown(1800, function() {
            animateSadCoPic();
            showInfoCircle();
            //$("#sadCoPic").animate({height:'show',transform:'rotateX(160deg)'},1500);
            //});
            //$("#hoonamInfoCircle").show(1400);
            //});
        });
    });
    $("#firstDoubleSlide").mouseover(function() {
        $("#topSidebar-sticky").hide();
        $(".sidebar-sticky").show("slow");

    });
    $("#firstDoubleSlide").mouseleave(function() {
        $(".sidebar-sticky").hide("slow");
        $("#topSidebar-sticky").show("slow");


        //   $(".topSidebar-sticky").show("slow"); 

    });
    $("#collapseClose").click(function(){
        $(".collapse").collapse('hide');
    });
    $("#hoonamFooter").mouseover(function() {
        $("#hoonamEndPic").fadeIn(1400);

    });
    $(".productsLI").mouseenter(function() {
        $(this).animate({ height: '+=30px', opacity: '1' });
    });
    $(".productsLI").mouseleave(function() {
        $(this).animate({ height: '-=30px', opacity: '0.6' });
    });
    $('#firstDoubleSlide .hoonamDoubleSlideFirstImgNextBtn').click(function() {
        $("#firstDoubleSlide .hoonamDoubleSlideLeftImage").fadeOut("slow", function() { $(this).attr("src", "img/pr2.jpg").fadeIn("slow") }).delay(1);
        $("#firstDoubleSlide .hoonamDoubleSlideRightImage").fadeOut("slow", function() { $(this).attr("src", "img/pr2back.jpg").fadeIn("slow") }).delay(1);
        $("#firstDoubleSlide .hoonamDoubleSecondPartTitle").text("گوشی موبایل هوآوی");
        $("#firstDoubleSlide .hoonamDoubleSlideSecondPartDescription").text("توضیحات محصول 2 توضیحات محصول 2 توضیحات محصول دو");

    });
    $("#firstDoubleSlide .hoonamDoubleSlideFirstImgPrevBtn").click(function() {
        $("#firstDoubleSlide .hoonamDoubleSlideLeftImage").fadeOut("slow", function() { $(this).attr("src", "img/pr11.jpg").fadeIn("slow") }).delay(1);
        $("#firstDoubleSlide .hoonamDoubleSlideRightImage").fadeOut("slow", function() { $(this).attr("src", "img/pr11back.jpg").fadeIn("slow") }).delay(1);
    }); //// badan ba if hatman ok kon
    $('#secondDoubleSlide .hoonamDoubleSlideFirstImgNextBtn').click(function() {
        $("#secondDoubleSlide .hoonamDoubleSlideLeftImage").fadeOut("slow", function() { $(this).attr("src", "img/pr2.jpg").fadeIn("slow") }).delay(1);
        $("#secondDoubleSlide .hoonamDoubleSlideRightImage").fadeOut("slow", function() { $(this).attr("src", "img/pr2back.jpg").fadeIn("slow") }).delay(1);
        $("#secondDoubleSlide .hoonamDoubleSecondPartTitle").text("گوشی موبایل هوآوی");
        $("#secondDoubleSlide .hoonamDoubleSlideSecondPartDescription").text("توضیحات محصول 2 توضیحات محصول 2 توضیحات محصول دو");

    });
    $("#secondDoubleSlide .hoonamDoubleSlideFirstImgPrevBtn").click(function() {
        $("#secondDoubleSlide .hoonamDoubleSlideLeftImage").fadeOut("slow", function() { $(this).attr("src", "img/pr1.jpg").fadeIn("slow") }).delay(1);
        $("#secondDoubleSlide .hoonamDoubleSlideRightImage").fadeOut("slow", function() { $(this).attr("src", "img/pr1back.jpg").fadeIn("slow") }).delay(1);
    });

    //////////story slide
    $('#storySlide .hoonamDoubleSlideFirstImgNextBtn').click(function() {
        $("#storySlide .hoonamDoubleSlideRightImage").fadeOut("slow", function() { $(this).attr("src", "img/story1.jpg").fadeIn("slow") }).delay(1);
        $("#storySlide .hoonamDoubleSecondPartTitle").text("داستان دو");
        $("#storySlide .hoonamDoubleSlideSecondPartDescription").text("توضیحات محصول 2 توضیحات محصول 2 توضیحات محصول دو");

    });
    $("#storySlide .hoonamDoubleSlideFirstImgPrevBtn").click(function() {
        $("#storySlide .hoonamDoubleSlideRightImage").fadeOut("slow", function() { $(this).attr("src", "img/story2.jpg").fadeIn("slow") }).delay(1);
    });
    $("#goUpBtn").click(function() {
        $('html, body').animate({ scrollTop: 0 }, "slow");
    });

    function animateSadCoPic() {
        $("#sadCoPic").animate({
            height: 'show',
            transform: 'rotateX(160deg)'
        }, 1500);

    }

    function showInfoCircle() {
        $("#hoonamCirclePart").show(1400);
    }
});