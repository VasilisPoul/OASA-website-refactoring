<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ΟΑΣΑ - Το Δίκτυο</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/additional.css">
  </head>
  <body>

    <?php include 'transport_oasa.php';?> 
	  
    <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-dark ftco-navbar-light navbar-color" id="ftco-navbar">
      <div class="container">
        <a href="../index.php"><img src="../images/oasa_logo_transparent.png" alt="logo" width="25%"></a>
        <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="../index.php" class="nav-link">Αρχική</a></li>
            <li class="nav-item active">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Το Δίκτυο</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../network/info.php">Πληροφορίες και Χάρτης</a>
                  <a class="dropdown-item" href="../network/line_info/lines.php">Πληροφορίες Γραμμών</a>
                  <a class="dropdown-item" href="../network/journey_planner.php">Σχεδιασμός Διαδρομής</a>
                  <a class="dropdown-item" href="../network/status.php">Κατάσταση Δικτύου</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../tickets/info.php">Πληροφορίες Εισιτηρίων</a>
                  <a class="dropdown-item" href="../tickets/buy_online.php">Ηλεκτρονική Αγορά Εισιτηρίων</a>
                </div>
              </div>
          </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Επιβάτες</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../passengers/lost_and_found.php">Απολεσθέντα</a>
                  <a class="dropdown-item" href="../passengers/amea.php">ΆμεΑ</a> <!--TODO: correct translation :p -->
                  <a class="dropdown-item" href="../passengers/complaints.php">Υποβολή Παραπόνων</a>
                  <a class="dropdown-item" href="../passengers/help.php">Βοήθεια</a>
                </div>
              </div>
          </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εταιρία</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../company/info.php">Πληροφορίες Ομίλου</a>
                  <a class="dropdown-item" href="../company/contact_details.php">Στοιχεία Επικοινωνίας</a>
                  <a class="dropdown-item" href="../company/competitions.php">Διαγωνισμοί</a> <!--TODO: correct translation :p -->
                  <a class="dropdown-item" href="../company/news.php">Νέα</a>
                </div>
              </div>
          </li>
          <li class="nav-item">
            <?php
              if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin'])){ ?>
                <div class="dropdown">
                  <a class="dropdown-toggle nav-link user-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item disabled" href="#" disabled><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];?></a>
                    <a class="dropdown-item" href="../account/profile.php">Προβολή Προφίλ</a>
                    <a class="dropdown-item" href="../account/logout_script.php">Αποσύνδεση</a>
                  </div>
                </div>
            <?php
              }
              else {
                echo '<a href="../account/login.php" class="nav-link user-button">Σύνδεση</a>';
              }
            ?>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
   <div class="container crumbs-top">
      <p class="breadcrumbs">
        <span class="mr-2"><a href="../index.php">Αρχική <i class="fa fa-angle-right"></i></a></span>
        <span class="mr-2">Το Δίκτυο <i class="fa fa-angle-right"></i></span>
        <span class="mr-2">Πληροφορίες και Χάρτης <i class="fa fa-angle-right"></i></span>
      </p>
   </div>

    <section class="bg-light front-page-text page-header">
      <div class="container">
        <div class="row no-gutters align-items-end justify-content-center text-center">
          <div class="col-md-9 ftco-animate pb-5">
            <br><h1>Μέσα μεταφοράς που υπάγονται στον ΟΑΣΑ</h1>
          </div>
        </div>
          <div class="col-md-12">
            <div class="border w-100 p-4 rounded mb-2 d-flex">
              <div class="overflow-auto">
                <?php echo $transport; ?>
              </div>
            </div>
          </div>
      </div>
    </section>

    



    <section class="bg-light front-page-text page-header">
      <div class="container">
        <div class="row no-gutters align-items-end justify-content-center text-center">
          <div class="col-md-9 ftco-animate pb-5">
            <br>
            <h1>Το Δίκτυο</h1>
          </div>
        </div>
      </div>
    </section>

	

    <section class="ftco-section ftco-no-pt bg-light front-page-text">
			<div align="center">
				<img src="../images/map.jpg" width="1100" height="1100">
			</div>
			<br>	
			<div class="container">
				  
				<div class="row d-flex mb-5 contact-info">
				  	
					<p>Η σημερινή Περιοχή Εξυπηρέτησης των Αστικών Συγκοινωνιών έχει <strong>καθορισθεί δια νόμου και δεν μπορεί να μεταβληθεί χωρίς αντίστοιχη νομοθετική ρύθμιση</strong>.
