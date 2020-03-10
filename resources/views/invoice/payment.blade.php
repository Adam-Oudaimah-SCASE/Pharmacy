@extends('layouts.master')
@section('content')
<section id="main-content">
    <section class="wrapper" >
        <h3><i class="fa fa-angle-right"></i>استكمال دفع الفاتورة</h3>
        <div class="row mt" dir="rtl">
            <div class="col-lg-12">
                <div class="form-panel ">
                  <div class="invoice-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">رقم الفاتورة</th>
                                <th class="text-center">قيمة الفاتورة</th>
                                <th class="text-center">المبلغ المدفوع</th>
                                <th class="text-center">المبلغ الباقي</th>

                            </tr>
                        </thead>
                        <tbody >

                            <tr>
                                <td class="text-center">{{ $invoice->id }}</td>
                                <td class="text-center">{{ $invoice->sell_price }}</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>

                            </tr>

                        </tbody>
                    </table>
                    <br>
                    <br>
                    <hr style="border-top-color:#99999980">
                    <div class="form-group " dir="rtl">
                        <label class="col-sm-3 col-sm-3 control-label">المبلغ المراد دفعه حالياً</label>
                        <div class="col-sm-7">
                         <input type="text" class="form-control" id="amount">
                        </div>
                        <button type="submit" class="btn btn-theme col-sm-2 col-sm-2" id="submit_receive">إضافة</button>
                    </div>
                    <br>

                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
