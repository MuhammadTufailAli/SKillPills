<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Session();

use validator;
use Auth;

class studentController extends Controller
{
    function gotonewsevents()
    {
        return view('newsevents');
    }
    function gotoprofile(Request $request)
    {

        $userID = Session()->get('user')[0]->RS_ID;


        $loginData = DB::select("select * from registeredstudents where RS_ID=?", [$userID]);










        foreach ($loginData as $tablepass) {
            if ($tablepass->firstname == null) {
                $fname = ".";
            } else {
                $fname = $tablepass->firstname;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->gender == null) {
                $gender = "Female";
            } else {
                $gender = $tablepass->gender;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->futureplan == null) {
                $futureplan = "Select Future Plan";
            } else {
                $futureplan = $tablepass->futureplan;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->nationality == null) {
                $nationality = "Select Nationality";
            } else {
                $nationality = $tablepass->nationality;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->specialization == null) {
                $specialization = "Select Specialization";
            } else {
                $specialization = $tablepass->specialization;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->qualification == null) {
                $qualification = "Select Qualification";
            } else {
                $qualification = $tablepass->qualification;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->city == null) {
                $city = "Select City";
            } else {
                $city = $tablepass->city;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->status == null) {
                $status = "Select Current Status";
            } else {
                $status = $tablepass->status;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->cnictype == null) {
                $cnictype = "Parent/Guardian";
            } else {
                $cnictype = $tablepass->cnictype;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->middlename == null) {
                $mname = ".";
            } else {
                $mname = $tablepass->middlename;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->lastname == null) {
                $lname = ".";
            } else {
                $lname = $tablepass->lastname;
            }
        }

        foreach ($loginData as $tablepass) {
            if ($tablepass->cnic == null) {
                $cnic = ".";
            } else {
                $cnic = $tablepass->cnic;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->mail == null) {
                $mail = ".";
            } else {
                $mail = $tablepass->mail;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->mobile == null) {
                $mobile = ".";
            } else {
                $mobile = $tablepass->mobile;
            }
        }







        return view('profile', ['fname' => $fname, 'city' => $city, 'nationality' => $nationality, 'qualification' => $qualification, 'specialization' => $specialization, 'status' => $status, 'gender' => $gender, 'futureplan' => $futureplan, 'cnictype' => $cnictype, 'mname' => $mname, 'lname' => $lname, 'cnic' => $cnic, 'mail' => $mail, 'mobile' => $mobile]);
    }



    function gotochangepassword()
    {
        return view('changepassword');
    }

    function gotodeleteaccount()
    {
        return view('deleteaccount');
    }
    function gotouserinterface()
    {
        $userID = Session()->get('user')[0]->RS_ID;
        $loginData = DB::select("select * from registeredstudents where RS_ID=?", [$userID]);

        foreach ($loginData as $tablepass) {
            if ($tablepass->ArtificalIntelligence == null) {
                $ai = "Not Entrolled";
            } else {
                $ai = $tablepass->ArtificalIntelligence;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->WebDevelopment == null) {
                $web = "Not Entrolled";
            } else {
                $web = $tablepass->WebDevelopment;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->Python == null) {
                $python = "Not Entrolled";
            } else {
                $python = $tablepass->Python;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->Java == null) {
                $java = "Not Entrolled";
            } else {
                $java = $tablepass->Java;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->C == null) {
                $c = "Not Entrolled";
            } else {
                $c = $tablepass->C;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->CSS == null) {
                $cs = "Not Entrolled";
            } else {
                $cs = $tablepass->CSS;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->Html == null) {
                $html = "Not Entrolled";
            } else {
                $html = $tablepass->Html;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->JavaScript == null) {
                $javascript = "Not Entrolled";
            } else {
                $javascript = $tablepass->JavaScript;
            }
        }
        foreach ($loginData as $tablepass) {
            if ($tablepass->ComputerEngineering == null) {
                $ce = "Not Entrolled";
            } else {
                $ce = $tablepass->ComputerEngineering;
            }
        }




        return view('userinterface', ['ai' => $ai, 'web' => $web, 'python' => $python, 'java' => $java, 'c' => $c, 'css' => $cs, 'html' => $html, 'javascript' => $javascript, 'ce' => $ce]);
    }
    function gotoexercises()
    {
        return view('exercises');
    }
    function gotoquizzes()
    {
        return view('quizzes');
    }
    function gotocoursevideos()
    {
        return view('coursevideos');
    }
    function gotonoticeboard()
    {
        return view('noticeboard');
    }
    function gotoquiz()
    {
        return view('quiz');
    }
    function gotodiscussion()
    {
        return view('discussion');
    }
    function gotoresult()
    {
        return view('result');
    }
    function gotoprogress()
    {
        return view('progess');
    }
    function gotosucessstory()
    {
        return view('successstory');
    }
    function gotoonlinesupport()
    {
        return view("onlinesupport");
    }

