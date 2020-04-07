@extends('layouts.app')
@section('title')
    كل العقارات
@endsection

@section('header')
    {!! Html::style('cus/buall.css') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row profile">
            <div class="col-md-9">
                <div class="profile-content">
                    @include('wesite/bu/sharefile' , ['bu' => $buAll])
                    <div class="text-center">
                        @if(!isset($search))
                        {{$buAll->appends(Request::except('page'))->render()}}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <h2 style="margin-right: 10px"> البحث المتقدم </h2>
                    <div class="profile-usermenu" style="padding: 10px">
                        {!! Form::open(['url' => 'search' , 'action' =>'post']) !!}
                        <ul class="nav" style="margin-right: 0px; padding-right: 0px;">
                            <li>
                                {!! Form::text("price" , null , ['class' =>'form-control' , 'placeholder'=>'سعر العقار']) !!}
                            </li>
                            <li>
                                {!! Form::select("rooms" , roomnumber() , null, ['class' =>'form-control' , 'placeholder'=>'عدد الغرف']) !!}
                            </li>
                            <li>
                                {!! Form::select("type" , bu_type() , null, ['class' =>'form-control' , 'placeholder'=>'نوع العقار']) !!}
                            </li>
                            <li>
                                {!! Form::select("rent" , bu_rent() , null, ['class' =>'form-control' , 'placeholder'=>'نوع العملية']) !!}
                            </li>
                            <li>
                                {!! Form::text("square", null, ['class' =>'form-control' , 'placeholder'=>'مساحة العقار']) !!}
                            </li>
                            <li>
                                {!! Form::submit("ابحث", ['class' =>'banner_btn']) !!}
                            </li>
                        </ul>
                        {!! Form::close() !!}
                    </div>
                </div>
                <br>

                <div class="profile-sidebar">
                  <h2 style="margin-right: 10px"> خيارات العقارات </h2>
                    <div class="profile-usermenu">
                        <ul class="nav" style="margin-right: 0px; padding-right: 0px;">
                            <li class="active">
                                <a href="{{url('/ShowAllBullding')}}">
                                    <i class="glyphicon glyphicon-home"></i>
                                    كل العقارات </a>
                            </li>
                            <li>
                                <a href="{{url('/ForRent')}}">
                                    <i class="glyphicon glyphicon-user"></i>
                                    ايجار </a>
                            </li>
                            <li>
                                <a href="{{url('/ForBuy')}}">
                                    <i class="glyphicon glyphicon-user"></i>
                                    تمليك </a>
                            </li>
                            <li>
                                <a href="{{url('/type/0')}}">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    الشقق </a>
                            </li>
                            <li>
                                <a href="{{url('/type/1')}}">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    الفلل </a>
                            </li>
                            <li>
                                <a href="{{url('/type/2')}}">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    الشاليهات </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>

            </div>


        </div>
    </div>



@endsection
