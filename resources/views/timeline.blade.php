@extends('layouts.master')
@section('styles')
    <style>
        /* The actual timeline (the vertical ruler) */
        .main-timeline {
            position: relative;
        }

        /* The actual timeline (the vertical ruler) */
        .main-timeline::after {
            content: "";
            position: absolute;
            width: 6px;
            background-color: #939597;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        /* Container around content */
        .timeline {
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        /* The circles on the timeline */
        .timeline::after {
            content: "";
            position: absolute;
            width: 25px;
            height: 25px;
            right: -13px;
            background-color: #939597;
            border: 5px solid #f5df4d;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        /* Place the container to the left */
        .left {
            padding: 0px 40px 20px 0px;
            left: 0;
        }

        /* Place the container to the right */
        .right {
            padding: 0px 0px 20px 40px;
            left: 50%;
        }

        /* Add arrows to the left container (pointing right) */
        .left::before {
            content: " ";
            position: absolute;
            top: 18px;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }

        /* Add arrows to the right container (pointing left) */
        .right::before {
            content: " ";
            position: absolute;
            top: 18px;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        /* Fix the circle for containers on the right side */
        .right::after {
            left: -12px;
        }

        /* Media queries - Responsive timeline on screens less than 600px wide */
        @media screen and (max-width: 600px) {

            /* Place the timelime to the left */
            .main-timeline::after {
                left: 31px;
            }

            /* Full-width containers */
            .timeline {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            /* Make sure that all arrows are pointing leftwards */
            .timeline::before {
                left: 60px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }

            /* Make sure all circles are at the same spot */
            .left::after,
            .right::after {
                left: 18px;
            }

            .left::before {
                right: auto;
            }

            /* Make all right containers behave like the left ones */
            .right {
                left: 0%;
            }
        }
    </style>
@endsection
@section('content')
    <!-- Hero section -->
    <div class="section-2xl bg-image parallax-bg" data-bg-src="{{ asset('storage/images/home_bg.jpg') }}">
        <div class="bg-dark-03">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        {{-- <p class="font-small uppercase font-family-secondary"><a href="#">Category</a></p> --}}
                        <div class="margin-top-20 margin-bottom-20">
                            <h1 class="font-weight-normal">Түүхэн замнал</h1>
                        </div>
                        {{-- <ul class="list-inline-dash">
                            <li><a href="#">by Admin</a></li>
                            <li><a href="#">{{ $menuItem->updated_at }}</a></li>
                        </ul> --}}
                    </div>
                </div><!-- end row -->
                <!-- Share buttons -->
                {{-- <div class="bottom padding-30">
                    <ul class="list-inline-sm">
                        <li><a class="button-circle button-circle-sm button-circle-outline-white" href="#"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a class="button-circle button-circle-sm button-circle-outline-white" href="#"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a class="button-circle button-circle-sm button-circle-outline-white" href="#"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="button-circle button-circle-sm button-circle-outline-white" href="#"><i
                                    class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div> --}}
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Hero section -->

    <!-- Blog Post content -->
    {{-- <div class="section">
        <div class="container">

        </div><!-- end container -->
    </div> --}}
    <!-- end Blog Post content -->

    <section style="background-color: #F0F2F5;">
        <div class="container py-5">
            <div class="main-timeline">
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2001</h3>
                            <p class="mb-0">Финпак ХХК нь цаас, цаасан бүтээгдэхүүний худалдаа, үйлдвэрлэлийн чиглэлээр үүсгэн байгуулагдав.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2004</h3>
                            <p class="mb-0">Финпак компани Финланд улсын 100%-ийн хөрөнгө оруулалттай болов.
                                ОХУ-ын “Solikamksbumprom” Сонингийн цаас үйлдвэрлэгч компаний “Албан ёсны дистрибьютер” болов.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2005</h3>
                            <p class="mb-0">Сурагчийн дэвтэр үйлдвэрлэлийн “Хос Хараацай” ХХК үүсгэн байгуулав.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2006</h3>
                            <p class="mb-0">Цаасан уут, тор, хайрцагны  үйлдвэрлэл эхлүүлэв.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2008</h3>
                            <p class="mb-0">Торгон Хэвлэлийн машин суурилуулан хайрцагны үйлдвэрлэлээ өргөжүүлэв.
                                Цаасан уут үйлдвэрлэгч машин суурилуулан уутны үйлдвэрлэлээ өргөжүүлэв.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2009</h3>
                            <p class="mb-0">
                                “ҮРГЭЛЖ”Ахуйн хэрэглээний цаасан алчуур, сальфетка үйлдвэрлэж зах зээлд гаргав.                                 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2010</h3>
                            <p class="mb-0">
                                Цаасан уут үйлдвэрлэгч машин суурилуулан бүтээмжээ дээшлүүлэн үйлдвэрлэлээ өргөжүүлэв.
Финланд улсын “KIILTO” Цавуу үйлдвэрлэгч компаний цавууг үйлдвэрлэлд ашиглаж эхлэв. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2011</h3>
                            <p class="mb-0">
                                Хүнс, Хөдөө аж ахуй, Хөнгөн үйлдвэрийн яамнаас зохион байгуулсан “Монголд үйлдвэрлэв үзэсгэлэн яармагт оролцож эм эмнэлэгийн аюулгүйн хайрцаг бүтээгдэхүүнээр “ХЭВЛЭЛИЙН САЛБАРЫН ШИЛДЭГ БҮТЭЭГДЭХҮҮН” цомоор шагнуулав.
Үйлдвэрийн байраа өргөжүүлж Баянгол дүүргийн 20-р хороонд шинэ  байранд нүүж ирэв.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2012</h3>
                            <p class="mb-0">Цаасан хайрцаг, уут торны автомат машинууд суурилуулан гар ажиллагааг хөнгөвчилж цагт гаргах  бүтээгдэхүүний үйлдвэрлэх хугацааг 10-50 дахин нэмэгдүүлэв.
                                Экологийн Бүтээгдэхүүн Хөгжил Сангаас зохион байгуулсан “ECO BRAND AWARDS-2012” экологийн ээлтэй бүтээгдэхүүн номинацид өрсөлдөж алтан медал, өргөмжлөл гардан авав.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2013</h3>
                            <p class="mb-0">
                                Монголын Үндэсний Худалдаа Аж Үйлдвэрийн Танхимын GREENPRENEUR-2013 шагнал авч, 
Монгол Улсын 2013 оны “Байгальд ээлтэй ногоон технологи нэвтрүүлэгч”-ээр шалгарлаа.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2014</h3>
                            <p class="mb-0">
                                Монгол Улсын Хөдөлмөрийн Яам Үйлдвэр Хөдөө Аж Ахуйн Яамнаас зохион байгуулсан
“Монголд үйлвэрлэв 2014” үзэсгэлэнгээс өргөмжлөл хүртэв.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2015</h3>
                            <p class="mb-0">
                                Термал цаасны шугам шинээр байгуулж ашиглалтанд оруулав.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2016</h3>
                            <p class="mb-0">
                                Цаасан аяга тавагны шугам шинээр байгуулж, ашиглалтанд оруулав.
Монголын Үндэсний Худалдаа Аж Үйлдвэрийн Танхимын GREENPRENEUR-2016 шагнал авч, 
Монгол Улсын 2016 оны “Байгальд ээлтэй ногоон технологи нэвтрүүлэгч” компаниар дахин шалгарлаа.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2017</h3>
                            <p class="mb-0">
                                Термал цаасны шугамаа өргөтгөв.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2018</h3>
                            <p class="mb-0">
                                “Албан ёсны дистрибьютер”-н гэрээгээ дахин сунгав.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
