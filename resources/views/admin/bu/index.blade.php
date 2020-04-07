@extends('admin.layout.layout')

@section('title')
التحكم في العقارات

@endsection

@section('header')

 {!! Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') !!}

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>التحكم في العقارات</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/Adminpanel')}}">الرئيسية</a></li>
              <li class="breadcrumb-item active"><a href="{{ url('/Adminpanel/bu')}}">التحكم في العقارات</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
{{--a--}}

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-12">
           <div class="card">
{{--               <div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="table_length"><label>Show <select name="table_length" aria-controls="table" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table"></label></div></div></div>--}}
            <!-- /.card-header -->
            <div class="card-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th># </th>
                  <th>اسم العقار</th>
                  <th> السعر</th>
                  <th>النوع</th>
                  <th>أضيف في</th>
                  <th>الحالة</th>
                  <th>التحكم</th>
                </tr>
                </thead>

                <tbody>

                @foreach($bu as $allbu)
                    <tr>
                        <td>{{$allbu->id}}</td>
                        <td>{{$allbu->bu_name}}</td>
                        <td>{{$allbu->bu_price}}</td>
                        <td>
                            @if($allbu->bu_type == 0)
                                شقة
                            @elseif($allbu->bu_type == 1)
                                فيلا
                            @elseif($allbu->bu_type == 2)
                                شاليه
                            @endif
                        </td>
                        <td>{{$allbu->created_at}}</td>
                        <td>
                            {{$allbu->bu_status == 1 ? 'غير مفعل' : 'مفعل'}}
                        </td>
                        <td>
                            <a href="{{ url('/Adminpanel/bu/'.$allbu->id.'/edit')}}"
                               class="btn btn-info btn-sm"><i class="material-icons">تعديل </i></a>

                            <form id="delete-form-{{ $allbu->id }}" action="{{ route('bu.destroy',$allbu->id) }}"
                                  style="display: none;" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $allbu->id }}').submit();
                                }else {
                                event.preventDefault();
                                }"><i class="material-icons">حذف</i></button>

                        </td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                <tr>
                <th># </th>
                    <th>اسم العقار</th>
                    <th> السعر</th>
                    <th>النوع</th>
                    <th>أضيف في</th>
                    <th>الحالة</th>
                    <th>التحكم</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection


@section('footer')

    {!! Html::script('admin/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}


    <script type="text/javascript">
        $('#table').DataTable({
            "paging": true,
            "lenghtChange":true,
            "searching":true,
            "ordring":true,
            "info":true,
            "autowidth":true

        });

    </script>

{{-- <script>--}}

{{--var lastIdx = null;--}}

{{--$('#data thead th').each( function () {--}}
{{--if($(this).index()  < 5 && $(this).index() != 3){--}}
{{--    var classname = $(this).index() == 6  ?  'date' : 'dateslash';--}}
{{--    var title = $(this).html();--}}
{{--    $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" البحث '+title+'" />' );--}}
{{--}else if($(this).index() == 3){--}}
{{--    $(this).html( '<select> ' +--}}
{{--        @foreach(bu_type() as $key => $bu)--}}
{{--            '<option value="{{$key}}"> {{$bu}} </option>' +--}}
{{--        @endforeach--}}
{{--        '</select>' );--}}
{{--}else if($(this).index() == 5){--}}
{{--    $(this).html( '<select> ' +--}}
{{--        @foreach(bu_status() as $key => $bu)--}}
{{--            '<option value="{{$key}}"> {{$bu}} </option>' +--}}
{{--        @endforeach--}}
{{--        '</select>' );--}}
{{--}--}}

{{--} );--}}

{{--var table = $('#data').DataTable({--}}
{{--processing: true,--}}
{{--serverSide: true,--}}
{{--ajax: '{{ url('/Adminpanel/bu/data') }}',--}}
{{--columns: [--}}
{{--    {data: 'id', name: 'id'},--}}
{{--    {data: 'bu_name', name: 'bu_name'},--}}
{{--    {data: 'bu_price', name: 'bu_price'},--}}
{{--    {data: 'bu_type', name: 'bu_type'},--}}
{{--    {data: 'created_at', name: 'created_at'},--}}
{{--    {data: 'bu_status', name: 'bu_status'},--}}
{{--    {data: 'control', name: ''}--}}
{{--],--}}
{{--"language": {--}}
{{--    "url": "{{ Request::root()  }}/admin/cus/Arabic.json"--}}
{{--},--}}
{{--"stateSave": false,--}}
{{--"responsive": true,--}}
{{--"order": [[0, 'desc']],--}}
{{--"pagingType": "full_numbers",--}}
{{--aLengthMenu: [--}}
{{--    [25, 50, 100, 200, -1],--}}
{{--    [25, 50, 100, 200, "All"]--}}
{{--],--}}
{{--iDisplayLength: 25,--}}
{{--fixedHeader: true,--}}

{{--"oTableTools": {--}}
{{--    "aButtons": [--}}


{{--        {--}}
{{--            "sExtends": "csv",--}}
{{--            "sButtonText": "ملف اكسل",--}}
{{--            "sCharSet": "utf16le"--}}
{{--        },--}}
{{--        {--}}
{{--            "sExtends": "copy",--}}
{{--            "sButtonText": "نسخ المعلومات",--}}
{{--        },--}}
{{--        {--}}
{{--            "sExtends": "print",--}}
{{--            "sButtonText": "طباعة",--}}
{{--            "mColumns": "visible",--}}


{{--        }--}}
{{--    ],--}}

{{--    "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"--}}
{{--},--}}

{{--"dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '--}}
{{--,initComplete: function ()--}}
{{--{--}}
{{--    var r = $('#data tfoot tr');--}}
{{--    r.find('th').each(function(){--}}
{{--        $(this).css('padding', 8);--}}
{{--    });--}}
{{--    $('#data thead').append(r);--}}
{{--    $('#search_0').css('text-align', 'center');--}}
{{--}--}}

{{--});--}}

{{--table.columns().eq(0).each(function(colIdx) {--}}
{{--$('input', table.column(colIdx).header()).on('keyup change', function() {--}}
{{--    table--}}
{{--            .column(colIdx)--}}
{{--            .search(this.value)--}}
{{--            .draw();--}}
{{--});--}}




{{--});--}}



{{--table.columns().eq(0).each(function(colIdx) {--}}
{{--$('select', table.column(colIdx).header()).on('change', function() {--}}
{{--    table--}}
{{--            .column(colIdx)--}}
{{--            .search(this.value)--}}
{{--            .draw();--}}
{{--});--}}

{{--$('select', table.column(colIdx).header()).on('click', function(e) {--}}
{{--    e.stopPropagation();--}}
{{--});--}}
{{--});--}}


{{--$('#data tbody')--}}
{{--    .on( 'mouseover', 'td', function () {--}}
{{--        var colIdx = table.cell(this).index().column;--}}

{{--        if ( colIdx !== lastIdx ) {--}}
{{--            $( table.cells().nodes() ).removeClass( 'highlight' );--}}
{{--            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );--}}
{{--        }--}}
{{--    } )--}}
{{--    .on( 'mouseleave', function () {--}}
{{--        $( table.cells().nodes() ).removeClass( 'highlight' );--}}
{{--    } );--}}


{{--</script>--}}

{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>--}}

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>--}}
{{--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>--}}
{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
@endsection
