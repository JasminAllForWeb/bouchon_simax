# Bouchon Simax

Le but de ce site est de permettre de faire des vérifications sur le projet Iweech.
Il s'agit de vérifier le comportement des webhooks de WooCommerce.

Dans une premier temps, démarrer le serveur en standalone :
``symfony serve``

Avec le postman lancer une requête poste sur le chemine /delivery pour vérifier que Symfony répond bien.
Exemple avec cURL :

``curl -I -X POST http://127.0.0.1:8000/delivery``
