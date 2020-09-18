<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:500'
        ]);
        $contact = new \App\Contact;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return "C'est bien enregistré !";
    }
}


// namespace App\Http\Controllers;
 
// use App\Http\Requests\ContactRequest;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\Contact;
 
// class ContactController extends Controller
// {
//     public function create()
//     {
//         return view('contact');
//     }
 
//     public function store(ContactRequest $request)
//     {
//         Mail::to('administrateur@chezmoi.com')
//             ->send(new Contact($request->except('_token')));
 
//         return view('confirm');
//     }
// }

// namespace App\Http\Controllers;
 
// use App\Http\Requests\ContactRequest;
// class ContactController extends Controller
// {
//     public function create()
//     {
//         return view('contact');
//     }
 
//     public function store(ContactRequest $request)
//     {
//         return view('confirm');
//     }
// }

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ContactController extends Controller
// {
//     public function create()
//     {
//         return view('contact');
//     }
 
//     public function store(ContactRequest $request)
//     {
//         return view('confirm');
//     }
// }


 

 
