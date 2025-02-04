<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="icon" href="icon.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .navbar {
            background-color: #0056b3;
        }

        .navbar-brand {
            font-weight: 600;
            color: #fff;
        }

        .navbar-brand:hover {
            color: #d4af37;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: 600;
        }

        .navbar-nav .nav-link:hover {
            color: #d4af37;
        }

        .dashboard-container {
            margin-top: 20px;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #d4af37;
            border: none;
            border-radius: 25px;
        }

        .btn-primary:hover {
            background-color: #c2992b;
        }

        .chart-container {
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">OlymFit</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="logout.php">Log Out</a>
            </div>
        </div>
    </nav>

    <div class="container dashboard-container">
        <h2 class="mb-4">Welcome</h2>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card p-4 text-center">
                    <h4>Calories Burned</h4>
                    <p class="fs-4">1200 kcal</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 text-center">
                    <h4>Distance Covered</h4>
                    <p class="fs-4">15 km</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 text-center">
                    <h4>Workout Time</h4>
                    <p class="fs-4">2 hrs</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 text-center">
                    <h4>Challenges Completed</h4>
                    <p class="fs-4">3</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card p-4 text-center">
                    <h4>Log Your Workout</h4>
                    <a href="workoutDashboard.php" class="btn btn-primary w-100">Go to Workout Dashboard</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="chart-container">
                    <canvas id="progressChart"></canvas>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card p-4">
                    <h4 class="card-title mb-3">Your Fitness Goals</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Burn 2000 kcal this week <span class="badge bg-success">75%</span></li>
                        <li class="list-group-item">Run 20 km this month <span class="badge bg-warning">40%</span></li>
                        <li class="list-group-item">Complete 5 challenges <span class="badge bg-danger">1/5</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4">
                    <h4 class="card-title mb-3">Achievements</h4>
                    <div class="d-flex flex-wrap">
                        <div class="badge bg-primary m-2">First 5KM Run</div>
                        <div class="badge bg-primary m-2">Burned 1000 Calories</div>
                        <div class="badge bg-primary m-2">30 Workouts Logged</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card p-4">
                    <h4 class="card-title mb-3">Leaderboard</h4>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">User1 - 5000 kcal</li>
                        <li class="list-group-item">User2 - 4500 kcal</li>
                        <li class="list-group-item">You - 4000 kcal</li>
                    </ol>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4">
                    <h4 class="card-title mb-3">Challenges</h4>
                    <button class="btn btn-primary mb-2">Join "Run 10KM in a Week"</button>
                    <button class="btn btn-primary">Join "Burn 3000 Calories"</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('progressChart').getContext('2d');
        const progressChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    label: 'Calories Burned',
                    data: [500, 700, 800, 1200],
                    borderColor: '#0056b3',
                    backgroundColor: 'rgba(0, 86, 179, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>

</html>
