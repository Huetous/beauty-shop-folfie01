$(function() {

    //Общий PopUp контроллер
    var popUpHandler = function() {
        $('[class*=js-btn-popup-services],' +
            '[class*=js-image-popup-masters],' +
            '[class*=js-btn-popup-subs],' +
            '[class*=js-btn-popup-blog],' +
            '[class*=js-popup-footer],' +
            '[class*=js-popup-gallery]').click(function (e) {

            e.preventDefault();
            e.stopPropagation();

            var id;
            //PopUp в разделе Услуги
            if(this.classList.contains("js-btn-popup-services")) {
                id = this.dataset.idservice;
                $('.popup[data-idService="' + id + '"]').show();
                id = 0;
            }
            //PopUp в разделе Мастера
            if(this.classList.contains("js-image-popup-masters")) {
                id = this.dataset.idmaster;
                $('.popup[data-idMaster="' + id + '"]').show();
                id = 0;
            }
            //PopUp в разделе Абонементы
            if(this.classList.contains("js-btn-popup-subs")) {
                id = this.dataset.idsubs;
                $('.popup[data-idSubs="' + id + '"]').show();
                id = 0;
            }
            //PopUp в разделе Блог
            if(this.classList.contains("js-btn-popup-blog")) {
                id = this.dataset.idblog;
                $('.popup[data-idBlog="' + id + '"]').show();
                id = 0;
            }
            //PopUp в разделе Footer
            if(this.classList.contains("js-popup-footer")) {
                $('.popup').hide();
                $('.popup-footer').show();
            }
            //PopUp в разделе Галерея
            if(this.classList.contains("js-popup-gallery")) {
                id = this.dataset.idgallery;
                $('.popup[data-idGallery="' + id + '"]').show();
                id = 0;
            }
            $('#blackout').show();
        });
        //Нажатие ВНЕ области PopUP окна
        $('html').click(function (e) {
            var container = $(".popup");
            if (container.has(e.target).length === 0){
                container.hide();
                $('#blackout').hide();
            }
        });
        //Нажатие на "крестик" внутри PopUp
        $('.close').click(function () {
            $('.popup').hide();
            $('#blackout').hide();
        });
    };

    //Кнопка, возвращающая пользователя на верх страницы
    var goToTop = function() {

        $('.js-gotop').on('click', function(event){

            event.preventDefault();

            $('html, body').animate({
                scrollTop: $('html').offset().top
            }, 500, 'easeInOutExpo');

            return false;
        });

        $(window).scroll(function(){

            var $win = $(window);
            if ($win.scrollTop() > 200) {
                $('.js-top').addClass('active');
            } else {
                $('.js-top').removeClass('active');
            }

        });

    };

    var orderHandler = function()
    {
        $('.order-form').submit(function () {
          if(checkForm(this)){
               $.ajax({
                   type: "POST",
                   url: '/_html/app/submit.php',
                   data: $(this).serialize(),
               }).done(function () {
                   alert("Спасибо за заявку! В скором времени с Вами свяжутся.");
                   $('.popup').hide();
               });
              return false;
          }
          else return false;
        });
        $('.review-form').submit(function () {
            if(checkForm(this)) {
                $subTitle = this.dataset.name;
                $data =  $(this).serializeArray();
                $data.push({name: "master_name", value: $subTitle});
                $.ajax({
                    type: "POST",
                    url: '/_html/app/to-database.php',
                    data: $data,
                }).done(function () {
                    alert("Спасибо за отзыв!");
                    $('.popup').hide();
                });
                return false;
            }
            else return false;
        });
        $('.subs-form').submit(function () {
           if(checkForm(this)) {
               $subTitle = this.dataset.title;
               $data =  $(this).serializeArray();
               $data.push({name: "subTitle", value: $subTitle});
                $.ajax({
                    type: "POST",
                    url: '/_html/app/to-database.php',
                    data: $data,
                }).done(function () {
                    alert("Спасибо за заявку! В скором времени с Вами свяжутся.");
                    $('.popup').hide();
                });
               return false;
            }
            else return false;
        })

    };
    function checkForm(form) {


        if(form.name){
            var name = form.name.value;
            var validName = name.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
            if (!validName) {
                alert("Имя введено неверно, пожалуйста исправьте ошибку");
                return false;
            }
        }

        if(form.tel){
            var phone = form.tel.value;
            if(phone.length === 11) {
                var validPhone = phone.match(/^[0-9+][0-9- ]*[0-9- ]+$/);
                if (!validPhone) {
                    alert("Телефон введен неверно, пожалуйста исправьте ошибку");
                    return false;
                }
            }
            else {
                alert("Неверная длина телефона, пожалуйста исправьте ошибку");
                return false;
            }
        }

        return true;
    }

    var loadOwlCarousel = function () {
        $('.owl-carousel').owlCarousel({
            items: 1,
            nav: true,
            dots: true,
            loop: true,
            navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
        });
    };

    $(function(){
        goToTop();
        popUpHandler();
        orderHandler();
        loadOwlCarousel();
    });
});
