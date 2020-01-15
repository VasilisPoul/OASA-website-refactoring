USE `sdi1600077` ;

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

INSERT INTO area (area, city, postal_code) VALUES ("Κεντρικός τομέας Αθηνών", "Δήμος Αθηναίων", "10557");
INSERT INTO area (area, city, postal_code) VALUES ("Κολωνάκι", "Αθήνα", "10676");
INSERT INTO area (area, city, postal_code) VALUES ("Πλατεία Βικτωρίας", "Αθήνα", "10434");
INSERT INTO area (area, city, postal_code) VALUES ("Ομόνοια", "Δήμος Αθηνάιων", "10431");
INSERT INTO area (area, city, postal_code) VALUES ("Πλατεία Ασωμάτων", "Δήμος Αθηναίων", "11851");
INSERT INTO area (area, city, postal_code) VALUES ("Γκάζι", "Αθήνα", "11854");

INSERT INTO station (name, latitude, longitude, idarea, disability_access) VALUES ("ΚΕΡΑΜΕΙΚΟΣ", '37.978779', '23.710873', 6, 1);
INSERT INTO station (name, latitude, longitude, idarea, disability_access) VALUES ("ΒΙΚΤΩΡΙΑ", '37.993095', '23.729804', 3, 1);
INSERT INTO station (name, latitude, longitude, idarea, disability_access) VALUES ("ΟΜΟΝΟΙΑ", '37.984037', '23.728041', 4, 1);
INSERT INTO station (name, latitude, longitude, idarea, disability_access) VALUES ("ΠΑΝΕΠΙΣΤΗΜΙΟ", '37.980595', '23.73283', 1, 1);
INSERT INTO station (name, latitude, longitude, idarea, disability_access) VALUES ("ΜΟΝΑΣΤΗΡΑΚΙ", '37.976431', '23.725905', 1, 1);
INSERT INTO station (name, latitude, longitude, idarea, disability_access) VALUES ("ΘΗΣΕΙΟ", '37.976928', '23.720529', 5, 1);
INSERT INTO station (name, latitude, longitude, idarea, disability_access) VALUES ("ΣΥΝΤΑΓΜΑ", '37.975443', '23.735484', 1, 1);
INSERT INTO station (name, latitude, longitude, idarea, disability_access) VALUES ("ΕΥΑΓΓΕΛΙΣΜΟΣ", '37.975937', '23.746923', 2, 1);

INSERT INTO line_has_station (idline, idstation) VALUES (1, 2);
INSERT INTO line_has_station (idline, idstation) VALUES (1, 3);
INSERT INTO line_has_station (idline, idstation) VALUES (1, 5);
INSERT INTO line_has_station (idline, idstation) VALUES (1, 6);
INSERT INTO line_has_station (idline, idstation) VALUES (2, 3);
INSERT INTO line_has_station (idline, idstation) VALUES (2, 4);
INSERT INTO line_has_station (idline, idstation) VALUES (2, 7);
INSERT INTO line_has_station (idline, idstation) VALUES (3, 1);
INSERT INTO line_has_station (idline, idstation) VALUES (3, 5);
INSERT INTO line_has_station (idline, idstation) VALUES (3, 7);
INSERT INTO line_has_station (idline, idstation) VALUES (3, 8);

INSERT INTO user (username, first_name, last_name, email, dob, phone, password, iduser_category) VALUES ("giorgos", "Γιώργος", "Κουρσιούνης", "sdi1600077@di.uoa.gr", "1998-03-22", "6923456787", "$2y$10$RN8bHlZk.wClRP10.q6LbOngU9aYbXdh09ZqLrhdfkzjeHWbiYpHq", 2);
INSERT INTO user (username, first_name, last_name, email, dob, phone, password, iduser_category) VALUES ("maria", "Μαρία", "Καραμηνά", "sdi1600059@di.uoa.gr", "1998-07-21", "6922356582", "$2y$10$imJxzYgyzUy6lKYzJEtjX.sAKZATGshdyp8TGia21.Cz4.6cUkize", 1);
INSERT INTO user (username, first_name, last_name, email, dob, phone, password, iduser_category) VALUES ("vassilis", "Βασίλης", "Πουλόπουλος", "sdi1600141@di.uoa.gr", "1998-04-02", "2102734567", "$2y$10$QEdo.f7/pHVPqK9zmnVabOycoUgj6xUc8fN711Jd6udnljjiICrUK", 3);

INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Ενιαίο εισιτήριο για όλα τα μέσα 90 λεπτών (εκτός γραμμών Αεροδρομίου & γραμμής Χ80)", "1.40", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Ημερήσιο εισιτήριο για όλα τα μέσα (εκτός γραμμων Αεροδρομίου)", "4.50", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Εισιτήριο πέντε ημερών για όλα τα μέσα (εκτός γραμμών Αεροδρομίου & γραμμής Χ80)", "9.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Τουριστικό εισιτήριο 3 ημερών για όλα τα μέσα (περιλαμβάνει 1 διαδρομή από & προς το Αεροδρόμιο)", "22.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Κανονικό εισιτήριο λεωφορείων EXPRESS", "6.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Κανονικό εισιτήριο ΜΕΤΡΟ γραμμών Αεροδρομίου", "10.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Εισιτήριο πέντε ημερών για όλα τα μέσα (εκτός γραμμών Αεροδρομίου & γραμμής Χ80)", "9.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Εισιτήριο Αεροδρομίου μετ' επιστροφής ΜΕΤΡΟ", "18.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Εισιτήριο Αεροδρομίου από & προς τους σταθμούς Παλλήνη - Κάντζα - Κορωπί ΜΕΤΡΟ", "6.00", 1);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Μειωμένο ενιαίο εισιτήριο για όλα τα μέσα 90 λεπτών (εκτός γραμμών Αεροδρομίου & γραμμής Χ80)", "0.60", 2);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Μειωμένο εισιτήριο λεωφορείων EXPRESS", "3.00", 2);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Μειωμένο εισιτήριο ΜΕΤΡΟ γραμμών Αεροδρομίου", "5.00", 2);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Μειωμένο εισιτήριο Αεροδρομίου από & προς τους σταθμούς Παλλήνη - Κάντζα - Κορωπί ΜΕΤΡΟ", "3.00", 2);
INSERT INTO ticket_category (name, price, iduser_category) VALUES ("Δωρεάν εισιτήριο για όλα τα μέσα 90 λεπτών (εκτός γραμμών Αεροδρομίου & γραμμής Χ80)", "0.0", 3);

-- "giorgos" has a card with an expired fee. He can not issue a new card but he can renew his current one
INSERT INTO card (idticket_category, date, pin, iduser, expired) VALUES (10, "2020-01-15", "$2y$10$ypFCVHcaVpnc4FmifA81/uFKvEwdQXLGTcV9.BKGNmyqEndFdkkPG", 1, 1);
-- "maria" has an valid card. She can not issue a new card and she can not renew her current one
INSERT INTO card (idticket_category, date, pin, iduser, expired) VALUES (12, "2020-01-11", "$2y$10$ypFCVHcaVpnc4FmifA81/uFKvEwdQXLGTcV9.BKGNmyqEndFdkkPG", 2, 0);
-- "vassilis" has a ticket with an expired fee. He can issue a new one or renew his current one
INSERT INTO ticket (date, iduser, idticket_category, expired) VALUES ("2020-01-05", 3, 11, 1);
