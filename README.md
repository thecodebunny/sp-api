# Selling Partner API for PHP
A PHP library for connecting to Amazon's [Selling Partner API](https://github.com/amzn/selling-partner-api-docs/).

## Features

* Supports all Selling Partner API operations (for Sellers and Vendors) as of 7/2/2021 ([see here](#supported-api-segments) for links to documentation for all calls)
* Supports applications made with both IAM user and IAM role ARNs ([docs](#setup))
* Automatically generates Restricted Data Tokens for all calls that require them -- no extra calls to the Tokens API needed
* Includes a [`Document` helper class](#uploading-and-downloading-documents) for uploading and downloading feed/report documents


## Installation

`composer require thecodebunny/sp-api`


## Getting Started