# TerminalCLI

## index.html

This is the main HTML file for the project. It includes the user interface and the JavaScript code for the terminal commands.
Used [terminal jquery](https://github.com/jcubic/jquery.terminal?tab=readme-ov-file#installation) to style and run scripts in this terminal project.

## server.php

This is the server-side script that handles the `add` command from the terminal. It receives a POST request with a name and a URL, adds them to the [`links.json`](links.json) file, and sends a response indicating whether the operation was successful.

## links.json

This is a JSON file that stores the URLs added through the terminal. Each URL is associated with a name, and the [`server.php`](server.php) script adds new URLs to this file.

## Usage

Open [`index.html`](index.html) in a web browser to start using the terminal.
Type help command to see the list of available commands.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

<!--  # This will work as @name is unique so the db counts on each refresh and save. -->

![Visitors](https://moe-counter.glitch.me/get/@navaranjithsaiTerminalCLI)
