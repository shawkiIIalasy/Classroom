
@extends('layouts.app')

@section('content')

    <h1>Add markes</h1>
   <div class="container" style="width: 1000px;">
  <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <form  method="POST" action="/markes/{{$markes->id}}">
        {{csrf_field()}}
        {{method_field('PUT')}}

    <table class="table">
      <tr>
        <th>Name</th>
        <th>First</th>
        <th>Second</th>
        <th>Third</th>
        <th>Final</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td><input contenteditable="true" name="name"></td>
       <td><input contenteditable="true" name="first"></td>
        <td><input contenteditable="true" name="second"></td>
       <td><input contenteditable="true" name="third"></td>
       <td><input contenteditable="true" name="final"></td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>

    </table>
  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>
  <p id="export"></p>
</div>
</form>
<script >
    var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

$('.table-add').click(function () {
  var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
  $TABLE.find('table').append($clone);
});

$('.table-remove').click(function () {
  $(this).parents('tr').detach();
});

$('.table-up').click(function () {
  var $row = $(this).parents('tr');
  if ($row.index() === 1) return; // Don't go above the header
  $row.prev().before($row.get(0));
});

$('.table-down').click(function () {
  var $row = $(this).parents('tr');
  $row.next().after($row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.click(function () {
  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];
  
  // Get the headers (add special header logic here)
  $($rows.shift()).find('th:not(:empty)').each(function () {
    headers.push($(this).text().toLowerCase());
  });
  
  // Turn all existing rows into a loopable array
  $rows.each(function () {
    var $td = $(this).find('td');
    var h = {};
    
    // Use the headers from earlier to name our hash keys
    headers.forEach(function (header, i) {
      h[header] = $td.eq(i).text();   
    });
    
    data.push(h);
  });
  
  // Output the result
  $EXPORT.text(JSON.stringify(data));
});
</script>
@endsection