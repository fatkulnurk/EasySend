<?php

namespace App\Http\Controllers;

use App\Enum\PaginationEnum;
use App\Formatter\ApiFormaterSuccess;
use App\Formatter\ApiFormatterFailed;
use App\Http\Requests\Api\Shipper\OrderStore;
use App\Order;
use App\OrderLine;
use App\Shipper;
use App\SuratJalan;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // https://www.itsolutionstuff.com/post/laravel-order-by-relationship-sum-column-exampleexample.html
        $orders = Order::with(['orderLine', 'suratJalan', 'shipper', 'shipperAkun'])
            ->addSelect([
            'jumlah_truk_order_line' => OrderLine::selectRaw('sum(jumlah_truck) as total')
                ->whereColumn('order_id', 'order.id')
                ->groupBy('order_id')
            ])->where('shipper_id', $request
                ->query('shipper_id'))
            ->where('akun_shipper_id', $request
                ->query('akun_shipper_id'))
            ->paginate(PaginationEnum::DEFAULT())
            ->get();

        return response()
            ->json(ApiFormaterSuccess::make($orders), 200);
    }

    public function store(OrderStore $request)
    {
        try {
            $shipper = Shipper::findOrFail($request->shipper_id);
            $suratJalan = SuratJalan::findOrFail($request->surat_jalan_id);
        } catch (\Exception $exception) {
            return ApiFormatterFailed::make($exception->getMessage());
        }

        $order = new Order();
        $order->barang = $request->order;
        $order->harga = $request->harga;
        $order->valid = $request->valid;

        $order->shipper()->associate($shipper);
        $order->suratJalan()->associate($suratJalan);

        $order->save();

        return response()->json(ApiFormaterSuccess::make($order, 'Order Success'), 200);
    }

    public function show(Request $request, $id)
    {
        $order = Order::with(['orderLine', 'suratJalan', 'shipper', 'shipperAkun'])
            ->where('shipper_id', $request
                ->query('shipper_id'))
            ->where('akun_shipper_id', $request
                ->query('akun_shipper_id'))
            ->where('id', $id)
            ->first();

        return response()
            ->json(ApiFormaterSuccess::make($order), 200);
    }

    public function update(Request $request, $id)
    {

    }

    public function delete(Request $request, $id)
    {
        $order = Order::destroy($id);
        if ($order) {
            return response()->json(ApiFormaterSuccess::makeWithOutData('Delete Success'), 200);
        }

        return response()->json(ApiFormatterFailed::make('Delete failed, order id '. $id .' not found.'));
    }
}
