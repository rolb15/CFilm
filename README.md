# Cfilms
[![Build Status](https://travis-ci.org/rolb15/CFilm.svg?branch=master)](https://travis-ci.org/rolb15/CFilm)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rolb15/CFilm/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rolb15/CFilm/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/rolb15/CFilm/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/rolb15/CFilm/?branch=master)

Introduction

CFilms is a class for displaying screening schedules and details for the scheduled films at Stockholm Filmfestival. 
It's main purpose is to be used together with ANAX-MVC, but can also be used on its own.

License

This software is free software and carries a MIT license.

How to install

To install the package, add the row below to your composer.json file:

"require": {
   "rolb/sfilm": "dev-master"
}

To add CFilms:

$films = new rolb\CFilm\CFilms("apikey", "date");

To get schedule for a certain date:

$html = $films->program("apikey", "date");


To get individual film details ("filmid" must be initially fetched with $films->program):

$html = $films->filmInfo("filmid");



A APIkey from Stockholm Filmfestival is needed and is sent out by email!


