<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Storage;
use App\Contact;

class PublicController extends Controller
{
    public function getImage($name)
    {
      $file_path = storage_path() .'/app/public/images/'. $name;
      if (file_exists($file_path))
      {
          return response()->file($file_path);
      }
      else
      {
          exit('Requested file does not exist on our server!');
      }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurExcellence()
    {
        $data = HomeController::getPage('our-excellence');
        return view('our_excellence')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHome()
    {
        $data = HomeController::getPage('home');
        return view('home')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurNetwork()
    {
        $data = HomeController::getPage('our-network');
        return view('our_network')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurServices()
    {
        $data = HomeController::getPage('our-services');
        return view('our_services')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurTeam()
    {
        $data = HomeController::getPage('our-team');
        return view('our_team')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurClients()
    {
        $data = HomeController::getPage('our-clients');
        return view('our_clients')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getContactUs(Request $request)
    {
      $data = [
        'name' => '',
  			'email' => '',
  			'address' => '',
  			'phone' => '',
        'company' => '',
        'comments' => '',
      ];

      return view('contact_us')->with($data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function postContact(Request $request)
    {
      $rules = [
  			'name' => 'required|string|max:100',
  			'email' => 'required|email',
  			'address' => 'max:250',
  			'phone' => 'required|numeric|digits:10',
        'company' => 'max:100',
        'comments' => 'max:1000',
  		];

		  $validation = Validator::make(
			$request->all(), $rules);

      if($validation->fails()){
        return view('contact_us')->with($request->all())->withErrors($validation);
      }else{
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->company_name = $request->company;
        $contact->comments = $request->comments;
        $contact->save();
        return view('contact_us_success')->with(['data' => $request->all()]);
      }
    }

}
