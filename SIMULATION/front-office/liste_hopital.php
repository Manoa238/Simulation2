<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des Hôpitaux</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eaf0f6;
      margin: 0;
      padding: 0;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(to right, #1976d2, #2196f3);
      color: white;
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar .logo {
      font-size: 50px;
      font-weight: bold;
      display: flex;
      margin-left: -50px;
      align-items: center;
    }

    .navbar .logo::before {
     
      margin-left: 40%;
      font-size: 22px;
    }

    .navbar .nav-links a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    .navbar .nav-links a:hover {
      color: #ffeb3b;
    }

    .main-card {
      background-color: white;
      border-radius: 16px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
      margin: 40px auto;
      max-width: 1200px;
      padding: 30px;
    }

    h1 {
      text-align: center;
      color: #2c3e50;
      margin-top: 0;
    }

    .hospital-list {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-top: 30px;
    }

    .hospital-card-link {
      text-decoration: none;
    }

    .hospital-card {
      background-color: #fdfdfd;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: fadeInUp 0.6s ease both;
      cursor: pointer;
      display: block;
    }

    .hospital-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    }

    .hospital-card:active {
      transform: scale(0.98);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .hospital-name {
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      color: #34495e;
    }

    .hospital-address {
      font-size: 14px;
      text-align: center;
      color: #7f8c8d;
      margin: 8px 0;
    }

    .hospital-contact {
      font-size: 14px;
      text-align: center;
      color: #2980b9;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media screen and (max-width: 900px) {
      .hospital-list {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media screen and (max-width: 600px) {
      .hospital-list {
        grid-template-columns: 1fr;
      }
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body>

  
    <div class="navbar">
    <button class="btn-retour" onclick="history.back()">← Retour</button>
    <div class="logo">🩺</div>
    <div class="navbar-title" style=" margin-left: -200px;"><h1>Liste des Hôpitaux</h1></div>
    <div style="font-size: 50px; margin-right: 130px;">🏥</div>
   
  </div>
 

  <div class="main-card">
    <div class="hospital-list">
      
      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/joseph_andrianavalona.jpg" alt="Hôpital Ravoahangy Andrianavalona" style="width: 100%; height: 230px; border-radius: 10px;">
          <div class="hospital-name">Hôpital Joseph Ravoahangy Randrianavalona</div>
          <div class="hospital-address">12 Rue de la Santé, 75013 Paris</div>
          <div class="hospital-contact">+33 1 23 45 67 89</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/St_pierre.jpg" alt="clinique Saint Pierre" style="width: 100%; border-radius: 10px">
          <div class="hospital-name">Clinique Saint-Pierre</div>
          <div class="hospital-address">Route Nationale 1, BP 4 150, Antananarivo 101</div>
          <div class="hospital-contact">020 22 279 29</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/soavinandriana.jpg" alt="hopital Soavinandriana" style="width: 100%; border-radius: 10px;  height: 230px;">
          <div class="hospital-name">Centre hospitalier Soavinandriana</div>
          <div class="hospital-address">Centre Hospitalierde Soavinandriana, 6 bis, Rue du Dr Moss Antananarivo, Antananarivo 101</div>
          <div class="hospital-contact">020 23 397 51</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/andranomadio.jpg" alt="hôpital Andranomadio" style="width: 100%; border-radius: 10px">
          <div class="hospital-name">Andranomadio</div>
          <div class="hospital-address">42PJ+JR7, Rue Danton, Antsirabe</div>
          <div class="hospital-contact">+33 4 91 38 10 00</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/ave_maria.jpg" alt="clinique de Maternité Ave Maria" style="width: 100%; border-radius: 10px; height: 230px;">
          <div class="hospital-name">Ave Maria</div>
          <div class="hospital-address">42RM+R62, Antsirabe</div>
          <div class="hospital-contact">020 44 489 98</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/sante_plus.jpg" alt="Santé plus à Antsirabe" style="width: 100%; border-radius: 10px; height: 230px;">
          <div class="hospital-name">Sante Plus</div>
          <div class="hospital-address">Rue Danton, Antsirabe</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/befelatanana.webp" alt="" style="width: 100%; border-radius: 10px; height: 230px;">
          <div class="hospital-name">Maternité Befelatanana</div>
          <div class="hospital-address">Befelatanana, Antananarivo 101</div>
          <div class="hospital-contact">+33 4 91 38 10 00</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/St_fleur.jpg" alt="Pavillon Saint Fleur Befelatanana" style="width: 100%; border-radius: 10px; height: 230px;">
          <div class="hospital-name">Pavillon Saint Fleur</div>
          <div class="hospital-address">Lalana Vitori Francoise, Antananarivo</div>
          <div class="hospital-contact">020 22 235 55</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/fenoarivo.jpg" alt="Hôpital Fenoarivo Atsimondrano" style="width: 100%; border-radius: 10px; height: 230px;">
          <div class="hospital-name">Hôpital Fenoarivo</div>
          <div class="hospital-address">3C7M+9R8, Fenoarivo</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/loterana_ambohibao.jpg" alt="" style=" width: 100%; border-radius: 10px;height: 230px;">
          <div class="hospital-name">Hopitaly Loterana Ambohibao</div>
          <div class="hospital-address">Tobim-pitsaboana Loterana Ambohibao 4 Antananarivo, 105</div>
          <div class="hospital-contact">034 95 051 89</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/ambodivona.jpg" alt="espace médical d'Ambodivona" style=" width: 100%; border-radius: 10px;height: 230px;">
          <div class="hospital-name">Espace médical Ambodivona</div>
          <div class="hospital-address">Antananarivo</div>
          <div class="hospital-contact">020 22 625 66</div>
        </div>
      </a>

      <a href="#" class="hospital-card-link">
        <div class="hospital-card">
          <img src="../assets/img/ilafy.jpg" alt="polyclinique et matérnité d'Ilafy" style=" width: 100%; border-radius: 10px;height: 230px;">
          <div class="hospital-name">Polyclinique d'Ilafy</div>
          <div class="hospital-address">4GVX+XXW, Antananarivo</div>
          <div class="hospital-contact">020 22 425 66</div>
        </div>
      </a>

    </div>
  </div>

</body>
</html>
