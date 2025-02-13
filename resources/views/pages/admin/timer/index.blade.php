@extends('layouts.admin')

@section('title', 'PPDB - Timer')

@section('section-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <h5 class="card-header">Batas Pendaftaran</h5>
                    <div class="card-body">
                        <form action="{{ route('timer.store') }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label">Pendaftaran Dimulai</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control @error('begin_at') is-invalid @enderror"
                                        placeholder="YYYY-MM-DD HH:MM" id="flatpickr-datetime" name="begin_at"
                                        value="{{ old('begin_at', $timer->begin_at ?? '') }}" />
                                    @error('begin_at')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label">Pendaftaran Berakhir</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control @error('end_at') is-invalid @enderror"
                                        placeholder="YYYY-MM-DD HH:MM" id="flatpickr-datetime" name="end_at"
                                        value="{{ old('end_at', $timer->end_at ?? '') }}" />
                                    @error('end_at')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-{{ $timer ? 'warning' : 'primary' }}">{{ $timer ? 'Ubah' : 'Simpan' }}</button>
                            @if ($timer)
                                <button type="button" class="btn btn-danger" onclick="deleteData()">Batalkan</button>
                            @endif
                        </form>
                        <form action="{{ route('timer.destroy') }}" method="POST" id="form-delete">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function deleteData() {
            $('#form-delete').submit();
        }
    </script>
@endpush
