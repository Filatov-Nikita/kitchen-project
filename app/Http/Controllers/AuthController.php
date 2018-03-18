<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;

class AuthController extends Controller
{
    public function getLoginPage() {
        return view('loginPage');
    }

    public function loginAuth(Request $request) {

        $authResult = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ], true);
       
        if ($authResult) {
            return redirect()->route('main-page');
        } else {
            return redirect()
                            ->route('login')
                            ->with('authError', 'Неправильный логин или пароль!');
        }
    }

    //debug methods

    public function createFakeUser() {
        $flight = User::create([
            'name' => 'fakeUser',
            'email' => 'nikita@1.ru',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::createFromTimestamp(time())
                    ->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::createFromTimestamp(time())
                    ->format('Y-m-d H:i:s'),
            ]);
    }
    public function makeSql() {
       // $sql = DB::select("SELECT * FROM users WHERE id = 1");
     $sql = DB::table('users')->where('id', '1')->toSql();
        dump($sql);
    }

    public function logout() {
        Auth::logout();
	    return redirect()->route('main-page');
    }
}
