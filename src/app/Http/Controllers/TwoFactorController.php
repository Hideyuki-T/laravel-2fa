<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;

class TwoFactorController extends Controller
{
    // QRコードなど2FAセットアップ情報を表示する
    public function showSetUpForm()
    {
        $google2fa = new Google2FA();
        $appName = 'MyLaravel2FA'; // アプリ名
        $userEmail = 'hideyuki@tamai.com'; // ユーザーの識別子（通常はログインユーザーのメールアドレス）
        $secret = env('TWO_FACTOR_SECRET'); // 固定シークレット（またはユーザーごとに生成したもの）

        $qrCodeUrl = $google2fa->getQRCodeUrl(
            $appName,
            $userEmail,
            $secret
        );

        // QRコードURLをビューに渡す
        return view('2fa_setup', compact('qrCodeUrl'));
    }

    // OTP入力フォームを表示する
    public function showOtpForm()
    {
        return view('2fa'); // resources/views/2fa.blade.php にOTP入力フォームを配置
    }

    // ユーザーから送信されたOTPを検証する
    public function verifyOtp(Request $request)
    {
        $google2fa = new Google2FA();
        $secret = env('TWO_FACTOR_SECRET');
        $otp = $request->input('one_time_password');

        if ($google2fa->verifyKey($secret, $otp)) {
            // 認証成功ならセッションにフラグをセットしてウェルカムページへリダイレクト
            $request->session()->put('2fa_passed', true);
            return redirect()->intended('/');
        }

        // 認証失敗の場合は、エラーメッセージ付きで再度OTP入力画面を表示
        return back()->withErrors(['one_time_password' => '無効なコードです。']);
    }
}
