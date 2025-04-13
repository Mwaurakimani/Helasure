<?php

    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;

    class UserController extends Controller {
        public function updateUserProfile(Request $request, User $user): \Illuminate\Http\RedirectResponse
        {
            $user->update($request->all());

            return redirect()->back()->with([
                                                'status'  => 'success',
                                                'message' => 'User updated successfully',
                                            ]);
        }


        public function updateUserPassword(Request $request, User $user): \Illuminate\Http\RedirectResponse
        {
            $user->update([
                              'password' => bcrypt($request->get('new_password')),
                          ]);

            return redirect()->back()->with([
                                                'status'  => 'success',
                                                'message' => 'User updated successfully',
                                            ]);
        }

        public function deleteUserAccount(Request $request, User $user): \Illuminate\Http\RedirectResponse
        {
            $user->delete();
            return redirect()->back();
        }
    }
