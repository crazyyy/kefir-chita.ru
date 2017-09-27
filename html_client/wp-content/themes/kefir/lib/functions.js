//Draimstar Framework
//Version 1.0
//Powered by Anton Goncharov
jQuery(document).ready(function($){
	//Стили для горизонтальной линии (убирает трёхмерные эффекты)
	$("hr").attr("noshade",true);
	//Добавляем класс ib-parent для родительского элемента класса ib. Это нужно для удаления всех лишних отступов. Стили прописаны в файле стилей
	$(".ib").parent().addClass("ib-parent");
	//Отмена дефолтного события ссылки
	$(".submit").click(function(e){
		e.preventDefault();
	});
	//Задание параметров для fancybox
	$(".fancybox").fancybox({
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		maxWidth:"100%",
		maxHeight:"100%"
	});
	//Реализация переключателя между формами авторизации и регистрации (уже зарегистрированы? ещё не регистрировались?)
	$("#reg-exists").click(function(){
		$.fancybox.close();
		$.fancybox.open($("#auth"));
	});
	$("#reg-noexists").click(function(){
		$.fancybox.close();
		$.fancybox.open($("#reg"));
	});
	//Реализация выпадающего слева мобильного меню
	$('#simple-menu').sidr({
		name: 'sidr-left',
		side: 'left',
		source: '#sidr-left',
		onOpen:function(){
			$(".open").css("display","none");
			$(".close").css("display","inline-block");
		},
		onClose:function(){
			$(".close").css("display","none");
			$(".open").css("display","inline-block");
		}
	});
	//HTML код для вставки в нужное место
	/*<div id="sidr-left">
		Содержимое мобильного меню
	</div>
	<a id="simple-menu" href="#sidr-left">
		<img class="open" src="<?php echo IMAGES;?>/open.png" />
		<img class="close" src="<?php echo IMAGES;?>/close.png" />
		<span class="simple-menu-title">Меню</span>
	</a>
	*/
	//Инициализация Swiper, обычный слайдер
    var slider = new Swiper('.swiper-horizontal',{
		direction: 'horizontal',
		loop:true,
		pagination:'.swiper-pagination',
		paginationClickable:true,
        nextButton: '.horizontal-next',
        prevButton: '.horizontal-prev'
    });
	//Инициализация Swiper, карусель
	var carousel = new Swiper('.swiper-carousel', {
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 10,
        nextButton: '.carousel-next',
        prevButton: '.carousel-prev',
		loop:true
    });
	//Инициализация табов
	$("#tabs").tabs();
	/*
	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">Таб 1</a></li>
			<li><a href="#tabs-2">Таб 2</a></li>
			<li><a href="#tabs-3">Таб 3</a></li>
		</ul>
		<div id="tabs-1">
		
		</div>
		<div id="tabs-2">
		
		</div>
		<div id="tabs-3">
		
		</div>
	</div>
	*/
});
$ = jQuery;
//Реализация меняющего треугольника при раскрытии-закрытии меню. В HTML-код для этого просто вставляем две картинки и назначаем нужные классы им
function switchTriangle(classname){
	$(classname).click(function(){
		if($(this).parent().find("ul").css("display") == "none"){
			$(this).find(".arrow-down").css("display","none");
			$(this).find(".arrow-up").css("display","inline-block");
			$(this).parent().find("ul").slideToggle();
		}else{
			$(this).find(".arrow-up").css("display","none");
			$(this).find(".arrow-down").css("display","inline-block");
			$(this).parent().find("ul").slideToggle();
		}
	});
}
//Функция удаления класса ошибки при фокусе на элементе формы
function removeError(obj){
    jQuery(obj).removeClass('error');
}
//Список регулярных выражений для проверки
var reg_name = /^[а-яёa-z\s_-]{1,100}$/i;
var reg_login = /^[a-z0-9\s_-]{1,100}$/i;
var reg_mail = /^[\.a-z0-9_-]{1,20}@[\.a-z0-9_-]{1,20}\.[a-z]{2,4}$/i;
var reg_phone = /^[+]{0,1}[-0-9\s\(\)]{6,20}$/i;
var reg_message = /^[\s\S]{1,500}$/i;
var reg_no_empty = /^[\s\S]{1,500}$/i;
//Функция проверки полей, принимает значение поля и регулярное выражение для него
function checkData(selector, reg){
    var value = jQuery(selector).val();
    if (reg.test(value) ){
        jQuery(selector).removeClass('error');//Если проверка пройдена, ничего не происходит
        return true;
    }
    else {
        jQuery(selector).addClass('error');//Если проверка не пройдена, добавляется класс error
        return false;
    }
}
//Функция получает родительскую форму для вызвавшего объекта
function getParentForm(obj) {
    while (obj = obj.parentNode) {
        if (obj.nodeName == 'FORM') {
            break;
        }
    }
    return obj;
}

