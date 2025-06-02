<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    //
    //http://sri/test/?jumpToPage=3

	public function work()
    {
    	//return redirect()->route('test',['jumpToPage' => 3]);
    	//return view('demo5.demo');
    }


    public function index()
    {
    	//return view( URL::route('test',['id'=>'2','test_id'=>'3']) );
    	return view('demo5.demo');

    }


    public function main()
    {
        //return view( URL::route('test',['id'=>'2','test_id'=>'3']) );
        //return view('demo5.user3');
       
        return redirect()->route('main2', ['jumpToPage' => 9]);

    }

    public function main2()
    {

        $url = url()->full();
        $urlParts = parse_url($url);
        $query = explode("=",$urlParts['query']);
        $page = (int)$query[1];
        //var_dump($page);
        //var_dump(url()->full());
        //$url=explode("=")
        //echo $page;
        //var_dump($page);
        
        if ($page==9){
        //return view( URL::route('test',['id'=>'2','test_id'=>'3']) );
           
           // return redirect()->route('main3', ['jumpToPage' => $page]);
            //echo "Here";

            return view('demo5.user2');
        } else {
            return view('demo5.error');

        }
    }

    
}
