test

<!-- valuesはTestControllerから渡ってきた値 -->
@foreach($values as $value)
{{$value->id}}<br>
{{$value->text}}<br>
@endforeach