@extends('layouts.master')

@section('title')
Services Category | funda of web

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Services Category - List
            <a href="" class="btn btn-primary float-right py-2 " >ADD</a>
          </h4>
          @if (session('status'))
          <div class="alert alert-success" role= "alert" >
              {{session('status')}}
          </div>

      @endif
        </div>
        <div class="card-body">
            <table class="table">
             <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>sdad</td>
                    <td>sda</td>
                    <td>
                    <a href="" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger servideletebtn">Delete</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
</div>
</div>
@endsection
