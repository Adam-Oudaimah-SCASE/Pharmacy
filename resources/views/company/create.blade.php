@extends('/layouts.master')
@section('content')
<section id="main-content">
    <section class="wrapper" >
        <h3><i class="fa fa-angle-right"></i>إضافة شركة</h3>
        <div class="row mt" >
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb "><i class="fa fa-angle-right"></i> معلومات الشركة</h4>
                    <form class="form-horizontal style-form" action="{{route('company.store')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">اسم الشركة:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="col-sm-2 col-sm-2 control-label">الاسم الانكليزي</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="delegate_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">رقم الهاتف</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">العنوان </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">الموقع الالكتروني </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="web_site">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">البريد الالكتروني </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">الفاكس </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fax">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-theme">إضافة شركة </button>
                </form>
            </div>
        </div>
    </section>
</section>
@endsection