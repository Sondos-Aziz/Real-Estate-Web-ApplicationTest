@extends('admin.layout.layout')

@section('title')
اضف عقار جديد

@endsection

@section('header')


@endsection

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>اضف عقار جديد </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/Adminpanel')}}">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="{{ url('/Adminpanel/bu')}}">التحكم في العقارات</a></li>
              <li class="breadcrumb-item active"><a href="{{ url('/Adminpanel/bu/create')}}">اضف عقار جديد </a></li>
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
              <h3 class="card-title">اضف عقار جديد</h3>
              </div>
              <div class="card-body">
              <form method="POST" action="{{ url('/Adminpanel/bu') }}"  >
              @include('admin.bu.form')
              </form>
            </div>
            </div>
           </div>
          </div>
</section>






@endsection


@section('footer')


@endsection
