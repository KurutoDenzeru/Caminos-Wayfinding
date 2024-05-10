# <h1 align="left"> 🗺️ Caminos-Wayfinding </h1>
ABES Wayfinding system website is designed to help students, parents, and visitors easily navigate their way through the school. The website provides an interactive map of the school, highlighting important areas such as classrooms, restrooms, cafeteria, and administrative offices.

<br>

# ⚙ Features of the System
The following are the main features of the system based on the guidelines given to the developers:

- Interactive Map: Easily explore the school layout, find classrooms, restrooms, cafeteria, and offices, with click-to-view details and directions.
- Step-by-step Directions: Search and receive precise directions to any location within the school.
- Accessibility: Accessible from any device with internet, featuring a user-friendly interface for seamless navigation.

<br>

# 🎢 Compiling
Compiling requires using cross-platform web server solution stack package or newer. XAMPP, WampServer, MAMP and etcetera... are known to work for compiling Caminos.

Your solution stack software should run the modules of ```Apache``` & ```MySQL```, with their services of ```PID(s)``` & ```Port(s)``` having their respective numbers.

Simply check your cli/audit logs below from your software for Caminos:

```txt
  [Apache] 	Attempting to start Apache app...
  [Apache] 	Status change detected: running
  [mysql] 	Attempting to start MySQL app...
  [mysql] 	Status change detected: running
```
To test Caminos itself, firstly, we have to extract or place it within where is your Solution stack software is installed. After knowing the location that depends on the letters of your drive e.g. ```Drive for Work(C:)```, navigate to its repositories like this:
```txt
  [xampp] -> [htdocs] -> [Folder name of the System]
```

<br >
Additionally, be sure to also extract our included <code>.sql</code> file, and import it within <code>http://localhost/phpmyadmin/</code>.

<br>
<br>
Testing out the system just requires a modern browser of your choice, and entering the url <code>http://localhost/Folder name of the system</code>.

<br>
<br>

# 🌎 Copyright
Caminos is Copyright © 2022 – onwards Kurt Calacday. It is distributed under the <a href="https://opensource.org/licenses/MIT">MIT License</a> A copy of the license is available in the distributed LICENSE file.

Caminos contains the following third-party libraries:
- <a href="https://github.com/topics/a-star-algorithm">A* Algorithm</a>, a graph traversal and path search algorithm, which is used in many fields of computer science due to its completeness, optimality, and optimal efficiency.
- <a href="https://www.apachefriends.org/">XAMPP</a>,  a free and open-source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and Perl programming languages.
- <a href="https://www.php.net/">PHP</a>,  general-purpose scripting language geared toward web development.
- <a href="https://tailwindcss.com/">Tailwind</a>,  an open source CSS framework. The main feature of this library is that, unlike other CSS frameworks like Bootstrap, it does not provide a series of predefined classes for elements such as buttons or tables.
- <a href="https://api.jquery.com/jquery.ajax/">jQuery AJAX</a>, a set of web development techniques that uses various web technologies on the client-side to create asynchronous web applications.
- <a href="https://www.sqlite.org/">SQLite</a>, a database engine written in the C programming language.

If you are a web developer and wish to license Caminos for commercial usage, please email kurtdenzel51@gmail.com for more information.
