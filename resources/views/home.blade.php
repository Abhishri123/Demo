<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
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
                <table border="1">
				                <tr>
				                <th>Import</th>

				                <td> <a href="{{ route('fileUpload') }}">Import Article</a> </td>
				                </tr>
				                <tr>
				                <th>View</th>
				                <td> <a href="{{ route('view-records') }}">View Article</a> </td>
                                <tr>
                                <th>Export</th>
                                <td> <a href="{{ route('export') }}">Export Article</a> </td>
                                 </tr>
                                 <tr>
                                <th>Insert</th>
                                <td> <a href="{{ route('create') }}">Insert Article</a> </td>
                                 </tr>
                                </tr>
                                
</table>

            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
