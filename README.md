# real-estate-scraping
This PHP project demonstrates how to use the Google Custom Search API to search for a given address and extract relevant information.
# Prerequisites
<ul>
    <li>PHP 7.x</li>
    <li><a href="https://developers.google.com/custom-search/docs/tutorial/creatingcse" target="_blank">Google API Key (for Google Custom Search API) </a></li>
    <li><a href="https://programmablesearchengine.google.com/controlpanel/all" target="_blank">Google Custom Search Engine (CX) ID</a></li>
</ul>
# Installation
<ol>
    <li>Clone the repository to your local machine:</li>
    `git clone https://github.com/your-username/your-repo.git`
    <li>Navigate to the project directory:</li>
    `cd your-repo`
    <li>Install dependencies (none required for this project):</li>
    `composer install`
    <li>Open index.php in your preferred code editor and update the following variables with your Google API Key and Custom Search Engine ID:</li>
    `$api_key = 'YOUR_API_KEY';
        $cx = 'YOUR_CX';`
</ol>

# Usage
Run the project using a local server or your preferred PHP development environment. You can test the application by accessing <a href="http://127.0.0.1:8000/api/search">http://127.0.0.1:8000/api/search</a>in your browser.

# Explanation
The project makes use of the Google Custom Search API to search for a given address and then retrieves additional information from the result page, including structured data found within the JavaScript digitalData variable.
# Example
$address = urlencode('30 George, Box Hill NSW 2765');
$url = 'https://www.googleapis.com/customsearch/v1?key='.$api_key.'&cx='.$cx.'&q='.$address;

The script fetches the search results and then extracts information from the target webpage, such as the JSON data within the <script> tag.
## License

This project is licensed under the [Creative Commons Attribution-NonCommercial 4.0 International License](LICENSE).

You are free to:

- Share — copy and redistribute the material in any medium or format
- Adapt — remix, transform, and build upon the material

Under the following terms:

- Attribution — You must give appropriate credit, provide a link to the license, and indicate if changes were made. You may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
- NonCommercial — You may not use the material for commercial purposes.

See the [full license](https://creativecommons.org/licenses/by-nc/4.0/) for details.

# Acknowledgements
<ul>
    <li><a href="https://developers.google.com/custom-search/docs/tutorial/introduction">Google Custom Search API Documentation</a></li>
    <li><a href="https://www.php.net/manual/en/book.pcre.php">Regular Expressions - PHP Manual</a></li>
</ul>

