<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;

class WebPagesController extends Controller
{

    /**
     * | Index Page
     */
    public function index()
    {
        $hospitalId = Config::get('constants.HOSPITAL_ID');
        $cryptedId = Crypt::encrypt($hospitalId);
        $onlineAppointUrl = Config::get('constants.APPOINTMENT_URL');
        $appointmentUrl = "$onlineAppointUrl/$cryptedId";
        return view('web-views/index', [
            'appointmentUrl' => $appointmentUrl
        ]);
    }

    /**
     * | About Us Page
     */
    public function about()
    {
        return view('web-views/about');
    }

    /**
     * | Service Page
     */
    public function service()
    {
        return view('web-views/service');
    }

    /**
     * | Education Page
     */
    public function education()
    {
        return view('web-views/education');
    }
    /**
     * | Schedule Page
     */
    public function schedule()
    {
        return view('web-views/schedule');
    }
    public function blogs()
    {
        return view('web-views/blogs');
    }
    public function studymaterial()
    {
        return view('web-views/studymaterial');
    }
}
