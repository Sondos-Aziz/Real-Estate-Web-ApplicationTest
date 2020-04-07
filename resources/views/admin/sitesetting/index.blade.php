@extends('admin.layout.layout')

@section('title')
    تعديل اعدادات الموقع

@endsection

@section('header')


@endsection

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>تعديل اعدادات الموقع </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/Adminpanel')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active"><a href="{{ url('/Adminpanel/sitesetting')}}">تعديل اعدادات الموقع </a></li>
                    </ol>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">تعديل اعدادات الموقع </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/Adminpanel/sitesetting')}}" method="post">
                            @csrf
                        @foreach($siteSetting as $setting)

                            <div class="form-group row">
                                <div class="col-lg-2">
                                    {{$setting->slug}}

                                </div>

                                <div class="col-md-10">
                                    @if($setting->type == 0)
                                        {!! Form::text($setting->namsetting, $setting->value , ['class'=>'form-control'] )!!}
                                    @else
                                        {!! Form::textarea($setting->namsetting, $setting->value , ['class'=>'form-control'] )!!}
                                    @endif

                                    @if($errors->has($setting->namsetting))
                                        <span class="help-block">
                                            <strong>{{$errors->first($setting->namsetting)}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                                <div class="clearfix"></div>
                                <br>
                        @endforeach
                            <button name="submit" type="submit" class="btn btn-app">
                                <i class="fa fa-save"></i>
                                حفظ اعدادات الموقع </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection


{{--@section('footer')--}}


{{--@endsection--}}
