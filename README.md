<a name="readme-top"></a>

<div align="center">
    <h3 align="center">JR Backend Developer coding test</h3>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-test">About the test</a>
    </li>
    <li>
      <a href="#requirements">Requirements</a>
      <ul>
        <li><a href="#product-specifications">Product specifications</a></li>
        <li><a href="#api-requirements">API Requirements</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li>
      <a href="#bonus-points">Bonus points</a>
    </li>
  </ol>
</details>

<!-- ABOUT THE TEST -->
## About the test

You're tasked to create a simple REST web service application for a fictional e-commerce business using Laravel.

You need to develop three REST APIs:

* Products list
* Product detail
* Create product

<!-- REQUIREMENTS -->
## Requirements

### Product specifications

A product needs to have the following information:

* Product name
* Product description
* Product price
* Created at
* Updated at

### API requirements

* Products list API
  * The products list API must be paginated.
* Create product API
  * The product name, description, and price must be required.
  * The product name must accept a maximum of 255 characters.
  * The product price must be numeric in type and must accept up to two decimal places.
  * The created at and updated at fields must be in timestamp format.
  
 Others:
 * You are free to use any library or component just as long as it can be installed using Composer.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

* Git
* Composer
* PHP ^8.0.2
* MySQL

### Installation

#### Automatically generate a new repository
Click <a href="https://github.com/QualityTrade/jr-backend-dev-coding-test/generate" target="_blank">here</a> to generate a new repository from this template.

* Select your GitHub username as the owner.
* Name the repository `{FIRST NAME}-{LAST NAME}-coding-test`. (e.g. `john-doe-coding-test`)
* Make sure to set the repository visibility to Public.
* Clone your generated repository.

#### Manual
If automatically generating a new repository does not work, follow these steps instead.

* Click <a href="https://github.com/QualityTrade/jr-backend-dev-coding-test/archive/refs/heads/main.zip">here</a> to download the ZIP archive of the test.
* Create a new repository named `{FIRST NAME}-{LAST NAME}-coding-test`. (e.g. `john-doe-coding-test`)
* Push your code to the new repository.

#### Installation instructions
1. Create a new MySQL database named `jr-backend-dev-coding-test`.
2. Copy the contents of the `.env.example` file to a new file named `.env`.
3. Fill out the corresponding database values in the `.env` file.
4. Run `composer install` in the project root.
5. Run `php artisan migrate` in the project root.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- BONUS POINTS -->
## Bonus points

For bonus points, answer the question below by updating this file.

Q: The management requested a new feature where in the fictional e-commerce app must have a "featured products" section.
How would you go about implementing this feature in the backend?

A: _Put your answer here_