    function gotocourse(Request $request)
    {
        $ai = $request->input('ai');
        $w = $request->input('web');
        $py = $request->input('python');
        $j = $request->input('java');
        $c = $request->input('c++');
        $css = $request->input('css');
        $html = $request->input('html');
        $javascript = $request->input('javascript');
        $ce = $request->input('ce');

        $userID = Session()->get('user')[0]->RS_ID;
        if ($ai == "Artificial Intelligence") {
            $artifical = "Entrolled";
        } else {
            $artifical = "Not Entrolled";
        }

        if ($w == "Web Developement") {
            $web = "Entrolled";
        } else {
            $web = "Not Entrolled";
        }
        if ($py == "Python") {
            $python = "Entrolled";
        } else {
            $python = "Not Entrolled";
        }
        if ($j == "Java") {
            $java = "Entrolled";
        } else {
            $java = "Not Entrolled";
        }
        if ($c == "C++") {
            $cplus = "Entrolled";
        } else {
            $cplus = "Not Entrolled";
        }
        if ($css == "CSS") {
            $cs = "Entrolled";
        } else {
            $cs = "Not Entrolled";
        }
        if ($html == "Html") {
            $ht = "Entrolled";
        } else {
            $ht = "Not Entrolled";
        }
        if ($javascript == "JavaSript") {
            $js = "Entrolled";
        } else {
            $js = "Not Entrolled";
        }
        if ($ce == "Computer Engineering") {
            $computer = "Entrolled";
        } else {
            $computer = "Not Entrolled";
        }


        DB::update("update registeredstudents set  ArtificalIntelligence='$artifical', WebDevelopment='$web',Python='$python',Java='$java',C='$cplus',CSS='$cs',Html='$ht',JavaScript='$js',ComputerEngineering='$computer' where RS_ID=?", [$userID]);
        return redirect('userinterface');
    }

    function gotonotes()
    {
        return view('notes');
    }
    function gotoaddnote()
    {
        return view('addnote');
    }
    function  gotoresults()
    {
        return view('Results');
    }

    function gotodeletingaccount(Request $request)
    {
        $password = $request->input('password');
        $databasepassword = DB::select("select password from registeredstudents where password=?", [$password]);
        $databasepass = null;
        foreach ($databasepassword as $tablepass) {
            $databasepass = $tablepass->password;
        }
        if ($databasepass == null) {
            $error = "Incorrect Password";
            return view('deleteaccount')->with('error', $error);
        } else {
            DB::delete('delete from registeredstudents where password=?', [$password]);
            return redirect('signin');
        }
    }

    function gotochangepasswordupdate(Request $request)
    {
        $oldpassword = $request->input('oldpassword');
        $newpassword = $request->input('newpassword');
        $confirmpassword = $request->input('confirmpassword');

        if ($newpassword != $confirmpassword) {
            $error = "newpassword and confirm password are not same";
            return view('changepassword')->with('error', $error);
        } else {
            $password = DB::select("select password from registeredstudents where password=?", [$oldpassword]);
            $databasepass = null;
            foreach ($password as $tablepass) {
                $databasepass = $tablepass->password;
            }
            if ($databasepass == null) {
                $error = "Incorrect Password";
                return view('changepassword')->with('error', $error);
            } else {
                DB::update("update registeredstudents set password='$newpassword' where password=?", [$oldpassword]);
                return redirect('signin');
            }
        }
    }



    function check(Request $request)
    {
        $uname = $request->input('email');
        $pass = $request->input('password');
        $loginData = DB::select("select * from registeredstudents where email=?", [$uname]);




        foreach ($loginData as $tablepass) {
            $p = $tablepass->password;
            if ($p == $pass) {

                $request->session()->put('user', $loginData);

                return redirect('/userinterface');
            } else {
                $error = "Incorrect password";
                return view('signin')->with('error', $error);
            }
        }
    }

    function gotostudentdatabase(Request $request)
    {
        $studentfname = $request->input('studentfname');
        $studentmname = $request->input('studentmname');
        $studentlname = $request->input('studentlname');
        $studentgender = $request->input('studentgender');
        $email = $request->input('email');
        $userID = Session()->get('user')[0]->RS_ID;

        if ($studentgender == "Male") {
            $gender = "Male";
        } else if ($studentgender == "Female") {
            $gender = "Female";
        } else {
            $gender = "X-gender";
        }




        $studentCNIC = $request->input('studentCNIC');
        $studentCNICtype = $request->input('cnictype');
        if ($studentCNICtype == "Personal") {
            $cnictype = "Personal";
        } else if ($studentCNICtype == "Parent/Guardian") {
            $cnictype = "Parent/Guardian";
        }


        $studentNationality = $request->input('studentNationality');
        $studentCity = $request->input('studentCity');
        $studentaddress = $request->input('studentaddress');
        $studentmobile = $request->input('studentmobile');
        $studentqualification = $request->input('studentqualification');
        $studentspecialization = $request->input('studentspecialization');
        $studentstatus = $request->input('studentstatus');
        $studentplan = $request->input('studentplan');
        // DB::unprepared("insert into registeredstudents (firstname,middlename,lastname,gender,day,month,year,cnic,cnictype,nationality,city,mail,mobile,qualification,specialization,status,futureplan) values ('$studentfname','$studentmname','$studentlname','$email','$gender','$studentdate','$studentmonth','$studentyear','$studentCNIC','$cnictype','$studentNationality','$studentCity','$studentaddress','$studentmobile','$studentqualification','$studentspecialization','$studentstatus','$studentplan') where RS_ID=?", [$userID]);

        DB::update("update registeredstudents set  middlename='$studentmname', gender='$gender',cnic='$studentCNIC',cnictype='$cnictype',nationality='$studentNationality',city='$studentCity', mail='$studentaddress',mobile='$studentmobile',qualification='$studentqualification',specialization='$studentspecialization',status='$studentstatus',futureplan='$studentplan' where RS_ID=?", [$userID]);
        return redirect('/userinterface');
    }
}
