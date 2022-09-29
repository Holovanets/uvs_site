<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-queries.css" media="(max-width: 1080px)">
    <meta charset="UTF-8">
    <meta name="msapplication-TileColor" content="#f6921e">
    <meta name="theme-color" content="#f6921e">
    <meta name="description" content="FTL, PTL, LTL. Попробуй современную транспортную кампанию. Мы представляем самый оптимальный прайс, и обслуживаем наилучшим образом.">
    <title>UVS - Логистика, которая удивляет</title>
    <link rel="shortcut icon" href="img/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="libraries/bundle.css">
    <link rel="stylesheet" href="libraries/bootstrap.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="css/swiper.css">
    
</head>

<body onload="test()">
    <script src="libraries/jquery-3.5.1.min.js"></script>
    <div class="navBar">
        <a href="#header" class="navBarButtons">Главная</a>
        <a href="#secondPage" class="navBarButtons">Достижения и преимущества</a>
        <a href="#thirdPage" class="navBarButtons">Часто задаваемые вопросы</a>
        <a href="#fourPage" class="navBarButtons">Цены</a>
        <a href="#fivePage" class="navBarButtons">Футер</a>
        <a href="tel:+380503013893" class="navBarButtons ">+38(050)301-38-93</a>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.collisionB').click(function() {
                $(".navBar").toggleClass('active')
            });
        });

    </script>
    <div id="topBar">
        <img data-src="img/logo.webp" alt="" id="logoBar">
    </div>
    <ul class="burger">
        <div class="collisionB">
            <li></li>
            <li></li>
            <li></li>
        </div>
    </ul>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.collisionB').click(function() {
                $(".burger").toggleClass('active')
            });
        });

    </script>
    <div id="header">
        <a class="orderButton" onclick="f_open_log()"><span></span>Связаться</a>
        <script>
            $(document).ready(function(e) {
                $('.orderButton').on('mouseenter', function(e) {
                    x = e.pageX - $(this).offset().left;
                    y = e.pageY - $(this).offset().top;
                    $(this).find('span').css({
                        top: y,
                        left: x
                    })
                })
                $('.orderButton').on('mouseout', function(e) {
                    x = e.pageX - $(this).offset().left;
                    y = e.pageY - $(this).offset().top;
                    $(this).find('span').css({
                        top: y,
                        left: x
                    })
                })
            })

        </script>
        <img data-src="img/1x/slogan.webp" class="slogan" alt="">
        <h2 id='first'>Работаем с заботой о клиентах</h2>
        <p>UVS - Logistics это очень современная транспортная кампания, обслуживающая клиентов по всей Украине. Мы привыкли подстраиваться под них, всегда находить лучшее решение любых сложностей и просто соблюдать их требованиям.</p>
        <h2>С нами работают</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img data-src="img/company.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company1.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company2.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company3.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company4.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company5.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company6.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company7.webp" class="companies" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <script>
            var swiper = new Swiper('.swiper-container', {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

        </script>
        <style>
            .swiper-container {
                width: 100%;
                height: 100%;
                height: 25vh;
                max-width: 80%;
            }

            .companies {
                max-height: 19vh;
                max-width: 70%;
            }

            .swiper-slide {
                text-align: center;
                font-size: 18px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-align-items: center;
                align-items: center;
            }

        </style>
    </div>
    <div id="secondPage">
        <h2 class='firstH2'>Наши преимущества</h2>
        <div id="secondBlocks">
            <div class="avantages ">
                <img data-src="img/icons/weight.webp" class="secImages">
                <p>Можем обеспечить перевозку, как на 5-и тонном рефрежераторе, так и на 20-и тонном тенте </p>
            </div>
            <div class="avantages">
                <img data-src="img/icons/credit.webp" class="secImages">
                <p>Оплату наших услуг вы можете совершить безналично используя любой украинский банк </p>
            </div>
            <div class="avantages">
                <img data-src="img/icons/speed.webp" class="secImages">
                <p>Доставим что-угодно в самый краткий срок </p>
            </div>
            <div class="avantages">
                <img data-src="img/icons/truck.webp" class="secImages">
                <p>Имеем в наличии рефрежераторы, тенты, изотермы. 5Т, 10Т, 20Т </p>
            </div>
        </div>
        <section class="stat">
            <br>
            <div class="row text-center">
                <div class="stat-items">
                    <img data-src="img/icons/arrow.webp" alt="">
                    <h2 class='secondH2'><span class="counter text-center">12874</span><span>+</span></h2>
                    <p>KM</p>
                </div>
                <div class="stat-items">
                    <img data-src="img/icons/human.webp" alt="">
                    <h2 class='secondH2'><span class="counter text-center">124</span><span>+</span></h2>
                    <p>КЛИЕНТОВ</p>
                </div>
                <div class="stat-items">
                    <img data-src="img/icons/car.webp" alt="">
                    <h2 class='secondH2'><span class="counter text-center">25</span><span>+</span></h2>
                    <p>МАШИН</p>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 5,
                time: 1000
            });
        });

    </script>
    <div id="thirdPage">
        <div class="FAQ">
            <h1 class="h1FAQ">Часто спрашивают</h1>
            <ul class="ulFAQ">
                <li>
                    <input type="checkbox" checked>
                    <i class="iFAQ"></i>
                    <h2 class="h2FAQ">Ценообразование</h2>
                    <p class="pFAQ"> В каждом случае стоимость определяется индивидуально, поскольку у всех разные грузы, расстояния и требования. Существуют и другие факторы, которые влияют на формирование цены. Если вы захотите, то конкретно по вашему случаю, мы подробно расскажем о стоимости именно вашего заказа.</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i class="iFAQ"></i>
                    <h2 class="h2FAQ">Когда заказ считается выполненным</h2>
                    <p class="pFAQ">Задание считается завершенным после окончания разгрузочных работ в точке приезда, а также полного расчета клиентом за предоставленные услуги.</p>
                </li>
            </ul>
        </div>
    </div>
    <div id="fourPage">
        <div class="pricing-wrapper clearfix">
            <div class="pricing-table">
                <h3 class="pricing-title">рефрежератор</h3>
                <div class="price">25<sup>UAH / km</sup></div>
                <ul class="table-list">
                    <li>5 Тонн <span>минимальный вес</span></li>
                    <li>20 Тонн <span>Максимальный вес (+3грн)</span></li>
                    <li>Украина <span>Обслуживаем всю страну</span></li>
                    <li>Объем <span class="unlimited">любой</span></li>
                    <li>Вид <span class="unlimited">любой</span></li>
                    <li>НДС <span>отстутствует</span></li>
                </ul>
                <div class="table-buy">
                    <p>₴25<sup>/ km</sup></p>
                    <a class="pricing-action" onclick="f_open_log()">Оставить заявку</a>
                </div>
            </div>
            <div class="pricing-table recommended">
                <h3 class="pricing-title">Тент</h3>
                <div class="price">21<sup>UAH / km</sup></div>
                <ul class="table-list">
                    <li>5 Тонн <span>минимальный вес</span></li>
                    <li>20 Тонн <span>Максимальный вес (+3грн)</span></li>
                    <li>Украина <span>Обслуживаем всю страну</span></li>
                    <li>Объем <span class="unlimited">любой</span></li>
                    <li>Вид <span class="unlimited">любой</span></li>
                    <li>НДС <span>отстутствует</span></li>
                </ul>
                <div class="table-buy">
                    <p>₴21<sup>/ km</sup></p>
                    <a class="pricing-action" onclick="f_open_log()">Оставить заявку</a>
                </div>
            </div>
            <div class="pricing-table">
                <h3 class="pricing-title">Изотерм</h3>
                <div class="price">27<sup>UAH / km</sup></div>
                <ul class="table-list">
                    <li>5 Тонн <span>минимальный вес</span></li>
                    <li>20 Тонн <span>Максимальный вес (+3грн)</span></li>
                    <li>Украина <span>Обслуживаем всю страну</span></li>
                    <li>Объем <span class="unlimited">любой</span></li>
                    <li>Вид <span class="unlimited">любой</span></li>
                    <li>НДС <span>отстутствует</span></li>
                </ul>
                <div class="table-buy">
                    <p>₴27<sup>/ km</sup></p>
                    <a class="pricing-action" onclick="f_open_log()">Оставить заявку</a>
                </div>
            </div>
        </div>
        <div id="fivePage">
            <img data-src="img/logo.webp" alt="" height="200px">
            <div>
                <p>+38(050)301-38-93</p>
                <p>yurs_@ukr.net</p>
                <p>Рабочее время : 08:00 - 20:00</p>
            </div>
        </div>
    </div>
    <div class="navDesctop">
        <hr>
        <div class="polyBorder">
            <div class="poly">
                <p class="theme">Главная</p>
                <p class="theme">Подход</p>
                <p class="theme">Цены</p>
                <p class="theme">Успехи</p>
                <p class="theme">Вопросы</p>
            </div>
        </div>
        <div id="themeName">
            <span class="themeName" onclick="scrMain()">ГЛАВНАЯ</span><br>
            <span class="themeName right" onclick="scrSecond()">ПОДХОД</span><br>
            <span class="themeName" onclick="scrThird()">ЦЕНЫ</span><br>
            <span class="themeName right" onclick="scrFour()">ПРЕИМУЩЕСТВА</span><br>
            <span class="themeName" onclick="scrFive()">ВОПРОСЫ</span><br>
            <div class="ring"></div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.burger').click(function() {
                    $(".navDesctop").toggleClass('active')
                });
            });

        </script>
        <div class="navSocial">
            <span class="navSocials">Instagram</span>
            <span class="navSocials">Facebook</span>
        </div>
        <div class="navSocialRight">
            <span class="navSocials">Telegram</span>
            <span class="navSocials">Twitter</span>
        </div>
    </div>
    <div id="firstScreen">
        <div class="prl">
            <div class="shapes shapes3"></div>
            <div class="shapes shapes2"></div>
            <div class="shapes shapes1"></div>
            <div class="layer"></div>
        </div>
        <div id="video-bg">
            <video width="100%" autoplay muted loop>
                <source src="vid/firvid.webm" type="video/webm">
                <source src="vid/firvid1.mp4" type="video/mp4">
            </video>
        </div>
        <div id="topborder"></div>
        <div id="leftborder"></div>
        <div id="rightborder"></div>
        <div id="topBarDesctop">
            <span id="numberDesctop"><a href="tel:+380503013893">+38(050)301-38-93</a></span>
            <a href="#" id="logoDesctop"></a>
            <script type="text/javascript">
                function test() {
                    x = window.pageYOffset;
                    g = Math.max($(document).height(), $(window).height())
                    z = x / g * 100;
                    document.getElementsByClassName("poly")[0].style.top = z + "%";
                    setTimeout("test()", 25);
                    var th = document.getElementsByClassName("theme");
                    var thn = document.getElementsByClassName("themeName");
                    var rg = document.getElementsByClassName("ring")[0].style;
                    var top = ["-1vh", "12vh", "25vh", "37vh", "50vh"];
                    var left = ["-17vh", "29vh", "-11vh", "46vh", "-21vh"];
                    var ag = [
                        [0, 12.99],
                        [13, 29.99],
                        [30, 47.99],
                        [48, 65.99],
                        [66, 2222]
                    ];
                    var what = 0;
                    for (i = 0; i < ag.length; i++) {
                        if (z >= ag[i][0] && z <= ag[i][1]) {
                            what = i;
                            rg.left = left[what];
                            rg.top = top[what];
                            break;
                        }
                    }
                    for (i = 0; i < th.length; i++) {
                        if (i != what) {
                            var el = th[i];
                            var om = thn[i];
                            el.style.display = "none";
                            om.style.color = "#fff";
                        }
                    }
                    var el = th[what];
                    var om = thn[what];
                    el.style.display = "block";
                    om.style.color = "#C0262D";
                };
                var t = document.documentElement.clientHeight;
                var scr = [t * 0.92, t * 2, t * 3, t * 4];

                function scrMain() {
                    $('html, body').animate({
                        scrollTop: 0
                    }, '100');
                };

                function scrSecond() {
                    $('html, body').animate({
                        scrollTop: scr[0]
                    }, '100');
                };

                function scrThird() {
                    $('html, body').animate({
                        scrollTop: scr[1]
                    }, '100');
                };

                function scrFour() {
                    $('html, body').animate({
                        scrollTop: scr[2]
                    }, '100');
                };

                function scrFive() {
                    $('html, body').animate({
                        scrollTop: scr[3]
                    }, '100');
                };

            </script>
            <a id="orderDesctop" onclick="f_open_log()"><span>связаться</span></a>
        </div>
        <div class="arrow" onclick="scrSecond()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div id="secondScreen">
        <h1>UVS - это логистика, заботящаяся о твоих потребностях и своих клиентах.</h1>
        <video width="50%" autoplay muted loop>
            <source src="vid/secvid.webm" type="video/webm">
            <source src="vid/secvid.mp4" type="video/mp4">
        </video>
        <div class="contentSecond">
            <div class="box"> Мы обеспечим Вас, как и любого другого клиента индивидуальным подходом к проблеме. В наших интересах удовлетворить Ваши потребности наилучшим образом. Если у Вас есть вопросы и сложности, мы поспособствуем их решению, вам лишь стоит оставить свои контакты и с вами свяжется наш менеджер. А далее, мы возьмемся за решение всех ваших проблем. </div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img data-src="img/company.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company1.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company2.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company3.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company4.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company5.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company6.webp" class="companies" alt=""></div>
                <div class="swiper-slide"><img data-src="img/company7.webp" class="companies" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <script>
            var swiper = new Swiper('#secondScreen .swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                freeMode: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '#secondScreen .swiper-pagination',
                    clickable: true,
                },
            });

        </script>
        <style>
            #secondScreen .swiper-container {
                position: absolute;
                transform: translate(-50%, 0);
                top: 10vh;
                left: 50%;
                width: 100%;
                height: 25vh;
                cursor: grab;
            }

            #secondScreen .swiper-container:active {
                cursor: grabbing;
            }

            #secondScreen .swiper-container .companies {
                max-height: 14vh;
                max-width: 70%;
            }

            #secondScreen.swiper-slide {
                text-align: center;
                font-size: 36px;
                background: #fff;
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-align-items: center;
                align-items: center;
            }

        </style>
        <div class="animateSecond">
            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <rect x="20" y="50" width="4" height="10" fill="#fff">
                    <animateTransform attributeType="xml" attributeName="transform" type="translate" values="0 0; 0 20; 0 0" begin="0" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="30" y="50" width="4" height="10" fill="#fff">
                    <animateTransform attributeType="xml" attributeName="transform" type="translate" values="0 0; 0 20; 0 0" begin="0.2s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="40" y="50" width="4" height="10" fill="#fff">
                    <animateTransform attributeType="xml" attributeName="transform" type="translate" values="0 0; 0 20; 0 0" begin="0.4s" dur="0.6s" repeatCount="indefinite" />
                </rect>
            </svg>
        </div>
        <div class="animateSecond1">
            <svg version="1.1" id="L3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <circle fill="none" stroke="#fff" stroke-width="4" cx="50" cy="50" r="44" />
                <circle fill="#000000" stroke="#e74c3c" stroke-width="3" cx="8" cy="54" r="6">
                    <animateTransform attributeName="transform" dur="2s" type="rotate" from="0 50 48" to="360 50 52" repeatCount="indefinite" />
                </circle>
            </svg>
        </div>
    </div>
    <div id="thirdScreen">
        <div class="pricing-wrapper clearfix">
            <div class="pricing-table">
                <h3 class="pricing-title">рефрежератор</h3>
                <div class="price">25<sup>UAH / km</sup></div>
                <ul class="table-list">
                    <li>5 Тонн <span>минимальный вес</span></li>
                    <li>20 Тонн <span>Максимальный вес (+3грн)</span></li>
                    <li>Украина <span>Обслуживаем всю страну</span></li>
                    <li>Объем <span class="unlimited">любой</span></li>
                    <li>Вид <span class="unlimited">любой</span></li>
                    <li>НДС <span>отстутствует</span></li>
                </ul>
                <div class="table-buy">
                    <p>25<sup>/ km</sup></p>
                    <a class="pricing-action" onclick="f_open_log()">Оставить заявку</a>
                </div>
            </div>
            <div class="pricing-table recommended">
                <h3 class="pricing-title">Тент</h3>
                <div class="price">21<sup>UAH / km</sup></div>
                <ul class="table-list">
                    <li>5 Тонн <span>минимальный вес</span></li>
                    <li>20 Тонн <span>Максимальный вес (+3грн)</span></li>
                    <li>Украина <span>Обслуживаем всю страну</span></li>
                    <li>Объем <span class="unlimited">любой</span></li>
                    <li>Вид <span class="unlimited">любой</span></li>
                    <li>НДС <span>отстутствует</span></li>
                </ul>
                <div class="table-buy">
                    <p>21<sup>/ km</sup></p>
                    <a class="pricing-action" onclick="f_open_log()">Оставить заявку</a>
                </div>
            </div>
            <div class="pricing-table">
                <h3 class="pricing-title">Изотерм</h3>
                <div class="price">27<sup>UAH / km</sup></div>
                <ul class="table-list">
                    <li>5 Тонн <span>минимальный вес</span></li>
                    <li>20 Тонн <span>Максимальный вес (+3грн)</span></li>
                    <li>Украина <span>Обслуживаем всю страну</span></li>
                    <li>Объем <span class="unlimited">любой</span></li>
                    <li>Вид <span class="unlimited">любой</span></li>
                    <li>НДС <span>отстутствует</span></li>
                </ul>
                <div class="table-buy">
                    <p>27<sup>/ km</sup></p>
                    <a class="pricing-action" onclick="f_open_log()">Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>
    <div id="fourScreen">
        <div class="stat">
            <div class="stat-items">
                <img data-src="img/icons/arrow.webp" alt="">
                <h2 class='secondH2'><span class="counter text-center">12874</span><span>+</span></h2>
                <p>KM</p>
            </div>
            <div class="stat-items">
                <img data-src="img/icons/human.webp" alt="">
                <h2 class='secondH2'><span class="counter text-center">124</span><span>+</span></h2>
                <p>КЛИЕНТОВ</p>
            </div>
            <div class="stat-items">
                <img data-src="img/icons/car.webp" alt="">
                <h2 class='secondH2'><span class="counter text-center">25</span><span>+</span></h2>
                <p>МАШИН</p>
            </div>
        </div>
        <div id="secondBlocks">
            <div class="avantages ">
                <img data-src="img/icons/weight.webp" class="secImages">
                <p>Можем обеспечить перевозку, как на 5-и тонном рефрежераторе, так и на 20-и тонном тенте </p>
            </div>
            <div class="avantages">
                <img data-src="img/icons/credit.webp" class="secImages">
                <p>Оплату наших услуг вы можете совершить безналично используя любой украинский банк </p>
            </div>
            <div class="avantages">
                <img data-src="img/icons/speed.webp" class="secImages">
                <p>Доставим что-угодно в самый краткий срок </p>
            </div>
            <div class="avantages">
                <img data-src="img/icons/truck.webp" class="secImages">
                <p>Имеем в наличии рефрежераторы, тенты, изотермы. 5Т, 10Т, 20Т </p>
            </div>
        </div>
    </div>
    <div id="fiveScreen">
        <div class="transition"></div>
        <div class="FAQ">
            <h1 class="h1FAQ">Часто спрашивают</h1>
            <ul class="ulFAQ">
                <li>
                    <input type="checkbox" checked>
                    <i class="iFAQ"></i>
                    <h2 class="h2FAQ">Ценообразование</h2>
                    <p class="pFAQ"> В каждом случае стоимость определяется индивидуально, поскольку у всех разные грузы, расстояния и требования. Существуют и другие факторы, которые влияют на формирование цены. Если вы захотите, то конкретно по вашему случаю, мы подробно расскажем о стоимости именно вашего заказа.</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i class="iFAQ"></i>
                    <h2 class="h2FAQ">Когда заказ считается выполненным</h2>
                    <p class="pFAQ">Задание считается завершенным после окончания разгрузочных работ в точке приезда, а также полного расчета клиентом за предоставленные услуги.</p>
                </li>
            </ul>
        </div>
        <div class="transition1"></div>
        <footer>
            <div id="hr"></div>
            <div class="footnav">
                <h1>О нас</h1>
                <p>UVS - Logistics это очень современная транспортная кампания, обслуживающая клиентов по всей Украине. Мы привыкли подстраиваться под них, всегда находить лучшее решение любых сложностей и просто соблюдать их требованиям.</p>
            </div>
            <div class="footnav">
                <h2>Навигация</h2>
                <span class="footspan" onclick="scrMain()">ГЛАВНАЯ</span><br>
                <span class="footspan" onclick="scrSecond()">ПОДХОД</span><br>
                <span class="footspan" onclick="scrThird()">ЦЕНЫ</span><br>
                <span class="footspan" onclick="scrFour()">ПРЕИМУЩЕСТВА</span><br>
                <span class="footspan" onclick="scrFive()">ВОПРОСЫ</span><br>
            </div>
            <div class="footnav">
                <h2>Клиенты</h2>
                <span class="footspan"><a href="https://auchan.ua/" target="_blank">Auchan</a></span><br>
                <span class="footspan"><a href="https://www.nl.ua/" target="_blank">Новая линия</a></span><br>
                <span class="footspan"><a href="https://epicentrk.ua/" target="_blank">Эпицентр</a></span><br>
            </div>
        </footer>
        <div id="developer">Задизайнено и написано <span class="glitch" data-text="GOLOVANETS.DEV"><a href="https://www.instagram.com/golovanets_/" target="_blank">GOLOVANETS.DEV</a></span></div>
    </div>
    <div id="lgpanel">
        <div class="login">
            <img data-src="img/cross.webp" alt="" class="login-cross" width="64px" onclick="f_close_log()">
            <h2>ОСТАВЬТЕ ЗАЯВКУ НА РАСЧЕТ СТОИМОСТИ</h2>
            <form class="contact-form" id="contact-form_1" method="POST" enctype="multipart/form-data">
                <p class="contact-form__description"></p>
                <div class="contact-form__input-wrapper">
                    <input name="name" type="text" class="contact-form__input contact-form__input_name">
                    <span>Введите ваше имя *</span>
                    <div class="contact-form__error contact-form__error_name"></div>
                </div>
                <div class="contact-form__input-wrapper">
                    <input name="tel" type="tel" class="contact-form__input contact-form__input_tel">
                    <span>Введите ваш телефон</span>
                    <div class="contact-form__error contact-form__error_tel"></div>
                </div>
                <div class="contact-form__input-wrapper">
                    <input name="email" type="text" class="contact-form__input contact-form__input_email">
                    <span>Введите ваш email *</span>
                    <div class="contact-form__error contact-form__error_email"></div>
                </div>
                <div class="contact-form__input-wrapper">
                    <textarea name="text" class="contact-form__input contact-form__text"></textarea>
                    <span>Введите ваше сообщение</span>
                    <div class="contact-form__error contact-form__error_text"></div>
                </div>
                <div class="contact-form__input-wrapper">
                    <input class="contact-form__input contact-form__file" type="file" name="files[]">
                    <div class="contact-form__error contact-form__error_file"></div>
                </div>
                <div class="contact-form__input-wrapper">
                    <input type="checkbox" name="agreement" class="contact-form__input contact-form__checkbox" id="agreement">
                    <label for="agreement" class="contact-form__checkbox-label">Я уверен в правильности вписанных данных</label>
                    <div class="contact-form__error contact-form__error_agreement"></div>
                </div>
                <button class="contact-form__button" type="submit"> Получить прайс </button>
            </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="/mail/js/mail.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.contact-form__input_tel').click(function() {
                    $(".contact-form__input_tel").addClass('active');
                    return
                });
                $('.contact-form__input_name').click(function() {
                    $(".contact-form__input_name").addClass('active');
                    return
                });
                $('.contact-form__input_email').click(function() {
                    $(".contact-form__input_email").addClass('active');
                    return
                });
                $('.contact-form__text').click(function() {
                    $(".contact-form__text").addClass('active');
                    return
                });
            });

        </script>
        <script>
            $(function() {
                $('.contact-form__input_tel').mask('+38(000)000-00-00');
            });

        </script>
    </div>
        <link rel="stylesheet" href="css/login.css">
    <script type="text/javascript">
        function f_open_log() {
            document.getElementById("lgpanel").style.display = "block";
        };

        function f_close_log() {
            document.getElementById("lgpanel").style.display = "none";
        };

    </script>
    <script>
        $('body').on('DOMMouseScroll mousewheel', function(e) {
            if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
                $('#topBarDesctop').css('background', 'none');
                $('#orderDesctop').css('top', '9vh');
                $('#orderDesctop').css('left', '2vh');
                $('#topBarDesctop').css('top', '-8vh');
                $('#topborder').css('top', '0');
            } else {
                $('#topBarDesctop').css('background', '#080808');
                $('#orderDesctop').css('top', '1vh');
                $('#orderDesctop').css('left', '5vh');
                $('#topBarDesctop').css('top', '0');
                $('#topborder').css('top', '5vh');
            }
        });

    </script>
        <script type="text/javascript">
        [].slice.apply(document.querySelectorAll('img[data-src]')).forEach(function(img) {
            img.setAttribute('src', img.getAttribute('data-src'));
            img.onload = function() {
                img.removeAttribute('data-src');
            };
        });

    </script>
    <script type="text/javascript" src="scripts/paralax.js"></script>
    <script src="libraries/jquery.waypoints.min.js"></script>
    <script src="scripts/jquery.counterup.min.js"></script>
</body>

</html>
