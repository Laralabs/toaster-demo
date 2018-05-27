<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    public function generate()
    {
        $toaster = toaster();

        if (request()->has('position')) {
            $toaster->add('Example message one')->position(request()->get('position'));
        } else {
            if (request()->has('multiple')) {
                $theme = request()->get('theme');
                    $toaster->group('groupOne', ['animation_type' => request()->get('animation_type')])
                        ->add('Example message one')->$theme()
                        ->add('Example message two')->$theme()
                        ->group('groupTwo', ['animation_type' => request()->get('animation_type')])
                        ->position('bottom right')
                        ->add('Example message three')->$theme()
                        ->add('Example message four')->$theme();
            } else {
                $theme = request()->get('theme');
                $toaster->add('Example message')->$theme();
            }
        }

        return redirect('/');
    }
}
