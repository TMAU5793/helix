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
                                <p>เฮลิกเซเว่น วอดก้า หมักด้วยข้าวสาลีคุณภาพเยี่ยมจากแคว้นแชมเปญของฝรั่งเศษ ผ่านขั้นตอนการกลั่นถึง 7 ครั้ง กรองด้วยความพิถีพิถันรวมกับน้ำแร่จากธรรมชาติ ไอซ์แลนด์ดิก เกลเชียล ที่บริสุทธ์และสูงด้วยอัลคาไลน์จากธรรมชาติเพื่อให้ได้รสชาติและคุณภาพที่เป็นที่สุดของ วอดก้า</p>

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
                                <p>ค่า PH 7.4 ใน วอดก้า HELIX 7 ได้มาจากกระบวนการกลั่นตามแบบสไตล์ฝรั่งเศษ ผสมผสานด้วยน้ำแร่บริสุทธ์จากไอซ์แลนด์  เป็นสิ่งที่ยังไม่เคยมีใครทำมาก่อน เป็นการสร้าง DNA ใหม่ให้กับวอดก้าระดับพรีเมี่ยม เป็นที่มาของแรงบันดาลใจในชื่อ Helix 7</p>

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
                    <p class="no-bg">ตามตำนานนอร์ดิก ต้นไม้แห่งชีวิต Askur Yggdrasil ได้แผ่ขยายไปทั่วทุกมุมโลก Askur จิน ถูกสร้างขึ้นแบบนั้นเช่นกัน ด้วย วัตถุดิบหลักจากแคว้นแชมเปญของฝรั่งเศส รวมกับสมุนไพรและเครื่องเทศหลากหลายจากทั่วทุกมุมโลกผสมผสานกับน้ำแร่ที่บริสุทธ์ จากไอซ์แลนด์ เป็น London Dry Gin ที่ถือกำเหนิดแบบเฉพาะตัว  หอม ละมุน มีเอกลักษณ์เฉพาะตัว</p>

                    <p class="bg-green">According to Nordic mythology the tree of life, Askur Yggdrasil, stretches to all corners of the world and so do we in creating our gin. With spirit from the Champagne region of France and a gin distillate made with Balkan Junipers, Polish Coriander, French Angelica, Spanish Citrus, Mediterranean Liquorice and Chinese Cassia combined with pure Icelandic spring water we have created this truly unique and crispy London dry gin</p>
                </div>
            </div>
        </section>

        <section class="sect-4">
            <div class="container max-w-1080 position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="box-desc bg-white c-black">
                            <div class="title"><h2 class="fs-3">กระบวนการ</h2></div>
                            <p><span class="c-green ff-bold">วัตถุดิบหลัก :</span> ข้าวสาลีคุณภาพสูงจากแคว้นแชมเปญของประเทศฝรั่งเศส ผ่านกระบวนการกลั่นถึง 7 ครั้ง</p>
                            <p><span class="c-green ff-bold">ส่วนผสมที่เป็นน้ำ :</span> ผสมกับน้ำแร่ธรรมชาติบริสุทธ์จากไอซ์แลน มีปริมาณแร่ธาตุพอเหมาะและค่า PH สูงทำให้ได้รสชาติที่สุดยอดระดับพรีเมี่ยม</p>
                            <p><span class="c-green ff-bold">สมุนไพร/เครื่องเทศ :</span> การคัดสรรสมุนไพรและเครื่องเทศ 6 ชนิดจากทั่วโลก  กลั่นด้วยสไตล์ London Dry Gin เพื่อรสชาติที่หอมละมุน นุ่มนวล</p>
                            <p><span class="c-green ff-bold">THE FINISH :</span>  ทุกขั้นตอนและกระบวนการ กลั่น กรอง ด้วยวัตถุดิบชั้นเลิศ ผสมผสานด้วยน้ำแร่จากไอซ์แลนด์ สร้างรสชาติที่สุดแห่งความหอมละมุนในสไตล์ London Dry Gin ทุกขวดบรรจงผลิตมาเพื่อให้ได้ดื่มอย่างมีความสุข ในระดับพรีเมี่ยม</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="box-desc bg-black c-white">
                            <div class="title"><h2 class="fs-4">THE PROCESS</h2></div>
                            <p><span class="c-green ff-bold">BASE SPIRITS :</span> The base spirit is made from the highest quality wheat from the champagne region of France. Where it is column distilled minimum seven times.</p>
                            <p><span class="c-green ff-bold">THE WATER :</span> Blended with pure Icelandic water which is very low in minerals and high in PH allows the character of our distillates to flourish.</p>
                            <p><span class="c-green ff-bold">GIN DISTILLATE :</span> We then hand select six botanicals from around the world that are distilled in the UK to create a very clean tasting distillate for our London dry Gin.</p>
                            <p><span class="c-green ff-bold">THE FINISH :</span> Our base spirit is carbon filtered and then blended with Gin distillate which is rectified together in our Icelandic facility and then finished off by blending it with Icelandic water before we bottle it to create this clean crisp tasting London dry gin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sect-5">
            <div class="container max-w-1080">
                <div class="text-center">
                    <h1 class="ff-bold fs-2">บริษัทวิเกอ จำกัด ได้แต่งตั้ง Rejuvis Co.,Ltd. เป็นผู้จัดจำหน่ายผลิตภัณฑ์ทั้งหมดแต่เพียงผู้เดียว</h1>
                    <p class="c-green fs-5">VIGOR has appointed Rejuvis as the exclusive distributor of all products.</p>
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
                                <strong class="ff-bold">Tel : </strong><a href="tel:+ 66 32299288">+ 66 32299288</a>
                            </div>
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
