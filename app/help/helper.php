<?php

    function getSetting($setSetting ='sitename'){
        return \App\SiteSetting::where('namsetting' , $setSetting)->get()[0]->value;
    }

    function bu_type(){
        $array=[
            'شقة',
            'فيلا',
            'شاليه'
        ];
        return $array;
    }

    function bu_rent(){
        $array=[
            'ايجار',
            'تمليك',
        ];
        return $array;
    }

    function bu_status(){
        $array=[
            'مفعل',
            'غير مفعل',
        ];
        return $array;
    }
    function roomnumber(){
        $array=[];
        for ($i = 1 ; $i<= 40 ; $i++){
            $array[] = $i;
        }
        return $array;
    }
