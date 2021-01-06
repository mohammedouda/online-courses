@extends('layouts.master')

@section('title')
Services Category - Edit | funda of web

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Services Category - Edit
                <a href="{{ url('service-category') }}" class="btn btn-primary float-right py-2 " >Back</a>
            </h4>

        </div>
            <div class="card-body">
            <form action="{{ url('category-update/'.$service_category->id) }}" method="POST">
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Services Cate Name </label>
                        <input type="text" name="service_name" class="form-control" value="{{ $service_category->service_name }}" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Services Cate Description </label>
                        <textarea type="text" name="service_description" class="form-control" >{{ $service_category->service_description }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info" >Update Category</button>
                    </div>
                </div>
            </form>
            </div>
       </div>
    </div>
</div>

@endsection
