@extends('layouts.master')

@section('title', 'HELIX7 เรานำข้าวสาลีคุณภาพเยี่ยมจากแคว้นแชมเปญของฝรั่งเศสที่มีการกลั่นกรองคอลัมน์อย่างน้อยถึง 7 ครั้ง ซึ่งจะถูกส่งไปยังประเทศไอซ์แลนด์ ผ่านการกรองคาร์บอนและทำการผสมกับน้ำไอซ์แลนดิก ที่มีปริมาณแร่ธาตุต่ำมาก และระดับอัลคาไลน์สูงรับประกันรสชาติที่ยอดเยี่ยม')

@section('content')
    <div class="home-container">
        <section class="banner vh-100">
            <div class="banner-item">
                <img src="{{ url('assets/images/banner.jpg') }}" alt="">
            </div>
        </section>

        <section class="sect-1 container-fluid vh-100">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ url('assets/images/helix-1.jpg') }}" alt="">
                </div>
            </div>
        </section>
    </div>
@stop
