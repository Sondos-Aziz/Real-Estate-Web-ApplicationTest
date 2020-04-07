@csrf
<div class="form-group row">
        <div class="col-lg-2"> اسم العضو </div>
        <div class="col-md-10">

            {!! Form::text('name',null , ['class'=>'form-control'] )!!}
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
</div>

<div class="form-group row">
    <div class="col-lg-2"> نوع العضو </div>
    <div class="col-md-10">

        {!! Form::select('admin',['0'=>'user' , '1'=>'admin'] ,null , ['class'=>'form-control'] )!!}
        @error('admin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
             </span>
        @enderror
    </div>
</div>

<div class="form-group row">
        <div class="col-lg-2"> ايميل العضو </div>
        <div class="col-md-10">
            {!! Form::text('email',null , ['class'=>'form-control'] )!!}
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
         </div>
</div>


@if(!isset($user))

 <div class="form-group row">
        <div class="col-lg-2">كلمة المرور </div>
        <div class="col-md-10">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
             @enderror
        </div>
</div>

<div class="form-group row">
        <div class="col-lg-2">تأكيد كلمة المرور </div>
         <div class="col-md-10">
             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
         </div>
</div>
@endif

            <div class="form-group row mb-0">
                <div class="col-md-12">
                    <button type="submit" class="btn-warning">
                        {{ __(' تسجيل ') }}
                    </button>
                </div>
            </div>
