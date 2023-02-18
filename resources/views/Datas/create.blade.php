@extends('datas.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Unit</div>
    <div class="card-body">
        <form action="{{url('datas')}}" method="post">
            {!! csrf_field() !!}
            <input type="text" name="actual_name" id="actual_name" class="form-control" placeholder="Enter Actual Name"></br>
            <input type="text" name="short_name" id="short_name" class="form-control" placeholder="Enter Short Name"></br>
            <input type="text" name="allow_decimal" id="allow_decimal" class="form-control" placeholder="Enter Allow Decimal"></br>
            <input type="submit" value="Save" class="btn btn-success">
            
        </form>
    </div>

</div>

@stop