@extends('layouts.app')
@section('page-title', 'Form')
@section('content')
<div class="row">

  <div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">With Label on Top</h6>
      </div>
      <div class="card-body">
        <form action="">
          <div class="form-group">
            <label for="">Text Input</label>
            <input type="text" class="form-control" placeholder="Sample placeholder">
          </div>
          <div class="form-group">
            <label for="">Text Area</label>
            <textarea name="" id=""rows="3" class="form-control" placeholder="Sample placeholder"></textarea>
          </div>
          <div class="form-group">
            <label for="">Date Input</label>
            <input type="date" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Select</label>
            <select class="form-control" id="">
              @for ($i = 1; $i < 10; $i++)
                  <option>{{$i}}</option>
              @endfor
            </select>
          </div>
          <div class="form-group">
            <label for="">Select2</label>
            <select class="form-control select2" id="">
              @for ($i = 1; $i < 10; $i++)
                  <option>{{$i}}</option>
              @endfor
            </select>
          </div>
          <div class="form-group">
            <label for="">Multiple Select</label>
            <select multiple class="form-control" id="">
              @for ($i = 1; $i < 10; $i++)
                  <option>{{$i}}</option>
              @endfor
            </select>
          </div>
          <hr class="devider">
          <div class="form-group">
            <label for="">Checkbox</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Default checkbox
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
              <label class="form-check-label" for="defaultCheck2">
                Disabled checkbox
              </label>
            </div>
          </div>
          <hr class="devider">
          <div class="form-group">
            <label for="">Radio</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Default radio
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label" for="exampleRadios2">
                Second default radio
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
              <label class="form-check-label" for="exampleRadios3">
                Disabled radio
              </label>
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit form</button>
          </div>
        </form>
        <hr>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione magni fuga suscipit, deserunt doloribus ab!
      </div>
    </div>
  </div>
</div>
@endsection
