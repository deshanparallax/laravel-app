@extends('datas.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="container p-3 my-3 bg-dark text-white text-center">
                    <h2>Welcome to Parallax Technologies</h2>
                </div>
                <div class="container text-center">
                    <img src="{{ URL::asset('Parallax-logo.png') }}">
                </div>
                <div>
                    <a href="{{ url('/datas/create') }}" class="btn btn-primary btn-lg" title="Add Unit"><i
                            class="fa-solid fa-circle-plus"></i> Add Unit</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Actual Name</th>
                                    <th>Short Name</th>
                                    <th>Allow Decimal</th>
                                    <th>Base Unit id</th>
                                    <th>Base Unit Multiplier</th>
                                    <th>Base Unit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->actual_name }}</td>
                                        <td>{{ $item->short_name }}</td>
                                        <td>{{ $item->allow_decimal }}</td>
                                        <td class="text-muted"><i>Not Developed</i></td>
                                        <td class="text-muted"><i>Not Developed</i></td>
                                        <td class="text-muted"><i>Not Developed</i></td>
                                        <td>
                                            <a href="{{ url('/datas/' . $item->id . '/edit') }}" title="Edit Data"><button
                                                    class="btn btn-primary"><i
                                                        class="fa-solid fa-pen-to-square"></i></button></a>
                                            <form method="POST" action="{{ url('/datas' . '/' . $item->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" title="Delete Data" button class="btn btn-danger"
                                                    title="Delete Student" onclick="return confirm("Are You Sure To Want To
                                                    Delete ?")">
                                                    <i class="fa-solid fa-trash" aria-hidden="true"></i></button></a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
