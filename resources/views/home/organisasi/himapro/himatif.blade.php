<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM 2024 - DIPTEK</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        /* Header Styles */
        .header {
            background: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1000;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: #4285f4;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 14px;
        }

        .logo-text {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
            align-items: center;
        }

        .nav-menu li a {
            text-decoration: none;
            color: #666;
            font-size: 14px;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-menu li a:hover {
            color: #4285f4;
        }

        .login-portal {
            background: #4285f4;
            color: white !important;
            padding: 8px 16px;
            border-radius: 6px;
            transition: background 0.3s ease;
        }

        .login-portal:hover {
            background: #3367d6;
            color: white !important;
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 4px;
        }

        .mobile-menu-btn span {
            width: 25px;
            height: 3px;
            background: #333;
            transition: 0.3s;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #4285f4 0%, #1976d2 25%, #2196f3 50%, #1565c0 75%, #0d47a1 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 15% 15%, rgba(255,255,255,0.15) 0%, transparent 40%),
                radial-gradient(circle at 85% 25%, rgba(255,255,255,0.12) 0%, transparent 45%),
                radial-gradient(circle at 25% 75%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 85%, rgba(255,255,255,0.08) 0%, transparent 40%),
                radial-gradient(circle at 50% 10%, rgba(255,255,255,0.06) 0%, transparent 35%),
                radial-gradient(circle at 90% 60%, rgba(255,255,255,0.09) 0%, transparent 45%);
            animation: float 25s infinite linear;
        }

        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            100% { transform: translateY(-20px) rotate(360deg); }
        }

        .laptop-image {
            width: 150px;
            height: auto;
            margin-bottom: 40px;
            position: relative;
            z-index: 2;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.3));
        }

        .hero-title {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 20px;
            letter-spacing: 2px;
            position: relative;
            z-index: 2;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 10px;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        .subtitle-accent {
            width: 100px;
            height: 4px;
            background: #06b6d4;
            margin: 0 auto 40px;
            border-radius: 2px;
            position: relative;
            z-index: 2;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            cursor: pointer;
            transition: opacity 0.3s ease;
            z-index: 2;
        }

        .scroll-indicator:hover {
            opacity: 0.7;
        }

        .scroll-text {
            font-size: 14px;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        .scroll-arrow {
            font-size: 24px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                gap: 15px;
            }

            .nav-menu.active {
                display: flex;
            }

            .mobile-menu-btn {
                display: flex;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1rem;
                padding: 0 20px;
            }

            .laptop-image {
                width: 100px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .header-container {
                padding: 0 15px;
            }

            .laptop-image {
                width: 80px;
            }
        }

        /* Added styles for new sections */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* About Section */
        .about-section {
            padding: 80px 0;
            background: #f8fafc;
        }

        .about-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .about-icon {
            font-size: 2rem;
        }

        .about-header h2 {
            font-size: 2rem;
            color: #4285f4;
            font-weight: bold;
        }

        .about-description {
            text-align: center;
            font-size: 1.1rem;
            color: #666;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Introduction Card Section */
        .intro-section {
            padding: 80px 0;
            background: white;
        }

        .intro-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid #e2e8f0;
        }

        .card-icon {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .intro-card h3 {
            font-size: 1.5rem;
            color: #4285f4;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .intro-card p {
            color: #666;
            line-height: 1.7;
            margin-bottom: 30px;
            text-align: justify;
        }

        .social-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .social-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .social-btn.facebook {
            background: #1877f2;
            color: white;
        }

        .social-btn.instagram {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            color: white;
        }

        .social-btn.twitter {
            background: #1da1f2;
            color: white;
        }

        .social-btn.whatsapp {
            background: #25d366;
            color: white;
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Statistics Section */
        .stats-section {
            padding: 80px 0;
            background: #f8fafc;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .stat-item {
            text-align: center;
            background: white;
            padding: 40px 20px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #4285f4;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #666;
            font-weight: 500;
        }

        /* Vision Mission Section */
        .vision-mission-section {
            padding: 0;
            background: white;
        }

        .collaboration-header {
            background: linear-gradient(135deg, #4285f4 0%, #1976d2 50%, #0d47a1 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .collaboration-header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            transform: translate(50px, -50px);
        }

        .collaboration-header h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .collaboration-subtitle {
            font-size: 1.2rem;
            margin-bottom: 10px;
            opacity: 0.9;
        }

        .collaboration-description {
            font-size: 1rem;
            opacity: 0.8;
            max-width: 600px;
            margin: 0 auto;
        }

        .vision-mission-content {
            padding: 80px 0;
            background: #f8fafc;
        }

        .vision-mission-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .vision-card, .mission-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .vision-mission-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .vision-icon, .mission-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .vision-icon {
            background: linear-gradient(135deg, #4285f4, #1976d2);
        }

        .mission-icon {
            background: linear-gradient(135deg, #4285f4, #1976d2);
        }

        .vision-mission-header h3 {
            font-size: 1.5rem;
            color: #333;
            font-weight: bold;
        }

        .vision-mission-list {
            list-style: none;
            padding: 0;
        }

        .vision-mission-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
            color: #666;
            line-height: 1.6;
        }

        .vision-mission-list li::before {
            content: '•';
            color: #4285f4;
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 2px;
        }

        /* Values Section */
        .values-section {
            padding: 100px 0;
            background: white;
            position: relative;
            overflow: hidden;
        }

        .values-decoration {
            position: absolute;
            top: 50px;
            left: 50px;
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #06b6d4, #0891b2);
            border-radius: 50%;
            opacity: 0.8;
            z-index: 1;
        }

        .values-header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            z-index: 2;
        }

        .values-header-badge {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #4285f4;
            color: white;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 1.2rem;
            font-weight: 600;
            box-shadow: 0 8px 25px rgba(66, 133, 244, 0.3);
        }

        .star-icon {
            font-size: 1.3rem;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            max-width: 1000px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .value-card {
            background: #f8fafc;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
            position: relative;
        }

        .value-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            background: white;
        }

        .value-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            display: block;
        }

        .value-card h3 {
            font-size: 1.4rem;
            color: #4285f4;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .value-card p {
            color: #666;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .collaboration-card {
            grid-column: 1 / -1;
            max-width: 400px;
            margin: 0 auto;
        }

        /* Responsive Design for Values Section */
        @media (max-width: 768px) {
            .values-section {
                padding: 80px 0;
            }

            .values-decoration {
                width: 80px;
                height: 80px;
                top: 30px;
                left: 30px;
            }

            .values-header-badge {
                padding: 12px 25px;
                font-size: 1.1rem;
            }

            .values-grid {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 0 20px;
            }

            .value-card {
                padding: 30px 25px;
            }

            .collaboration-card {
                grid-column: 1;
            }
        }

        @media (max-width: 480px) {
            .values-section {
                padding: 60px 0;
            }

            .values-header-badge {
                padding: 10px 20px;
                font-size: 1rem;
            }

            .value-card {
                padding: 25px 20px;
            }

            .value-card h3 {
                font-size: 1.2rem;
            }
        }

        /* Responsive Design for New Sections */
        @media (max-width: 768px) {
            .about-header {
                flex-direction: column;
                gap: 10px;
            }

            .about-header h2 {
                font-size: 1.5rem;
            }

            .intro-card {
                padding: 30px 20px;
            }

            .intro-card h3 {
                font-size: 1.3rem;
            }

            .social-buttons {
                justify-content: center;
            }

            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }

            .stat-item {
                padding: 30px 15px;
            }

            .stat-number {
                font-size: 2rem;
            }

            .collaboration-header h2 {
                font-size: 2rem;
            }

            .collaboration-subtitle {
                font-size: 1rem;
            }

            .vision-mission-grid {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 0 20px;
            }

            .vision-card, .mission-card {
                padding: 30px 20px;
            }

            .vision-mission-content {
                padding: 60px 0;
            }

            .values-header-badge {
                flex-direction: column;
                gap: 5px;
            }

            .star-icon {
                font-size: 2rem;
            }

            .values-title {
                font-size: 1.5rem;
            }

            .values-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .value-card {
                padding: 30px 20px;
            }

            .value-icon {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .about-section, .intro-section, .stats-section {
                padding: 60px 0;
            }

            .social-buttons {
                flex-direction: column;
                align-items: center;
            }

            .social-btn {
                width: 200px;
                justify-content: center;
            }

            .collaboration-header {
                padding: 40px 0;
            }

            .collaboration-header h2 {
                font-size: 1.5rem;
            }

            .vision-mission-header {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            .vision-mission-section {
                padding: 40px 0;
            }

            .values-header-badge {
                padding: 15px 25px;
            }

            .values-grid {
                gap: 20px;
            }

            .value-card {
                padding: 25px 15px;
            }

            .value-icon {
                font-size: 2rem;
            }
        }

        /* Organizational Structure Section */
        .organizational-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            position: relative;
        }

        .org-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .org-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 10px;
        }

        .crown-icon {
            font-size: 2rem;
        }

        .org-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e40af;
            margin: 0;
        }

        .org-underline {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #06b6d4, #0891b2);
            margin: 15px auto;
            border-radius: 2px;
        }

        .org-subtitle {
            font-size: 1.1rem;
            color: #64748b;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .filter-container {
            margin-top: 30px;
        }

        .filter-btn {
            background: #1e40af;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            margin: 0 auto;
        }

        .filter-btn:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        .dropdown-arrow {
            font-size: 0.8rem;
        }

        .org-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .member-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .member-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .member-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #1e40af;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .photo-placeholder {
            color: white;
            font-size: 2rem;
            font-weight: bold;
        }

        .member-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .member-position {
            color: #1e40af;
            font-weight: 500;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .member-contact {
            margin-bottom: 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #64748b;
        }

        .contact-icon {
            font-size: 1rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .social-link:hover {
            background: #1e40af;
            transform: translateY(-3px);
        }

        .social-link.linkedin:hover {
            background: #0077b5;
        }

        .social-link.instagram:hover {
            background: #e4405f;
        }

        .social-link.twitter:hover {
            background: #1da1f2;
        }

        @media (max-width: 768px) {
            .org-title h2 {
                font-size: 2rem;
            }

            .org-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .member-card {
                padding: 20px;
            }

            .organizational-section {
                padding: 60px 0;
            }
        }

        /* Adding styles for Events section */
        .events-section {
            padding: 80px 0;
            background: #f8fafc;
        }

        .events-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .events-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 10px;
        }

        .target-icon {
            font-size: 2rem;
        }

        .events-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e40af;
            margin: 0;
        }

        .events-underline {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #06b6d4, #0891b2);
            margin: 0 auto 20px;
            border-radius: 2px;
        }

        .events-subtitle {
            font-size: 1.1rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto 40px;
            line-height: 1.6;
        }

        .filter-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .filter-buttons .filter-btn {
            padding: 10px 20px;
            border: 2px solid #e2e8f0;
            background: white;
            color: #64748b;
            border-radius: 25px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-buttons .filter-btn:hover,
        .filter-buttons .filter-btn.active {
            background: #1e40af;
            color: white;
            border-color: #1e40af;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .event-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .event-header {
            padding: 20px;
            color: white;
            font-weight: 700;
            text-align: center;
        }

        .event-header.tech-summit {
            background: linear-gradient(135deg, #1e40af, #3b82f6);
        }

        .event-header.coding-bootcamp {
            background: linear-gradient(135deg, #059669, #10b981);
        }

        .event-header.ai-workshop {
            background: linear-gradient(135deg, #7c3aed, #a855f7);
        }

        .event-header.startup-pitch {
            background: linear-gradient(135deg, #dc2626, #ef4444);
        }

        .event-header.cybersecurity {
            background: linear-gradient(135deg, #1e40af, #3b82f6);
        }

        .event-header.game-jam {
            background: linear-gradient(135deg, #ea580c, #f97316);
        }

        .event-header h3 {
            margin: 0;
            font-size: 1.3rem;
        }

        .event-content {
            padding: 25px;
        }

        .event-details {
            margin-bottom: 20px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            font-size: 0.95rem;
            color: #64748b;
        }

        .detail-icon {
            font-size: 1rem;
        }

        .event-status {
            margin-bottom: 20px;
        }

        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .status-badge.open {
            background: #dcfce7;
            color: #166534;
        }

        .status-badge.coming {
            background: #fef3c7;
            color: #92400e;
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #1e40af, #3b82f6);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .register-btn:hover {
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
            transform: translateY(-2px);
        }

        /* Adding styles for Footer */
        .footer {
            background: linear-gradient(135deg, #1e3a8a, #1e40af);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #e2e8f0;
        }

        .footer-logo .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            margin-bottom: 15px;
            display: block;
        }

        .footer-description {
            color: #cbd5e1;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .social-media {
            display: flex;
            gap: 15px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
        }

        .contact-info .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 15px;
            color: #cbd5e1;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            text-align: center;
            color: #cbd5e1;
        }

        /* Adding responsive styles for Events and Footer */
        @media (max-width: 768px) {
            .events-title h2 {
                font-size: 2rem;
            }

            .events-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .filter-buttons {
                gap: 10px;
            }

            .filter-buttons .filter-btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .footer-section {
                text-align: center;
            }

            .social-media {
                justify-content: center;
            }
        }
    </style>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navMenu = document.getElementById('navMenu');

        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            
            // Animate hamburger menu
            const spans = mobileMenuBtn.querySelectorAll('span');
            if (navMenu.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            } else {
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });

        // Close mobile menu when clicking on a link
        navMenu.addEventListener('click', (e) => {
            if (e.target.tagName === 'A') {
                navMenu.classList.remove('active');
                const spans = mobileMenuBtn.querySelectorAll('span');
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });

        // Smooth scroll function
        function scrollToContent() {
            window.scrollTo({
                top: window.innerHeight,
                behavior: 'smooth'
            });
        }

        // Add scroll effect to header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'white';
                header.style.backdropFilter = 'none';
            }
        });

        // Add hover effect to navigation items
        const navLinks = document.querySelectorAll('.nav-menu a:not(.login-portal)');
        navLinks.forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Add click animation to login portal
        const loginPortal = document.querySelector('.login-portal');
        loginPortal.addEventListener('click', function(e) {
            e.preventDefault();
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    </script>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <div class="logo-icon">D</div>
                <div class="logo-text">DIPTEK</div>
            </div>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kegiatan</a></li>
                <li><a href="#">Struktur Organisasi</a></li>
                <li><a href="#">Hubungi Kami</a></li>
                <li><a href="#" class="login-portal">Login</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <img src="laptop.png" alt="Laptop" class="laptop-image">
        <h1 class="hero-title">Selamat Datang di BEM 2024</h1>
        <p class="hero-subtitle">DIPTEK - Membangun Masa Depan Teknologi</p>
        <div class="subtitle-accent"></div>
        <div class="scroll-indicator" onclick="scrollToContent()">
            <p class="scroll-text">Scroll Down</p>
            <span class="scroll-arrow">↓</span>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-header">
                <span class="about-icon">💡</span>
                <h2>Tentang Kami</h2>
            </div>
            <p class="about-description">BEM 2024 adalah organisasi mahasiswa yang berdedikasi dalam mempromosikan dan mengembangkan teknologi di HIMATEK.</p>
        </div>
    </section>

    <!-- Introduction Card Section -->
    <section class="intro-section">
        <div class="container">
            <div class="intro-card">
                <span class="card-icon">💻</span>
                <h3>Visi</h3>
                <p>Mengembangkan potensi mahasiswa dalam bidang teknologi melalui berbagai kegiatan dan pelatihan.</p>
                <div class="social-buttons">
                    <button class="social-btn facebook">Facebook</button>
                    <button class="social-btn instagram">Instagram</button>
                    <button class="social-btn twitter">Twitter</button>
                    <button class="social-btn whatsapp">WhatsApp</button>
                </div>
            </div>
            <div class="intro-card">
                <span class="card-icon">🎯</span>
                <h3>Misi</h3>
                <p>Membantu mahasiswa HIMATEK untuk menjadi profesional dalam teknologi melalui kolaborasi dan inovasi.</p>
                <div class="social-buttons">
                    <button class="social-btn facebook">Facebook</button>
                    <button class="social-btn instagram">Instagram</button>
                    <button class="social-btn twitter">Twitter</button>
                    <button class="social-btn whatsapp">WhatsApp</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-icon">👥</span>
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Anggota Aktif</div>
                </div>
                <div class="stat-item">
                    <span class="stat-icon">📅</span>
                    <div class="stat-number">10+</div>
                    <div class="stat-label">Kegiatan Bulanan</div>
                </div>
                <div class="stat-item">
                    <span class="stat-icon">🏆</span>
                    <div class="stat-number">3</div>
                    <div class="stat-label">Juara Nasional</div>
                </div>
                <div class="stat-item">
                    <span class="stat-icon">📚</span>
                    <div class="stat-number">20+</div>
                    <div class="stat-label">Pelatihan Teknis</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="vision-mission-section">
        <div class="collaboration-header">
            <h2>Visi dan Misi</h2>
            <p class="collaboration-subtitle">Kolaborasi untuk Masa Depan Teknologi</p>
            <p class="collaboration-description">BEM 2024 berkomitmen untuk membantu mahasiswa HIMATEK dalam mencapai visi dan misi mereka dalam bidang teknologi.</p>
        </div>
        <div class="vision-mission-content">
            <div class="container">
                <div class="vision-mission-grid">
                    <div class="vision-card">
                        <div class="vision-mission-header">
                            <span class="vision-icon">👁️</span>
                            <h3>Visi</h3>
                        </div>
                        <ul class="vision-mission-list">
                            <li>Mengembangkan potensi mahasiswa dalam bidang teknologi</li>
                            <li>Membantu mahasiswa HIMATEK menjadi profesional</li>
                            <li>Meningkatkan kualitas pendidikan di HIMATEK</li>
                        </ul>
                    </div>
                    <div class="mission-card">
                        <div class="vision-mission-header">
                            <span class="mission-icon">🔧</span>
                            <h3>Misi</h3>
                        </div>
                        <ul class="vision-mission-list">
                            <li>Melakukan berbagai kegiatan dan pelatihan</li>
                            <li>Membangun hubungan dengan industri teknologi</li>
                            <li>Mendorong inovasi dan kolaborasi di HIMATEK</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="values-decoration"></div>
            <div class="values-header">
                <h2>Nilai-nilai Kami</h2>
                <div class="values-header-badge">
                    <span class="star-icon">⭐</span>
                    <span>Inovasi</span>
                </div>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <span class="value-icon">🤝</span>
                    <h3>Kolaborasi</h3>
                    <p>Kerjasama yang baik antara anggota dan dengan pihak lain.</p>
                </div>
                <div class="value-card">
                    <span class="value-icon">💪</span>
                    <h3>Ketekunan</h3>
                    <p>Tetap berusaha keras untuk mencapai tujuan.</p>
                </div>
                <div class="value-card">
                    <span class="value-icon">💡</span>
                    <h3>Inovasi</h3>
                    <p>Menciptakan ide-ide baru dan terus berkembang.</p>
                </div>
                <div class="value-card collaboration-card">
                    <span class="value-icon">🌟</span>
                    <h3>Keberhasilan</h3>
                    <p>Mencapai prestasi yang luar biasa dalam setiap kegiatan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Organizational Structure Section -->
    <section class="organizational-section">
        <div class="container">
            <div class="org-header">
                <div class="org-title">
                    <span class="crown-icon">👑</span>
                    <h2>Struktur Organisasi</h2>
                </div>
                <div class="org-underline"></div>
                <p class="org-subtitle">Mengenal para pemimpin yang berdedikasi membangun masa depan HIMATEK</p>
                <div class="filter-container">
                    <button class="filter-btn">
                        <span>Filter Periode</span>
                        <span class="dropdown-arrow">▼</span>
                    </button>
                </div>
            </div>
            
            <div class="org-grid">
                <!-- Member Card 1 -->
                <div class="member-card">
                    <div class="member-photo">
                        <span class="photo-placeholder">?</span>
                    </div>
                    <h3 class="member-name">Ahmad Rizki Pratama</h3>
                    <p class="member-position">Ketua Presidium</p>
                    <div class="member-contact">
                        <div class="contact-item">
                            <span class="contact-icon">📞</span>
                            <span>+62 812-3456-7890</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">✉️</span>
                            <span>ahmad.rizki@himatek.ac.id</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link linkedin">💼</a>
                        <a href="#" class="social-link instagram">📷</a>
                        <a href="#" class="social-link twitter">🐦</a>
                    </div>
                </div>

                <!-- Member Card 2 -->
                <div class="member-card">
                    <div class="member-photo">
                        <span class="photo-placeholder">?</span>
                    </div>
                    <h3 class="member-name">Sari Dewi Lestari</h3>
                    <p class="member-position">Wakil Ketua</p>
                    <div class="member-contact">
                        <div class="contact-item">
                            <span class="contact-icon">📞</span>
                            <span>+62 813-4567-8901</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">✉️</span>
                            <span>sari.dewi@himatek.ac.id</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link linkedin">💼</a>
                        <a href="#" class="social-link instagram">📷</a>
                        <a href="#" class="social-link twitter">🐦</a>
                    </div>
                </div>

                <!-- Member Card 3 -->
                <div class="member-card">
                    <div class="member-photo">
                        <span class="photo-placeholder">?</span>
                    </div>
                    <h3 class="member-name">Budi Santoso</h3>
                    <p class="member-position">Sekretaris 1</p>
                    <div class="member-contact">
                        <div class="contact-item">
                            <span class="contact-icon">📞</span>
                            <span>+62 814-5678-9012</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">✉️</span>
                            <span>budi.santoso@himatek.ac.id</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link linkedin">💼</a>
                        <a href="#" class="social-link instagram">📷</a>
                        <a href="#" class="social-link twitter">🐦</a>
                    </div>
                </div>

                <!-- Member Card 4 -->
                <div class="member-card">
                    <div class="member-photo">
                        <span class="photo-placeholder">?</span>
                    </div>
                    <h3 class="member-name">Maya Putri</h3>
                    <p class="member-position">Sekretaris 2</p>
                    <div class="member-contact">
                        <div class="contact-item">
                            <span class="contact-icon">📞</span>
                            <span>+62 815-6789-0123</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">✉️</span>
                            <span>maya.putri@himatek.ac.id</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link linkedin">💼</a>
                        <a href="#" class="social-link instagram">📷</a>
                        <a href="#" class="social-link twitter">🐦</a>
                    </div>
                </div>

                <!-- Member Card 5 -->
                <div class="member-card">
                    <div class="member-photo">
                        <span class="photo-placeholder">?</span>
                    </div>
                    <h3 class="member-name">Andi Wijaya</h3>
                    <p class="member-position">Bendahara 1</p>
                    <div class="member-contact">
                        <div class="contact-item">
                            <span class="contact-icon">📞</span>
                            <span>+62 816-7890-1234</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">✉️</span>
                            <span>andi.wijaya@himatek.ac.id</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link linkedin">💼</a>
                        <a href="#" class="social-link instagram">📷</a>
                        <a href="#" class="social-link twitter">🐦</a>
                    </div>
                </div>

                <!-- Member Card 6 -->
                <div class="member-card">
                    <div class="member-photo">
                        <span class="photo-placeholder">?</span>
                    </div>
                    <h3 class="member-name">Lisa Maharani</h3>
                    <p class="member-position">Bendahara 2</p>
                    <div class="member-contact">
                        <div class="contact-item">
                            <span class="contact-icon">📞</span>
                            <span>+62 817-8901-2345</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">✉️</span>
                            <span>lisa.maharani@himatek.ac.id</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link linkedin">💼</a>
                        <a href="#" class="social-link instagram">📷</a>
                        <a href="#" class="social-link twitter">🐦</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="events-section">
        <div class="container">
            <div class="events-header">
                <div class="events-title">
                    <span class="target-icon">🎯</span>
                    <h2>Kegiatan Kami</h2>
                </div>
                <div class="events-underline"></div>
                <p class="events-subtitle">Berbagai kegiatan yang kami adakan untuk meningkatkan keterampilan dan pengetahuan mahasiswa HIMATEK.</p>
                <div class="filter-buttons">
                    <button class="filter-btn">Semua</button>
                    <button class="filter-btn">Tech Summit</button>
                    <button class="filter-btn">Coding Bootcamp</button>
                    <button class="filter-btn">AI Workshop</button>
                    <button class="filter-btn">Startup Pitch</button>
                    <button class="filter-btn">Cybersecurity</button>
                    <button class="filter-btn">Game Jam</button>
                </div>
            </div>
            <div class="events-grid">
                <!-- Event Card 1 -->
                <div class="event-card">
                    <div class="event-header tech-summit">
                        <h3>Tech Summit</h3>
                    </div>
                    <div class="event-content">
                        <div class="event-details">
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>20 Oktober 2024</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📍</span>
                                <span>Gedung A, HIMATEK</span>
                            </div>
                        </div>
                        <div class="event-status">
                            <span class="status-badge open">Open</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="event-card">
                    <div class="event-header coding-bootcamp">
                        <h3>Coding Bootcamp</h3>
                    </div>
                    <div class="event-content">
                        <div class="event-details">
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>15 November 2024</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📍</span>
                                <span>Gedung B, HIMATEK</span>
                            </div>
                        </div>
                        <div class="event-status">
                            <span class="status-badge coming">Segera Datang</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="event-card">
                    <div class="event-header ai-workshop">
                        <h3>AI Workshop</h3>
                    </div>
                    <div class="event-content">
                        <div class="event-details">
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>5 Desember 2024</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📍</span>
                                <span>Gedung C, HIMATEK</span>
                            </div>
                        </div>
                        <div class="event-status">
                            <span class="status-badge open">Open</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Event Card 4 -->
                <div class="event-card">
                    <div class="event-header startup-pitch">
                        <h3>Startup Pitch</h3>
                    </div>
                    <div class="event-content">
                        <div class="event-details">
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>20 Desember 2024</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📍</span>
                                <span>Gedung D, HIMATEK</span>
                            </div>
                        </div>
                        <div class="event-status">
                            <span class="status-badge coming">Segera Datang</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Event Card 5 -->
                <div class="event-card">
                    <div class="event-header cybersecurity">
                        <h3>Cybersecurity</h3>
                    </div>
                    <div class="event-content">
                        <div class="event-details">
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>10 Januari 2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📍</span>
                                <span>Gedung E, HIMATEK</span>
                            </div>
                        </div>
                        <div class="event-status">
                            <span class="status-badge open">Open</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Event Card 6 -->
                <div class="event-card">
                    <div class="event-header game-jam">
                        <h3>Game Jam</h3>
                    </div>
                    <div class="event-content">
                        <div class="event-details">
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>25 Januari 2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📍</span>
                                <span>Gedung F, HIMATEK</span>
                            </div>
                        </div>
                        <div class="event-status">
                            <span class="status-badge coming">Segera Datang</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Tentang Kami</h4>
                    <p class="footer-description">BEM 2024 adalah organisasi mahasiswa yang berdedikasi dalam mempromosikan dan mengembangkan teknologi di HIMATEK.</p>
                </div>
                <div class="footer-section footer-logo">
                    <div class="logo">
                        <div class="logo-icon">D</div>
                        <div class="logo-text">DIPTEK</div>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Kontak</h4>
                    <div class="contact-info">
                        <div class="contact-item">
                            <span class="contact-icon">📞</span>
                            <span>+62 812-3456-7890</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">✉️</span>
                            <span>bem@himatek.ac.id</span>
                        </div>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Sosial Media</h4>
                    <div class="social-media">
                        <a href="#" class="social-icon facebook">💼</a>
                        <a href="#" class="social-icon instagram">📷</a>
                        <a href="#" class="social-icon twitter">🐦</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 BEM 2024 - DIPTEK. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>
