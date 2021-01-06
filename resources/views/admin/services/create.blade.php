@extends('layouts.master')

@section('title')
Services Category | funda of web

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Services Category - ADD
                <a href="{{ url('service-category') }}" class="btn btn-primary float-right py-2 " >Back</a>
            </h4>

        </div>
            <div class="card-body">
            <form action="{{ url('category-store') }}" method="POST">
                 {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Services Cate Name </label>
                            <input type="text" name="service_name" class="form-control" placeholder="Enter Service Name" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Services Cate Description </label>
                            <textarea type="text" name="service_description" class="form-control" placeholder="Enter Service Description" ></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info" >SAVE</button>
                    </div>
                </div>
            </form>
            </div>
       </div>
    </div>
</div>
@endsection
