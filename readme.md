## Nasa Rover View

Simple test app using Angular, Laravel and Angular Material.

* Gallery component in angular/app/components/gallery
* API service in angular/services/API.service.js which calls to the Laravel API on the backend
* PHP API call in Laravel at app/Http/Controllers/GetFHACController.php which is a proxy call to the NASA API
* infinite scroll using ngInfiniteScroll bower component
* larger image view implemented as a directive (angular/app/directives/bigview)

In addition:
* Unit test for the backend api call in tests/NasaApiTest.php

Notes:
* NASA api does not seem to acknowledge the page parameter, instead it just returns everything. PHP API does the paging instead, so
the angular front end doesn't try to display everything at once.

TODO:
NASA api call should be cached.