<?php

class Controller_Oxygen extends Controller
{
	public function before()
	{
		header("Cache-Control: no-cache, must-revalidate");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		/*if(Session::get('login',false) != true)
		{
			Session::set('refuri',Uri::current());
			Response::redirect(Uri::base()."login");
		}*/
	}
	
	public function action_login()
	{
		return Response::forge(View::forge('oxygen/login'));
	}
}
