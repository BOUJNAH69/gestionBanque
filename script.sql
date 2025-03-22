-- Remplissage de la table administrateurs
INSERT INTO administrateurs (user, mot_de_passe) VALUES
('admin', 'admin123'),
('alice', 'password'); 

-- Remplissage de la table clients
INSERT INTO clients (nom, prenom, email, telephone, adresse, date_inscription) VALUES
('Dupont', 'Jean', 'jean.dupont@email.com', '0612345678', '10 Rue de Paris, Paris', NOW()),
('Martin', 'Sophie', 'sophie.martin@email.com', '0622334455', '23 Avenue de Lyon, Lyon', NOW()),
('Durand', 'Paul', 'paul.durand@email.com', '0677889900', '12 Place Bellecour, Lyon', NOW());

-- Remplissage de la table comptes
INSERT INTO comptes (id_client, type_compte, solde, date_ouverture, num_client_associe) VALUES
(1, 'courant', 1500.00, NOW(), 'CL-001'),
(1, 'épargne', 3200.50, NOW(), 'CL-001'),
(2, 'courant', 500.00, NOW(), 'CL-002'),
(3, 'courant', 800.00, NOW(), 'CL-003'),
(3, 'épargne', 1200.00, NOW(), 'CL-003');