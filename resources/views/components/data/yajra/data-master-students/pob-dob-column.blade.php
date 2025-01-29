{{ $model->pob }} {{ $model->dob ? \Carbon\Carbon::parse($model->dob)->format('d/m/Y') : '' }}
