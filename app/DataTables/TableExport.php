<?php

namespace App\DataTables;
use App\Article;
use App\DataTables\TableExport;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TableExport extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query);
            // ->addColumn('action', 'tableexport.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\TableExport $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(TableExport $model)
    {
        // return $model->newQuery();
        $data = Article::select();
        return $this->applyScopes($data);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    // ->setTableId('tableexport-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('csv'),
                        Button::make('excel')
                        // Button::make('print'),
                        // Button::make('reset'),
                        // Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('_type'),
            Column::make('type'),
            Column::make('citation_key'),
            Column::make('author'),
            Column::make('title'),
            Column::make('journal'),
            Column::make('year'),
            Column::make('doi'),
            Column::make('art_number'),
            Column::make('note'),
            Column::make('url'),
            Column::make('document_type'),
            Column::make('source'),

                   ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Article_' . date('YmdHis');
    }
}