//Шаблон отправки (удалить ненужные элементы)
function sendForm(submitter){
    var nameError=false;
    var phoneError=false;
    var mailError=false;
    var msgError=false;
    var form = getParentForm(submitter);
    var msg   = jQuery(form).serialize();
    jQuery('.cb_name', form).each(function(){
        if (!checkData(this, reg_name)){
            nameError = true;
        }
    });
    jQuery('.cb_phone', form).each(function(){
        if (!checkData(this, reg_phone)){
            phoneError = true;
        }
    });
    jQuery('.cb_mail', form).each(function(){
        if (!checkData(this, reg_mail)){
            mailError = true;
        }
    });
    jQuery('.cb_msg', form).each(function(){
        if (!checkData(this, reg_message)){
            msgError = true;
        }
    });
    if (nameError || phoneError || mailError || msgError){return false;}
    jQuery.ajax({
        type: 'POST',
        url: '../../../../sendmessage.php',
        data: msg,
        success: function(result) {
            if (result=='true'){
                swal("Сообщение успешно отправлено!", "В ближайшее время мы с Вами свяжемся.", "success");
            } else{
                swal("Упс...", "Попробуйте позже :(", "error");;
            }
        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
}
//Шаблон выборки постов без перезагрузки страницы
function get_posts_from_small(id,first,second){
	jQuery.ajax({
		type:'POST',
		url:'../../../../get-posts.php',
		data:{first:first,second:second},
		cache: false,
		beforeSend: function() {
			jQuery("#content").children().fadeOut(300);
			jQuery("#content").prepend("<p style='margin:0 0 10px 0'>Подождите, идёт загрузка...</p>");
		},
		success: function(html){
			jQuery("#content").html(html);
			var small = jQuery("#content").html(html);
			small.fadeIn(1000);
		}
	})
};
//Шаблон регистрации
function register(submitter){
	var nameError=false;
	var loginError=false;
	var mailError=false;
	var passError=false;
	var form = getParentForm(submitter);
	var msg   = jQuery(form).serialize();
	jQuery('.cb_name', form).each(function(){
		if (!checkData(this, reg_name)){
			nameError = true;
		}
	});
	jQuery('.cb_login', form).each(function(){
		if (!checkData(this, reg_login)){
			loginError = true;
		}
	});
	jQuery('.cb_mail', form).each(function(){
		if (!checkData(this, reg_mail)){
			mailError = true;
		}
	});
	jQuery('.cb_pass', form).each(function(){
		if (!checkData(this, reg_message)){
			passError = true;
		}
	});
	if (nameError || mailError || passError || loginError){return false;}
	jQuery.ajax({
		type: 'POST',
		url: 'register.php',
		data: msg,
		success: function(result) {
			jQuery.fancybox.close();
			if (result=='true'){
				swal("Вы зарегистрированы!", "Войдите в Wordpress с логином и паролем.", "success");
			} else{
				swal("Упс...", result, "error");
			}
		},
		error:  function(xhr, str){
			alert('Возникла ошибка: ' + xhr.responseCode);
		}
	});
}
//Шаблон авторизации
function authorize(submitter){
	var nameError=false;
	var passError=false;
	var form = getParentForm(submitter);
	var msg   = jQuery(form).serialize();
	jQuery('.cb_name', form).each(function(){
		if (!checkData(this, reg_name)){
			nameError = true;
		}
	});
	jQuery('.cb_pass', form).each(function(){
		if (!checkData(this, reg_message)){
			passError = true;
		}
	});
	if (nameError || passError){return false;}
	jQuery.ajax({
		type: 'POST',
		url: 'authorize.php',
		data: msg,
		success: function(result) {
			jQuery.fancybox.close();
			if (result=='true'){
				swal("Вы успешно авторизованы!", "Приятной работы!", "success");
				location.reload();
			} else{
				swal("Упс...", "Проверьте правильность введённых данных!", "error");;
			}
		},
		error:  function(xhr, str){
			alert('Возникла ошибка: ' + xhr.responseCode);
		}
	});
}
//Шаблон личного кабинета
function updateUserInfo(submitter){
    var nameError=false;
    var loginError=false;
    var mailError=false;
    var oldPassError=false;
    var newPassError=false;
    var form = getParentForm(submitter);
    var msg   = jQuery(form).serialize();
	if(jQuery(".cb_name").val() != ''){
		jQuery('.cb_name', form).each(function(){
			if (!checkData(this, reg_name)){
				nameError = true;
			}
		});
	}
	if(jQuery(".cb_mail").val() != ''){
		jQuery('.cb_mail', form).each(function(){
			if (!checkData(this, reg_mail)){
				mailError = true;
			}
		});
	}
	if(jQuery(".cb_old").val() != ''){
		jQuery('.cb_old', form).each(function(){
			if (!checkData(this, reg_message)){
				oldPassError = true;
			}
		});
	}
	if(jQuery(".cb_new").val() != ''){
		jQuery('.cb_new', form).each(function(){
			if (!checkData(this, reg_message)){
				newPassError = true;
			}
		});
	}
    if (nameError || mailError || oldPassError || newPassError){return false;}
    jQuery.ajax({
        type: 'POST',
        url: 'cabinet.php',
        data: msg,
        success: function(result) {
            if (result == 'success'){
                swal("Информация успешно изменена!", "Всё отлично!", "success");
				location.reload();
            } else{
                swal("Упс...", "Проверьте правильность текущего пароля!", "error");
				location.reload();
            }
        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
}
//Шаблон выхода из авторизации
function logout(){
	jQuery.ajax({
		type:'POST',
		url:'../../../../logout.php',
		cache: false,
		success: function(html){
			location.reload();
		}
	})
}