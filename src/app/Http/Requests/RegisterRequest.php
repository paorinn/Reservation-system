<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:10',
            'email' => 'required|email|unique:users,email|max:50',
            'password' => 'required|min:6|max:20',
        ];
    }

    public function messages ()
    {
        return [
            'name.required' => '名前は必須です。',
            'name.string' => '名前は文字列で入力してください。',
            'name.max' => '名前は１０文字以内で入力してください。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => '有効なメールアドレスを入力してください。',
            'email.unique' => 'このメールアドレスはすでに登録されています。',
            'email.max' => 'メールアドレスは５０文字以内で入力してください。',
            'password.required' => 'パスワードは必須です。',
            'password.min' => 'パスワードは６文字以上必要です。',
            'password.max' => 'パスワードは２０文字以内で入力してください。',
        ];
    }
}
