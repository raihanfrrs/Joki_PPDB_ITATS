@if ($model->gender == 'male')
    <span class="badge bg-label-primary me-1">Laki-laki</span>
@elseif ($model->gender == 'female')
    <span class="badge bg-label-info me-1">Perempuan</span>
@endif
