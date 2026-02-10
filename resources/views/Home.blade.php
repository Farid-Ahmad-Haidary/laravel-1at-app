@extends('layouts.master')

@section('content')
    {{-- {{ $names }} --}}
    <div class="card col-md-6 mx-auto">
        <div class="card-body">
            <form action="/save" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="note">Notes</label>
                            <input type="text" name="note" class="form-control" placeholder="enter your notes">
                            @error('note')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </div>
                </div>
            </form>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>note</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($notes as $item)
                        <tr>
                             <td>{{$item->id}}</td>
                            <td>{{ $item->note }}</td>
                            <td>
                                <a href="">Delete</a> | <a href="">Edit</a>
                            </td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
