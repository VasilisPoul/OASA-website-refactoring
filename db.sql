use oasa;

INSERT INTO user_category (name) VALUES ("KANONIKO ΕΙΣΙΤΗΡΙΟ");
INSERT INTO user_category (name) VALUES ("ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ");
INSERT INTO user_category (name) VALUES ("ΔΩΡΕΑΝ ΕΙΣΙΤΗΡΙΟ");

INSERT INTO colour (colour) VALUES ("green");
INSERT INTO colour (colour) VALUES ("red");
INSERT INTO colour (colour) VALUES ("blue");
INSERT INTO colour (colour) VALUES ("chartreuse");
INSERT INTO colour (colour) VALUES ("deepskyblue");
INSERT INTO colour (colour) VALUES ("darkorange");

INSERT INTO transport (name) VALUES ("Ηλεκτρικός Σιδηρόδρομος (ΗΣΑΠ)");
INSERT INTO transport (name) VALUES ("ΜΕΤΡΟ Αθήνας");
INSERT INTO transport (name) VALUES ("ΤΡΑΜ Αθήνας");
INSERT INTO transport (name) VALUES ("Λεωφορεία");
INSERT INTO transport (name) VALUES ("Τρόλεϊ");

INSERT INTO line_status (status) VALUES ("Καθυστερήσεις");
INSERT INTO line_status (status) VALUES ("Έργα σε εξέλιξη");
INSERT INTO line_status (status) VALUES ("Ομαλή λειτουργία");
INSERT INTO line_status (status) VALUES ("Απεργίες");
INSERT INTO line_status (status) VALUES ("Εκτός λειτουργίας");



INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("ΓΡΑΜΜΗ 1", 1, 1, 1);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("ΓΡΑΜΜΗ 2", 2, 3, 2);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("ΓΡΑΜΜΗ 3", 2, 3, 3);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("Τ3 - ΘΟΥΚΥΔΙΔΗΣ", 3, 4, 4);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("Τ4 - ΑΡΙΣΤΟΤΕΛΗΣ", 3, 4, 4);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("Τ5 - ΠΛΑΤΩΝΑΣ", 3, 4, 4);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("224", 4, 2, 5);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("608", 4, 2, 5);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("Α8", 4, 2, 5);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("Α5", 4, 2, 5);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("220", 4, 2, 5);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("221", 4, 2, 5);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("6", 5, 3, 6);
INSERT INTO line (name, idtransport, idline_status, idcolour) VALUES ("9", 5, 3, 6);


INSERT INTO station (name, latitude, longitude) VALUES ("ΣΥΝΤΑΓΜΑ", '37.975443', '23.735484');
INSERT INTO station (name, latitude, longitude) VALUES ("ΕΥΑΓΓΕΛΙΣΜΟΣ", '37.975937', '23.746923');
INSERT INTO station (name, latitude, longitude) VALUES ("ΑΕΡΟΔΡΟΜΙΟ", '37.936067', '23.947252');
INSERT INTO station (name, latitude, longitude) VALUES ("ΟΜΟΝΟΙΑ", '37.984037', '23.728041');
INSERT INTO station (name, latitude, longitude) VALUES ("ΠΕΙΡΑΙΑΣ", '37.948168', '23.643326');
INSERT INTO station (name, latitude, longitude) VALUES ("ΜΑΡΟΥΣΙ", '38.056155', '23.804947');
INSERT INTO station (name, latitude, longitude) VALUES ("ΜΟΝΑΣΤΗΡΑΚΙ", '37.976431', '23.725905');
INSERT INTO station (name, latitude, longitude) VALUES ("ΝΟΣΟΚΟΜΕΙΟ ΕΥΑΓΓΕΛΙΣΜΟΣ", '37.976445', '23.748182');

