<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Mirashka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg-dark: #0f172a;
            --bg-card: #1e293b;
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --accent: #3b82f6;
            --accent-hover: #2563eb;
        }
        
        body {
            background-color: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        
        .sidebar {
            background: var(--bg-card);
            min-height: 100vh;
            padding: 20px;
        }
        
        .sidebar-logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--text-primary);
            padding: 20px 0;
            border-bottom: 1px solid #334155;
            margin-bottom: 20px;
        }
        
        .nav-link {
            color: var(--text-secondary);
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 4px;
            transition: all 0.3s;
        }
        
        .nav-link:hover, .nav-link.active {
            background: var(--accent);
            color: var(--text-primary);
        }
        
        .nav-link i {
            margin-right: 10px;
            width: 20px;
        }
        
        .user-info {
            background: var(--bg-card);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
        }
        
        .user-avatar {
            width: 50px;
            height: 50px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
        }
        
        .main-content {
            padding: 30px;
        }
        
        .dashboard-card {
            background: var(--bg-card);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            border: 1px solid #334155;
        }
        
        .stat-card {
            background: var(--bg-card);
            border-radius: 12px;
            padding: 25px;
            border: 1px solid #334155;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            margin: 10px 0 5px;
        }
        
        .stat-label {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        .welcome-banner {
            background: linear-gradient(135deg, var(--accent) 0%, #6366f1 100%);
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .btn-logout {
            background: #ef4444;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .btn-logout:hover {
            background: #dc2626;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="sidebar-logo">
                    <i class="fas fa-rocket me-2"></i>
                    Elevate User
                </div>
                
                <div class="user-info">
                    <div class="d-flex align-items-center">
                        <div class="user-avatar me-3">
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        </div>
                        <div>
                            <div class="fw-bold">{{ $user->name }}</div>
                            <small class="text-muted">{{ $user->email }}</small>
                        </div>
                    </div>
                </div>
                
                <nav class="nav flex-column">
                    <a href="{{ route('user.dashboard') }}" class="nav-link active">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-calendar"></i> My Webinars
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-file-alt"></i> Case Studies
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-podcast"></i> Podcasts
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-user"></i> Profile
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                </nav>
                
                <div class="mt-4">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-logout w-100">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                @yield('content')
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
