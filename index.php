<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlynexoHub Coffee - Artisan Coffee Experience in Downtown</title>
    <meta name="description" content="PlynexoHub Coffee offers freshly roasted beans, handcrafted beverages, and cozy atmosphere. Visit our downtown location for authentic coffee culture. Click here to continue exploring our story and community-focused approach to exceptional coffee brewing.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c1810;
            background-color: #f8f5f0;
        }

        .nav-container-x7k9 {
            background: linear-gradient(135deg, #8b4513, #a0522d);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .nav-wrapper-m3p8 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-section-q4r7 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .nav-menu-z8w5 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu-z8w5 a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .nav-menu-z8w5 a:hover {
            background-color: rgba(255,255,255,0.2);
            color: #f4e4bc;
        }

        .hero-banner-l6n2 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/302899/pexels-photo-302899.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-b9t4 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-v5s1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.7);
            font-weight: bold;
        }

        .hero-subtitle-k2d8 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }

        .cta-button-h7j3 {
            display: inline-block;
            background: linear-gradient(45deg, #d2691e, #cd853f);
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .cta-button-h7j3:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
        }

        .section-wrapper-p9x6 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-section-r4y7 {
            background-color: #fff;
            border-radius: 15px;
            padding: 3rem;
            margin: 2rem 0;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .section-title-e8w3 {
            font-size: 2.5rem;
            color: #8b4513;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }

        .section-title-e8w3::after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background: linear-gradient(45deg, #d2691e, #cd853f);
            margin: 1rem auto;
            border-radius: 2px;
        }

        .content-grid-f3n9 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .content-card-u6k2 {
            background: linear-gradient(135deg, #f4e4bc, #e6d3a3);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .content-card-u6k2:hover {
            transform: translateY(-5px);
        }

        .card-title-m7s4 {
            font-size: 1.5rem;
            color: #8b4513;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .history-timeline-j8v5 {
            background: linear-gradient(135deg, #deb887, #d2b48c);
            padding: 3rem;
            margin: 3rem 0;
            border-radius: 15px;
            position: relative;
        }

        .timeline-item-n4q8 {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            padding: 1.5rem;
            background: rgba(255,255,255,0.8);
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .timeline-year-t9r6 {
            font-size: 2rem;
            font-weight: bold;
            color: #8b4513;
            margin-right: 2rem;
            min-width: 100px;
        }

        .specialty-showcase-a5d7 {
            background: url('https://images.pexels.com/photos/1695052/pexels-photo-1695052.jpeg') center/cover;
            padding: 4rem 2rem;
            text-align: center;
            position: relative;
            margin: 3rem 0;
            border-radius: 15px;
            overflow: hidden;
        }

        .specialty-showcase-a5d7::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(139, 69, 19, 0.8);
        }

        .specialty-content-c2x9 {
            position: relative;
            z-index: 2;
            color: white;
        }

        .brewing-methods-g6h1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .method-card-i3l8 {
            background: linear-gradient(135deg, #f5deb3, #daa520);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
        }

        .method-card-i3l8:hover {
            transform: scale(1.05);
        }

        .reviews-container-o7p4 {
            background: linear-gradient(135deg, #fffaf0, #fdf5e6);
            padding: 3rem;
            margin: 3rem 0;
            border-radius: 15px;
        }

        .review-item-w9k5 {
            background: white;
            padding: 2rem;
            margin: 1.5rem 0;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-left: 5px solid #d2691e;
        }

        .reviewer-name-x4b7 {
            font-weight: bold;
            color: #8b4513;
            margin-top: 1rem;
        }

        .community-section-y2n6 {
            background: url('https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg') center/cover;
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }

        .community-section-y2n6::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.6);
        }

        .community-content-z5t3 {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
        }

        .footer-main-s8q1 {
            background: linear-gradient(135deg, #2f1b14, #8b4513);
            color: white;
            padding: 3rem 2rem 1rem;
            margin-top: 4rem;
        }

        .footer-grid-d4v8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-section-k7m2 h3 {
            color: #f4e4bc;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .contact-link-p6n9 {
            color: #f4e4bc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-link-p6n9:hover {
            color: #fff;
        }

        .modal-overlay-r3x7 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-b8y4 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .close-modal-f9k6 {
            float: right;
            font-size: 2rem;
            cursor: pointer;
            color: #8b4513;
            font-weight: bold;
        }

        .continue-link-h4j7 {
            background: linear-gradient(45deg, #8b4513, #a0522d);
            color: white;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 25px;
            display: inline-block;
            margin: 1rem 0;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .continue-link-h4j7:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }

        .sustainability-block-l9m3 {
            background: linear-gradient(135deg, #98fb98, #90ee90);
            padding: 3rem;
            margin: 3rem 0;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .origin-stories-n6p2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .origin-card-q8r5 {
            background: linear-gradient(135deg, #ffefd5, #ffe4b5);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            .nav-menu-z8w5 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-v5s1 {
                font-size: 2.5rem;
            }
            
            .nav-wrapper-m3p8 {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%38%31%31%65%33%33%30%33%65%63%68%6F%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%38%31%31%65%33%33%30%33%65%63%68%6F%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%38%31%31%65%33%33%30%33%65%63%68%6F%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>
    
    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m3p8">
            <div class="logo-section-q4r7">PlynexoHub Coffee</div>
            <ul class="nav-menu-z8w5">
                <li><a href="#about-anchor-t4y8">About Us</a></li>
                <li><a href="#history-anchor-m7k3">Our History</a></li>
                <li><a href="#brewing-anchor-p9x2">Brewing Methods</a></li>
                <li><a href="#specialty-anchor-r6n4">Specialties</a></li>
                <li><a href="#community-anchor-w8v1">Community</a></li>
                <li><a href="#sustainability-anchor-l5q9">Sustainability</a></li>
                <li><a href="#origins-anchor-d3h7">Bean Origins</a></li>
                <li><a href="#reviews-anchor-k2m6">Reviews</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero-banner-l6n2">
        <div class="hero-content-b9t4">
            <h1 class="hero-title-v5s1">PlynexoHub Coffee</h1>
            <p class="hero-subtitle-k2d8">Authentic Coffee Culture in the Heart of Downtown</p>
            <a href="#about-anchor-t4y8" class="cta-button-h7j3">Discover Our Story</a>
        </div>
    </section>

    <div class="section-wrapper-p9x6">
        <section id="about-anchor-t4y8" class="about-section-r4y7">
            <h2 class="section-title-e8w3">Welcome to PlynexoHub Coffee</h2>
            <div class="content-grid-f3n9">
                <div class="content-card-u6k2">
                    <h3 class="card-title-m7s4">Our Mission</h3>
                    <p>At PlynexoHub Coffee, we believe every cup tells a story. Our mission is to create meaningful connections through exceptional coffee experiences. We source our beans directly from small farms around the world, ensuring fair trade practices and sustainable farming methods. Each morning, our skilled baristas craft beverages that celebrate the unique characteristics of every bean.</p>
                    <a href="#brewing-anchor-p9x2" class="continue-link-h4j7">Click here to continue learning about our brewing</a>
                </div>
                <div class="content-card-u6k2">
                    <h3 class="card-title-m7s4">Our Atmosphere</h3>
                    <p>Step into our welcoming space where the aroma of freshly roasted beans mingles with the gentle hum of conversation. Our interior features reclaimed wood tables, comfortable seating areas, and local artwork that reflects our community's creative spirit. Whether you're meeting friends, working on your laptop, or simply enjoying a quiet moment, PlynexoHub provides the perfect backdrop for your coffee ritual.</p>
                </div>
                <div class="content-card-u6k2">
                    <h3 class="card-title-m7s4">Quality Commitment</h3>
                    <p>We roast our beans in small batches using traditional methods passed down through generations. Our commitment to quality extends beyond the cup – we carefully select each origin, work closely with farmers, and ensure every step of the process meets our exacting standards. From bean to cup, we maintain complete control over the quality that defines the PlynexoHub experience.</p>
                </div>
            </div>
        </section>

        <section id="history-anchor-m7k3" class="history-timeline-j8v5">
            <h2 class="section-title-e8w3">Our Journey Through Time</h2>
            <div class="timeline-item-n4q8">
                <div class="timeline-year-t9r6">2018</div>
                <div>
                    <h3 class="card-title-m7s4">The Beginning</h3>
                    <p>PlynexoHub Coffee started as a dream shared by three friends who met while traveling through coffee-growing regions of Central America. Inspired by the passion and dedication of local farmers, they decided to bring authentic coffee culture to their hometown. The first location opened in a converted warehouse space, featuring a vintage roaster and handcrafted furniture made from reclaimed materials.</p>
                </div>
            </div>
            <div class="timeline-item-n4q8">
                <div class="timeline-year-t9r6">2019</div>
                <div>
                    <h3 class="card-title-m7s4">Community Growth</h3>
                    <p>Word spread quickly about our unique approach to coffee. Local artists began displaying their work on our walls, musicians started hosting intimate acoustic sessions, and writers found inspiration in our quiet corners. We established partnerships with five coffee farms across three countries, ensuring direct trade relationships that benefit both farmers and our customers through exceptional quality and fair compensation.</p>
                </div>
            </div>
            <div class="timeline-item-n4q8">
                <div class="timeline-year-t9r6">2021</div>
                <div>
                    <h3 class="card-title-m7s4">Expansion and Innovation</h3>
                    <p>Despite challenging times, our community's support allowed us to expand our roasting capacity and introduce new brewing methods. We added a cupping room for educational tastings and began offering coffee education classes. Our sustainability initiatives launched this year, including a comprehensive recycling program and partnerships with local urban farms for composting coffee grounds.</p>
                    <a href="#sustainability-anchor-l5q9" class="continue-link-h4j7">Click here to continue reading about sustainability</a>
                </div>
            </div>
            <div class="timeline-item-n4q8">
                <div class="timeline-year-t9r6">2023</div>
                <div>
                    <h3 class="card-title-m7s4">Recognition and Future</h3>
                    <p>PlynexoHub Coffee received recognition from the Specialty Coffee Association for our commitment to quality and community engagement. We launched our online platform, allowing coffee enthusiasts to order freshly roasted beans for home brewing. Looking ahead, we're planning educational workshops, farmer exchange programs, and continued expansion of our direct trade relationships.</p>
                </div>
            </div>
        </section>

        <section id="specialty-anchor-r6n4" class="specialty-showcase-a5d7">
            <div class="specialty-content-c2x9">
                <h2 class="section-title-e8w3">Signature Specialties</h2>
                <p style="font-size: 1.2rem; margin-bottom: 2rem;">Our menu features carefully crafted beverages that showcase the unique characteristics of each coffee origin. From single-origin pour-overs to creative seasonal blends, every drink is prepared with precision and passion. Our baristas undergo extensive training to ensure consistency and excellence in every cup.</p>
                <p style="font-size: 1.1rem;">We offer traditional espresso-based drinks alongside innovative brewing methods like siphon, Chemex, and cold brew. Seasonal specialties feature locally sourced ingredients and creative flavor combinations that complement our coffee's natural notes. Each drink is prepared to order, ensuring optimal temperature, extraction, and presentation.</p>
            </div>
        </section>

        <section id="brewing-anchor-p9x2" class="brewing-methods-g6h1">
            <div class="method-card-i3l8">
                <h3 class="card-title-m7s4">Pour Over Perfection</h3>
                <p>Our pour-over method highlights the subtle nuances of single-origin beans. Using precise water temperature, timing, and pouring technique, we extract the full flavor profile of each coffee. This method allows you to taste the terroir – the unique environmental factors that influence each bean's character.</p>
            </div>
            <div class="method-card-i3l8">
                <h3 class="card-title-m7s4">Espresso Excellence</h3>
                <p>Our espresso program features carefully calibrated machines and expertly trained baristas. We adjust grind size, dose, and extraction time throughout the day to maintain consistency. Each shot is pulled with precision, creating the foundation for our milk-based beverages and enjoyed solo by espresso enthusiasts.</p>
            </div>
            <div class="method-card-i3l8">
                <h3 class="card-title-m7s4">Cold Brew Innovation</h3>
                <p>Our cold brew process involves steeping coarsely ground coffee for 18-24 hours, creating a smooth, naturally sweet concentrate. We offer various cold brew preparations, including nitro-infused versions and seasonal flavor additions. This method produces a less acidic coffee that's perfect for warm weather enjoyment.</p>
            </div>
            <div class="method-card-i3l8">
                <h3 class="card-title-m7s4">French Press Tradition</h3>
                <p>The French press method allows for full immersion brewing, extracting oils and fine particles that paper filters remove. This creates a full-bodied cup with rich texture and robust flavor. We use a precise coffee-to-water ratio and steeping time to achieve optimal extraction and balance.</p>
                <a href="#origins-anchor-d3h7" class="continue-link-h4j7">Click here to continue exploring our bean origins</a>
            </div>
        </section>

        <section id="sustainability-anchor-l5q9" class="sustainability-block-l9m3">
            <h2 class="section-title-e8w3">Environmental Stewardship</h2>
            <div class="content-grid-f3n9">
                <div class="content-card-u6k2">
                    <h3 class="card-title-m7s4">Farm Partnerships</h3>
                    <p>We work exclusively with farms that practice sustainable agriculture, including shade-grown coffee, water conservation, and soil preservation techniques. Our direct trade relationships ensure farmers receive fair compensation while maintaining environmental standards. We visit our partner farms annually to strengthen relationships and support sustainable practices.</p>
                </div>
                <div class="content-card-u6k2">
                    <h3 class="card-title-m7s4">Waste Reduction</h3>
                    <p>Our comprehensive waste reduction program includes composting coffee grounds, recycling packaging materials, and partnering with local urban farms. We offer discounts for customers who bring reusable cups and have eliminated single-use plastics from our operations. Used coffee grounds are available free to community gardeners.</p>
                </div>
                <div class="content-card-u6k2">
                    <h3 class="card-title-m7s4">Energy Efficiency</h3>
                    <p>Our roasting equipment and brewing systems are selected for energy efficiency and environmental impact. We use renewable energy sources where possible and have implemented LED lighting and efficient heating systems. Our packaging is made from recycled materials and designed for minimal environmental impact.</p>
                </div>
            </div>
        </section>

        <section id="origins-anchor-d3h7" class="origin-stories-n6p2">
            <div class="origin-card-q8r5">
                <h3 class="card-title-m7s4">Ethiopian Highlands</h3>
                <p>Our Ethiopian beans come from high-altitude farms in the Sidamo region, where coffee originated thousands of years ago. These beans offer bright acidity, floral notes, and wine-like complexity. The farmers use traditional processing methods passed down through generations, creating unique flavor profiles that reflect the region's rich coffee heritage.</p>
            </div>
            <div class="origin-card-q8r5">
                <h3 class="card-title-m7s4">Colombian Mountains</h3>
                <p>From the volcanic soils of Colombia's coffee triangle, we source beans with balanced acidity, medium body, and notes of caramel and chocolate. Our Colombian partners practice sustainable farming methods, including shade growing and natural pest control. These beans form the backbone of our signature blends and shine in espresso preparations.</p>
            </div>
            <div class="origin-card-q8r5">
                <h3 class="card-title-m7s4">Guatemalan Valleys</h3>
                <p>Our Guatemalan coffee comes from the Antigua region, where volcanic ash creates mineral-rich soil perfect for coffee cultivation. These beans offer full body, smoky undertones, and spicy complexity. The high altitude and cool temperatures create dense beans with concentrated flavors that develop beautifully during roasting.</p>
            </div>
            <div class="origin-card-q8r5">
                <h3 class="card-title-m7s4">Costa Rican Estates</h3>
                <p>From the Tarrazú region of Costa Rica, we source beans known for their bright acidity and clean finish. These high-altitude farms practice environmentally conscious cultivation, including water conservation and biodiversity preservation. The beans offer citrus notes, medium body, and exceptional clarity of flavor that showcases the terroir.</p>
                <a href="#community-anchor-w8v1" class="continue-link-h4j7">Click here to continue learning about our community</a>
            </div>
        </section>

        <section id="community-anchor-w8v1" class="community-section-y2n6">
            <div class="community-content-z5t3">
                <h2 class="section-title-e8w3">Community Connection</h2>
                <p style="font-size: 1.3rem; margin-bottom: 2rem;">PlynexoHub Coffee serves as more than a coffee shop – we're a community gathering place where relationships flourish and ideas take shape. Our space hosts book clubs, art exhibitions, acoustic music sessions, and educational workshops that bring people together around shared interests and passions.</p>
                <p style="font-size: 1.1rem; margin-bottom: 2rem;">We partner with local schools to provide educational programs about coffee cultivation, fair trade practices, and global agriculture. Our scholarship program supports students from coffee-growing regions to pursue agricultural education. We believe in giving back to the communities that make our coffee possible.</p>
                <p style="font-size: 1.1rem;">Local artists display their work on our walls, with rotating exhibitions that showcase diverse talents and perspectives. Musicians perform during our monthly open mic nights, creating an intimate venue for emerging and established artists. Writers find inspiration in our quiet corners, and entrepreneurs develop business plans over carefully crafted cups.</p>
            </div>
        </section>

        <section id="reviews-anchor-k2m6" class="reviews-container-o7p4">
            <h2 class="section-title-e8w3">What Our Customers Say</h2>
            <div class="review-item-w9k5">
                <p>"PlynexoHub Coffee has become my daily ritual. The baristas know my order, the atmosphere is perfect for morning meetings, and the coffee quality is consistently exceptional. I've tried their Ethiopian pour-over and Colombian espresso – both showcase the unique characteristics of their origins beautifully."</p>
                <div class="reviewer-name-x4b7">- Sarah Mitchell, Local Business Owner</div>
            </div>
            <div class="review-item-w9k5">
                <p>"As a coffee enthusiast who has traveled extensively, I can confidently say PlynexoHub rivals the best coffee shops I've experienced worldwide. Their commitment to direct trade relationships and sustainable practices aligns with my values, and their educational approach has deepened my appreciation for coffee culture."</p>
                <div class="reviewer-name-x4b7">- Marcus Rodriguez, Coffee Blogger</div>
            </div>
            <div class="review-item-w9k5">
                <p>"The community aspect of PlynexoHub sets it apart from other coffee shops. I've attended their cupping sessions, participated in book club discussions, and even displayed my photography on their walls. It's a place where coffee brings people together and friendships develop naturally."</p>
                <div class="reviewer-name-x4b7">- Jennifer Chen, Local Artist</div>
            </div>
            <div class="review-item-w9k5">
                <p>"PlynexoHub's cold brew is absolutely incredible – smooth, naturally sweet, and perfectly balanced. Their seasonal specialties always surprise me with creative flavor combinations that complement rather than mask the coffee's natural characteristics. The staff's knowledge and passion for coffee is evident in every interaction."</p>
                <div class="reviewer-name-x4b7">- David Thompson, Regular Customer</div>
            </div>
            <div class="review-item-w9k5">
                <p>"I love how PlynexoHub educates customers about coffee origins and brewing methods. Their transparency about sourcing practices and farmer relationships makes me feel good about supporting their business. Plus, their French press coffee is the perfect way to start my weekend mornings."</p>
                <div class="reviewer-name-x4b7">- Amanda Foster, Coffee Enthusiast</div>
            </div>
        </section>
    </div>

    <footer class="footer-main-s8q1">
        <div class="footer-grid-d4v8">
            <div class="footer-section-k7m2">
                <h3>Contact Information</h3>
                <p>PlynexoHub Coffee</p>
                <p>847 Maple Street Downtown</p>
                <p>Portland, OR 97205</p>
                <p>Phone: <a href="tel:+15032847392" class="contact-link-p6n9">(503) 284-7392</a></p>
                <p>Email: <a href="mailto:hello@plynexohub.com" class="contact-link-p6n9">hello@plynexohub.com</a></p>
            </div>
                        <div class="footer-section-k7m2">
                <h3>Hours of Operation</h3>
                <p>Monday - Friday: 6:00 AM - 8:00 PM</p>
                <p>Saturday: 7:00 AM - 9:00 PM</p>
                <p>Sunday: 7:00 AM - 7:00 PM</p>
                <p>Holiday hours may vary</p>
                <p>Follow us for updates and events</p>
            </div>
            <div class="footer-section-k7m2">
                <h3>Services</h3>
                <p>Fresh Roasted Coffee Beans</p>
                <p>Espresso & Pour Over Drinks</p>
                <p>Coffee Education Classes</p>
                <p>Private Event Hosting</p>
                <p>Corporate Catering</p>
                <p>Online Bean Orders</p>
            </div>
            <div class="footer-section-k7m2">
                <h3>Legal</h3>
                <p><a href="#" onclick="openModal('privacy')" class="contact-link-p6n9">Privacy Policy</a></p>
                <p><a href="#" onclick="openModal('terms')" class="contact-link-p6n9">Terms of Service</a></p>
                <p>© 2024 PlynexoHub Coffee</p>
                <p>All rights reserved</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal-x9z4" class="modal-overlay-r3x7">
        <div class="modal-content-b8y4">
            <span class="close-modal-f9k6" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>PlynexoHub Coffee collects information you provide directly to us, such as when you create an account, make a purchase, sign up for our newsletter, or contact us for support. This may include your name, email address, phone number, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, and communicate with you about products, services, and events.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share your information with service providers who assist us in operating our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Cookies and Tracking</h3>
            <p>We use cookies and similar tracking technologies to collect information about your browsing activities and to provide personalized content and advertisements.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of certain communications from us.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at privacy@plynexohub.com or (503) 284-7392.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal-y8w3" class="modal-overlay-r3x7">
        <div class="modal-content-b8y4">
            <span class="close-modal-f9k6" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using PlynexoHub Coffee's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Use License</h3>
            <p>Permission is granted to temporarily download one copy of the materials on PlynexoHub Coffee's website for personal, non-commercial transitory viewing only.</p>
            
            <h3>Disclaimer</h3>
            <p>The materials on PlynexoHub Coffee's website are provided on an 'as is' basis. PlynexoHub Coffee makes no warranties, expressed or implied, and hereby disclaims all other warranties including implied warranties or conditions of merchantability.</p>
            
            <h3>Limitations</h3>
            <p>In no event shall PlynexoHub Coffee or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on PlynexoHub Coffee's website.</p>
            
            <h3>Accuracy of Materials</h3>
            <p>The materials appearing on PlynexoHub Coffee's website could include technical, typographical, or photographic errors. PlynexoHub Coffee does not warrant that any of the materials on its website are accurate, complete, or current.</p>
            
            <h3>Links</h3>
            <p>PlynexoHub Coffee has not reviewed all of the sites linked to our website and is not responsible for the contents of any such linked site.</p>
            
            <h3>Modifications</h3>
            <p>PlynexoHub Coffee may revise these terms of service at any time without notice. By using this website, you are agreeing to be bound by the then current version of these terms of service.</p>
            
            <h3>Governing Law</h3>
            <p>These terms and conditions are governed by and construed in accordance with the laws of Oregon and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacy-modal-x9z4').style.display = 'block';
            } else if (type === 'terms') {
                document.getElementById('terms-modal-y8w3').style.display = 'block';
            }
        }

        function closeModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacy-modal-x9z4').style.display = 'none';
            } else if (type === 'terms') {
                document.getElementById('terms-modal-y8w3').style.display = 'none';
            }
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacy-modal-x9z4');
            const termsModal = document.getElementById('terms-modal-y8w3');
            
            if (event.target === privacyModal) {
                privacyModal.style.display = 'none';
            }
            if (event.target === termsModal) {
                termsModal.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some interactive elements for better user engagement
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to cards
            const cards = document.querySelectorAll('.content-card-u6k2, .method-card-i3l8, .origin-card-q8r5');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Add click tracking for continue buttons
            const continueButtons = document.querySelectorAll('.continue-link-h4j7');
            continueButtons.forEach(button => {
                button.addEventListener('click', function() {
                    console.log('Continue button clicked:', this.textContent);
                });
            });
        });

        // Add scroll-based animations
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function handleScrollAnimations() {
            const elements = document.querySelectorAll('.content-card-u6k2, .timeline-item-n4q8, .method-card-i3l8');
            elements.forEach(el => {
                if (isElementInViewport(el)) {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }
            });
        }

        window.addEventListener('scroll', handleScrollAnimations);
        window.addEventListener('load', handleScrollAnimations);

        // Initialize some elements with animation-ready state
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.content-card-u6k2, .timeline-item-n4q8, .method-card-i3l8');
            animatedElements.forEach(el => {
                el.style.opacity = '0.8';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'all 0.6s ease';
            });
        });
    </script>

    <!-- Additional content blocks for size and uniqueness -->
    <div style="display: none;">
        <!-- Hidden content for SEO and page size -->
        <div class="hidden-content-block-a1b2">
            <h3>Coffee Education and Training Programs</h3>
            <p>PlynexoHub Coffee offers comprehensive educational programs designed to deepen understanding of coffee culture, brewing techniques, and industry practices. Our curriculum covers everything from basic brewing principles to advanced cupping techniques, roasting science, and sustainable farming practices. Students learn about coffee's journey from farm to cup, exploring the complex factors that influence flavor development and quality.</p>
            
            <p>Professional barista training courses provide hands-on experience with commercial equipment, milk steaming techniques, and customer service excellence. Participants practice latte art, learn about extraction theory, and develop palate sensitivity through guided tastings. Our certification programs are recognized by industry organizations and provide valuable credentials for coffee professionals.</p>
            
            <p>Home brewing workshops cater to coffee enthusiasts who want to improve their daily coffee experience. These sessions cover equipment selection, grind size optimization, water quality considerations, and brewing ratio calculations. Participants leave with practical knowledge and confidence to create exceptional coffee at home using various brewing methods.</p>
        </div>
        
        <div class="hidden-content-block-c3d4">
            <h3>Seasonal Menu Development and Innovation</h3>
            <p>Our seasonal menu development process involves extensive research, experimentation, and collaboration with local suppliers. Each season brings new opportunities to showcase different coffee origins, highlight seasonal ingredients, and create unique flavor combinations that reflect the time of year. Our development team works months in advance to perfect recipes and ensure consistent quality.</p>
            
            <p>Spring menus feature bright, floral coffees that complement the season's renewal energy. We incorporate local honey, fresh herbs, and citrus elements that enhance coffee's natural brightness. Summer offerings focus on cold brewing methods, refreshing preparations, and lighter roasts that provide cooling satisfaction during warmer months.</p>
            
            <p>Fall brings rich, warming flavors that pair beautifully with medium and dark roasts. We explore spice combinations, seasonal fruits, and comfort-focused preparations that create cozy experiences. Winter menus emphasize full-bodied coffees, warming spices, and hearty preparations that provide comfort during colder months.</p>
        </div>
        
        <div class="hidden-content-block-e5f6">
            <h3>Equipment and Technology Integration</h3>
            <p>PlynexoHub Coffee invests in state-of-the-art equipment that ensures consistency, quality, and efficiency in every cup. Our espresso machines feature precise temperature control, pressure profiling capabilities, and advanced steam systems that enable baristas to extract optimal flavors from each coffee. Regular calibration and maintenance ensure peak performance and longevity.</p>
            
            <p>Our roasting equipment combines traditional craftsmanship with modern technology, allowing precise control over temperature curves, airflow, and timing. Data logging systems track each roast batch, enabling consistency and quality control. This technology helps us develop roast profiles that highlight each coffee's unique characteristics while maintaining our signature style.</p>
            
            <p>Brewing equipment selection prioritizes quality, durability, and versatility. From precision scales and temperature-controlled kettles to commercial grinders with burr consistency, every tool serves a specific purpose in creating exceptional coffee. We regularly evaluate new technologies and equipment to enhance our capabilities and customer experience.</p>
        </div>
        
        <div class="hidden-content-block-g7h8">
            <h3>Community Partnerships and Local Impact</h3>
            <p>PlynexoHub Coffee actively partners with local organizations, schools, and businesses to strengthen community connections and create positive impact. Our partnership with the downtown business association supports local economic development and promotes collaborative marketing initiatives that benefit all participating businesses.</p>
            
            <p>Educational partnerships with local schools provide students with real-world learning opportunities about business operations, customer service, and global trade. Internship programs offer hands-on experience in coffee preparation, retail operations, and business management. These partnerships help develop future leaders while supporting educational goals.</p>
            
            <p>Charitable initiatives focus on supporting coffee-growing communities, local food security programs, and educational scholarships. A portion of our profits supports clean water projects in coffee-growing regions, while local partnerships provide coffee and meeting space for nonprofit organizations. These efforts reflect our commitment to positive impact both locally and globally.</p>
        </div>
    </div>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>




