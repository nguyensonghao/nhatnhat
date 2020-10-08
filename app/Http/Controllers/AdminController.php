<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
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

    public function showSetUpNoti() {
        return view('admin.thongbao');
    }

    public function showSetupBanggia() {
        return view('admin.banggia');
    }

    public function showSetupChinhSach() {
        return view('admin.chinhsach');
    }

    public function showLogin() {
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
}
