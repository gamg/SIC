<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Repositories\ProfileRepository;
use Illuminate\Support\Facades\Session;

class ProfilesController extends Controller
{
    protected $profileRepo;

    public function __construct(ProfileRepository $profileRepo)
    {
        $this->profileRepo = $profileRepo;
    }

    public function getIndex()
    {
        return view('frontend.profiles.index');
    }

    public function postSave(Request $request)
    {
        if (!$request->has('password')){
            $data = $request->except('password');
        } else {
            $data = $request->all();
        }

        \Validator::make($data, [
            'name' => 'required|max:255',
            'email' => ['required', 'email', 'max:255',
                Rule::unique('users', 'email')->ignore(Auth::user()->id)],
            'password' => 'min:6|confirmed',
        ])->validate();

        $this->profileRepo->update(Auth::user(), $data);

        Session::flash('message', [
            'alert' => 'success',
            'text' => 'Data updated correctly.'
        ]);

        return redirect()->route('profiles.index');
    }
}
