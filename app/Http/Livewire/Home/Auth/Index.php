<?php

namespace App\Http\Livewire\Home\Auth;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Acces;
use App\Models\Permission;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use App\Models\VerificationCode;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Hamcrest\Thingy;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{

    public $readyToLoad = false;
    public $readyToLoadRegister = false;

    public $error;
    public $sendSMSMessage;

    public User $user;

    public function mount()
    {
        $this->user = new User();
    }

    protected $rules = [
        'user.mobile' => ['required', 'numeric', 'digits:11'],
        'user.code' => ['nullable', 'string'],
        'user.name' => ['nullable', 'string', 'max:255'],
        'user.pass' => ['nullable', 'confirmed', 'min:8'],
        'user.pass_confirmation' => ['nullable', 'min:8'],
    ];


    public function store()
    {
        $this->validate();
        $verificationCode = VerificationCode::where('mobile', $this->user->mobile)->first();
        if (!$verificationCode){
            $verificationCode = VerificationCode::create([
                'mobile'=>$this->user->mobile,
                'code'=>random_int(999, 10000),
                'time'=>Carbon::now()->addMinutes(1)
            ]);
        }
        elseif (Carbon::now() > $verificationCode->time){
            $verificationCode->update([
                'code'=>random_int(999, 10000),
                'time'=>Carbon::now()->addMinutes(1)
            ]);
        }
//        $this->sendSMS($verificationCode, $this->user->mobile);
        $this->sendSMSMessage = 'کد تایید به شماره ' . $this->user->mobile . ' ارسال شد' . '<p>کد تایید: ' . $verificationCode->code .'</p>';
        $this->readyToLoad = true;
        $this->rules['user.code'] = ['required'];
        $this->validate();
        $verification_code = VerificationCode::where([
            'mobile'=>$this->user->mobile,
            'code'=>$this->user->code,
        ])->where('time', '>', Carbon::now())->first();
        if (User::where('mobile', $this->user->mobile)->first()){
            $user = User::where('mobile', $this->user->mobile)->first();
            if ($verification_code){
                $this->readyToLoadRegister = false;
                Auth::login($user);
                return redirect()->intended(RouteServiceProvider::HOME);
            }
            else
                $this->error = 'کد تایید اشتباه است';
        }
        else{
            $this->readyToLoadRegister = true;
            $this->rules['user.name'] = ['required'];
            $this->rules['user.pass'] = ['required'];
            $this->rules['user.mobile'] = ['unique:users,mobile'];
            $this->validate();
            $data = $this->user->getAttributes();
            $data['password'] = Hash::make($this->user->pass);
            if ($verification_code){
                if (User::count() == 0){
                    $role = Role::create([
                        'name'=>'مدیر',
                        'latinName'=>'admin'
                    ]);
                    $data['role_id'] = $role->id;
                }
                $user = User::create($data);
                Permission::store('user', 'کاربران');
                $profile = new Profile();
                $user->profile()->save($profile);
                Auth::login($user);
                return redirect()->intended(RouteServiceProvider::HOME);
            }
            else
                $this->error = 'کد تایید اشتباه است';
        }
    }

    public function render()
    {
        return view('livewire.home.auth.index')->layout('layouts.app');
    }
}
