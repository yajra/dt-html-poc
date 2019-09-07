<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;

class InactiveUsersDataTable extends DataTable
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
            ->eloquent($query)
            ->addColumn('action', 'inactive-users.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery()->where('is_active', false);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder|InactiveUsersDataTableHtml
     */
    public function htmlBuilder()
    {
        return InactiveUsersDataTableHtml::make();
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'InactiveUsers_' . date('YmdHis');
    }
}
