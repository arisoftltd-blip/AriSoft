<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proposal - Airsoft School Management System</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* =============================
       PROPOSAL PAGE ADDITIONS
       ============================= */
    body {
      font-family: 'Poppins', Arial, sans-serif;
      background-color: #f8f9fb;
      color: #333;
      margin: 0;
    }

    /* NAVBAR */
    nav {
      background: #083170;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 3rem;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 100;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }

    nav h1 {
      font-size: 1.6rem;
      font-weight: bold;
      letter-spacing: 0.5px;
    }

    nav ul {
      list-style: none;
      display: flex;
      align-items: center;
      gap: 2rem;
      margin: 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #ffcc00;
    }

    .logo {
      height: 55px;
      width: auto;
      position: absolute;
      right: 3rem;
      top: 10px;
    }

    /* PROPOSAL CONTENT */
    .proposal-container {
      max-width: 900px;
      margin: 8rem auto;
      background: #fff;
      padding: 2rem 3rem;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      line-height: 1.8;
    }

    .proposal-container h2 {
      text-align: center;
      color: #083170;
      margin-bottom: 1.5rem;
    }

    .proposal-container h3 {
      color: #083170;
      margin-top: 1.5rem;
    }

    .proposal-container p, li {
      color: #333;
    }

    /* DOWNLOAD BUTTON */
    .download-btn {
      background: #083170;
      color: #fff;
      padding: 0.8rem 1.6rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
      margin-bottom: 1.5rem;
      display: block;
      margin-left: auto;
    }

    .download-btn:hover {
      background: #0b4ad6;
    }

    /* SIGNATURE SECTION */
    .signature {
      margin-top: 2rem;
      border-top: 1px solid #ccc;
      padding-top: 1rem;
    }

    footer {
      background: #001a4d;
      color: white;
      text-align: center;
      padding: 1.2rem 0;
      font-size: 0.9rem;
    }

    /* PRINT SETTINGS */
    @media print {
      nav, footer, .download-btn {
        display: none;
      }
      body {
        background: white;
      }
      .proposal-container {
        box-shadow: none;
        padding: 0;
      }
    }

    /* RESPONSIVE MENU */
    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
      }

      nav ul {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
        margin-top: 0.5rem;
      }

      .logo {
        position: static;
        align-self: flex-end;
        margin-top: 0.5rem;
      }
    }
  </style>
</head>
<body>
  <!-- NAVIGATION BAR -->
  <nav>
    <h1>Arisoft Tech Solutions</h1>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="proposal.php" class="active">Proposal</a></li>
     <li><a href="#contact" class="hover:text-yellow-400">Contact</a></li>
    </ul>
  
  </nav>

  <!-- PROPOSAL CONTENT -->
  <div class="proposal-container">
    <button class="download-btn" onclick="window.print()">Download Proposal (PDF)</button>
    <h2>Proposal for the Development and Implementation of the Airsoft School Management System</h2>

    <h3>1. Introduction</h3>
    <p>In an era where digital transformation is essential to institutional efficiency, many educational institutions are embracing modern technology to streamline their operations. The Airsoft School Management System (ASMS) is a comprehensive digital platform designed to automate and enhance the management of student data, staff information, finance, library, hostel, and communication within schools and colleges.</p>

    <p>This proposal presents the framework, objectives, features, implementation plan, and benefits of adopting the Airsoft School Management System in any educational institution seeking efficiency and accountability.</p>

    <h3>2. Objectives</h3>
    <ul>
      <li>Digitize student admissions, attendance, and assessment processes.</li>
      <li>Provide real-time access to academic and administrative data.</li>
      <li>Improve communication among administrators, teachers, parents, and students.</li>
      <li>Ensure secure storage and easy retrieval of institutional records.</li>
      <li>Support informed decision-making through data analytics and reporting tools.</li>
    </ul>

    <h3>3. System Features</h3>
    <ol type="I">
      <li><b>Student Information Management:</b> Handles student enrollment, biodata, class allocation, attendance, and performance tracking.</li>
      <li><b>Staff and Human Resource Management:</b> Manages teacher and staff profiles, roles, attendance, and payroll processing.</li>
      <li><b>Examinations and Report Generation:</b> Enables teachers to input marks online, automatically generate report cards, and analyze student performance.</li>
      <li><b>Fee and Financial Management:</b> Tracks fee payments, generates receipts, monitors arrears, and provides financial summaries.</li>
      <li><b>Parent and Guardian Portal:</b> Allows parents to monitor their wards’ academic progress, attendance, and communicate with teachers.</li>
      <li><b>Library and Asset Management:</b> Maintains inventory of books, equipment, and other school resources.</li>
      <li><b>Communication and Notifications:</b> Provides SMS alerts for announcements, results, and reminders.</li>
      <li><b>Administrative Dashboard:</b> Offers a comprehensive overview of all school activities and performance metrics for management.</li>
    </ol>

    <h3>4. Technology Framework</h3>
    <p>The Airsoft School Management System will be developed using modern, secure, and scalable technologies to ensure reliability and user-friendliness.</p>
    <p><b>Hosting Environment:</b> Local-based server or on-premise installation with secure login access and data backup capabilities.</p>

    <h3>5. Implementation Plan</h3>
    <ul>
      <li><b>Phase 1:</b> Needs Assessment and System Design — 1 week</li>
      <li><b>Phase 2:</b> Software Development and Testing — 2 weeks</li>
      <li><b>Phase 3:</b> Pilot Deployment and User Feedback — 1 week</li>
      <li><b>Phase 4:</b> Full Implementation and Staff Training — 1 day</li>
      <li><b>Phase 5:</b> Maintenance, Support, and System Updates — Continuous</li>
    </ul>

    <h3>6. Expected Outcomes and Benefits</h3>
    <ul>
      <li>Streamlined academic and administrative processes.</li>
      <li>Reduction in paperwork and human errors.</li>
      <li>Enhanced transparency and accountability.</li>
      <li>Real-time access to records and reports.</li>
      <li>Strengthened collaboration between teachers, parents, and students.</li>
      <li>Secure and reliable data management system.</li>
    </ul>

    <h3>7. Estimated Cost</h3>
    <p>A comprehensive cost analysis will follow after a full requirement study. However, the estimated cost of development, installation, and training ranges between <b>GHS 2,000 and GHS 4,500</b> depending on the preferred modules and hosting option.</p>

    <h3>8. Conclusion</h3>
    <p>The development and implementation of the Airsoft School Management System represent a strategic investment in the digital transformation of educational institutions. This system will improve efficiency, accountability, and communication, aligning schools with modern educational management standards. We look forward to your approval and partnership in realizing this transformation.</p>

    <div class="signature">
      <p><b>Prepared by:</b><br>
      Airsoft Company Ltd<br>
      Email: arisoftltd@gmail.com<br>
      Phone: 0204574661 / 0241829832<br>
      </p>

      <p><b>Authorized Representative:</b><br>
      Name: Charles Arizi<br>
      Position: Project Developer<br>
      Signature: signed<br>
      </p>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Arisoft Tech Solutions. All rights reserved.</p>
  </footer>
</body>
</html>
