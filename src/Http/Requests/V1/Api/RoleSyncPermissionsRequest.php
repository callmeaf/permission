<?php

namespace Callmeaf\Permission\Http\Requests\V1\Api;

use Callmeaf\User\Enums\UserStatus;
use Callmeaf\User\Enums\UserType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class RoleSyncPermissionsRequest extends FormRequest
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
        return validationManager(rules: [
            'permissions_ids' => ['array'],
            'permissions_ids.*' => [Rule::exists(config('callmeaf-permission.model'),'id')],
        ],filters: config("callmeaf-role.validations.sync_permissions"));
    }

}
