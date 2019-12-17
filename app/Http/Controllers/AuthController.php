<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
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
     * @return /loginにリダイレクト
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
            return redirect()->back()->with('message', $msg);
        }
        // ログイン処理
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('top');
        } else {
            $msg = 'ログインに失敗しました。';
            return redirect()->back()->with('message', $msg);
        }
    }

    /**
     * 新規会員登録関数
     *
     * @param Request $request
     * @return /topにリダイレクト
     *
     * @author Gori
     */
    public function signup(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:255',
            'name' => 'required|string|max:100',
            'postal_code' => 'required|int',
            'prefectures' => 'required|string',
            'street_address' => 'required|string|min:1|max:20',
            'account_name' => 'required|string|min:1|max:20',
        ]);

        if ($validator->fails()) {
            $msg = '値が不正です。';
            return redirect()->back()->withErrors($validator->errors())->withInput($req->all)->with('message', $msg);;
        }

        $userCode = $this->createUserCode();
        $password = md5($req->password);
        $user = User::create([
            'user_code'      => $userCode,
            'email'          => $req->email,
            'password'       => $password,
            'name'           => $req->name,
            'postal_code'    => $req->postal_code,
            'prefectures'    => $req->prefectures,
            'street_address' => $req->street_address,
            'account_name'   => $req->account_name,
        ]);

        // ログイン処理
        Auth::login($user);

        return redirect()->route('top');
    }

    public function redirectTo($provider)
    {
        // Googleへのリダイレクト
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $pUser = Socialite::driver($provider)->stateless()->user();
        // email が合致するユーザーを取得
        $user = User::where('email', $pUser->getEmail())->first();
        if ($user) {
            // ログイン処理
            Auth::login($user);
            return redirect()->route('top');
        } else {
            // ユーザコードの生成
            $userCode = $this->createUserCode();
            // 見つからなければ新しくユーザーを作成
            $user = $this->createUserByProvider($pUser, $userCode);
            Auth::login($user);
            return redirect()->route('top');
        }
    }

    /**
     * Google で新規会員登録関数
     *
     * @param [type] $gUser
     * @param [type] $userCodes
     * @return $user
     *
     * @author Gori
     */
    public function createUserByProvider($pUser, $userCode)
    {
        $user = User::create([
            'user_code'      => $userCode,
            'name'           => $pUser->name,
            'email'          => $pUser->email,
            'password'       => Hash::make(uniqid()),
            'postal_code'    => '',
            'prefectures'    => '',
            'street_address' => '',
            'account_name'   => '',
        ]);

        return $user;
    }

    /**
     * ログアウト関数
     *
     * @return /loginにリダイレクト
     *
     * @author Gori
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }

    /**
     * ユーザコード生成関数
     *
     * @return $userCode
     *
     * @author Gori
     */
    public function createUserCode()
    {
        // 999F99999の作成
        $year = str_pad(date('y'), 3, 0, STR_PAD_LEFT);
        $month = strtoupper(dechex(date('n')));
        $cnt = User::where('user_code', 'LIKE', "$year%")->count();
        if ($cnt === 0) {
            $num = str_pad(1, 5, 0, STR_PAD_LEFT);
        } else {
            $num = str_pad($cnt + 1, 5, 0, STR_PAD_LEFT);
        }
        $userCode = $year . $month . $num;

        return $userCode;
    }
}
