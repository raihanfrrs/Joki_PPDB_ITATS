@if ($model->updated_at != $model->created_at)
    {{ \Carbon\Carbon::parse($model->updated_at)->format('d/m/Y H:i:s') }}
@endif
