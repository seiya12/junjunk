<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;
use Socialite;
use Hash;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * ログイン関数
     *
     * @param Request $request
     * @return view($msg)
     *
     * @author Gori
     */
    public function login(Request $req)
    {
        $email = $req->email;
        $password = $req->password;

        $valid = Validator::make($req->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);

        if ($valid->fails()) {
            $msg = '値が不正です。';
            return redirect()->route('login')->with('message', $msg);
        }

        $user = User::where('email', $email)->first();
        if ($user) {
            // ログイン処理
            Auth::login($user);
            $msg = 'ようこそ ' . Auth::getUser()->name . 'さん';
            return redirect()->route('top')->with('message', $msg);
        } else {
            $msg = 'ログインに失敗しました。';
            return redirect()->route('login')->with('message', $msg);
        }
    }

    /**
     * 新規登録関数
     *
     * @param Request $request
     * @return view($msg)
     *
     * @author Gori
     */
    public function signup(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:255|confirmed',
            'password_confirmation' => 'required|string|min:8|max:255',
        ]);

        if ($validator->fails()) {
            $msg = '値が不正です。';
            return redirect()->route('signup')->with('message', $msg);
        }

        $user = User::create([
            'name'     => $req->name,
            'email'    => $req->email,
            'password' => $req->password,
        ]);

        // ログイン処理
        Auth::login($user);
        $msg = 'ようこそ ' . Auth::getUser()->name . 'さん';
    }

    public function redirectToGoogle()
    {
        // Googleへのリダイレクト
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $gUser = Socialite::driver('google')->stateless()->user();
        // email が合致するユーザーを取得
        $user = User::where('email', $gUser->getEmail())->first();
        if ($user) {
            // ログイン処理
            Auth::login($user);
            $msg = 'ようこそ ' . Auth::getUser()->name . 'さん';
            return redirect()->route('top')->with('message', $msg);
        } else {
            // 見つからなければ新しくユーザーを作成
            $user = $this->createUserByGoogle($gUser);
            Auth::login($user);
            $msg = 'ようこそ ' . Auth::getUser()->name . 'さん';
            return redirect()->route('top')->with('message', $msg);
        }
    }

    public function createUserByGoogle($gUser)
    {
        $user = User::create([
            'name'     => $gUser->name,
            'email'    => $gUser->email,
            'password' => Hash::make(uniqid()),
        ]);
        return $user;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('signup');
    }
}
