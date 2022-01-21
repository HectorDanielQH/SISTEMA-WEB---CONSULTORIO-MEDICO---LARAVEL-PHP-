<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body class="main-layout">
<div class="flex flex-col">
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header-top">
            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="#"><img style="width:30%;" src="https://image.flaticon.com/icons/png/512/1579/1579017.png"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                        @if(Route::has('login'))
                                            @auth
                                                <li><a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a></li>
                                            @else
                                                <li><a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a></li>
                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a></li>
                                            @endif
                                            @endauth
                                        @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="slider_section">
                <div class="banner_main">

                    <div class="container">

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                <div class="text-bg">
                                    <h1>Bienvenido al consultorio médico!!!  <br> <strong class="b_bold">Cruz de la Rúa</strong></h1>
                                    <span>Tu salud segura en nuestras manos, porque nosotros pensamos y nos preocupamos por tí</span>
                                    <a href="#">Contáctanos</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="text-img">
                                    <figure><img src="https://www.freepnglogos.com/uploads/medicine-logo-png-1.png" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        </div>
        </div>
    </header>
    <!-- about  -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                    <div class="about-box">
                        <h3>Necesitas Ayuda?</h3>
                        <span>No te preocupes!!!</span>
                        <p>Nuestro consultorio esta preparado para situaciones dificiles, cuenta con una ambulancia, con especialistas que acudiran al momento de emergencia; atendemos las 24Hrs. 
                        Una buena salud es un deber para ti mismo, para tus contemporáneos, para tus herederos y para el progreso del mundo. En Centro Médico Cruz de la Rúa, ofrecemos un servicio de asistencia médica cercana que efectivice los tiempos de atención de todos los ciudadanos del interior del país.
                        Somos un servicio de cobertura asistencial médica ubicado en el departamento de Potosí, dedicado a la atención y emergencia de todos los habitantes de la región.    
                        Como única Sociedad Médica del departamento y una de las 5 integrantes del sistema FEMI (Federación Médica del Interior) de la región, trabajamos con la responsabilidad y el compromiso profesional de brindar la protección médica necesaria para cada paciente. </p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end abouts -->

    <!-- our how_it -->
    <div id="blog" class="how_it">
        <div class="container-fluid paddimg_ouu">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padding-right1">
                    <div class="two-box">
                        <figure><img src="https://static.vix.com/es/sites/default/files/imj/otramedicina/C/Como-curar-rapido-una-herida-1_0.jpg" alt="#" /></figure>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padding-left1">
                    <div class="two-box_text">

                        <div class="travel">

                            <h3>Nuestros Objetivos</h3>
                            <p>Brindar servicios de salud de óptima calidad, confiables y oportunos, que garanticen una adecuada atención humana; basado en altos niveles tecnológicos científicos con la finalidad de satisfacer las necesidades y expectativas de nuestros afiliados y su grupo familiar en un ambiente agradable, en excelentes condiciones.</p>
                            <a href="#">Leer Más...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end how_it -->
    <!-- We are -->
    <div id="casino" class="We_are">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Nuestros Servicios</h2>
                        <span>Es un Honor atender a nuestra gente de Potosí<br>Ser un equipo de soporte en el Hospital del Niño que ayude a la capacitación y formación de promotores de una cultura de vida; comprometido con la construcción de una sociedad más justa, solidaria, tomando como pilar fundamental el bienestar de nuestros niños y sus familias.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="first-slide" src="https://consumer.healthday.com/media-library/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpbWFnZSI6Imh0dHBzOi8vYXNzZXRzLnJibC5tcy8yNjAxNzU0NC9vcmlnaW4uanBnIiwiZXhwaXJlc19hdCI6MTY4NTk5Njg0NX0.EjnL8_92s_eSUgSol0BD1FstI52qtjG3rP-Xzo9GPZg/image.jpg?width=1245&quality=85&coordinates=0%2C74%2C0%2C75&height=700" alt="First slide">
                                <div class="container">
                                    <div class="carousel-caption relative">
                                        <p>Atencion Gratuita a niños con Cancer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="second-slide" src="https://www.tododisca.com/wp-content/uploads/2020/03/c%C3%A1ncer-infantil-2.jpeg" alt="Second slide">
                                <div class="container">
                                    <div class="carousel-caption relative">
                                        <p>No lo dude es un placer ayudar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="third-slide" src="https://cloudfront-eu-central-1.images.arcpublishing.com/prisa/ZAIDHBAAN2UFLXTEH4WHKIKFA4.jpg" alt="Third slide">
                                <div class="container">
                                    <div class="carousel-caption relative">
                                        <p>Lograremos vencer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i></a>
                        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <!-- end contact -->
    <!-- clients -->
    <div id="testimonial" class="clients top_layer2 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Tu puedes ser parte de esta familia</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients_box">
                        <i><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFRYZGBgYHB8fHBocHBwcHBweHxocHBwaHBweJC4lHh4rHxwaJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMBgYGEAYGEDEdFh0xMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMf/AABEIAOoA1wMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAQIEBQYHAAj/xABAEAABAgQEAwYFAwMCBQQDAAABAhEAAyExBBJBUQUGYSJxgZGh8BMyscHRQuHxB1JiFHIjM4KSsjVzwtIWFyT/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A6BMWQabwHCTisnob1akEmAlVjBZEprnwgGTSaVhii2vhBptGeBFjU6eUB4k3BboL+cTkfK5BtEeQUm9xaJR6QHEQoZyoH9axZqZi0Wk5IIDV0GsReKYU4fEzJR+VKypD6JUXH1MSZM8jV2ttXcwE/Ds5BFgNLe/ZiakOHoG3OvhEXD0BIrqdW/EZ7i3NQQSiW2YPW+XSnW/lAW2KmpQSpRCTuohIOjuzv3CKTEcfQFMkBRIbsksPMMYymO4gpbkvU61MRApVHJI+zh4DXy+LpQaoI2Yln8rQyXxBBnoWzpSFFn8WjMFVfox90hyVEBhc6j94DRYnjGQlQGZSqqckf7a7CK2ZxmYpRU56tp52EVq5hIDk9NYVaNySR7a8BrMJzXKyJE2WApOoDhV6lzQ3i1wvMmGWr51S9iRQau9z6xzpQ62rq96QVKgSWoGqHfYOR6tAdXkTwWCFJXR8wLgj7G1IjrnK7QJq7Pb1pHOcNj1S1BSFZVDUACn+QG7WjV8K4ymanKtkr3Trq9vbQF1yYnNPxKnfLlFH66mLniExbKOx0a3hrFPyCkq+OsgB16AVp6xdcRIyaO+nv1gKGZNJKqufUUNOsJhFnKtRJNPt4R6aihURqfHw1h2FA+GuzEgAeHd3QEQrNFC72998SpeKWFBLhi9iXiPLl1ckAae/zD1y2WC12oGdvv3QFlInqSCCpQrdy2l3NISI8tBJo4Se9yerR6A6KUB6w0gOYKxc09vHmEAIhg8R0SipyaA+cTctIakQDVSAYLIlMLvCZoHKxJFCKaaQGE/qJw5aZyMQA6CkJX0INH0Yv6dYoZZT2SLenp4R1nHYdM6UtChRaSOopHFcViTJSsVUUEpo3zAs9dID3M/FihXwkKYEOS4sasK0f3eMiRWpfo/o8enzFKUoqJKnd3vvCJY0Puv8QDV0o7P5VpfWBppeHTlF61bf0hgTalOnhAFko1v73iQjSlRs9NIiJLA9dz72gyCWBLfWAMUg6V8/CFLH5g/pr1/eGJJf+BDJoLuLE6kQB5iA4Pqbd3X9oUIZLptqfO219IHNUXGvW/u3pDws7/cP4QA5iNgl+o8j5QTDAgvmYi2nurQHNU9R409nvhUTAmlA5r16BvfSA6nyAUnDqOY5gs5g+rAh++JvEZlgQ1X+vvxjm3AeLLkTApCmehDtmJcsR5DxMbbGT8+VVb21FqGA9NWUo2B96wdVJegc329tFfOlkhI1O/dE2dJ7CWJLH+YAcmgcmh7i8MSl1UIoQw2D3v3RGWptSGF6+zBMCcxHfWo6eUBby0hKa3+lR6R6ElrDkBj3kfVo9Ab1jrHgveEWqESdR77oAhP3hqToxjxrYR6AQJzFnteHjDpG/nCJLG7esUnNvGV4f4fw0IUpZU5V+kAVI8xrAXGPxiJEtcxdEIST+AOpNPGPnfjmIUqarNckqYf5VPkfRo22M4jPxRSZpJSDRIGVA2ITqe9zGB4rMBmrIPZBYft5QENQa4YGxfx1hyF3A6ZdxUQInN3l6XL9I03DuSsXOZQllCTXMrs+nt4DOISVGxJLdReFmoIoXo2sdYwXIgkyi6syyCKUZ9Q+1Ix3EOBkhYSASnK2xcqs97QGXy33rb28OlDckbEDXTX28TcDwxUxRl0SsEApVQ6+nWPcW4FiMMf+JLIGiqkGu4pAQgKnQd3vWDIRrtT3vEVKnDX+nfDxMYN5exASpqelW3/MCIqL7Ev09P3jynIBIJ0tf8mBqJoz3PXTSAkrWwHZYCgqDq531JPi0AWUuLDe19g3nCAiws3vxpCgJ1Pug8jAKQrbq7d1Xjc8uKK5TkuUu+pqzgnpWMEsljQ9NrMQ/dGh5Yx+VZQsnKpIAFWBBoz6VgNUtYcVq/Q+kSPiEM9ABsTTYtFaFnOHJIcuGt4RPxBqOqaBj0MBAxqQa6Ftb+MGwCDmIGw0FtojYhy4qG8B6w/hpW5y1PcawFiJvacivg1XtsPxCQBYcqLPXY+fr6x6A6mvXrDQYRUo6QiJRBgHhfSPIPn4Qqkx5KQ0AqE9q2kY3nkhc5CSWCEE0/yV+EmNmgVMc/5wQf8AVKexSjL1AJcedHgKlaAhCiDTISCwdgHeOZKL6GxPfHUMZMCswAZ0s1DcMKHv9Iw/LnAV4qYUIUEBILqLkDpSukBoOQJmDkNOxBzTDRIKXSkAaA3UbmOrcM5iw085ZcxJIFi4PrHOsLyfKQgjELJWwqkjKfBtBEYcLShZVh5lgDlNw1aenlAdioYgHhUkEqUkE28HcD1iBwHHFaATUgBwP37nhOO8WKEFQ2u7ehgK/jWF4chYXOlIUsVF8wbWnheI/wD+wsDlyFC8gDVSFBrakk2jG8cm/EKyogdokly9dPBjFLKw0gsFuXuQfQQG2n8d4TOcLw4HUIAPpWKLFcuYOa6sLiClQD/DX9Uk1gCuBSVjNLUpLb++6KudwpaC4XUMxfe20BVz5SkEpV8woSO+4MBSvfW+kWakknKsdoDzrr/G8VaqKI2ofOvvrAKD0NPQjU7w5J3o/fel+68NE1mFANKadWr/ADHlkktonRzToG90gCEvqaG722+hhETFBQVW7ivnT3YwMBPaBOjjy91jyTd3EB0vDJCi1uyD5tX3tDpxddD8o8XrpaIfL81K5STYhNdLFv2gyyc7pNBSjvQawCLQCupNt9ImcOSHLAioYfv71iMFVOtKEisewSioKAcPb370gLFZBCqG+msLENLlWV36Hp7GusegOq1vCvDFLYQMTDSkAVaXHX1gKSXb3/EEKoEkQBEn28VPMHBE4kJIVkWmgUK0OhrURZFQFrH+YAtZbsqL9bQGF4zyviJaFTEqCwhJ7KXBtcCM3ydjMmGXMYFXxNu0s5QwfT946lzJxEy8HPW7KTKU3VTMPUiOY8O4MqZgJSM/wkLUpecgVUVEAEfpAA3gLPFYlWV52JloV83w0lJKdgXuYy+IxxSqrF6ZhQd5D1ibxHkpcoAomoULlXY6hzm1qfTURWYiQkIEofDzu+cOFF/0kDstozQHR/6Z4lS0TQbJIbWpc38Ilf1FmhGGJo5LDxiz5T4WnDYZCG7ShnWbuoivkGEZznNXxyEJDpFaam30eA5WpZWpgpquS/mPe8SJC8poUgbq9+kWnEuBGVKStj2SQs3yk1QogaM4fcCK+Tw/OFBBQtSqVoU1ulz9tYC8Ri2QMsyRM/xzZFd1yDa1LxTT8bmcK7Kgap6bg9IOvlKcwzlCA2uVNGAc5RU+cVyeEHOEBedbslCO0TuX/SGgCmWc+cBwWtt9Ig4/Dsoq8W72PfaNRM4YZUtQmgA/2C5tp5RQYhGZJJAoG8e7eArkNY0o2+nsPCADq8MYPYEdX9iHoWSbO5udOggPZQSfFn1/EPagr993+0MUnVjvpQVgZDU32pR6wHTeSOX5k7DoWlSMpUoBydCQW3DiLhXKmKD0QQToq3mIZ/TbjUuXgkIUlVFrBIFCSoqBvsR5RrzzJIdsygeqT72gMFN4RiUEkylENoArviPhnFFpYh6EM1vxHS8NxSUssJiH2JY+t9INi+Hy5qSmYkKB8/O8ByzCklZUBQUvf8jwhYv+IclqlrK8OsqTqlRqCdlG48I9Abo17oGUkFnNbGCPCv3wA0S1b+/OPCWa1b8QR4HNm5RSABOl1Dv3tASrT30gkytVHr7EAUCajbugMt/UzFgYPIPnmrQhI1NcxbyHnF3wzgQRhpUgq+RKQWAckVJqKOX0iHzDwmXOMlSh2kTUFBBsczl9ww9I04lwGSn8mIWS+diT+oUHlaJ/DuVcPh6pQCs2UrtKfvPhFxMxKUXNekEQc3arSggB8QmlEskAEtoHf8xjZMs53uSWf3pGp4tPyIJUWYdB4VjF8HlzJs2atKglCbCtC7uIDWHCBSQAgF6KcUUNQ35ih4j/AE+kLIXIPw1XYfIT3O48GiWjiS5ZCFrCjqSyQzGoNXLt5xdYHi6Fdk9k3HV6vAYlH9PFkj4kymoBUpx3GkXGB5XRhh/w8h0OaWnM3RYDg+caxa2dq+URF4oMa1bugMpxPg6W+bMk/wBzZkHYHbp0jE8ZwqUIUNlFy1er6RteP8RT8gUHP21jF8WxIyFJq++jGt4DLApzAM41PnYae94YpdfVjpuYWZMclT919f49IYFEliQX6tAKoh3JLd46t9oYE39uLQVJFdHPv30jzsGuXr9dK7QHQOR2GGJpVSrtfp4NGhw3C5mIBUgoAT130buij5GwUybhsqEsM5dRomoBBG9xHTODcJTIRlBckuonf7CAxc7lnEpBZKV/7TXyIhuA41Pw68igsf4rBY9z/UR0ZBFbQLF4JExOVaAoHceoOh6wFbwjjyJ1CnKtqhwY9Gf4pwGZh1CbKdaLWdSXendWEgNqpO8ODQxq+MK3QXgHiBqTuHhcphFDf6wESfhnbLT1gSZSgGu8S5gNLQ4I2/IgMxzGtUo4dZUyfjhJ8ULAfxbyidN4jlSSSw7/AEhOcMAZmFWkAlSGWj/cghSfoYw2O4v/AME07TOesBoeE4v408gB8oLqcsOneYNxnjS8M4DKSWO5G56iMZy5ipqFAvlSo1L7nbwi54zg1L1zDK7F3OrBqwGS5n5ymzyyVMgHTXd9Hdoj8G5txEhBQjIxLsRfzLRCxHCFrWSkAJfY0gkng6ks4rf5TTx2gLnAYpWJnfExHyj5UCg71E6NpGsmz5IAyHKtIuBTbq/7xk8JJCRfyqw3PiI9iZl1INaNqb93S0Bt+H8wIWkgllC6b1tRhEPinGWdlFh7EYBOLWhQU7HXc2e2sGxkwqGYFhfWtDptASOIcRKlJVsRVw96fURSY/FhZU7te4+kNmrOUlxU0Hjd9BEWYKU7z9zaggAqL1DNVx4x6UQafjy/aEUG6ft3XEOSSmoJJahYa0sdWeAVJAd2ffo0KmbRgxbeBggXTf3fvakKUmhcO5Zvru0B3H+mE8qwCAzZVrHqVV3vG2AeOb/0l4ihOGWhagCmaSMx0UlNvGN+cfLZ86G/3CAkS4eIoZ3MuHQWSorUf0pr62iy4dPWtOdaMgPypupv8uvSAlkPeFhCYWABmreFhqvbw8CAVoQ98ehFiAGsW6wqHEIvp4Q1CtYBsyr69C0cf41g1Zp8tNClRIvVlOkfSOxLS9owHNuG+FiBNbsrSyu8BvplPhAYfBcUASM9EpuetdPd4tsNzYtRCMPJMwpS57gfmv1iDhsChcwy1B0qOpILHRnFXgfD8YrheLKlS1KlqSUkWJD0IJ1BAvuYCzn8QxTCYcIoIWXCmDEu9gTW8Axk/HpGeZhsiCQxIHhR3GkXcrnuTOkJloRMRNSUlkpBQkCYCag2yjbWB8188SpkpUqQmb8QsylJyhOVTlwam1gIDLYniOKByLkZVDtEBLFtzsL+cVq+IEgKyZXsbgkGrd0WuI5snrmTVmWlpqEoyknshJLMoirkk+W0UaMVOWEJFkBSQQkWUa6MT1vAPGJcli47tb/eLIy/+AlTEfNrpEf/AEJQhJVUm8TuIYofCQhu0AzUZ67dYCB8PsOW6U0iun6nemjaRZ4+alKEgaBum3n16CKbMK108rt3wDM21Tt6vB0YghBSQC9a3cBqbwJChR2+n8ftDXcvRvT7QDyp63ez1bp7+0LmBHtxXbx+kMI8ImcPlZ5ktBDhSk5mvlerdwc+EB0jk7ljEJw6SyR8TtsSXYhkuG2bzjSSOTlkduYw2AD+cTcNzJh0DKygwAAyswFAIWZzbK/ShZ8AIAuB4BLlkEJcjVTE+FPpFulTDYd/nGVnc3O4RLD6Zle/vFPj+NTZoYlkmmVNAfz+8BoOPcwAdiUTeqr9WEejPYLhq5ikoRoHUTUClI9AdFePZusKkQuWAQjrHlPpC2hrB4BitIZ3esOUsDWAlVHv418oApFPu7RU8wcNE+SpBZ2dJP8AcLfiJSlK1IHdEKaq/wByYDlUtSkzATdKhdn7mi849w1M9KVKDhTOQ7gj7fiIvMmDEvEk/pmhx0L19WPjE3geJK5apb1S6kmj9QaVv9YDP/8A48vCzXlzELcDslw4Ox3g87BKWy1Mg6al2eIeP4koLIUhOYd4Hi1doiTOOroMtqu9vG+vrAFnS0OUhJWS1VUTe5AFb2eJXDMM6nXlYD9IYCtgBba0VkvElbltb6BzEjGYhkBCXc3AHcQLvaATHnMohDNoa+RipUtS1gAvl9L+sSJk0oSe9mI9TEGUkMoqp5+NRAexs51Dp79vEdJv7+sNUQ4MLL2p7rAKFM5vHkrrcN4+cIWdxv77o8kB/HwgFH36Re8t8SlS1dpClLNARWmw2J+0VGFwa5isstClqvlSHLU9Osavh/LZlHMtEzOG0LC23lAaFLFiXHR9W2/e8PSkB3/f+IiypUxQGRC1G3yltoveH8pzZikmd2EbBsx6GlICpRKWoBWVWR6Eih8R+YsJErIoFRA6NaNrPwCVSVSwGATSlmqD6RgF4nNR+mg8Tp5wHQ+HYFMtACNe0VbvufGPQDlvEFUhBJcgMbPSl49AWITDkpjwhwMA0iBKFb0gpMJABalat5wFam0g85bWr0pAwkmqiHHQwAMhNGLG0DVgBvXf6xO8fxpCqb9/CAxnOfAxMw5Wmq5XbFvlHzDyc+EZLB4sJTnQm4BSWo9jVvfWOsZARUA6NpHLeYMErBTCnIFIUSZe2U1Ugv8AqSfRusAyXy/NxDLUcoIe3aJ3c6QKdySAP+aoqNagKDC9N+7eJi+cOwEoADa1cUERZ/MxWjtqvZqKrv06QFYrhxklTKCmsSGD0Zhu0RpgDOGKjUl6j9rxHx/FcymQ3V7DRwfdogT8TlGVJqfmJqSelbQAsfMBISkBk2bu1hk+Z2cotrAmq7i+3rDFb+/KAUI9R94VKfy1vKFQLNtT35xJk4Ja1JQlJUskBKUhySaju79gYB3D8B8RbBmAdR0DU01O0ablHljC4qYuTOnLRNHaQlOUJUlqsVAuobfvGp4byyiRJCCc01TFahYkBgkasK+p1jH8dSqRPROlnKpC6HqmtvA+cB13gPLMjBpyykmt1qLqVTVVvAMBFylANWHvaI/CscnESUTksQtIVSl7jwLiJiDWAXJ09IVqQr9IQlhAIO6je9I5jxSV8OfMl1YE7WNQa9HjpQPUPdvvGI5vwLz0rSPnT31B+tYC25MnFloL0LpBYlu+EiDyUk/FWL0v9KCFgNmiHjxhPGFCYBFQxSvKHmFZ4CIsWoTBEjvgikB4QJgALUW9/WHBbjf9++DEBqxCxPEZCHK5iA3UfQQBCGOnWjxD4rwuXiEFE0BSbjQpNWUk3BiHjubZKB2QqYTYABIt/l9hBeXOMnFFfYCAhgzkmoJqfxAcQ45wdcgkjtoLssODQt2gKAxSZzarbR17FcKC04iQSXlzFM/9i+2nS1W8I5txDhpQss9KWrelICr9H9/QwpGrH3vtD8rMGb71huUGw9v/ABAMzHzh8jDqWWSHrf7xPwWCc9dSf06vG95e5PmTkgkGVKN1EMtdwcgNhW5gMlw7gS5q0y5SDMmUevZR/ko2Hf03jp3K/K6MIFKIC56gyltZ/wBKXJyj6tGi4bwuXh0ZJSMqbkuSpR3Uo1J8YkZH074CuWijtVn/ABHPubMCVJBYVXfwL/T20dQnp7BFn1jE82SxkD3LnfoTAU39PubkYUnDzn+EtRKVXyKJq4d8qr2p4064hYUApJBSQ4INCGoQRHzpKwrkku1ageNLWeNfyhzVMwbonBS5D96kH/F/09IDrohFKgeAx0ucgLlLStJ1SbUsRcHoYPABSmocDz+kUHOUk5ELAcpV9iftGglAP3Dxin5uW0tFLr91gKzkdXbWSA7VLaknXaPRJ5HlkfE2cAdLv9h4R6A08NeH90IS1TYawEfFYpKHKiwAck/xGO4lzusryYWWFKuVL+VI3LQzmfiS5qvhykuSWA+pVtSvpCYDhglICU6l1KsSWqpT1/iAlyuP4nKy8mYXKUEDWgcmI0zjE9ZqtSaE0AHlBjIJS7htCx076C2sLLQ4o4b1b0gK2YmYu6lEHcqIPXVqkwKXg3FU0JDgAHT35xZzEihLgJLjUHYnrDlrIA1cHV22PrpAU81AHyjPVjSx0A6d0afkrCFEpaiB21m2oH8mKpCCl3Oj9aDeukbPh0vLLQGbsj1rAZ3juF+HiETbImp+GvooOZan69pP/UIpeI8ASolVC9np57fvG+xuERNQpC6pUG6gvQjYgsX6Rn8YsykJ+IsK0zghiQ960LQHNeMcCCVd1wHa3ukQ+HcvrnLCJKCtWpshOxWqwHrHSsHy+cQrPMCky9B8qlP9B1/mNThcKiUkIloCEiwSAP5PWAzHLPJiMMAtbLmdapT0SNe8+kapu8U/Gjw4q91hwEANjA8r3/EGLQNZMAGYl9K/vGN5tll8gbRxUF76b7RtFzwhJWsgBIc+EYbjZ+IsqyliXelCwow6GAzOGwrEnKNNXcvtEtOAz6M5pS2/1ESZKEsSCHAoaU8vdYsJUtwGc3NRAZ3BSJsiaFyVlBLjsmh1ZnY+IaNtw3nRaGRiUA6fEQa0p2ka9W8oqsXhAFIP+WvsNtHsVw9IDgOSCXYMa9fEtAb/AIbxCXNTmlrSvdixGzg1BqLxmOcsRmmIQ4ZAcg2c93T6xlZmEWFAoOVQ2BGxuIirxU5LrWM9KvVe17/a0B0rlKRlkP8A3KJ9W+0egfKvHpE6WmXLUUzEJAKFBlUuQNR3PHoC+Javv0ir41OZJTUChV3bCLMtGV4/jAlCluauBRw1n7v2gKrgMsTJ0+YQWQyE2F+0fE9nzi6noIy3AFwB6OTSK7khB/02Ylyta1Xe9vQRdTJIUDUO/r70gK9RBvUmjB2hk5YUGqNjoDr94KtIT8o/UNdHt3n7Q2Vhy+Y7vWtb+FYBstAOZ6eBv6gUaBKJD5u8d3kNXiSiQTUmx/ikR50sgZS2U3pU9B0gIGJWSl0FhYaF3Y36xsuJ8VlYWUZk5YQkC2qi1kjUnaMRxdZSuRKQA8yagMNgQVd9HJ7oz39QZ6p+JOYnIjsi7AvU7OaVgA81f1Hn4lJlSUmQg3IJzkaVFurbxluG8cnyA0tZCSQogk336F/rAsfg1y8udOULTmS9yHZ+6kRZb1c99H1tAds/p/zoMT//ADzqTkh0qJosa3qFDYkuA+8bZetPGkfNOAxK5UxMyWSFoUCkilR9jUEd8fRHAOLpxOHROTQqHaSD8ix8yTbX0aAmkGkeQSOsPGv7QsANe/p9Y8A52gjxCxs5RPw5fzEVULIDs/VWw6QETHzCsLr2EU6KXbyT9e6MtMlOt3ZtNe7xjS8alpRLRKTYl7nQXJvcvFBlGZnIb0Jq3XaAaUaEAA06u35iRJwwBI7LEUZX50tDEAnS+7m/184nhD7jShI13EBX45D5CMoZaeurP1EEmo79gR/NrwTGpSpIAaiksW/y1MGmpBSQ7Mf00JYfSAjfCSwOUjrXQbE1gKsOaABwOgPTyixlYZRZ/V37hE1GGrVJbck+RgM1hOHgTgyTTNUDodqx6NRJwgzghKddO+PQEzG4lkAAspVOnX0jD894vJKypU1GYG/rS/rGsnsuYKlkWArXX7xiuc5aVzZUoO61oSNvmcgkdzwGk4JJyYaUl27Ap1Ln7wedO0L2L2A7vGJBQzJuAAKAEsKQFcvqzm20AJSwdb6kPYbQi1iwrv5+zD1yxRgHqx779N6whlpIIDVD084Aa120O/u8CSyi4qUnbuNPSJE2SCHI8HJ8en8QCctMqWpf9o+VJLfXrARuF4cTsYqaXyyEskbLX8x8Egf9xhnDOXyufMmTWUkLOUG1+y9TYD1i65awIlYfOQSub21mjlRDgeCQkeEWuFkBKQDU3PeYDn/MvAkTMSCskoRLohJIKiSbq/QgAX6xmeNYr4fZkIkykv8AoRnV4rU7nxjc8yICsVlTNKEoQkrSGVVSlMopVQANpHOebMEtC3VMC0qsQMgzGrML0IbpAV+FWta3JK1EgJH9x0tQEPHZeUcIMNKRLKSFLKlrb5Qs7dLDwjEf004FnWMSsEoQDkBsTa1qB/SOrZAB+wgDqVDUqMeCz7+8eCqWqYAGJxOQhKRmWqw+qj0H7QWRLAoNak6k7w5MsAvqRU6n3WGTZgSkq2BJ0PhAZ/jc4lZKDVAZnoRctsbQOUCa3fu8X7vtApsosS5cnr3/AFg+GQE9mtq9+pAgGZGqEv3Fm3ibJkkh1eRr9RD8gobjSvWDpUGax9m8BA4ihkEsokFOlaEfjSJcnKwUwc9PO8QON4xEtCgteTNQV+YkUCU3J6RMwswlIYaa9YCTLAdyPH2e+JASL/TZtYFhk1r5GrQY0oIAaJfaBA9sY9BMKe1/O0egKlA7Si5o1/z+Iy2NlFfEpCCosgLWQ9mTSveR4iNZh/mPvQRmsH/6of8A2lf+SIDSLAqT08tA9DAyjMb26nd9YlzrDx+0QUX/AO/6wD0odzp+K/U7Q1Y0IHW/r0g0r5R1SH60EOTZXh9YCNM7TAJAFLv4+kUXMiSsJlJNZpCA2hJAJHTK5e8a1aBmNBb/AOQinxSB/q5FB85/8TAajDyQlKUiyQA3cGEEyiCxG4r/AMmb/tP0gOL818WVL4irEJJXLmJAT/auWAEqA/6gS/V4vThpc+UQo5krRmQvpU02I/8AtGwx3CcOpEoKkSlACgMtJApoCIl4DhkgSkgSZYAK2AQlh4NAVnIxH+nSkBm2tQARpFShC8OwctCQES0JDWSkDUbCJTQENdN/ffCoSb/vE1SBsIGRAAI8fSIuKog/nasTJwoO+G46WlrC23QwGdnKOZwTS9PL33w6UjX+f3pE8IGaw1hmvvcQEYkByXYXofOKDEcxTJyjLwKMxBKVTVhkIPQGqlRqNfE/aKVVFraj1Lal7wELhHLwSszJqjNnarWScpuyBZIjSSQQGJttXWAYP5fKJmDv4feAJKIFzEhJG/3HnEeVc+9YeNPesASUsZ7/AJtCQzD/ADp8foY9Af/Z" alt="#"/></i>
                        <h3>Un Mensaje de Lucha</h3>
                        <span><i class="fa fa-quote-left"></i> Jim Valvano <i class="fa fa-quote-right"></i></span>
                            <p>El cáncer se puede llevar
                            <br>todas mis habilidades físicas. Pero no puede tocar
                            <br>mi mente, mi corazon y mi alma</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- end clients -->

    <!--  footer -->
    <footr>
        <div class="footer top_layer ">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="location_section">
                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="icon/1.png" alt="#" /></a>consulta@gmail.com </li>
                                <li>
                                    <a href="#"><img src="icon/2.png" alt="#" /></a>(+591 12345678) </li>
                                <li>
                                    <a href="#"><img src="icon/3.png" alt="#" /></a>Calle Bolivar Nro. 369</li>
                            </ul>
                        </div>
                    </div>
                   

            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2021 Todos los derechos reservados. <a href="#">Hecho por Alberto B. Flores M. & Hector D. Quispe H.</a></p>
                </div>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('js/plugin.js')}}"></script>
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
