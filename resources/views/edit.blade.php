@extends('layout.app')

@section('content')
<div class="container">
        <h1 style="text-align: center">Edit the Todo</h1>
</div><br<br>
<div class="container">
        <form action="{{route('updateTodo')}}" method="post">
            @csrf
            <div class="input-group mb-3 container">
                <input type="text" name="todo" value="{{$data->title}}" class="form-control" placeholder="Edit your todo list here" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <input type="hidden" name="id" value="{{$data->id}}">
                <select class="form-select" id="inputGroupSelect02" name="priority">
                    <option selected>Choose...</option>
                    <option value="High priority">High priority</option>
                    <option value="Low priority">Low priority</option>
                    <option value="Should be done now">Should be done now</option>
                </select>
                <button class="btn btn-dark btn-lg" type="submit" id="button-addon1">Update</button>
            </div>
        </form>
</div>
@endsection
