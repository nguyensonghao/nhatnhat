<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Payment;
use App\Storage;
use App\Vantaihang;
use App\Thongtinkho;


class AdminController extends Controller
{
    public function showListMVD() {
        $list = Vantaihang::all();
        return view('admin.index')->with('list', $list);
    }

    public function showAddMVD() {
        return view('admin.them-mvd');
    }

    public function actionAddMVD(Request $request) {
        $mvd = new Vantaihang();
        $mvd->name = $request['name'];
        $mvd->link = $request['link'];
        if ($mvd->save()) {
            return back()->with('success', 'Thêm mã vận đơn thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình thêm mã vận đơn.');
        }
    }

    public function showSetupBanggia() {
        $nofi = Storage::where('key', 'banggia')->first();
        $content = '';
        if ($nofi) {
            $content = $nofi->value;
        }
        return view('admin.banggia')->with('content', $content);
    }

    public function actionSetupBanggia(Request $request) {
        $storage = Storage::where('key', 'banggia')->first();
        if (!$storage) {
            $storage = new Storage();
        }

        $storage->key = 'banggia';
        $storage->value = $request['content'];
        if ($storage->save()) {
            return back()->with('success', 'Chỉnh sửa bảng giá thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình chỉnh sửa bảng giá.');
        }
    }

    public function showSetupChinhSach() {
        $nofi = Storage::where('key', 'chinhsach')->first();
        $content = '';
        if ($nofi) {
            $content = $nofi->value;
        }
        return view('admin.chinhsach')->with('content', $content);
    }

    public function showLogin() {
//        $user = new User();
//        $user->name = 'Admin';
//        $user->email = 'admin@gmail.com';
//        $user->password = Hash::make('123456');
//        $user->save();
        return view('admin.login');
    }

