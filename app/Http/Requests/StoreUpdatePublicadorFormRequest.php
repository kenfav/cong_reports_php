<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePublicadorFormRequest extends FormRequest
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
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'nombre' => ['required', 'string', 'max:50', 'min:3'],
      'fecha_de_bautismo' => ['nullable', 'date'],
      'fecha_nacimiento' => ['required', 'date'],
      'otras_ovejas' => ['required', 'integer'],
      'anciano' => ['required', 'integer'],
      'siervo_ministerial' => ['required', 'integer'],
      'precursor' => ['required', 'integer'],
    ];
  }
}
