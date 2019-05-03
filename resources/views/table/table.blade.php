{{ $table->rows()->links() }}
<table class="table table-striped">
  <thead>
    <tr>
      @foreach ($table->columns() as $column)
        <th>{{ $column['label']}}</th>
      @endforeach
    </tr>
  </thead>
  <tbody>
    @foreach ($table->rows() as $row)
      <tr>
        @foreach ($table->columns() as $column)
          <th>{{ $row{$column['name']} }}</th>
        @endforeach
      </tr>
    @endforeach
  </tbody>
</table>
{{ $table->rows()->links() }}