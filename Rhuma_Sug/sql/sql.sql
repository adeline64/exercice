
--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE `utilisateur`
(
  `id` int
(11) NOT NULL,
  `nom` varchar
(50) NOT NULL,
  `prenom` varchar
(50) NOT NULL,
  `email` varchar
(50) NOT NULL,
  `password` varchar
(250) NOT NULL,
  `telephone` varchar
(20),
  `adresse` TEXT NOT NULL,
  `residence` int
(11) DEFAULT '0' -- FK vers la table residence pour la ville
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `residence`;
CREATE TABLE `residence`
(
  `id` int
(11) NOT NULL,
  `codepostal` varchar
(10) NOT NULL,
  `ville` varchar
(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `panier`;
CREATE TABLE `panier`
(
  `id` int
(11) NOT NULL,
  `prixTTC` varchar
(10) NOT NULL,
  `produits` int
(11) DEFAULT '0',
  `utilisateur` int
(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `produits`;
CREATE TABLE `produits`
(
  `id` int
(11) NOT NULL,
  `nom` varchar
(10) NOT NULL,
  `couleur` varchar
(10) NOT NULL,
  `marque` int
(11) DEFAULT '0',
  `prix` varchar
(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `marque`;
CREATE TABLE `marque`
(
  `id` int
(11) NOT NULL,
  `nom` varchar
(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `commande`;
CREATE TABLE `commande`
(
  `id` int
(11) NOT NULL,
  `dateCommande` datetime NOT NULL,
  `paiement` int
(11) DEFAULT '0',
  `utilisateur` int
(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS validation;
CREATE TABLE paiement (
  `id` int
(11) NOT NULL,
  `valider` bool NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE `livraison`
(
  `id` int
(11) NOT NULL,
  `DateExpedition`date NOT NULL,
  `DateRecu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

-- Index pour la table `utilisateur`
--

ALTER TABLE `utilisateur`
ADD PRIMARY KEY
(`id`);

-- Index pour la table `residence`
--
ALTER TABLE `residence`
ADD PRIMARY KEY
(`id`);

ALTER TABLE `panier`
ADD PRIMARY KEY
(`id`);

ALTER TABLE `produits`
ADD PRIMARY KEY
(`id`);

ALTER TABLE `commande`
ADD PRIMARY KEY
(`id`);

ALTER TABLE `paiement`
ADD PRIMARY KEY
(`id`);

ALTER TABLE `livraison`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT pour les tables exportées

-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- AUTO_INCREMENT pour la table `residence`
--

ALTER TABLE `residence`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `panier`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `produits`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `commande`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `paiement`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `livraison`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;