<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <?php include "navbar.php"; ?>

    <main class="hero">
        <div class="overlay"></div>

        <br><br><br><br>

        <h1 class="title">
            Contact <span>Us</span>
        </h1>

        <section class="grid">
            <!-- left-side-->
            <article class="card info">
                <h2>Matrix Resources Sdn Bhd</h2>
                <div class="line"></div>

                <h3>📍 Location:</h3>
                <p>No. 11A, Jalan Puchong Permai 2, Taman Puchong Permai, 47100 Puchong, Selangor.
                </p>

                <div class="divider"></div>

                <h2>Matrix Quantum Sdn Bhd</h2>
                <div class="line"></div>

                <h3>📍 Location:</h3>
                <p>Lot 180, Jalan 1A, Kampung Subang Baru, 40150 Shah Alam, Selangor. Selangor.
                </p>

                <div class="divider"></div>

                <h2>Contact</h2>
                <ul class="contact-list">
                    <li>Office: 03-5892 6806</li>
                    <li>Ms Natasha Tan Suan Tee: +60 19-654 3889</li>
                    <li>Mr Hazri: +60 19-217 3382</li>
                    <li>Mr Hiswandy: +60 19-275 9648</li>
                    <li>Ms Cassandra: +60 11-2500 0518</li>
                    <li>matrix@matrixhse.com</li>
                </ul>
            </article>


            <form class="card form" action="#" method="post" autocomplete="off">
                <label>
                    Full name
                    <input type="text" name="name" required />
                </label>

                <label>
                    Email
                    <input type="email" name="email" required />
                </label>

                <label>
                    Service
                    <select name="service" required>
                        <option value="">-Please select an option-</option>
                        <option value="Mobile-audiometric">Mobile Audiometric Testing</option>
                        <option value="NRA">Noise Risk Assessment (NRA)</option>
                        <option value="CHRA">Chemical Health Risk Assessment (CHRA)</option>
                        <option value="LEV">Local Exhaust Ventilation (LEV)</option>
                        <option value="Chemical-exposure">Chemical Exposure Monitoring</option>
                        <option value="ERA">Ergonomic Risk Assessment (ERA)</option>
                        <option value="CIMAH">The Control of Industrial Major Accident Hazards (CIMAH)</option>
                    </select>
                </label>

                <label>
                    Additional Information
                    <textarea name="message" rows="6"></textarea>
                </label>


                <button type="submit" class="btn">→</button>

            </form>

        </section>

    </main>
</body>
</html>