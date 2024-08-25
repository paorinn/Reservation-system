<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)  
{  
    $validatedData = $request->validate([  
        'name' => 'required|string|max:10',  
        'email' => 'required|email|unique:users,email|max:50',  
        'password' => 'required|min:6|max:20',  
    ], [  
        'name.required' => '名前は必須です。',  
        'name.string' => '名前は文字列で入力してください。',  
        'name.max' => '名前は10文字以内で入力してください。',  
        'email.required' => 'メールアドレスは必須です。',  
        'email.email' => '有効なメールアドレスを入力してください。',  
        'email.unique' => 'このメールアドレスはすでに登録されています。',  
        'email.max' => 'メールアドレスは50文字以内で入力してください。',  
        'password.required' => 'パスワードは必須です。',  
        'password.min' => 'パスワードは6文字以上必要です。',  
        'password.max' => 'パスワードは20文字以内で入力してください。',  
    ]);  

    $user = User::create($validatedData);  

    return redirect()->route('login');  
}
}

