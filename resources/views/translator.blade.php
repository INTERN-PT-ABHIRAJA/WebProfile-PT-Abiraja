@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Translator Tool</div>
                  <div class="card-body">
                    <h1 class="text-xl mb-4">Indonesian-English Translator</h1>
                    <p class="mb-4">Use this tool to translate text between Indonesian and English. You can also access this tool quickly from the <strong>TRANSLATOR</strong> button in the header navigation.</p>
                    
                    <!-- React will mount to this div -->
                    <div id="translator-app"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @viteReactRefresh
    @vite('resources/js/app.js')
@endpush
