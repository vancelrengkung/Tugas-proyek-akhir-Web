<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - TaskFlow</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #333;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        /* Advanced Floating Shapes */
        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            animation: advancedFloat 8s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 5%;
            border-radius: 50% 0 50% 0;
            animation-delay: 0s;
            animation-duration: 12s;
        }

        .shape:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 70%;
            left: 90%;
            border-radius: 50%;
            animation-delay: 2s;
            animation-duration: 10s;
        }

        .shape:nth-child(3) {
            width: 0;
            height: 0;
            border-left: 40px solid transparent;
            border-right: 40px solid transparent;
            border-bottom: 70px solid rgba(255, 255, 255, 0.1);
            background: transparent;
            top: 30%;
            left: 85%;
            animation-delay: 4s;
            animation-duration: 14s;
        }

        .shape:nth-child(4) {
            width: 120px;
            height: 120px;
            top: 80%;
            left: 10%;
            border-radius: 20px;
            transform: rotate(45deg);
            animation-delay: 1s;
            animation-duration: 11s;
        }

        .shape:nth-child(5) {
            width: 60px;
            height: 60px;
            top: 50%;
            left: 95%;
            border-radius: 50% 0;
            animation-delay: 3s;
            animation-duration: 9s;
        }

        .shape:nth-child(6) {
            width: 90px;
            height: 90px;
            top: 15%;
            left: 50%;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation-delay: 5s;
            animation-duration: 13s;
        }

        @keyframes advancedFloat {
            0%, 100% {
                transform: translateY(0px) rotate(0deg) scale(1);
                opacity: 0.6;
            }
            25% {
                transform: translateY(-30px) rotate(90deg) scale(1.1);
                opacity: 0.8;
            }
            50% {
                transform: translateY(-15px) rotate(180deg) scale(0.9);
                opacity: 0.4;
            }
            75% {
                transform: translateY(-25px) rotate(270deg) scale(1.05);
                opacity: 0.7;
            }
        }

        /* Enhanced Particle System */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            animation: particleFloat 20s linear infinite;
        }

        .particle:nth-child(odd) {
            width: 6px;
            height: 6px;
            background: rgba(255, 255, 255, 0.8);
            animation-duration: 25s;
        }

        .particle:nth-child(even) {
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.6);
            animation-duration: 18s;
        }

        .particle:nth-child(1) { left: 5%; animation-delay: 0s; }
        .particle:nth-child(2) { left: 15%; animation-delay: 3s; }
        .particle:nth-child(3) { left: 25%; animation-delay: 6s; }
        .particle:nth-child(4) { left: 35%; animation-delay: 9s; }
        .particle:nth-child(5) { left: 45%; animation-delay: 12s; }
        .particle:nth-child(6) { left: 55%; animation-delay: 15s; }
        .particle:nth-child(7) { left: 65%; animation-delay: 18s; }
        .particle:nth-child(8) { left: 75%; animation-delay: 21s; }
        .particle:nth-child(9) { left: 85%; animation-delay: 24s; }
        .particle:nth-child(10) { left: 95%; animation-delay: 27s; }
        .particle:nth-child(11) { left: 10%; animation-delay: 30s; }
        .particle:nth-child(12) { left: 30%; animation-delay: 33s; }

        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) scale(0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
                transform: translateY(90vh) scale(1) rotate(36deg);
            }
            90% {
                opacity: 1;
                transform: translateY(10vh) scale(1) rotate(324deg);
            }
            100% {
                transform: translateY(-10vh) scale(0) rotate(360deg);
                opacity: 0;
            }
        }

        /* Animated Background Waves */
        .wave-container {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 300px;
            z-index: -1;
            pointer-events: none;
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200%;
            height: 150px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            animation: waveMotion 15s linear infinite;
        }

        .wave:nth-child(1) {
            animation-delay: 0s;
            opacity: 0.7;
        }

        .wave:nth-child(2) {
            animation-delay: 5s;
            opacity: 0.5;
            height: 120px;
        }

        .wave:nth-child(3) {
            animation-delay: 10s;
            opacity: 0.3;
            height: 100px;
        }

        @keyframes waveMotion {
            0% {
                transform: translateX(-50%) rotate(0deg);
            }
            100% {
                transform: translateX(-50%) rotate(360deg);
            }
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            text-decoration: none;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .btn-outline {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background: rgba(255, 255, 255, 0.9);
            color: #667eea;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            background: white;
        }

        /* Main Container */
        .main-container {
            min-height: 100vh;
            padding: 100px 20px 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Section */
        .about-header {
            text-align: center;
            margin-bottom: 60px;
            opacity: 0;
            transform: translateY(50px);
            animation: slideInUp 1s ease forwards;
        }

        .about-header h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            color: white;
            margin-bottom: 20px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background: linear-gradient(45deg, #fff, #f0f9ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .about-header p {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            max-width: 600px;
            margin: 0 auto;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Team Grid */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        /* Team Member Cards */
        .team-member {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 40px 30px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.5s ease;
            opacity: 0;
            transform: translateY(50px) scale(0.9);
            animation: cardSlideIn 1s ease forwards;
            position: relative;
            overflow: hidden;
        }

        .team-member:nth-child(1) { animation-delay: 0.2s; }
        .team-member:nth-child(2) { animation-delay: 0.4s; }
        .team-member:nth-child(3) { animation-delay: 0.6s; }

        .team-member::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.1));
            border-radius: 27px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .team-member:hover::before {
            opacity: 1;
        }

        .team-member:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 35px 70px rgba(0, 0, 0, 0.3);
        }

        /* Profile Image */
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 25px;
            overflow: hidden;
            border: 4px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
        }

        .profile-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.2), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .team-member:hover .profile-image::before {
            opacity: 1;
        }

        .team-member:hover .profile-image {
            transform: scale(1.1) rotate(5deg);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .team-member:hover .profile-image img {
            transform: scale(1.1);
        }

        /* Member Info */
        .member-info {
            text-align: center;
        }

        .member-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .team-member:hover .member-name {
            transform: translateY(-2px);
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .member-nim {
            background: rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.9);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            display: inline-block;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .team-member:hover .member-nim {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        /* Back Button */
        .back-button-container {
            text-align: center;
            opacity: 0;
            transform: translateY(30px);
            animation: slideInUp 1s ease 0.8s forwards;
        }

        .back-btn {
            background: rgba(255, 255, 255, 0.9);
            color: #667eea;
            padding: 16px 32px;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .back-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .back-btn:hover::before {
            left: 100%;
        }

        .back-btn:hover {
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
        }

        /* Animations */
        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes cardSlideIn {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .team-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .team-member {
                padding: 30px 25px;
            }

            .profile-image {
                width: 120px;
                height: 120px;
            }

            .member-name {
                font-size: 1.3rem;
            }

            .floating-shapes .shape {
                display: none;
            }

            .main-container {
                padding: 100px 15px 40px;
            }
        }

        @media (max-width: 480px) {
            .team-member {
                padding: 25px 20px;
            }

            .profile-image {
                width: 100px;
                height: 100px;
            }

            .member-name {
                font-size: 1.2rem;
            }

            .about-header h1 {
                font-size: 2rem;
            }

            .about-header p {
                font-size: 1.1rem;
            }
        }

        /* Ultra-responsive grid for very small screens */
        @media (max-width: 350px) {
            .team-grid {
                grid-template-columns: 1fr;
            }

            .team-member {
                margin: 0 10px;
            }
        }

        /* Large screen optimizations */
        @media (min-width: 1400px) {
            .team-grid {
                grid-template-columns: repeat(3, 1fr);
                max-width: 1200px;
                margin: 0 auto;
            }
        }
    </style>
</head>
<body>
    <!-- Enhanced Floating Shapes -->
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <!-- Enhanced Particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    
    <!-- Animated Waves -->
    <div class="wave-container">
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="/taskflow" class="logo">
                <div class="logo-icon">✓</div>
                TaskFlow
            </a>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Header -->
        <div class="about-header">
            <h1>Meet Our Team</h1>
            <p>The passionate developers behind TaskFlow who are dedicated to helping you organize your life and boost your productivity.</p>
        </div>

        <!-- Team Grid -->
        <div class="team-grid">
            <!-- Team Member 1 -->
            <div class="team-member">
                <div class="profile-image">
                    <img src="others/todo/images/V.jpg" alt="Vancel Bernard Fredrik Rengkung">
                </div>
                <div class="member-info">
                    <h3 class="member-name">VANCEL BERNARD FREDRIK RENGKUNG</h3>
                    <span class="member-nim">230211060105</span>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-member">
                <div class="profile-image">
                    <img src="others/todo/images/A.jpg" alt="Nobiana Audrey Lie">
                </div>
                <div class="member-info">
                    <h3 class="member-name">NOBIANA AUDREY LIE</h3>
                    <span class="member-nim">230211060100</span>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-member">
                <div class="profile-image">
                    <img src="others/todo/images/G.jpg" alt="Giacinta Felisitas Pitoy">
                </div>
                <div class="member-info">
                    <h3 class="member-name">GIACINTA FELISITAS PITOY</h3>
                    <span class="member-nim">230211060030</span>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="back-button-container">
            <a href="/taskflow" class="back-btn">
                ← Return to TaskFlow
            </a>
        </div>
    </div>
</body>
</html>
