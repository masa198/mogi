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
            'name' => ['required','string','max:191'],
            'email' => ['required','email','string','max:191'],
            'password' => ['required','max:191','min:8'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前を文字列で入力して下さい',
            'name.max' => '名前を191文字以下で入力して下さい',
            'email.required' => 'メールアドレスを入力して下さい',
            'email.email' => '有効なメールアドレス形式を入力して下さい',
            'email.string' => 'メールアドレスを文字列で入力して下さい',
            'email.max' => 'メールアドレスを191文字以下で入力して下さい',
            'password.required' => 'パスワードを入力して下さい',
            'password.max' => 'パスワードを191文字以下で入力して下さい',
            'password.min' => 'パスワードを８文字以上で入力して下さい',
            // 'password.confirmed' => 'パスワードと確認パスワードが一致していません',
        ];
    }
}
