<!DOCTPE html>
<html>
<head>
<title>View Imported Articals</title>
</head>
<body>
<table border = "1">
<tr>
<th>Id</th>
<th>_type</th>
<th>type</th> 
<th>Vicitation-key</td>
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

</tr>
@foreach ($articles as $article)
<tr>
<td>{{ $entry->id }}</td>
<td>{{ $entry->_type }}</td>
<td>{{ $entry->type }}</td>
<td>{{ $entry->citation-key }}</td>
<td>{{ $entry->title }}</td>
<td>{{ $entry->journal }}</td>
<td>{{ $entry->year }}</td>
<td>{{ $entry->volume }}</td>
<td>{{ $entry->doi }}</td>
<td>{{ $entry->art_number }}</td>
<td>{{ $entry->note }}</td>
<td>{{ $entry->url }}</td>
<td>{{ $entry->document_type }}</td>
<td>{{ $entry->source }}</td>
<td>{{ $entry->_original }}</td>

</tr>
@endforeach
</table>
</body>
</html>


