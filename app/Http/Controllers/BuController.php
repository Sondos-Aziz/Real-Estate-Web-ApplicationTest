<?php

namespace App\Http\Controllers;

use App\Bu;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Contracts\DataTable;
use yajra\Datatables\Datables;
use Illuminate\Support\Arr;
use Yajra\DataTables\DataTables;


class BuController extends Controller
{
    public function index()
    {
        $bu= Bu::all();
        return view('admin.bu.index',compact('bu'));
    }

    public function create()
    {
        return view('admin.bu.add');
    }

    public function store(Requests\BuRequest $buRequest, Bu $bu)
    {
        $user = Auth::user();
        $data = [
            'bu_name'=>$buRequest->bu_name,
            'bu_price'=>$buRequest->bu_price,
            'bu_rent'=>$buRequest->bu_rent,
            'bu_square'=>$buRequest->bu_square,
            'bu_type'=>$buRequest->bu_type,
            'bu_small_dis'=>$buRequest->bu_small_dis,
            'bu_meta'=>$buRequest->bu_meta,
            'bu_langtude'=>$buRequest->bu_langtude,
            'bu_latitude'=>$buRequest->bu_latitude,
            'bu_large_dis'=>$buRequest->bu_large_dis,
            'bu_status'=>$buRequest->bu_status,
            'user_id'=>$user->id,
            'rooms'=>$buRequest->rooms
        ];
        $bu->create($data);
        return redirect('/Adminpanel/bu')->withFlashMessage('تمت اضافة العقار بنجاح');
    }

    public function edit($id)
    {
        $bu = Bu::find($id);
        return view('admin/bu/edit' , compact('bu'));
    }

    public function update($id , Requests\BuRequest $request)
    {
        $bu= Bu::find($id);
        $bu->fill($request->all())->save();
        return redirect('/Adminpanel/bu')->withFlashMessage('تمت تعديل العقار بنجاح');

    }

    public function destroy($id)
    {
        $bu= Bu::find($id);
        $bu->delete();
        return redirect()->route('bu.index')->withFlashMessage(' تم حذف العقار بنجاح' );
    }

    public function showAllEnabel(Bu $bu){
        $buAll = $bu->where('bu_status' , 0)->orderBy('id' , 'desc')->paginate(15);
        return view('wesite/bu/all' , compact('buAll'));
    }

    public function ForRent(Bu $bu){
        $buAll = $bu->where('bu_status' , 0)->where('bu_rent' ,0)->orderBy('id' , 'desc')->paginate(15);
        return view('wesite/bu/all' , compact('buAll'));
    }

    public function ForBuy(Bu $bu){
        $buAll = $bu->where('bu_status' , 0)->where('bu_rent' ,1)->orderBy('id' , 'desc')->paginate(15);
        return view('wesite/bu/all' , compact('buAll'));
    }

    public function showByType($type , Bu $bu){
        if(in_array($type, ['0' , '1' , '2'])){
            $buAll = $bu->where('bu_status' , 0)->where('bu_type' , $type)->orderBy('id' , 'desc')->paginate(15);
            return view('wesite/bu/all' , compact('buAll'));
        }else{
            return Redirect::back();
        }
    }

    public function search(Requests\BuRequest $request , Bu $bu){
        $requestAll = Arr::except($request->toArray() , ['submit' , '_token']);
        $out = '';
        $i = 0;
        foreach ($requestAll as $key=> $req){
            if($req != ''){
                $where = $i == 0 ? " where " : " and ";
                $out .= $where. ' ' .$key.' = '.$req;
                $i = 2;
            }
        }
        $query = "select * from bu ".$out;
        $buAll = DB::select($query);

        $search = 'search';
        return view('wesite/bu/all' , compact('buAll' , 'search'));
    }

//     public function anyData(Bu $bu)
//     {
//
//       $bus = $bu->all();
//         return DataTable::of($bus)
//             ->editColumn('bu_name', function ($model) {
//                 return '<a href="'.url('/Adminpanel/bu/' . $model->id . '/edit').'">'.$model->bu_name.'</a>';
//             })
//             ->editColumn('bu_type', function ($model) {
//                 $type = bu_type();
//                 return '<span class="badge badge-info">' . $type[$model->bu_type] . '</span>';
//             })
//             ->editColumn('bu_status', function ($model) {
//                 return $model->status == 0 ? '<span class="badge badge-info">' . 'غير مفعل' . '</span>' : '<span class="badge badge-warning">' . 'مفعل' . '</span>';
//             })
//
//
//             ->editColumn('control', function ($model) {
//                 $all = '<a href="' . url('/Adminpanel/bu/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
//                 $all .= '<a href="' . url('/Adminpanel/bu/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
//                 return $all;
//             })
//             ->make(true);
//
//     }



}
