@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Penilaian AHP
@endsection

@section('contentheader_title')
Penilaian AHP
@endsection

@section('main-content')
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Kriteria</label>
    <label for="" class="col-sm-2 control-label">Adopsi</label>
    <label for="" class="col-sm-2 control-label">Penderita</label>
    <label for="" class="col-sm-2 control-label">Piatu</label>
    <label for="" class="col-sm-1 control-label">Prematur</label><br><br>
    <label for="" class="col-sm-2 control-label">Adopsi</label>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
        <option disabled value="">-Select Kriteria-</option>  
        @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value==1}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div><br><br>
      <label for="" class="col-sm-2 control-label">Penderita</label>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option disabled value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value==1}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div><br><br>
      <label for="" class="col-sm-2 control-label">Piatu</label>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option disabled value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value==1}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div><br><br>
      <label for="" class="col-sm-2 control-label">Prematur</label>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value}}</option>
        @endforeach
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option disabled value="">-Select Kriteria-</option>
          @foreach ($value_array as $data)
          <option value="{{$data->id}}">{{$data->value==1}}</option>
        @endforeach
        </select>                   
      </div>
    </div>
@endsection

@section('code-footer')

@endsection
