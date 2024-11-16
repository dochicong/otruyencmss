
@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            Quản lý Truyện Tranh
            <small>Bảng điều khiển</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Số liệu tổng quan</h3>
                </div>
                <div class="box-body">
                    <p>Tổng số truyện tranh: {{ App\Models\Comic::count() }}</p>
                    <p>Tổng số chương: {{ App\Models\Chapter::count() }}</p>
                    <p>Tổng số tác giả: {{ App\Models\Author::count() }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