    public function actionLogin(Request $request) {
        if (Auth::attempt([
            'email' => $request['email'],
            'password' => $request['password']
        ])) {
            return redirect('admin/');
        } else {
            return back()->with('error', 'Email hoặc mật khẩu không chính xác.');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('admin/login');
    }

    public function removeMVD($id) {
        $mvd = Vantaihang::find($id);
        $mvd->delete();
        return back();
    }

    public function showEditMVD($id) {
        $mvd = Vantaihang::find($id);
        return view('admin.chinhsua-mvd')->with('mvd', $mvd);
    }

    public function actionEditMVD(Request $request) {
        $id = $request['id'];
        $mvd = Vantaihang::find($id);
        $mvd->name = $request['name'];
        $mvd->link = $request['link'];
        if ($mvd->save()) {
            return back()->with('success', 'Chỉnh sửa mã vận đơn thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình chỉnh sửa mã vận đơn.');
        }
    }

    public function showSetUpNoti() {
        $nofi = Storage::where('key', 'noti')->first();
        $value = null;
        if ($nofi) {
            $value = $nofi->value;
            $value = json_decode($value);
        }
        return view('admin.thongbao')->with('noti', $value);
    }

    public function actionSetUpNoti(Request $request) {
        $isShow = $request['show-noti'];
        $content = $request['content'];
        $storage = Storage::where('key', 'noti')->first();
        if (!$storage) {
            $storage = new Storage();
        }

        $storage->key = 'noti';
        $storage->value = json_encode([
            'isShow' => $isShow,
            'content' => $content
        ]);

        if ($storage->save()) {
            return back()->with('success', 'Chỉnh sửa thông báo thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình chỉnh sửa thông báo.');
        }
    }

    public function actionSetupChinhSach(Request $request) {
        $storage = Storage::where('key', 'chinhsach')->first();
        if (!$storage) {
            $storage = new Storage();
        }

        $storage->key = 'chinhsach';
        $storage->value = $request['content'];
        if ($storage->save()) {
            return back()->with('success', 'Chỉnh sửa chính sách thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình chỉnh sửa chính sách.');
        }
    }

    public function showSetupGioiThieu() {
        $nofi = Storage::where('key', 'gioithieu')->first();
        $content = '';
        if ($nofi) {
            $content = $nofi->value;
        }
        return view('admin.gioithieu')->with('content', $content);
    }

    public function actionSetupGioiThieu(Request $request) {
        $storage = Storage::where('key', 'gioithieu')->first();
        if (!$storage) {
            $storage = new Storage();
        }

        $storage->key = 'gioithieu';
        $storage->value = $request['content'];
        if ($storage->save()) {
            return back()->with('success', 'Chỉnh sửa giới thiệu thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình chỉnh sửa giới thiệu.');
        }
    }

    public function showSetupGeneral() {
        $nofi = Storage::where('key', 'thongtinchung')->first();
        $value = (object) [
            'hotline' => '',
            'facebook' => '',
            'zalo' => '',
            'email' => ''
        ];
        try {
            if ($nofi) {
                $value = json_decode($nofi->value);
            }
        } catch (Exception $e) {
        }

        return view('admin.thongtinchung')->with('general', $value);
    }

    public function actionSetupGeneral(Request $request) {
        $storage = Storage::where('key', 'thongtinchung')->first();
        if (!$storage) {
            $storage = new Storage();
        }

        $storage->key = 'thongtinchung';
        $storage->value = json_encode([
            'hotline' => $request['hotline'],
            'facebook' => $request['facebook'],
            'zalo' => $request['zalo'],
            'email' => $request['email']
        ]);

        if ($storage->save()) {
            return back()->with('success', 'Chỉnh sửa thông tin chung thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình chỉnh sửa thông tin chung.');
        }
    }

    public function showListThongTinKho() {
        $list = Thongtinkho::all();
        return view('admin.thongtinkho')->with('list', $list);
    }

    public function showAddThongTinKho() {
        return view('admin.them-thongtinkho');
    }

    public function actionAddThongTinKho(Request $request) {
        $kho = new Thongtinkho();
        $kho->name = $request['name'];
        $kho->email = $request['email'];
        $kho->address = $request['address'];
        $kho->phone = $request['phone'];
        if ($kho->save()) {
            return back()->with('success', 'Thêm thông tin kho thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình thêm thông tin kho.');
        }
    }

    public function showEditThongTinKho($id) {
        $kho = Thongtinkho::find($id);
        return view('admin.chinhsua-thongtinkho')->with('kho', $kho);
    }

    public function actionEditThongTinKho(Request $request) {
        $id = $request['id'];
        $kho = Thongtinkho::find($id);
        $kho->name = $request['name'];
        $kho->email = $request['email'];
        $kho->address = $request['address'];
        $kho->phone = $request['phone'];
        if ($kho->save()) {
            return back()->with('success', 'Chỉnh sửa thông tin kho thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình chỉnh sửa thông tin kho.');
        }
    }

    public function removeThongTinKho($id) {
        $mvd = Thongtinkho::find($id);
        $mvd->delete();
        return back();
    }

    public function showListThongTinThanhToan() {
        $list = Payment::all();
        return view('admin.nganhang')->with('list', $list);
    }

    public function showAddThongTinThanhToan() {
        return view('admin.them-nganhang');
    }

    public function actionAddThongTinThanhToan(Request $request) {
        $payment = new Payment();
        $payment->name = $request['name'];
        $payment->owner = $request['owner'];
        $payment->stk = $request['stk'];
        $payment->chinhanh = $request['chinhanh'];
        if ($payment->save()) {
            $fileName = 'payment_' . $payment->id . '.png';
            $request->file('image')->move(public_path('uploads'), $fileName);
            return back()->with('success', 'Thêm thông tin thanh toán thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình thêm thông tin thanh toán.');
        }
    }

    public function showEditThongTinThanhToan($id) {
        $payment = Payment::find($id);
        return view('admin.chinhsua-nganhang')->with('payment', $payment);
    }

    public function actionEditThongTinThanhToan(Request $request) {
        $id = $request['id'];
        $payment = Payment::find($id);
        $payment->name = $request['name'];
        $payment->owner = $request['owner'];
        $payment->stk = $request['stk'];
        $payment->chinhanh = $request['chinhanh'];
        if ($payment->save()) {
            if ($request->hasFile('image')) {
                $fileName = 'payment_' . $payment->id . '.png';
                $request->file('image')->move(public_path('uploads'), $fileName);
            }
            return back()->with('success', 'Chỉnh sửa thông tin thanh toán thành công.');
        } else {
            return back()->with('error', 'Có lỗi trong quá trình chỉnh sửa thông tin thanh toán.');
        }
    }

    public function removeThongTinThanhToan($id) {
        $mvd = Payment::find($id);
        $mvd->delete();
        return back();
    }
}
