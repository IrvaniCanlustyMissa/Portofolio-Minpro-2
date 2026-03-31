<?php 
include 'koneksi.php'; 

$query = mysqli_query($conn, "SELECT * FROM profile WHERE id = 1");
$data  = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">MY PORTOFOLIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="home" class="py-5 text-center bg-light">
            <div class="container py-5">
                <img src="foto_profil.jpg" class="rounded-circle mb-4 shadow" alt="Foto Profil" width="200">
                <h1 class="display-4 fw-bold">Halo, Saya {{ name }}</h1>
                <p class="lead">{{ bio }}</p>
                <a href="#about" class="btn btn-primary px-4">Kenali Saya Lebih Dalam</a>
            </div>
        </section>

        <div class="mt-4 text-center">
    <a href="https://instagram.com/vann_prmn" class="btn btn-outline-danger me-2">Instagram</a>
    <a href="https://github.com/IrvaniCanlustyMissa" class="btn btn-outline-dark">GitHub</a>
</div>

        <section id="about" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">About Me</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Deskripsi Diri</h4>
                        <p>{{ description }}</p>
                    </div>
                    <div class="col-md-6">
                        <h4>Skills</h4>
                        <div v-for="skill in skills" class="mb-3">
                            <label class="form-label">{{ skill.name }}</label>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" :style="{ width: skill.level + '%' }">{{ skill.level }}%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="certificates" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Certificates</h2>
                <div class="row g-4">
                    <div class="col-md-4" v-for="cert in certificates">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ cert.title }}</h5>
                                <p class="card-text text-muted">Penerbit: {{ cert.issuer }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const { createApp } = Vue
        createApp({
            data() {
                return {
                    name: 'Irvani Canlusty Missa',
                    bio: 'Web Developer Enthusiast & Pelajar',
                    description: 'Saya adalah mahasiswa Sistem Informasi yang tertarik dengan dunia teknologi, khususnya pengembangan web dan desain antarmuka pengguna.',
                    skills: [
                        { name: 'HTML & CSS', level: 90 },
                        { name: 'Bootstrap', level: 85 },
                        { name: 'JavaScript', level: 70 }
                    ],
                    certificates: [
                        { title: 'Sertifikat Web Dasar', issuer: 'Dicoding' },
                        { title: 'Junior Web Developer', issuer: 'BNSP' },
                        { title: 'HTML & CSS Course', issuer: 'FreeCodeCamp' }
                    ]
                }
            }
        }).mount('#app')
    </script>
</body>
</html>