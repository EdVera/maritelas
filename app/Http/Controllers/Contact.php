<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;
use Mail;

class Contact extends Controller
{
  public function contact(Request $request) {
    $res = [
      'status' => 'ERROR_CONNECTION',
      'msg'    => 'Existe un error en la conexión <br/>¡Por favor, intente más tarde!'
    ];

    $contact = $request->input('contact');
    // dd($contact);

    if (isset($contact) and !empty($contact)) {

      $validation = Validator::make($contact, [
        'name'    => 'required|max:60',
        'email'   => 'required|email|max:250',
        'phone'   => 'required|regex:/^[0-9]{10,10}$/'
      ]);

      if ($validation->fails()) {
        $res['status'] = 'VALIDATION_ERROR';
        $res['msg'] = 'Error de validación<br/>¡Los datos introducidos son incorrectos!';
      } else {

        $mail_sent = Mail::send('site.emails.contact', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('maritelascountrymx@gmail.com', 'Maritelas Web');
          $m->replyTo($contact['email'], $contact['name']);
          $m->to('maritelascountry@hotmail.com', 'Maritelas');
          $m->subject('Maritelas | Web');
        });

        $mail_sent_client = Mail::send('site.emails.contact_client', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('maritelascountrymx@gmail.com', 'Maritelas Web');
          $m->replyTo('maritelascountry@hotmail.com', 'Maritelas');
          $m->to($contact['email'], $contact['name']);
          $m->subject('Maritelas | Contacto');
        });

        if ($mail_sent) {
          dd("Mensaje envíado");
        }
      }
    }
    return redirect()->action('HomeController@index');

  }
}
