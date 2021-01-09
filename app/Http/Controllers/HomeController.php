<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\Order;
use App\Http\Requests;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$catalogs = Catalog::orderBy('name')->get();//получим массив
		/*$catalogs = Catalog::orderBy('id', 'DESC')->get();//по id(дате добавления) в обратном порядке*/
		$objs = Order::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(20);
        return view('home', compact('catalogs', 'objs'));
    }
	
	public function postIndex(Requests\OrderRequest $r){
		$r['user_id'] = Auth::user()->id;
		unset($r['_token']);
		$pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
		if(!$pic){
			$pic = '';
		}
		$r['picture'] = $pic;
		/*dd($r->all());*/
		Order::create($r->all());
		return redirect()->back();		
	}
}
