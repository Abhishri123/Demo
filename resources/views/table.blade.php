<!DOCTYPE html>
<html>
<head>
    <title> Articles </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    </head>
<body>
    
<div class="container mt-5">
    <h2 class="mb-4">Articles</h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
            <th>No</th>
            <th>_Type</th>
            <th>Type</th> 
            <th>Citation-key</th>
            <th>Author</th>
            <th>Title</th>
            <th>Journal</th>
            <th>Year</th>
            <th>Volume</th>
            <th>Doi</th>
            <th>Art number</th>
            <th>Note</th>
            <th>Url</th>
            <th>Document Type</th>
            <th>Source</th>
            <th>Action</th>

            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>


<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('getArticles') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: '_type', name: '_type'},
            {data: 'type', name: 'type'},
            {data: 'citation_key', name: 'citation_key'},
            {data: 'author', name: 'author'},
            {data: 'title', name: 'title'},
            {data: 'journal', name: 'journal'},
            {data: 'year', name: 'year'},
            {data: 'doi', name: 'doi'},
            {data: 'art_number', name: 'art_number'},
            {data: 'note', name: 'note'},
            {data: 'url', name: 'url'},
            {data: 'document_type', name: 'document_type'},
            {data: 'source', name: 'source'},
            
            
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
</html>
