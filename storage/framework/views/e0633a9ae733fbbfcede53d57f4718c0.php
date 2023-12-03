<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="css/list.css">
    <style>

        * { 
            font-family: 'Poppins';
        }

        body {
            justify-content: center;
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
            background-color: #000000;
        
        }

        .datauniv {
            max-width: 1000px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            height: 40px;
            text-align: center;
            color: black;
        }

        /* select class .navbar dan .ini_navbar*/
        .navbar, .ini_navbar{
            background-color: #1e1e1e;
            padding: 20px;
            font-family: 'Poppins';
            border-radius: 32px;
            text-decoration: none;
            color: white;
            justify-content: center;
            
        }

        .navbar {
            margin: 60px;
            margin-top: 20px;
        }

        .nav1 {
            padding: -20px;
        }

        /* ketika kursor meng-hover nav home/project akan merubah warnanya to blue */
        .ini_navbar:hover {
            color: rgb(104, 152, 248);
            font-weight: bold;
            transition: color 0.3s ease;
        }


    </style>
</head>
<body>

    <nav class="navbar">

            <a class="ini_navbar nav1" href="/profile">Home</a>
            <a class="ini_navbar" href="/univ">Project</a>

    </nav>

    <div class="datauniv">
        <h1>GALAXY FOLD PROJECT</h1>
        <p>Exploring the cutting-edge marvels at the Galaxy Fold Exhibition held across esteemed institutions – from the innovative halls of 
            Universitas Akademi Farmasi Mitra Sehat Mandiri Sidoarjo to the tech-savvy grounds of Institut Sains & Teknologi, 
            STMIK AMIKOM Yogyakarta, STIKES RS Anwar Medika, and the academic excellence of Universitas Katolik Indonesia Atma Jaya. 
            Unveiling the future of foldable technology in style! 🌌📱 #GalaxyFoldExhibition #TechInnovation #FuturisticCampus</p>
        <table>
            <thead>
                <tr>
                    <th>Universities</th>
                    <th>Websites</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item['name']); ?> </td>
            <td><a href="<?php echo e($item['domains'][0]); ?>"><?php echo e($item['domains'][0]); ?></a></td>
            <td><?php echo e($item['country']); ?></td>
        </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html><?php /**PATH D:\PEMRO WEB\laravel\example-app\resources\views/univ.blade.php ENDPATH**/ ?>