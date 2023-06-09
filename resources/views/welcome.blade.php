@extends('layouts.front.main')

@section('style')
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/fancybox.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
@section('content')
    <div class="preloader" style="display: none">
        <div class="preloader__logo">
            {{-- <lottie-player src="https://lottie.host/929a22ea-335a-4fad-81a0-3ac974fd8f5b/PDgtpJNkV0.json" background="transparent" speed="1" style="" loop autoplay></lottie-player> --}}
        </div>
        <div class="preloader__percent">0</div>
        <!-- /.preloader__percent -->
    </div>
    <div class="wrapper">
        <section class="section__main">
            <div class="main">
                <div class="main__video">
                    <div class="main__video-container">
                        <video id="my-video" playsinline="" autoplay="" muted="" loop=""
                            webkit-playsinline="" preload="auto" poster="/img/bg/1.png">
                            <source src="/img/video.mp4" type="video/webm">
                            <source src="/img/video.mp4" type="video/mp4">
                        </video>
                    </div>
                    <!-- /.main__video-container -->
                </div>
                <!-- /.main__video -->
                <div class="main__container">
                    <div class="main__content">
                        <h1 class="main__title general__txt-anim">
                            {{__('asd.Коммерческие помещения в Ташкенте')}}
                        </h1>
                        <div class="main__svg">
                            <svg viewBox="0 0 56 12" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="G" spreadMethod="reflect">
                                        <stop offset="0%" stop-color="#3D0F1A" />
                                        <stop offset="50%" stop-color="#FFA500" />
                                        <stop offset="100%" stop-color="#D0AA48" />

                                        <animateTransform attributeName="gradientTransform" type="translate"
                                            values="-0.5;1.5;-0.5" dur="10s" repeatDur="indefinite" />
                                    </linearGradient>
                                </defs>

                                <text x="50%" y="9" text-anchor="middle" font-family="SFProDisplay-B"
                                    font-size="10" fill="url(#G)" class="svg__text">Open House</text>
                            </svg>
                        </div>
                        <!-- /.main__svg -->
                    </div>
                    <!-- /.main__content -->
                    <!-- /.main__title -->
                    <p class="main__txt ">{{__('asd.Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.')}}</p>
                    <!-- /.main__txt -->
                    <a href="" class="main__btn popup__btn" data-aos="fade-up" data-aos-duration="500">{{__('asd.Узнать больше')}}</a>
                    <!-- /.main__btn -->
                </div>
                <!-- /.main__container -->
            </div>
            <!-- /.main -->
        </section>
        <!-- /.section__main -->
        <section class="section__category">
            <div class="category__top" data-aos="fade-up" data-aos-easing="250">
                <h2 class="category__top-title anima-blocks">
                    {{__('asd.Подберем лучшие предложения для вашего бизнеса')}}
                </h2>
                <svg viewBox="0 0 40 12" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="G" spreadMethod="reflect">
                            <stop offset="0%" stop-color="#3D0F1A" />
                            <stop offset="50%" stop-color="#FFA500" />
                            <stop offset="100%" stop-color="#D0AA48" />

                            <animateTransform attributeName="gradientTransform" type="translate" values="-0.5;1.5;-0.5"
                                dur="10s" repeatDur="indefinite" />
                        </linearGradient>
                    </defs>

                    <text x="50%" y="9" text-anchor="middle" font-family="SFProDisplay-B" font-size="10"
                        fill="url(#G)" class="svg__text">{{__('asd.бизнеса')}}</text>
                </svg>
                <!-- /.category__title -->
            </div>
            <!-- /.category__top -->
            <div class="category__container">
                @foreach ($builds as $build)
                    <div class="category__item">
                        <div class="content">
                            <h2 class="category__title anima-blocks general__txt-anim">{{$build['name_'.$lang]}}</h2>
                            <!-- /.category__title -->
                            <a href="" class="category__btn popup__btn" data-aos="fade-up">{{__('asd.Узнать больше')}}</a>
                            <!-- /.category__btn -->
                        </div>
                        <!-- /.content -->
                        <img src="{{$build->photo}}" alt="" data-aos="fade-up" data-aos-delay="150"
                            data-aos-duration="1000">
                    </div>
                @endforeach
                <!-- /.category__item -->
                <!-- /.category__item -->
            </div>
            <!-- /.category__container -->
        </section>
        <!-- /.section__category -->
        <section class="section__commerce" id="commerce">
            <div class="commerce__anima"></div>
            <!-- /.commerce__anima -->
            <div class="commerce">
                <h2 class="general__title commerce__title" data-aos="fade-up">
                    <svg viewBox="0 0 145 12" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="G" spreadMethod="reflect">
                                <stop offset="0%" stop-color="#3D0F1A" />
                                <stop offset="50%" stop-color="#FFA500" />
                                <stop offset="100%" stop-color="#D0AA48" />

                                <animateTransform attributeName="gradientTransform" type="translate"
                                    values="-0.5;1.5;-0.5" dur="10s" repeatDur="indefinite" />
                            </linearGradient>
                        </defs>

                        <text x="50%" y="9" text-anchor="middle" font-family="SFProDisplay-B"
                            font-size="10" fill="url(#G)">{{__('asd.Коммерческие предложения')}}</text>
                    </svg>, {{__('asd.которых нет в открытом доступе')}}
                </h2>
                <!-- /.general__title commerce__title -->
                <div class="commerce__container" data-aos="fade-left" data-aos-duration="500">
                    <div class="swiper commerce__slider ">
                        <div class="swiper-wrapper">
                            @foreach ($plans as $plan)
                            <div class="swiper-slide">
                                <div class="commerce__item">
                                    <div class="commerce__content">
                                        <h3 class="commerce__name">{{$plan['name_'.$lang]}}
                                        </h3>
                                        <!-- /.prices__name -->
                                        <p class="commerce__description">
                                            {!!$plan['discription_'.$lang]!!}
                                        </p>
                                        <!-- /.prices__description -->
                                        <p class="commerce__square">{{$plan->size}}</p>
                                        <!-- /.prices__square -->
                                        <p class="commerce__price">{{$plan->price}}</p>
                                        <!-- /.prices__price -->
                                        <p class="commerce__more">
                                            <span>{{$plan['type_'.$lang]}}</span>
                                            <span>{{$plan->size}}</span>
                                            <span>{{$plan->floor}}</span>
                                        </p>
                                        <!-- /.commerce__more -->
                                        <a href="" class="commerce__btn popup__btn">{{__('asd.Подробнее')}}</a>
                                        <!-- /.prices__btn -->
                                    </div>
                                    <!-- /.prices__content -->
                                    <div class="commerce__pic">
                                        <img src="/img/bg/p-1.jpg" alt="">
                                        <!-- /.prices__pic -->
                                    </div>
                                    <!-- /.commerce__banner -->
                                </div>
                                <!-- /.prices__item -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="commerce__buttons">
                        <button type="button" class="commerce__prev">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.0361 30.021C23.2361 30.021 30.0361 23.221 30.0361 15.021C30.0361 6.821 23.2361 0.0209961 15.0361 0.0209961C6.83613 0.0209961 0.0361328 6.821 0.0361328 15.021C0.0361328 23.221 6.83613 30.021 15.0361 30.021ZM15.0361 28.021C7.73613 28.021 1.93613 22.221 1.93613 15.021C1.93613 7.821 7.73613 1.92099 14.9361 1.92099C22.1361 1.92099 28.0361 7.721 28.0361 15.021C28.0361 22.221 22.2361 28.021 15.0361 28.021ZM17.8361 22.321C18.1361 22.021 18.1361 21.421 17.8361 21.121L11.4361 15.021L17.8361 8.92099C18.2361 8.62099 18.1361 8.02099 17.8361 7.72099C17.5361 7.42099 16.9361 7.42099 16.6361 7.72099L10.1361 13.921C9.43614 14.521 9.43614 15.521 10.1361 16.121L16.6361 22.321C16.9361 22.621 17.5361 22.721 17.8361 22.321Z"
                                    fill="var(--main-color-black)" />
                            </svg>
                        </button>
                        <button type="button" class="commerce__next">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.0361 30.021C23.2361 30.021 30.0361 23.221 30.0361 15.021C30.0361 6.821 23.2361 0.0209961 15.0361 0.0209961C6.83613 0.0209961 0.0361328 6.821 0.0361328 15.021C0.0361328 23.221 6.83613 30.021 15.0361 30.021ZM15.0361 28.021C7.73613 28.021 1.93613 22.221 1.93613 15.021C1.93613 7.821 7.73613 1.92099 14.9361 1.92099C22.1361 1.92099 28.0361 7.721 28.0361 15.021C28.0361 22.221 22.2361 28.021 15.0361 28.021ZM11.7361 22.321C12.0361 22.621 12.6361 22.621 13.0361 22.321L19.5361 16.121C20.2361 15.521 20.2361 14.521 19.5361 13.921L13.0361 7.72099C12.6361 7.32099 12.1361 7.32099 11.8361 7.72099C11.4361 8.02099 11.4361 8.62099 11.8361 8.92099L18.2361 15.021L11.8361 21.121C11.3361 21.421 11.3361 22.021 11.7361 22.321Z"
                                    fill="var(--main-color-black)" />
                            </svg>
                        </button>
                        <!-- /.partner__prev -->
                    </div>
                    <!-- /.partner__buttons -->
                </div>
                <!-- /.commerce__container -->
            </div>
            <!-- /.commerce -->
        </section>
        <!-- /.section__commerce -->
        <section class="section__partner" id="partner">
            <div class="partner">
                <h2 class="partner__title general__title" data-aos="fade-up">
                    <svg viewBox="0 0 80 12" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="G" spreadMethod="reflect">
                                <stop offset="0%" stop-color="#3D0F1A" />
                                <stop offset="50%" stop-color="#FFA500" />
                                <stop offset="100%" stop-color="#D0AA48" />

                                <animateTransform attributeName="gradientTransform" type="translate"
                                    values="-0.5;1.5;-0.5" dur="10s" repeatDur="indefinite" />
                            </linearGradient>
                        </defs>

                        <text x="50%" y="9" text-anchor="middle" font-family="SFProDisplay-B"
                            font-size="10" fill="url(#G)">{{__('asd.Наши партнеры')}}</text>
                    </svg>, {{__('asd.которые нам доверяют')}}
                </h2>
                <!-- /.partner__title general__title -->
                <p class="partner__subtitle" data-aos="fade-up">{{__('asd.Oтзывы')}}</p>
                <!-- /.partner__subtitle -->
                <div class="partner__container" data-aos="fade-up">
                    <div class="swiper partner__slider ">
                        <div class="swiper-wrapper">
                            @foreach ($partners as $partner)
                            <div class="swiper-slide">
                                <div class="partner__item">
                                    <div class="partner__logo">
                                        <img src="{{$partner->photo}}" alt="photo">
                                    </div>
                                    <!-- /.partner__logo -->
                                    <div class="partner__content">
                                        <img src="{{$partner->people_photo}}" alt="photo">
                                        <h3 class="partner__name">{{$partner['name_'.$lang]}}</h3>
                                        <!-- /.partner__name -->
                                        <p class="partner__subname">{{$partner['position_'.$lang]}}</p>
                                        <!-- /.partner__subname -->
                                        <p class="partner__description">{!!$partner['discription_'.$lang]!!}</p>
                                        <!-- /.partner__description -->
                                    </div>
                                    <!-- /.partner__content -->
                                </div>
                                <!-- /.yard__slider-photo -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="partner__buttons">
                        <button type="button" class="partner__prev">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.0361 30.021C23.2361 30.021 30.0361 23.221 30.0361 15.021C30.0361 6.821 23.2361 0.0209961 15.0361 0.0209961C6.83613 0.0209961 0.0361328 6.821 0.0361328 15.021C0.0361328 23.221 6.83613 30.021 15.0361 30.021ZM15.0361 28.021C7.73613 28.021 1.93613 22.221 1.93613 15.021C1.93613 7.821 7.73613 1.92099 14.9361 1.92099C22.1361 1.92099 28.0361 7.721 28.0361 15.021C28.0361 22.221 22.2361 28.021 15.0361 28.021ZM17.8361 22.321C18.1361 22.021 18.1361 21.421 17.8361 21.121L11.4361 15.021L17.8361 8.92099C18.2361 8.62099 18.1361 8.02099 17.8361 7.72099C17.5361 7.42099 16.9361 7.42099 16.6361 7.72099L10.1361 13.921C9.43614 14.521 9.43614 15.521 10.1361 16.121L16.6361 22.321C16.9361 22.621 17.5361 22.721 17.8361 22.321Z"
                                    fill="var(--main-color-black)" />
                            </svg>
                        </button>
                        <button type="button" class="partner__next">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.0361 30.021C23.2361 30.021 30.0361 23.221 30.0361 15.021C30.0361 6.821 23.2361 0.0209961 15.0361 0.0209961C6.83613 0.0209961 0.0361328 6.821 0.0361328 15.021C0.0361328 23.221 6.83613 30.021 15.0361 30.021ZM15.0361 28.021C7.73613 28.021 1.93613 22.221 1.93613 15.021C1.93613 7.821 7.73613 1.92099 14.9361 1.92099C22.1361 1.92099 28.0361 7.721 28.0361 15.021C28.0361 22.221 22.2361 28.021 15.0361 28.021ZM11.7361 22.321C12.0361 22.621 12.6361 22.621 13.0361 22.321L19.5361 16.121C20.2361 15.521 20.2361 14.521 19.5361 13.921L13.0361 7.72099C12.6361 7.32099 12.1361 7.32099 11.8361 7.72099C11.4361 8.02099 11.4361 8.62099 11.8361 8.92099L18.2361 15.021L11.8361 21.121C11.3361 21.421 11.3361 22.021 11.7361 22.321Z"
                                    fill="var(--main-color-black)" />
                            </svg>
                        </button>
                        <!-- /.partner__prev -->
                    </div>
                    <!-- /.partner__buttons -->
                </div>
                <!-- /.partner__container -->
            </div>
            <!-- /.partner -->
        </section>
        <!-- /.section__partner -->
        <section class="section__prices">
            <div class="prices">
                <h2 class="prices__title" data-aos="fade-up">{{__('asd.Цены, которых вы не получите')}}
                    <svg viewBox="0 0 70 12" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="gr-1" spreadMethod="reflect">
                                <stop offset="0%" stop-color="#3D0F1A" />
                                <stop offset="50%" stop-color="#FFA500" />
                                <stop offset="100%" stop-color="#D0AA48" />

                                <animateTransform attributeName="gradientTransform" type="translate"
                                    values="-0.5;1.5;-0.5" dur="10s" repeatDur="indefinite" />
                            </linearGradient>
                        </defs>

                        <text x="50%" y="9" text-anchor="middle" font-family="SFProDisplay-B"
                            font-size="10" fill="url(#gr-1)">{{__('asd.нигде больше.')}}</text>
                    </svg>
                </h2>
                <!-- /.prices__title -->
                {{-- @dd($popular) --}}
                <div class="prices__container">
                    @foreach ($popular as $pop)
                    <div class="prices__item" data-aos="fade-up">
                        <img src="/img/bg/p-1.jpg" alt="" class="prices__pic">
                        <!-- /.prices__pic -->
                        <div class="prices__content">
                            <h3 class="prices__name">{{$pop->name_uz}}
                            </h3>
                            <!-- /.prices__name -->
                            <p class="prices__description">
                                {{$pop->discription_uz}}
                            </p>
                            <!-- /.prices__description -->
                            <p class="prices__square">{{$pop->size}}</p>
                            <!-- /.prices__square -->
                            <p class="prices__price">{{$pop->price}}</p>
                            <!-- /.prices__price -->
                            <a href="" class="prices__btn popup__btn">{{__('asd.Подробнее')}}</a>
                            <!-- /.prices__btn -->
                        </div>
                        <!-- /.prices__content -->
                    </div>
                    <!-- /.prices__item -->
                    @endforeach
                </div>
                <!-- /.prices__container -->
            </div>
            <!-- /.prices -->
        </section>
        <!-- /.section__prices -->
        <section class="section__feedback" id="feedback">
            <div class="feedback">
                <div class="feedback__content" data-aos="fade-right">
                    <h2 class="feedback__title general__title">{{__('asd.Не знаете чего')}}
                        <svg viewBox="0 0 40 12" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="G" spreadMethod="reflect">
                                    <stop offset="0%" stop-color="#3D0F1A" />
                                    <stop offset="50%" stop-color="#FFA500" />
                                    <stop offset="100%" stop-color="#D0AA48" />

                                    <animateTransform attributeName="gradientTransform" type="translate"
                                        values="-0.5;1.5;-0.5" dur="10s" repeatDur="indefinite" />
                                </linearGradient>
                            </defs>

                            <text x="50%" y="9" text-anchor="middle" font-family="SFProDisplay-B"
                                font-size="10" fill="url(#G)">{{__('asd.хотите?')}}</text>
                        </svg>
                    </h2>
                    <!-- /.feedback__title -->
                    <p class="feedback__description">{{__('asd.Найдем идеальное предложения под ваши запросы')}}</p>
                    <!-- /.feedback__description -->
                    <form action="" class="feedback__form">
                        <label for="form__name">
                            <input type="text" id="form__name" placeholder="Ваше имя">
                        </label>
                        <label for="form__tel">
                            <input type="text" name="phone" type="tel" class="form__tel" required
                                id="form__tel" placeholder="Номер телефона" pattern="^[0-9-+\s()]*$">
                                <input id="token" value="{{ csrf_token() }}" type="hidden" required>
                        </label>
                        <button id="button" onclick="send2()" type="button" >{{__('asd.Отправить заявку')}}</button>
                    </form>
                    <!-- /.feedback__form -->
                </div>
                <!-- /.feedback__content -->
                <img src="/img/bg/feedback.png" class="feedback__bg" alt="" data-aos="fade-left">
            </div>
            <!-- /.feedback -->
        </section>
        <!-- /.section__feedback -->
    </div>
    <!-- /.wrapper -->

    @include('components.front.footer')
