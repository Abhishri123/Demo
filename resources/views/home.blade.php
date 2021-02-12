<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <style>
.circle {
  /* (A) SAME WIDTH & HEIGHT - SQUARE */
  width: 210px;
  height: 150px;
 
  /* (B) 50% RADIUS = CIRCLE */
  border-radius: 50%;
 
  /* (C) BACKGROUND COLOR */
  background: #d3d3d3;
  line-height: 150px;
  text-align: center;
  font-size: 20px;
  font-weight:bold;

}
</style>
        
        <title>Task</title>
        <script>
   function exportTasks(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>
    </head>
    <body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <table>
                <tr>
                &nbsp;&nbsp;
                <td>
                
                <div class="circle" >
            <a href="{{ route('fileUpload') }}">Import Article</a>
                </div>
                </td>
                <td>
                <div class="circle">
                <h2></h2>
                <a href="{{ route('view-export') }}">View Article</a>
                </div>
                </td>
                </tr>
                </table>
                <!-- <table border="1">
				                <tr>
				                <th>Import</th>

				                <td> <a href="{{ route('fileUpload') }}">Import Article</a> </td>
				                </tr>
				                <tr>
				                <th>View</th>
				                <td> <a href="{{ route('view-export') }}">View Article</a> </td>
                              
                                </tr>
                                
                                
</table> -->

            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