</p>
								  	
					<p>Η περιοχή που εξυπηρετείται σήμερα από αστική συγκοινωνία εκτείνεται Δυτικά μέχρι την Ελευσίνα, Μάνδρα και Μαγούλα (Θριάσιο Πεδίο). Ανατολικά μέχρι την Πεντέλη, την Παλλήνη, τα Σπάτα, τη Λούτσα και το Κορωπί (περιοχή Μεσογείων). Βόρεια μέχρι τη Φυλή, τη Πάρνηθα, το Κρυονέρι, το φράγμα της Λίμνης του Μαραθώνα, το Διόνυσο, τη Σταμάτα και τη Νέα και την Παλαιά Πεντέλη. Νότια μέχρι τη θάλασσα και νοτιοανατολικά μέχρι και την Σαρωνίδα. Η περιοχή αυτή περιλαμβάνει ένα σύνολο 84 δήμων και κοινοτήτων/οικισμών, που δίδονται στον παρακάτω πίνακα. Σημ.*:Με την εφαρμογή του N.3852/10, ΦΕΚ 87/τ .Α'/2010 «Καλλικράτης» οι 84 υφιστάμενες Τοπικές Αυτοδιοικήσεις συνενώνονται σε 52 Δήμους. (Ημερομηνία Εφαρμογής: 1/1/2011)
