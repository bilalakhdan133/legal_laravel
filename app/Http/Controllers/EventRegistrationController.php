<?php

namespace App\Http\Controllers;
use App\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;

class EventRegistrationController extends Controller
{
    public function registerEvent(Request $request)
    {
        // dd($request);
        $request->validate([
            'NamaDepan' => 'required|regex:/^[a-zA-Z]+$/u',
            'NamaBelakang' => 'nullable|regex:/^[a-zA-Z]+$/u',
            'Domisili' => 'required|regex:/^[a-zA-Z]+$/u',
            'Perusahaan' => 'required',
            'Pekerjaan' => 'required|regex:/^[a-zA-Z]+$/u',
            'Email' => 'required|email',
            'NomorTelepon' => 'required|min:9'
        ],[
            'NamaDepan.required' => '* Nama depan dibutuhkan',
            'NamaDepan.regex' => '* Hanya huruf dan spasi yang diperbolehkan',
            'NamaBelakang.regex' => '* Hanya huruf dan spasi yang diperbolehkan',
            'Domisili.required' => '* Domisili depan dibutuhkan',
            'Domisili.regex' => '* Hanya huruf dan spasi yang diperbolehkan',
            'Perusahaan.required' => '* Perusahaan / instansi dibutuhkan',
            'Pekerjaan.required' => '* Pekerjaan dibutuhkan',
            'Pekerjaan.regex' => '* Hanya huruf dan spasi yang diperbolehkan',
            'Email.required' => '* Email dibutuhkan',
            'Email.email' => '* Format email tidak valid',
            'NomorTelepon.required' => '* Nomor telepon dibutuhkan',
            'NomorTelepon.min' => '* Format nomor telepon tidak valid'

        ]);

        $eventRegis = new EventRegistration([
            'event_id' => $request->input('EventID'),
            'nama_depan' => $request->input('NamaDepan'),
            'nama_belakang' => $request->input('NamaBelakang'),
            'domisili' => $request->input('Domisili'),
            'perusahaan_instansi' => $request->input('Perusahaan'),
            'pekerjaan' => $request->input('Pekerjaan'),
            'email' => $request->input('Email'),
            'nomor_telepon' => $request->input('interPhone') . $request->input('NomorTelepon'),
        ]);

    //    fungsi email
        $sender = 'sponsve20@gmail.com';
        $from = $eventRegis->email;
        $receiver ='forsaken9931@gmail.com';
        $subjek = 'Pendaftaran Event Legal Analytics - '.$request->input('EventName');
        $pesan = 'Hello, Theres a registration for event '.$request->input('EventName').' from participant named '.$eventRegis->nama_depan.' '.$eventRegis->nama_belakang;


        
        $mail = new PHPMailer(true);
        $mail->isSMTP();     
                                               //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->Username   = $sender;                     //SMTP username
        $mail->Password   = 'vdonxswxwakgpgiq';                               //SMTP password
        $mail->Port       = 465;     
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        // $mail->SMTPDebug = 2;                      //Enable verbose debug output
      
        $mail->SMTPOptions = array(
          'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
          )
        );
        
        $mail->setFrom($sender, $from);
        $mail->addAddress($receiver);    
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subjek;
        $mail->Body = $pesan;
        
        
       $send = $mail->send();

        
        $eventRegis->save();
        return redirect('/event');
       
    }
}
