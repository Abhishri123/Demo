<!DOCTPE html>
<html>
<head>
<title>View Articles Records</title>
</head>
<body>
<table border = "1" action="{{route('index')}}">
<tr>
<th>Id</th>
<th>_Type</th>
<th>Type</th> 
<th>Citation-key</th>
<th>Author</th>
<th>Title</th>
<th>Journal</th>
<th>Year</th>
<th>Doi</th>
<th>Art number</th>
<th>Note</th>
<th>Url</th>
<th>Document Type</th>
<th>Source</th>
</tr>
@foreach ($articles as $article)
<tr>
<td>{{ $article->id }}</td>
<td>{{ $article->_type }}</td>
<td>{{ $article->type }}</td>
<td>{{ $article->citation_key }}</td>
<td>{{ $article->author }}</td>
<td>{{ $article->title }}</td>
<td>{{ $article->journal }}</td>
<td>{{ $article->year }}</td>
<td>{{ $article->doi }}</td>
<td>{{ $article->art_number }}</td>
<td>{{ $article->note }}</td>
<td>{{ $article->url }}</td>
<td>{{ $article->document_type }}</td>
<td>{{ $article->source }}</td>

</tr>
@endforeach
</table>
</body>
</html>