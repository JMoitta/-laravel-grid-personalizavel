@if (count($table->rows()))
  {{ $table->rows()->links() }}
  <table class="table table-striped">
    <thead>
      <tr>
        @foreach ($table->columns() as $column)
          <th>{{ $column['label']}}</th>
        @endforeach
        @if (count($table->actions()))
            <th>Ações</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach ($table->rows() as $row)
        <tr>
          @foreach ($table->columns() as $column)
            <td>{{ $row{$column['name']} }}</td>
          @endforeach
          @if(count($table->actions()))
            <td>
              @foreach($table->actions() as $action)
                @include($action['template'],[
                  'row' => $row,
                  'action' => $action,
                ])
              @endforeach
            </td>
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $table->rows()->links() }}
@else
  <table class="table">
    <tr>
      <td>Nenhum registro encontrado!</td>
    </tr>
  </table>
@endif