</p>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Κωδ. ΟΑΣΑ</th>
								<th scope="col">Ονομασία</th>
								<th scope="col">Κωδ. ΟΑΣΑ</th>
								<th scope="col">Ονομασία</th>
								<th scope="col">Κωδ. ΟΑΣΑ</th>
								<th scope="col">Ονομασία</th>								
							</tr>
						</thead>
						<tbody>
							<tr> <th scope="row">01</th> <td>ΑΓΙΑ ΒΑΡΒΑΡΑ</td> <td>29</td> <td>ΚΟΡΩΠΙ</td> <td>57</td> <td>ΔΡΟΣΙΑ</td> </tr>
							<tr> <th scope="row">02</th> <td>ΑΓ. ΙΩΑΝ.ΡΕΝΤΗΣ</td> <td>30</td> <td>ΜΑΝΔΡΑ</td> <td>58</td> <td>ΕΚΑΛΗ</td> </tr>
							<tr> <th scope="row">03</th> <td>ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ</td> <td>31</td> <td>ΜΕΤΑΜΟΡΦΩΣΗ</td> <td>59</td> <td>ΕΛΛΗΝΙΚΟ</td> </tr>
							<tr> <th scope="row">04</th> <td>ΑΓ. ΔΗΜΗΤΡΙΟΣ</td> <td>32</td> <td>ΜΟΣΧΑΤΟ</td> <td>60</td> <td>ΖΕΦΥΡΙ</td> </tr>
							<tr> <th scope="row">05</th> <td>ΑΓΙΟΙ ΑΝΑΡΓΥΡΟΙ</td> <td>33</td> <td>ΝΕΑ ΙΩΝΙΑ</td> <td>61</td> <td>ΚΡΥΟΝΕΡΙ</td> </tr>
							<tr> <th scope="row">06</th> <td>ΑΘΗΝΑ</td> <td>34</td> <td>ΝΕΑ ΣΜΥΡΝΗ</td> <td>62</td> <td>ΛΥΚΟΒΡΥΣΗ</td> </tr>
							<tr> <th scope="row">07</th> <td>ΑΙΓΑΛΕΩ</td> <td>35</td> <td>ΝΕΑ ΦΙΛΑΔΕΛΦΕΙΑ</td> <td>63</td> <td>ΜΑΓΟΥΛΑ</td> </tr>
							<tr> <th scope="row">08</th> <td>ΑΛΙΜΟΣ</td> <td>36</td> <td>ΙΛΙΟΝ (ΝΕΑ ΛΙΟΣΙΑ)</td> <td>64</td> <td>ΜΕΛΙΣΣΙΑ</td> </tr>
							<tr> <th scope="row">09</th> <td>ΑΜΑΡΟΥΣΙΟ</td> <td>37</td> <td>ΝΙΚΑΙΑ</td> <td>65</td> <td>ΡΟΔΟΠΟΛΗ (ΜΠΑΛΑ)</td> </tr>
							<tr> <th scope="row">10</th> <td>ΑΝΩ ΛΙΟΣΙΑ</td> <td>38</td> <td>ΠΑΛΑΙΟ ΦΑΛΗΡΟ</td> <td>66</td> <td>ΝΕΑ ΕΡΥΘΡΑΙΑ</td> </tr>
							<tr> <th scope="row">11</th> <td>ΑΡΓΥΡΟΥΠΟΛΗ</td> <td>39</td> <td>ΠΑΙΑΝΙΑ</td> <td>67</td> <td>ΝΕΑ ΠΕΝΤΕΛΗ</td> </tr>
							<tr> <th scope="row">12</th> <td>ΑΣΠΡΟΠΥΡΓΟΣ</td> <td>40</td> <td>ΠΕΙΡΑΙΑΣ</td> <td>68</td> <td>ΝΕΑ ΧΑΛΚΗΔΟΝΑ</td> </tr>
							<tr> <th scope="row">13</th> <td>ΑΧΑΡΝΑΙ (ΜΕΝΙΔΙ)</td> <td>41</td> <td>ΠΕΡΑΜΑ</td> <td>69</td> <td>ΝΕΟ ΨΥΧΙΚΟ</td> </tr>
							<tr> <th scope="row">14</th> <td>ΒΥΡΩΝΑΣ</td> <td>42</td> <td>ΠΕΡΙΣΤΕΡΙ</td> <td>70</td> <td>ΠΑΛΛΗΝΗ</td> </tr>
							<tr> <th scope="row">15</th> <td>ΓΑΛΑΤΣΙ</td> <td>43</td> <td>ΠΕΤΡΟΥΠΟΛΗ</td> <td>71</td> <td>ΠΑΠΑΓΟΥ</td> </tr>
							<tr> <th scope="row">16</th> <td>ΓΛΥΦΑΔΑ</td> <td>44</td> <td>ΣΠΑΤΑ</td> <td>72</td> <td>ΠΕΝΤΕΛΗ (ΠΑΛΑΙΑ)</td> </tr>
							<tr> <th scope="row">17</th> <td>ΔΑΦΝΗ</td> <td>45</td> <td>ΤΑΥΡΟΣ</td> <td>73</td> <td>ΠΕΥΚΗ</td> </tr>
							<tr> <th scope="row">18</th> <td>ΔΡΑΠΕΤΣΩΝΑ</td> <td>46</td> <td>ΥΜΗΤΤΟΣ</td> <td>74</td> <td>ΣΤΑΜΑΤΑ</td> </tr>
							<tr> <th scope="row">19</th> <td>ΕΛΕΥΣΙΝΑ</td> <td>47</td> <td>ΧΑΪΔΑΡΙ</td> <td>75</td> <td>ΦΙΛΟΘΕΗ</td> </tr>
							<tr> <th scope="row">20</th> <td>ΖΩΓΡΑΦΟΥ</td> <td>48</td> <td>ΧΑΛΑΝΔΡΙ</td> <td>76</td> <td>ΦΥΛΗ</td> </tr>
							<tr> <th scope="row">21</th> <td>ΗΛΙΟΥΠΟΛΗ</td> <td>49</td> <td>ΧΟΛΑΡΓΟΣ</td> <td>77</td> <td>ΨΥΧΙΚΟ</td> </tr>
							<tr> <th scope="row">22</th> <td>ΗΡΑΚΛΕΙΟ</td> <td>50</td> <td>ΑΓΙΟΣ ΣΤΕΦΑΝΟΣ</td> <td>78</td> <td>ΑΝΘΟΥΣΑ</td> </tr>
							<tr> <th scope="row">23</th> <td>ΚΑΙΣΑΡΙΑΝΗ</td> <td>51</td> <td>ΑΝΟΙΞΗ</td> <td>79</td> <td>ΑΡΤΕΜΙΣ (ΛΟΥΤΣΑ)</td> </tr>
							<tr> <th scope="row">24</th> <td>ΚΑΛΛΙΘΕΑ</td> <td>52</td> <td>ΒΑΡΗ</td> <td>80</td> <td>ΓΕΡΑΚΑΣ</td> </tr>
							<tr> <th scope="row">25</th> <td>ΚΑΜΑΤΕΡ</td> <td>53</td> <td>ΒΟΥΛΑ</td> <td>81</td> <td>ΘΡΑΚΟΜΑΚΕΔΟΝΕΣ</td> </tr>
							<tr> <th scope="row">26</th> <td>ΚΕΡΑΤΣΙΝΙ</td> <td>54</td> <td>ΒΟΥΛΙΑΓΜΕΝΗ</td> <td>82</td> <td>ΒΑΡΥΜΠΟΜΠΗ</td> </tr>
							<tr> <th scope="row">27</th> <td>ΚΗΦΙΣΙ</td> <td>55</td> <td>ΒΡΙΛΗΣΣΙΑ</td> <td>83</td> <td>ΔΙΟΝΥΣΟΣ</td> </tr>
							<tr> <th scope="row">28</th> <td>ΚΟΡΥΔΑΛΛΟΣ</td> <td>56</td> <td>ΓΛΥΚΑ ΝΕΡΑ</td> <td>84</td> <td>ΣΑΡΩΝΙΔΑ</td> </tr>
						</tbody>
					</table>   
					<br>	
					<p>**Ο Δήμος Μάνδρας στην Δυτική Αττική συνενώνεται στον νεοσύστατο Δήμο Μάνδρας-Ειδυλίας με τους υφιστάμενους (εκτός περιοχής ευθύνης ΟΑΣΑ) Δήμους Βιλίων, Ερυθρών και την υφιστάμενη (εκτός περιοχής ευθύνης ΟΑΣΑ) Κοινότητα Οινόης</p>
				  	<p>***Η Κοινότητα Σαρωνίδας στην Ανατολική Αττική συνενώνεται στον νεοσύστατο Δήμο Σαρωνικού με τον υφιστάμενο (εκτός περιοχής ευθύνης ΟΑΣΑ) Δήμο Καλυβίων Θορικού και τις υφιστάμενες (εκτός περιοχής ευθύνης ΟΑΣΑ) Κοινότητες Αναβύσσου, Κουβαρά και Παλαιάς Φώκαιας.</p>
				  	<p>Υπάρχει άμεση σχέση συνεργασίας του ΟΑΣΑ με την Τοπική Αυτοδιοίκηση των παραπάνω 84 περιοχών και με τις αντίστοιχες Νομαρχίες τους. Ο ΟΑΣΑ φροντίζει να σχεδιάζει και να προσαρμόζει, όσο το επιτρέπουν οι υφιστάμενες συνθήκες, το Δίκτυο των Αστικών Συγκοινωνιών στις ανάγκες κάθε δήμου ή περιοχής, οι δε Οργανισμοί Τοπικής και Νομαρχιακής Αυτοδιοίκησης παίζουν διαμεσολαβητικό ρόλο ανάμεσα στον ΟΑΣΑ και τους πολίτες των περιοχών τους. Βεβαίως, ο ΟΑΣΑ πάντοτε εξετάζει με την ίδια προσοχή τις παρατηρήσεις και αιτήματα των μεμονωμένων πολιτών, που επικοινωνούν μαζί του. Οι Δήμοι και Κοινότητες/Οικισμοί της Περιοχής Εξυπηρέτησης των Αστικών Συγκοινωνιών ομαδοποιούνται στους παρακάτω 10 Τομείς Αστικών Συγκοινωνιών, οι οποίοι χρησιμοποιούνται και για την αρίθμηση των κεντρικών, διαδημοτικών και τοπικών λεωφορειακών γραμμών (οι γραμμές-κορμοί έχουν δική τους αρίθμηση):</p>
					<ul>
				  		<li>Τομέας 0 : ΑΘΗΝΑ</li>
						<li>Τομέας 1 : ΝΕΑ ΣΜΥΡΝΗ, ΠΑΛΑΙΟ ΦΑΛΗΡΟ, ΑΛΙΜΟΣ, ΕΛΛΗΝΙΚΟ, ΓΛΥΦΑΔΑ, ΒΟΥΛΑ, ΒΟΥΛΙΑΓΜΕΝΗ, ΒΑΡΗ</li>
						<li>Τομέας 2 : ΔΑΦΝΗ, ΑΓΙΟΣ ΔΗΜΗΤΡΙΟΣ, ΑΡΓΥΡΟΥΠΟΛΗ, ΗΛΙΟΥΠΟΛΗ, ΥΜΗΤΤΟΣ, ΒΥΡΩΝΑΣ, ΚΑΙΣΑΡΙΑΝΗ, ΖΩΓΡΑΦΟΥ</li>
						<li>Τομέας 3 : ΓΕΡΑΚΑΣ, ΑΝΘΟΥΣΑ, ΓΛΥΚΑ ΝΕΡΑ, ΠΑΛΛΗΝΗ, ΣΠΑΤΑ, ΠΑΙΑΝΙΑ, ΚΟΡΩΠΙ, ΑΡΤΕΜΙΔΑ, ΣΑΡΩΝΙΔΑ</li>
						<li>Τομέας 4 : ΠΑΠΑΓΟΣ, ΧΟΛΑΡΓΟΣ, ΝΕΟ ΨΥΧΙΚΟ, ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ, ΧΑΛΑΝΔΡΙ, ΒΡΙΛΗΣΣΙΑ, ΠΕΝΤΕΛΗ, ΝΕΑ ΠΕΝΤΕΛΗ, ΜΑΡΟΥΣΙ</li>
						<li>Τομέας 5 : ΠΕΥΚΗ, ΛΥΚΟΒΡΥΣΗ, ΜΕΛΙΣΣΙΑ, ΚΗΦΙΣΙΑ, ΝΕΑ ΕΡΥΘΡΑΙΑ, ΕΚΑΛΗ, ΑΝΟΙΞΗ, ΔΡΟΣΙΑ, ΔΙΟΝΥΣΟΣ, ΡΟΔΟΠΟΛΗ, ΣΤΑΜΑΤΑ, ΑΓΙΟΣ ΣΤΕΦΑΝΟΣ, ΚΡΥΟΝΕΡΙ, ΒΑΡΥΜΠΟΜΠΗ, ΜΑΡΟΥΣΙ</li>
						<li>Τομέας 6 : ΨΥΧΙΚΟ, ΦΙΛΟΘΕΗ, ΓΑΛΑΤΣΙ, ΝΕΑ ΙΩΝΙΑ, ΝΕΑ ΦΙΛΑΔΕΛΦΕΙΑ, ΝΕΟ ΗΡΑΚΛΕΙΟ, ΜΑΡΟΥΣΙ, ΜΕΤΑΜΟΡΦΩΣΗ, ΝΕΑ ΧΑΛΚΗΔΟΝΑ</li>
						<li>Τομέας 7 : ΠΕΡΙΣΤΕΡΙ, ΠΕΤΡΟΥΠΟΛΗ, ΙΛΙΟΝ, ΑΓΙΟΙ ΑΝΑΡΓΥΡΟΙ, ΚΑΜΑΤΕΡΟ, ΑΝΩ ΛΙΟΣΙΑ, ΑΧΑΡΝΑΙ, ΘΡΑΚΟΜΑΚΕΔΟΝΕΣ, ΖΕΦΥΡΙ, ΦΥΛΗ</li>
						<li>Τομέας 8 : ΧΑΙΔΑΡΙ, ΑΙΓΑΛΕΩ, ΑΓΙΑ ΒΑΡΒΑΡΑ, ΚΟΡΥΔΑΛΛΟΣ, ΝΙΚΑΙΑ, ΤΑΥΡΟΣ, ΑΓΙΟΣ ΙΩΑΝΝΗΣ ΡΕΝΤΗΣ, ΚΕΡΑΤΣΙΝΙ, ΔΡΑΠΕΤΣΩΝΑ, ΠΕΡΑΜΑ, ΜΑΝΔΡΑ,, ΜΑΓΟΥΛΑ, ΕΛΕΥΣΙΝΑ, ΑΣΠΡΟΠΥΡΓΟΣ</li>
						<li>Τομέας 9 : ΚΑΛΛΙΘΕΑ, ΜΟΣΧΑΤΟ, ΠΕΙΡΑΙΑΣ</li>
					</ul>
					<p>Για παράδειγμα, μία γραμμή, που ο αριθμός της αρχίζει με το νούμερο 1 (π.χ. 101 ΠΕΙΡΑΙΑΣ-ΑΛΙΜΟΣ-ΕΛΛΗΝΙΚΟ), έχει ως προορισμό τα νότια προάστια (δηλ. Δήμους του τομέα 1).</p>
			</div>
		</div>
		<div align="center">
				<img src="..\images\map1.png" alt="map" width="1100" height="1100">
        </div>
    </section>
	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2>ΟΑΣΑ - Οργανισμός Αστικών Συγκοινωνιών Αθηνών Α.Ε.</h2>
              <p>
                Εταιρίες Ομίλου
                <ul class="list-unstyled">
                  <li><a href="http://www.osy.gr" target="_blank">ΟΣΥ - Οδικές Συγκοινωνίες Α.Ε.</a></li>
                  <li><a href="http://www.stasy.gr" target="_blank">ΣΤΑΣΥ - Σταθερές Συγκοινωνίες Α.Ε.</a></li>
                </ul>
              </p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Δίκτυο</h2>
              <ul class="list-unstyled">
                <li><a href="../network/info.php" class="py-2 d-block">Πληροφορίες και Χάρτης</a></li>
	        <li><a href="../network/line_info/lines.php" class="py-2 d-block">Πληροφορίες Γραμμών</a></li>
                <li><a href="../network/journey_planner.php" class="py-2 d-block">Σχεδιασμός Διαδρομής</a></li>
                <li><a href="../network/status.php" class="py-2 d-block">Κατάσταση Δικτύου</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Εισιτήρια</h2>
              <ul class="list-unstyled">
                <li><a href="../tickets/info.php" class="py-2 d-block">Πληροφορίες Εισιτηρίων</a></li>
                <li><a href="../tickets/buy_online.php" class="py-2 d-block">Ηλεκτρονική Αγορά Εισιτηρίων</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Επιβάτες</h2>
              <ul class="list-unstyled">
                <li><a href="../passengers/lost_and_found.php" class="py-2 d-block">Απολεσθέντα</a></li>
                <li><a href="../passengers/amea.php" class="py-2 d-block">ΆμεΑ</a></li>
                <li><a href="../passengers/complaints.php" class="py-2 d-block">Υποβολη Παραπόνων</a></li>
                <li><a href="../passengers/help.php" class="py-2 d-block">Βοήθεια</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>
