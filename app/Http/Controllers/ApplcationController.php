<?php

namespace App\Http\Controllers;

use App\Application;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

/**
 * Class ApplcationController
 * @package App\Http\Controllers
 */
class ApplcationController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make(
            $request->all(),
            [
                'body'        => 'required|min:2',
                'region'      => 'required',
                'type'        => 'required',
                'school_name' => 'required',
                'image'       => 'required|image|mimes:jpeg, png, jpg,gif, svg| max:2048',
            ]
        );
    }

    public function index()
    {
        return view('users.apply');
    }

    public function store(Request $request)
    {
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = $this->validator($request);

        if ($validator->fails()) {
            // Error logic
        }

        $data = $validator->getData();
        $imageName = '';

        if (isset($data['image'])) {
            /** @var UploadedFile $image */
            $image = $data['image'];

            $imageName = Uuid::uuid4()->toString() . '.' . $image->extension();

            $image->move(public_path('uploads/images'), $imageName);
        }

        try {
            Application::query()->create(
                [
                    'user_id'     => auth()->id(),
                    'body'        => $data['body'],
                    'region'      => $data['region'],
                    'type'        => $data['type'],
                    'school_name' => $data['schoolname'],
                    'image'       => $imageName,
                ]
            );

        } catch (Exception $e) {
            return $e->getMessage();
        }

        return back()->with('status', "Application is sent successfully!");

    }
}
