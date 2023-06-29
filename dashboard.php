<!DOCTYPE html>
<html>
    <?php
    session_start();
    ?>
<head>
    <title>Dashboard</title>
    <style>
        /* Reset default margin and padding */
        body, ul {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .ringring {
            background-color: greenyellow;
            width: 8px;
            height: 8px;
            border-radius: 20px;
            -webkit-animation: pulsate 1s ease-out;
            -webkit-animation-iteration-count: infinite;
            opacity: 0.5;
            
        }

        @-webkit-keyframes pulsate {
            0% {
                -webkit-transform: scale(0.1, 0.1);
                opacity: 0.0;
            }

            50% {
                opacity: 1.0;
            }

            100% {
                -webkit-transform: scale(1.2, 1.2);
                opacity: 0.0;
            }
        }
        /* Main container */
        .dashboard {
            display: flex;
        }

        /* Navigation pane */
        .nav-pane {
            background-color: #333;
            color: #fff;
            width: 200px;
            height: 100vh;
        }

            .nav-pane ul {
                list-style-type: none;
                padding: 20px;
            }

            .nav-pane li {
                margin-bottom: 20px;
            }

            .nav-pane a {
                color: #fff;
                text-decoration: none;
            }

        /* Content area */
        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Navigation pane -->
        <div class="nav-pane">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Settings</a></li>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <li>
                    <p class="ringring"></p>
                    <?php
                        echo $_SESSION['USERNAME'];
                    ?>
                </li>
                <li class="logout"><a href="logout.php">Log out</a></li>
            </ul>
        </div>

        <!-- Content area -->
        <div class="content">
            <!-- Your dashboard content goes here -->
            <h1>Welcome to the Dashboard!</h1>
            <p>Here you can view much, much more...</p>
        </div>
    </div>
</body>
</html>