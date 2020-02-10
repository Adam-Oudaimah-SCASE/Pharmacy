@extends('/layouts.master')
@section('content')
<section id="main-content">
    <section class="wrapper" dir="rtl">
        <h3><i class="fa fa-angle-right"></i>تعديل مستودع</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt" dir="rtl">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> معلومات المستودع</h4>
                    <form action="{{route('warehouse.update', $warehouse->id )}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="form-group" dir="rtl">
                            <label class="col-sm-2 col-sm-2 control-label">اسم المستودع:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{$warehouse->name}}">
                            </div>
                        </div>
                        <div class="form-group" dir="rtl">
                            <label class="col-sm-2 col-sm-2 control-label"> عنوان المستودع</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" value="{{$warehouse->address}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">رقم التواصل</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" value="{{$warehouse->phone}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">موعد الزيارة الأسبوعي </label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="weekly_date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">البريد الالكتروني </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{$warehouse->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">الفاكس </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fax" value="{{$warehouse->fax}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-theme">إضافة مستودع </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection