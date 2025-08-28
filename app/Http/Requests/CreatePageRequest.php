<?php

namespace Modules\Ipage\Http\Requests;

use Imagina\Icore\Http\Request\CoreFormRequest;
use Illuminate\Contracts\Validation\Validator;

class CreatePageRequest extends CoreFormRequest
{
    public function rules(): array
    {
        return [];
    }

    public function translationRules(): array
    {
        return [
            'title' => 'required',
            'slug' => ['required', 'alpha_dash:ascii'],
            'body' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [

        ];
    }

    public function translationMessages(): array
    {
        return [
            'title.required' => itrans('ipage::pages.validation.titleIsRequired'),
            'slug.required' => itrans('ipage::pages.validation.slugIsRequired'),
            'body.required' => itrans('ipage::pages.validation.bodyIsRequired'),
        ];
    }

    public function getValidator(): Validator
    {
        return $this->getValidatorInstance();
    }

}
