# Plain PHP
## _Feedback Form_

### Preview
![image](https://user-images.githubusercontent.com/66753915/219335115-130bfb1b-1d58-4b68-ab8c-1470d08eb915.png)

This is a simple project written in PHP that allows users to provide feedback about the PHP language. The feedback is stored in a MySQL database and can be viewed on a separate page called "History".

### Prerequisites
To run this project, you must have the following installed on your machine:
- PHP
- XAMPP (Apache server + MySQL)

### Installation
1. Clone this repository into the `htdocs` directory of your XAMPP installation:
    ```bash
    git clone https://github.com/bratuchedot/plain-php.git
    ```
2. Start the Apache and MySQL servers in XAMPP.
3. Create a new MySQL database called `php_plain`. Then create new table `feedback` with **5** columns (id, name, email, body, date). Create new local user (check **/config/database.php** file for credentials) and grant all privileges.
4. Open your web browser and navigate to `http://localhost/plain-php/` to view the feedback app.

### Usage
To use the PHP feedback form, simply enter your feedback in the text box and click the **"Send"** button. Your feedback will be saved to the feedback table in the MySQL database. To view the saved feedback, click the **"History"** link in the navigation bar. This will take you to a page that displays all of the saved feedback, along with the date and time that it was submitted.

### License
This project is not licensed and is available for use without any restrictions.
