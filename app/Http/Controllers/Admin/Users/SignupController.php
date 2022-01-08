<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Users\SignUpService;

class SignupController extends Controller
{
    protected $signupService;

    public function __construct(SignUpService $signupService)
    {
        $this->signupService=$signupService;
    }

    public function index()
    {
        return view('admin.users.signup', [
            'title' => 'Đăng ký'
        ]);
    }

    public function store(Request $request)
    {
        $this->signupService->create($request);

        return redirect()->route('login');
    }
}
