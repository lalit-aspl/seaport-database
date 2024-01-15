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



 
## License
 
This project is licensed under the MIT License .

MIT License

Copyright (c) [2024] [Lalit Kumar]  

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

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


