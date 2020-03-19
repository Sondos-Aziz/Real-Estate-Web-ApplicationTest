
            @csrf

            <div class="form-group row">
                {{--  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                <div class="col-md-12">

                    {!! Form::text('name',null , ['class'=>'form-control'] )!!}

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                {{--  <label for="admin" class="col-md-4 col-form-label text-md-right">{{ __('admin') }}</label>--}}

                <div class="col-md-12">

                    {!! Form::select('admin',['0'=>'user' , '1'=>'admin'] ,null , ['class'=>'form-control'] )!!}

                    @error('admin')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>



            <div class="form-group row">
                {{--   <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                <div class="col-md-12">
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
                {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                <div class="col-md-12">
                    <input id="password" type="password" placeholder="كلمه السر" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                {{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                <div class="col-md-12">
                    <input id="password-confirm" type="password" placeholder="تأكيد كلمه السر" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
       