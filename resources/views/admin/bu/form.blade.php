@csrf

<div class="form-group row">
    <div class="col-lg-2"> اسم العقار </div>

    <div class="col-md-10">
        {!! Form::text('bu_name', null , ['class'=>'form-control'] )!!}

         @if($errors->has('bu_name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_name') }}</strong>
             </span>
         @endif
     </div>
</div>
        <div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> عدد الغرف </div>

    <div class="col-md-10">
        {!! Form::text('rooms', null , ['class'=>'form-control'] )!!}

        @if($errors->has('rooms'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('rooms') }}</strong>
             </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> سعر العقار </div>

    <div class="col-md-10">
        {!! Form::text('bu_price', null , ['class'=>'form-control'] )!!}

        @if($errors->has('bu_price'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_price') }}</strong>
             </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> نوع العملية </div>

    <div class="col-md-10">
        {!! Form::select('bu_type', bu_type() , null , ['class'=>'form-control'] )!!}

        @if($errors->has('bu_type'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_type') }}</strong>
             </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> مساحة العقار </div>

    <div class="col-md-10">
        {!! Form::text('bu_square', null , ['class'=>'form-control'] )!!}

        @if($errors->has('bu_square'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_square') }}</strong>
             </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> نوع العقار </div>

    <div class="col-md-10">
        {!! Form::select('bu_rent',bu_rent(), null , ['class'=>'form-control'] )!!}

        @if($errors->has('bu_rent'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_rent') }}</strong>
             </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> حالة العقار </div>

    <div class="col-md-10">
        {!! Form::select('bu_status', bu_status() , null , ['class'=>'form-control'] )!!}

        @if($errors->has('bu_status'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_status') }}</strong>
             </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> الكلمات الدلالية </div>

    <div class="col-md-10">
        {!! Form::text('bu_meta', null , ['class'=>'form-control'] )!!}

        @if($errors->has('bu_meta'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_meta') }}</strong>
             </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> وصف العقار لمحركات البحث  </div>

    <div class="col-md-10">
        {!! Form::textarea('bu_small_dis', null , ['class'=>'form-control' , 'rows'=>'4'])!!}

        @if($errors->has('bu_small_dis'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_small_dis') }}</strong>
             </span>
        @endif
        <br>
        <div class="alert alert-warning">
            لا يمكن ادخال اكثر من 160 حرف على حسب معايير جوجل
        </div>
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> خط الطول </div>

    <div class="col-md-10">
        {!! Form::text('bu_langtude', null , ['class'=>'form-control'] )!!}

        @if($errors->has('bu_langtude'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_langtude') }}</strong>
             </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> دائرة العرض </div>

    <div class="col-md-10">
        {!! Form::text('bu_latitude', null , ['class'=>'form-control'] )!!}

        @if($errors->has('bu_latitude'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_latitude') }}</strong>
             </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group row">
    <div class="col-lg-2"> وصف مطول للعقار </div>

    <div class="col-md-10">
        {!! Form::textarea('bu_large_dis', null , ['class'=>'form-control'] )!!}

        @if($errors->has('bu_large_dis'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('bu_large_dis') }}</strong>
             </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>




<div class="text2">
    <div class="col-md-12">
        <button name="submit" type="submit" class="btn btn-warning">
            تنفيذ
        </button>
    </div>
</div>
<div class="clearfix"></div>
<br>





