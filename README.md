# Marine Database

This project provides a global sea port database list organized by country and city.

## Features

- Global Sea Port Database
- User can search by country name
- User can search by country and city name

## Installation

To install the package, use the following Composer command:

```bash
composer require seaport/database

// Import the Marineindex class
use Seaport\Database\Marineindex;

// To get a list of all sea-ports
$list = Marineindex::index();

// To get data by country
$list = Marineindex::search_by_country_code('IN');

// To get data by country and city
$list = Marineindex::search_by_country_city('IN', 'Bangalore');
 


## Issue Reporting and Feature Requests

We welcome feedback, bug reports, and feature requests from users like you! If you encounter any issues or have ideas for improvements, please follow the guidelines below:

### Reporting Issues

If you come across a bug or unexpected behavior, kindly report it to us. When reporting issues, provide as much detail as possible, including:

- A clear and concise description of the problem.
- Steps to reproduce the issue.
- Expected behavior versus actual behavior.
- Any error messages or screenshots.

You can report issues by [creating a new issue](link-to-issue-tracker) on our GitHub repository.

### Feature Requests

If you have ideas for new features or enhancements, we'd love to hear them! When submitting a feature request, include:

- A detailed description of the proposed feature.
- The problem or need the feature addresses.
- Any relevant context or examples.

You can submit feature requests by [creating a new issue](link-to-issue-tracker) on our GitHub repository.

Thank you for contributing to the improvement of our project!

For urgent matters or inquiries, you can also reach out to us directly via email at lalitaquasoft@gmail.com. 


