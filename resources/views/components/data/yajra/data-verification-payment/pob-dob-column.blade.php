<span class="text-capitalize">{{ $model->student->pob }},
    {{ \Carbon\Carbon::parse($model->student->dob)->format('d/m/Y') }}</span>
