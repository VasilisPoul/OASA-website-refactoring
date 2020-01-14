1. Ομάδα

ΜΑΡΙΑ ΚΑΡΑΜΗΝΑ - 1115201600059
ΓΕΩΡΓΙΟΣ ΚΟΥΡΣΙΟΥΝΗΣ - 1115201600077
ΒΑΣΙΛΕΙΟΣ ΠΟΥΛΟΠΟΥΛΟΣ - 1115201600141

2. Σύντομη αναφορά υλοποίησης 

  A. Περιγραφή αρχείων/φακέλων
    1. oasa/account

        signup.php: σελίδα εγγραφής νέου χρήστη 
        signup_script.php: script για τον έλεγχο και δημιουργία χρήστη στη βάση

        login.php: σελίδα σύνδεσης χρήστη
        login_script.php: script για τον έλεγχο και των στοιχείων χρήστη και δημιουργία session
        logout_script.php: script για καταστροφή του session

        profile.php: σελίδα για την προβολή προφίλ του χρήστη
        user_details.php: script για ανάκτηση στοιχείων χρήστη από τη βάση

        edit_profile.php: ο χρήστης μπορεί να τροποποιήσει τα στοιχεία του
        edit_profile_script.php: script για έλεγχο νέων στοιχείων χρήστη και αποθήκευση στη βάση
         
    2. oasa/passengers
    
        amea.php: σελίδα με πληροφορίες σχετικά με ΑΜΕΑ
        handicap_stations.php: script για την ανάκτηση των σταθμών προσβάσιμους σε ΑΜΕΑ      

    3. oasa/index.php : αρχική σελίδα

    4. oasa/network

        status.php: σελίδα με την κατάσταση του δικτύου
        service_status.php: script για την ανάκτηση της κατάστασης δικτύου από τη βάση

        info.php: σελίδα με πληροφορίες για το δίκτυο και χάρτες
        transport_oasa.php: script για την ανάκτηση όλων των ΜΜΜ από τη βάση για το info.php

        journey_planner.php: σελίδα με τον σχεδιασμό διαδρομής
        journey_planner_script.php: script που περιέχει έτοιμα σενάρια για τον σχεδιασμό διαδρομής

    5. oasa/network/line_info
      
        areas.php:
        find_lines_of_station.php:
        find_stations_of_area.php:   
        find_stations_of_line.php:
        get_areas.php:
        get_lines.php:
        get_stations.php:
        lines.php:
        stations.php:

    6. oasa/tickets

          buy_online.php: αρχική σελίδα της Ηλεκτρονικής Αγοράς Εισιτηρίων με διαθέσιμες επιλογές για αγορά/επαναφόρτιση εισιτηρίου/κάρτας

          info.php: σελίδα με τιμές και πληροφορίες εισιτηρίων
          ticket_categories.php: script για την ανάκτηση των πληροφοριών εισιτήριων από τη βάση

  B. Βάση Δεδομένων
    Για τη βάση χρησιμοποιούμε MySQL με 
      user: user
      password: password
      schema: sdi1600077

    Για να τρέξετε τη βάση φορτώστε:
      1. database/sdi1600077.sql (για τη δημιουργία της βάσης)
      2. database/db.sql         (για data population)

  Γ. Δοκιμαστικοί κωδικοί σύνδεσης
    username: giorgos   password: giorgos
    username: maria     password: maria
    username: vassilis  password: vassilis

