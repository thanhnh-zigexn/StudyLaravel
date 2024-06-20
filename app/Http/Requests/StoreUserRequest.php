<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|required_with:password|same:password',

        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=> 'Phải bắt buộc nhập tên.',
            'name.max' => 'Tên phải chứa nhất 50 ký tự.',
            'email.required' => 'Phải bắt buộc nhập email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại trong hệ thống.',
            'password.required' => 'Phải bắt buộc nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự.',
            'confirm_password.same' => 'Mật khẩu xác nhận không khớp với mật khẩu mới.', 
            'confirm_password.required' => 'Phải bắt buộc nhập mật khẩu xác nhận.',


        ];
    }
}
