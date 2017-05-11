# Info124HW2
Mike Duong 69881873

Bryan Linebaugh 49831189

UCI Informatics 124 HW2 Spring 2017

URL Address:

http://andromeda-42.ics.uci.edu:5042

Login:

- Use ics account username (For Putty Session)
- Run command "gsu inf124grp12"
- Login using personal ics password
- cd ..
- cd inf124grp12
- Done

Start server : /usr/sbin/httpd -f /home/inf124grp12/apache/conf/httpd.conf

Stop Server : /usr/sbin/httpd -f /home/inf124grp12/apache/conf/httpd.conf -k stop

Refer to Info124HW1 high level description of website layout

Summary:

The website is a high end clothing ecommerce website that specializes in shirts and pants.
There is a navigation bar above that allows the user to move from page to page and also a 
footer below. Both the navigation bar and the footer are stored in separate php files and
called dynamically. The index/landing page gives a brief description of the website and a 
table of all the available products for sell with their image and price. The product names,
image, and price are all called dynamically from the database. At the top of almost every
page it will call the pdo php file to connect to the database. Once connected the page will
query the specific columns required for that page. The index page requires product name,
image, and price.

The product page provides the details of each individual item from the index/landing page.
Similarly to the index/landing page, the detailed information for each item is called
dynamically from the database. The page will query product name, id, price, composition,
wash instructions, description, and four images. This is done for all the products. When 
the "Order" button is clicked, a modal window will pop up and a billing form will be 
provided to the user to fill out.

The billing form allows the user to fill out their information for the sake of ordering the
item. All forms must be filled out correctly, otherwise the website will give a pop up 
warning sign. Ajax is used here twice; to retrieve the user's city and tax rate when they 
enter their zip code. The database stores two csv files for Ajax; one contains zip codes 
and their respective cities; the other contains zip codes and their respective tax rates.
A subtotal and grand total is calculated based on the quantity of the items and the tax
rate. When the form is submitted, the user information is stored into the database along
with a unique id. The user is then taken to a confirmation/process page that displays the
user's personal information.

The company and about us page provide additional information about the company as well as
the developers of the website. 

The js folder contains the js file used to generate the javascript for the php documents.

The css folder contains the css file used to generate the css for the php documents.

The images folder contains all the images used for the website.
