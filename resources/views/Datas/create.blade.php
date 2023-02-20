@extends('datas.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="container p-3 my-3 bg-dark text-white text-center">
                    <h2>Create New Unit</h2>
                </div>
                <form name="create_unit" action="{{ url('datas') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="text" name="actual_name" id="actual_name" class="form-control"
                        placeholder="Enter Actual Name"></br>
                    <input type="text" name="short_name" id="short_name" class="form-control"
                        placeholder="Enter Short Name"></br>
                    <input type="text" name="allow_decimal" id="allow_decimal" class="form-control"
                        placeholder="Enter Allow Decimal"></br>
                    <input type="submit" value="Save" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@stop
