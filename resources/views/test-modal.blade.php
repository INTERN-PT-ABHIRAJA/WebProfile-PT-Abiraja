<!DOCTYPE html>
<html>
<head>
    <title>Test Contact Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Test Contact Modal</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">
            Test Contact Modal
        </button>
        
        <!-- Include Contact Modal -->
        @include('modals.contactModal')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
