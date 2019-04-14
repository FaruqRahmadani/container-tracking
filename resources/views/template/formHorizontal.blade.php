@extends('layouts.app')
@section('page-title', 'Form')
@section('content')
<div class="row">

  <div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Horizontal with Label on the Left</h6>
      </div>
      <div class="card-body">
        <form action="">
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Text Input</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Sample placeholder">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Text Area</label>
            <div class="col-sm-10">
              <textarea name="" id="" rows="3" class="form-control" placeholder="Sample placeholder"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
              <input type="Date" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Select</label>
            <div class="col-sm-10">
              <select class="form-control" id="">
                @for ($i = 1; $i < 10; $i++) <option>{{$i}}</option>
                  @endfor
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Select2</label>
            <div class="col-sm-10">
              <select class="form-control select2" id="">
                @for ($i = 1; $i < 10; $i++) <option>{{$i}}</option>
                  @endfor
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Multiple Select</label>
            <div class="col-sm-10">
              <select multiple class="form-control" id="">
                @for ($i = 1; $i < 10; $i++) <option>{{$i}}</option>
                  @endfor
              </select>
            </div>
          </div>
          <hr class="devider">
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Checkbox</label>
            <div class="col-sm-10">
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
          </div>
          <hr class="devider">
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Checkbox Inline</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
              </div>
            </div>
          </div>
          <hr class="devider">
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Radio</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
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
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3"
                  disabled>
                <label class="form-check-label" for="exampleRadios3">
                  Disabled radio
                </label>
              </div>
            </div>
          </div>
          <hr class="devider">
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Checkbox Inline</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"
                  disabled>
                <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
              </div>
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
