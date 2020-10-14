<?php
    $general = \App\Storage::where('key', 'thongtinchung')->first();
    $hotline = '096.247.1688';
    $email = 'truongtinlogistics@gmail.com';
    $facebook = '';
    if ($general && $general->value) {
        $config = json_decode($general->value);
        try {
            $hotline = $config->hotline;
            $email = $config->email;
            $facebook = $config->facebook;
        } catch (Exception $e) {

        }
    }
?>

<div class="header-top header-top-wrapper">
    <div class="container">
        <div class="row">
            <div class="header-top-left col-12 col-md-6">
                <div class="hotline">
                    <i class="bx bx-support"></i>
                    <p>Hotline: <span>{{$hotline}}</span></p>
                </div>
                <div class="hotline">
                    <i class="bx bx-support"></i>
                    <p>Email: <span>{{$email}}</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
