<?php
/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 27/5/18
 * Time: 08:48
 */

namespace App\Http\Controllers;


use App\Purchase;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Mailable
{
    public $data;

    use Queueable, SerializesModels;

    public function __construct(Purchase $purchase)
    {
        $this->data = $purchase;
    }


    public function build()
    {
        return $this->text('mail')->subject('Compra Realizada');
    }

    public function sendTestMail(){
 //Envío con información a $data
        $data = User::find(1);
        Mail::to($data->email, 'ASDF')->send(new SendMailController($data));
    }
}