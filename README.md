
<a name="readme-top"></a>

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

<br />
<div align="center">
  <a href="https://github.com/sasmeka/laravel_rest_api_learn">
    <img src="https://camo.githubusercontent.com/72d4e416bd802a1abc16d86e9d7d7a62318fca378d103f97fda207ef7d61463d/68747470733a2f2f7974332e67677068742e636f6d2f7974632f414b65644f4c543759443978365069522d4366624262464333777a3257617469495a4672495f4930762d366b3d733930302d632d6b2d63307830306666666666662d6e6f2d726a" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">List To Do Back-End Application with Laravel Framework</h3>

  <p align="center">
    <br />
    <a href="https://github.com/sasmeka/laravel_rest_api_learn"><strong>Explore the docs »</strong></a>
    <br />
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This project is to create a simple rest api list to do using the Laravel framework version 10.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

This project is based on the following packages:

* [![laravel][laravel.ic]][laravel-url]
* [![mysql][mysql.ic]][mysql-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

This project worker can follow the steps below:

### Prerequisites

Things that must be installed before cloning and running the application.

1. Install [XAMPP](https://www.apachefriends.org/download.html)
2. Install [Composer](https://getcomposer.org/)
3. Running apache & MySQL module in XAMPP app.
4. Create a database in MySQL

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/sasmeka/laravel_rest_api_learn.git
   ```
2. Install dependencies
   ```sh
   composer install
   ```
3. create an .env file
   ```sh
   cp .env.example .env.
   ```
4. please configure database in .env
5. migrate database
   ```sh
   php artisan migrate
   ```
5. Run
   ```sh
   php artisan serve
   ```
6. Go to link localhost:8000 in your browser

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

1. Install [postman](https://www.postman.com/)
2. Visit the following link to export tickitz postman workspace 
   ```sh
   https://www.postman.com/avionics-meteorologist-14374576/workspace/tickitz/collection/22380820-2a8492cd-b607-4943-b31d-9d8c50cc4543?action=share&creator=22380820
   ```
3. Import the workspace that you already have in stage 2 into the postman application
4. Go to rest_api_list_todo_laravel workspace 
5. Run the request you want

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- CONTACT -->
## Contact

Verdi Sasmeka - [@vrd_meka](https://twitter.com/vrd_meka) - verdysas@gmail.com

Project Link: [https://github.com/sasmeka/laravel_rest_api_learn](https://github.com/sasmeka/laravel_rest_api_learn)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/sasmeka/laravel_rest_api_learn.svg?style=for-the-badge
[contributors-url]: https://github.com/sasmeka/laravel_rest_api_learn/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/sasmeka/laravel_rest_api_learn.svg?style=for-the-badge
[forks-url]: https://github.com/sasmeka/laravel_rest_api_learn/network/members
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/verdi-sasmeka-62b91b132/
[laravel.ic]: https://img.shields.io/badge/laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[laravel-url]: https://laravel.com/
[mysql.ic]: https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white
[mysql-url]: https://www.mysql.com/