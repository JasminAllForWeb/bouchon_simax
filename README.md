# Bouchon Simax

Le but de ce site est de permettre de faire des vérifications sur le projet Iweech.
Il s'agit de vérifier le comportement des webhooks de WooCommerce.

Dans une premier temps, démarrer le serveur en standalone :
``symfony serve``

Avec le postman lancer une requête poste sur le chemine /delivery pour vérifier que Symfony répond bien.
Exemple avec cURL :

``curl -I -X POST http://127.0.0.1:8000/delivery``

Resultat attendu :

```
HTTP/1.1 200 OK
Cache-Control: no-cache, private
Content-Type: text/html; charset=UTF-8
Date: Wed, 29 Dec 2021 10:33:20 GMT
X-Debug-Token: 63848e
X-Debug-Token-Link: http://127.0.0.1:8000/_profiler/63848e
X-Robots-Tag: noindex
Transfer-Encoding: chunked
```
