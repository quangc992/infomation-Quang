{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const MY_INFO = {
        content: $('.info__body #content'),
        nav: $('.info__body #nav'),
        sliderMain: $('.slider-container'),
        slider: $('.slider'),
        sliderItem: $$('.slide-box'), //all class
        nextSlider: $('#-slider-next'),
        prevSlider: $('#-slider-prev'),
        ip_ctt_name: $('.ip_cttName'),
        start: function() {
            this.handleSlider();
            this.handleScroll();
            this.handleContact();
        },
        handleSlider: function() {

            let _this = this;
            let size = 100;
            let indexSlide = 0;

            try {
                //event click
                this.nextSlider.onclick = () => {
                    next();
                }
                this.prevSlider.onclick = () => {
                    prev();
                }

                //skip clone
                indexSlide++;
                _this.slider.style.transform = 'translateX(' + (-size * indexSlide) + '%)';


                function next() {
                    if (indexSlide > _this.sliderItem.length - 2) return;
                    indexSlide++;
                    _this.slider.style.transform = 'translateX(' + (-size * indexSlide) + '%)';

                }

                function prev() {
                    if (indexSlide < 1) return;
                    indexSlide--;
                    _this.slider.style.transform = 'translateX(' + (-size * indexSlide) + '%)';
                }


                //add event, if slider is out of control
                _this.slider.addEventListener('transitionend', () => {
                    // slider < slider start -> end (skip clone)
                    if (_this.sliderItem[indexSlide].id === 'lastClone') {
                        indexSlide = _this.sliderItem.length - 2;
                        _this.slider.style.transform = 'translateX(' + (-size * indexSlide) + '%)';
                    }

                    // slider to the end -> start (skip clone)
                    if (_this.sliderItem[indexSlide].id === 'FistClone') {
                        indexSlide = _this.sliderItem.length - indexSlide;
                        _this.slider.style.transform = 'translateX(' + (-size * indexSlide) + '%)';
                    }
                });
            } catch (er) {
                console.log('error handleSlider loadding : ' + er);
            }

            //auto change slider
            setInterval(next, 7000);
        },
        handleScroll: function() {
            window.onscroll = () => {
                // distance top to main part
                let _this = this;
                let contentTop = content.offsetTop;

                if (window.scrollY > contentTop) {
                    nav.classList.add("fixed");
                    // console.log('element');
                } else {
                    nav.classList.remove("fixed");
                }
            }
        },
        handleContact: function() {



        }
    }
    MY_INFO.start();
}

{
    // $(document).ready(function() {
    //     // function focusHandler(evt) {
    //     //     showLog("focus");
    //     // }
    //     var name = $(".ip_cttName")
    //     $(".ip_cttName").focus(function() {
    //         $(".ip_cttName").blur(function() {
    //             if (name == '' || name == null) {
    //                 console.log("a")
    //             } else {
    //                 console.log("aa")
    //             }
    //         });
    //     })

    // })


    // $(function() {
    //     //load_data_ajax('./assets/html/about.html')
    //     $('.nav__item a').click(function() {
    //         $('.nav__item a').each(function() {
    //             $(this).removeClass("active");
    //         });
    //         $(this).addClass("active");
    //         var _url = $(this).data('ajax');
    //         load_data_ajax(_url);
    //     })
    // });

    // function load_data_ajax(_url) {
    //     if (_url != undefined) {
    //         $.ajax({
    //             url: _url,
    //             method: 'get',
    //             type: 'html',
    //             success: function(reponse) {
    //                 $(".main").html(reponse);
    //             }
    //         })
    //     }
    // }





    function Validator(options) {

        //ham thuc hien validate
        function validator(inputElement, rule) {
            if (inputElement) {
                var errorMessage = rule.test(inputElement.value);
                var errorElement = inputElement.parentElement.querySelector(options.errorSelector)

                if (errorMessage) {
                    errorElement.innerText = errorMessage;
                } else {
                    errorElement.innerText = '';
                }
            }
        }

        //lay element cua form
        var formElement = document.querySelector(options.form);

        if (formElement) {
            options.rules.forEach(function(rule) {
                var inputElement = formElement.querySelector(rule.selector);

                // xu ly khi dung dung blur ra ngoai
                inputElement.onblur = function() {
                    validator(inputElement, rule)
                }

                // xu ly khi nguoi dùng đang nhập dữ liệu
                inputElement.oninput = function() {
                    var errorElement = inputElement.parentElement.querySelector(options.errorSelector)
                    errorElement.innerText = '';
                }
            });
        }
    }

    // khi co loi => tra ra message
    // khi hop le => undefined ( ko co gi ca )
    Validator.isRequired = function(selector) {
        return {
            selector: selector,
            test: function(value) {
                return value.trim() ? undefined : 'Full name has no data, try again !'
            }
        };
    }

    Validator.isEmail = function(selector) {
        return {
            selector: selector,
            test: function(value) {
                var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                return regex.test(value) ? undefined : 'Gmail malformed, try again !'
            }
        };
    }

    Validator.isMinLength = function(selector, min) {
        return {
            selector: selector,
            test: function(value) {
                return value.length > min ? undefined : `Please enter at least ${min} characters`
            }
        };
    }


}

$(document).ready(function() {
    mediumZoom('.category_img img', {
        margin: 30,
        background: '#1d1e24'
    })
})


{
    let content = 'Hiện tại còn nhiều bug chưa fix : front end';
    let content2 = 'backend không được đưa vào, vì hosting là github';
    console.log(
        "%cXin chào !",
        "color:#28a745;font-family:system-ui;font-size:70px;-webkit-text-stroke: 1px black;font-weight:bold"
    );
    console.log(
        "%cĐây là trang web không hoàn chỉnh và nó không phải là chính thức.",
        "color:red;font-family:system-ui;font-size:20px;font-weight:bold"
    );

    console.log(
        "%cDeploy lần cuối : 06/05/2021",
        "color:black;font-family:system-ui;font-size:20px;font-weight:bold"
    );

    console.log(content)
    console.log(content2)
}