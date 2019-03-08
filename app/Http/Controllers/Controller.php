<?php

namespace App\Http\Controllers;
use \App\testimonials;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Send mail
     *
     * @param  mixed $view
     * @param  mixed $data
     * @param  mixed $subject
     *
     * @return void
     */
    public function mailSend($view, $data, $subject)
    {
        Mail::send($view, $data, function ($message)  use ($subject)
        {
            $message->from('jamie@jedesign.xyz', 'Jamie Evans');
            $message->to('jamie@jedesign.xyz', 'Jamie Evans');
            $message->subject($subject);
            $message->priority(3);
        });
    }

}

