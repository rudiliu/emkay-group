<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Session;

class RegistrationController extends Controller
{
    public function index(){
        if(Session::has('id')) {
            return redirect(route('quiz'));
        }
        return view('index');
    }

    public function quiz(){
        //Session::flush();
        if(Session::has('id')){
            $registration = Registration::find(Session::get('id'));
            return view('quiz',compact('registration'));
        }
        return redirect(url('/'));
    }

    public function submit(Request $request){
        $inputs = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'ic_number' => 'required|string|max:15',
            'phone' => 'required|string|max:15',
            'location' => 'required|string|max:191',
        ]);

        $registration = new Registration();
        $registration->name = $inputs['name'];
        $registration->email = $inputs['email'];
        $registration->ic_number = $inputs['ic_number'];
        $registration->phone = $inputs['phone'];
        $registration->location = $inputs['location'];
        $registration->created_ip = $request->ip();
        $registration->save();

        Session::put('id', $registration->id);

        return redirect(route('quiz'));

    }

    public function answer(Request $request){
        $inputs = $request->validate([
            'q' => 'required|integer',
            'ans' => 'required|string|max:100',
            'reg' => 'nullable|integer',
        ]);

        if(Session::has('id')){
            $registration = Registration::find(Session::get('id'));

            if($registration) {

                $registration->updated_ip = $request->ip();

                switch ($inputs['q']) {
                    case 1:
                        $registration->answer1 = $inputs['ans'];
                        $registration->q1_created_at = date('Y-m-d H:i:s');
                        $result = array('status' => true, 'message' => '', 'code' => 1);
                        break;
                    case 2:
                        $registration->answer2 = $inputs['ans'];
                        $registration->q2_created_at = date('Y-m-d H:i:s');
                        $result = array('status' => true, 'message' => '', 'code' => 2);
                        break;
                    case 3:
                        $registration->answer3 = $inputs['ans'];
                        $registration->q3_created_at = date('Y-m-d H:i:s');
                        $result = array('status' => true, 'message' => '', 'code' => 3);
                        break;
                    case 4:
                        $registration->answer4 = $inputs['ans'];
                        $registration->q4_created_at = date('Y-m-d H:i:s');
                        $result = array('status' => true, 'message' => '', 'code' => 4);
                        break;
                    case 5:
                        $registration->answer5 = $inputs['ans'];
                        $registration->q5_created_at = date('Y-m-d H:i:s');
                        $result = array('status' => true, 'message' => '', 'code' => 5);
                        Session::forget('id');
                        break;
                    default:
                        return json_encode(array('status' => false, 'message' => 'Invalid question', 'code' => ''));
                }
                $registration->save();
            }
            else{
                $result = array('status' => false, 'message' => 'Invalid ID', 'code' => '');
            }
        }else{
            if(isset($inputs['reg'])){
                $registration = Registration::find($inputs['reg']);
                $registration->updated_ip = $request->ip();

                if ($inputs['ans'] == 'Facebook') {
                    $registration->share_on_fb = 'Yes';
                } elseif ($inputs['ans'] == 'Twitter') {
                    $registration->share_on_tw = 'Yes';
                }
                $registration->save();
                $result = array('status' => true, 'message' => '', 'code' => 10);
            }else{
                return json_encode(array('status' => false,'message' => 'Session expired, please re-register again!', 'code' => ''));
            }
        }

        return json_encode($result);
    }

    public function report(Request $request){
        $inputs = $request->validate([
            'pin' => 'required|string',
        ]);

        if($inputs['pin']==env('REPORT_PIN')){
            $registrations = Registration::paginate(25);
            if($request->export==1){
                $this->export();
            }else {
                return view('welcome', compact('registrations'));
            }
        }else{
            return redirect(url('/'));
        }
    }

    public function export(){
        $registrations = Registration::all();
        // output headers so that the file is downloaded rather than displayed
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=quiz-report.csv');

        $output = fopen('php://output', 'w');

        fputcsv($output, array('Name', 'Email', 'IC', 'Phone', 'Location', 'Question 1', 'Question 2', 'Question 3', 'Question 4', 'Question 5', 'Question 1 Timestamp', 'Question 2 Timestamp', 'Question 3 Timestamp', 'Question 4 Timestamp', 'Question 5 Timestamp', 'FB Share', 'TW Share', 'Register at', 'Updated at', 'Register IP', 'Updated IP'));

       foreach ($registrations as $item) {
           fputcsv($output, array($item->name,$item->email,$item->ic_number,$item->phone,$item->location,$item->answer1,$item->answer2,$item->answer3,$item->answer4,$item->answer5,$item->q1_created_at,$item->q2_created_at,$item->q3_created_at,$item->q4_created_at,$item->q5_created_at,$item->share_on_fb,$item->share_on_tw,$item->created_at,$item->updated_at,$item->created_ip,$item->updated_ip));
       }
    }
}
