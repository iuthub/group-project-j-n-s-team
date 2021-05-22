<?php

namespace App\Http\Controllers;

use Exception;

use App\User;
use App\Application;
use App\School;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function school_validator(Request $request): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make(
            $request->all(),
            [
                'school_name'     => 'required',
                'address'         => 'required',
                'teachers_number' => 'required|numeric',
                'pupils_number'   => 'required|numeric',
                'website'         => 'required|unique:schools,website',
                'image'           => '|image|mimes:jpeg, png, jpg,gif, svg| max:2048'
            ]
        );
    }


    public function index()
    {
        $users = User::paginate(5);

        return view('admin.dashboard', compact('users'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function edit($id)
    {
        $data = Application::find($id);
        return view('admin.editapply', compact('data'));
    }

    // application update
    public function update(Request $request, $id)
    {
        $request->validate([
            'body'       => 'required|min:2',
            'region'     => 'required',
            'type'       => 'required',
            'schoolname' => 'required',
        ]);

        $data = Application::find($id);
        $data->body = $request->body;
        $data->region = $request->region;
        $data->type = $request->type;
        $data->schoolname = $request->schoolname;
        $data->save();
        return redirect()->route('admin.dashboard')->with('success', "Updated Successfully!");
    }

    // delete application
    public function delete($id)
    {
        Application::where('id', $id)->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Post deleted successfully!');
    }

    // show the users list without applications
    public function userlist()
    {
        $users = User::latest()->paginate(5);
        return view('admin.userlist', compact('users'));
    }

    public function users()
    {
        $users = User::all();
        return response()->json(compact('users'));
    }

    //user edit
    public function useredit($id)
    {
        $data = User::find($id);
        return view('admin.useredit', compact('data'));

    }

    public function userupdate(Request $request, $id)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required',
            'username' => 'required'
        ]);
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->username = $request->username;
        $data->is_admin = $request->role;
        $data->save();
        return redirect()->route('admin.list')->with('success', 'User updated succesfully!');

    }

    //user delete
    public function userdelete($id)
    {
        User::where('id', $id)->delete();

        return redirect()->route('admin.dashboard')->with('success', 'User deleted succesfully!');
    }

    //Schools
    public function schools()
    {
        $schools = School::all();
        return view('admin.schools', ['schools' => $schools]);
    }

    public function edit_school_page($id)
    {
        $school = School::find($id);
        return view('admin.edit-school', ['school' => $school]);
    }

    public function add_school(Request $request)
    {
//        dd(
//            $request->all()
//        );
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = $this->school_validator($request);

        if ($validator->fails()) {
            //Logic
        }

        $data = $validator->getData();
        $imageName = '';
        if (isset($data['image'])) {
            /** @var UploadedFile $image */
            $image = $data['image'];

            $imageName = Uuid::uuid4()->toString() . '.' . $image->extension();

            $image->move(public_path('images/schools'), $imageName);
        }

        try {
            School::create([
                'school_name'     => $data['school_name'],
                'address'         => $data['address'],
                'teachers_number' => $data['teachersnumber'],
                'pupils_number'   => $data['pupilsnumber'],
                'website'         => $data['website'],
                'image'           => $imageName,
            ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return redirect()->route('admin.dashboard')->with('success', 'School added');
    }

    public function update_school(Request $request, $id)
    {

        /** @var \Illuminate\Validation\Validator $validator */
        $validator = $this->school_validator($request);

        if ($validator->fails()) {
            //Logic
        }

        $data = $validator->getData();
        $imageName = '';
        if (isset($data['image'])) {
            /** @var UploadedFile $image */
            $image = $data['image'];

            $imageName = Uuid::uuid4()->toString() . '.' . $image->extension();

            $image->move(public_path('images/schools'), $imageName);
        }
        $school = School::updateOrCreate(
            ['id' => $id],
            [
                'school_name'     => $data['school_name'],
                'address'         => $data['address'],
                'teachers_number' => $data['teachers_number'],
                'pupils_number'   => $data['pupils_number'],
                'website'         => $data['website'],
            ]
        );
        if ($imageName != '') {
            $school->image = $imageName;
            $school->save();
        }

        return redirect()->route('admin.dashboard')->with('success', 'School added');
    }

    public function delete_school($id)
    {
        School::where('id', $id)->delete();
        return redirect()->route('admin.dashboard')->with('success', 'School deleted');
    }


}
