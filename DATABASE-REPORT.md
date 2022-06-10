## DATABASE_REPORT

## INTRODUCTION
The purpose of this assessment / project is to create a database of your choice or by taking an online data set and to create a site for example I have chosen to create an online site that sells organic products in which the functions of CRUD will be used (create, read, update and delete). A website will also be created with the home page, the page for registering, logging in etc. in which the various functions of CRUD can be performed.

## SYSTEM OVERVIEW

## FRONT END
For the front end of this project, I used HTML, CSS and JavaScript for the creation of my web site linked to my project. (all using visual studio)

HTML: I used it to create the various pages that allows me to layout and format pages connected to each other through links and to insert the various contents in the various web pages.

CSS: I used it as a decoration tool, for example in embellishing my website and I used it to intervene on the formatting of the text, on the positioning of the graphic elements and on the arrangement that these elements will have with respect to the different devices. This is also due to the fact to attract the user's attention.

JavaScript: I used JavaScript for the various forms used for this project for example for the form registration, login and for the FAQ.

## BAKC END
For the back end for my project, I only used two platforms: phpMyAdmin and MySQL. I used these two because I felt more or less comfortable starting this project as I had already used them for various projects.

I used phpMyAdmin because it seemed a little easier for me to create or enter the various data. MySQL (always using phpMyAdmin using the console) to create the various tables.

For the database I have not taken anything from the internet or an existing data set. Being a normal online grocery shop I thought it would be better to enter data created by me, such as the various user data, the price or weight of a product, passwords etc.

## SYSTEM ARCHITECTURE
Below is the general site map of the web page I have made.

![System architecture](map.png)

## KEY DESIGN DECISION
System design: For the system design I used draw myself as it is a very easy tool to use to create a view of the various web pages created for this project. (CRUD)

![System architecture](map.png)

-	Home : The diagram below it’s the interface of the home page.  

-	About: The diagram below it’s the interface of the about page. This is the front of the page where there is a brief description of this site.

-	Contact: The diagram below it’s the interface of the product page. This is the front of the page where uses can use it to contact the owner.

![Contact page](contact.png)

-	Product: The diagram below it’s the interface of the product page. This is the front of the page where there are the various products divided into categories.

-	FAQ: The diagram below it’s the interface of the FAQ page. This is the front of the page where you can find the frequently asked questions that are asked with a small answer in which you will find a small section for asking questions.

![FAQ page](faq.png)

-	Registration form: The diagram below it’s the interface of the registration page. This is the front of the page where new users sign up to create their profile.

![Registratio page](reg.png)

-	Login: The diagram below it’s the interface of the login page. This is the front of the page where existing users access their profile.

![Log in page](log.png)

-	Order: The diagram below it’s the interface of the login page. 

User: 

![User](user.png)

For the user I have created the various sections such as:

-	The name
-	Surname
-	The userid
-	The username
-	E-mail
-	Password
-	Address
-	Telephone number
-	Card number

Product:

![Product](product.png)

For the products I have created the various sections such as:

-	The productid
-	The name of the product
-	Average weight
-	The amount'
-	The price
-	The category
-	And the maximum per order

Orders:

![Order](order.png)

For orders I have created the various sections such as:

-	Orderid
-	The date when the order was placed
-	The date of delivery
-	The total sum
-	The status of the order
-	And the userid

Purchase:

![Purchase](pur.png)

For the purchase I created the various sections such as:

-	The quantity sells
-	Productid
-	Orderid

## SECURITY AND SCALABILITY
Security is one of the most important things in the internet platform because there may be cases where for example some personal data is copied or accessed by strangers for which it is always recommended to protect your data online. some tips to protect your personal data:

-	When creating a password, it is always possible to write more than 10 characters that have at least one capital letter, one lowercase letter, enter some numbers and to be surer that it is a very safe and strong password it is always recommended to also enter a special character, such as a symbol.

-	In any security platform you are always reminded to update every few weeks for example 2 weeks to update your password

-	Create an encrypted / cryptography password. The best thing for passwords would be to use SALT. The reason why is because there are users who tend to choose the same password that is chosen by other people, which is a very common thing. This password is practically generated randomly, but it is never the same for everyone because it is a unique password for example two users use “test1” user1 have the password “test1” and user2 the “test1” but using the SALT user1 get “test1%” and user2 get “test1%t1”


## IMPLEMENTATION
User:
![1](user1.png)
![2](user2.png)
![3](user3.png)
(The screenshot on the up was an old screenshot where I tried to use the SALT, but it didn’t work as I wanted) 
![4](user4.png)

