<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;

class CertificateController extends Controller
{
    public function create()
    {
        return view ('index');
    }

    public function view()
    {
        $interns = Intern::all();
        $data = compact('interns');
        return view ('view-certificates')->with($data);
    }
    
    public function show($id)
    {
        $interns = Intern::find($id);

        $url = url('/show-certificate').'/'.$id;
        
            $pack = compact('interns', 'url');  
            return view ('show-certificate')->with($pack);
       
    }

    public function reg_form()
    {
        return view ('certificate');
    }

    public function create_certificate(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'role' => 'required',
                'organization' => 'required',
                'organizer' => 'required',
                'internship_name' => 'required',
                'intern_from' => 'required',
                'intern_to' => 'required',                
                'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]
            );

            $imageName = time().'.'.$request->photo->extension();  
       
            $request->photo->move(public_path('uploads'), $imageName);

        $interns = new Intern();
        $interns->name = $request['name'];
        $interns->email = $request['email'];
        $interns->role = $request['role'];
        $interns->organization = $request['organization'];
        $interns->organizer = $request['organizer'];
        $interns->internship_name = $request['internship_name'];
        $interns->intern_from = $request['intern_from'];
        $interns->intern_to = $request['intern_to'];
        //$interns->certificate_no = $request['certificate_no'];
        $interns->photo = $imageName;

        $name  = strtoupper($interns->name);
        $words = explode(" ", $name);
        $firtsName = reset($words); //this will give you the first word of the $words array , which is the first name
        $lastName  = end($words); //this will give you the last word of the $words array , which is the last name

        $fname = substr($firtsName,0,1); // this will echo the first letter of your first name
        $lname = substr($lastName ,0,1); // this will echo the first letter of your last name

        $interns->certificate_no = "KA". rand(100000,999999) . $fname . $lname . "XA";

        $interns->save();

        return redirect('certificate');

    }
}



