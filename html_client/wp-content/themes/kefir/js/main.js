jQuery(document).ready(function($){
    $(".nav__list").children("li").addClass("nav__item");
    $(".nav__list").children("li").children("a").addClass("nav__item-link");
    $(".contact__form-inner").find("form").addClass("form");
    $(".ngg-galleryoverview").addClass("services-rest__list");
    $(".ngg-gallery-thumbnail-box").addClass("services-rest__item");
    $(".ngg-gallery-thumbnail").addClass("services-rest__item-img-wrap");
    $(".ngg-gallery-thumbnail").children("a").addClass("fancybox").attr("rel","group");
    $(".services-rest__undertitle").find("iframe").wrap("<div class='services-rest__item-img-wrap log-out__img-wrap video-wrap'></div>");
    $(".video-wrap").wrap("<div class='services-rest__item'></div>");
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        var off = $("#spec-title").offset();
        if(off && scroll > off.top && scroll < (off.top + 500)){
            $(".float_btn").fadeOut(300);
        }else{
            $(".float_btn").fadeIn(300);
        }
    });
    $(".fancybox").attr("rel","group");
});

function sendCall(submitter){
    var form = getParentForm(submitter);
    var msg   = jQuery(form).serialize();
    jQuery.ajax({
        type: 'POST',
        url: '../../../../../sendmessage.php',
        data: msg,
        success: function(result) {
            if (result=='true'){
                $(".popup__close").click();
                swal("Сообщение успешно отправлено!", "В ближайшее время мы с Вами свяжемся.", "success");
            } else{
                $(".popup__close").click();
                swal("Упс...", "Попробуйте позже :(", "error");;
            }
        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
}
function sendContact(submitter){
    var phoneError=false;
    var mailError=false;
    var msgError=false;
    var form = getParentForm(submitter);
    var msg   = jQuery(form).serialize();
    jQuery('.cb_mail', form).each(function(){
        if (!checkData(this, reg_mail)){
            mailError = true;
        }
    });
    jQuery('.cb_phone', form).each(function(){
        if (!checkData(this, reg_no_empty)){
            phoneError = true;
        }
    });
    if (phoneError || mailError){return false;}
    jQuery.ajax({
        type: 'POST',
        url: '../../../../sendmessage.php',
        data: msg,
        success: function(result) {
            if (result=='true'){
               //$(".popup__block-thanks").fadeIn(500);
                $(".form").css("display","none");
                $(".pie-inner").css("display","block");
            } else{
                swal("Упс...", "Попробуйте позже :(", "error");;
            }
        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
}

function toNum(s) {
    s = s.match(/\d+/);
    return s[0];
}

function getTnB(e,m) {
    var t = toNum(e.style.top),
    b = +t + +e.clientHeight + +m;
    return {'bottom':b,'top':t};
}
function getPrev(i,n) {
    return (i-n>0)?i-n:0;
}
function imgCoverIt(id) {
    var weddingList = document.getElementById(id);
    if (weddingList) {
        weddingList.style.position = 'relative';
        var imgParent = weddingList.getElementsByClassName('wedImgPar');

        var horizontal = 250,
            vertical = 520,
            margin = 20,
            gallBot = vertical,
            thisPos;

        for (var i = 0; i < imgParent.length; i++) {

            imgParent[i].style.overflow = 'hidden';
            // imgParent[i].style.position = 'relative';
            imgParent[i].style.position = 'absolute';

            var imgCover = imgParent[i].getElementsByTagName('img'),
            imgWidht = imgCover[0].naturalWidth,
            imgHeight = imgCover[0].naturalHeight,
            imgRatio = imgHeight/imgWidht,
            pWidht = imgParent[i].clientWidth,
            pHeight = (imgWidht>imgHeight)?horizontal:vertical,
            pRatio = pHeight/pWidht;

            // console.log(imgWidht);

            imgParent[i].style.height = pHeight + "px";

            imgCover[0].style.maxWidth = 'none';
            imgCover[0].style.position = 'absolute';

            if (pRatio<imgRatio) {
                imgCover[0].style.width = pWidht + "px";
                imgCover[0].style.height = (pWidht * imgRatio) + "px";
            }else{
                imgCover[0].style.height = pHeight + "px";
                imgCover[0].style.width = (pHeight / imgRatio) + "px";
                imgCover[0].style.left = (pWidht - (pHeight / imgRatio)) / 2 + "px";
                imgCover[0].style.top = "0px";
            }

            
            var weddingListW = weddingList.clientWidth,
                prev = getPrev(i,1),
                prev2 = getPrev(i,2),
                prev3 = getPrev(i,3);

            imgParent[i].style.width = (weddingListW/100*50)-(margin/2)+'px';


            if (i>1) {

                var posPrev = getTnB(imgParent[prev],margin),
                posPrev2 = getTnB(imgParent[prev2],margin),
                posPrev3 = getTnB(imgParent[prev3],margin);

                if (posPrev.bottom<posPrev2.bottom) {
                    imgParent[i].style.top = posPrev.bottom+'px';
                    imgParent[i].style.left = imgParent[prev].style.left;
                    imgParent[i].style.right = imgParent[prev].style.right;
                }else{

                    if ((+posPrev2.bottom + +(pHeight/2-margin/2) + +margin)>posPrev3.bottom) {

                        imgParent[i].style.top = posPrev2.bottom+'px';
                        imgParent[i].style.left = imgParent[prev2].style.left;
                        imgParent[i].style.right = imgParent[prev2].style.right;     
                      
                    }else{
                        imgParent[i].style.top = posPrev3.bottom+'px';
                        imgParent[i].style.left = imgParent[prev3].style.left;
                        imgParent[i].style.right = imgParent[prev3].style.right;
                    }

                }


            }else if(i==0){
                imgParent[i].style.top = 0;
                imgParent[i].style.left = 0;
                imgParent[i].style.right = 'auto';
            }else if(i==1){
                imgParent[i].style.top = 0;
                imgParent[i].style.left = 'auto';
                imgParent[i].style.right = 0;
            }

            thisPos = +(toNum(imgParent[i].style.top)) + +pHeight;
            gallBot = ((thisPos>gallBot)?thisPos:gallBot);
            weddingList.style.height = gallBot+'px';
      
        }
    }
    console.log('done');
}





function ready() {


     var timOut = 12000,
     wList = document.getElementById('weddingList');

    if (wList) {
        for(let i = 0; i < timOut; i = i+2000 ){
            setTimeout(function() {imgCoverIt('weddingList')}, i);
            console.log(i);
        }

    }


    imgCoverIt('weddingList')
    
  
    window.onresize = resize;
    function resize(){
      imgCoverIt('weddingList');
    }
}
