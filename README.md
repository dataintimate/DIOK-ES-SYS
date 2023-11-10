

# Project description

DIOK-ES-SYS is a system for automating email signature generation. It streamlines the process of creating and managing email signatures for individuals or organizations.

## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Installation
1. Clone the repository to your local machine.
   bash
   git clone https://github.com/your-username/DIOK-ES-SYS.git
   

2. Navigate to the project directory.
   bash
   cd DIOK-ES-SYS

3. Make sure you have PHP installed in your computer.

4. Create a database in your localhost using http://localhost/phpmyadmin/

5. Use the below queries to create database tables.

          `CREATE TABLE form_details` (  
             `name varchar(255) NOT NULL,`  
            `title varchar(255) DEFAULT NULL,`  
            `company_name varchar(255) DEFAULT NULL,`  
            `office_no varchar(255) DEFAULT NULL,`    
            `mobile_no varchar(255) DEFAULT NULL,`    
            `web_url varchar(255) DEFAULT NULL,`    
            `email varchar(255) DEFAULT NULL,`   
            `address varchar(255) DEFAULT NULL,`    
            `linkedin_link varchar(255) DEFAULT NULL,`    
            `facebook_link varchar(255) DEFAULT NULL,`    
            `twitter_link varchar(255) DEFAULT NULL,`   
            `instra_link varchar(255) DEFAULT NULL,`    
            `image text DEFAULT NULL,`    
            `templateId int(255) DEFAULT NULL,`    
            `font_family varchar(255) DEFAULT NULL,`    
            `font_size varchar(255) DEFAULT NULL,`    
            `back_color1 varchar(255) DEFAULT NULL,`    
            `back_color2 varchar(255) DEFAULT NULL,`    
            `text_color varchar(255) DEFAULT NULL,`    
            `link_color varchar(255) DEFAULT NULL,`    
            `templateImg text DEFAULT NULL`  
          )`ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;`

         

          `CREATE TABLE template` (
            `tempId int(11) Primary key,`  
            `templates text NOT NULL`  
          ) `ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;`

       

6. Create .env file in the root directory of the project.

7. Open the .env file and configure the database connection settings below.  
`DB_SERVER=localhost`  
`DB_USERNAME=your username`  
`DB_PASSWORD=your database password`  
`DB_NAME=your database name`  

## Usage

select a template of your choice.

<img src="https://github.com/dataintimate/DIOK-ES-SYS/assets/126963748/b109b817-56e2-42d4-8761-6afc29be05d3" alt="App Screenshot" width="600" >  

<br><br>

Select the second tab and fill the necessary fields.  

<img src="https://github.com/dataintimate/DIOK-ES-SYS/assets/126963748/fc816811-1a33-45f5-bb7e-490165f8077e" alt="App Screenshot" width="600" >

<br><br>

Next go to the third tab to stylize your signature.  

<img src="https://github.com/dataintimate/DIOK-ES-SYS/assets/126963748/9ea4f289-80d4-4af7-b5d4-379db60e13c7" alt="App Screenshot" width="600" >

<br><br>

After styling the signature go to the fourth tab and upload an image of your choice.

<img src="https://github.com/dataintimate/DIOK-ES-SYS/assets/126963748/0391db51-2e0f-41c8-b0c3-2dff6c71ea4d" alt="App Screenshot" width="600" >

<br><br>

You can simply copy the email signature by clicking on the "Copy Signature" button.

Then use the copied signature in your preferred email client.

<br>

## License
This project is licensed under MIT License.See the [LICENSE.md](LICENSE) file for details.





