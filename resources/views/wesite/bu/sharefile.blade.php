@if( count($bu) > 0)
    @foreach($bu as $key => $b)
        @if($key % 3 == 0 && $key!= 0 )
            <div class="clearfix"></div>
        @endif
        <div class="col-md-4 pull-right">
            <div class="productbox">
                <img src="http://lorempixel.com/468/258" class="img-responsive">
                <div class="producttitle">{{ $b->bu_name }}</div>
                <p class="text-justify">{{Str::limit($b->bu_small_dis, 80)}}</p>
                <div class="productprice"><div class="pull-left"> <a href="#" class="btn btn-primary btn-sm" role="button">اظهر التفاصيل <span class="glyphicon glyphicon-shopping-cart"> </span></a></div>
                    <div class="pricetext">{{$b->bu_price}}</div></div>
            </div>
        </div>
    @endforeach


    <div class="clearfix"></div>
    <br>

    @else
        <div class= 'alert alert-danger'>
            لا يوجد اي عقارات حاليا
        </div>
@endif
