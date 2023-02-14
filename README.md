<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Sparkle

### Overview

Laravel Sparkle is an unaffiliated Laravel fork, intended to serve as a modern replacement for Laravel Lumen. Optimized for stateless full-stack microservices.

### State

Sparkle is unlike Laravel, and like Lumen, stateless. It's intended to be used for Laravel microservices, that don't use login systems. As such, authentication and sessions are disabled. This reduces application complexity, and in theory speeds up the application.

### Database

Since there are no accounts, most responses will be the same allowing you to heavily use caching, further speeding up responses. Assuming you don't need a database, you can also scale your application with ease as you don't need to worry about keeping your databases in sync.

### Auth

If you do require authentication for APIs, Sanctum is still available, and Sparkle even has a console command to generate API users and tokens.

### Frontend

To get started with your frontend quickly, a simple app layout is also included. It runs Bootstrap 5 which is perfect for rapid prototyping. It's loaded using the official CDN visitors may already have it cached. If you still want to reduce the bundle size, an easy way is to download the compiled files, and run them through an online CSS purifier to remove classes you don't need.
