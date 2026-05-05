<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel')</title>
    
    {{-- ANTI-FOUC: Hide body initially --}}
    <style>
        body {
            visibility: hidden;
            opacity: 0;
        }
        body.loaded {
            visibility: visible;
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }
        #admin-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ffffff;
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        #admin-loader.fade-out {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
        }
        .admin-logo-loader {
            width: 160px;
            max-width: 80%;
            animation: adminPulse 1.8s ease-in-out infinite;
        }
        @keyframes adminPulse {
            0% { transform: scale(1); opacity: 0.8; }
            50% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(1); opacity: 0.8; }
        }
        .admin-loader-line {
            width: 60px;
            height: 3px;
            background: #e0e0e0;
            border-radius: 3px;
            margin-top: 20px;
            overflow: hidden;
        }
        .admin-loader-line-inner {
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #2563eb, #3b82f6, #2563eb);
            background-size: 200% 100%;
            animation: adminLoaderMove 1.5s ease-in-out infinite;
            border-radius: 3px;
        }
        @keyframes adminLoaderMove {
            0% { background-position: 100% 0; }
            100% { background-position: -100% 0; }
        }
    </style>
    
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/img/elevatefav.svg') }}" sizes="16x16">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css">
</head>
<body class="layout-light side-menu">
    
    {{-- Admin Logo Loader --}}
    <div id="admin-loader">
        <img src="{{ asset('assets/frontend/img/elevatenew.svg') }}" alt="Elevate Admin" class="admin-logo-loader">
        <div class="admin-loader-line">
            <div class="admin-loader-line-inner"></div>
        </div>
    </div>

    {{-- Notification Flash Messages --}}
    @include('components.notification')
    
    <div class="mobile-search">
        <form class="search-form">
            <img src="{{ asset('assets/admin/img/svg/search.svg') }}" alt="search" class="svg">
            <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
        </form>
    </div>

    <div class="mobile-author-actions"></div>

    @include('admin.layouts.common.header')
    @include('admin.layouts.common.sidebar')
    
    <main>
        @yield('content')
    </main>

    @include('admin.layouts.common.footer')

    {{-- Libraries --}}
    <script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    {{-- Notification System --}}
    <script src="{{ asset('assets/frontend/js/toast-notify.js') }}"></script>
    
    {{-- Admin Scripts --}}
    <script src="{{ asset('assets/admin/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/script.min.js') }}"></script>
    
    @stack('scripts')
    
    <script>
        $(document).ready(function() {
            if ($('.datatable').length && $.fn.DataTable) {
                $('.datatable').DataTable({
                    retrieve: true,
                    destroy: true,
                    language: {
                        emptyTable: "No data available"
                    }
                });
            }
            
            $(document).on('submit', '.delete-form', function(e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This action cannot be undone!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    allowOutsideClick: false
                }).then(function(result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                _method: 'DELETE'
                            },
                            success: function(response) {
                                window.location.reload();
                            },
                            error: function(xhr) {
                                Swal.fire('Error', 'Delete failed: ' + xhr.statusText, 'error');
                            }
                        });
                    }
                });
            });
        });
    </script>
    
    {{-- ANTI-FOUC: Reveal page when ready --}}
    <script>
        window.addEventListener('load', function() {
            var loader = document.getElementById('admin-loader');
            if (loader) {
                loader.classList.add('fade-out');
                setTimeout(function() {
                    loader.style.display = 'none';
                }, 500);
            }
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
