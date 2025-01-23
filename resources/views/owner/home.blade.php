<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .dashboard {
            width: 95%; /* Reduced width */
            height: 95%;
            display: flex;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .sidebar {
            width: 30%;
            background-color: #4CAF50;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            overflow-y: auto;
            transition: transform 0.3s ease;
        }

        .sidebar h2 {
            margin-bottom: 20px;
        }

        .main-content {
            width: 70%;
            background-color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: auto;
            position: relative;
        }

        .add_hostel_button {
            padding: 15px 30px;
            background-color: #007BFF;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
            margin-bottom: 10px;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .add_hostel_button:hover {
            background-color: #0056b3;
        }

        .logout-button {
            padding: 10px;
            background-color: #d9534f;
            color: white;
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            width: 100%;
            margin-top: auto;
        }

        .logout-button:hover {
            background-color: #c9302c;
        }

        .hostel-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Default for larger screens */
            gap: 20px;
            width: 100%;
            overflow-y: auto;
            margin-top: 60px;
        }

        .hostel-card {
            position: relative;
            width: 80%;
            height: 200px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .hostel-overlay {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
        }

        .hostel-overlay h2 {
            margin: 0;
            font-size: 18px;
        }

        .hostel-overlay p {
            margin: 5px 0;
            font-size: 14px;
        }

        .no-hostels {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: #555;
            text-align: center;
            font-size: 20px;
        }

        .no-hostels p {
            margin: 10px 0;
        }

        .no-hostels a {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
        }

        .no-hostels a:hover {
            background-color: #0056b3;
        }

        .price-ribbon {
            background: linear-gradient(45deg, #ff6b6b, #f06595);
            color: #fff;
            padding: 5px 25px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 3;
            border-bottom-right-radius: 5px;
            font-weight: bold;
        }

        .price-ribbon:before {
            position: absolute;
            content: '';
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #ff6b6b, #f06595);
            top: 0;
            left: 0;
            transform: rotate(45deg);
            z-index: -1;
        }

        .edit-button {
            background: linear-gradient(45deg, #ff6b6b, #f06595);
            border-radius: 5px;
            color: white;
        }

        .edit-button:hover {
            background-color: black;
        }

        .badge.approved {
            background-color: green;
            color: white;
            padding: 5px;
            border-radius: 3px;
        }

        .badge.pending {
            background-color: orange;
            color: white;
            padding: 5px;
            border-radius: 3px;
        }

        /* Media Queries for responsive design */
        @media (max-width: 768px) {
            .dashboard {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
                transform: translateX(-100%);
                position: absolute;
                left: 0;
                z-index: 1000;
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main-content {
                width: 100%;
            }

            .hostel-grid {
                grid-template-columns: repeat(2, 1fr); /* Two items per row on mobile */
            }

            .toggle-sidebar {
                display: block;
                position: absolute;
                top: 25px;
                left: 10px;
                z-index: 1100;
                background-color: #007BFF;
                color: white;
                padding: 10px 15px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 18px;
                 
            }

            .toggle-sidebar:hover {
                background-color: #0056b3;
            }
        }

        /* Hide the menu button in desktop view */
        @media (min-width: 769px) {
            .toggle-sidebar {
                display: none; /* Hide on desktop */
            }
        }

        @media (max-width: 480px) {
            .hostel-grid {
                grid-template-columns: 1fr; /* One item per row on smaller screens */
            }
            .hostel-card{
                w
            }
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="sidebar">
            <h2>Owner Information</h2>
            @include('owner.owner-form')
        </div>

        <div class="main-content">
            <span class="toggle-sidebar" onclick="toggleSidebar()">☰ Menu</span>
            <a href="{{ route('addHostel') }}" class="add_hostel_button">Add Hostels</a>
            <div class="hostel-grid">
                @if($hostels->isEmpty())
                <div class="no-hostels">
                    <p>No hostels available. Please add a new hostel.</p>
                </div>
                @else
                @foreach ($hostels as $hostel)
                <div class="hostel-card" 
                     onclick="window.location.href='{{ route('owner.hostel.show', $hostel->id) }}'"
                     style="background-image: url('{{ $hostel->hostel_front_image }}');">

                    <div class="price-ribbon">
                        {{$hostel->hostel_price}} Rs / month
                    </div>
                    <div class="hostel-overlay">
                        <h2>{{ $hostel->hostel_name }}</h2>
                        <p><strong>Area:</strong> {{ $hostel->area }}</p>
                         <p><strong>City:</strong> {{ $hostel->city }}</p>
                        <p>
                            <strong>Status:</strong>
                            @if($hostel->is_approved)
                            <span class="badge approved">Approved</span>
                            @else
                            <span class="badge pending">Pending Approval</span>
                            @endif
                        </p>

                        <a href="{{ route('owner.hostel.edit', $hostel->id) }}" class="edit-button">Edit</a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('open');
        }
    </script>
</body>

</html>
