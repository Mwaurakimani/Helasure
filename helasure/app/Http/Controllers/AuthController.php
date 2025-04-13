<?php

    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;
    use Laravel\Jetstream\Jetstream;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Validator;
    use Laravel\Fortify\Contracts\CreatesNewUsers;
    use Illuminate\Validation\ValidationException;
    use App\Actions\Fortify\PasswordValidationRules;

    class AuthController extends Controller implements CreatesNewUsers {
        use PasswordValidationRules;

        /**
         * @throws ValidationException
         */
        public function login(Request $request): \Illuminate\Http\RedirectResponse
        {
            $credentials = $request->validate([
                                                  'email'    => 'required|email',
                                                  'password' => 'required'
                                              ]);

            if (!Auth::attempt($credentials, $request->remember)) {
                throw ValidationException::withMessages([
                                                            'email' => ['These credentials do not match our records.'],
                                                        ]);
            }

            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        public function logout(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login');
        }

        public function register(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
        {
            //TODO:Validate
            $user = $this->create($request->all());

            Auth::login($user);

            return redirect('/dashboard');
        }

        #[Override] public function create(array $input)
        {
            Validator::make($input, [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name'  => ['required', 'string', 'max:255',],
                'phone'      => ['required', 'string', 'max:255', 'unique:users'],
                'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password'   => $this->passwordRules(),
                'terms'      => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            ])->validate();

            return User::create([
                                    'first_name' => $input['first_name'],
                                    'last_name'  => $input['last_name'],
                                    'phone'      => $input['phone'],
                                    'email'      => $input['email'],
                                    'password'   => Hash::make($input['password']),
                                ]);
        }

    }
