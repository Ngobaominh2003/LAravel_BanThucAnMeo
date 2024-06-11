<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonHang;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ThongKeController extends Controller
{
    public function index(Request $request)
    {
        $date = $request->input('date', Carbon::today()->toDateString());

        $totalOrders = DonHang::whereDate('ngay_dat_hang', $date)->count();
        $pendingOrders = DonHang::where('trang_thai', 'pending')->whereDate('ngay_dat_hang', $date)->count();
        $cancelledOrders = DonHang::where('trang_thai', 'cancelled')->whereDate('ngay_dat_hang', $date)->count();
        $completedOrders = DonHang::where('trang_thai', 'completed')->whereDate('ngay_dat_hang', $date)->count();

        // Get data for the last 7 days
        $dates = [];
        $ordersData = [];
        $revenueData = [];
        for ($i = 6; $i >= 0; $i--) {
            $currentDate = Carbon::today()->subDays($i)->toDateString();
            $dates[] = $currentDate;
            $ordersData[] = DonHang::whereDate('ngay_dat_hang', $currentDate)->count();
            $revenueData[] = DonHang::whereDate('ngay_dat_hang', $currentDate)->sum('tong_gia');
        }

        return view('admin.ThongKe.ThongKe', compact('totalOrders', 'pendingOrders', 'cancelledOrders', 'completedOrders', 'date', 'dates', 'ordersData', 'revenueData'));
    }
}

