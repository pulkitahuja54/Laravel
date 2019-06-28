<!-- edit.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Event
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('events.update', $event->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Event Name:</label>
              <input type="text" class="form-control" name="event_name" value="{{$event->event_name}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Event</button>
      </form>
  </div>
</div>
@endsection