<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class ChatComponentController extends Controller
{
    /**
     * create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    /**
     * View Chat 
     *  
     * @return mixed
     */
    public function viewChat(): mixed
    {
        try {
            return view(
                'admin.pages.chat.chat'
            );
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }
}
