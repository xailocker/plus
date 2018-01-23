<?php

declare(strict_types=1);

namespace Zhiyi\Plus\Packages\TestGroupWorker\API\Requests;

class BindGitHubAccessRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function rules(): array
    {
        return [
            'login' => 'required|string',
            'password' => 'required|string',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function messages()
    {
        return [
            'login.required' => '请输入 GotHub 账号',
            'login.string' => 'GitHub 账号必须是字符串',
            'password.required' => '请输入 GitHub 密码',
            'password.string' => '密码必须是字符串',
        ];
    }
}
