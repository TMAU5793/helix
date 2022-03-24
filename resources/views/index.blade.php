@extends('layouts.master')

@section('title', 'HELIX7 เรานำข้าวสาลีคุณภาพเยี่ยมจากแคว้นแชมเปญของฝรั่งเศสที่มีการกลั่นกรองคอลัมน์อย่างน้อยถึง 7 ครั้ง ซึ่งจะถูกส่งไปยังประเทศไอซ์แลนด์ ผ่านการกรองคาร์บอนและทำการผสมกับน้ำไอซ์แลนดิก ที่มีปริมาณแร่ธาตุต่ำมาก และระดับอัลคาไลน์สูงรับประกันรสชาติที่ยอดเยี่ยม')

@section('content')
    <div class="home-container">
        <section class="banner">
            <div class="banner-item max-w-1080">
                <img src="{{ url('assets/images/banner.jpg') }}" alt="">
            </div>
        </section>

        <section class="sect-1">
            <div class="max-w-1080">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('assets/images/helix-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="sect-2">
            <div class="max-w-1080">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('assets/images/helix-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="sect-3">
            <div class="max-w-1080">
                <img src="{{ url('assets/images/helix-3.jpg') }}" alt="">
            </div>
        </section>

        <section class="sect-4">
            <div class="max-w-1080">
                <img src="{{ url('assets/images/helix-4.jpg') }}" alt="">
            </div>
        </section>

        <section class="sect-5">
            <div class="max-w-1080">
                <div class="text-center">
                    <img src="{{ url('assets/images/helix-5.jpg') }}" alt="" class="img-item">
                </div>
            </div>
        </section>

    </div>
@stop
