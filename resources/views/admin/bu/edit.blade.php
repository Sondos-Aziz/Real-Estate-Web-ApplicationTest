@extends('admin.layout.layout')

@section('title')

تعديل العقار
{{$bu->bu_name}}

@endsection

@section('header')


@endsection

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>تعديل العقار  </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/Adminpanel')}}">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="{{ url('/Adminpanel/bu')}}">التحكم في الأعضاء</a></li>
              <li class="breadcrumb-item active"><a href="{{ url('/Adminpanel/bu/'.$bu->id.'edit')}}">تعديل العقار {{$bu->bu_name}} </a></li>
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
              <h3 class="card-title">تعديل العقار {{$bu->bu_name}}</h3>
              </div>
              <div class="card-body">

                     {!! Form::model($bu ,['route' => ['bu.update',$bu->id ], 'method'=>'PATCH' ]  )  !!}

                     @include('admin.bu.form')
                     {!! Form::close() !!}
            </div>
            </div>
           </div>
          </div>
</section>

@endsection


@section('footer')


@endsection
