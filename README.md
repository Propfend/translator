Documentation
PROJECT:
• REAL-TIME AUTOMATIC TRANSLATOR

STACK:

PHP - 8.3

LARAVEL - 10.4

LIVEWIRE - 3

TAILWIND CSS - 3

LIBRARIES AND/OR APIS:

GOOGLE TRANSLATOR API
DESCRIPTION:
• translator is a real-time translation application, with the Livewire framework integrated into Laravel for performing AJAX requests, with beautiful and sophisticated design from Tailwind CSS.

INSTRUCTIONS:

• Create a directory, use the following commands in your project terminal:

(obs: PHP and Composer previously installed)

bash
Copy code
-git clone https://github.com/Propfend/translator.git

-cd translator

-composer update

-copy .env.example .env

-php artisan generate:key

-php artisan serve
USE:
• The website presents a simple-to-use interface, within the main container there are two smaller boxes, the input and output of the message to be translated. Type the message in any language into the top <textarea>, and when clicking outside the bar, the text will be translated after approximately half a second.

INFORMATION FOR NERDS:
• The wire:blur function was used in order to translate the sentence as the user clicks outside the text box. The decision was made due to the excessive AJAX requests every time the user types a letter, which can decrease user satisfaction with the site experience.

• The API was integrated through packages and libraries, not directly through HTTP requests, using libraries such as Guzzle or Http, OOP makes everything simpler.