@endsection

@section('script')

<script>
    function send1() {

        let token = $("#token").val();
        let name = $('#first_name').val();
        let phone = $('#phone').val();
        $.ajax({
            token: token,
            type: "get",
            url: "/dashboard/feedback",
            data: {
                name: name,
                phone: phone,
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
        });
        setTimeout(() => {
            $('.popup').hide()
            $('.popup__success').show()
            $("#first_name").val('');
            $("#phone").val('');
        }, 1000)
        setTimeout(() => {
            $('.popup').show()
            $('.popup__success').hide()
            $('.feedback').hide()
        }, 3000)
    }
</script>
<script>
    function send2() {

        let token = $("#token").val();
        let name = $('#form__name').val();
        let phone = $('#form__tel').val();
        $.ajax({
            token: token,
            type: "get",
            url: "/dashboard/feedback",
            data: {
                name: name,
                phone: phone,
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
        });
        // setTimeout(() => {
        //     $('.popup').hide()
        //     $('.popup__success').show()
        //     $("#form__name").val('');
        //     $("#form__tel").val('');
        // }, 1000)
        // setTimeout(() => {
        //     $('.popup').show()
        //     $('.popup__success').hide()
        //     $('.feedback').hide()
        // }, 3000)
    }
</script>

    <script src="/js/swiper.min.js"></script>
    <script src="/js/jquery.nicescroll.min.js"></script>
    <script src="/js/three.min.js"></script>
    <script src="/js/vanta.waves.min.js"></script>
    <script src="/js/fancybox.umd.js"></script>
@endsection
