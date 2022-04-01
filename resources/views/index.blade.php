@extends('layouts.master')

@section('title', 'HELIX7 เรานำข้าวสาลีคุณภาพเยี่ยมจากแคว้นแชมเปญของฝรั่งเศสที่มีการกลั่นกรองคอลัมน์อย่างน้อยถึง 7 ครั้ง ซึ่งจะถูกส่งไปยังประเทศไอซ์แลนด์ ผ่านการกรองคาร์บอนและทำการผสมกับน้ำไอซ์แลนดิก ที่มีปริมาณแร่ธาตุต่ำมาก และระดับอัลคาไลน์สูงรับประกันรสชาติที่ยอดเยี่ยม')

@section('content')
    <div class="home-container">
        <section class="banner">
            <div class="banner-item max-w-1080 position-relative">
                <div class="small-logo position-absolute">
                    <img src="{{ url('assets/images/logo-100.png') }}" alt="">
                </div>
                <img src="{{ url('assets/images/banner.jpg') }}" alt="">
            </div>
        </section>

        <section class="sect-1">
            <div class="container max-w-1080 position-relative">
                <div class="small-logo position-absolute">
                    <img src="{{ url('assets/images/logo-100.png') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-md-6 position-relative">
                        <div class="position-absolute">
                            <h2 class="ff-bold">POUR SOME CULTURE INTO YOUR CLASS</h2>
                        </div>
                        <img src="{{ url('assets/images/helix-1.jpg') }}" alt="">
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="position-absolute top-50 translate-middle-y">
                            <div class="logo-text">
                                <img src="{{ url('assets/images/logo-2.png') }}" alt="" class="hide-767">
                                <img src="{{ url('assets/images/logo-2-250.png') }}" alt="" class="show-767">
                            </div>
                            <div class="box-desc mt-3">
                                <p>เรานำข้าวสาลีคุณภาพเยี่ยมจากแคว้นแชมเปญของฝรั่งเศส ที่มีการกลั่นกรองคอลัมน์อย่างน้อยถึง 7 ครั้ง ซึ่งจะถูกส่งไปยังประเทศไอซ์แลนด์ ผ่านการกรองคาร์บอนและทำการผสมกับน้ำไอซ์แลนดิก ที่มีปริมาณแร่ธาตุต่ำมาก และระดับอัลคาไลน์สูง <span class="c-red d-block">รับประกันรสชาติที่ยอดเยี่ยม</span></p>

                                <p class="l-border mt-4">WE SOURCE THE HIGHEST QUALITY WHEAT FROM THE CHAMPAGNE REGION OF FRANCE. THERE IT IS COLUMN DISTILLED MINIMUM 7 TIMES. This premium spirit is then shipped to Iceland where its carbon filter and blended with Icelandic water. ICELANDIC WATER HAS A VERY LOW MINERAL CONTENT AND A HIGH ALKALINE LEVEL WHICH ENSURES A CLEAN CRISP TASTE TO THE END PRODUCT.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sect-2">
            <div class="container max-w-1080 position-relative">
                <div class="small-logo position-absolute">
                    <img src="{{ url('assets/images/logo-100.png') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('assets/images/helix-2.jpg') }}" alt="">
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="position-absolute top-50 translate-middle-y">
                            <div class="logo-text">
                                <img src="{{ url('assets/images/logo-2.png') }}" alt="" class="hide-767">
                                <img src="{{ url('assets/images/logo-2-250.png') }}" alt="" class="show-767">
                            </div>
                            <div class="box-desc mt-3">
                                <p>HELIX มีค่าที่สมดุลและเหมาะสมอยู่ที่ pH 7.4 ต้องบอกว่าสิ่งนี้ไม่เคยเกิดขึ้นมาก่อน การผสมผสานของวอดก้าฝรั่งเศสและน้ำไอซ์แลนดิก ทั้งสองอย่างนี้ทำให้เกิด DNA ความยอดเยี่ยมของวอดก้าพรีเมี่ยมตัวนี้ <span class="c-red">และนี่คือแรงบันดาลใจของชื่อ HELIX</span> ซึ่งเป็นชื่อเรียกของการผสมผสานกันของสองสิ่งจนเกิดเป็น DNA ใหม่</p>

                                <p class="l-border mt-4">With this perfect blend of high-quality spirit from France and high quality water from Iceland HELIX hits the optimal balanced pH of 7.4 This never before made, blend of French spirits and Icelandic water, together creates the DNA of this ultra premium vodka. This is the inspiration of the name HELIX, which is the name of the two shapes in a DNA thread.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sect-3">
            <div class="max-w-1080 position-relative">

                <div class="box-desc">
                    <p class="no-bg">ตามตำนานนอร์ดิก ต้นไม้แห่งชีวิต <span class="c-green">Askur Yggdrasil</span> ได้แผ่ขยายไปทั่วทุกมุมโลก และเราก็สร้างจินของเราให้เป็นแบบนั้นเช่นกัน ด้วย Spirit จากแคว้นแชมเปญของฝรั่งเศส และจินกลั่นที่ทำด้วย Balkan Junipers, Polish Coriander,French Angelica, Spanish Citrus, Mediterranean Liquorice และ Chinese Cassia ผสมผสานกับน้ำแร่บริสุทธิ์ของไอซ์แลนดิกเกิดเป็น London dry gin ที่มีเอกลักษณ์เฉพาะตัว ชื่อว่า <span class="c-green">Askur Yggdras</span></p>

                    <p class="bg-green">According To Nordic Mythology The Tree Of Life, Askur Yggdrasil, Stretches To All Corners Of The World And So Do We In Creating Our Gin. With Spirit From The Champagne Region Of France And A Gin Distillate Made With Balkan Junipers, Polish Coriander, French Angelica, Spanish Citrus, Mediterranean Liquorice And Chinese Cassia Combined With Pure Icelandic Spring Water We Have Created This Truly Unique And Crispy London Dry Gin</p>
                </div>
            </div>
        </section>

        <section class="sect-4">
            <div class="container max-w-1080 position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="box-desc bg-white c-black">
                            <div class="title"><h2 class="fs-3">กระบวนการ</h2></div>
                            <p><span class="c-green ff-bold">BASE SPIRITS :</span> Spirit พื้นฐานได้ใช้ข้าวสาลี คุณภาพสูงสุดจากแคว้นแชมเปญของ ประเทศฝรั่งเศส โดยที่มีการกลั่นกรองคอลัมน์ อย่างน้อยถึง 7 ครั้ง</p>
                            <p><span class="c-green ff-bold">THE WATER :</span> ผสมกับน้ำไอซ์แลนดิกบริสุทธิ์ ซึ่งมีแร่ธาตุต่ำมากและมีค่า PH สูงทำให้ลักษณะของการกลั่นของเราออกมาดี จนแทบไร้ที่ติ</p>
                            <p><span class="c-green ff-bold">GIN DISTILLATE :</span> จากนั้นเราจะคัดเลือกพฤกษศาสตร์ 6ชนิดจากทั่วโลกที่กลั่นในสหราชอาณาจักร มาสร้างการกลั่นที่มีรสชาติเฉพาะตัว เพื่อมาเป็น <span class="c-green ff-bold">London dry Gin ของเรา</span></p>
                            <p><span class="c-green ff-bold">THE FINISH :</span>  Spirit พื้นฐานของเราจะถูกกรองด้วยคาร์บอนแล้วผสมกับจินกลั่น ซึ่งถูกปรุง แล้วเสร็จสิ้นกระบวนการด้วยการนำมาผสมกับน้ำไอซ์แลนดิกก่อนบรรจุขวด จนได้ <span class="c-green ff-bold">London dry gin</span> ที่มีรสชาติสดชื่นที่สุด</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="box-desc bg-black c-white">
                            <div class="title"><h2 class="fs-4">THE PROCESS</h2></div>
                            <p><span class="c-green ff-bold">BASE SPIRITS :</span> The base spirit is made from the highest quality wheat from the champagne region of France. Where it is column distilled minimum seven times.</p>
                            <p><span class="c-green ff-bold">THE WATER :</span> Blended with pure Icelandic water which is very low in minerals and high in PH allows the character of our distillates to flourish.</p>
                            <p><span class="c-green ff-bold">GIN DISTILLATE :</span> We then hand select six botanicals from around the world that are distilled in the UK to create a very clean tasting distillate for our <span class="c-green ff-bold">London dry Gin.</span></p>
                            <p><span class="c-green ff-bold">THE FINISH :</span>  Our base spirit is carbon filtered and then blended with Gin distillate which is rectified together in our Icelandic facility and then finished off by blending it with Icelandic water before we bottle it to create this clean crisp tasting <span class="c-green ff-bold">London dry gin.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sect-5">
            <div class="container max-w-1080">
                <div class="text-center">
                    <h1 class="ff-bold fs-2">VGR ได้แต่งตั้ง Rejuvis เป็นผู้จัดจำหน่ายผลิตภัณฑ์ทั้งหมดแต่เพียงผู้เดียว</h1>
                    <p class="c-green fs-5">VGR has appointed Rejuvis as the exclusive distributor of all above.</p>
                    <a href="https://www.rejuvis.co.th/" target="_blank" class="btn-wesite d-inline-block">Visit Rejuvis website</a>
                    <div class="img-item">
                        <img src="{{ url('assets/images/helix-5.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <span class="d-block ff-bold">Rejuvis co., ltd.</span>
                        <span>32, Moo 4, Tambon Donkrabuang, Ampur Banpong, Ratchaburi 70110, Thailand.</span>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="position-absolute">
                            <div class="list-item">
                                <strong class="ff-bold">E-mail : </strong><a href="mailto:info.ho@rejuvis.co.th">info.ho@rejuvis.co.th</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="position-absolute">
                            <div class="list-item">
                                <strong class="ff-bold">Website : </strong><a href="https://www.rejuvis.co.th/" target="_blank">www.rejuvis.co.th</a>
                            </div>
                            <div class="list-item">
                                <strong class="ff-bold">Website : </strong><a href="https://rejuvis.co.th/mctoil" target="_blank">www.rejuvis.co.th/mctoil</a>
                            </div>
                            <div class="list-item">
                                <strong class="ff-bold">Website : </strong><a href="https://www.rejuvis.co.th/helix7" target="_blank">www.rejuvis.co.th/helix7</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="position-absolute">
                            <div class="list-item">
                                <strong class="ff-bold">Tel : </strong><a href="tel:+ 66 632516886">+ 66 632516886</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
