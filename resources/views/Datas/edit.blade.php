@extends('datas.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="container p-3 my-3 bg-dark text-white text-center">
                    <h2>Edit "{{ $datas->actual_name }}" Unit </h2>
                </div>
                <form action="{{ url('datas/' . $datas->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="text" name="actual_name" id="actual_name" value="{{ $datas->actual_name }}"
                        class="form-control"></br>
                    <input type="text" name="short_name" id="short_name" value="{{ $datas->short_name }}"
                        class="form-control" placeholder="Enter Short Name"></br>
                    <input type="text" name="allow_decimal" id="allow_decimal" value="{{ $datas->allow_decimal }}"
                        class="form-control" placeholder="Enter Allow Decimal"></br>
                    <input type="submit" value="Update" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@stop