Update user tel. number from 123456789 to 12345678911:
![1](up1.png)
![2](up2.png)
![3](up3.png)

Delete user:
![1](udel1.png)
(The screenshot on the up was an old screenshot where I tried to use the SALT, but it didn’t work as I wanted) 
![2](udel2.png)
![3](udel3.png)

## CONNECT TO PHP
![1](con1.png)
![2](con2.png)
![3](con3.png)
![4](con4.png)

## ORDERS
![1](or1.png)
![2](or2.png)

## LOGOUT
![1](logout1.png)
![2](logout2.png)

## CRUD

### CREATE
![1](create1.png)
![2](create2.png)
![3](create3.png)
![4](create4.png)
![5](create5.png)

### READ
![1](read1.png)
![2](read3.png)
![3](read3.png)
![4](read4.png)
![5](read5.png)
![6](read6.png)
![7](read7.png)
![8](read8.png)
![9](read9.png)

### UPDATE
![1](update1.png)
![2](update2.png)

### DELETE
![1](delete1.png)
![2](delete2.png)

## ER DIAGRAMS
For my project I also used the ERD (Entity Relationship Diagram) model to get what I wanted. I created it to give a small visualization of my project which shows the various entities such as users, objects or concepts relate to each other within a system.

![ER Diagrams](er.png)

## QUERY
Users table:
CREATE TABLE users(
userid INT PRIMARY KEY,
username VARCHAR(32) UNIQUE NOT NULL,
password VARCHAR(32) NOT NULL,
email VARCHAR(32) NOT NULL,
address VARCHAR(32) NOT NULL,
tel VARCHAR(32),
card n VARCHAR(32) NOT NULL,
name VARCHAR(32) NOT NULL,
surname VARCHAR(32) NOT NULL,
shopper tinyint NOT NULL
)

Orders table:
create table orders(
orderid int primary key auto_increment,
del_date DATETIME,
ord_date DATETIME NOT NULL,
tot_amount DECIMAL NOT NULL,
status VARCHAR(10),
userid INT NOT NULL,
FOREIGN KEY (userid) REFERENCES users(userid)
);

Product table:
create table product(
  productid int primary key auto_increment,
  name VARCHAR(32) UNIQUE NOT NULL,
  avg_weight decimal(32) not null,
  quantity decimal (32) not null,
  price decimal(32) not null,
  category decimal(32) not null,
  max_per_order decimal(32) not null
);

Purchase table:
create table purchase(
  sold_quantity decimal (32) not null,
  productid int not null,
  orderid int not null,
  FOREIGN KEY (productid) REFERENCES product(productid),
  FOREIGN KEY (orderid) REFERENCES orders(orderid)
);

## CONCLUSION AND REFLECTION
The site was developed with all the CRUD features, which unfortunately one of them doesn’t work for example the update part I understood more or less how they work in fact I was able to create the various files and connect everything.

Regarding the web page I made it very simple because I thought it didn't have to be a professional one or at least that it is better than what I did. I had more time and especially if I had better remember what had been done last year for HTML, CSS and Java Script I personally think I would have done better. Unfortunately, the website is not complete because I used an old project of mine to have at least the base because I was having too many problems so to simplify the way I used the base of an old project of mine which then all the files from HTML I changed them to PHP to be able to connect anything.

I chose to use a simple database as in creating an online site where they sell products because I thought it was very ideal in using the various functions of the CRUD.

I also had a lot of trouble making the link between visual studio and GitHub. I had to redo this project 2-3 times because I didn't understand how to do it exactly, so I had all the repositories a bit mixed up so when I had to commit, they were saved in another repository, but I managed to solve the problem. I took inspiration and tried to solve most of the problems using the W3school site because they have so many demonstrations with examples.

Another small problem with this project is that for the products they send the products into the database. Unfortunately I didn't succeed because I didn't have the time to be able to put the product info.

I wanted to be able to do more unfortunately not having the necessary time and above all having started it a little later for various problems for the future I think I have to organize the times well and not focus on specific things. For the future if I have another project / assessment like this I would like to take more time to be able to learn well the various tools to create a database. For example, I used phpMyAdmin and MySQL because they were tools I had used before and I knew more or less how they worked. I didn't use Mongodb because I couldn't keep up with the class because it seemed more complicated than the other tools. If I had done a part with Mongodb I think I could have done more.
