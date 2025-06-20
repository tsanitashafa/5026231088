<head>
    <style>
        body {
            background: #faf4f8;
            font-family: 'Poppins', sans-serif;
            color: #264653;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #000000;  /* Black color */
            font-weight: bold;
            transition: color 0.3s, text-decoration 0.3s, box-shadow 0.3s;  /* Added transition for box-shadow */
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #d98ff7;  /* Light purple color on hover */
            text-decoration: underline;  /* Underline text on hover */
            font-weight: bolder;  /* Make font weight bolder */
            box-shadow: 0 0 5px #d98ff7;  /* Add a soft outline using box-shadow */
        }


        .jumbotron {
            background-color: #eab6f5;
            color: white;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 10px #c146f1;
        }
    </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm mb-4">
            <div class="container">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/frontend">All Front End</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/roti">Tugas CRUD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/uas">EAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/keranjangbelanja">Latihan 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/karyawan">Latihan 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/karyawan2">Latihan 3</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>
