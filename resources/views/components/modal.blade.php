<?php
    $storage = \App\Storage::where('key', 'noti')->first();
    if ($storage) {
        $noti = $storage->value;
        if ($noti) {
            $noti = json_decode($noti);
        }
    }
?>

@if($noti && $noti->isShow)
    <div id="modal">
        <div class="modal-container">
            <div class="modal-header">
                <p>Thông báo</p>
            </div>
            <div class="modal-content">
                {!! $noti->content !!}
            </div>
            <div class="modal-footer">
                <button class="btn btn-close">Đóng</button>
            </div>
        </div>
    </div>
@endif
