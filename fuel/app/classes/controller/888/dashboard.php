<?php

class Controller_Oxygen_Dashboard extends Controller_Oxygen
{

	public function action_index()
	{
		return Response::forge(View::forge('welcome/index'));
	}


}
