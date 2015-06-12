<?php namespace App\Http\Controllers;

use App\feedback;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\FeedbackFormRequest;

use Request;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 *
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

    public function feedback()
    {
        $input = Request::all();
        $feedback = new feedback;
        $feedback->name = $input['feedbackname'];
        $feedback->email = $input['feedbackemail'];
        $feedback->message = $input['feedbackmsg'];
        $feedback->save();
        return redirect('/#footer')->with('message','Thank you for contacting us!');
        /*$feed = new feedback;
        $$feed->name = Input::get('name');
        $feed->email = Input::get('email');
        $feed->save();
        return "nothing";*/
        //return \Redirect::route('/')
          //  ->with('message', 'Thanks for contacting us!');
    }
}