INSERT INTO line_has_station (idline, idstation) VALUES (1, 4);
INSERT INTO line_has_station (idline, idstation) VALUES (1, 5);
INSERT INTO line_has_station (idline, idstation) VALUES (1, 6);
INSERT INTO line_has_station (idline, idstation) VALUES (1, 7);
INSERT INTO line_has_station (idline, idstation) VALUES (3, 1);
INSERT INTO line_has_station (idline, idstation) VALUES (3, 2);
INSERT INTO line_has_station (idline, idstation) VALUES (3, 3);
INSERT INTO line_has_station (idline, idstation) VALUES (3, 7);
INSERT INTO line_has_station (idline, idstation) VALUES (7, 8);

INSERT INTO user (username, first_name, last_name, email, dob, phone, password) VALUES ("mark_mavr", "Μάρκος", "Μαυροτσούκαλος", "markmavr@gmail.com", "1994-03-22", "6923456787", "$2y$10$ObeQXpsckUYWLqu3avWc5.BVth75ij3lw7LYPIDRcIDZk9SDRx9du");
INSERT INTO user (username, first_name, last_name, email, dob, phone, password) VALUES ("zoubi1", "Ζουμπουλία", "Αμπατζίδου", "zoubi@gmail.com", "1950-07-21", "6922356587", "$2y$10$oN8kRqPaDi//iSmr7A4ziuZyGWSPQgJHKNLMB7lIIAh3k1R221H72");
INSERT INTO user (username, first_name, last_name, email, dob, phone, password) VALUES ("dimosthenis84", "Δημοσθένης", "Πολίτης", "politisd@gmail.com", "1984-04-02", "2102734567", "$2y$10$onkGfiXuTGheXB8WB7CYfentQ09nbszQZKz503xdtqFjrVW/FVg/G");

INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Ενιαίο εισιτήριο για όλα τα μέσα 90 λεπτών (εκτός γραμμών Αεροδρομίου & γραμμής Χ80)", "1.40", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Ημερήσιο εισιτήριο για όλα τα μέσα (εκτός γραμμων Αεροδρομίου)", "4.50", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Εισιτήριο πέντε ημερών για όλα τα μέσα (εκτός γραμμών Αεροδρομίου & γραμμής Χ80)", "9.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Τουριστικό εισιτήριο 3 ημερών για όλα τα μέσα (περιλαμβάνει 1 διαδρομή από & προς το Αεροδρόμιο)", "22.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Κανονικό εισιτήριο λεωφορείων EXPRESS", "6.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Κανονικό εισιτήριο ΜΕΤΡΟ γραμμών Αεροδρομίου", "10.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Εισιτήριο πέντε ημερών για όλα τα μέσα (εκτός γραμμών Αεροδρομίου & γραμμής Χ80)", "9.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Εισιτήριο Αεροδρομίου μετ' επιστροφής ΜΕΤΡΟ", "18.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Εισιτήριο Αεροδρομίου από & προς τους σταθμούς Παλλήνη - Κάντζα - Κορωπί ΜΕΤΡΟ", "6.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Εισιτήριο Αεροδρομίου μετ' επιστροφής ΜΕΤΡΟ", "18.00", 1);
--
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Μειωμένο ενιαίο εισιτήριο για όλα τα μέσα 90 λεπτών (εκτός γραμμών Αεροδρομίου & γραμμής Χ80)", "0.60", 2);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Μειωμένο εισιτήριο λεωφορείων EXPRESS", "3.00", 2);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Μειωμένο εισιτήριο ΜΕΤΡΟ γραμμών Αεροδρομίου", "5.00", 2);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Μειωμένο εισιτήριο Αεροδρομίου από & προς τους σταθμούς Παλλήνη - Κάντζα - Κορωπί ΜΕΤΡΟ", "3.00", 2);

INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Δωρεάν εισιτήριο για όλα τα μέσα 90 λεπτών (εκτός γραμμών Αεροδρομίου & γραμμής Χ80)", "0.0", 1);


-- markos1
-- zoubi
-- politis