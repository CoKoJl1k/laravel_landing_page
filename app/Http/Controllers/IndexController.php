<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requsts;
use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use DB;
use Mail;



class IndexController extends Controller
{
    public function execute(Request $request){
    	
    	if($request->isMethod('post')){
    		
    		$messages = [
    		'required' => "Поле :attribute обязательно к заполнению",
    		'email' => "Поле :attribute должно соответствовать email адресу"
    	];
    		$this->validate($request,[
    			'name'=>'required|max:255',
    			'email'=>'required|email',
    			'text'=>'required'
    		], $messages);
    		$data = $request->all();
    		//mail
			$result = Mail::send('site.email',['data'=>$data],function($message) use ($data){
				$mail_admin = env('MAIL_ADMIN');
				$message->from($data['email'],$data['name']); 
				$message->to($mail_admin,'Mr.Admin')->subject('Question');
			});
			if ($result) {
			return redirect()->route('home')->with('status','Email is send');
			}
		}
		
    	
    	$pages = Page::all();
    	$portfolios = Portfolio::get(array('name','filter','images'));
    	$services = Service::where('id','<',20)->get();
    	$peoples = People::take(4)->get();
    	
    	$tags = DB::table('portfolios')->distinct()->pluck('filter');
    	
    	//dd($tags);
    	//dd($portfolios);
    	$menu = array();
    	foreach($pages as $page) {
    		$item = array('title'=>$page->name,'alias'=>$page->alias);
    		array_push($menu,$item);
			
		}
		//dd($menu);
		$item = array('title'=>'Services','alias'=>'service');
    	array_push($menu,$item);
    	//dd($peoples);
    	$item = array('title'=>'Portfolio','alias'=>'gallery');
    	array_push($menu,$item);
    	
    	$item = array('title'=>'Team','alias'=>'team');
    	array_push($menu,$item);
    	
    	$item = array('title'=>'Contact','alias'=>'contact');
    	array_push($menu,$item);
		
		return view('site.index',array(
										'menu'=>$menu,
										'pages'=>$pages,
										'services'=>$services,
										'portfolios'=>$portfolios,
										'peoples'=>$peoples,
										'tags'=>$tags
									
									   ));
	}
}
