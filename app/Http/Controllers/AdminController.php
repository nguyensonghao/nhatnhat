<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Storage;
use App\Vantaihang;


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
}
